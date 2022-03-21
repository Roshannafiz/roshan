@extends('admin.admin_master')

@section('admin_content')

    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Size</h4>
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
                                                    aria-label="Sizes: activate to sort column ascending"
                                                    style="width: 107.078px;">Sizes</th>
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

                                            @foreach ($sizes as $size)
                                                <tr>
                                                    <td>{{ $size->id }}</td>
                                                    <td>
                                                        @foreach (Json_decode($size->size) ?? [] as $sizes)
                                                            <ul style="display: inline">
                                                                <li style="display: inline"> {{ $sizes }} |</li>
                                                            </ul>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $size->id }}" class="toggle-class-size"
                                                            type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle-size" data-on="Active" data-off="Inactive"
                                                            {{ $size->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row">
                                                        <a href="{{ url('sizes/' . $size->id . '/edit') }}"
                                                            class="btn btn-success m-1">
                                                            <i class="far fa-edit text-light"></i>
                                                        </a>

                                                        <form action="{{ url('sizes/' . $size->id) }}" method="POST"
                                                            class="mt-1">
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
