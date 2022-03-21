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
                <h2 class="sec-title mb-2">Keep in touch with us</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </nav>
            </div><!-- end hero-content -->
        </div><!-- end container -->
    </section><!-- end hero-area -->
    <!--================================
          END HERO AREA
    =================================-->

    <!-- ================================
         START CONTACT AREA
    ================================= -->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="alert alert-success alert-message mb-3" role="alert"></div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-4 mb-lg-0 pr-lg-4">
                        <h4 class="mb-3 fw-semi-bold">Contact Information</h4>
                        <p class="mb-3">Lorem ipsum is simply free text dolor sit amett quie adipiscing elit. When
                            an unknown printer took a galley. quiaies lipsum dolor sit atur adip scing</p>
                        <h5 class="mb-3 fw-semi-bold">The Office</h5>
                        <ul class="list-item">
                            <li><span class="fal fa-map-marker-alt mr-2 icon-element icon-element-xs-2"></span> 101 East
                                Parkview Road, New York</li>
                            <li><span class="fal fa-phone mr-2 icon-element icon-element-xs-2"></span> +1 401 572 4423</li>
                            <li><span class="fal fa-envelope mr-2 icon-element icon-element-xs-2"></span> <a
                                    href="mailto:exmaple@support.com">exmaple@support.com</a></li>
                        </ul>
                    </div>
                </div><!-- end col-lg-5 -->
                <div class="col-lg-7">
                    <h4 class="mb-3 fw-semi-bold">Got Any Questions?</h4>
                    <p class="mb-3">Use the form below to get in touch with the support team</p>
                    <form action="http://techydevs.com/demos/themes/html/minzel-demo/minzel/php/contact.php"
                        class="contact-form row">
                        <div class="col-lg-6 form-group">
                            <label class="label-text">Name</label>
                            <input id="name" type="text" name="name" class="form-control form--control" placeholder="Name">
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 form-group">
                            <label class="label-text">Email</label>
                            <input id="email" type="email" name="email" class="form-control form--control"
                                placeholder="Email address">
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 form-group">
                            <label class="label-text">Phone</label>
                            <input id="phone" type="text" name="phone" class="form-control form--control"
                                placeholder="Phone">
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6 form-group">
                            <label class="label-text">Subject</label>
                            <input id="subject" type="text" name="subject" class="form-control form--control"
                                placeholder="Subject">
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-12 form-group">
                            <label class="label-text">Message</label>
                            <textarea id="message" name="message" class="form-control form--control" rows="5"
                                placeholder="Write message here"></textarea>
                        </div><!-- end col-lg-12 -->
                        <div class="col-lg-12">
                            <button id="send-message-btn" class="btn btn-primary" type="submit">Send Message</button>
                        </div><!-- end col-lg-12 -->
                    </form>
                </div><!-- end col-lg-7 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end contact-area -->
    <!-- ================================
         START CONTACT AREA
    ================================= -->



    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
