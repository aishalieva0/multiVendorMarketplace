<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryMethodsRequest;
use App\Models\DeliveryMethod;

class DeliveryMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivery_methods = DeliveryMethod::get();

        return view('backend.pages.delivery_methods.index', compact('delivery_methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeliveryMethodsRequest $request)
    {
        DeliveryMethod::create($request->validated());

        return redirect()->route('delivery_methods.index')->with(['success' => 'Delivery method is created', 'timer' => 3000]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.delivery_methods.create');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery_method = DeliveryMethod::find($id);

        return view('backend.pages.delivery_methods.edit', compact('delivery_method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeliveryMethodsRequest $request, $id)
    {
        DeliveryMethod::find($id)->update($request->validated());

        return redirect()->route('delivery_methods.index')->with(['success' => 'Delivery method is updated', 'timer' => 3000]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DeliveryMethod::find($id)->delete();

        return redirect()->route('delivery_methods.index')->with('success', 'Delivery method is deleted')->with('timer', 3000);
    }
}
