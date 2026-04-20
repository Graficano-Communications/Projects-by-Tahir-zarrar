@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Add New Blog</h2>
                         </div>
                         <form class="w-100" action="{{ route('add-blog-data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug" placeholder="Slug" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
    
                                <div class="card-body">
                                    <label for="editor1" class="form-label">Add First Description Here ...</label>
                                    <textarea class="form-control" name="editor1" rows="8" required
                                    placeholder="Enter description"></textarea>
                            
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Qoute</h5>
                                </div>
                                <div class="card-body">
                                    <label class="px-1" for=""> Write Qoute Here</label>
                                    <textarea class="form-control shadow-none" name="qoute" required></textarea>
                                    <input type="text" class="form-control shadow-none mt-2" name="qoute_writer" placeholder="Writer Name" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image (Size Recomended 915 x 715)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Banner Image (Size Recomended 750 x 450)</h5>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="form-control shadow-none" name="banner_image" placeholder="Image" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description Second</h5>
                                </div>
    
                                <div class="card-body">
                                    <label for="editor2" class="form-label">Add Second Description Here ...</label>
                                    <textarea class="form-control" name="editor2" rows="8" required
                                    placeholder="Enter description"></textarea>
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
    
 
@endsection


