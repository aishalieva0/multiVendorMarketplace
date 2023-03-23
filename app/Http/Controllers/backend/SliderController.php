<?php

namespace App\Http\Controllers;

use App\Http\Requests\SlidersRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();

        return view('backend.pages.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlidersRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/slider_images/', $name);
            $validated = array_merge($request->validated(), ['image' => $name]);
        }

         Slider::create($validated);

         return redirect()->route('sliders.index')->with('success', 'Created');
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
        $sliders = Slider::find($id);

        return view('backend.pages.sliders.edit' , compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlidersRequest $request, $id)
    {
        $sliders = Slider::find($id);

        $validated =  $request->validated();

        if ($request->hasFile('image')) {
            $name = 'image' . time() . '.' . $request->file('image')->extension();
            $request->file('image')->move(public_path() . '/slider_images/', $name);
            $validated = array_merge($request->validated(), ['image' => $name]);
        }

        $sliders->update($validated);

        return redirect()->route('sliders.index')->with('message', 'Register Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::find($id)->delete();

        return redirect()->route('sliders.index')->with('success', 'Deleted');
    }
}
