@extends('layouts.frontend.master')

@section('content')

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Checkout</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Checkout Steps Area -->
    <div class="checkout_steps_area">
        <a class="active" href="{{route('checkout.shipping')}}"><i class="icofont-check-circled"></i> Shipping</a>
        <a href="{{route('checkout.payment')}}"><i class="icofont-check-circled"></i> Payment</a>
        <a href="{{route('checkout.review')}}"><i class="icofont-check-circled"></i> Review</a>
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
                                    @foreach($delivery_methods as $delivery_method)
                                        <tr>
                                            <th scope="row">{{$delivery_method->title}}</th>
                                            <td>{{$delivery_method->description}}</td>
                                            <td>{{ ($delivery_method->price != 0) ? $delivery_method->price : "Free" }}</td>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="{{$delivery_method->id}}" name="customRadio"
                                                           class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio3"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
