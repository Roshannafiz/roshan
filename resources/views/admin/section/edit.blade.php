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
                <h3 class="card-title">Update Section</h3>
                <p class="card-description">Have A Nice Day</p>
                <form action="{{ url('section_update/' . $section->id) }}" method="POST" class="forms-sample"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Section Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $section->name }}" class="form-control" name="name"
                                placeholder="Name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Update Section</button>

                    <a href="{{ url('/sections') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
