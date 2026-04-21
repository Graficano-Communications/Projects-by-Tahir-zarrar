@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Update Your Project</h2>
                         </div>
                         <form action="{{ route('update-project', $project->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Project Name -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" value="{{ old('name', $project->name) }}" placeholder="Name" required>
                                </div>
                            </div>
                        
                            <!-- Project Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea name="editor1">{{ old('description', $project->description) }}</textarea>
                                </div>
                            </div>
                        
                            <!-- Main Image -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image (Recommended Size: 915 x 715)</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/projects/' . $project->image) }}" width="100px" height="100px" alt="Image">
                                    <input type="file" class="form-control mt-2 shadow-none" name="image">
                                </div>
                            </div>
                        
                            <!-- Banner Image -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Banner Image (Recommended Size: 750 x 450)</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/projects/' . $project->banner_image) }}" width="400px" height="200px" alt="Banner Image">
                                    <input type="file" class="form-control mt-2 shadow-none" name="banner_image">
                                </div>
                            </div>
                        
                            <!-- Additional Images (Existing Images with Remove Option) -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Additional Images</h5>
                                </div>
                                <div class="card-body">
                                    @if(!empty($project->additional_images))
                                        <div class="existing-images">
                                            <label>Existing Images:</label>
                                            @foreach ($project->additional_images as $image)
                                                <div class="existing-image mb-2">
                                                    <img src="{{ asset('uploads/projects/' . $image) }}" width="100px" height="100px" alt="Additional Image">
                                                    <label>
                                                        <input type="checkbox" name="remove_images[]" value="{{ $image }}"> Remove
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <label>Add New Images:</label>
                                    <input type="file" name="additional_images[]" multiple class="form-control mt-2 shadow-none">
                                    <small class="text-muted">You can select multiple images to add.</small>
                                </div>
                            </div>
                            
                        
                            <!-- Submit Button -->
                            <div class="px-3">
                                <button type="submit" class="btn btn-success px-3 mt-3">Update Project</button>
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- jQuery Script -->
   
@endsection


