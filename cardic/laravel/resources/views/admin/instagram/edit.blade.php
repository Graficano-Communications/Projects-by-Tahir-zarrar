@extends('admin.adminmaster')

@section('title', 'Edit Instagram Widget')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('instagram.index') }}">Instagram Widget</a></li>
    <li class="active"><a href="{{ route('instagram.edit', $item->id) }}">Edit Instagram Widget</a></li>
</ol>
<form enctype="multipart/form-data" action="{{ route('instagram.update', $item->id) }}" method="post">
    @csrf
    @method('PUT') <!-- Use PUT method for updating the resource -->

    <div class="form-group">
        <label for="url">URL</label>
        <input type="text" class="form-control" id="url" name="url" value="{{ $item->link }}" required placeholder="Enter URL">
    </div>

    <div class="form-group">
        <label for="alt">Alt-text</label>
        <input type="text" class="form-control" id="alt" name="alt" value="{{ $item->alt_text }}" required placeholder="Enter Alt Text">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
        <br>
        <!-- Show the existing image -->
        @if($item->image)
            <p>Current Image:</p>
            <img src="{{ asset('images/instagram/' . $item->image) }}" class="img-responsive" width="100px" height="50px">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
