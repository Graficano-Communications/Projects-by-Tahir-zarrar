@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                         @if (session('error'))
                         <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                             <strong>{{ session('error') }}</strong>
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         </div>
                         @endif
                         <div class="heading1 margin_0">
                            <h2>Add New Project Type</h2>
                         </div>
                        <form class="w-100" action="{{ url('add-project-type-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Project</h5>
                                </div>
                                <div class="card-body">
                                    <select name="project_id" class="form-control" required>
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Type</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Type selection dropdown -->
                                    <div >
                                        <select class="form-control shadow-none" name="type" id="type" required>
                                            <option value="1">Commercial</option>
                                            <option value="2">Residential</option>
                                            <option value="3">Down Town</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control  shadow-none" rows="2" name="description" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image  Size Recomended (600*415)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                                </div>
                            </div>
                            <div class="px-1 mt-3">
                                <button type="submit" class="btn btn-success px-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


