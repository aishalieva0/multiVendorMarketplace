@extends('layouts.frontend.master')

@section('content')
    <style>
        .wishlist-button {
            border: none;
            background: none;
            padding: 0;
        }

        .wishlist-button:focus {
            outline: none;
        }

        .wishlist-button .icofont-heart {
            color: rgba(45, 45, 45, 0.11);
        }

        .wishlist-button.in-wishlist .icofont-heart {
            color: #ff0000;
        }

    </style>
    <!-- Quick View Modal Area -->
    <div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="quickview_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="quickview_pro_img">
                                        {{--                                        <img class="first_img" src="img/product-img/new-1-back.png" alt="">--}}
                                        {{--                                        <img class="hover_img" src="img/product-img/new-1.png" alt="">--}}
                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview_pro_des">
                                        <h4 class="title">Boutique Silk Dress</h4>

                                        <h5 class="price">$120.99 <span>$130</span></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita
                                            quibusdam aspernatur, sapiente consectetur accusantium perspiciatis
                                            praesentium eligendi, in fugiat?</p>
                                        <a href="#">View Full Product Details</a>
                                    </div>
                                    <!-- Add to Cart Form -->
                                    <form class="cart" method="post">
                                        <div class="quantity">
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="12"
                                                   name="quantity" value="1">
                                        </div>
                                        <button type="submit" name="addtocart" value="5" class="cart-submit">Add to
                                            cart
                                        </button>
                                        <!-- Wishlist -->
                                        <div class="modal_pro_wishlist">
                                            <a href="wishlist.html"><i class="icofont-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="modal_pro_compare">
                                            <a href="compare.html"><i class="icofont-exchange"></i></a>
                                        </div>
                                    </form>
                                    <!-- Share -->
                                    <div class="share_wf mt-30">
                                        <p>Share with friends</p>
                                        <div class="_icon">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Area -->

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>Shop Grid</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <section class="shop_grid_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop_grid_product_area">
                        <div class="row justify-content-center">
                            @foreach($products as $product)
                                <!-- Single Product -->
                                <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                                    <div class="single-product-area mb-30">
                                        <div class="product_image">
                                            <!-- Product Image -->
                                            <img class="normal_img"
                                                 src="{{ asset('products_images/'.$product->image) }}" alt="">
                                            {{--                                            <img class="hover_img" src="{{ asset('img/product-img/new-1.png') }}"--}}
                                            {{--                                                 alt="">--}}

                                            <!-- Product Badge -->
                                            <div class="product_badge">
                                                <span>{{$product->badge}}</span>
                                            </div>

                                            <!-- Wishlist -->
                                            <div class="product_wishlist wishicon">
                                                <form action="{{ route('wishlist.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id"
                                                           value="{{ $product->id }}">
                                                    <button type="submit"
                                                            class="wishlist-button {{ auth()->guard('user')->user()->wishlist->contains('product_id',$product->id) ? 'in-wishlist' : '' }}">
                                                        <span><i class="icofont-heart"></i></span>
                                                    </button>
                                                </form>
                                            </div>


                                        </div>

                                        <!-- Product Description -->
                                        <div class="product_description">
                                            <!-- Add to cart -->
                                            <div class="product_add_to_cart">
                                                <a href="{{ route('add.to.cart', $product->id) }}"><i
                                                        class="icofont-shopping-cart"></i> Add to Cart</a>
                                            </div>

                                            <!-- Quick View -->
                                            <div class="product_quick_view">
                                                <a href="#" data-toggle="modal" data-target="#quickview"><i
                                                        class="icofont-eye-alt"></i> Quick View</a>
                                            </div>

                                            <p class="brand_name">Top</p>
                                            <a href="#">{{$product->title}}</a>
                                            <h6 class="product-price">{{$product->price}} ₼</h6>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Shop Pagination Area -->
                    <div class="shop_pagination_area mt-30">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-left"
                                                                     aria-hidden="true"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                <li class="page-item"><a class="page-link" href="#">9</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right"
                                                                     aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <script>
                $('.wishlist-button').click(function (event) {
                    event.preventDefault();

                    var form = $(this).closest('form');
                    var product_id = form.find('input[name="product_id"]').val();

                    if ($(this).hasClass('in-wishlist')) {
                        $.ajax({
                            url: '/wishlist/' + product_id,
                            type: 'DELETE',
                            data: {
                                '_token': '{{ csrf_token() }}',
                            },
                            success: function (response) {
                                if (response.success) {
                                    form.find('.wishlist-button').removeClass('in-wishlist');
                                } else {
                                    alert(response.message);
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR);
                                console.log(textStatus);
                                console.log(errorThrown);
                            }
                        });
                    } else {
                        $.ajax({
                            url: form.attr('action'),
                            type: form.attr('method'),
                            data: form.serialize(),
                            success: function (response) {
                                form.find('.wishlist-button').addClass('in-wishlist');
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                console.log(jqXHR);
                                console.log(textStatus);
                                console.log(errorThrown);
                            }
                        });
                    }
                });


            </script>

        </div>
    </section>

@endsection
