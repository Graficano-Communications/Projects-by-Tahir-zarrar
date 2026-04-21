@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
<style>
    .btn-delete {
        display: flex;
        align-items: center;
    }
    .btn-delete i {
        margin-right: 5px; 
        display: flex; /* Ensure the icon is centered */
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
                        <h2>Blogs</h2>
                    </div>
                    <div>
                    <a href="{{ route('add-blog') }}" type="button" class="btn btn-info">
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Blog Image</th>
                                <th class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="BlogSortable">
                            @foreach($blog as $blog)
                            <tr id="{{ $blog->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->name }}</td>
                                <td>
                                    <img width="80px" height="40px" src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}">
                                </td>
                                <td>
                                    <img width="80px" height="40px" src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" alt="{{ $blog->name }}">
                                </td>
                                <td class="text-right">
                                    <a href="{{ route('edit-blog', $blog->id) }}" class="btn btn-success">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td class="text-start">
                                    <form action="{{ route('delete-blog', $blog->id) }}" method="POST" onsubmit="return confirmDelete();">
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

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#BlogSortable").sortable({
            delay: 150,
            stop: function() {
                var selectedData = [];
                $('#BlogSortable>tr').each(function() {
                    var id = $(this).attr("id");
                    if (id) {
                        selectedData.push(id);
                    }
                });
                updateOrder(selectedData);
            }
        });

        function updateOrder(data) {
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var ajaxurl = '{{ route('sort_blog') }}';
            var postData = {
                'data': data,
                '_token': token
            };

            $.ajax({
                url: ajaxurl,
                type: 'post',
                data: postData,
                success: function(response) {
                    if (response.success) {
                        alert('Order successfully updated');
                    } else {
                        alert('Failed to update order');
                    }
                }
            });
        }
    });
</script>
@endsection
