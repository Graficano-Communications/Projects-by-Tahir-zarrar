@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')

<div class="container-fluid p-0">
    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Update Your Catalouge</h2>
                     </div>
                     <form action="{{ route('edit-catalogues-data', $catalogues->id ) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Name</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" id="name" name="name" value="{{ old('name', $catalogues->name) }}" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Password</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" id="password" name="password" value="{{ old('password', $catalogues->password) }}" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image (Recommended Size 420 x 478)</h5>
                            </div>
                            <div class="card-body">
                                <img src="{{ asset('uploads/catalogues/'.$catalogues->image) }}" width="70px" height="70px" alt="Image">
                                <input type="file" class="form-control mt-2 shadow-none" id="image" name="image">
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">PDF File</h5>
                            </div>
                            <div class="card-body">
                                <p>Current File: <a href="{{ asset('uploads/catalogues/'.$catalogues->pdf) }}" target="_blank">View PDF</a></p>
                                <input type="file" class="form-control mt-3 shadow-none" id="pdf" name="pdf">
                            </div>
                        </div>
                        <div class="px-3 mt-3">
                            <button type="submit" class="btn btn-success px-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


