@extends('layouts.frontend.master')

@section('content')

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Wishlist</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <!-- Wishlist Table Area -->
    <div class="wishlist-table section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table wishlist-table">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-30">
                                <thead>
                                <tr>
                                    <th scope="col"><i class="icofont-ui-delete"></i></th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($wishlist_items as $item)
                                    <tr>
                                        @php
                                        @endphp
                                        <form action="{{ route('wishlist.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="wishlist_id" value="{{ $item->id }}">
                                            <th scope="row">
                                                <button type="submit" class="btn btn-link"><i class="icofont-close"></i></button>
                                            </th>
                                        </form>

                                        <td>
                                            <img src="{{$item->product->image}}" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">{{$item->product->title}}</a>
                                        </td>
                                        <td>{{$item->product->price}} ₼</td>

                                        <td><a href="{{ route('add.to.cart',$item->product->id) }}" class="btn btn-primary btn-sm">Add to Cart</a></td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Wishlist Table Area -->

@endsection
