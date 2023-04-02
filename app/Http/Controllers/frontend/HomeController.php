<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', '1')->get();
        $banners = Banner::where('status', '1')->limit(3)->get();

        return view('frontend.sections.index', compact(
            'sliders', 'banners'));
    }
}
