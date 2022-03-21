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

    <section class="hero-area py-5 bg-gray bread-bg">
        <div class="container">
            <div class="hero-content text-center">
                <h2 class="sec-title mb-2" style="padding-left: 272px">Our Shop</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div><!-- end hero-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!--================================ END HERO AREA =================================-->

    <!-- ================================ START PRODUCT AREA ================================= -->
    <section class="product-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar mb-4 mb-lg-0 position-sticky top-0">
                        <div class="sidebar-widget mb-4 border-bottom border-bottom-gray pb-4">
                            <div class="form-group position-relative mb-4">
                                <input class="form-control form--control" type="search" name="search"
                                    placeholder="Search Products">
                                <button type="submit" class="btn position-absolute top-0 right-0"><i
                                        class="fal fa-search"></i></button>
                            </div>
                            <h5 class="mb-3">Categories</h5>
                            <ul class="list-group list-group-flush fs-15">
                                @foreach ($allCategories as $allCategory)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">{{ $allCategory['category_name'] }}</a>
                                        <span class="badge badge-light badge-pill">14</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- end sidebar-widget -->
                        <div class="sidebar-widget mb-4 border-bottom border-bottom-gray pb-4">
                            <h5 class="mb-3">Price</h5>
                            <form action="#" class="d-flex align-items-center">
                                <input class="form-control form--control form--control-sm" type="text" name="text"
                                    placeholder="$5">
                                <span class="mx-2">-</span>
                                <input class="form-control form--control form--control-sm mr-2" type="text" name="text"
                                    placeholder="$200">
                                <button type="submit" class="btn btn-sm btn-light"><i
                                        class="far fa-angle-right"></i></button>
                            </form>
                        </div><!-- end sidebar-widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-9">
                    <div class="filter-bar d-flex flex-wrap align-items-center justify-content-between">
                        <p class="fs-15 my-2">Showing <span class="text-black">1–6 of 33</span> products</p>
                        <div class="select-picker-wrap">
                            <select class="custom-select" data-width="160" data-size="5">
                                <option value="popularity">Sort by popularity</option>
                                <option value="new">Sort by new</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date" selected="selected">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div><!-- end filter-bar -->
                    <div class="row mt-4">
                        @foreach ($allProducts as $allProduct)
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-center hover-y overflow-hidden">
                                    <ul class="product-action-list">
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                title="Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="{{ url('product-view/' . $allProduct['id']) }}" data-toggle="tooltip"
                                                data-placement="right" title="Add To Cart"><i
                                                    class="fal fa-shopping-cart"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i
                                                    class="fal fa-random"></i></a></li>
                                    </ul>
                                    <div class="card-head">
                                        <img src="{{ asset('admin/images/upload-product/large/' . $allProduct['main_image']) }}"
                                            data-src="{{ asset('admin/images/upload-product/large/' . $allProduct['main_image']) }}"
                                            alt="product image" class="card-img-top lazy">
                                        <a href="{{ url('product-view/' . $allProduct['id']) }}"
                                            class="btn btn-sm btn-primary add-to-cart-btn">Shop Now<i
                                                class="fal fa-angle-right ml-1"></i></a>
                                    </div><!-- end card-head -->
                                    <div class="card-body">
                                        <h4 class="card-title fs-20 mb-1"><a
                                                href="{{ url('product-view/' . $allProduct['id']) }}">
                                                {{ $allProduct['product_name'] }}
                                            </a>
                                        </h4>
                                        <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                                            <div class="star-rating fs-14" data-rating="5"></div>
                                            <span class="rating-counter">(2 Reviews)</span>
                                        </div>
                                        <div class="price-range fs-18 fw-semi-bold">
                                            <span class="text-color-1">
                                                {{-- ${{ $allProduct['product_price'] }} --}}
                                            </span>
                                        </div>
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div>
                        @endforeach
                    </div><!-- end row -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center pagination-list">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true" class="fal fa-angle-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true" class="fal fa-angle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div><!-- end col-lg-9 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end product-area -->
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
                    <p class="text-white">Minzel presents the best in interior design</p>
                </div>
                <a href="sign-up.html" class="btn btn-light">Sign Up <i class="fal fa-angle-right ml-1"></i></a>
            </div><!-- end d-flex -->
        </div><!-- end container -->
    </section><!-- end cta-area -->
    <!-- ================================
                                                                     START CTA AREA
                                                                ================================= -->

    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
