@extends('frontend.Layouts')
@section('content')
    <!--------------- Include Preloader File -------------->
    @include('frontend.include.prelodear')

    <!--------------- Include Header Menu File -------------->
    @include('frontend.include.header-menu')

    <!-- ================================
               START SIGN UP AREA
        ================================= -->
    <section class="sign-up-area py-5">
        <div class="container">
            <div class="col-lg-7 mx-auto">
                <form action="#" class="card">
                    <div class="card-body">
                        <div class="form-group text-center">
                            <h4 class="mb-1 sec-title">Create an account!</h4>
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
                            <label class="label-text">First Name</label>
                            <input type="text" name="name" class="form-control form--control" placeholder="e.g. Alex" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Last Name</label>
                            <input type="text" name="name" class="form-control form--control" placeholder="e.g. Smith" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Username</label>
                            <input type="text" name="name" class="form-control form--control"
                                placeholder="e.g. Alex_Smith" />
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <label class="label-text">Email</label>
                            <input type="email" name="email" class="form-control form--control"
                                placeholder="Email address" />
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
                            <p class="fs-14 mt-2 lh-20">
                                Your password must be at least 6 characters long and must
                                contain letters, numbers and special characters. Cannot
                                contain whitespace.
                            </p>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <div class="custom-control custom-checkbox fs-15">
                                <input type="checkbox" class="custom-control-input" id="register-policy" />
                                <label class="custom-control-label" for="register-policy">I agree to the
                                    <a href="#" class="btn-link">privacy policy</a> and
                                    <a href="#" class="btn-link">terms of services</a></label>
                            </div>
                        </div>
                        <!-- end form-group -->
                        <button class="btn btn-primary" type="submit">
                            Register Account
                        </button>
                        <p class="mt-3 fs-15">
                            Already have an account?
                            <a href="login.html" class="btn-link">Login</a>
                        </p>
                    </div>
                    <!-- end card-body -->
                </form>
            </div>
            <!-- end col-lg-7 -->
        </div>
        <!-- end container -->
    </section>
    <!-- end sign-up-area -->
    <!-- ================================
           START SIGN UP AREA
        ================================= -->

    <!---------------------- Include Footer File ------------------->
    @include('frontend.include.footer')
@endsection
