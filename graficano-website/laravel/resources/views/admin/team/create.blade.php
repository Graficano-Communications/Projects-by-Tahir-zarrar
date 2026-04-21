@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <span class="pull-left">
            <h4 class="mt-5 mb-5">Create New Post</h4>
        </span>
        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('teams.index') }}" class="btn btn-primary" title="Show All Posts">
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

        <form method="POST" action="{{ route('teams.store') }}" id="team_post" name="team_post" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Name:</label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="position" class="control-label col-md-2">Position:</label>
                <div class="col-md-10">
                    <input type="text" name="position" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="image_path" class="control-label col-md-2">Image:</label>
                <div class="col-md-10">
                    <input type="file" name="image_path" class="form-control">
                </div>
            </div>

            <!-- Adding new field for rating -->
            <div class="form-group">
                <label for="rating" class="control-label col-md-2">Rating:</label>
                <div class="col-md-10">
                    <input type="number" name="rating" min="1" max="5" class="form-control" placeholder="1-5">
                </div>
            </div>

            <!-- Adding new field for testimonial text -->
            <div class="form-group">
                <label for="testimonial" class="control-label col-md-2">Testimonial Text:</label>
                <div class="col-md-10">
                    <textarea name="testimonial" class="form-control" rows="5" placeholder="Enter testimonial text..."></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input class="btn btn-primary" type="submit" value="Add">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
