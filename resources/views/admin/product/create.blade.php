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

    <style>
        .error {
            color: red;
        }

        .form-control {
            margin-bottom: 7px !important;
        }

    </style>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Add Product</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('/product_store') }}" method="POST" id="AddProductForm" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="category" class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-control" id="category">
                                <option>Select Category</option>
                                @foreach ($categories as $section)
                                    <optgroup label="{{ $section['name'] }}"></optgroup>
                                    @foreach ($section['categories'] as $category)
                                        <option value="{{ $category['id'] }}">
                                            &nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;{{ $category['category_name'] }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subcategory" class="col-sm-3 col-form-label">Select Sub Category</label>
                        <div class="col-sm-9">
                            <select name="subcategory_id" class="form-control" id="subcategory">
                                <option>Select Sub Category</option>
                                @foreach ($subcategories as $category)
                                    <optgroup label="{{ $category['category_name'] }}"></optgroup>
                                    @foreach ($category['subcategories'] as $subcategory)
                                        <option value="{{ $subcategory['id'] }}">
                                            &nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;{{ $subcategory['name'] }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="brand" class="col-sm-3 col-form-label">Select Brand</label>
                        <div class="col-sm-9">
                            <select name="brand_id" class="form-control" id="brand">
                                <option>Select Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand['id'] }}">{{ $brand['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_name" name="product_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_slug" class="col-sm-3 col-form-label">Product Slug</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="product_slug" name="product_slug">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_regular_price" class="col-sm-3 col-form-label">Regular Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="product_regular_price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_seal_price" class="col-sm-3 col-form-label">Seal Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="product_seal_price" id="product_seal_price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_code" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_code" id="product_code">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_quantity" class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_quantity">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_discount" class="col-sm-3 col-form-label">Product Discount (%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_discount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="is_featured" class="col-sm-3 col-form-label">Featured</label>
                        <div class="col-sm-9">
                            <select name="is_featured" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="meta_title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_keywords" class="col-sm-3 col-form-label">Meta Keywords</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_keywords" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_description" class="col-sm-3 col-form-label">Meta Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_description" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description" id="short_description"
                                rows="3"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_video" class="col-sm-3 col-form-label">Product Video</label>
                        <div class="col-sm-9">
                            <input type="file" name="product_video" class="dropify">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="main_image" class="col-sm-3 col-form-label">Product Main Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="main_image" id="main_image" class="dropify">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Product</button>
                    <a href="{{ url('/products') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


    <!----------- Automatic Add Slug When Type Name Flied ------------>
    <script>
        $('#product_name').keyup(function(e) {
            $.get('{{ route('checkSlug') }}', {
                'name': $(this).val()
            }, function(data) {
                $('#product_slug').val(data.slug);
            })
        });
    </script>
@endsection
