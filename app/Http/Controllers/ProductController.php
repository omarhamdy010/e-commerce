<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\product_image;
use App\Models\product_offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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
            $data = Product::with('offer', 'images')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn =
                        '<a data-toggle="modal" data-target=".editModal" data-id="' . $row->id . '" data-offer="' . $row->offer . '" class="edit btn btn-success btn-sm editProduct"
                                data-attr="' . url('product/' . $row->id . '/edit') . '" title="show">Edit</a>
                                    ' . csrf_field() . '
                                    ' . method_field("DELETE") . '
                            <a class="btn btn-danger btn-sm delete"  data-id="' . $row->id . '" title="delete">
                            DELETE</a>
                            <input type="hidden" value="' . csrf_token() . '"  class="token_delete">';
                    return $actionBtn;
                })->addColumn('images', function ($artist) {
                    foreach ($artist->images as $image) {
                        $url = asset($image->path);
                        return '<img src="' . $url . '" border="0" width="40" class="img-rounded" align="center" />';
                    }
                })->rawColumns(['images', 'action'])
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
                Image::make($file)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/products/' . $file->hashName()));
                $path = $file->store('/uploads/products');
                $insert['name'] = $file->hashName();
                $insert['path'] = $path;
                $insert['product_id'] = $product->id;
                $insert['is_default'] = ($key == 0) ? 1 : 0;;
                product_image::create($insert);
            }
        }

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
<<<<<<< HEAD
        $product = Product::with('categories', 'offer', 'images')->where('id', $request->id)->first();
        $offers = product_offer::where('product_id', $product->id)->first();
        $ids = $product->categories->pluck('id')->toArray();


        $edit = view('dashboard.product.parts.edit', compact('product', 'categories', 'offers', 'ids'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'product' => $product, 'categories' => $categories, 'offers' => $offers, 'ids' => $ids));
=======
        $product = Product::with('categories', 'offer', 'images')->find($request->get('id'));
        $offers = product_offer::where('product_id', $product->id)->first();

        foreach ($product->images as $image){
            $images[] = $image->name;
        }

        $edit = view('dashboard.product.parts.edit', compact('product', 'categories', 'offers', 'images'))->render();
        return response()->json(array('success' => true, 'html' => $edit, 'product' => $product, 'categories' => $categories, 'images' => $images, 'offers' => $offers));
>>>>>>> 3aa03afd107943efc6bab22f3da3188a48fba72f
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
<<<<<<< HEAD
            foreach ($product->images()->get() as $image) {
                Storage::disk('public_upload')->delete('products/' . $image->name);
            }
            foreach ($request->file('images') as $key => $file) {
                $product->images()->delete();
                foreach ($request->file('images') as $key => $file) {
                    Image::make($file)->resize(100, 100, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path('/uploads/products/' . $file->hashName()));
                    $path = $file->store('/uploads/products');
                    $insert['name'] = $file->hashName();
                    $insert['path'] = $path;
                    $insert['product_id'] = $product->id;
                    $insert['is_default'] = ($key == 0) ? 1 : 0;;
                    $product->images()->create($insert);
                }
            }
        }
        $product->categories()->attach($request->categories);
=======

            foreach ($product->images()->get() as $image) {
                Storage::disk('public_upload')->delete('products/' . $image->name);
            }

            foreach ($request->file('images') as $key => $file) {
                Image::make($file)->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('/uploads/products/' . $file->hashName()));
                $path = $file->store('/uploads/products');
                $insert['name'] = $file->hashName();
                $insert['path'] = $path;
                $insert['product_id'] = $product->id;
                $insert['is_default'] = ($key == 0) ? 1 : 0;;
                $product->images()->create($insert);
            }
        }

        if ($request->get('categories')) $product->categories()->attach($request->get('categories'));

>>>>>>> 3aa03afd107943efc6bab22f3da3188a48fba72f
        toast('product updated successfully!', 'success');

        return response()->json(['success' => true, 'message' => 'Data updated successfully']);
    }

    public function destroy(Product $product)
    {
        foreach ($product->images()->get() as $image) {
            Storage::disk('public_upload')->delete('products/' . $image->name);
        }
        $product->delete();
        toast('product deleted successfully!', 'success');
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
