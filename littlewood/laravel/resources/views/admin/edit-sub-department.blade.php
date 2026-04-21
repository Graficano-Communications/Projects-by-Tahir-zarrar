@extends('admin.layouts.master')
@section('main-content')
<style>
    .image-container {
    position: relative;
    display: inline-block;
    margin-right: 10px;
}

.remove-image-btn {
    position: absolute;
    top: -36px;
    right: 5px;
    background: none;
    border: none;
    color: #000000;
    font-size: 30px;
    cursor: pointer;
    z-index: 1;
}

</style>
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Sub department</h1>

        <div class="row">
            @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ url('update-sub-department', $sub_department->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" value="{{$sub_department->name}}" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description</h5>
                    </div>

                    <div class="card-body">
                        <textarea name="editor1">{{$sub_department->description}}</textarea>
                    </div>
                </div>
            </div>
               
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Image</h5>
                            <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button> 
                    </div>
                    <div class="card-body">
                        @foreach(explode(',', $sub_department->image) as $image)
                        <div class="image-container">
                            <img src="{{ asset('uploads/sub_departments/'.$image) }}" width="100" height="100" alt="Image">
                            <button class="remove-image-btn" type="button">&times;</button>
                            <input type="hidden" name="previous_images[]" value="{{ $image }}">
                        </div>
                    @endforeach
                    
                        <input type="file" class="form-control shadow-none mt-2" name="images[]" multiple placeholder="Images">
                        <div id="inputContainer" class="mt-3"></div>
                    </div>
                </div>

                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addInputBtn').click(function() {
                var newInputDiv = $('<div>', { class: 'input-group mt-2' });
                
                var newInput = $('<input>', {
                    type: 'file',
                    class: 'form-control shadow-none',
                    name: 'image[]',
                    placeholder: 'Image',
                    required: true
                });

                var removeBtn = $('<button>', {
                    type: 'button',
                    class: 'btn btn-danger',
                    text: 'Remove'
                });

                newInputDiv.append(newInput).append(removeBtn);
                $('#inputContainer').append(newInputDiv);

                removeBtn.click(function() {
                    newInputDiv.remove();
                });
            });
        });
        $(document).ready(function() {
        // Remove image when the remove button is clicked
        $('.remove-image-btn').click(function() {
            $(this).closest('.image-container').remove();
        });
    });
    </script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection


