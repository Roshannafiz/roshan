<?php
use App\Models\Product;
?>
<section class="product-area pt-80 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-4 mb-lg-0">
                <table class="table table-mobile">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total_price = 0; ?>
                        @foreach ($userCartItems as $userCartItem)
                            <?php $attrPrice = Product::getDiscountedAttrPrice($userCartItem['product_id'], $userCartItem['size']); ?>
                            <tr>
                                <td class="product-col">
                                    <div class="media align-items-center">
                                        <a href="product-detail.html" class="mr-3 d-block">
                                            <img style="width: 80px"
                                                src="{{ asset('admin/images/upload-product/small/' . $userCartItem['product']['main_image']) }}"
                                                alt="Product image" class="img-fluid rounded">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="product-title">
                                                <a href="product-detail.html">
                                                    {{ $userCartItem['product']['product_name'] }}
                                                </a>
                                            </h5>
                                        </div>
                                    </div><!-- end media -->
                                </td>
                                <td class="price-col">
                                    ${{ $attrPrice['final_price'] }}
                                </td>
                                <td class="quantity-col">
                                    <div class="quantity-box d-inline-flex align-items-center">

                                        <input class="qtyInput" type="text" name="qty-input"
                                            value="{{ $userCartItem['quantity'] }}">

                                        <a data-cartid="{{ $userCartItem['id'] }}" style="cursor: pointer"
                                            class="qtyBtn qtyDec btnItemUpdate qtyMinus">
                                            <i class="fal fa-minus"></i>
                                        </a>

                                        <a data-cartid="{{ $userCartItem['id'] }}" style="cursor: pointer"
                                            class="qtyBtn qtyInc btnItemUpdate qtyPlus">
                                            <i class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="total-col text-color-1">
                                    ${{ $attrPrice['final_price'] * $userCartItem['quantity'] }}
                                </td>

                                <td class="remove-col">
                                    <a style="cursor: pointer" data-cartid="{{ $userCartItem['id'] }}"
                                        class="icon-element btnItemDelete icon-element-xs-2">
                                        <i class="fal fa-times"></i>
                                    </a>
                                </td>

                            </tr>
                            <?php $total_price = $total_price + $attrPrice['final_price'] * $userCartItem['quantity']; ?>
                        @endforeach
                    </tbody>
                </table><!-- end table -->
                <hr class="border-top-gray mt-0 mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="input-group w-auto my-2">
                        <input type="text" class="form-control form--control" placeholder="Enter coupon code">
                        <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fal fa-long-arrow-right"></i></button>
                        </div>
                    </div><!-- end input-group -->
                    <a href="#" class="btn btn-primary">Update Cart</a>
                </div><!-- end d-flex -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semi-bold">Cart Total</h5>
                        <hr class="border-top-gray mb-0">
                        <ul class="list-group list-group-flush fs-15 mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-black fw-medium">Subtotal:</span>
                                ${{ $total_price }}
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-black fw-medium">Shipping:</span>
                                Free Shipping
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-black fw-medium">Tax:</span>
                                $0.00
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center fs-17">
                                <span class="text-color-1 fw-medium">Total:</span>
                                <span class="text-color-1">${{ $total_price }}</span>
                            </li>
                        </ul>
                        <a href="{{ url('/checkout') }}" class="btn btn-primary w-100 mb-3">Proceed to Checkout <i
                                class="fal fa-angle-right ml-2"></i></a>
                        <a href="{{ url('/shop') }}" class="btn btn-light w-100"><i
                                class="fal fa-shopping-cart mr-2"></i> Continue Shopping </a>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end product-area -->
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
                <p class="text-white">Minzel presents the best in interior design</p>
            </div>
            <a href="sign-up.html" class="btn btn-light">Sign Up <i class="fal fa-angle-right ml-1"></i></a>
        </div><!-- end d-flex -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
           START CTA AREA
      ================================= -->
