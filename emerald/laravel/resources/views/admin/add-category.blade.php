@extends('admin.layout.master')
@section('title', 'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add New Category</h2>
                        </div>
                        <form action="{{ route('add-category-data') }}" method="POST" enctype="multipart/form-data">
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
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug" placeholder="Slug"
                                        required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>

                                <div class="card-body">
                                    <textarea name="editor1"></textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image (Size Recomended 915 x 716)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="image"
                                        placeholder="Image" required>
                                </div>
                            </div>
                            <!-- ✅ Meta Title -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="meta_title"
                                        placeholder="Enter Meta Title">
                                </div>
                            </div>

                            <!-- ✅ Meta Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" rows="3" name="meta_description" placeholder="Enter Meta Description"></textarea>
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
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
