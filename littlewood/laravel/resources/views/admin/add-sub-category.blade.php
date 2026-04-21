@extends('admin.layouts.master')
@section('main-content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Add Sub Category</h1>
        <form action="{{ url('add-sub-category-data') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input style="display: none" type="text" name="category_id" value="{{$category->id}}">
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
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                    </div>
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
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
