@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Slider</h4>
                <div style="text-align: right">
                    <a href="{{ url('/slider_create') }}" class="btn" style="color: #fff; background: #0abde3">
                        Add Slider
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
                                                    aria-label="Top Title: activate to sort column ascending"
                                                    style="width: 184.438px;">Top Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Title: activate to sort column ascending"
                                                    style="width: 184.438px;">Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Sub Title: activate to sort column ascending"
                                                    style="width: 184.438px;">Sub Title</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Btn: activate to sort column ascending"
                                                    style="width: 184.438px;">Btn</th>
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

                                            @foreach ($sliders as $slider)
                                                <tr>
                                                    <td>{{ $slider->id }}</td>
                                                    <td>{{ $slider->top_title }}</td>
                                                    <td>{{ $slider->title }}</td>
                                                    <td>{{ $slider->sub_title }}</td>
                                                    <td>{{ $slider->btn_link }}</td>
                                                    <td>
                                                        <img style="width: 80px; height: 80px;"
                                                            src="{{ asset('admin/images/upload-slider/' . $slider->image) }}"
                                                            alt="Slider Image">
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $slider->id }}" class="toggle-class-slider"
                                                            type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle-slider" data-on="Active"
                                                            data-off="Inactive" {{ $slider->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row mt-3">
                                                        <a href="{{ url('slider_edit/' . $slider->id) }}"
                                                            class="btn btn-success m-1">
                                                            <i class="far fa-edit text-light"></i>
                                                        </a>

                                                        <form action="{{ url('slider_delete/' . $slider->id) }}"
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
