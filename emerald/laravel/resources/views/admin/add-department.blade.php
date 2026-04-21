@extends('admin.layout.master')
@section('title', 'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add New Department</h2>
                        </div>
                        <form action="{{ route('add-department-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>

                                <div class="card-body">
                                    <textarea class="form-control shadow-none" name="description" rows="8" placeholder="Description" required></textarea>
                                </div>

                            </div>
                            <div class="card mt-3">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title mb-0">Add Images</h5>
                                    <button type="button" class="btn btn-primary" id="addInputBtn">Add More</button>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="image[]"
                                        placeholder="Image" required>
                                    <div id="inputContainer" class="mt-3"></div>
                                </div>
                            </div>
                            {{-- <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Banner Image</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="banner_image"
                                        placeholder="Image" required>
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
    </script>
@endsection
