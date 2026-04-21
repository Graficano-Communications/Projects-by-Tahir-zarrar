@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
           <ol class="breadcrumb">
          <li><a href="{{ route('aboutus') }}">About Us</a></li>
          <li class="active">Edit </li>
        </ol>
 <form enctype="multipart/form-data" action="{{ route('about_update' ,$about->id) }}"  method="post">
   @method('PUT')
  <div class="form-group">
    <label for="name">Page Name</label>
    <input type="text" class="form-control" required="" id="name" name="name" value="{{$about->page_name}}" placeholder="Enter Page Name">  
  </div>

  <div class="form-group">
    <label for="discription">Description</label>
    <textarea type="text" class="form-control" required="" id="description" name="description" placeholder="Enter Page Discription">{{$about->description}}
    </textarea>  
  </div>
    <div class="form-group">

    <label for="image">Image</label>
    <img src="{{ asset('images/about/' . $about->image)}}"  class="img-resposive"  width="100px" height="60px" >
    <input type="hidden" name="old_img" value="{{$about->image}}">
    <input type="file" class="form-control"  id="image" name="image">  
  </div>
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 
@endsection