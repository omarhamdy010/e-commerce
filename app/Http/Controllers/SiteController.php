<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
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
        return view('site.shop', compact( 'products', 'categories'));
    }

    public function add_to_cart(Request $request)
    {
//        dd($request->all());
//        Session::forget('cart');
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
//dd($cart,$cart[$request->id]['quantity']);

        $viewRender = view('site.list_cart')->render();
        return response()->json(['success' => 'Product added to cart successfully!','quantity'=>$cart[$request->id]['quantity'], 'count' => $count, 'html' => $viewRender]);
    }

    public function update_cart(Request $request)
    {
        $total = 0;
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
        foreach (\Illuminate\Support\Facades\Session::get('cart') as $cart) {
            $price = $cart['price'];
            $quantity = $cart['quantity'];
            $total += $price * $quantity;
        }
        return response()->json(['total' => $total ]);
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

        $rate = Rating::where('product_id', $request->get('id'))->first();

        $viewRender = view('site.quick_view', compact('product', 'rate'))->render();

        return response()->json(['success' => 'Product view successfully!', 'html' => $viewRender]);

    }

    public function quick_view()
    {
        return view('site.quick_view');
    }

    public function cart()
    {
        return view('site.cart');
    }

    public function wishlist()
    {
        return view('site.wishlist');
    }

    public function deleteCart($id)
    {
        $count  = count(Session::get('cart'));
        $cart   = Session::get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $count--    ;
        $total=0    ;
        foreach (\Illuminate\Support\Facades\Session::get('cart') as $cart) {
            $price      = $cart['price'];
            $quantity   = $cart['quantity'];
            $total      += $price * $quantity;
        }
        return response()->json(['success' => 'Product deleted from cart successfully!' , 'total' => $total , 'count' => $count]);
    }

    public function deleteWishlist($id)
    {
        $wishlist = Session::get('wishlist');
        unset($wishlist[$id]);
        session()->put('wishlist', $wishlist);

        return response()->json(['success' => 'Product deleted from Wishlist successfully!']);
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
