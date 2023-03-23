<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {

        $blog_count = Blog::where('status', '1')->count();

        return view('backend.sections.index',compact('blog_count'));
    }
}
