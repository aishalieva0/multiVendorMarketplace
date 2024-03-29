<!-- Welcome Slides Area -->
<section class="welcome_area">
    <div class="welcome_slides owl-carousel">

        @foreach($sliders as $slider)
            <!-- Slide -->
            <div class="single_slide bg-img"
                 style="background-image: url({{ asset('slider_images/'. $slider->image) }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-7 col-md-8">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInUp" data-delay="0">{{$slider->title}}</p>
                                <h2 data-animation="fadeInUp" data-delay="300ms">{{$slider->subtitle}}</h2>
                                <h4 data-animation="fadeInUp" data-delay="600ms">{{$slider->price}}</h4>
                                <a href="#" class="btn btn-primary" data-animation="fadeInUp"
                                   data-delay="1s">{{$slider->button}}</a>
                            </div>
                        </div>
                        <div class="col-5 col-md-4">
                            <div class="welcome_slide_image">
                                <div class="discount_badge" data-animation="bounceInDown" data-delay="1.2s">
                                    <span>30%<br>OFF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Single Slide -->
        {{--        <div class="single_slide bg-img" style="background-image: url({{ asset('assets/frontend/img/bg-img/7.jpg') }});">--}}
        {{--            <div class="container h-100">--}}
        {{--                <div class="row h-100 align-items-center">--}}
        {{--                    <div class="col-12 col-md-8">--}}
        {{--                        <div class="welcome_slide_text">--}}
        {{--                            <p data-animation="fadeInUp" data-delay="0">Sustainable Clock</p>--}}
        {{--                            <h2 data-animation="fadeInUp" data-delay="300ms">Smart Watch</h2>--}}
        {{--                            <h4 data-animation="fadeInUp" data-delay="600ms">Only $31 <span--}}
        {{--                                    class="regular-price">$43</span></h4>--}}
        {{--                            <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="600ms">Check--}}
        {{--                                Collection</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

        {{--        <!-- Single Slide -->--}}
        {{--        <div class="single_slide bg-img" style="background-image: url({{ asset('assets/frontend/img/bg-img/6.jpg') }});">--}}
        {{--            <div class="container h-100">--}}
        {{--                <div class="row h-100 align-items-center">--}}
        {{--                    <div class="col-12 col-md-6">--}}
        {{--                        <div class="welcome_slide_text">--}}
        {{--                            <p class="text-white" data-animation="fadeInUp" data-delay="0">100% Cotton</p>--}}
        {{--                            <h2 class="text-white" data-animation="fadeInUp" data-delay="300ms">Hot Shoes</h2>--}}
        {{--                            <h4 class="text-white" data-animation="fadeInUp" data-delay="600ms">Now $19</h4>--}}
        {{--                            <a href="#" class="btn btn-primary" data-animation="fadeInUp" data-delay="900ms">Add to--}}
        {{--                                cart</a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</section>
<!-- Welcome Slides Area -->
