@extends('frontend.Layouts')
@section('content')
    <!--------------- Include Preloader File -------------->
    @include('frontend.include.prelodear')

    <!--------------- Include Header Menu File -------------->
    @include('frontend.include.header-menu')


    <!--================================ START HERO AREA =================================-->
    <section class="hero-area py-5 bg-gray bread-bg">
        <div class="container">
            <div class="hero-content text-center">
                <h2 class="sec-title mb-2">Shopping Cart</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div><!-- end hero-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!--================================
                              END HERO AREA
                        =================================-->

    <!-- ================================ START PRODUCT AREA ================================= -->
    <div id="AppendCartItems">
        @include('frontend.ajax_cart_items')
    </div>

    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
