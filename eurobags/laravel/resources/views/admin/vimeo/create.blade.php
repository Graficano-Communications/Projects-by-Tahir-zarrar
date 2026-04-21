@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
   <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('vimeos.index')}}">Videos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('vimeos.store')}}" method="post"  enctype="multipart/form-data">
             <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" required=""placeholder="Title .."> 
              <div class="checkbox">
              <label><input type="checkbox" name="feature">Featured</label>
            </div>
             </div>
             <div class="form-group">
              <label for="description">Description</label>
              <textarea  id="texteditor" name="description" placeholder="Details..."></textarea>
             </div>
             <div class="form-group">
              <label for="link">Link</label>
              <input type="text"  class="form-control" name="link" required=""/>
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