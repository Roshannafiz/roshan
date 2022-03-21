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

    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Update Product</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('product_update/' . $product->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="select_category" class="col-sm-3 col-form-label">Select Category</label>
                        <div class="col-sm-9">
                            <select name="category_id" class="form-control" id="category">
                                @foreach ($categories as $section)
                                    <optgroup label="{{ $section['name'] }}"></optgroup>
                                    @foreach ($section['categories'] as $category)
                                        <option value="{{ $category['id'] }}"
                                            {{ $category['id'] == $product->category_id ? 'selected' : '' }}>
                                            &nbsp;&nbsp;&nbsp;--&nbsp;&nbsp; {{ $category['category_name'] }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="select_subcategory" class="col-sm-3 col-form-label">Select Sub Category</label>
                        <div class="col-sm-9">
                            <select name="subcategory_id" class="form-control" id="subcategory">
                                @foreach ($subcategories as $category)
                                    <optgroup label="{{ $category['category_name'] }}"></optgroup>
                                    @foreach ($category['subcategories'] as $subcategory)
                                        <option value="{{ $subcategory['id'] }}"
                                            {{ $subcategory['id'] == $product->subcategory_id ? 'selected' : '' }}>
                                            &nbsp;&nbsp;&nbsp;--&nbsp;&nbsp; {{ $subcategory['name'] }}
                                        </option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="brand_id" class="col-sm-3 col-form-label">Select Brand</label>
                        <div class="col-sm-9">
                            <select name="brand_id" class="form-control">
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->id }}"
                                        {{ $brand->id == $product->brand_id ? 'selected' : '' }}>
                                        {{ $brand->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $product->product_name }}"
                                id="product_name" name="product_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_slug" class="col-sm-3 col-form-label">Product Slug</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $product->product_slug }}"
                                id="product_slug" name="product_slug">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_regular_price" class="col-sm-3 col-form-label">Regular Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" value="{{ $product->product_regular_price }}"
                                name="product_regular_price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_seal_price" class="col-sm-3 col-form-label">Seal Price</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" value="{{ $product->product_seal_price }}"
                                name="product_seal_price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_code" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_code"
                                value="{{ $product->product_code }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_quantity" class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_quantity"
                                value="{{ $product->product_quantity }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_discount" class="col-sm-3 col-form-label">Product Discount (%)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="product_discount"
                                value="{{ $product->product_discount }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="is_featured" class="col-sm-3 col-form-label">Featured</label>
                        <div class="col-sm-9">
                            <select name="is_featured" class="form-control">
                                <option value="No" {{ $product->is_featured == 'No' ? 'selected' : '' }}>No</option>
                                <option value="Yes" {{ $product->is_featured == 'Yes' ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="meta_title"
                                value="{{ $product->meta_title }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_keywords" class="col-sm-3 col-form-label">Meta Keywords</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_keywords"
                                rows="3">{{ $product->meta_keywords }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_description" class="col-sm-3 col-form-label">Meta Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_description"
                                rows="3">{{ $product->meta_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="short_description" class="col-sm-3 col-form-label">Short Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="short_description"
                                rows="3">{{ $product->short_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"
                                rows="6">{{ $product->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="product_video" class="col-sm-3 col-form-label">Product Video</label>
                        <div class="col-sm-9">
                            <input type="file" name="product_video" class="dropify"
                                value="{{ $product->product_video }}">
                        </div>
                    </div>

                    <div>
                        @if ($product->main_image)
                            <img style="width: 100px; height: 100px;"
                                src="{{ asset('admin/images/upload-product/large/' . $product->main_image) }}" alt="">
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="main_image" class="col-sm-3 col-form-label">Product Main Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="main_image" value="{{ $product->main_image }}"
                                class="dropify">
                        </div>
                    </div>


                    {{-- <div class="form-group row">
                        <label for="gallery_image" class="col-sm-3 col-form-label">Gallery Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="gallery_image[]" multiple value="{{ $product->gallery_image }}">
                        </div>
                    </div> --}}

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Product</button>

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
