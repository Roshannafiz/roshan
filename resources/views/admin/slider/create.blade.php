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
                <h3 class="card-title">Add Slider</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('/slider_store') }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="top_title" class="col-sm-3 col-form-label">Top Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="top_title">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-3 col-form-label">Sub Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="sub_title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="btn_link" class="col-sm-3 col-form-label">BTN Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="btn_link">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="dropify">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Add Slider</button>

                    <a href="{{ url('/sliders') }}" class="btn btn-light">Cancel</a>
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
