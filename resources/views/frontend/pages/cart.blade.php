@extends('layouts.frontend.master')

@section('content')

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Cart</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Cart Area -->
    @if(session('cart'))
        <div class="cart_area section_padding_100_70 clearfix">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <div class="cart-table">
                            <div class="table-responsive">
                                <table class="table table-bordered mb-30">
                                    <thead>
                                    <tr>
                                        <th scope="col"><i class="icofont-ui-delete"></i></th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $total_amount = 0; @endphp
                                    @foreach(session('cart') as $id =>$product)
                                        <tr>
                                            <form action="{{ route('remove.from.cart', $id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="product_id" value="{{ $id }}">
                                                <th scope="row">
                                                    <button type="submit" class="btn btn-link"><i class="icofont-close"></i></button>
                                                </th>
                                            </form>
                                            <td>
                                                <img src="{{ asset($product['image']) }}" alt="Product">
                                            </td>
                                            <td>
                                                <a href="#">{{$product['title']}}</a>
                                            </td>
                                            <td>{{$product['price']}} ₼</td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" class="qty-text update-cart" step="1" min="1" max="99" name="quantity" value="{{$product['quantity']}}" data-id="{{ $id }}">
                                                </div>
                                            </td>
                                            @php $product_total = $product['price'] * $product['quantity']; $total_amount += $product_total @endphp
                                            <td class="product-total">{{ $product_total }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div  class="col-6 col-lg-3">
                        <div  class="cart-total-area mb-30">
                            <h5 style="text-align: center" class="mb-3">Cart Totals</h5>
                            <div class="table-responsive">
                                <table class="table mb-3">
                                    <tbody>
                                    <tr>
                                        <td>Total</td>
                                        <td>{{ $total_amount }} ₼</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".update-cart").change(function (e) {
                    e.preventDefault();

                    var ele = $(this);

                    $.ajax({
                        url: '{{ route('update.cart') }}',
                        method: "patch",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.attr("data-id"),
                            quantity: ele.parents("tr").find(".qty-text").val()
                        },
                        success: function (response) {
                            ele.parents("tr").find(".product-total").html(response.total);
                            $(".cart-total").html(response.cartTotal);
                        }
                    });
                });
            });
        </script>

    @endif

    <!-- Cart Area End -->

@endsection
