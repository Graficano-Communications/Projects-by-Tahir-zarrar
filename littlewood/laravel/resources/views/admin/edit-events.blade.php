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

        <h1 class="h3 mb-3"><strong>events</h1>

        <div class="row">
            <form action="{{ url('edit-event-data', $events->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" value="{{$events->name}}" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control  shadow-none" rows="2" value=""  name="description" placeholder="Description">{{$events->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Date</h5>
                        </div>
                        <div class="card-body">
                            <input type="date" class="form-control shadow-none" value="{{$events->date}}"  name="date" placeholder="Date" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Location</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control shadow-none" value="{{$events->location}}"  name="location" placeholder="Location" required>
                        </div>
                    </div>
                </div>
            </div>
               
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Image</h5>
                            <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button> 
                    </div>
                    <div class="card-body">
                        @foreach(explode(',', $events->image) as $image)
                        <div class="image-container">
                            <img src="{{ asset('uploads/events/'.$image) }}" width="100" height="100" alt="Image">
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
@endsection


