<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('frontend.pages.product_list', compact('products'));
    }

    public function wishlist()
    {

    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }

//    public function addToCart($id)
//    {
//        $product = Product::find($id);
//        $user_id = auth()->user()->id; // get the authenticated user ID
//
//        // Check if the product is already in the cart
//        $cart = Cart::where('product_id', $id)->first();
//        if ($cart) {
//            $cart->quantity++;
//            $cart->save();
//        } else {
//            // Create a new cart item
//            $cart = new Cart();
//            $cart->user_id = $user_id;
//            $cart->vendor_id = $product->vendor_id;
//            $cart->product_id = $id;
//            $cart->quantity = 1;
////        $cart->price = $product->price;
////        $cart->image = $product->image;
//            $cart->save();
//        }
//        return redirect()->back()->with('success', 'Product added to cart successfully!');
//    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }


    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            return response()->json(['success' => 'Cart updated successfully']);
        }
    }


    public function remove(Request $request, $id)
    {
        $cart = session()->get('cart');
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Product removed from cart successfully');
        return redirect()->back();
    }


}
