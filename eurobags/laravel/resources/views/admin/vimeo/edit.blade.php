@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('vimeos.index')}}">Videos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('vimeos.update',$vimeo->id)}}" method="post"  enctype="multipart/form-data">
  	  	@method('PUT')	
             <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" value="{{$vimeo->title}}" name="title" required=""placeholder="Title ..">
             </div>
             <div class="checkbox">
              <label><input type="checkbox" name="feature"   @if($vimeo->featured == 1) checked @endif >Featured</label>
            </div>
             <div class="form-group">
              <label for="description">Description</label>
              <textarea type="text" class="form-control" id="description" name="description" required=""  placeholder="Details About Cayegory">{{$vimeo->description}}</textarea>
             </div>
             <div class="form-group">
              <label for="link">link</label>
              <input type="text" value="{{$vimeo->link}}"  class="form-control"   name="link" required=""/>
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