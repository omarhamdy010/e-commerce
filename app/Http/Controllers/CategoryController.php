<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function index()
    {

        $parentcategories = Category::where('parent_id', 0)->get();
        $subcategories = Category::where('parent_id', '!=', 0)->get();

        return view('dashboard.category.index', compact('subcategories', 'parentcategories'));
    }

    public function create()
    {
        $parentcategories = Category::where('parent_id', 0)->get();
        $subcategories = Category::where('parent_id', '!=', 0)->get();
        $categories = Category::all();

        return view('dashboard.category.create', compact('parentcategories', 'categories', 'subcategories'));
    }

    public function store(Request $request)
    {
//            dd($request->all());
        if ($request->parentcategory_order) {
            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image', 'parentcategory_order']);
            if ($request->image) {
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }
            $data['category_order'] = $request->parentcategory_order;
        }

        if ($request->subcategory_order) {
            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image', 'subcategory_order']);
            if ($request->image) {
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }
            $data['category_order'] = $request->subcategory_order;
        }
        Category::create($data);
        return redirect()->back();
    }

    public function edit(Category $category)
    {
        $parentcategories = Category::where('parent_id', 0)->get();
        $subcategories = Category::where('parent_id', '!=', 0)->get();
        $categories = Category::all();

        return view('dashboard.category.edit', compact('subcategories', 'categories', 'parentcategories', 'category'));
    }

    public function update(Request $request , Category $category)
    {
//            dd($request->all());
        if ($request->parentcategory_order) {
            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image', 'parentcategory_order']);
            if ($request->image) {
                if ($category->image_path != 'default.png')
                {
                    Storage::disk('public')->delete(asset("uploads/category/{$category->image}"));
                }
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }
            $data['category_order'] = $request->parentcategory_order;
        }

        if ($request->subcategory_order) {
            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image', 'subcategory_order']);
            if ($request->image) {
                if ($category->image_path!='default.png')
                {
                    Storage::disk('public')->delete(asset("uploads/category/{$category->image}"));
                }
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }
            $data['category_order'] = $request->subcategory_order;
        }
        $category->update($data);
        return redirect()->back();
    }
}
