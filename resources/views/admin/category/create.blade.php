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
                <h3 class="card-title">Add Category</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('/category_store') }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="section_id" class="col-sm-3 col-form-label">Select Section</label>
                        <div class="col-sm-9">
                            <select name="section_id" id="section_id" class="form-control">
                                <option value="">Select</option>
                                @foreach ($GetallSections as $section)
                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category_name" class="col-sm-3 col-form-label">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_name" id="category_name">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="url" class="col-sm-3 col-form-label">Category Url</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="url" id="category_url">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category_discount" class="col-sm-3 col-form-label">Category Discount</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category_discount">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="meta_title" rows="3"></textarea>
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
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category_image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="category_image" class="dropify">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Category</button>

                    <a href="{{ url('/categories') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <!----------- Automatic Add Slug When Type Name Flied ------------>
    <script>
        $('#category_name').keyup(function(e) {
            $.get('{{ route('checkSlug') }}', {
                'name': $(this).val()
            }, function(data) {
                $('#category_url').val(data.slug);
            })
        });
    </script>
@endsection
