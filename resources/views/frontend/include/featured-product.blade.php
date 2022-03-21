<?php
use App\Models\Product;
use App\Models\Wishlist;
?>
<!-- ================================
       START PRODUCT AREA
================================= -->
<section class="product-area section-padding">
    <div class="container">
        <div class="text-center">
            <p class="mb-2 fw-medium">Check Out Our</p>
            <h3 class="sec-title">Featured Products</h3>
        </div>
        <div class="row mt-5">
            @foreach ($featuredProducts as $featuredProduct)
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center hover-y overflow-hidden">
                        <ul class="product-action-list">
                            <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i
                                        class="fal fa-heart"></i></a></li>
                            <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i
                                        class="fal fa-shopping-cart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                        class="fal fa-random"></i></a></li>
                        </ul>
                        <div class="card-head">
                            <img src="{{ asset('admin/images/upload-product/large/' . $featuredProduct['main_image']) }}"
                                data-src="images/shop-img3.png" alt="product image" class="card-img-top lazy">
                            <a href="{{ url('product-view/' . $featuredProduct['id']) }}" class="btn btn-sm btn-primary add-to-cart-btn">Shop Now<i
                                    class="fal fa-angle-right ml-1"></i></a>
                        </div><!-- end card-head -->
                        <div class="card-body">
                            <h4 class="card-title fs-20 mb-1"><a
                                    href="{{ url('product-view/' . $featuredProduct['id']) }}">{{ $featuredProduct['product_name'] }}</a>
                            </h4>
                            <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                                <div class="star-rating fs-14" data-rating="5"></div>
                                <span class="rating-counter">(2 Reviews)</span>
                            </div>
                            <div class="price-range fs-18 fw-semi-bold">
                                <span class="text-color-1">
                                    ${{ $featuredProduct['product_seal_price'] }}
                                </span>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col-lg-3 -->
            @endforeach
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
 START PRODUCT AREA
================================= -->
