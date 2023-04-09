<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Marketplace E-commerce</title>

    <!-- Favicon  -->
    {{--    <link rel="icon" href="{{asset('assets/frontend/img/core-img/favicon.ico') }}">--}}


    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/5.0.6/css/font-awesome.min.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/icofont.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css') }}">

    <style>
        /* Center the text in the dropdown menu */
        .user-meta-dropdown {
            width: 200px;
            height: auto;
            text-align: center;
        }

        .user-meta-dropdown li {
            display: block;
            text-align: center;
        }
    </style>


</head>

<body>


<!-- Header Area -->
<header class="header_area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-6">
                    <div class="welcome-note">
                            <span class="popover--text" data-toggle="popover"
                                  data-content="Welcome to Bigshop ecommerce template."><i
                                    class="icofont-info-square"></i></span>
                        <span class="text">Welcome to Marketplace</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="language-currency-dropdown d-flex align-items-center justify-content-end">
                        {{--                        <!-- Language Dropdown -->--}}
                        {{--                        <div class="language-dropdown">--}}
                        {{--                            <div class="dropdown">--}}
                        {{--                                <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenu1"--}}
                        {{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                    English--}}
                        {{--                                </a>--}}
                        {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">--}}
                        {{--                                    <a class="dropdown-item" href="#">Bangla</a>--}}
                        {{--                                    <a class="dropdown-item" href="#">Arabic</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <!-- Currency Dropdown -->--}}
                        {{--                        <div class="currency-dropdown">--}}
                        {{--                            <div class="dropdown">--}}
                        {{--                                <a class="btn btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenu2"--}}
                        {{--                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                    $ USD--}}
                        {{--                                </a>--}}
                        {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">--}}
                        {{--                                    <a class="dropdown-item" href="#">৳ BDT</a>--}}
                        {{--                                    <a class="dropdown-item" href="#">€ Euro</a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu -->
    <div class="bigshop-main-menu">
        <div class="container">
            <div class="classy-nav-container breakpoint-off">
                <nav class="classy-navbar" id="bigshopNav">

                    <!-- Nav Brand -->
                    <a href="/" class="nav-brand"><img
                            src="{{asset('assets/frontend/img/core-img/logo.png') }}" alt="logo"></a>

                    <!-- Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Close -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav -->
                        <div class="classynav">
                            <ul>
                                <li><a href="/">Home</a>
                                </li>

                                <li>
                                    <a href="{{ route('product_cat') }}">Categories</a>
                                    <div class="megamenu">
                                        @php
                                            $categories = $product_categories->chunk(4); // group the categories into rows
                                        @endphp
                                        @foreach($categories as $category_row)
                                            <ul class="single-mega cn-col-4">
                                                @foreach($category_row as $product_cat)
                                                    <li><a href="#">- {{ $product_cat->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </li>


                                <li><a href="{{route('shop')}}">Shop</a>
                                </li>

                                <li><a href="{{route('blog')}}">Blog</a>
                                </li>


                                <li><a href="{{route('contact')}}">Contact</a></li>

                                <li><a href="{{route('about')}}">About us</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Hero Meta -->
                    <div class="hero_meta_area ml-auto d-flex align-items-center justify-content-end">
                        <!-- Search -->
                        <div class="search-area">
                            <div class="search-btn"><i class="icofont-search"></i></div>
                            <!-- Form -->
                            <div class="search-form">
                                <input type="search" class="form-control" placeholder="Search">
                                <input type="submit" class="d-none" value="Send">
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="wishlist-area">
                            <a href="{{route('wishlist.index')}}" class="wishlist-btn"><i class="icofont-heart"></i></a>
                        </div>

                        <!-- Cart -->
                        <div class="cart-area">
                            @if(session('cart'))
                                @foreach(session('cart') as $id =>$product)
                                    <div class="cart--btn">
                                        <i class="icofont-cart"></i>
                                        <span class="cart_quantity">{{$product['quantity']}}</span>
                                    </div>

                                    <!-- Cart Dropdown Content -->
                                    @php $total_amount = 0; @endphp
                                    <div class="cart-dropdown-content">
                                        <ul class="cart-list">

                                            <li>
                                                <div class="cart-item-desc">
                                                    <a href="#" class="image">
                                                        <img
                                                            src="{{ asset($product['image']) }}"
                                                            class="cart-thumb" alt="">
                                                    </a>
                                                    <div>
                                                        <a href="#">{{$product['title']}}</a>
                                                        <p>{{$product['quantity']}}x - <span class="price">{{$product['price']}}₼</span>
                                                            @php
                                                                $total_amount += $product['price'] * $product['quantity'] @endphp
                                                        </p>
                                                    </div>
                                                </div>
                                                <form action="{{ route('remove.from.cart', $id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="product_id" value="{{ $id }}">
                                                    <th scope="row">
                                                        <button type="submit" class="dropdown-product-remove"><i
                                                                class="icofont-bin"></i></button>
                                                    </th>
                                                </form>
                                            </li>
                                            @endforeach

                                        </ul>
                                        <div class="cart-pricing my-4">
                                            <ul>
                                                <li>
                                                    <span>Total:</span>
                                                    <span>{{$total_amount}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cart-box">
                                            <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                                        </div>
                                    </div>
                                    @else
                                        <div class="cart--btn">
                                            <i class="icofont-cart"></i>
                                        </div>
                                    @endif
                        </div>

                        <!-- Account -->
                        <!-- when logged in -->


                        <div class="account-area">
                            @if(auth('user')->check())
                                <div class="user-thumbnail">
                                    <i class="icofont-user-alt-5"></i>
                                </div>
                                <ul class="user-meta-dropdown">
                                    <li class="user-title"><span>Hello,</span>
                                        {{--                                        @if(Auth::check() && Auth::user()->role_id == 3)--}}
                                        {{--                                        {{ Auth::guard('user')->user()->name }}--}}
                                        {{--                                        @endif--}}
                                    </li>
                                    <li><a href="{{ asset('myaccount') }}">My Account</a></li>
                                    <li><a href="#">Orders List</a></li>
                                    <li><a href="{{ route('wishlist.index') }}">Wishlist</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-link"><i class="icofont-logout"></i>
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            @elseif(auth('vendor')->check())
                                <div class="user-thumbnail">
                                    <i class="icofont-user-alt-5"></i>
                                </div>
                                <ul class="user-meta-dropdown">
                                    <li class="user-title"><span>Hello,</span>
                                        {{--                                        @if(Auth::check() && Auth::user()->role_id == 2)--}}
                                        {{--                                        {{ Auth::guard('vendor')->user()->name}}--}}
                                        {{--                                        @endif--}}
                                    </li>
                                    <li><a href="{{ asset('myaccount') }}">My Account</a></li>
                                    <li><a href="#">Orders List</a></li>
                                    <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-link"><i class="icofont-logout"></i>
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            @else
                                <!-- guest -->
                                <div class="user-thumbnail">
                                    <i class="icofont-user-alt-7"></i>
                                </div>
                                <div class="user-meta-dropdown">
                                    <a href="{{ route('login') }}" class="mr-2">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                </div>
                            @endif
                        </div>


                        {{--                        <div class="account-area">--}}
                        {{--                            @auth--}}
                        {{--                                <div class="user-thumbnail">--}}
                        {{--                                    <i class="icofont-user-alt-5"></i>--}}
                        {{--                                </div>--}}
                        {{--                                <ul class="user-meta-dropdown">--}}
                        {{--                                    <li class="user-title"><span>Hello,</span>--}}
                        {{--                                        @if(Auth::check() && Auth::user()->role_id == 3)--}}
                        {{--                                            {{ Auth::guard('user')->user()->name }}--}}
                        {{--                                        @elseif(Auth::check() && Auth::user()->role_id == 2)--}}
                        {{--                                            {{ Auth::guard('vendor')->user()->name}}--}}
                        {{--                                        @else--}}
                        {{--                                            Guest--}}
                        {{--                                        @endif--}}
                        {{--                                    </li>--}}
                        {{--                                    <li><a href="{{ asset('myaccount') }}">My Account</a></li>--}}
                        {{--                                    <li><a href="#">Orders List</a></li>--}}
                        {{--                                    <li><a href="#">Wishlist</a></li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <form action="{{ route('logout') }}" method="POST">--}}
                        {{--                                            @csrf--}}
                        {{--                                            <button type="submit" class="btn btn-link"><i class="icofont-logout"></i>--}}
                        {{--                                                Logout--}}
                        {{--                                            </button>--}}
                        {{--                                        </form>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            @else--}}
                        {{--                                <!-- guest -->--}}
                        {{--                                <div class="user-thumbnail">--}}
                        {{--                                    <i class="icofont-user-alt-7"></i>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="user-meta-dropdown">--}}
                        {{--                                    <a href="{{ route('login') }}" class="mr-2">Login</a>--}}
                        {{--                                    <a href="{{ route('register') }}">Register</a>--}}
                        {{--                                </div>--}}
                        {{--                            @endauth--}}
                        {{--                        </div>--}}


                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->
