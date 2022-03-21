@extends('frontend.Layouts')
@section('content')
    <!--------------- Include Preloader File -------------->
    @include('frontend.include.prelodear')

    <!--------------- Include Header Menu File -------------->
    @include('frontend.include.header-menu')

    <!--================================
                                     START HERO AREA
                            =================================-->
    <section class="hero-area py-5 bg-gray bread-bg">
        <div class="container">
            <div class="hero-content text-center">
                <h2 class="sec-title mb-2">Wishlist</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Wishlist
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- end hero-content -->
        </div>
        <!-- end container -->
    </section>
    <!-- end hero-area -->
    <!--================================
                                    END HERO AREA
                            =================================-->

    <!-- ================================
                                   START PRODUCT AREA
                            ================================= -->
    <section class="product-area pt-80 pb-70">
        <div class="container">
            <table class="table table-mobile">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock Status</th>
                        <th>Action</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="product-col">
                            <div class="media align-items-center">
                                <a href="product-detail.html" class="mr-3 d-block">
                                    <img src="{{ asset('frontend/images/product-1.jpg') }}" alt="Product image"
                                        class="img-fluid rounded" />
                                </a>
                                <div class="media-body">
                                    <h5 class="product-title">
                                        <a href="product-detail.html">Beige knitted elastic runner shoes</a>
                                    </h5>
                                </div>
                            </div>
                            <!-- end media -->
                        </td>
                        <td class="price-col">$84.00</td>
                        <td class="stock-col text-success">In stock</td>
                        <td class="action-col">
                            <button class="btn btn-sm btn-primary">
                                <i class="fal fa-shopping-cart mr-2"></i>Add to Cart
                            </button>
                        </td>
                        <td class="remove-col">
                            <a href="#" class="icon-element icon-element-xs-2"><i class="fal fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="product-col">
                            <div class="media align-items-center">
                                <a href="product-detail.html" class="mr-3 d-block">
                                    <img src="{{ asset('frontend/images/product-1.jpg') }}" alt="Product image"
                                        class="img-fluid rounded" />
                                </a>
                                <div class="media-body">
                                    <h5 class="product-title">
                                        <a href="product-detail.html">Beige knitted elastic runner shoes</a>
                                    </h5>
                                </div>
                            </div>
                            <!-- end media -->
                        </td>
                        <td class="price-col">$84.00</td>
                        <td class="stock-col text-success">In stock</td>
                        <td class="action-col">
                            <button class="btn btn-sm btn-primary">
                                <i class="fal fa-shopping-cart mr-2"></i>Add to Cart
                            </button>
                        </td>
                        <td class="remove-col">
                            <a href="#" class="icon-element icon-element-xs-2"><i class="fal fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- end table -->
            <hr class="border-top-gray mb-4" />
            <div class="social-icons">
                <span class="mr-2 fw-medium">Share on:</span>
                <a href="#" class="icon-element icon-element-xs-2 mr-1"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="icon-element icon-element-xs-2 mr-1"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon-element icon-element-xs-2 mr-1"><i class="fab fa-instagram"></i></a>
                <a href="#" class="icon-element icon-element-xs-2"><i class="fab fa-youtube"></i></a>
            </div>
            <!-- end social-icons -->
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
