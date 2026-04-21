@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
                <ol class="breadcrumb">
					<li><a href="{{route('banners')}}">Banners</a></li>
					<li class="active"><a  href="{{route('new_banner')}}">Add New</a> </li>
				</ol>
 <form enctype="multipart/form-data" action="banner/store"  method="post">
  <div class="form-group">
    <label for="caption">Caption</label>
    <input type="text" class="form-control" required="" id="caption" name="caption" placeholder="Enter Product Name">  
  </div>     

    <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" required="" id="image" name="image">  
  </div>
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

	
@endsection