<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
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
                    $actionBtn =
                        '
                            <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-id="' . $row->id . '" class="edit btn btn-success btn-sm"
                                data-attr="' . url('category/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '" class="token_delete">
                    ';
                    return $actionBtn;
                })->addColumn('image', function ($row) {

                    return '<img src=" ' . $row->image_path . ' " height="75px" width="75px" />';
                })->addColumn('parent_id', function ($row) {
                    return ($row->parent_id == 0 ? 'main category' : $row->parent()->first()->name);
                })
                ->rawColumns(['action', 'image', 'parent_id'])
                ->make(true);
        }
    }

    public function create()
    {
        $parentcategories = Category::where('parent_id', 0)->get();

        $categories = Category::all();

        $category = Category::latest()->first();

        $create = view('dashboard.category.parts.create')->with(['parentcategories' => $parentcategories, 'categories' => $categories, 'category' => $category])->render();

        return response()->json(array('success' => true, 'html' => $create, 'parentcategories' => $parentcategories, 'categories' => $categories, 'category' => $category));
    }

    public function ajaxstore(Request $request)
    {
//dd($request->all());
          $request->validate([
              'ar.name' => 'required|unique:category_translations,name',
              'en.name' => 'required|unique:category_translations,name',
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

    public function edit(Request $request)
    {

        $parentcategories = Category::where('parent_id', 0)->where('id', '!=', $request->id)->get();
        $category = Category::find($request->id);

        $editview = view('dashboard.category.parts.edit')->with(['parentcategories' => $parentcategories, 'category' => $category])->render();

        return response()->json(array('success' => true, 'html' => $editview, 'parentcategories' => $parentcategories));
    }

    public function update(Request $request, Category $category)
    {

        $request->validate([
            'ar.name' => 'required|unique:category_translations,name',
            'en.name' => 'required|unique:category_translations,name',
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

        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
