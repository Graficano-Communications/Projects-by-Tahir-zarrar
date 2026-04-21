@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($blog->title) ? $blog->title : 'Blog' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('blogs.blog.destroy', $blog->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('blogs.blog.index') }}" class="btn btn-primary" title="Show All Blog">
                        <span class="fa fa-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('blogs.blog.create') }}" class="btn btn-success" title="Create New Blog">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('blogs.blog.edit', $blog->id ) }}" class="btn btn-primary" title="Edit Blog">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Blog" onclick="return confirm(&quot;Click Ok to delete Blog.?&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $blog->title }}</dd>
            <dt>Slug</dt>
            <dd>{{ $blog->slug }}</dd>
            <dt>Image</dt>
            <dd>{{ $blog->image }}</dd>
            <dt>Banner</dt>
            <dd>{{ $blog->banner }}</dd>
            <dt>Description</dt>
            <dd>{{ $blog->description }}</dd>
            <dt>Writer Name</dt>
            <dd>{{ $blog->writer_name }}</dd>
            <dt>Meta Title</dt>
            <dd>{{ $blog->meta_title }}</dd>
            <dt>Meta Description</dt>
            <dd>{{ $blog->meta_description }}</dd>
            <dt>Meta Tags</dt>
            <dd>{{ $blog->meta_tags }}</dd>
            <dt>Sequence</dt>
            <dd>{{ $blog->sequence }}</dd>
            <dt>Created At</dt>
            <dd>{{ $blog->created_at }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $blog->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection