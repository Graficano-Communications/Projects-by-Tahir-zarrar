@extends('admin.adminmaster')

@section('title', 'Edit News Banner')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('news_banners') }}">News Banners</a></li>
    <li class="active">Edit News Banner</li>
</ol>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.news.update', $newsBanner->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" required id="title" name="title" value="{{ $newsBanner->title }}" placeholder="Enter News Banner Title">  
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" required id="description" name="description" placeholder="Enter News Banner Description">{{ $newsBanner->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
        <br>
        <!-- Display current image -->
        <img src="{{ asset($destinationPath . '/' . $newsBanner->image) }}" alt="{{ $newsBanner->title }}" width="100">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    // Add any specific JS you need here
</script>

@endsection
