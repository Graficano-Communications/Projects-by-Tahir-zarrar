@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Update Team Member</h2>
                        </div>
                        <form action="{{ url('edit-team-data', $team->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" value="{{ $team->name }}" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Designation</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" value="{{ $team->designation }}" name="designation" placeholder="Designation" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Profile Image (Recommended Size: 350x352)</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/teams/' . $team->image) }}" width="150px" height="150px" alt="Profile Image">
                                    <input type="file" class="form-control shadow-none mt-2" name="image">
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
