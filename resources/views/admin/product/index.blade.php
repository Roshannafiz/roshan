@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Products</h4>
                <div style="text-align: right">
                    <a href="{{ url('/product_create') }}" class="btn" style="color: #fff; background: #0abde3">
                        Add Product
                    </a>
                </div>
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
                                                    aria-label="SKU #: activate to sort column descending"
                                                    style="width: 112.734px;">SKU #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 184.438px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Category: activate to sort column ascending"
                                                    style="width: 206.984px;">Category</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Section: activate to sort column ascending"
                                                    style="width: 206.984px;">Section</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Price: activate to sort column ascending"
                                                    style="width: 107.078px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Product Image: activate to sort column ascending"
                                                    style="width: 147.25px;">Product Image</th>

                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 121.688px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 260.547px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>{{ $product->product_code }}</td>
                                                    <td>{{ $product->product_name }}</td>
                                                    <td>{{ $product->category->category_name }}</td>
                                                    <td>{{ $product->section->name }}</td>
                                                    <td>${{ $product->product_seal_price }}</td>
                                                    <td>
                                                        <?php $product_image_path = 'admin/images/upload-product/large/' . $product->main_image; ?>
                                                        @if (!@empty($product->main_image) && file_exists($product_image_path))
                                                            <img style="width: 100px; height: 100px;"
                                                                src="{{ asset('admin/images/upload-product/large/' . $product->main_image) }}"
                                                                alt="Product Image">
                                                        @else
                                                            <img style="width: 100px; height: 100px;"
                                                                src="{{ asset('admin/images/upload-product/large/no-image.png') }}"
                                                                alt="Product Image">
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <input data-id="{{ $product->id }}" class="toggle-class-product"
                                                            type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle-product" data-on="Active"
                                                            data-off="Inactive" {{ $product->status ? 'checked' : '' }}>
                                                    </td>

                                                    <td class="row" style="margin-top: 25px">
                                                        <a title="Add Attribute"
                                                            href="{{ url('attribute_add/' . $product->id) }}"
                                                            class="btn m-1"
                                                            style="background-color: #007BFF; color: #fff; padding: 0px 12px">
                                                            <i class="fas fa-plus"></i>
                                                        </a>

                                                        <a title="Add Images"
                                                            href="{{ url('gallery_image_add/' . $product->id) }}"
                                                            class="btn m-1"
                                                            style="background-color: #007BFF; color: #fff; padding: 0px 12px">
                                                            <i class="far fa-images"></i>
                                                        </a>

                                                        <a title="Update Product"
                                                            href="{{ url('product_edit/' . $product->id) }}"
                                                            class="btn m-1"
                                                            style="background-color: #007BFF; padding: 0px 12px">
                                                            <i class="far fa-edit text-light"></i>
                                                        </a>

                                                        <form action="{{ url('product_delete/' . $product->id) }}"
                                                            method="POST" class="mt-1">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn"
                                                                style="background-color: #C82333">
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
