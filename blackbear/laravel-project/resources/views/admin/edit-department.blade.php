@extends('admin.layout.master')
@section('title', 'Dashboard')
@section('main-container-admin')

    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Update Your Department</h2>
                        </div>
                        <form action="{{ route('update-department', $department->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name"
                                        value="{{ old('name', $department->name) }}" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>

                                <div class="card-body">
                                    <textarea name="editor1">{{ old('name', $department->description) }}</textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title mb-0">Image</h5>
                                    <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button>
                                </div>
                                <div class="card-body">
                                    @foreach (explode(',', $department->image) as $image)
                                        <div class="image-container mt-2">
                                            <img src="{{ asset('uploads/departments/' . $image) }}" width="100"
                                                height="100" alt="Image">
                                            <button class="remove-image-btn" type="button">&times;</button>
                                            <input type="hidden" name="previous_images[]" value="{{ $image }}">
                                        </div>
                                    @endforeach

                                    <input type="file" class="form-control shadow-none mt-2" name="images[]" multiple
                                        placeholder="Images">
                                    <div id="inputContainer" class="mt-3"></div>
                                </div>
                            </div>
                            {{-- <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Banner Image</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/departments/' . $department->banner_image) }}" width="70px"
                                        height="70px" alt="Image">
                                    <input type="file" class="form-control  mt-2 shadow-none" name="banner_image"
                                        value="{{ old('banner_image', $department->banner_image) }}">
                                </div>
                            </div> --}}
                            <div class="px-3 mt-3">
                                <button type="submit" class="btn btn-success px-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#addInputBtn').click(function() {
                var newInputDiv = $('<div>', {
                    class: 'input-group mt-2'
                });

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


