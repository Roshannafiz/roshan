    <!-- ================================
       START SERVICE AREA
================================= -->
    <section class="service-area section--padding">
        <div class="container">
            <div class="text-center">
                <p class="mb-2 fw-medium">Newest Collection For You</p>
                <h2 class="sec-title">Check Out Our Newest items</h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <a href="{{ url('/shop') }}" class="new-product-item position-relative d-block text-black-50 mb-4">
                        <img src="{{ asset('frontend/images/shop-img.jpg') }}" data-src="images/shop-img.jpg" alt="new product image"
                            class="w-100 rounded lazy">
                        <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center pl-4">
                            <div>
                                <h4 class="mb-2 fw-semi-bold">Product Collection</h4>
                                <span>Shop now <i class="fal fa-angle-right ml-1"></i></span>
                            </div>
                        </div>
                    </a><!-- end new-product-item -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <a href="{{ url('/shop') }}" class="new-product-item position-relative d-block text-black-50 mb-4">
                        <img src="{{ asset('frontend/images/shop-img2.jpg') }}" data-src="images/shop-img2.jpg" alt="new product image"
                            class="w-100 rounded lazy">
                        <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center pl-4">
                            <div>
                                <h4 class="mb-2 fw-semi-bold">Basket Collection</h4>
                                <span>Shop now <i class="fal fa-angle-right ml-1"></i></span>
                            </div>
                        </div>
                    </a><!-- end new-product-item -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end service-area -->
    <!-- ================================
 START SERVICE AREA
================================= -->

    <hr class="border-top-gray my-0">
