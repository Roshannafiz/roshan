 <?php
 use App\Models\Cart;
 use App\Models\Product;
 
 $item = Cart::cartItem();
 
 ?>
 <!-- ================================
            START HEADER AREA
================================= -->
 <header class="header-area">
     <div class="main-header-top bg-dark py-1">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-6">
                     <div class="header-top-item">
                         <ul class="list-item list-item-white fs-15">
                             <li class="d-inline-block mr-3"><a href="tel:+880 018 62 70 17 17"><i
                                         class="fal fa-phone mr-2 fs-13"></i>+880 018 62 70 17 17</a></li>
                             <li class="d-inline-block mr-3"><a href="https://mail.google.com/mail/u/0/#inbox"><i
                                         class="fal fa-envelope mr-2 fs-13"></i>Mdroshannafiz@gmail.com</a></li>
                         </ul>
                     </div>
                 </div><!-- end col-lg-6 -->
                 <div class="col-lg-6">
                     <div class="header-top-item text-right">
                         <ul class="list-item list-item-white fs-15">
                             <li class="d-inline-block mr-3">
                                 <a href="{{ url('/wishlist') }}"><i class="fal fa-heart mr-2 fs-14"></i>My
                                     Wishlist
                                     <span class="text-color-1">(0)</span>
                                 </a>
                             </li>
                             <li class="d-inline-block mr-3"><a href="{{ url('/sign-up') }}"><i
                                         class="fal fa-sign-in mr-2 fs-14"></i>Register</a></li>
                             <li class="d-inline-block"><a href="{{ url('/login') }}"><i
                                         class="fal fa-sign-in mr-2 fs-14"></i>Login</a></li>
                         </ul>
                     </div>
                 </div><!-- end col-lg-6 -->
             </div><!-- end row -->
         </div><!-- end container -->
     </div><!-- end main-header-top -->
     <div class="main-header bg-white py-4">
         <div class="container">
             <div class="row align-items-center">
                 <div class="col-lg-2">
                     <div class="main-brand-wrap d-flex align-items-center justify-content-between">
                         <a href="{{ url('/') }}" class="main-logo">
                             <img style="width: 170px" src="{{ asset('frontend/images/roshanlogo.png') }}"
                                 alt="logo"></a>
                         <a href="#" class="side-menu-open icon-element icon-element-xs d-block d-lg-none">
                             <i class="fal fa-bars"></i>
                         </a><!-- end side-menu-open -->
                     </div><!-- end main-brand-wrap -->
                 </div><!-- end col-lg-2-->
                 <div class="col-lg-10">
                     <div class="main-header-content d-flex align-items-center justify-content-end">
                         <nav class="main-menu">
                             <ul>
                                 <li>
                                     <a href="{{ url('/') }}">home</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('/shop') }}">shop</a>
                                 </li>
                                 <li class="has-mega-menu">
                                     <a href="{{ url('/faq') }}">faq</a>
                                 </li>
                                 <li>
                                     <a href="{{ asset('/blog') }}">Blog</a>
                                 </li>
                                 <li>
                                     <a href="{{ url('/contact') }}">Contact</a>
                                 </li>
                             </ul>
                         </nav>
                         <div class="main-header-action">
                             <ul class="user-action-list">
                                 <li><a href="{{ url('/cart') }}">
                                         <i class="fal fa-shopping-cart"></i>
                                         <span class="item-count">
                                             @if ($item > 0)
                                                 {{ $item }}
                                             @else
                                                 0
                                             @endif
                                         </span>
                                     </a>
                                 </li>
                                 <li class="dropdown search-dropdown">
                                     <button class="dropdown-toggle" type="button" id="searchDropdownMenu"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <i class="fal fa-search"></i>
                                     </button>
                                     <div class="dropdown-menu dropdown--menu dropdown-menu-right"
                                         aria-labelledby="searchDropdownMenu">
                                         <div class="input-group">
                                             <input type="text" name="text" class="form-control form--control"
                                                 placeholder="Search by keywords...">
                                             <div class="input-group-append">
                                                 <button class="btn btn-primary" type="button"><i
                                                         class="fal fa-search"></i></button>
                                             </div>
                                         </div>
                                     </div>
                                 </li>
                             </ul>
                         </div><!-- end main-header-action -->
                     </div><!-- end main-header-content -->
                 </div><!-- end col-lg-10 -->
             </div><!-- end row -->
         </div><!-- end container -->
     </div><!-- end main-header -->
     <div class="off-canvas">
         <a href="#" class="off-canvas-close icon-element icon-element-xs position-absolute top-0 right-0 mt-3 mr-3">
             <i class="fal fa-times"></i>
         </a><!-- end off-canvas-close -->
         <ul class="list-item off-canvas-menu">
             <li>
                 <a href="index.html">home</a>
                 <ul class="off-canvas-dropdown">
                     <li><a href="index.html">Home one</a></li>
                     <li><a href="index-2.html">Home two</a></li>
                     <li><a href="index-3.html">home three</a></li>
                 </ul>
             </li>
             <li>
                 <a href="#">pages</a>
                 <ul class="off-canvas-dropdown">
                     <li><a href="about.html">about us</a></li>
                     <li><a href="contact.html">contact</a></li>
                     <li><a href="case-studies.html">case studies</a></li>
                     <li><a href="single-case-study.html">single case study</a></li>
                     <li><a href="team-member.html">team member</a></li>
                     <li><a href="team-single.html">team detail</a></li>
                     <li><a href="testimonial.html">testimonial</a></li>
                     <li><a href="faq.html">FAQS</a></li>
                     <li><a href="pricing.html">pricing</a></li>
                     <li><a href="error-404.html">404 error page</a></li>
                     <li><a href="sign-up.html">sign up</a></li>
                     <li><a href="login.html">login</a></li>
                     <li><a href="recover.html">recover password</a></li>
                 </ul>
             </li>
             <li>
                 <a href="#">services</a>
                 <ul class="off-canvas-dropdown">
                     <li><a href="service.html">services</a></li>
                     <li><a href="service-detail.html">service detail</a></li>
                 </ul>
             </li>
             <li>
                 <a href="portfolio-grid.html">portfolio</a>
                 <ul class="off-canvas-dropdown">
                     <li><a href="portfolio-full-width.html">full width</a></li>
                     <li><a href="portfolio-grid.html">portfolio grid</a></li>
                     <li><a href="portfolio-detail.html">portfolio detail</a></li>
                 </ul>
             </li>
             <li>
                 <a href="blog-no-sidebar.html">blog</a>
                 <ul class="off-canvas-dropdown">
                     <li><a href="blog-full-width.html">blog full width</a></li>
                     <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                     <li><a href="blog-single.html">blog detail</a></li>
                 </ul>
             </li>
             <li>
                 <a href="shop-home.html">shop</a>
                 <ul class="off-canvas-dropdown">
                     <li><a href="shop-home.html">shop home</a></li>
                     <li><a href="shop-sidebar.html">shop sidebar</a></li>
                     <li><a href="product-detail.html">product details</a></li>
                     <li><a href="cart.html">cart</a></li>
                     <li><a href="checkout.html">checkout</a></li>
                 </ul>
             </li>
         </ul>
         <div class="text-center mt-5">
             <a href="login.html" class="btn btn-light mr-2"><i class="fal fa-sign-in mr-1"></i> Login</a>
             <a href="sign-up.html" class="btn btn-light"><i class="fal fa-sign-in-alt mr-1"></i> Sign Up</a>
             <a href="contact.html" class="btn btn-primary w-100 mt-2">Work with us <i
                     class="fal fa-angle-right ml-1"></i></a>
         </div>
     </div><!-- end off-canvas -->
 </header>
 <!-- ================================
   END HEADER AREA
================================= -->
