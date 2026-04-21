@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Banner</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('banner.banner.index') }}" class="btn btn-primary" title="Show All Event">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('banner.banner.store') }}" enctype="multipart/form-data" accept-charset="UTF-8" id="create_event_form" name="create_event_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('admin.banners.form', [
                                        'event' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

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


