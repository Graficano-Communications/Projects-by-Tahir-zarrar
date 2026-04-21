@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('banners.index')}}">Banners</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('banners.update',$banner->id)}}" method="post"  enctype="multipart/form-data">
  	  	@method('PUT')
             <div class="form-group">
              <label for="caption">Caption</label>
              <input type="text" class="form-control" id="caption" value="{{$banner->title}}" name="caption" required="" aria-describedby="emailHelp" placeholder="baner caption..">
              <small id="emailHelp" class="form-text text-muted">Text that you want to apear on banner.</small>
             </div>
             <div class="form-group">
              <label for="caption">Link</label>
              <input type="text" class="form-control" id="link" value="{{$banner->link}}" name="link" required="" aria-describedby="emailHelp" placeholder="https//cashop.com.....">
              <small id="emailHelp" class="form-text text-muted">link that you want to redirect on banner button.</small>
             </div>


            <div class="form-group">
            <label for="image">New Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <input type="hidden" name="old_img" value="{{$banner->image}}"><br>
            <img src="{{ asset('images/' . $banner->image)}}"  class="img-fluid"  >
           
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