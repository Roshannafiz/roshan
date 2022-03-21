<?php
use App\Models\Product;
use App\Models\Wishlist;
?>
@extends('frontend.Layouts')
@section('content')
    <!--------------- Include Preloader File -------------->
    @include('frontend.include.prelodear')

    <!--------------- Include Header Menu File -------------->
    @include('frontend.include.header-menu')

    <nav aria-label="breadcrumb">
        <div class="container py-3">
            <ol class="breadcrumb fs-15">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $productDetails['product_name'] }}
                </li>
            </ol>
        </div>
    </nav>
    <!-- ================================ START PRODUCT AREA ================================= -->
    <section class="product-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="product-gallery-one" role="tabpanel"
                            aria-labelledby="product-gallery-one-tab">
                            <img src="{{ asset('admin/images/upload-product/large/' . $productDetails['main_image']) }}"
                                data-src="{{ asset('admin/images/upload-product/large/' . $productDetails['main_image']) }}"
                                alt="full-image" class="w-100 lazy" />
                        </div>
                    </div>
                    <!-- end tab-content -->
                    <ul class="nav nav-tabs product-gallery-nav justify-content-center mb-4" id="myTab" role="tablist">
                        @foreach ($productDetails['gallery_images'] as $image)
                            <li class="nav-item">
                                <a class="nav-link active" id="product-gallery-one-tab" data-toggle="tab"
                                    href="#product-gallery-one" role="tab" aria-controls="product-gallery-one"
                                    aria-selected="true">
                                    <img src="{{ asset('admin/images/upload-product/large/' . $image['image']) }}"
                                        data-src="{{ asset('admin/images/upload-product/large/' . $image['image']) }}"
                                        alt="small-image" class="lazy" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- end col-lg-5 -->

                <!--------------------------------------- Product Here -------------------------------------->
                <div class="col-lg-7">
                    <form action="{{ url('add-to-cart') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="product-details">
                            <div class="d-flex align-items-center justify-content-between fs-14 mb-1">
                                <div class="product-cat">
                                    <a href="{{ url('/' . $productDetails['category']['url']) }}" class="btn-link">
                                        {{ $productDetails['category']['category_name'] }}
                                    </a>,
                                    <a href="#" class="btn-link">
                                        {{ $productDetails['subcategory']['name'] }}
                                    </a>
                                </div>
                                <!-- end product-cat -->
                                <p class="product-sku">SKU: {{ $productDetails['product_code'] }} </p>
                            </div>
                            <h3 class="mb-1 fw-semi-bold">
                                {{ $productDetails['product_name'] }}
                            </h3>
                            <div class="d-flex align-items-center mb-2">
                                <div class="star-rating fs-14" data-rating="4.5"></div>
                                <!-- end product-cat -->
                                <span class="rating-counter">(3 reviews)</span>
                            </div>
                            <div class="price-range fs-20 fw-semi-bold mb-3">
                                <span class="text-color-1 price getAttrPrice">
                                    First Select A Size ($0)
                                    {{-- // $discounted_price = Product::getDiscountedPrice($productDetails['id']); --}}


                                    {{-- @if ($discounted_price > 0)
                                        <span class="td-line-through text-gray-2">
                                            ${{ $productDetails['product_seal_price'] }}
                                        </span>
                                    @else
                                        ${{ $productDetails['product_seal_price'] }}
                                    @endif

                                    @if ($discounted_price > 0)
                                        ${{ $discounted_price }}
                                    @endif --}}
                                </span>
                            </div>
                            <p class="mb-3">
                                {{ $productDetails['short_description'] }}
                            </p>
                            <p class="availability-text mb-3">
                                <span class="text-black fw-medium">Availability:</span>
                                {{ $total_stock }} (In Stock)
                            </p>
                            <div class="d-flex align-items-center mb-3">
                                <p class="text-black fw-medium mr-1">Color:</p>
                                <div class="filter-colors filter--colors">
                                    @foreach ($productDetails['attributes'] as $attribute)
                                        @if ($attribute['color'] == 'Red')
                                            <a href="{{ $attribute['color'] }}" class="red"></a>
                                        @elseif ($attribute['color'] == 'Blue')
                                            <a href="#" class="blue"></a>
                                        @elseif ($attribute['color'] == 'Black')
                                            <a href="#" class="black"></a>
                                        @elseif ($attribute['color'] == 'Green')
                                            <a href="#" class="green"></a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <p class="text-black fw-medium mr-2">Size:</p>
                                <select name="size" class="custom-select w-auto" required id="getPrice"
                                    product-id="{{ $productDetails['id'] }}">
                                    <option value="">Select Size</option>
                                    @foreach ($productDetails['attributes'] as $attribute)
                                        <option value="{{ $attribute['size'] }}">
                                            {{ $attribute['size'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <p class="text-black fw-medium mr-2">Qty:</p>
                                <div class="quantity-box d-flex align-items-center">
                                    <a href="javascript:void(0)" class="qtyBtn qtyDec"><i class="fal fa-minus"></i></a>
                                    <input type="number" class="qtyInput" required name="quantity" id="quantity"
                                        min="1" value="1" />
                                    <a href="javascript:void(0)" class="qtyBtn qtyInc"><i class="far fa-plus"></i></a>
                                </div>
                            </div>

                            <!-------------------------- Cart Button Here --------------------->
                            <div class="d-flex align-items-center mb-3">
                                <input type="hidden" value="{{ $productDetails['id'] }}" name="product_id">
                                <button type="submit" class="btn btn-primary mr-4"><i class="fal fa-shopping-cart mr-1"></i>
                                    Add to Cart
                                </button>
                                <a href="#" class="btn-link"><i class="fal fa-heart mr-1"></i> Add to Wishlist</a>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <p class="text-black fw-medium mr-2">Share:</p>
                                <div class="social-icons">
                                    <a href="#" class="icon-element icon-element-xs-2 mr-1"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="icon-element icon-element-xs-2 mr-1"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="icon-element icon-element-xs-2"><i class="fab fa-instagram"></i></a>
                                </div>
                                <!-- end social-icons -->
                            </div>
                        </div>
                    </form>
                    <!-- end product-details -->
                </div>
                <!-- end col-lg-7 -->
            </div>
            <!-- end row -->
            <div class="product-details-tab-wrap pt-50">
                <ul class="nav nav-tabs nav-pills justify-content-center mb-4" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-description-tab" data-toggle="tab"
                            href="#product-description" role="tab" aria-controls="product-description" aria-selected="true">
                            Description
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="additional-information-tab" data-toggle="tab"
                            href="#additional-information" role="tab" aria-controls="additional-information"
                            aria-selected="false">
                            Additional Information
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                            aria-controls="reviews" aria-selected="false">
                            Reviews <span>(8)</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane show active" id="product-description" role="tabpanel"
                        aria-labelledby="product-description-tab">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product Information</h4>
                                <p class="card-text mb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Maecenas fermentum, diam non iaculis finibus, ipsum arcu
                                    sollicitudin dolor, ut cursus sapien sem sed purus. Donec
                                    vitae fringilla tortor, sed fermentum nunc. Suspendisse
                                    sodales turpis dolor, at rutrum dolor tristique id.
                                </p>
                                <ul class="list-item list-item-bullet mb-3">
                                    <li>Nunc nec porttitor turpis. In eu risus enim.</li>
                                    <li>Vivamus finibus vel mauris ut vehicula.</li>
                                    <li>Nullam a magna porttitor, dictum risus nec</li>
                                </ul>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                                    erat ut turpis. Suspendisse urna viverra non, semper
                                    suscipit, posuere a, pede. Donec nec justo eget felis
                                    facilisis fermentum.
                                </p>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab-pane -->
                    <div class="tab-pane" id="additional-information" role="tabpanel"
                        aria-labelledby="additional-information-tab">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Additional Information</h4>
                                <h5 class="mb-3">General</h5>
                                <div class="custom-table">
                                    <div class="custom-table-name">Material</div>
                                    <div class="custom-table-value">Aluminium, Plastic</div>
                                </div>
                                <!-- end custom-table -->
                                <div class="custom-table">
                                    <div class="custom-table-name">Color</div>
                                    <div class="custom-table-value">Golden</div>
                                </div>
                                <!-- end custom-table -->
                                <div class="custom-table">
                                    <div class="custom-table-name">Type</div>
                                    <div class="custom-table-value">Cuckoo Clock</div>
                                </div>
                                <!-- end custom-table -->
                                <h5 class="mb-3 mt-5">Dimensions</h5>
                                <div class="custom-table">
                                    <div class="custom-table-name">Length</div>
                                    <div class="custom-table-value">98 mm</div>
                                </div>
                                <!-- end custom-table -->
                                <div class="custom-table">
                                    <div class="custom-table-name">Width</div>
                                    <div class="custom-table-value">206 mm</div>
                                </div>
                                <!-- end custom-table -->
                                <div class="custom-table">
                                    <div class="custom-table-name">Height</div>
                                    <div class="custom-table-value">208 mm</div>
                                </div>
                                <!-- end custom-table -->
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab-pane -->
                    <div class="tab-pane" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">
                                    Reviews <span class="badge badge-light">(8)</span>
                                </h4>
                                <div class="reviews-list mt-3">
                                    <div class="media mb-4 border-bottom border-bottom-gray pb-4">
                                        <div class="mr-sm-4 mb-2 mb-sm-0">
                                            <h5 class="mb-1">Samanta J.</h5>
                                            <div class="star-rating fs-14" data-rating="5"></div>
                                            <p class="fs-14">5 days ago</p>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-1">Good, perfect size</h6>
                                            <p class="mb-3 fs-15">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation.
                                            </p>
                                            <div class="review-action">
                                                <a href="#" class="btn btn-sm btn-light mr-2"><i
                                                        class="fal fa-thumbs-up mr-2"></i>Helpful
                                                    <span>(3)</span></a>
                                                <a href="#" class="btn btn-sm btn-light"><i
                                                        class="fal fa-thumbs-down mr-2"></i>Unhelpful
                                                    <span>(1)</span></a>
                                            </div>
                                        </div>
                                        <!-- end media-body -->
                                    </div>
                                    <!-- end media -->
                                    <div class="media mb-4 border-bottom border-bottom-gray pb-4">
                                        <div class="mr-sm-4 mb-2 mb-sm-0">
                                            <h5 class="mb-1">Olivia T.</h5>
                                            <div class="star-rating fs-14" data-rating="5"></div>
                                            <p class="fs-14">6 days ago</p>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-1">Very good product</h6>
                                            <p class="mb-3 fs-15">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation.
                                            </p>
                                            <div class="review-action">
                                                <a href="#" class="btn btn-sm btn-light mr-2"><i
                                                        class="fal fa-thumbs-up mr-2"></i>Helpful
                                                    <span>(0)</span></a>
                                                <a href="#" class="btn btn-sm btn-light"><i
                                                        class="fal fa-thumbs-down mr-2"></i>Unhelpful
                                                    <span>(0)</span></a>
                                            </div>
                                        </div>
                                        <!-- end media-body -->
                                    </div>
                                    <!-- end media -->
                                    <div class="media mb-4 border-bottom border-bottom-gray pb-4">
                                        <div class="mr-sm-4 mb-2 mb-sm-0">
                                            <h5 class="mb-1">Margarat J.</h5>
                                            <div class="star-rating fs-14" data-rating="5"></div>
                                            <p class="fs-14">6 days ago</p>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-1">Good, perfect size</h6>
                                            <p class="mb-3 fs-15">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                                nostrud exercitation.
                                            </p>
                                            <div class="review-action">
                                                <a href="#" class="btn btn-sm btn-light mr-2"><i
                                                        class="fal fa-thumbs-up mr-2"></i>Helpful
                                                    <span>(0)</span></a>
                                                <a href="#" class="btn btn-sm btn-light"><i
                                                        class="fal fa-thumbs-down mr-2"></i>Unhelpful
                                                    <span>(0)</span></a>
                                            </div>
                                        </div>
                                        <!-- end media-body -->
                                    </div>
                                    <!-- end media -->
                                </div>
                                <!-- end reviews-list -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center pagination-list">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true" class="fal fa-angle-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true" class="fal fa-angle-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <hr class="border-top-gray mb-4" />
                                <h4 class="card-title mb-1">Add a Review</h4>
                                <p class="card-text">
                                    Your email address will not be published. Required fields
                                    are marked *
                                </p>
                                <hr class="border-top-gray my-4" />
                                <form class="leave-rating">
                                    <input type="radio" name="rating" id="rating-1" value="1" />
                                    <label for="rating-1" class="fas fa-star"></label>
                                    <input type="radio" name="rating" id="rating-2" value="2" />
                                    <label for="rating-2" class="fas fa-star"></label>
                                    <input type="radio" name="rating" id="rating-3" value="3" />
                                    <label for="rating-3" class="fas fa-star"></label>
                                    <input type="radio" name="rating" id="rating-4" value="4" />
                                    <label for="rating-4" class="fas fa-star"></label>
                                    <input type="radio" name="rating" id="rating-5" value="5" />
                                    <label for="rating-5" class="fas fa-star"></label>
                                </form>
                                <form action="#" class="row mt-4">
                                    <div class="col-lg-6">
                                        <label class="label-text">Your Name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control form--control"
                                                placeholder="Your name" />
                                        </div>
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-6">
                                        <label class="label-text">Your Email</label>
                                        <div class="form-group">
                                            <input type="email" class="form-control form--control"
                                                placeholder="Your email" />
                                        </div>
                                    </div>
                                    <!-- end col-lg-6 -->
                                    <div class="col-lg-12">
                                        <label class="label-text">Your Message</label>
                                        <div class="form-group">
                                            <textarea class="form-control form--control" name="message" rows="5"
                                                placeholder="Write messages"></textarea>
                                        </div>
                                        <button class="btn btn-primary" type="submit">
                                            Submit Reviews
                                        </button>
                                    </div>
                                    <!-- end col-lg-12 -->
                                </form>
                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab-pane -->
                </div>
                <!-- end tab-content -->
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end product-area -->
    <!-- ================================
                                                                                                                                                            START PRODUCT AREA
                                                                                                                                                            ================================= -->

    <!-- ================================
                                                                                                                                                            START PRODUCT AREA
                                                                                                                                                            ================================= -->
    <section class="product-area section--padding bg-gray">
        <div class="container">
            <h3 class="sec-title text-center">You May Also Like</h3>
            <div class="card-slider owl-carousel owl-theme owl-theme-styled owl-theme--styled mt-4">
                @foreach ($related_products as $related_product)
                    <div class="card text-center hover-y overflow-hidden">
                        <ul class="product-action-list">
                            <li>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i
                                        class="fal fa-heart"></i></a>
                            </li>
                            <li>
                                <a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i
                                        class="fal fa-shopping-cart"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                        class="fal fa-random"></i></a>
                            </li>
                        </ul>
                        <div class="card-head">
                            <img src="{{ asset('admin/images/upload-product/large/' . $related_product['main_image']) }}"
                                data-src="{{ asset('admin/images/upload-product/large/' . $related_product['main_image']) }}"
                                alt="product image" class="card-img-top lazy" />
                            <a href="{{ url('product-view/' . $related_product['id']) }}"
                                class="btn btn-sm btn-primary add-to-cart-btn">Shop Now<i
                                    class="fal fa-angle-right ml-1"></i></a>
                        </div>
                        <!-- end card-head -->
                        <div class="card-body">
                            <h4 class="card-title fs-20 mb-1">
                                <a href="{{ url('product-view/' . $related_product['id']) }}">
                                    {{ $related_product['product_name'] }}
                                </a>
                            </h4>
                            <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                                <div class="star-rating fs-14" data-rating="3"></div>
                                <span class="rating-counter">(2 Reviews)</span>
                            </div>
                            <div class="price-range fs-18 fw-semi-bold">
                                <span class="text-color-1">
                                    ${{ $related_product['product_seal_price'] }}
                                </span>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                @endforeach
            </div>
            <!-- end card-slider -->
        </div>
        <!-- end container -->
    </section>
    <!-- end product-area -->
    <!-- ================================
                                                                                                                                                                                                                                               START PRODUCT AREA
                                                                                                                                                                                                                                            ================================= -->

    <!-- ================================
                                                                                                                                                                                                                                               START CTA AREA
                                                                                                                                                                                                                                            ================================= -->
    <section class="cta-area bg-img py-5 position-relative">
        <div class="overlay z-index-0"></div>
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between position-relative z-index-1">
                <div class="my-2">
                    <h2 class="sec-title text-white mb-1">Sign Up & Get 10% Off</h2>
                    <p class="text-white">
                        Minzel presents the best in interior design
                    </p>
                </div>
                <a href="sign-up.html" class="btn btn-light">Sign Up <i class="fal fa-angle-right ml-1"></i></a>
            </div>
            <!-- end d-flex -->
        </div>
        <!-- end container -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
                                                                                                                                                                                                                                               START CTA AREA
                                                                                                                                                                                                                                            ================================= -->


    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
