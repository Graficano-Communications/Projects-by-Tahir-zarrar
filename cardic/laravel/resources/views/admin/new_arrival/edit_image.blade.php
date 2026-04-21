@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
    <ol class="breadcrumb"> 
        <li><a href="{{ route('new_arrival.productss') }}">New Arrival Products</a></li>
        <li class="active"> Edit</li>
    </ol>

    <div class="field_wrapper">
        <label for="size">Product Image </label>
        <form action="{{ route('new_arrival.update_images', $image->id) }}" enctype="multipart/form-data" method="post"
            style="margin-top:2%">
            @method('PUT')
            <div class="form-group images_wrapper">
              <label for="size">Images with text</label>
              <div>
                  <input type="text" class="form-control" name="title" value="{{ $image->title }}"> 
                  <br>
                  <img  src="{{ asset('images/products/new_arrivals/'.$image->image) }}"  class="img-fluid">
				  <input type="hidden" value="{{ $image->image }}" name="old_img">
                  <input type="file" class="form-control" id="image" name="image">
              </div>
          </div>
          {{ csrf_field() }}
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
