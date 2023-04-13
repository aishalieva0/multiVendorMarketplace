<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_us = AboutUs::get();

        return view('backend.pages.about_us.index', compact('about_us'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.about_us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutUsRequest $request)
{
    $validated = $request->validated();
    $imageNames = [];

    if ($request->hasFile('image_1')) {
        $name = 'image_1' . time() . '.' . $request->file('image_1')->extension();
        $request->file('image_1')->move(public_path() . '/about_us_image_1/', $name);
        $imageNames['image_1'] = $name;
    }

    if ($request->hasFile('image_2')) {
        $name = 'image_2' . time() . '.' . $request->file('image_2')->extension();
        $request->file('image_2')->move(public_path() . '/about_us_image_2/', $name);
        $imageNames['image_2'] = $name;
    }

    if ($request->hasFile('image_3')) {
        $name = 'image_3' . time() . '.' . $request->file('image_3')->extension();
        $request->file('image_3')->move(public_path() . '/about_us_image_3/', $name);
        $imageNames['image_3'] = $name;
    }

    if ($request->hasFile('image_4')) {
        $name = 'image_4' . time() . '.' . $request->file('image_4')->extension();
        $request->file('image_4')->move(public_path() . '/about_us_image_4/', $name);
        $imageNames['image_4'] = $name;
    }

    $validated = array_merge($validated, $imageNames);
    AboutUs::create($validated);

    return redirect()->route('about_us.index')->with('success', 'Created');
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
        $about_us = AboutUs::find($id);

        return view('backend.pages.about_us.edit' , compact('about_us'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUsRequest $request, $id)
    {
        $about_us = AboutUs::find($id);

        $validated = $request->validated();
        $imageNames = [];

    if ($request->hasFile('image_1')) {
        $name = 'image_1' . time() . '.' . $request->file('image_1')->extension();
        $request->file('image_1')->move(public_path() . '/about_us_image_1/', $name);
        $imageNames['image_1'] = $name;
    }

    if ($request->hasFile('image_2')) {
        $name = 'image_2' . time() . '.' . $request->file('image_2')->extension();
        $request->file('image_2')->move(public_path() . '/about_us_image_2/', $name);
        $imageNames['image_2'] = $name;
    }

    if ($request->hasFile('image_3')) {
        $name = 'image_3' . time() . '.' . $request->file('image_3')->extension();
        $request->file('image_3')->move(public_path() . '/about_us_image_3/', $name);
        $imageNames['image_3'] = $name;
    }

    if ($request->hasFile('image_4')) {
        $name = 'image_4' . time() . '.' . $request->file('image_4')->extension();
        $request->file('image_4')->move(public_path() . '/about_us_image_4/', $name);
        $imageNames['image_4'] = $name;
    }

    $validated = array_merge($validated, $imageNames);
    $about_us->update($validated);

        return redirect()->route('about_us.index')->with('message', 'Register Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AboutUs::find($id)->delete();

        return redirect()->route('about_us.index')->with('success', 'Deleted');
    }
}
