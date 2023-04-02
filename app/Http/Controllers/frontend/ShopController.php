<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('frontend.pages.shop_list');
    }

    public function categories()
    {
        return view('frontend.pages.product_categories');
    }
}
