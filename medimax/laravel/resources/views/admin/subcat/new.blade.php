<!-- resources/views/admin/categories/new.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="text-xl">Add Sub Category</h1>
</div>

<form method="POST" action="{{ route('subcat.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="category_id" class="form-label text-dark">Select Category</label>
        <select class="form-select" id="category_id" name="category_id" required>
            <option selected disabled>Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Sub Category Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter Name">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Sub Category Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" required placeholder="Enter Slug">
    </div>


    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select bg-secondary text-white" id="status" name="status" required onchange="updateStatusClass(this)">
            <option value="private" selected>private</option>
            <option value="public">public</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label text-dark">subcategory Image (570 × 620 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*" required>
    </div>
    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-success text-white-600 bg-success">Submit</button>
</form>

@endsection