<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
{{--                <div class="col-sm-6">--}}
{{--                    <ol class="breadcrumb float-sm-right">--}}
{{--                        <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                        <li class="breadcrumb-item active">Dashboard v1</li>--}}
{{--                    </ol>--}}
{{--                </div><!-- /.col -->--}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">


                <!-- for Blogs-->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #984bb7, #483318); box-shadow: 0px 3px 20px rgba(138,0,0,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Blogs</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pencil-alt" style="color: #fff;"></i>
                        </div>
                        <a href="{{ asset('blogs') }}" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- for Orders-->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #4b6cb7, #25003d); box-shadow: 0px 3px 20px rgba(122,0,255,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <!-- For users -->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #9affd5, #fad0c4); box-shadow: 0px 3px 20px rgba(0,0,0,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users" style="color: #fff;"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <!-- For vendors -->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #6c757d, #212529); box-shadow: 0px 3px 20px rgba(0,0,0,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Vendors</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-store" style="color: #fff;"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- for Admins -->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #4b6cb7, #182848); box-shadow: 0px 3px 20px rgba(0,0,0,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Admins</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie" style="color: #fff;"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- for Brands-->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #4b6cb7, #483e18); box-shadow: 0px 3px 20px rgba(0,0,0,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Brands</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tags" style="color: #fff;"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- for Products-->
                <div class="col-lg-3 col-6">
                    <div class="small-box"
                         style="background: linear-gradient(to bottom right, #4b6cb7, #184842); box-shadow: 0px 3px 20px rgba(0,0,0,0.5);">
                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">
                            <h3 style="color: #fff;">{{$blog_count}}</h3>
                            <p style="color: #fff;">Products</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-basket" style="color: #fff;"></i>
                        </div>
                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>





                {{--                <div class="col-lg-3 col-6">--}}
                {{--                    <div class="small-box" style="background: linear-gradient(to bottom right, #a34bb7, #182848); box-shadow: 0px 3px 20px rgba(0,0,0,0.5);">--}}
                {{--                        <div class="inner" style="font-family: 'Montserrat', sans-serif;">--}}
                {{--                            <h3 style="color: #fff; font-size: 24px; margin-top: 0;">New Orders</h3>--}}
                {{--                        </div>--}}
                {{--                        <div class="icon" style="padding: 15px;">--}}
                {{--                            <i class="fa fa-shopping-bag fa-2x" style="color: #fff;"></i>--}}
                {{--                        </div>--}}
                {{--                        <a href="#" class="small-box-footer" style="color: #fff;">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

            </div>
        </div>
    </section>
</div>
