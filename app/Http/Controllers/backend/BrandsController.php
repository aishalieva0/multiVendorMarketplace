<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsRequest;
use App\Models\Brand;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::get();

        return view('backend.pages.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandsRequest $request)
    {
        $validated = $request->validated();
        
        if ($request->hasFile('logo')) {
            $name = 'logo' . time() . '.' . $request->file('logo')->extension();
            $request->file('logo')->move(public_path() . '/brand_logo/', $name);
            $validated = array_merge($request->validated(), ['logo' => $name]);
        }

         Brand::create($validated);

        return redirect()->route('brands.index')->with('success', 'Created');
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
        $brands = Brand::find($id);

        return view('backend.pages.brands.edit' , compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandsRequest $request, $id)
    {
        $brands = Brand::find($id);

        $validated =  $request->validated();

        if ($request->hasFile('logo')) {
            $name = 'logo' . time() . '.' . $request->file('logo')->extension();
            $request->file('logo')->move(public_path() . '/brand_logo/', $name);
            $validated = array_merge($request->validated(), ['logo' => $name]);
        }

        $brands->update($validated);

        return redirect()->route('brands.index')->with('message', 'Register Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();

        return redirect()->route('brands.index')->with('success', 'Deleted');
    }
}
