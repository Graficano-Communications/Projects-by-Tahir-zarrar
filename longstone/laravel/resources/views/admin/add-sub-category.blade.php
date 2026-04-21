@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
<div class="container-fluid p-0">
    <div class="row mt-5">
        <div class="white_shd full margin_bottom_30">
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <div class="heading1 margin_0">
                        <h2>Add Sub Category</h2>
                    </div>
                    <form class="w-100" action="{{ url('add-sub-category-data') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Name</h5>
                            </div>
                            <div class="card-body">
                                <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Description</h5>
                            </div>
                            <div class="card-body">
                                <textarea class="form-control shadow-none" rows="2" name="editor1" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image</h5>
                            </div>
                            <div class="card-body">
                                <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                            </div>
                        </div>
                        <div class="px-1 mt-3">
                            <button type="submit" class="btn btn-success px-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
@endsection
