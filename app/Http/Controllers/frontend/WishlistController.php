<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $wishlist_items = auth()->user()->wishlist()->with('product')->get();
        return view('frontend.pages.wishlist', compact('wishlist_items'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $user_id = auth()->user()->id;
        $product_id = $request->product_id;

        // Check if the product is already in the user's wishlist
        if (Wishlist::where('user_id', $user_id)->where('product_id', $product_id)->exists()) {
            return redirect()->back()->withErrors('Item is already in wishlist!');
        }

        // Add the product to the user's wishlist
        $wishlist = new Wishlist();
        $wishlist->user_id = $user_id;
        $wishlist->product_id = $product_id;
        $wishlist->save();

        return redirect()->back()->with('success', 'Item added to wishlist!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
//    public function destroy($product_id)
//    {
//        $wishlist = Wishlist::where('user_id', auth()->guard('user')->user()->id)
//            ->where('product_id', $product_id)
//            ->firstOrFail();
//        $wishlist->delete();
//
//        return redirect()->back()->with('success', 'Item removed from wishlist!');
//    }

    public function destroy($id)
    {
        $wishlist = auth()->guard('user')->user()->wishlist->where('product_id', $id)->first();

        if ($wishlist) {
            $wishlist->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Product not found in wishlist.']);
        }
    }



}
