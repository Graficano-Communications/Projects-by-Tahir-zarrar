@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('instagram.index') }}">Banners</a></li>
    <li class="active"><a href="{{ route('instagram.create') }}">Add New</a> </li>
</ol>
<form enctype="multipart/form-data" action="{{ route('instagram.store') }}" method="post">
    <div class="form-group">
        <label for="caption">url</label>
        <input type="text" class="form-control" required="" id="caption" name="url" placeholder="Enter URL">
    </div>

    <div class="form-group">
        <label for="caption">alt-text</label>
        <input type="text" class="form-control" required="" id="caption" name="alt" placeholder="Enter URL">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" required="" id="image" name="image">
    </div>
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection