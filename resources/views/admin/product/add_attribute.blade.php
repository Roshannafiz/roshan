@extends('admin.Layouts')

@section('admin_content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card" style="max-width: 46% !important">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Add Product Attributs</h3>
                        <p class="card-description">Have A Nice Day</p>
                        <form action="{{ url('attribute_add/' . $productdata['id']) }}" method="POST"
                            name="addAttributeForm" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9 mt-3">
                                    {{ $productdata['product_name'] }}
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="product_code" class="col-sm-3 col-form-label">Product Code</label>
                                <div class="col-sm-9 mt-3">
                                    {{ $productdata['product_code'] }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="main_image" class="col-sm-3 col-form-label">Product Main Image</label>
                                <div class="col-sm-9">
                                    @if ($productdata['main_image'])
                                        <img style="width: 200px; height: 200px;"
                                            src="{{ asset('admin/images/upload-product/large/' . $productdata['main_image']) }}"
                                            alt="">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="field_wrapper">
                                        <div style="margin-bottom: 60px">
                                            <input id="size" type="text" name="size[]" value=""
                                                style="width: 120px; margin-left: 10px; margin-bottom: 20px;"
                                                placeholder="Size" required />
                                            <input id="color" type="text" name="color[]" value=""
                                                style="width: 120px; margin-left: 10px; margin-bottom: 20px;"
                                                placeholder="Color" required />
                                            <input id="sku" type="text" name="sku[]" value=""
                                                style="width: 120px; margin-left: 10px; margin-bottom: 20px;"
                                                placeholder="Sku" required />
                                            <input id="price" type="number" name="price[]" value=""
                                                style="width: 120px; margin-left: 10px; margin-bottom: 20px;"
                                                placeholder="Price" required />
                                            <input id="stock" type="number" name="stock[]" value=""
                                                style="width: 120px; margin-left: 10px; margin-bottom: 20px;"
                                                placeholder="Stock" required />
                                            <a href="javascript:void(0);" class="add_button ml-2 btn btn-success btn-sm"
                                                title="Add field">Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Add Attribute</button>
                            <a href="{{ url('/products') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <!-------- Display / Add All Attribute Details ------>
                <form action="{{ url('attribute_edit/' . $productdata['id']) }}" method="post" name="updateAttributeForm">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Your Added Attributes</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="order-listing" class="table dataTable no-footer" role="grid"
                                                    aria-describedby="order-listing_info">
                                                    <thead>
                                                        <tr>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="ID #: activate to sort column descending"
                                                                style="width: 112.734px;">ID #</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Size: activate to sort column ascending"
                                                                style="width: 184.438px;">Size</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Color: activate to sort column ascending"
                                                                style="width: 184.438px;">Color</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="SKU: activate to sort column ascending"
                                                                style="width: 206.984px;">SKU</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Price: activate to sort column ascending"
                                                                style="width: 206.984px;">Price</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Stock: activate to sort column ascending"
                                                                style="width: 107.078px;">Stock</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Status: activate to sort column ascending"
                                                                style="width: 121.688px;">Status</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Actions: activate to sort column ascending"
                                                                style="width: 115.547px;">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($productdata['attributes'] as $attribute)
                                                            <!------- Pass Hidden Attribute ID--------->
                                                            <input style="display: none" type="text" name="attrId[]"
                                                                value="{{ $attribute['id'] }}" required>
                                                            <tr>
                                                                <td>{{ $attribute['id'] }}</td>
                                                                <td>{{ $attribute['size'] }}</td>
                                                                <td>{{ $attribute['color'] }}</td>
                                                                <td>{{ $attribute['sku'] }}</td>
                                                                <td>$
                                                                    <input style="width: 105px; border: none" type="number"
                                                                        name="price[]" value="{{ $attribute['price'] }}"
                                                                        required>
                                                                </td>
                                                                <td>
                                                                    <input style="width: 105px; border: none" type="number"
                                                                        name="stock[]" value="{{ $attribute['stock'] }}"
                                                                        required>
                                                                </td>
                                                                <td>
                                                                    <input data-id="{{ $attribute['id'] }}"
                                                                        class="toggle-class-attribute" type="checkbox"
                                                                        data-onstyle="success" data-offstyle="danger"
                                                                        data-toggle="toggle-attribute" data-on="Active"
                                                                        data-off="Inactive"
                                                                        {{ $attribute['status'] ? 'checked' : '' }}>
                                                                </td>
                                                                <td class="row">
                                                                    <a href="{{ url('attribute_delete/' . $attribute['id']) }}"
                                                                        class="btn"
                                                                        style="background-color: #C82333; padding: 1px 15px">
                                                                        <i class="far fa-trash-alt text-light"></i>
                                                                    </a>
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
                    <button type="submit" class="btn btn-gradient-primary ml-5">Update Attribute</button>
                </form>
            </div>
        </div>
    </div>
@endsection
