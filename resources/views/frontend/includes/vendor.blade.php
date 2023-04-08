<!-- Best Rated/Onsale/Top Sale Product Area -->
<section class="best_rated_onsale_top_sellares section_padding_100_70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tabs_area">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs" role="tablist" id="product-tab">
                        <li class="nav-item">
                            <a href="#top-sellers" class="nav-link" data-toggle="tab" role="tab">Top Vendors</a>
                        </li>
                        <li class="nav-item">
                            <a href="#on-sale" class="nav-link active" data-toggle="tab" role="tab">On Sale</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="top-sellers">
                            <div class="top_sellers_area">
                                <div class="row">
                                    @foreach ($vendors as $vendor)
                                        <div class="col-12 col-sm-6 col-lg-4">
                                            <div class="single_top_sellers">
                                                <div class="top_seller_image">
                                                    <img src="{{ asset('assets/frontend/img/product-img/4.jpg') }}" alt="Top-Sellers">
                                                </div>
                                                <div class="top_seller_desc">
                                                    <h5><b>{{ $vendor->shop_name }}</b></h5>
                                                    <h6>{{ $vendor->products_count }} Products </h6>
                                                    <div
                                                        class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                        <div class="ts_product_quick_view">
                                                            <a href="#" data-toggle="modal"><i
                                                                    class="icofont-swoosh-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade show active" id="on-sale">
                            <div class="on_sale_area">
                                <div class="row">
                                    @foreach ($sales as $sale)

                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="single_top_sellers">
                                            <div class="top_seller_image">
                                                <img src="{{asset('products_images/'. $sale->image) ?? ''}}"
                                                    alt="Top-Sellers">
                                            </div>
                                            <div class="top_seller_desc">
                                                <h5>{{ $sale->title }}</h5>
                                                <h6>{{ $sale->price }}<span>{{ $sale->sale_price }}</span></h6>

                                                <!-- Info -->
                                                <div
                                                    class="ts-seller-info mt-3 d-flex align-items-center justify-content-between">
                                                    <!-- Add to cart -->
                                                    <div class="ts_product_add_to_cart">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add To Cart"><i
                                                                class="icofont-shopping-cart"></i></a>
                                                    </div>

                                                    <!-- Wishlist -->
                                                    <div class="ts_product_wishlist">
                                                        <a href="wishlist.html" data-toggle="tooltip"
                                                            data-placement="top" title="Wishlist"><i
                                                                class="icofont-heart"></i></a>
                                                    </div>

                                                    <!-- Compare -->
                                                    <div class="ts_product_compare">
                                                        <a href="compare.html" data-toggle="tooltip"
                                                            data-placement="top" title="Compare"><i
                                                                class="icofont-exchange"></i></a>
                                                    </div>

                                                    <!-- Quick View -->
                                                    <div class="ts_product_quick_view">
                                                        <a href="#" data-toggle="modal"
                                                            data-target="#quickview{{ $sale->id }}"><i class="icofont-eye-alt"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Best Rated/Onsale/Top Sale Product Area -->
