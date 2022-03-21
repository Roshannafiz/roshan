    <!-- ================================
       START PRODUCT AREA
================================= -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="text-center">
                <p class="mb-2 fw-medium">Great Collection For You</p>
                <h3 class="sec-title">Best Products</h3>
            </div>
            <div class="row mt-5">
                @foreach ($bestProducts as $bestProduct)
                    <div class="col-lg-3 col-md-6">
                        <div class="card text-center hover-y overflow-hidden">
                            <ul class="product-action-list">
                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                        title="Wishlist"><i class="fal fa-heart"></i></a></li>
                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                        title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                            class="fal fa-random"></i></a></li>
                            </ul>
                            <div class="card-head">
                                <img src="{{ asset('admin/images/upload-product/large/' . $bestProduct['main_image']) }}"
                                    data-src="{{ asset('admin/images/upload-product/large/' . $bestProduct['main_image']) }}" alt="product image" class="card-img-top lazy">
                                <a href="{{ url('product-view/' . $bestProduct['id']) }}" class="btn btn-sm btn-primary add-to-cart-btn">Shop Now<i
                                        class="fal fa-angle-right ml-1"></i></a>
                            </div><!-- end card-head -->
                            <div class="card-body">
                                <h4 class="card-title fs-20"><a href="{{ url('product-view/' . $bestProduct['id']) }}">{{ $bestProduct['product_name'] }}</a></h4>
                                <div class="price-range fs-18 fw-semi-bold">
                                    <span class="text-color-1">${{ $bestProduct['product_seal_price'] }}</span>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col-lg-3 -->
                @endforeach
            </div><!-- end row -->
            {{-- <div class="text-center">
                <a href="#" class="btn btn-primary"><i class="far fa-sync-alt mr-1"></i> Load more product</a>
            </div> --}}
        </div><!-- end container -->
    </section><!-- end product-area -->
    <!-- ================================
 START PRODUCT AREA
================================= -->
