<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $parentcategories = Category::where('parent_id', 0)->get();
        $categories = Category::all();
        // return view('dashboard.category.index', compact('categories','parentcategories'));

        if ($request->ajax()) {
            $data = Category::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        
        return view('dashboard.category.index', compact('categories','parentcategories'));
    }
    // public function create()
    // {
    //     $parentcategories = Category::where('parent_id', 0)->get();
    //     $subcategories = Category::where('parent_id', '!=', 0)->get();
    //     $categories = Category::all();

    //     return view('dashboard.category.create', compact('parentcategories', 'categories', 'subcategories'));
    // }
    public function store(Request $request)
    {
//            dd($request->all());

            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image']);
            if ($request->image) {
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }

        Category::create($data);
        toast('Category created successfully!','success');

        return redirect()->back();
    }
    public function ajaxstore(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->except('image');
        if ($request->image) {
            $data['image'] = $request->image->hashName();
            $request->image->move(public_path('/uploads/category/'), $data['image']);
        }

        Category::create($data);
        toast('Category created successfully!','success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
    public function getcategoryorder(Request $request){
        $categories= Category::where('parent_id',$request->category_id)->get();
        return response()->json(array('success' => true,'order_category'=> count($categories)+1));

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
            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image']);
            if ($request->image) {
                if ($category->image != 'default.png')
                {
                    Storage::disk('public_upload')->delete('category/' . $category->image);
                }
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }
        $category->update($data);
        toast('Category edited successfully!','success');

        return redirect()->back();
    }
    public function updateAJAX(Request $request , Category $category)
    {
//            dd($request->all());
            $request->validate([
                'name' => 'required',
            ]);
            $data = $request->except(['image']);
            if ($request->image) {
                if ($category->image != 'default.png')
                {
                    Storage::disk('public_upload')->delete('category/' . $category->image);
                }
                $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/category/' . $request->image->hashName()));
                $data['image'] = $request->image->hashName();
            }

        $category->update($data);
        toast('Category edited successfully!','success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
    public function destroy(Category $category){
        if ($category->image!='default.png')
        {
            Storage::disk('public_upload')->delete('category/' . $category->image);
        }

        foreach ($category->children()->get() as $child){
            if ($child->image!='default.png')
            {
                Storage::disk('public_upload')->delete('category/' . $child->image);
            }
        }

        $category->children()->delete();
        $category->delete();
        toast('Category deleted successfully!','success');

        return redirect()->back();
    }
}
