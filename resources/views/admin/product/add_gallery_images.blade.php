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
                        <h3 class="card-title">Add Product Gallery</h3>
                        <p class="card-description">Have A Nice Day</p>
                        <form action="{{ url('gallery_image_add/' . $productdata['id']) }}" method="POST"
                            name="addGalleryImageForm" class="forms-sample" enctype="multipart/form-data">
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
                                <label for="main_image" class="col-sm-3 col-form-label">Add Gallery Image</label>
                                <div class="col-sm-9 mt-2">
                                    <input multiple type="file" id="images" name="images[]">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">Add Images</button>
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
                            <h4 class="card-title">Your Added Images</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="order-listing" class="table dataTable no-footer" role="grid"
                                                    aria-describedby="order-listing_info" style="text-align: center">
                                                    <thead>
                                                        <tr>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="ID #: activate to sort column descending"
                                                                style="width: 112.734px;">ID #</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="order-listing" rowspan="1" colspan="1"
                                                                aria-label="Images: activate to sort column ascending"
                                                                style="width: 184.438px;">Images</th>
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

                                                        @foreach ($productdata['gallery_images'] as $gallery_image)
                                                            <!------- Pass Hidden Attribute ID--------->
                                                            <input style="display: none" type="text" name="attrId[]"
                                                                value="{{ $gallery_image['id'] }}" required>
                                                            <tr>
                                                                <td>{{ $gallery_image['id'] }}</td>
                                                                <td>
                                                                    <img style="width: 200px; height: 200px;"
                                                                        src="{{ asset('admin/images/upload-product/large/' . $gallery_image['image']) }}"
                                                                        alt="">
                                                                </td>
                                                                <td>
                                                                    <input data-id="{{ $gallery_image['id'] }}"
                                                                        class="toggle-class-gallery_image" type="checkbox"
                                                                        data-onstyle="success" data-offstyle="danger"
                                                                        data-toggle="toggle-gallery_image" data-on="Active"
                                                                        data-off="Inactive"
                                                                        {{ $gallery_image['status'] ? 'checked' : '' }}>
                                                                </td>
                                                                <td class="" style="margin-top: 80px">
                                                                    <a href="{{ url('gallery_image_delete/' . $gallery_image['id']) }}"
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
