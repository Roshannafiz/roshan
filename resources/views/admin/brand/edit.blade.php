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
                <h3 class="card-title">Update Brand</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('brand_update/' . $brand->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Brand Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $brand->name }}" class="form-control" name="brand_name">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Brand</button>
                    <a href="{{ url('/brands') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


@endsection
