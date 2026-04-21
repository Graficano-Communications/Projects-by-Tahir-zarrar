<!-- resources/views/admin/banners/form.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">{{ isset($banner) ? 'Edit Banner' : 'Add Banner' }}</h2>
</div>

<form method="POST" action="{{ isset($banner) ? route('banners.update', $banner->id) : route('banners.store') }}" enctype="multipart/form-data">
    @csrf
    @if (isset($banner))
    @method('PATCH') <!-- Use PATCH method for updating -->
    @endif

    <div class="mb-3">
        <label for="title" class="form-label text-dark">Banner Title</label>
        <input type="text" class="form-control text-dark" id="title" name="title" required placeholder="Enter title" value="{{ isset($banner) ? $banner->title : old('title') }}">
    </div>
    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="editor1" rows="5" placeholder="Enter description">{{ $banner->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select {{ $banner->status === 'private' ? 'bg-secondary text-white' : '' }}"
         id="status"
            name="status" required>
            <option selected disabled>Select status</option>
            <option value="private" {{ $banner->status == "private" ? 'selected' : '' }}>private</option>
            <option value="public" {{ $banner->status == "public" ? 'selected' : '' }}>public</option>
        </select>
    </div>

    <div class="mb-3">
    @if(isset($banner) && !empty($banner->image))
        <label class="form-label text-dark">Current Image</label>
        <br/>
        <img src="{{ asset('images/banners/' . $banner->image) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
   
    @endif
    </div>
    <div class="mb-3">
        <label for="image" class="form-label text-dark">Banner Image (1920 × 1000 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*" {{ isset($banner) ? '' : 'required' }}>
    </div>

   

    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-primary text-white-600 bg-success">
        {{ isset($banner) ? 'Update' : 'Submit' }}
    </button>
</form>
@endsection

@section('scripts')



@stop