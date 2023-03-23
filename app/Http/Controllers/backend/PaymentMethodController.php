<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentMethodsRequest;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_methods = PaymentMethod::get();

        return view('backend.pages.payment_methods.index', compact('payment_methods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.payment_methods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentMethodsRequest $request)
    {
        PaymentMethod::create($request->validated());

        return redirect()->route('payment_methods.index')->with(['success' => 'Payment method is created', 'timer' => 3000]);




//        return redirect()->route('payment_methods.index')->with('success','Payment method is created')->with('timer', 3000);
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
       $payment_method = PaymentMethod::find($id);

        return view('backend.pages.payment_methods.edit',compact('payment_method'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentMethodsRequest $request, $id)
    {
        PaymentMethod::find($id)->update($request->validated());

        return redirect()->route('payment_methods.index')->with(['success'=>'Payment method is updated','timer'=>3000]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PaymentMethod::find($id)->delete();

        return redirect()->route('payment_methods.index')->with('success','Payment method is deleted')->with('timer', 3000);

    }
}
