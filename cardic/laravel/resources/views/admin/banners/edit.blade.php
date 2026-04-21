@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
                <ol class="breadcrumb">
					<li><a href="{{route('banners')}}">Banners</a></li>
					<li class="active">Edit </li>
				</ol>
 <form enctype="multipart/form-data" action="{{ route('banner_update' ,$banner->id) }}"  method="post">
   @method('PUT')
  <div class="form-group">
    <label for="caption">Caption</label>
    <input type="text" class="form-control" required="" id="caption" name="caption" value="{{$banner->caption}}" placeholder="Enter Product Name">  
  </div>     

    <div class="form-group">
    <label for="image">Image</label>
    <img src="{{ asset('images/banners/' . $banner->image)}}"  class="img-resposive"  width="150px" height="100px" >
    <input type="hidden" name="old_img" value="{{$banner->image}}">
    <input type="file" class="form-control"  id="image" name="image">  
  </div>
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

	
@endsection