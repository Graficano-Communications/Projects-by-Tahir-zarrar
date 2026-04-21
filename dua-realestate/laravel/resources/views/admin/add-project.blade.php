@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add New Project</h2>
                         </div>
                         <form class="w-100" action="{{ route('add-project-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
                                <div class="card-body">
                                    <label for="editor1" class="form-label">Add First Description Here ...</label>
                                    <textarea class="form-control" name="editor1" rows="8" required placeholder="Enter description"></textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Project Logo (Size Recommended 915 x 715)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Project Banner Image (Size Recommended 1920 x 600)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="banner_image" placeholder="Image" required>
                                </div>
                            </div>
                        
                            <!-- Multiple Images Section -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Additional Project Images</h5>
                                </div>
                                <div class="card-body">
                                    <div id="image-upload-container">
                                        <div class="input-group mb-3">
                                            <input type="file" name="additional_images[]" class="form-control shadow-none" required>
                                            <button type="button" class="btn btn-outline-secondary add-image-btn">Add More</button>
                                        </div>
                                    </div>
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
    
  
<!-- jQuery Script -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Add more images on button click
        $(document).on('click', '.add-image-btn', function() {
            $('#image-upload-container').append(`
                <div class="input-group mb-3">
                    <input type="file" name="additional_images[]" class="form-control shadow-none" required>
                    <button type="button" class="btn btn-outline-danger remove-image-btn">Remove</button>
                </div>
            `);
        });

        // Remove image input on button click
        $(document).on('click', '.remove-image-btn', function() {
            $(this).closest('.input-group').remove();
        });
    });
</script>
@endsection


