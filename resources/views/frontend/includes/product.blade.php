<!-- New Arrivals Area -->
<section class="new_arrivals_area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading new_arrivals">
                    <h5>New Arrivals</h5>
                </div>
            </div>
        </div>

        <div class="row new_arrivals_slides owl-carousel">
            @foreach ($products as $product)
                <div class="col-12">
                    <!-- Single Product -->
                    <div class="single-product-area">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="{{ asset($product->image) }}"  alt="">
                            <img class="hover_img" src="{{ asset($product->image) }}"  alt="">
                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span>New</span>
                            </div>

                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html"><i class="icofont-heart"></i></a>
                            </div>

                            <!-- Compare -->
                            <div class="product_compare">
                                <a href="compare.html"><i class="icofont-exchange"></i></a>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <div class="product_description">
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="#"><i class="icofont-shopping-cart"></i> Add to Cart</a>
                            </div>

                            <!-- Quick View -->
                            <div class="product_quick_view">
                                <a href="#" data-toggle="modal" data-target="#quickview"><i
                                            class="icofont-eye-alt"></i> Quick View</a>
                            </div>

                            <p class="brand_name">{{ $product->title }}</p>
                            <a href="#">{{ $product->overview }}</a>
                            <h6 class="product-price">{{ $product->price }} $</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- New Arrivals Area -->

