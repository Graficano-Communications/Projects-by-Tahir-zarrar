@extends('admin.adminmaster')
@section('title', 'Home')
@section('content')
<ol class="breadcrumb">
  <li><a href="{{route('medias')}}">Videos</a></li>
  <li class="active">Edit </li>
</ol>

 <form enctype="multipart/form-data" action="{{ route('media_update' ,$media->id) }}"  method="post">
  @method('PUT')
  <div class="form-group">
   <label for="title">Title</label>
   <input type="text" class="form-control" required="" id="title" name="title" value="{{$media->title}}" placeholder="Enter Product Name">  
  </div>     

  <div class="form-group">
    <label for="link">Link</label>
    <input type="text" name="link" value="{{$media->link}}">  
  </div>
   {{ csrf_field() }}

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection