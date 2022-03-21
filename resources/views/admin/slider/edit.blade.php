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
                <h3 class="card-title">Update Slider</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('slider_update/' . $slider->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="form-group row">
                        <label for="top_title" class="col-sm-3 col-form-label">Top Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $slider->top_title }}" class="form-control" name="top_title">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $slider->title }}" class="form-control" name="title">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="sub_title" class="col-sm-3 col-form-label">Sub Title</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $slider->sub_title }}" class="form-control" name="sub_title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="btn_link" class="col-sm-3 col-form-label">Btn</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $slider->btn_link }}" class="form-control" name="btn_link">
                        </div>
                    </div>

                    <div>
                        @if ($slider->image)
                            <img style="width: 80px; height: 80px;"
                                src="{{ asset('admin/images/upload-slider/' . $slider->image) }}" alt="">
                        @endif
                    </div>

                    <div class="form-group row">
                        <label for="image" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="dropify">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Slider</button>

                    <a href="{{ url('/sliders') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
