@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('categories.store')}}" method="post"  enctype="multipart/form-data">
             <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required=""placeholder="Category Name..">
             </div>
             <div class="form-group">
               <label for="image">Home Page Image (Optional)</label>
               <input type="file" class="form-control-file" name="image" id="image">
             </div>
             <div class="form-group">
               <label for="image">Product Page Banner Image (Optional)</label>
               <input type="file" class="form-control-file" name="banner_image" id="image">
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