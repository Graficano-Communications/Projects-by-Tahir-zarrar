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
                     <h2>Project_types</h2>
                  </div>
                  <div>
                    <a href="{{ url('add-project-type') }}" type="button" class="btn btn-info">
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
                              <th>Project Name</th>
                              <th>Type</th>
                              <th>Description</th>
                              <th>Image</th>
                              <th class="text-center"  colspan="2">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($project_types as $project_type)
                           <tr id="{{ $project_type->id }}">
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $project_type->project_name ?? 'N/A' }}</td>
                              <td>
                                @if($project_type->type == 1)
                                    Commercial
                                @elseif($project_type->type == 2)
                                    Residential
                                @elseif($project_type->type == 3)
                                    Downtown
                                @else
                                    Unknown
                                @endif
                            </td>                          
                              <td>{{ $project_type->description }}</td>
                              <td>
                                <img width="80px" height="40px" src="{{ asset('uploads/project_types/' . $project_type->image) }}" alt="{{ $project_type->caption }}">
                              </td>
                              <td class="text-right">
                                <a href="{{ route('edit-project-type', $project_type->id) }}" class="btn btn-success">
                                <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                            <td class="text-start">
                                <form action="{{ route('delete-project-type', $project_type->id) }}" method="POST" onsubmit="return confirmDelete();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                           </tr>
                           @endforeach
                           <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
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
        return confirm('Are you sure you want to delete this Project Type?');
    }

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#BrandSortable").sortable({
            delay: 150,
            stop: function() {
                var selectedData = [];
                $('#BrandSortable>tr').each(function() {
                    var id = $(this).attr("id");
                    console.log("Row ID:", id); // Debugging statement
                    if (id) { // Only push non-null and non-empty IDs
                        selectedData.push(id);
                    }
                });
                updateOrder(selectedData);
            }
        });

        function updateOrder(data) {
            var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var ajaxurl = '{{ route('sort-project-type') }}';
            var postData = {
                'data': data,
                '_token': token
            };
            console.log("Sending data to server:", postData); // Debugging statement

            $.ajax({
                url: ajaxurl,
                type: 'post',
                data: postData,
                success: function(response) {
                    console.log("Response from server:", response); // Debugging statement
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
