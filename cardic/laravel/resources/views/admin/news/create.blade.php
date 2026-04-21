@extends('admin.adminmaster')

@section('title', 'Create News Banner')

@section('content')
<ol class="breadcrumb">
    <li><a href="{{ route('news_banners') }}">News Banners</a></li>
    
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

<form action="{{ route('news_banner.store') }}" method="post" enctype="multipart/form-data" novalidate>
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" required id="title" name="title" placeholder="Enter News Banner Title">  
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" required id="description" name="description" placeholder="Enter News Banner Description"></textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" required id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    // Add any specific JS you need here
</script>

@endsection
