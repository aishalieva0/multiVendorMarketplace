<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::where('status', '1')->orderBy('created_at', 'desc')->paginate(4);
        $categories = BlogCategory::withCount('blog')->where('status','1')->get();
        $posts = Blog::where('status', '1')->inRandomOrder()->take(4)->get();


        return view('frontend.pages.blog_list', compact('blogs','categories', 'posts' ));
    }

    public function show($id)
{
    $categories = BlogCategory::withCount('blog')->where('status', '1')->get();
    $posts = Blog::where('status', '1')->inRandomOrder()->take(4)->get();
    $blogPost = Blog::find($id);

    if (!$blogPost) {
        abort(404);
    }

    return view('frontend.pages.blog_detail', compact('blogPost', 'categories', 'posts'));
}
}
