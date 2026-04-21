<!-- resources/views/admin/categories/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a>
</div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl">Edit Category</h2>
</div>

<form method="POST" action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT') {{-- Use the PUT method for updates --}}

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Category Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter Name"
            value="{{ old('name', $category->name) }}">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Category Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" required placeholder="Enter Slug"
            value="{{ old('slug', $category->slug) }}">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select {{ $category->status === 'private' ? 'bg-secondary text-white' : '' }}" id="status"
            name="status" required>
            <option selected disabled>Select status</option>
            <option value="private" {{ $category->status == "private" ? 'selected' : '' }}>not featured</option>
            <option value="public" {{ $category->status == "public" ? 'selected' : '' }}>featured</option>
        </select>
    </div>
    <div class="mb-3">
        @if($category->image)
        <label class="form-label text-dark">old Image</label><br />
        <img src="{{ asset('images/categories/' . $category->image) }}" alt="old_mage"
            style="max-width: 100px; max-height: 100px;">
        @endif
        <br />
        <label for="image" class="form-label text-dark"> Image (575 × 500 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*">
    </div>

    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-success text-white-600 bg-success">Submit</button>
</form>
@endsection