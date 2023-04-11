<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function shipping()
    {
        $delivery_methods = DeliveryMethod::get();
        return view('frontend.pages.checkout_shipping',compact('delivery_methods'));
    }
}
