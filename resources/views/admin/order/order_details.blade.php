<?php use App\Models\Product; ?>
@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" style="margin-left: 47px"><span>Order ID:- {{ $orderDetails['id'] }}</span></h4>
                <div style="text-align: right">
                    <a href="{{ url('/orders') }}" class="btn" style="color: #fff; background: #0abde3">
                        Back
                    </a>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"
                                        style="margin-left: 9px; padding-bottom: 15px; border-bottom: 1px solid #B879FF; width: 140px">
                                        Order Details</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order Date</th>
                                                <th>Order Status</th>
                                                <th>Order Total</th>
                                                <th>Shipping Charges</th>
                                                <th>Coupon Ammount</th>
                                                <th>Payment Method</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ date('d-m-Y', strtotime($orderDetails['created_at'])) }}</td>
                                                <td>{{ $orderDetails['order_status'] }}</td>
                                                <td>{{ $orderDetails['grand_total'] }}</td>
                                                <td>{{ $orderDetails['shipping_charges'] }}</td>
                                                <td>{{ $orderDetails['coupon_amount'] }}</td>
                                                <td>{{ $orderDetails['payment_method'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"
                                        style="margin-left: 9px; padding-bottom: 15px; border-bottom: 1px solid #B879FF; width: 140px">
                                        User Details</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $userDetails['name'] }}</td>
                                                <td>{{ $userDetails['email'] }}</td>
                                                <td>{{ $userDetails['phone'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"
                                        style="margin-left: 9px; padding-bottom: 15px; border-bottom: 1px solid #B879FF; width: 140px">
                                        Delivery Address</h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <th>Country</th>
                                                <th>Pincode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $orderDetails['name'] }}</td>
                                                <td>{{ $orderDetails['email'] }}</td>
                                                <td>{{ $orderDetails['phone'] }}</td>
                                                <td>{{ $orderDetails['address'] }}</td>
                                                <td>{{ $orderDetails['state'] }}</td>
                                                <td>{{ $orderDetails['city'] }}</td>
                                                <td>{{ $orderDetails['country'] }}</td>
                                                <td>{{ $orderDetails['pincode'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"
                                        style="margin-left: 9px; padding-bottom: 15px; border-bottom: 1px solid #B879FF; width: 140px">
                                        Ordered Product</h4>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Product Image</th>
                                                <th>Product Code</th>
                                                <th>Product Name</th>
                                                <th>Product Size</th>
                                                <th>Product Color</th>
                                                <th>Product Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($orderDetails['orders_products'] as $product)
                                                    <td>
                                                        <?php $getProductImage = Product::getProductImage($product['product_id']); ?>
                                                        <img style="width: 200px; height: 200px;"
                                                            src="{{ asset('admin/images/upload-product/large/' . $getProductImage) }}">
                                                    </td>
                                                    <td>{{ $product['product_code'] }}</td>
                                                    <td>{{ $product['product_name'] }}</td>
                                                    <td>{{ $product['product_size'] }}</td>
                                                    <td>{{ $product['product_color'] }}</td>
                                                    <td>{{ $product['product_qty'] }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"
                                        style="padding-bottom: 15px; border-bottom: 1px solid #B879FF; width: 140px">
                                        Order Status
                                    </h4>

                                    <form action="{{ url('/update_order_status') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{ $orderDetails['id'] }}">
                                        <div class="row">
                                            <select class="form-select form-control col-md-8"
                                                aria-label="Default select example" required name="order_status">
                                                <option>Select Status</option>
                                                @foreach ($orderStatus as $status)
                                                    <option value="{{ $status['name'] }}" @if (isset($orderDetails['order_status']) && $orderDetails['order_status'] == $status['name']) selected @endif>
                                                        {{ $status['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-success ml-5" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
