@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Ratings / Reviews</h4>
                <div class="row">
                    <div class="col-12">
                        <div id="order-listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="ID #: activate to sort column descending"
                                                    style="width: 112.734px;">ID #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Product Name: activate to sort column ascending"
                                                    style="width: 147.25px;">Product Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="User Email: activate to sort column ascending"
                                                    style="width: 147.25px;">User Email</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Review: activate to sort column ascending"
                                                    style="width: 147.25px;">Review</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Rating: activate to sort column ascending"
                                                    style="width: 147.25px;">Rating</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 121.688px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 115.547px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ratings as $rating)
                                                <tr role="row" class="odd">
                                                    <td>{{ $rating['id'] }}</td>
                                                    <td>{{ $rating['product']['product_name'] }}</td>
                                                    <td>{{ $rating['user']['email'] }}</td>
                                                    <td>{{ $rating['review'] }}</td>
                                                    <td>*{{ $rating['rating'] }}</td>
                                                    <td>
                                                        <input data-id="{{ $rating['id'] }}" class="toggle-class-rating"
                                                            type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                            data-toggle="toggle-rating" data-on="Active"
                                                            data-off="Inactive" {{ $rating['status'] ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row">
                                                        <a href="{{ url('rating_edit/' . $rating['id']) }}"
                                                            class="btn btn-success m-1">
                                                            <i class="far fa-edit text-light"></i>
                                                        </a>

                                                        <form action="{{ url('rating_delete/' . $rating['id']) }}"
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
