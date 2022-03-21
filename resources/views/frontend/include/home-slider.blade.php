    <!--================================
         START HERO AREA
=================================-->
    <section class="hero-area">
        <div class="hero-slider owl-carousel owl-theme owl-theme-styled">

            @foreach ($sliders as $slider)
                <div class="hero-item hero-bg-4"
                    style="background-image: url({{ asset('admin/images/upload-slider/'. $slider['image']) }})">
                    <div class="overlay z-index-0"></div><!-- end overlay -->
                    <div class="container position-relative z-index-1">
                        <div class="hero-content">
                            <h2 class="sec-title fs-60 mb-3 text-white">
                                {{ $slider['top_title'] }}
                            </h2>
                            <p class="sec-desc text-white">
                                {{ $slider['title'] }}
                            </p>
                            <div class="mt-4 hero-btns">
                                <a href="{{ url('/shop') }}"
                                    class="btn btn-primary mr-2 mb-1">{{ $slider['btn_link'] }}<i
                                        class="fal fa-angle-right ml-1"></i></a>
                            </div>
                        </div><!-- end hero-content -->
                    </div><!-- end container -->
                </div>
            @endforeach

            {{-- <div class="hero-item hero-bg-5">
                <div class="overlay z-index-0"></div><!-- end overlay -->
                <div class="container position-relative z-index-1">
                    <div class="hero-content text-center">
                        <h2 class="sec-title fs-60 mb-3 text-white">Find that Perfect Gift and
                            <br> Surprise Someone
                        </h2>
                        <p class="sec-desc text-white">This is just a simple text made for this unique and awesome
                            template,
                            <br> you can replace it with any text.
                        </p>
                        <div class="mt-4 hero-btns">
                            <a href="#" class="btn btn-primary mr-2 mb-1">Shop Now <i
                                    class="fal fa-angle-right ml-1"></i></a>
                            <a href="#" class="btn bg-light mb-1">All Products <i
                                    class="fal fa-angle-right ml-1"></i></a>
                        </div>
                    </div><!-- end hero-content -->
                </div><!-- end container -->
            </div><!-- end hero-item -->
            <div class="hero-item hero-bg-6">
                <div class="overlay z-index-0"></div><!-- end overlay -->
                <div class="container position-relative z-index-1">
                    <div class="hero-content">
                        <h2 class="sec-title fs-60 mb-3 text-white">Beautifully Designed Pieces
                            <br> by Talented Designers
                        </h2>
                        <p class="sec-desc text-white">This is just a simple text made for this unique and awesome
                            template,
                            <br> you can replace it with any text.
                        </p>
                        <div class="mt-4 hero-btns">
                            <a href="#" class="btn btn-primary mr-2 mb-1">Shop Now <i
                                    class="fal fa-angle-right ml-1"></i></a>
                            <a href="#" class="btn bg-light mb-1">All Products <i
                                    class="fal fa-angle-right ml-1"></i></a>
                        </div>
                    </div><!-- end hero-content -->
                </div><!-- end container -->
            </div><!-- end hero-item --> --}}
        </div><!-- end hero-slider -->
    </section><!-- end hero-area -->
    <!--================================
  END HERO AREA
=================================-->
