<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannersRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();

        return view('backend.pages.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannersRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/banner_images/', $name);
            $validated = array_merge($request->validated(), ['image' => $name]);
        }

         Banner::create($validated);

         return redirect()->route('banners.index')->with('success', 'Created');
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
        $banners = Banner::find($id);

        return view('backend.pages.banners.edit' , compact('banners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannersRequest $request, $id)
    {
        $banners = Banner::find($id);

        $validated =  $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/banner_images/', $name);
            $validated = array_merge($request->validated(), ['image' => $name]);
        }

        $banners->update($validated);

        return redirect()->route('banners.index')->with('message', 'Register Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();

        return redirect()->route('banners.index')->with('success', 'Deleted');
    }
}
