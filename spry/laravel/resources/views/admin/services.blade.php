@extends('admin.layout.master')
@section('title' ,'Products')
@section('main-container-admin')
<style>
    .btn-delete {
        display: flex;
        align-items: center;
    }

    .btn-delete i {
        margin-right: 5px;
        display: flex;
        /* Ensure the icon is centered */
    }

</style>

<div class="container-fluid p-0">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row mt-4">
        <!-- table section -->
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head d-flex justify-content-between">
                <div class="heading1 margin_0">
                    <h2>Products</h2>
                </div>
                <div>
                    <a href="{{ route('add-service') }}" type="button" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SR#</th>
                                <th> Product Name</th>
                                <th>Image</th>
                                <th> Product Detail</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="BlogSortable">
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->name }}</td>
                                <td>
                                    @php
                                    $images = json_decode($service->service_images, true);
                                    @endphp
                                    @if (!empty($images))
                                    <div class="image-preview mt-2" style="display: inline-block; margin-right: 10px;">
                                        <img src="{{ asset('images/services/' . $images[0]) }}" alt="Car Image" width="100">
                                    </div>
                                    @endif
                                </td>
                                <td>{!! $service->description !!}</td>
                                <td class="text-right">
                                    <a href="{{ route('edit-service', $service->id) }}" class="btn btn-success">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="text-start">
                                    <form action="{{ route('delete-service', $service->id) }}" method="POST" onsubmit="return confirmDelete();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
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

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include jQuery UI library -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this Blog?');
    }
    </script>
@endsection
