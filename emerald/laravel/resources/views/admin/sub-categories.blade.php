@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
<style>
    .btn-delete {
        display: flex;
        align-items: center;
    }

    .btn-delete i {
        margin-right: 5px; /* Adjust the margin as needed */
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
                     <h2>Sub-Category</h2>
                  </div>
                  <div>
                    <a href="{{ route('add-sub-category', $category->id) }}" type="button" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i> Add New
                    </a>
                </div>
               </div>
               <div class="table_section padding_infor_info">
                  <div class="table-responsive-sm">
                     <table class="table table-striped">
                        <thead>
                            <tr class="py-3">
                                <th class="d-none d-xl-table-cell text-uppercase py-3">SR#</th>
                                <th class="d-none d-xl-table-cell text-uppercase py-3">Name</th>
                                <th class="d-none d-md-table-cell text-uppercase text-center py-3" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody id="sortableBody">
                            @foreach($sub_category as $sub_category)
                            <tr id="{{ $sub_category->id }}">
                                <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                                <td class="d-none d-xl-table-cell">{{ $sub_category->name }}</td>
                                <td class="d-none d-md-table-cell text-right">
                                    <a href="{{ route('edit-sub-category', $sub_category->id) }}" class="btn btn-success">
                                        <i class="mb-1" data-feather="edit"></i> Edit
                                    </a>
                                </td>
                                <td class="d-none d-md-table-cell text-start">
                                    <form action="{{ route('delete-sub-category', $sub_category->id) }}" method="POST" onsubmit="return confirmDelete();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="mb-1" data-feather="trash-2"></i> Delete
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
        return confirm('Are you sure you want to delete this sub-category?');
    }

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#sortable tbody").sortable({
            delay: 150,
            stop: function() {
                var selectedData = [];
                $('#sortableBody>tr').each(function() {
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
            var ajaxurl = '{{ route('sort-sub-category') }}';
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

    document.addEventListener('DOMContentLoaded', function() {
        feather.replace();
    });
</script>
@endsection
