@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Category</h4>
                <div style="text-align: right">
                    <a href="{{ url('/category_create') }}" class="btn" style="color: #fff; background: #0abde3">
                        Add Category
                    </a>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr>
                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="ID #: activate to sort column descending"
                                                    style="width: 112.734px;">ID #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Name: activate to sort column ascending"
                                                    style="width: 184.438px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Url: activate to sort column ascending"
                                                    style="width: 184.438px;">Url</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Image: activate to sort column ascending"
                                                    style="width: 107.078px;">Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 135.281px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 115.547px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->category_name }}</td>
                                                    <td>{{ $category->url }}</td>
                                                    <td>
                                                        <img style="width: 80px; height: 80px;"
                                                            src="{{ asset('admin/images/upload-category/' . $category->category_image) }}"
                                                            alt="Category Image">
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $category->id }}" class="toggle-class-category"
                                                            type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle-category" data-on="Active"
                                                            data-off="Inactive" {{ $category->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row mt-3">
                                                        <a href="{{ url('category_edit/' . $category->id) }}"
                                                            class="btn btn-success m-1">
                                                            <i class="far fa-edit text-light"></i>
                                                        </a>

                                                        <form action="{{ url('category_delete/' . $category->id) }}"
                                                            method="POST" class="mt-1">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="far fa-trash-alt text-light"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
