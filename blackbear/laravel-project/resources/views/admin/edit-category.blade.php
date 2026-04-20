@extends('admin.layout.master')
@section('title', 'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Edit Category</h2>
                        </div>
                        <form action="{{ route('update-category', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name"
                                        value="{{ old('name', $category->name) }}" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug"
                                        value="{{ old('name', $category->slug) }}" placeholder="Slug" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>

                                <div class="card-body">
                                    <textarea name="editor1">{{ old('name', $category->description) }}</textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image (Size Recomended 915 x 716)</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required> --}}
                                    <img src="{{ asset('uploads/categories/' . $category->image) }}" width="70px"
                                        height="70px" alt="Image">
                                    <input type="file" class="form-control  mt-2 shadow-none" name="image"
                                        value="{{ old('image', $category->image) }}">
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
