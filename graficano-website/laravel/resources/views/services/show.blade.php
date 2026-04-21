@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($services->title) ? $services->title : 'Services' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('services.services.destroy', $services->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('services.services.index') }}" class="btn btn-primary" title="Show All Services">
                        <span class="fa fa-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('services.services.create') }}" class="btn btn-success" title="Create New Services">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('services.services.edit', $services->id ) }}" class="btn btn-primary" title="Edit Services">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Services" onclick="return confirm(&quot;Click Ok to delete Services.?&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $services->title }}</dd>
            <dt>Slug</dt>
            <dd>{{ $services->slug }}</dd>
            <dt>Image</dt>
            <dd>{{ $services->image }}</dd>
            <dt>Banner</dt>
            <dd>{{ $services->banner }}</dd>
            <dt>Description</dt>
            <dd>{{ $services->description }}</dd>
            <dt>Meta Title</dt>
            <dd>{{ $services->meta_title }}</dd>
            <dt>Meta Description</dt>
            <dd>{{ $services->meta_description }}</dd>
            <dt>Meta Tags</dt>
            <dd>{{ $services->meta_tags }}</dd>
            <dt>Sequence</dt>
            <dd>{{ $services->sequence }}</dd>
            <dt>Created At</dt>
            <dd>{{ $services->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $services->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection