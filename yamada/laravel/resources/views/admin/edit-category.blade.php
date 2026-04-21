@extends('admin.layout.master')
@section('title' ,'Add Product')
@section('main-container-admin')


<div class="container-fluid p-0">
    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Update Category</h2>
                    </div>
                    <form class="w-100" action="{{ route('update-category', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Name</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="name" value="{{ old('name', $category->name) }}" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Slug</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="slug" value="{{ old('slug', $category->slug) }}" placeholder="Slug" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Meta Title</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="meta_title" value="{{ old('meta_title', $category->meta_title) }}" placeholder="meta Title" >
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Meta Description</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="meta_description" value="{{ old('meta_description', $category->meta_description) }}" placeholder="Meta Description" >
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Description</h5>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control shadow-none" rows="2" name="editor1" placeholder="Description">{{ old('name', $category->description) }}</textarea>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image (Size Recommended 600 x 666)</h5>
                            </div>
                            <div class="card-body">
                                @if ($category->image)
                                <img src="{{ asset('uploads/categories/'.$category->image) }}" width="70px" height="70px" alt="Image">
                                @endif
                                <input type="file" class="form-control mt-2 shadow-none" name="image" placeholder="Image">
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Banner Image</h5>
                            </div>
                            <div class="card-body">
                                @if ($category->banner_image)
                                <img src="{{ asset('uploads/categories/' . $category->banner_image) }}" width="70px" height="70px" alt="Banner Image">
                                @else
                                <p>No image uploaded</p>
                                @endif
                                <input type="file" class="form-control mt-2 shadow-none" name="banner_image" placeholder="Banner Image">
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
    
    <script>
        CKEDITOR.replace( 'editor1' );
</script>
@endsection


