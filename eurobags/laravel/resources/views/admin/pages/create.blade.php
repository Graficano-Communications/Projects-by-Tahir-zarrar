@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About</li>
  </ol>
</nav>
 @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('pages.store')}}" method="post"  enctype="multipart/form-data">
    
             <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" required="" value="" placeholder="Title ..">
             </div>
             <div class="form-group">
              <label for="description">Description</label>
             </div>
             <div class="col-xl-12 col-md-12 editor-space">
                <textarea id="editor1" name="editor1" cols="30" rows="10"></textarea>
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