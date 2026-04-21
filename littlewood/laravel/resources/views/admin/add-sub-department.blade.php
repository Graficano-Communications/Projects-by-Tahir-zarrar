@extends('admin.layouts.master')
@section('main-content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Add Sub Department</h1>
        <form action="{{ url('add-sub-department-data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input style="display: none" type="text" name="department_id" value="{{$department->id}}">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description</h5>
                    </div>

                    <div class="card-body">
                        <textarea name="editor1"></textarea>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Add Images</h5>
                        <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button> 
                </div>
                <div class="card-body">
                    <input type="file" class="form-control shadow-none" name="image[]" placeholder="Image" required>
                    <div id="inputContainer" class="mt-3"></div>
                </div>
            </div>
            
            <div class="px-3">
                <button type="submit" class="btn btn-success px-3">Submit</button>
            </div>
        </form>
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
    </script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
