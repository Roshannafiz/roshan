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
                <h3 class="card-title">Update Category</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('category_update/' . $category->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="section_id" class="col-sm-3 col-form-label">Select Section</label>
                        <div class="col-sm-9">
                            <select name="section_id" class="form-control">
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}"
                                        {{ $section->id == $category->section_id ? 'selected' : '' }}>
                                        {{ $section->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $category->category_name }}" class="form-control"
                                name="category_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-sm-3 col-form-label">Category url</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $category->url }}" class="form-control" name="url">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category_discount" class="col-sm-3 col-form-label">Category Discount</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $category->category_discount }}" class="form-control"
                                name="category_discount">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $category->meta_title }}" class="form-control"
                                name="meta_title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_description" class="col-sm-3 col-form-label">Meta Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_description"
                                rows="3">{{ $category->meta_description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_keywords" class="col-sm-3 col-form-label">Meta Keyword</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_keywords"
                                rows="3">{{ $category->meta_keywords }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"
                                rows="3">{{ $category->description }}</textarea>
                        </div>
                    </div>

                    <div>
                        @if ($category->category_image)
                            <img style="width: 80px; height: 80px;"
                                src="{{ asset('admin/images/upload-category/' . $category->category_image) }}" alt="">
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="category_image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="category_image" class="dropify">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Category</button>

                    <a href="{{ url('/categories') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
