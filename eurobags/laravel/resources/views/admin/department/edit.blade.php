@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('our-departments.index') }}">Departments</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('our-departments.update', $department->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="name">Department Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $department->name }}" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $department->description }}</textarea>
                        </div>

                        <!-- Old Images -->
                        <div class="form-group">
                            <label>Existing Images</label>
                            <div class="row">
                                @if($department->images)
                                    @foreach(json_decode($department->images, true) as $index => $img)
                                        <div class="col-md-3 text-center mb-3">
                                            <img src="{{ asset('images/departments/' . $img) }}" class="img-fluid mb-2" style="max-width:150px; height:auto;">
                                            <div>
                                                <input type="checkbox" name="remove_images[]" value="{{ $img }}"> Remove
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <!-- New Images -->
                        <div class="form-group">
                            <label for="images">Add New Images</label>
                            <input type="file" class="form-control-file" name="images[]" id="images" multiple>
                            <small class="text-muted">You can select multiple images</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
          
       </div>
    </div>
</div>
@endsection
