<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\product_image;
use App\Models\product_offer;
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
                            <a data-toggle="modal" data-target=".editModal" data-id="' . $row->id . '" class="edit btn btn-success btn-sm editProduct"
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
//        dd($request->all());
        $product= Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'quantity'=>$request->quantity,
            'price'=>$request->price
        ]);
        if($request->offer){
            if ($request->bounce){
                $data =[
                    'bounce'=>$request->bounce,
                    'offer_type'=>$request->offer_type,
                    'discount_value'=>$request->discount_value,
                    'product_id'=>$product->id,
                    ];
                product_offer::create($data);
            }

            if (!$request->bounce)
                {
                product_offer::create([
                    'bounce'=>$request->bounce,
                    'offer_type'=>$request->offer_type,
                    'discount_value'=>$request->discount_value,
                    'product_id'=>$product->id,
                ]);
            }
        }
        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('uploads/products', $name, 'public');

                product_image::create([
                    'image' => $name,
                    'product_id'=>$product->id,
                ]);
            }
        }
        $product->categories()->attach($request->categories);

        return redirect()->back();
    }

    public function edit(Request $request)
    {
//        dd($request->all());
        $categories = Category::all();
        $product = Product::find($request->id);
        $offers = product_offer::where('product_id',$product->id)->first();
        $edit = view('dashboard.product.parts.edit', compact('product','categories','offers'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'product' => $product,'categories'=>$categories ,'offers'=>$offers));
    }



}
