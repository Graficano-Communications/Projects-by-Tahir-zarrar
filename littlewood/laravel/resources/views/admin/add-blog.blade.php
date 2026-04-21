@extends('admin.layouts.master')
@section('main-content')



    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Add Blog</h1>

        <div class="row">
            <form action="{{ route('add-blog-data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
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
                        <textarea name="editor1"></textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image (Size Recomended 915 x 715)</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Banner Image (Size Recomended 750 x 450)</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="banner_image" placeholder="Image" required>
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


