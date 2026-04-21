@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="col-md-3 bg-white" style="overflow-x: hidden;
  height: auto;max-height: 250px;">
            @include('admin.layouts.sidemenu')
            </div>
        </div>
        <div class="col-md-9">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categories</a></li>
    <li class="breadcrumb-item"><a href="{{route('view_sub_category',$subcategory->category_id)}}">Sub Categories</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('subcategory.update',$subcategory->id)}}" method="post"  enctype="multipart/form-data">
  	  	@method('PUT')
             <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$subcategory->name}}" required="" placeholder="Category Name..">
              <input type="hidden" name="category_id" value="{{$subcategory->category_id}}">
             </div>
             <div class="form-group">
              <label for="slug">URL</label>
              <input type="text" class="form-control" id="slug" name="slug" value="{{$subcategory->slug}}" required="" placeholder="Category slug..">
              <input type="hidden" name="category_id" value="{{$subcategory->category_id}}">
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