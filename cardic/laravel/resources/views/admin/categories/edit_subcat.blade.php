@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('categories') }}">Categories</a></li>
    <li class="active">Edit </li>
</ol>

<form enctype="multipart/form-data" action="{{ route('update_subcat', $subcategry->id) }}" method="post">
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" required="" id="name" name="name" value="{{$subcategry->name}}" placeholder="Enter Category Name">  
    </div>
  
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Enter Category description">{{$subcategry->description}}</textarea>
    </div>
  
    <input type="hidden" value="{{$catid}}" name="catid">
    
    <div class="form-group">
        <label for="image">Image</label>
        <img src="{{ asset('images/cats/' . $subcategry->image)}}" class="img-responsive" width="100px" height="60px">
        <input type="hidden" name="old_img" value="{{$subcategry->image}}">
        <input type="file" class="form-control" id="image" name="image">  
    </div>

    <!-- New field for the icon image -->
    <div class="form-group">
        <label for="icon_image">Icon Image</label>
        <img src="{{ asset('images/icons/' . $subcategry->icon_image) }}" class="img-responsive" width="100px" height="100px">
        <input type="hidden" name="old_icon" value="{{$subcategry->icon_image}}">
        <input type="file" class="form-control" id="icon_image" name="icon_image">  
    </div>

    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
