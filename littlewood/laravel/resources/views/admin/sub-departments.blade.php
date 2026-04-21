@extends('admin.layouts.master')

@section('main-content')
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
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <h1 class="h3 mb-3"><strong>Sub Departments</strong></h1>
    <div class="row text-end mb-3">
        <div>
            <a href="{{ route('add-sub-department', $department->id) }}" type="button" class="btn btn-info">
                <i data-feather="plus-circle"></i> Add New
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped table-hover my-0" id="sortable">
            <thead>
                <tr class="py-3">
                    <th class="d-none d-xl-table-cell text-uppercase py-3">SR#</th>
                    <th class="d-none d-xl-table-cell text-uppercase py-3">Name</th>
                    <th class="d-none d-md-table-cell text-uppercase text-center py-3" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody id="sortableBody">
                @foreach($sub_department as $sub_department)
                <tr id="{{ $sub_department->id }}">
                    <td class="d-none d-xl-table-cell">{{ $loop->iteration }}</td>
                    <td class="d-none d-xl-table-cell">{{ $sub_department->name }}</td>
                    <td class="d-none d-md-table-cell text-end">
                        <a href="{{ route('edit-sub-department', $sub_department->id) }}" class="btn btn-success">
                            <i class="mb-1" data-feather="edit"></i> Edit
                        </a>
                    </td>
                    <td class="d-none d-md-table-cell text-start">
                        <form action="{{ route('delete-sub-department', $sub_department->id) }}" method="POST" onsubmit="return confirmDelete();">
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

<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include jQuery UI library -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this sub-department?');
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
            var ajaxurl = '{{ route('sort-sub-department') }}';
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
