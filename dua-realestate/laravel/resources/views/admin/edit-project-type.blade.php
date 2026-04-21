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
                            <h2>Update Your Project Type</h2>
                         </div>
                         <form class="w-100" action="{{ url('edit-project-type-data/' . $project_type->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Project</h5>
                                </div>
                                <div class="card-body">
                                    <select name="project_id" class="form-control" >
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}" {{ $project->id == $project_type->project_id ? 'selected' : '' }}>
                                                {{ $project->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Select Type</h5>
                                </div>
                                <div class="card-body">
                                    <select class="form-control shadow-none" name="type" id="type" >
                                        <option value="1" {{ $project_type->type == 1 ? 'selected' : '' }}>Commercial</option>
                                        <option value="2" {{ $project_type->type == 2 ? 'selected' : '' }}>Residential</option>
                                        <option value="3" {{ $project_type->type == 3 ? 'selected' : '' }}>Down Town</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" rows="2" name="description" placeholder="Description">{{ $project_type->description }}</textarea>
                                </div>
                            </div>
                            
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Current Image</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/project_types/' . $project_type->image) }}" alt="Current Image" class="img-fluid mb-2" style="max-width: 600px; max-height: 415px;">
                                    <h6>Image Size Recommended (600x415)</h6>
                                    <input type="file" class="form-control shadow-none" name="image" placeholder="Image">
                                    <small class="text-muted">Leave blank to keep the current image.</small>
                                </div>
                            </div>
                            
                            <div class="px-1 mt-3">
                                <button type="submit" class="btn btn-success px-3">Update</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


