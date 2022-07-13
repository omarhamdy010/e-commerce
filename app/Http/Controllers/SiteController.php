<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('site.index', compact('categories'));
    }

    public function filter(Request $request)
    {
        if ($request->sort) {
            if ($request->sort == 1) {
                $products = Product::orderBy('price', 'asc')->get();
            } else {
                $products = Product::orderBy('price', 'DESC')->get();
            }
            $viewRender = view('site.filter_number', compact('products'))->render();
            return response()->json(array('success' => true, 'html' => $viewRender));
        } else {
            $cat = Category::with('products')->where('id', $request->id)->first();
            $viewRender = view('site.filter', compact('cat'))->render();
            return response()->json(array('success' => true, 'html' => $viewRender));
        }
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('site.shop', compact('products', 'categories'));
    }

    public function add_to_cart(Request $request)
    {
        $product = Product::where('id', $request->get('id'))->first();
        $count = count(Session::get('cart', []));
        $cart = Session::get('cart', []);
        if (isset($cart[$request->get('id')])) {
            $cart[$request->get('id')]['quantity']++;
        } else {
            $cart[$request->get('id')] = [
                'id' => $request->get('id'),
                'quantity' => 1,
                'price' => $product->price,
                'title' => $product->title,
                'description' => $product->description,
                'image' => $product->default_image->name
            ];
            $count++;
        }
        Session::put('cart', $cart);
        $viewRender = view('site.list_cart')->render();
        return response()->json(['success' => 'Product added to cart successfully!', 'count' => $count, 'html' => $viewRender]);
    }
    public function add_to_wishlist(Request $request)
    {
        $product = Product::where('id', $request->get('id'))->first();
        $wishlist = Session::get('wishlist', []);
            $wishlist[$request->get('id')] = [
                'id' => $request->get('id'),
                'price' => $product->price,
                'title' => $product->title,
                'description' => $product->description,
                'image' => $product->default_image->name
            ];

        Session::put('wishlist', $wishlist);
//        $viewRender = view('site.list_cart')->render();
        return response()->json(['success' => 'Product added to wishlist successfully!']);
    }
    public function quickview(Request $request)
    {
        $product = Product::with('images')->where('id', $request->get('id'))->first();

        $viewRender = view('site.quick_view',compact('product'))->render();
        return response()->json(['success' => 'Product view successfully!' ,'html'=>$viewRender]);
    }

    public function cart()
    {
        return view('site.cart');
    }

    public function wishlist()
    {
        return view('site.wishlist');
    }
    public function quick_view()
    {
        return view('site.quick_view');
    }

    public function deleteCart($id)
    {
        $count = count(Session::get('cart'));
        $cart = Session::get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $count--;
        return response()->json(['success' => 'Product deleted from cart successfully!', 'count' => $count]);
    }

    public function search(Request $request)
    {
        if ($request->search) {
            $products = Product::when($request->search, function ($query) use ($request) {
                return $query->whereTranslationLike('title', '%' . $request->search . '%');
            })->get();
            return view('site.search', compact('products'));
        }
        return redirect()->back();
    }

}
