@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')

<div class="container-fluid p-0">
    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Add Catalogue</h2>
                    </div>
                    <form action="{{ url('add-catalogues-data') }}" method="POST" enctype="multipart/form-data" class="w-100">
                        @csrf
                        <div class="card w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Name</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="card mt-3 w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Password</h5>
                            </div>
                            <div class="card-body">
                                <input type="password" class="form-control shadow-none" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="card mt-3 w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image (Recommended Size 800x1010)</h5>
                            </div>
                            <div class="card-body">
                                <input type="file" class="form-control shadow-none" name="image" required>
                            </div>
                        </div>
                        <div class="card mt-3 w-100">
                            <div class="card-header">
                                <h5 class="card-title mb-0">PDF File</h5>
                            </div>
                            <div class="card-body">
                                <input type="file" class="form-control shadow-none" name="pdf" required>
                            </div>
                        </div>
                        <div class="px-3 mt-3">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


