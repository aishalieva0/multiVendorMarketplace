<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\DeliveryMethod;
use App\Models\PaymentMethod;

class CheckoutController extends Controller
{
    public function shipping()
    {
        $delivery_methods = DeliveryMethod::get();
        return view('frontend.pages.checkout_shipping', compact('delivery_methods'));
    }


    public function review()
    {
        //shipping fee
        $delivery_method_id = request()->input('delivery_method');
        $shipping_fee = request()->input('delivery_method_cost_' . $delivery_method_id);

        //order items
        $order_items = session()->get('cart', []);

        return view('frontend.pages.checkout_review', compact('shipping_fee', 'order_items'));
    }


    public function payment()
    {
        $payment_methods = PaymentMethod::get();
        $total_amount = request()->input('total_amount');
        return view('frontend.pages.checkout_payment', compact('payment_methods','total_amount'));
    }


    public function complete()
    {
        return view('frontend.pages.checkout_complete');
    }
}
