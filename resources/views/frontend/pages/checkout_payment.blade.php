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

    <div class="checkout_steps_area">
        <a class="complated" href="{{route('checkout.shipping')}}"><i class="icofont-check-circled"></i> Shipping</a>
        <a class="complated" href="{{route('checkout.review')}}"><i class="icofont-check-circled"></i> Review</a>
        <a class="active" href="{{route('checkout.payment')}}"><i class="icofont-check-circled"></i> Payment</a>
    </div>

    <!-- Checkout Area -->
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area clearfix">
                        <div class="payment_method">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="one">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapse_one" aria-expanded="false"
                                               aria-controls="collapse_one"><i class="icofont-mastercard-alt"></i> Pay
                                                with Credit Card</a>
                                        </h6>
                                    </div>
                                    <div aria-expanded="false" id="collapse_one" class="panel-collapse collapse show"
                                         role="tabpanel" aria-labelledby="one">
                                        <div class="panel-body">
                                            <div class="pay_with_creadit_card">
                                                <form action="#" method="post">
                                                    <div class="row">
                                                        <div class="col-12 mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">Credit
                                                                    or Debit Card</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-6 mb-3">
                                                            <label for="cardNumber">Card Number</label>
                                                            <input type="text" class="form-control" id="cardNumber"
                                                                   placeholder="" value="" required>
                                                            <small id="card_info_store" class="form-text text-muted"><i
                                                                    class="fa fa-lock" aria-hidden="true"></i> Your
                                                                payment info is stored securely.</small>
                                                        </div>
                                                        <div class="col-12 col-md-3 mb-3">
                                                            <label for="expiration">Expiration</label>
                                                            <input type="text" class="form-control" id="expiration"
                                                                   placeholder="MM / YY" value="" required>
                                                        </div>
                                                        <div class="col-12 col-md-3 mb-3">
                                                            <label for="security_code">Security Code <a href="#"
                                                                                                        class="security_code_popover"
                                                                                                        data-container="body"
                                                                                                        data-toggle="popover"
                                                                                                        data-placement="top"
                                                                                                        data-content=""
                                                                                                        data-img="img/bg-img/cvc.jpg">
                                                                    <i class="fa fa-question-circle"
                                                                       aria-hidden="true"></i></a></label>
                                                            <input type="text" class="form-control" id="security_code"
                                                                   placeholder="" value="" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary">Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Single Payment Method -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="two">
                                        <h6 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                               data-parent="#accordion" href="#collapse_two" aria-expanded="false"
                                               aria-controls="collapse_two"><i
                                                    class="icofont-cash-on-delivery-alt"></i> Cash on Delivery
                                            </a>
                                        </h6>
                                    </div>

                                    <div aria-expanded="false" id="collapse_two" class="panel-collapse collapse"
                                         role="tabpanel" aria-labelledby="two">
                                        <div class="panel-body">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="cash">
                                                <label class="custom-control-label" for="cash">Cash</label>
                                            </div>
                                            <p>Pay on delivery.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="checkout_pagination d-flex justify-content-end mt-30">
                        <a href="{{route('checkout.shipping')}}" class="btn btn-primary mt-2 ml-2">Go Back</a>
                        <a href="{{route('checkout.review')}}" class="btn btn-primary mt-2 ml-2">Final Step</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Area End -->

@endsection
