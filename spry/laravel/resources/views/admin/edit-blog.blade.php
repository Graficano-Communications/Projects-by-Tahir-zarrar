@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        <div class="row mt-5">
            <div class="white_shd full margin_bottom_30">
                <div class="table_section padding_infor_info">
                    <div class="table-responsive-sm">
                        <div class="heading1 margin_0">
                            <h2>Update Your Blog</h2>
                         </div>
                         <form action="{{ route('update-blog', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Name</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="name" value="{{ old('name', $blog->name) }}" placeholder="Name" required>
                                </div>
                            </div>
                             <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Slug</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="slug" value="{{ old('slug', $blog->slug) }}" placeholder="Slug" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description</h5>
                                </div>
            
                                <div class="card-body">
                                    <textarea name="editor1">{{ old('name', $blog->description) }}</textarea>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Qoute</h5>
                                </div>
                                <div class="card-body">
                                    <label class="px-1" for=""> Write Qoute Here</label>
                                    <textarea class="form-control shadow-none " name="qoute" required>{{ old('name', $blog->qoute) }}</textarea>
                                    <input type="text" class="form-control shadow-none mt-2" name="qoute_writer" value="{{ old('qoute_writer', $blog->qoute_writer) }}" placeholder="Qoute Writer" required>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Image (Size Recomended 915 x 715)</h5>
                                </div>
                                <div class="card-body">
                                    {{-- <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required> --}}
                                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}" width="400px" height="200px" alt="Image" >
                                   <input type="file" class="form-control  mt-2 shadow-none"  name="image" value="{{ old('image', $blog->image) }}"  >
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Banner  Image (Size Recomended 750 x 450)</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('uploads/blogs/'.$blog->banner_image) }}" width="400px" height="200px" alt="Image" >
                                    <input type="file" class="form-control  mt-2 shadow-none"  name="banner_image" value="{{ old('banner_image', $blog->banner_image) }}"  >
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Description Second</h5>
                                </div>
            
                                <div class="card-body">
                                    <textarea name="editor2">{{ old('name', $blog->description1) }}</textarea>
                                </div>
                            </div>
                            <!-- ✅ Meta Title -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control shadow-none" name="meta_title"
                                        value="{{ $blog->meta_title }}" placeholder="Enter Meta Title">
                                </div>
                            </div>

                            <!-- ✅ Meta Description -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Meta Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control shadow-none" rows="2" name="meta_description" placeholder="Enter Meta Description">{{ $blog->meta_description }}</textarea>
                                </div>
                            </div>
                            <div class="px-3">
                                <button type="submit" class="btn btn-success px-3 mt-3">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


