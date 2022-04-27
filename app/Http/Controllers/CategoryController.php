<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.index', compact('categories'));
    }

    public function getCategory(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<form action="' . url('category/' . $row->id) . '" method="POST">
                 ' . csrf_field() . '
                  ' . method_field("DELETE") . '
                  <a href="' . url('category/' . $row->id . '/edit') . '" class="edit btn btn-success btn-sm">Edit</a>
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm(\'Are You Sure Want to Delete?\')">Delete</button>
                    </form>';
                    return $actionBtn;
                })->addColumn('image', function ($row) {

                    return '<img src=" ' . $row->image_path . ' " height="75px" width="75px" />';
                })->addColumn('parent_id', function ($row) {
                    return ($row->parent_id==0?'main category' : $row->parent()->first()->name);
                })
                ->rawColumns(['action', 'image','parent_id'])
                ->make(true);
        }
    }

    public function viewRender(Request $request)
    {
        $viewRender = view('viewRend')->render();
        return response()->json(array('success' => true, 'html' => $viewRender));
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
        toast('Category created successfully!', 'success');

        return redirect()->back();
    }

    public function ajaxstore(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->except('image');
        if ($request->image) {
            $data['image'] = $request->image->hashName();
            $request->image->move(public_path('/uploads/category/'), $data['image']);
        }

        Category::create($data);
        toast('Category created successfully!', 'success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function getcategoryorder(Request $request)
    {
        $categories = Category::where('parent_id', $request->category_id)->count();
        return response()->json(array('success' => true, 'order_category' => $categories + 1));

    }

    public function edit(Category $category)
    {
        $parentcategories = Category::where('parent_id', 0)->get();
        $subcategories = Category::where('parent_id', '!=', 0)->get();
        $categories = Category::all();

        return view('dashboard.category.edit', compact('subcategories', 'categories', 'parentcategories', 'category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->except(['image']);
        if ($request->image) {
            if ($category->image != 'default.png') {
                Storage::disk('public_upload')->delete('category/' . $category->image);
            }
            $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/category/' . $request->image->hashName()));
            $data['image'] = $request->image->hashName();
        }
        $category->update($data);
        toast('Category edited successfully!', 'success');

        return redirect()->back();
    }

    public function updateAJAX(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $data = $request->except(['image']);
        if ($request->image) {
            if ($category->image != 'default.png') {
                Storage::disk('public_upload')->delete('category/' . $category->image);
            }
            $img = Image::make($request->image)->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/uploads/category/' . $request->image->hashName()));
            $data['image'] = $request->image->hashName();
        }

        $category->update($data);
        toast('Category edited successfully!', 'success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function destroy(Category $category)
    {
        if ($category->image != 'default.png') {
            Storage::disk('public_upload')->delete('category/' . $category->image);
        }

        foreach ($category->children()->get() as $child) {
            if ($child->image != 'default.png') {
                Storage::disk('public_upload')->delete('category/' . $child->image);
            }
        }

        $category->children()->delete();
        $category->delete();
        toast('Category deleted successfully!', 'success');

        return redirect()->back();
    }
}
