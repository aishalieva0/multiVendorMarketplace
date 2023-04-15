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

    <!-- Checkout Step Area -->
    <div class="checkout_steps_area">
        <a class="complated" href="{{route('checkout.shipping')}}"><i class="icofont-check-circled"></i> Shipping</a>
        <a class="active" href="{{route('checkout.review')}}"><i class="icofont-check-circled"></i> Review</a>
        <a href="{{route('checkout.payment')}}"><i class="icofont-check-circled"></i> Payment</a>
    </div>
    <!-- Checkout Step Area -->

    <!-- Checkout Area -->
    <div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout_details_area clearfix">
                        <h5 class="mb-30">Review Your Order</h5>

                        <div class="cart-table">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-30">
                                    <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $item_total = 0; //per item price
                                        $sub_total = 0; //total order items price
                                        $total_amount = 0; //total order price includes shipping fee
                                    @endphp
                                    @foreach($order_items as $item)
                                        <tr>
                                            <td>
                                                <img src="{{asset('products_images/'.$item['image'])}}" alt="Product">
                                            </td>
                                            <td>
                                                <a href="#">{{$item['title']}}</a>
                                            </td>
                                            <td>{{$item['price']}} ₼</td>
                                            <td>{{$item['quantity']}}</td>
                                            @php
                                                $item_total = $item['price'] * $item['quantity'];
                                                $sub_total += $item_total;
                                            @endphp
                                            <td>{{$item_total}} ₼</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-7 ml-auto">
                    <div class="cart-total-area">
                        <h5 class="mb-3">Cart Totals</h5>
                        <form action="{{route('checkout.payment')}}" method="post" id="total-form">
                            @csrf
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>{{$sub_total}} ₼</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>{{$shipping_fee}} ₼</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        @php $total_amount=$sub_total+$shipping_fee; @endphp
                                        <td>{{$total_amount}} ₼</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" name="total_amount" value="{{$total_amount}}">
                                <button type="submit" hidden>submit</button>
                            </div>
                        </form>

                        <div class="checkout_pagination d-flex justify-content-end mt-3">
                            <a href="{{route('checkout.shipping')}}"
                               class="btn btn-primary mt-2 ml-2 d-none d-sm-inline-block">Go Back</a>
                            <a id="total-link" href="{{route('checkout.payment')}}" class="btn btn-primary mt-2 ml-2">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Area End -->
    <script>
        document.getElementById('total-link').addEventListener('click', function (event) {
            event.preventDefault();
            document.getElementById('total-form').submit();
        });
    </script>
@endsection
