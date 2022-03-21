@extends('admin.admin_master')

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
                <h3 class="card-title">Update Colors</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('update-color/' . $color->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="colors" class="col-sm-3 col-form-label">Colors</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ implode(',', Json_decode($color->color)) }}"
                                class="form-control" name="color" id="input" data-role="tagsinput" placeholder="Color">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Color</button>
                    <a href="{{ url('/colors') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>


@endsection
