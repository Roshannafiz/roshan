@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Orders</h4>
                <div class="row">
                    <div class="col-12">
                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Order ID #: activate to sort column descending"
                                                    style="width: 112.734px;">Order ID #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Date & Time : activate to sort column ascending"
                                                    style="width: 107.078px;">Date & Time</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customar Name: activate to sort column ascending"
                                                    style="width: 184.438px;">Customar Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customar Email: activate to sort column ascending"
                                                    style="width: 184.438px;">Customar Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order Product: activate to sort column ascending"
                                                    style="width: 184.438px;">Order Product</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order Total: activate to sort column ascending"
                                                    style="width: 107.078px;">Order Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Payment Method: activate to sort column ascending"
                                                    style="width: 107.078px;">Payment Method</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 135.281px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 115.547px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td>{{ $order['id'] }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($order['created_at'])) }}</td>
                                                    <td>{{ $order['name'] }}</td>
                                                    <td>{{ $order['email'] }}</td>
                                                    <td>
                                                        @foreach ($order['orders_products'] as $pro)
                                                            {{ $pro['product_code'] }} ({{ $pro['product_qty'] }})
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $order['grand_total'] }}</td>
                                                    <td>{{ $order['payment_method'] }}</td>
                                                    <td>
                                                        <label
                                                            class="
                                                        @if ($order['order_status'] == 'New')
                                                        badge badge-info
                                                        @elseif ($order['order_status'] == 'Cancelled')
                                                        badge badge-danger
                                                        @else
                                                        badge badge-success
                                                        @endif
                                                        ">
                                                            {{ $order['order_status'] }}
                                                        </label>
                                                    </td>

                                                    <td class="row">
                                                        <a href="{{ url('view_orders/' . $order['id']) }}"
                                                            class="btn btn-success m-1">
                                                            <i class="far fa-file text-light"></i>
                                                        </a>

                                                        <form action="{{ url('orders_delete/' . $order['id']) }}"
                                                            method="POST" class="mt-1"
                                                            onclick="return confirm('Are You Sure To Delete')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="far fa-trash-alt text-light"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
