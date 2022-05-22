<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('dashboard.product.index', compact('product'));
    }

    public function getProducts(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn =
                        '
                            <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-id="' . $row->id . '" class="edit btn btn-success btn-sm"
                                data-attr="' . url('product/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '" class="token_delete">
                    ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        $Categories = Category::all();
        $create = view('dashboard.product.parts.create', compact('Categories'))->render();
        return response()->json(array('success' => true, 'html' => $create, 'Categories' => $Categories));
    }

    public function store(Request $request)
    {
        $data = $request->except('categories');

        $product= Product::create($data);
        $product->categories()->attach($request->categories);

        return redirect()->back();
    }

}
