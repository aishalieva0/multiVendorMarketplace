<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

        $wishlist = new Wishlist();
        $wishlist->user_id = auth()->guard('user')->user()->id;
        $wishlist->product_id = $request->product_id;
        $wishlist->save();

        return redirect()->back()->with('success', 'Item added to wishlist!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $wishlist = Wishlist::where('user_id', auth()->guard('user')->user()->id)->where('id', $id)->first();
        $wishlist->delete();

        return redirect()->back()->with('success', 'Item removed from wishlist!');
    }


}
