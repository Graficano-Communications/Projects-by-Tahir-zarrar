@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('categories.update',$category->id)}}" method="post"  enctype="multipart/form-data"> 
  	  	@method('PUT')
             <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}" required="" placeholder="Category Name..">
             </div>
             <div class="form-group">
              <label for="slug">URL</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{$category->slug}}" required="" placeholder="Category slug..">
             </div>
            
             @if($category->image)
            <img src="{{ asset('images/category/' . $category->image)}}"  class="img-resposive" height="100px" >
            @else<p>N/A</p>@endif
            <div class="form-group">
            <input type="hidden" name="old_img" value="{{$category->image}}">
            
            <label for="image">Choose New to change Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            </div>
            
            @if($category->banner_image)
            <img src="{{ asset('images/category/banner_image/' . $category->banner_image)}}"  class="img-resposive"  height="100px" >
            @else<p>N/A</p>@endif
            <div class="form-group">
            <input type="hidden" name="old_banner_img" value="{{$category->banner_image}}">
            
            <label for="banner_image">Choose New to change Banner Image</label>
            <input type="file" class="form-control-file" name="banner_image" id="banner_image">
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