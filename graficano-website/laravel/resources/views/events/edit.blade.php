@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($event->title) ? $event->title : 'Event' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('events.event.index') }}" class="btn btn-primary" title="Show All Event">
                    <span class="fa fa-th-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('events.event.create') }}" class="btn btn-success" title="Create New Event">
                    <span class="fa fa-plus" aria-hidden="true"></span>
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

            <form method="POST" action="{{ route('events.event.update', $event->id) }}" enctype="multipart/form-data" id="edit_event_form" name="edit_event_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('events.form', [
                                        'event' => $event,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
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