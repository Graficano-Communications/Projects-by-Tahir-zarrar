@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('media.index')}}">medias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('media.update',$media->id)}}" method="post"  enctype="multipart/form-data">
  	  	@method('PUT')
             <div class="form-group">
              <label for="caption">Title</label>
              <input type="text" class="form-control" id="caption" value="{{$media->title}}" name="title" required="" aria-describedby="emailHelp" placeholder="baner caption..">
             </div>
          
            <div class="form-group">
            <label for="image">New Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <input type="hidden" name="old_img" value="{{$media->image}}"><br>
            <img src="{{ asset('images/media/' . $media->image)}}"  class="img-fluid"  >
           
            </div>
           @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
           </form>
  </div>
</div>
          
       </div>
    </div>
</div>
@endsection