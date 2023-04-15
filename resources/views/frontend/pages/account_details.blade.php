@extends('layouts.frontend.master')

@section('content')

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>My Account</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- My Account Area -->
    <section class="my-account-area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="my-account-navigation mb-50">
                        <ul>
                            <li><a href="order-list.html">Orders</a></li>git
                            <li class="active"><a href="{{ route('account') }}">Account Details</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="my-account-content mb-50">
                        <h5 class="mb-3">Account Details</h5>

                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">First Name *</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{Auth::guard('user')->user()->name}}"
                                               placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="surname">Last Name *</label>
                                        <input type="text" class="form-control" id="surname" name="surname"
                                               value="{{Auth::guard('user')->user()->surname}}"
                                               placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email Address *</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               value="{{Auth::guard('user')->user()->email}}"
                                               placeholder="Email Address">
                                    </div>
                                </div>


                                <!-- additional fields for vendors -->
                                @if(Auth::user()->role_id == 2)

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="shop_name">Shop Name *</label>
                                            <input type="text" class="form-control" id="shop_name" name="shop_name"
                                                   placeholder="Shop Name">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="address">Address *</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                   placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone Number *</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                   placeholder="Phone Number">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="city">City *</label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                   placeholder="City">
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">New Password (Leave blank to leave unchanged)</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               placeholder="New Password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="confirmPass">Confirm New Password</label>
                                        <input type="password" class="form-control" id="confirmPass"
                                               name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- My Account Area -->

@endsection
