@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('pages.index')}}">pages</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol> 
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('blogs.update',$blog->id)}}" method="post"  enctype="multipart/form-data">
  	  	@method('PUT')
             <div class="form-group">
              <label for="caption">Title</label>
              <input type="text" class="form-control" id="caption" value="{{$blog->title}}" name="title" required="" aria-describedby="emailHelp" placeholder="baner caption..">
             </div>
            <div class="form-group">
            <label for="image">New Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <input type="hidden" name="old_img" value="{{$blog->images}}"><br>
            <img src="{{ asset('images/blogs/' . $blog->images)}}"  class="img-fluid"  >
           
            </div>
          
             <div class="form-group">
              <label for="description">Description</label>
             </div>
             <div class="col-xl-12 col-md-12 editor-space">
                <textarea id="editor1" name="editor1" cols="30" rows="10">{{$blog->content }}</textarea>
               </div>
               <hr>
             <h3>SEO Title and Description </h3>
             <hr>
             <div class="form-group">
              <label for="title">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" value="{{$blog->meta_title}}" name="meta_title" required=""placeholder="Enter Meta Title">
             </div>
             <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <textarea type="text" class="form-control" id="meta_description"  name="meta_description" required="" placeholder="Meta Description..">{{$blog->meta_description}}</textarea>
             </div>
           
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

@section('specificscripts')
<script>
  CKEDITOR.replace( 'editor1', {
    on: {
        contentDom: function( evt ) {
            // Allow custom context menu only with table elemnts.
            evt.editor.editable().on( 'contextmenu', function( contextEvent ) {
                var path = evt.editor.elementPath();

                if ( !path.contains( 'table' ) ) {
                    contextEvent.cancel();
                }
            }, null, null, 5 );
        }
    },
    filebrowserUploadUrl: "{{route('pages.upload', ['_token' => csrf_token() ])}}",

    filebrowserUploadMethod: 'form',
} );

  </script>
@stop