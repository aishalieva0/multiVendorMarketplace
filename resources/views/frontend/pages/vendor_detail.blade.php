@extends('layouts.frontend.master')

@section('content')
<style>
    .ec-catalog-vendor {
  position: relative;
}

.ec-catalog-vendor-info {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
}

</style>
<div id="ec-overlay" style="display: none;"><span class="loader_img"></span></div>
<!-- Page detail section -->
<section class="ec-bnr-detail ec-catalog-vendor-sec section-space-pt">
        <div class="ec-page-detail">
            <div class="container">
                <div class="ec-main-heading d-none">
                    <h2>Vendor <span>Detail</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 profile-banner space-info margin-bottom-30">
                        <ul class="social-bar mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                        <div class="ec-page-description ec-page-description-info">
                            <div class="ec-page-block">
                                <div class="ec-catalog-vendor">
                                    <img src="{{ asset('assets/frontend/img/bg-img/8.jpg') }}" alt="vendor img">
                                </div>

                                <div class="ec-catalog-vendor-info row">
                                    <div class="col-lg-3 col-md-6 ec-catalog-name pad-15">
                                        <a href="vendor-profile.html">
                                            <h6 class="name">Neon Fashion</h6>
                                        </a>
                                        <p>( Retail Business )</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ec-catalog-ratings pad-15">
                                        <h6>Level</h6>
                                        <p>Level : 9 out of 10</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ec-catalog-pro-count pad-15">
                                        <h6>Seller Products</h6>
                                        <p>568 Products</p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 ec-catalog-since pad-15">
                                        <h6>Seller since</h6>
                                        <p>1year and 11months</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 margin-bottom-30">
                        <div class="ec-page-description p-30">
                            <h5 class="ec-desc-title">About Our Firm</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1500s, when an unknown printer took a galley of type and
                                scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
