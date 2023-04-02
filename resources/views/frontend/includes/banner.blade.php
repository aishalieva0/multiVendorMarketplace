<!-- Top Catagory Area -->
<div class="top_catagory_area mt-50 clearfix">
    <div class="container">
        <div class="row">

            @foreach($banners as $banner)
                <!-- Single -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50">
                        <a href="#">
                            <img src="{{ asset('banner_images/' . $banner->image) }}" alt="">
                        </a>
                    </div>
                </div>
            @endforeach
            <!-- Single Catagory -->
            {{--            <div class="col-12 col-md-4">--}}
            {{--                <div class="single_catagory_area mt-50">--}}
            {{--                    <a href="#">--}}
            {{--                        <img src="{{ asset('assets/frontend/img/bg-img/c2.jpg') }}" alt="">--}}
            {{--                    </a>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            {{--            <!-- Single Catagory -->--}}
            {{--            <div class="col-12 col-md-4">--}}
            {{--                <div class="single_catagory_area mt-50">--}}
            {{--                    <a href="#">--}}
            {{--                        <img src="{{ asset('assets/frontend/img/bg-img/c3.jpg') }}" alt="">--}}
            {{--                    </a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>
<!-- Top Catagory Area -->
