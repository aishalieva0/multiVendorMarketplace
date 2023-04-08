<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Vendor;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', '1')->get();
        $banners = Banner::where('status', '1')->limit(3)->get();
        $vendors = Vendor::withCount('products')->limit(6)->get();
        $sales = Product::where('status', '1')->limit(6)->get();
        $products = Product::where('status', '1')->get();
        $brands = Brand::where('status', '1')->limit(6)->get();
        $quick_view = Product::where('status', '1')->get();

        return view('frontend.sections.index', compact(
            'sliders', 'banners', 'vendors', 'sales', 'products', 'brands', 'quick_view'));
    }



}
