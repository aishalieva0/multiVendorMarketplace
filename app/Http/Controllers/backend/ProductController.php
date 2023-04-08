<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();

        return view('backend.pages.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::get();
        $brands = Brand::get();
        return view('backend.pages.products.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
    {

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/products_images/', $name);
            $validated = array_merge($request->validated(), ['image' => $name]);
        }

         Product::create($validated);

        return redirect()->route('products.index')->with('success','Product is added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $product = Product::find($id);

       $categories = Product::with('categories')->get();
       $brands= Product::with('brands')->get();

       return view('backend.pages.products.edit',compact('product','categories','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        $products = Product::find($id);

        $validated =  $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/products_images/', $name);
            $validated = array_merge($request->validated(), ['image' => $name]);
        }

        $products->update($validated);

        return redirect()->route('products.index')->with('success','Product is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('products.index')->with('success','Product is deleted successfully');

    }
}
