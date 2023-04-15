@extends('layouts.frontend.master')

@section('content')
    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>About Us</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- About Us Area -->
    <section class="about_us_area section_padding_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    @foreach ($about_us as $about)
                    <div class="about_us_content pb-5 pb-lg-0">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('about_us_image_1/' .$about->image_1) ?? '' }} " alt="about_us_image_1">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('about_us_image_2/' .$about->image_2) ?? '' }} " alt="about_us_image_2">
                            </div>
                                <div class="col-6">
                                <img src="{{ asset('about_us_image_3/' .$about->image_3) ?? '' }} " alt="about_us_image_3">
                            </div>
                                <div class="col-6">
                                <img src="{{ asset('about_us_image_4/' .$about->image_4) ?? '' }} " alt="about_us_image_4">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-12 col-lg-6">
                    @foreach ($about_us as $about)
                    <div class="about_us_content pl-0 pl-lg-5">
                        <h5>{{ $about->title }}</h5>
                        <p>{{ $about->content }}</p>
                    </div>
                     @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area -->

    <!-- Features Area -->
    <section class="features-area mb-50">
        <div class="container">
            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-ssl-security"></i>
                        <h5>Secure Payment Gateway</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-badge"></i>
                        <h5>Quality Products</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-fast-delivery"></i>
                        <h5>Fast Delivery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-cash-on-delivery"></i>
                        <h5>Cash On Delivery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-gift"></i>
                        <h5>Free Delivery</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-service-area mb-50">
                        <i class="icofont-life-bouy"></i>
                        <h5>Customer Support</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, et, nobis?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Brands Area -->
    <section class="popular_brands_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular_section_heading mb-50 text-center">
                        <h5>Popular Brands</h5>
                    </div>
                </div>
                <div class="col-12">
                    <div class="popular_brands_slide owl-carousel">
                        @foreach ($brands as $brand)
                            <div class="single_brands">
                                <img src="{{ asset('brand_logo/' . $brand->logo) ?? '' }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Brands Area End -->
@endsection
