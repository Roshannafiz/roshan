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
                <h3 class="card-title">Update Sizes</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('update-size/' . $size->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="size" class="col-sm-3 col-form-label">Size</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ implode(',', Json_decode($size->size)) }}" class="form-control"
                                name="size" id="input" data-role="tagsinput">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Size</button>
                    <a href="{{ url('/sizes') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
