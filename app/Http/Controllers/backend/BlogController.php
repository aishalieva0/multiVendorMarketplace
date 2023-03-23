<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();

        return view('backend.pages.blogs.index', compact('blogs'));
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
        $blog = Blog::find($id);
        $categories = Blog::with('categories')->get();

        return view('backend.pages.blogs.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $validated = $request->validated();

        $blog = Blog::find($id);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/blogs');

            if ($blog->image && Storage::exists($blog->image)) {
                Storage::delete($blog->image);
            }
        }

        $blog->update($validated);

        return redirect()->route('blogs.index')->with(['success' => 'Blog is updated', 'timer' => 3000]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('uploads/blogs');
        }
        Blog::create($validated);

        return redirect()->route('blogs.index')->with(['success' => 'Blog is created', 'timer' => 3000]);
    }

    /**if ($request->hasFile('image'
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::get();

        return view('backend.pages.blogs.create', compact('categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog) {

            // delete image file if it exists
            if ($blog->image && Storage::exists($blog->image)) {
                Storage::delete($blog->image);
            }

            // delete the blog post from the database
            $blog->delete();
        }

        return redirect()->route('blogs.index')->with('success', 'Blog is deleted')->with('timer', 3000);
    }
}
