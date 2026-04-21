@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('our-team.index') }}">Our Team</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('our-team.update', $team->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="name">Member Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $team->name }}" name="name" required placeholder="Enter member name">
                        </div>

                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" value="{{ $team->designation }}" name="designation" required placeholder="e.g. Web Developer">
                        </div>

                        <div class="form-group">
                            <label for="image">New Image</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                            <input type="hidden" name="old_img" value="{{ $team->image }}"><br>
                            <img src="{{ asset('images/' . $team->image) }}" class="img-fluid" style="max-width: 200px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
          
       </div>
    </div>
</div>
@endsection
