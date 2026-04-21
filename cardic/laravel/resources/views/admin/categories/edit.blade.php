@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
           <ol class="breadcrumb">
          <li><a href="{{ route('categories') }}">Categories</a></li>
          <li class="active">Edit </li>
        </ol>
 <form enctype="multipart/form-data" action="{{ route('category_update' ,$category->id) }}"  method="post">
   @method('PUT')
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" required="" id="name" name="name" value="{{$category->name}}" placeholder="Enter Category Name">  
  </div>

  <div class="form-group">
    <label for="discription">Description</label>
    <textarea type="text" class="form-control" required="" id="description" name="description" placeholder="Enter Product Discription">{{$category->description}}
    </textarea>  
  </div>
    <div class="form-group">

    <label for="image">back Image</label>
    <img src="{{ asset('images/cats/' . $category->image)}}"  class="img-resposive"  width="100px" height="100px" >
    <input type="hidden" name="old_img" value="{{$category->image}}">
    <input type="file" class="form-control"  id="image" name="image">  
  </div>
  
  <div class="form-group">

    <label for="image">Instrument Image</label>
    <img src="{{ asset('images/cats/' . $category->instrument_img)}}"  class="img-resposive"  width="100px" height="100px" >
    <input type="hidden" name="old_img" value="{{$category->instrument_img}}">
    <input type="file" class="form-control"  id="instrument_img" name="instrument_img">  
  </div>
    {{ csrf_field() }}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


  
@endsection