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
        <a class="complated" href="checkout-1.html"><i class="icofont-check-circled"></i> Login</a>
        <a class="complated" href="checkout-2.html"><i class="icofont-check-circled"></i> Billing</a>
        <a class="active" href="checkout-3.html"><i class="icofont-check-circled"></i> Shipping</a>
        <a href="checkout-4.html"><i class="icofont-check-circled"></i> Payment</a>
        <a href="checkout-5.html"><i class="icofont-check-circled"></i> Review</a>
    </div>
    <!-- Checkout Steps Area -->

    <!-- Checkout Area -->
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area clearfix">
                        <h5 class="mb-4">Shipping Method</h5>

                        <div class="shipping_method">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Method</th>
                                        <th scope="col">Delivery Time</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Choose</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Courier</th>
                                        <td>1-2 Business Day</td>
                                        <td>$9.99</td>
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Flat Rate</th>
                                        <td>3-4 Day</td>
                                        <td>$3.00</td>
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Free Shipping</th>
                                        <td>1 Week</td>
                                        <td>Free</td>
                                        <td>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="checkout_pagination mt-3 d-flex justify-content-end clearfix">
                        <a href="checkout-2.html" class="btn btn-primary mt-2 ml-2">Go Back</a>
                        <a href="checkout-4.html" class="btn btn-primary mt-2 ml-2">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Area End -->

@endsection
