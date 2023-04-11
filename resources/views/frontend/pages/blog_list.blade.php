@extends('layouts.frontend.master')

@section('content')
    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Blog</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Blog Area -->
    <section class="blog_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8">
                    <!-- Single News Area -->
                    @foreach ($blogs as $blog)
                        <div class="single_blog_area">
                            <div class="blog_post_thumb">
                                <a href="single-blog.html"><img src="{{ asset('blogs_images/' . $blog->image) ?? '' }}"
                                        alt="blog-post-thumb"></a>
                                <!-- Post Date -->
                                <div class="post-date" style="height: 110px;">
                                    <a href="#">{{ date('j M Y', strtotime($blog->created_at)) }}</a>
                                </div>
                            </div>
                            <div class="blog_post_content">
                                <a href="{{ route('blogdetail', $blog->id) }}" class="blog_title">{{ $blog->title }}</a>
                                <p>{{ $blog->content }}</p>
                                <a href="{{ route('blogdetail', $blog->id) }}">Continue Reading <i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="col-12 col-md-5 col-lg-4">
                    <div class="blog_sidebar">

                        <!-- Latest Post -->
                        <div class="widget-area latest_post mb-30">
                            <h6>Recent Posts</h6>
                            <!-- Recent Post -->
                            @foreach ($posts as $post)
                                <div class="single_latest_post">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('blogs_images/' . $post->image) ?? '' }}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="#">{{ $post->title }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Catagory -->
                        <div class="widget-area catagory_section mb-30">
                            <h6>Categories</h6>
                            @foreach ($categories as $category)
                                <ul>
                                    <li>
                                        <a>
                                            {{ $category->title }} <span class="text-muted">({{ $category->blog_count }})</span>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                    </div>
                </div>
            </div>

            @if ($blogs->lastPage() > 1)
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Shop Pagination Area -->
                        <div class="shop_pagination_area mt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm justify-content-center">
                                    <li class="page-item {{ $blogs->currentPage() == 1 ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}"><i
                                                class="fa fa-angle-left" aria-hidden="true"></i></a>
                                    </li>
                                    @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                        <li class="page-item {{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li
                                        class="page-item {{ $blogs->currentPage() == $blogs->lastPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $blogs->nextPageUrl() }}"><i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
    <!-- Blog Area End -->
@endsection
