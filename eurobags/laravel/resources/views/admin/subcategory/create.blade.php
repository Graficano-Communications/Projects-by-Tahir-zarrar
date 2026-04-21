@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Sub Category</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav> 
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('subcategories.store')}}" method="post"  enctype="multipart/form-data">
             <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required=""placeholder="Category Name..">
             </div>
             @php  $category = \App\category::all() @endphp
             <div class="form-group">
                <label for="category_id">Select Category</label>
                 <select id="category_id" class="form-control"  required="" name="category_id">
                  @foreach($category as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                 @endforeach 
                 </select>
             </div>
             <div class="form-group">
               <label for="image">Product Page Banner Image (Optional)</label>
               <input type="file" class="form-control-file" name="banner_image" id="image">
             </div> 
             <hr>
             <h3>SEO Title and Description </h3>
             <hr>
             <div class="form-group">
              <label for="title">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" name="meta_title" required=""placeholder="Enter Meta Title">
             </div>
             <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <textarea type="text" class="form-control" id="meta_description" name="meta_description" required="" placeholder="Meta Description..">
              </textarea>
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