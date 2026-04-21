@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <span class="pull-left">
            <h4 class="mt-5 mb-5">Edit Instagram Post</h4>
        </span>
    </div>

    <div class="panel-body">
        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="{{ route('instagram.instagram.update', $instagram->id) }}" id="edit_instagram_post" name="edit_instagram_post" class="form-horizontal" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="name" class="control-label col-md-2">Alt text:</label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control" value="{{ $instagram->name }}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="name" class="control-label col-md-2">Alt text:</label>
                <div class="col-md-10">
                    <input type="text" name="instagram_url" class="form-control" value="{{ $instagram->instagram_url }}">
                </div>
            </div>

            <div class="form-group">
                <label for="image" class="control-label col-md-2">Image:</label>
                <div class="col-md-10">
                    <input type="file" name="image" class="form-control">
                    @if($instagram->image)
                        <img src="{{ asset('images/instagrams/' . $instagram->image)}}" height="100">
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input class="btn btn-primary" type="submit" value="Update">
                </div>
            </div>

        </form>

    </div>
</div>

@endsection
