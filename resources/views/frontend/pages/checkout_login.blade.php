@extends('layouts.frontend.master')

@section('content')

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Checkout</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Checkout Steps Area -->
    <div class="checkout_steps_area">
        <a class="active" href="checkout-1.html"><i class="icofont-check-circled"></i> Login</a>
        <a href="checkout-2.html"><i class="icofont-check-circled"></i> Billing</a>
        <a href="checkout-3.html"><i class="icofont-check-circled"></i> Shipping</a>
        <a href="checkout-4.html"><i class="icofont-check-circled"></i> Payment</a>
        <a href="checkout-5.html"><i class="icofont-check-circled"></i> Review</a>
    </div>

    <!-- Checkout Area -->
    <div class="checkout_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mb-50">
                        <h5>Checkout as a Guest or Register</h5>
                        <p>Register with us for future convenience:</p>

                        <div class="custom-control mb-2 custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Checkout as Guest</label>
                        </div>
                        <div class="custom-control mb-2 custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Register</label>
                        </div>

                        <h5 class="mt-4">Register and save time!</h5>
                        <p>Register with us for future convenience:</p>

                        <p class="mb-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Fast and easy check out </p>
                        <p class="mb-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Easy access to your order history and status</p>

                        <a href="register.html" class="btn btn-primary mt-4">Continue</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mb-50">
                        <h5>Login</h5>
                        <p>Already registered? Please log in below:</p>

                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted"><i class="icofont-lock"></i> We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me for this computer.</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a class="forget_password" href="#">Forget Password?</a>
                        </form>

                        <div class="checkout_pagination d-flex mt-4 justify-content-end">
                            <a href="cart.html" class="btn btn-primary mt-2 ml-2">Go to Cart</a>
                            <a href="checkout-2.html" class="btn btn-primary mt-2 ml-2">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Area End -->


@endsection
