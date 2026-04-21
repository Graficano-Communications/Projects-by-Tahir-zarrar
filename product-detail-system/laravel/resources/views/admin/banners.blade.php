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
                     <h2>Image</h2>
                  </div>
               </div>
               <div class="table_section padding_infor_info">
                  <div class="table-responsive-sm">
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th>SR#</th>
                              <th>Caption</th>
                              <th>Description</th>
                              <th>Image</th>
                              <th class="text-center"  colspan="2">Action</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $banner)
                           <tr id="{{ $banner->id }}">
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $banner->caption }}</td>
                              <td>{{ $banner->description }}</td>
                              <td>
                                <img width="80px" height="40px" src="{{ asset('uploads/banners/' . $banner->image) }}" alt="{{ $banner->caption }}">
                              </td>
                              <td class="text-right">
                                <a href="{{ route('edit-banner', $banner->id) }}" class="btn btn-success">
                                <i class="fa fa-edit"></i> Edit
                                </a>
                            </td>
                            <td class="text-start">
                                <form action="{{ route('delete-banner', $banner->id) }}" method="POST" onsubmit="return confirmDelete();">
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
        return confirm('Are you sure you want to delete this Banner?');
    }

  
       

</script>
@endsection
