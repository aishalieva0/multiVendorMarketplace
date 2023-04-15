<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Brand;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $brands = Brand::where('status', '1')->limit(6)->get();
        $about_us = AboutUs::get();

         return view('frontend.pages.about',compact('brands', 'about_us'));
    }
}
