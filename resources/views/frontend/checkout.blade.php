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
                <h2 class="sec-title mb-2">Checkout</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Checkout
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
            <form action="#" class="checkout-discount mb-4">
                <input type="text" class="form-control form--control discount-form-control" id="checkout-discount-input" />
                <label for="checkout-discount-input">Have a coupon?
                    <span class="text-color-1">Click here to enter your code</span></label>
            </form>
            <form action="#" class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-semi-bold mb-3">Billing Details</h5>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label class="label-text">First Name</label>
                                    <input type="text" class="form-control form--control" placeholder="e.g. Alex" />
                                </div>
                                <!-- end col-lg-6 -->
                                <div class="col-lg-6 form-group">
                                    <label class="label-text">Last Name</label>
                                    <input type="text" class="form-control form--control" placeholder="e.g. Smith" />
                                </div>
                                <!-- end col-lg-6 -->
                            </div>
                            <!-- end row -->
                            <div class="form-group">
                                <label class="label-text">Company Name (Optional)</label>
                                <input type="text" class="form-control form--control" placeholder="www.techydevs.com" />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <label class="label-text">Country</label>
                                <input type="text" class="form-control form--control" placeholder="Country" />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <label class="label-text">Street Address</label>
                                <input type="text" class="form-control form--control mb-3"
                                    placeholder="House number and Street name" />
                                <input type="text" class="form-control form--control"
                                    placeholder="Appartments, suite, unit etc ..." />
                            </div>
                            <!-- end form-group -->
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label class="label-text">City</label>
                                    <input type="text" class="form-control form--control" placeholder="City" />
                                </div>
                                <!-- end col-lg-6 -->
                                <div class="col-lg-6 form-group">
                                    <label class="label-text">State</label>
                                    <input type="text" class="form-control form--control" placeholder="State" />
                                </div>
                                <!-- end col-lg-6 -->
                                <div class="col-lg-6 form-group">
                                    <label class="label-text">Postcode / ZIP</label>
                                    <input type="text" class="form-control form--control" placeholder="Postcode/ ZIP" />
                                </div>
                                <!-- end col-lg-6 -->
                                <div class="col-lg-6 form-group">
                                    <label class="label-text">Phone</label>
                                    <input type="text" class="form-control form--control" placeholder="Phone" />
                                </div>
                                <!-- end col-lg-6 -->
                            </div>
                            <!-- end row -->
                            <div class="form-group">
                                <label class="label-text">Email Address</label>
                                <input type="email" class="form-control form--control" placeholder="Your email address" />
                            </div>
                            <!-- end form-group -->
                            <div class="form-group fs-15">
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="checkout-create-acc" />
                                    <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkout-diff-address" />
                                    <label class="custom-control-label" for="checkout-diff-address">Ship to a different
                                        address?</label>
                                </div>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group mb-0">
                                <label class="label-text">Order notes (optional)</label>
                                <textarea class="form-control form--control" rows="4"
                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </div>
                            <!-- end form-group -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-8 -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-semi-bold">Your Order</h5>
                            <hr class="border-top-gray mb-0" />
                            <table class="table table-summary">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-title fs-16">
                                            <a href="product-detail.html">Beige knitted elastic runner shoes</a>
                                        </td>
                                        <td>$84.00</td>
                                    </tr>
                                    <tr>
                                        <td class="product-title fs-16">
                                            <a href="product-detail.html">Beige knitted elastic runner shoes</a>
                                        </td>
                                        <td>$84.00</td>
                                    </tr>
                                    <tr class="summary-subtotal">
                                        <td>Subtotal:</td>
                                        <td>$168.00</td>
                                    </tr>
                                    <tr class="summary-shipping">
                                        <td>Shipping:</td>
                                        <td>Free shipping</td>
                                    </tr>
                                    <tr class="summary-total">
                                        <td>Total:</td>
                                        <td>$168.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- end table -->
                            <ul class="payment-method mb-4">
                                <li class="active">
                                    <label class="payment-method-label">
                                        <input name="payment_method" type="radio" checked />
                                        Direct Bank Transfer
                                    </label>
                                    <div class="expanded-payment-method">
                                        <p>
                                            Make your payment directly into our bank account. Please
                                            use your Order ID as the payment reference. Your order
                                            won't be shipped until the funds have cleared in our
                                            account.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <label class="payment-method-label">
                                        <input name="payment_method" type="radio" />
                                        Credit / Debit Card
                                        <img src="{{ asset('frontend/images/payment-img.png') }}" alt="Payment logos"
                                            class="position-absolute top-0 right-0 mt-3 img-fluid" />
                                    </label>
                                    <div class="expanded-payment-method">
                                        <div class="form-group">
                                            <label class="label-text">Name on Card</label>
                                            <input class="form-control form--control form--control-sm" type="text"
                                                name="text" placeholder="Name on Card" />
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <label class="label-text">Card Number</label>
                                            <input class="form-control form--control form--control-sm" type="text"
                                                name="text" placeholder="1234 567 8923 4567" />
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <label class="label-text">Expiry Month</label>
                                            <input class="form-control form--control form--control-sm" type="text"
                                                name="text" placeholder="MM" />
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <label class="label-text">Expiry Year</label>
                                            <input class="form-control form--control form--control-sm" type="text"
                                                name="text" placeholder="YY" />
                                        </div>
                                        <!-- end form-group -->
                                        <div class="form-group">
                                            <label class="label-text">CVV</label>
                                            <input class="form-control form--control form--control-sm" type="text"
                                                name="text" placeholder="CVV" />
                                        </div>
                                        <!-- end form-group -->
                                    </div>
                                </li>
                                <li>
                                    <label class="payment-method-label">
                                        <input name="payment_method" type="radio" />
                                        PayPal
                                        <img src="{{ asset('frontend/images/paypal.png') }}" alt="PayPal logo"
                                            class="position-absolute top-0 right-0 mt-3 img-fluid" />
                                    </label>
                                    <div class="expanded-payment-method">
                                        <p>
                                            You will be redirected to PayPal to complete payment.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <button type="submit" class="btn btn-primary w-100">
                                Place Order
                            </button>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-lg-4 -->
            </form>
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
