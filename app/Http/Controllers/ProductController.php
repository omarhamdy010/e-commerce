<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\product_image;
use App\Models\product_offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        $product = Product::all();
//        $image = Product::with('images')->where('is_default',1)->get();
        return view('dashboard.product.index', compact('product', 'Categories'));
    }

    public function getProducts(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::with('offer')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn =
                        '
                            <a data-toggle="modal" data-target=".editModal" data-id="' . $row->id . '" data-offer="' . $row->offer . '" class="edit btn btn-success btn-sm editProduct"
                                data-attr="' . url('product/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '"  class="token_delete">
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
        $validatedData = $request->validate([
            'images' => 'required',
            'images.*' => 'mimes:jpg,png,jpeg,gif,svg'
        ]);

        $product = Product::create([
            'en' => ['title' => $request->en['title'], 'description' => $request->en['description']],
            'ar' => ['title' => $request->ar['title'], 'description' => $request->ar['description']],
            'quantity' => $request->get('quantity'),
            'price' => $request->get('price'),
        ]);
        if ($request->get('offer')) {
            if ($request->get('value')) {
                $data = [
                    'value' => $request->get('value'),
                    'product_id' => $product->id,
                ];
                product_offer::create($data);
            } elseif ($request->get('amount')) {
                $data = [
                    'amount' => $request->get('amount'),
                    'product_id' => $product->id,
                ];
                product_offer::create($data);
            } elseif ($request->get('percentage')) {
                product_offer::create([
                    'percentage' => $request->get('percentage'),
                    'product_id' => $product->id,
                ]);
            }
        }

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $path = $file->store('public/uploads/products');
                $name = $file->getClientOriginalName();
                ($key == 0) ? $default = 1 : $default = 0;
                $insert['name'] = $name;
                $insert['path'] = $path;
            }
            $insert['product_id'] = $product->id;
            $insert['is_default'] = $default;
        }
        product_image::create($insert);
        $product->categories()->attach($request->categories);

        toast('product created successfully!', 'success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function edit(Request $request)
    {
//        dd($request->all());
        $categories = Category::all();
        $product = Product::with('categories', 'offer', 'images')->find($request->id);
        $offers = product_offer::where('product_id', $product->id)->first();
        $edit = view('dashboard.product.parts.edit', compact('product', 'categories', 'offers'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'product' => $product, 'categories' => $categories, 'offers' => $offers));
    }

    public function update(Request $request, Product $product)
    {
        $product->update([
            'en' => ['title' => $request->en['title'], 'description' => $request->en['description']],
            'ar' => ['title' => $request->ar['title'], 'description' => $request->ar['description']],
            'quantity' => $request->get('quantity'),
            'price' => $request->get('price'),
        ]);
        if ($request->offer) {
            $product->offer()->updateOrCreate(
                ['product_id' => $product->id,
                ], [
                    'bounce' => $request->bounce,
                    'amount' => $request->amount,
                    'value' => $request->value,
                    'percentage' => $request->percentage,
                ]
            );
        }
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $key => $file) {
                $path = $file->store('public/uploads/products');
                $name = $file->getClientOriginalName();
                ($key == 0) ? $default = 1 : $default = 0;
                $insert['name'] = $name;
                $insert['path'] = $path;
            }
            $insert['product_id'] = $product->id;
            $insert['is_default'] = $default;
        }
        $product->images()->update($insert);
        $product->categories()->attach($request->categories);
        toast('product updated successfully!', 'success');

        return response()->json(
            [
                'success' => true,
                'message' => 'Data updated successfully'
            ]
        );
    }

    public function destroy(Product $product)
    {


        foreach ($product->images()->get() as $image) {
            Storage::disk('public_upload')->delete('product/' . $image->image);
        }

        $product->delete();
        toast('product deleted successfully!', 'success');
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
