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
                <h2 class="sec-title mb-2">Our Blog</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div><!-- end hero-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!--================================
                      END HERO AREA
                =================================-->

    <!-- ================================
                     START BLOG AREA
                ================================= -->
    <section class="blog-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="sidebar">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3 fw-semi-bold">Search</h5>
                                <div class="position-relative">
                                    <input class="form-control form--control" type="search" name="search"
                                        placeholder="Search Articles">
                                    <button type="submit" class="btn position-absolute top-0 right-0"><i
                                            class="fal fa-search"></i></button>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3 fw-semi-bold">Categories</h5>
                                <ul class="list-item fw-medium">
                                    <li><a href="#"><i class="far fa-angle-right mr-2"></i> Consulting</a></li>
                                    <li><a href="#"><i class="far fa-angle-right mr-2"></i> Creative</a></li>
                                    <li><a href="#"><i class="far fa-angle-right mr-2"></i> Development</a></li>
                                    <li><a href="#"><i class="far fa-angle-right mr-2"></i> Finance</a></li>
                                    <li><a href="#"><i class="far fa-angle-right mr-2"></i> Management</a></li>
                                    <li><a href="#"><i class="far fa-angle-right mr-2"></i> Strategy</a></li>
                                </ul>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3 fw-semi-bold">Recent Post</h5>
                                <div class="media align-items-center mb-3">
                                    <a href="blog-single.html" class="mr-3 flex-shrink-0 media-img">
                                        <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-title mb-1 fs-15"><a href="blog-single.html">Within the
                                                construction industry as their overdraft</a></h5>
                                        <p class="media-text fs-13">12 Feb, 2021 by <a href="#">TechyDevs</a></p>
                                    </div><!-- end media-body -->
                                </div><!-- end media -->
                                <div class="media align-items-center mb-3">
                                    <a href="blog-single.html" class="mr-3 flex-shrink-0 media-img">
                                        <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-title mb-1 fs-15"><a href="blog-single.html">Strategic and
                                                commercial approach with issues</a></h5>
                                        <p class="media-text fs-13">12 Feb, 2021 by <a href="#">TechyDevs</a></p>
                                    </div><!-- end media-body -->
                                </div><!-- end media -->
                                <div class="media align-items-center">
                                    <a href="blog-single.html" class="mr-3 flex-shrink-0 media-img">
                                        <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">
                                    </a>
                                    <div class="media-body">
                                        <h5 class="media-title mb-1 fs-15"><a href="blog-single.html">Strategic and
                                                commercial approach with issues</a></h5>
                                        <p class="media-text fs-13">12 Feb, 2021 by <a href="#">TechyDevs</a></p>
                                    </div><!-- end media-body -->
                                </div><!-- end media -->
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3 fw-semi-bold">Tags</h5>
                                <div class="filter-tags">
                                    <a href="#" class="btn btn-sm btn-light mb-1">fashion</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">style</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">photography</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">Office</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">travel</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">shopping</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">hobbies</a>
                                    <a href="#" class="btn btn-sm btn-light mb-1">business</a>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end sidebar -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card hover-y">
                                <a href="blog-single.html" class="card-head d-block">
                                    <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">

                                </a>
                                <div class="card-body">
                                    <p class="card-text mb-2 fw-medium">25 Dec, 2021 By <a href="#">Techydevs</a></p>
                                    <h4 class="card-title"><a href="blog-single.html">Main reasons to explain fast
                                            business builder</a></h4>
                                    <p class="card-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        eaque ipsa quae</p>
                                    <a href="blog-single.html" class="btn-link">
                                        Read More <i class="fal fa-angle-right ml-1"></i>
                                    </a>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-6-->
                        <div class="col-lg-6 col-md-6">
                            <div class="card hover-y">
                                <a href="blog-single.html" class="card-head d-block">
                                    <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">

                                </a>
                                <div class="card-body">
                                    <p class="card-text mb-2 fw-medium">25 Dec, 2021 By <a href="#">Techydevs</a></p>
                                    <h4 class="card-title"><a href="blog-single.html">Strategy for Norway’s Pesion Fund
                                            Global</a></h4>
                                    <p class="card-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        eaque ipsa quae</p>
                                    <a href="blog-single.html" class="btn-link">
                                        Read More <i class="fal fa-angle-right ml-1"></i>
                                    </a>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-6-->
                        <div class="col-lg-6 col-md-6">
                            <div class="card hover-y">
                                <a href="blog-single.html" class="card-head d-block">
                                    <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">

                                </a>
                                <div class="card-body">
                                    <p class="card-text mb-2 fw-medium">25 Dec, 2021 By <a href="#">Techydevs</a></p>
                                    <h4 class="card-title"><a href="blog-single.html">Business Structured are changed by
                                            Onevo</a></h4>
                                    <p class="card-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        eaque ipsa quae</p>
                                    <a href="blog-single.html" class="btn-link">
                                        Read More <i class="fal fa-angle-right ml-1"></i>
                                    </a>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-6-->
                        <div class="col-lg-6 col-md-6">
                            <div class="card hover-y">
                                <a href="blog-single.html" class="card-head d-block">
                                    <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">

                                </a>
                                <div class="card-body">
                                    <p class="card-text mb-2 fw-medium">25 Dec, 2021 By <a href="#">Techydevs</a></p>
                                    <h4 class="card-title"><a href="blog-single.html">Main reasons to explain fast
                                            business builder</a></h4>
                                    <p class="card-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        eaque ipsa quae</p>
                                    <a href="blog-single.html" class="btn-link">
                                        Read More <i class="fal fa-angle-right ml-1"></i>
                                    </a>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-6-->
                        <div class="col-lg-6 col-md-6">
                            <div class="card hover-y">
                                <a href="blog-single.html" class="card-head d-block">
                                    <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">

                                </a>
                                <div class="card-body">
                                    <p class="card-text mb-2 fw-medium">25 Dec, 2021 By <a href="#">Techydevs</a></p>
                                    <h4 class="card-title"><a href="blog-single.html">Strategy for Norway’s Pesion Fund
                                            Global</a></h4>
                                    <p class="card-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem eaque ipsa quae</p>
                                    <a href="blog-single.html" class="btn-link">
                                        Read More <i class="fal fa-angle-right ml-1"></i>
                                    </a>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-6-->
                        <div class="col-lg-6 col-md-6">
                            <div class="card hover-y">
                                <a href="blog-single.html" class="card-head d-block">
                                  <img src="{{ asset('frontend/images/img3.jpg') }}" alt="blog image">

                                </a>
                                <div class="card-body">
                                    <p class="card-text mb-2 fw-medium">25 Dec, 2021 By <a href="#">Techydevs</a></p>
                                    <h4 class="card-title"><a href="blog-single.html">Business Structured are changed
                                            by Onevo</a></h4>
                                    <p class="card-text mb-3">Sed ut perspiciatis unde omnis iste natus error sit
                                        voluptatem eaque ipsa quae</p>
                                    <a href="blog-single.html" class="btn-link">
                                        Read More <i class="fal fa-angle-right ml-1"></i>
                                    </a>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col-lg-6-->
                    </div>
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
                </div><!-- end col-lg-8 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end blog-area -->
    <!-- ================================
                     START BLOG AREA
                ================================= -->



    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
