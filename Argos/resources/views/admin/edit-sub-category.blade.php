@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')


<div class="container-fluid p-0">
    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Update Sub Category</h2>
                    </div>
                    <form action="{{ route('update-sub-category', $sub_category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Name</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="name" value="{{ old('name', $sub_category->name) }}" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Slug</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="slug" value="{{ old('slug', $sub_category->slug) }}" placeholder="Slug" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Meta Title</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="meta_title" value="{{ old('meta_title', $sub_category->meta_title) }}" placeholder="meta Title" >
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Meta Description</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="meta_description" value="{{ old('meta_description', $sub_category->meta_description) }}" placeholder="Meta Description" >
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Description</h5>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control shadow-none" rows="2" name="editor1">{{ old('editor1', $sub_category->description) }}</textarea>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image</h5>
                            </div>
                            <div class="card-body">
                                @if ($sub_category->image)
                                    <img src="{{ asset('uploads/sub-categories/' . $sub_category->image) }}" width="70px" height="70px" alt="Image">
                                @else
                                    No image uploaded
                                @endif
                                <input type="file" class="form-control mt-2 shadow-none" name="image" value="{{ old('image', $sub_category->image) }}">
                            </div>
                        </div>
                        <div class="px-3 mt-3">
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


