@extends('frontend.Layouts')
@section('content')
    <!--------------- Include Preloader File -------------->
    @include('frontend.include.prelodear')

    <!--------------- Include Header Menu File -------------->
    @include('frontend.include.header-menu')

    <!-- ================================
           START LOGIN AREA
    ================================= -->
    <section class="login-area py-5">
        <div class="container">
            <div class="col-lg-7 mx-auto">
                <form action="#" class="card">
                    <div class="card-body">
                        <div class="form-group text-center">
                            <h4 class="mb-1 sec-title">Login to your account!</h4>
                            <p class="sec-desc">with your social network.</p>
                        </div>
                        <!-- end form-group -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 form-group">
                                <button class="btn btn-primary w-100">
                                    <i class="fab fa-google mr-2"></i>Google
                                </button>
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 form-group">
                                <button class="btn btn-primary bg-blue border-blue w-100">
                                    <i class="fab fa-facebook-f mr-2"></i>Facebook
                                </button>
                            </div>
                            <!-- end col-lg-4 -->
                            <div class="col-lg-4 col-md-4 form-group">
                                <button class="btn btn-primary bg-cyan border-cyan w-100">
                                    <i class="fab fa-twitter mr-2"></i>Twitter
                                </button>
                            </div>
                            <!-- end col-lg-4 -->
                        </div>
                        <!-- end row -->
                        <div class="d-flex align-items-center">
                            <hr class="border-top-gray flex-grow-1" />
                            <span class="mx-2 text-uppercase">or</span>
                            <hr class="border-top-gray flex-grow-1" />
                        </div>
                        <div class="form-group">
                            <label class="label-text">Username or email address</label>
                            <input type="text" name="text" class="form-control form--control"
                                placeholder="Username or email" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Password</label>
                            <div class="position-relative">
                                <input class="form-control form--control password-field" type="password" name="password"
                                    placeholder="Password" />
                                <a href="javascript:void(0)"
                                    class="position-absolute top-0 right-0 h-100 btn toggle-password"
                                    title="Toggle show/hide password">
                                    <i class="far fa-eye eye-on"></i>
                                    <i class="far fa-eye-slash eye-off"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <div class="custom-control custom-checkbox fs-15">
                                <input type="checkbox" class="custom-control-input" id="signin-remember" />
                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                            </div>
                            <a href="recover.html" class="btn-link fs-15 font-weight-normal">Forgot Your Password?</a>
                        </div>
                        <!-- end form-group -->
                        <button class="btn btn-primary" type="submit">
                            Login to Account
                        </button>
                        <p class="mt-3 fs-15">
                            Don't have an account?
                            <a href="sign-up.html" class="btn-link"> Register</a>
                        </p>
                    </div>
                    <!-- end card-body -->
                </form>
            </div>
            <!-- end col-lg-7 -->
        </div>
        <!-- end container -->
    </section>
    <!-- end login-area -->
    <!-- ================================
         START LOGIN AREA
    ================================= -->

    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
