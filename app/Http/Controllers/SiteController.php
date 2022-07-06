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

    public function shop()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('site.shop', compact('products','categories'));
    }

    public function add_to_cart(Request $request)
    {
        $product = Product::where('id', $request->get('id'))->first();

        $count = count(Session::get('cart',[]));
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
        return response()->json(['success' => 'Product added to cart successfully!', 'count' => $count]);

    }

    public function cart()
    {
        return view('site.cart');
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

}
