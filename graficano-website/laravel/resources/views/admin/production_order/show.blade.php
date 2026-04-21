@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($event->title) ? $event->title : 'Event' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('events.event.destroy', $event->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('events.event.index') }}" class="btn btn-primary" title="Show All Event">
                        <span class="fa fa-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('events.event.create') }}" class="btn btn-success" title="Create New Event">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('events.event.edit', $event->id ) }}" class="btn btn-primary" title="Edit Event">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Event" onclick="return confirm(&quot;Click Ok to delete Event.?&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $event->title }}</dd>
            <dt>Description</dt>
            <dd>{!! $event->description !!}</dd>
            <dt>Images</dt> 
            <div class="container">
                <div class="row">
                    @foreach (json_decode($event->images) as $image)
                        <div class="col-md-3" style="padding-bottom:40px;">
                            <img src="{{ asset('images/events/' . $image) }}" class="img-fluid">
                            <form action="{{ route('del_event_img', [$image, $event->id]) }}" method="post">
                                {{ method_field('delete') }}
                                @csrf
                                <button style="top: 0;right: 24px;" class="btn btn-danger"
                                    type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="fa fa-trash-o"></i></button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            <dt>Location</dt>
            <dd>{{ $event->location }}</dd>
            <dt>Type</dt>
            <dd>{{ $event->type }}</dd>
            <dt>Start Date</dt>
            <dd>{{ $event->start_date }}</dd>
            <dt>End Date</dt>
            <dd>{{ $event->end_date }}</dd>
            <dt>Sequence</dt>
            <dd>{{ $event->sequence }}</dd>
            <dt>Created At</dt>
            <dd>{{ $event->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $event->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection