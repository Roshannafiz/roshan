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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Update Admin</h3>
                        <p class="card-description">Have A Nice Day</p>
                        <form action="{{ url('admin_update/' . $admin_id) }}" method="POST" class="forms-sample"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            @foreach ($admins as $admin)
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Admin Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $admin->admin_name }}" class="form-control"
                                            name="admin_name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Admin Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $admin->admin_email }}" class="form-control"
                                            name="admin_email">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Admin Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $admin->admin_phone }}" class="form-control"
                                            name="admin_phone">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Admin Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="{{ $admin->admin_address }}" class="form-control"
                                            name="admin_address">
                                    </div>
                                </div>

                                <div>
                                    @if ($admin->admin_image)
                                        <img style="width: 80px; height: 80px;"
                                            src="{{ asset('admin/images/upload-admin/' . $admin->admin_image) }}" alt="">
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="admin_image" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="admin_image" class="dropify">
                                    </div>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-gradient-primary mr-2">Update Admin</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"> Admin Password</h3>
                        <form action="{{ url('admin_update_password/') }}" method="POST" class="forms-sample"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            @foreach ($admins as $admin)
                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" readonly value="{{ $admin->admin_password }}"
                                            class="form-control">
                                        <p class="py-3" style="font-size: 13px">( It's Your Bycript Password )</p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control" name="admin_password">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name" class="col-sm-3 col-form-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" value="" class="form-control" name="confirm_password">
                                    </div>
                                </div>
                            @endforeach
                            <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
