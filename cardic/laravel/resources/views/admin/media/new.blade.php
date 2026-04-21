@extends('admin.adminmaster')
@section('title', 'Home')
@section('content')

<ol class="breadcrumb">
  <li><a href="{{route('medias')}}">Videos</a></li>
  <li class="active"><a  href="{{route('new_media')}}">Add New</a> </li>
 </ol>

 <form enctype="multipart/form-data" action="media/store"  method="post">

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" required="" id="title" name="title" placeholder="Enter Video Title">  
  </div>     
  
  <div class="form-group">
    <label for="link">Link</label>
   <input type="text" class="form-control" required="" id="link" name="link" placeholder="https://vimeo.com/....."> 
  </div>

    {{ csrf_field() }}

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection