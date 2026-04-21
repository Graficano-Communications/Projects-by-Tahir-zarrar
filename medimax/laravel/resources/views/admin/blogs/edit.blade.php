<!-- resources/views/admin/blogs/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Edit Blog</h2>
</div>

<form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH') <!-- Use PATCH method for updating -->

    <div class="mb-3">
        <label for="blog_name" class="form-label">Blog Name</label>
        <input type="text" class="form-control" id="blog_name" name="blog_name" required placeholder="Enter blog name" value="{{ $blog->blog_name }}">
    </div>
    @if ($blog->front_image)
    <div class="mb-3">
        <label class="form-label">old Front Image</label>
        <br/>
        <img src="{{ asset($blog->front_image) }}" alt="Previous Front Image" style="max-width: 100px; max-height: 100px;">
    </div>
    @endif
    <div class="mb-3">
        <label for="front_image" class="form-label"> Front Image (580 × 580 px)</label>
        <input type="file" class="form-control border border-black w-full" id="front_image" name="front_image" accept="image/*">
    </div>
    
    @if ($blog->detail_image)
    <div class="mb-3">
        <label class="form-label">old Detail Image</label>
        <br/>
        <img src="{{ asset($blog->detail_image) }}" alt="Previous Detail Image" style="max-width: 100px; max-height: 100px;">
    </div>
    @endif

    <div class="mb-3">
        <label for="detail_image" class="form-label">Detail Image (1600 × 900 px)</label>
        <input type="file" class="form-control border border-black w-full" id="detail_image" name="detail_image" accept="image/*">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select {{ $blog->status === 'private' ? 'bg-secondary text-white' : '' }}" id="status"
            name="status" required>
            <option selected disabled>Select status</option>
            <option value="private" {{ $blog->status == "private" ? 'selected' : '' }}>private</option>
            <option value="public" {{ $blog->status == "public" ? 'selected' : '' }}>public</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="editor1" rows="5" placeholder="Enter description">{{ $blog->description }}</textarea>
    </div>
    

   
    <div class="mb-3">
        <label for="feature" class="form-label">Feature</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="feature" id="feature_yes" value="1" {{ $blog->feature == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="feature_yes">
                Yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="feature" id="feature_no" value="0" {{ $blog->feature == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="feature_no">
                No
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-success bg-success">Submit</button>
</form>

@endsection
@section('scripts')



@stop