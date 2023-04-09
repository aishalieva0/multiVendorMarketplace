@extends('layouts.frontend.master')

@section('content')


    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Blog Details</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Blog Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Single Blog Post Area -->
    <section class="singl-blog-post-area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <!-- Blog Details Area -->
                    <div class="blog-details-area mb-50">
                        <!-- Image -->
                        <img class="mb-30" src="{{ asset('blogs_images/' . $blogPost->image) ?? '' }}" alt="blog-img">

                        <!-- Blog Title -->
                        <h3 class="mb-30">{{ $blogPost->title }}</h3>

                        <!-- Single Blog Details Area -->
                        <p><p>{{ $blogPost->content }}</p></p>
                    </div>

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
                                        <a href="{{ route('blog', ['category' => $category->id]) }}">
                                            {{ $category->title }} <span class="text-muted">({{ $category->blog_count }})</span>
                                        </a>
                                    </li>
                                </ul>
                            @endforeach
                    </div>

                </div>
    </section>
    <!-- Single Blog Post Area -->


@endsection
