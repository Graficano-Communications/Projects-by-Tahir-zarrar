@extends('admin.layouts.master')
@section('main-content')



    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Add category</h1>

        <div class="row">
            <form action="{{ route('update-category', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="name" value="{{ old('name', $category->name) }}" placeholder="Name" required>
                    </div>
                </div>
                {{-- <div id="editor">
                    <p>This is some sample content.</p>
                </div> --}}
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description</h5>
                    </div>

                    <div class="card-body">
                        <textarea name="editor1">{{ old('name', $category->description) }}</textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image (Size Recomended 915 x 716)</h5>
                    </div>
                    <div class="card-body">
                        {{-- <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required> --}}
                        <img src="{{ asset('uploads/categories/'.$category->image) }}" width="70px" height="70px" alt="Image" >
                       <input type="file" class="form-control  mt-2 shadow-none"  name="image" value="{{ old('image', $category->image) }}"  >
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Banner Image</h5>
                    </div>
                    <div class="card-body">
                        @if ($category->banner_image)
                        <img src="{{ asset('uploads/categories/' . $category->banner_image) }}" width="70px" height="70px" alt="Image">
                    @else
                        No image Uploaded
                    @endif
                    
                        <input type="file" class="form-control  mt-2 shadow-none"  name="banner_image" value="{{ old('banner_image', $category->banner_image) }}"  >
                    </div>
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        CKEDITOR.replace( 'editor1' );
</script>
@endsection


