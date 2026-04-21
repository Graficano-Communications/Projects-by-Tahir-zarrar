@extends('layouts.app')

@section('content')

<div class="panel panel-default">

    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">Create New Post</h4>
        </span>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('instagram.instagram.index') }}" class="btn btn-primary" title="Show All Posts">
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




        <form method="POST" action="{{ route('instagram.instagram.store') }}" id="insta_post" name="insta_post"
            class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Alt text:</label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="control-label col-md-2">Image:</label>
                <div class="col-md-10">
                    <input type="file" name="image" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="instagram_url" class="control-label col-md-2">Instagram URL:</label>
                <div class="col-md-10">
                    <input type="text" name="instagram_url" id="instagram_url" class="form-control"
                        placeholder="https://www.instagram.com/p/XXXXXXX/">

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