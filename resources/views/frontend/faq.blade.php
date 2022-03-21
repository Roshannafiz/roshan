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
                <h2 class="sec-title mb-2">Frequently Asked Questions</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Faq
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
                       START FAQ AREA
                    ================================= -->
    <section class="faq-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <button class="btn" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    How do I find my Windows product key?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    I've downloaded an ISO file, now what?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Is the media bootable?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    What animal would be cutest if scaled down?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">
                                    The question is: Is this what we really want?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">
                                    The Power of an Omnichannel?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseSeven"
                                    aria-expanded="false" aria-controls="collapseSeven">
                                    Insurance IT Transformation – Enabling Digital Change?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                        <div class="card">
                            <div class="card-header" id="headingEight">
                                <button class="btn collapsed" data-toggle="collapse" data-target="#collapseEight"
                                    aria-expanded="false" aria-controls="collapseEight">
                                    Digital Ecosystem Management?
                                    <i class="fal fa-plus"></i>
                                </button>
                            </div>
                            <!-- end card-header -->
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                data-parent="#accordion">
                                <div class="card-body">
                                    Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you
                                    probably haven't heard of them accusamus labore sustainable
                                    VHS.
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end collapse -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end accordion -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3 fw-semi-bold">Need Any Help?</h4>
                                <p class="mb-3">
                                    Contact us at the Consulting office nearest to you or submit
                                    a business inquiry online.
                                </p>
                                <a href="contact.html" class="btn btn-light">
                                    Contact Us <i class="fal fa-angle-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end card -->
                        <a href="#" class="btn btn-primary">
                            <i class="fal fa-file-pdf mr-2"></i>Company Presentation
                        </a>
                        <div class="sidebar-widget my-4 border-bottom border-bottom-gray pb-4">
                            <h5 class="mb-3 fw-semi-bold">Recent News</h5>
                            <div class="media align-items-center mb-3">
                                <a href="blog-single.html" class="mr-3 flex-shrink-0 media-img">
                                    <img src="{{ asset('frontend/images/img20.jpg') }}" alt="blog image" />
                                </a>
                                <div class="media-body">
                                    <h5 class="media-title mb-1 fs-15">
                                        <a href="blog-single.html">Within the construction industry as their overdraft</a>
                                    </h5>
                                    <p class="media-text fs-14">
                                        12 Feb, 2021 by <a href="#">TechyDevs</a>
                                    </p>
                                </div>
                                <!-- end media-body -->
                            </div>
                            <!-- end media -->
                            <div class="media align-items-center">
                                <a href="blog-single.html" class="mr-3 flex-shrink-0 media-img">
                                    <img src="{{ asset('frontend/images/img21.jpg') }}" alt="blog image" />
                                </a>
                                <div class="media-body">
                                    <h5 class="media-title mb-1 fs-15">
                                        <a href="blog-single.html">Strategic and commercial approach with issues</a>
                                    </h5>
                                    <p class="media-text fs-14">
                                        12 Feb, 2021 by <a href="#">TechyDevs</a>
                                    </p>
                                </div>
                                <!-- end media-body -->
                            </div>
                            <!-- end media -->
                        </div>
                        <!-- end sidebar-widget -->
                        <div class="sidebar-widget">
                            <h5 class="mb-3 fw-semi-bold">Social Profiles</h5>
                            <div class="social-icons">
                                <a href="#" class="icon-element icon-element-xs mr-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="icon-element icon-element-xs mr-1"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="icon-element icon-element-xs"><i class="fab fa-instagram"></i></a>
                            </div>
                            <!-- end social-icons -->
                        </div>
                        <!-- end sidebar-widget -->
                    </div>
                    <!-- end sidebar -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end faq-area -->
    <!-- ================================
                       START FAQ AREA
                    ================================= -->

    <!-- ================================
                       START NEWSLETTER AREA
                    ================================= -->
    <section class="newsletter-area section-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="sec-title my-2">Get Advice From Our Professionals</h2>
                </div>
                <!-- end col-lg-5 -->
                <div class="col-lg-7">
                    <form method="post" class="row">
                        <div class="col-lg-6 col-md-6 form-group">
                            <input class="form-control form--control" type="text" name="name" placeholder="Name" />
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6 col-md-6 form-group">
                            <input class="form-control form--control" type="email" name="email" placeholder="Email" />
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6 col-md-6 form-group">
                            <input class="form-control form--control" type="text" name="subject" placeholder="Subject" />
                        </div>
                        <!-- end col-lg-6 -->
                        <div class="col-lg-6 col-md-6 form-group">
                            <button class="btn btn-primary w-100" type="submit">
                                Send Us Message <i class="fal fa-angle-right ml-1"></i>
                            </button>
                        </div>
                        <!-- end col-lg-6 -->
                    </form>
                </div>
                <!-- end col-lg-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end newsletter-area -->
    <!-- ================================
                       START NEWSLETTER AREA
                    ================================= -->

    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
