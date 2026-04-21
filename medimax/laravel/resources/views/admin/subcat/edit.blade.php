<!-- resources/views/admin/categories/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl"><b>Edit Sub Category</b></h2>
</div>

<form method="POST" action="{{ route('subcategories.update', $subcategory->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT') {{-- Use the PUT method for updates --}}

    <div class="mb-3">
        <label for="category_id" class="form-label text-dark">Select Category</label>
        <select class="form-select" id="category_id" name="category_id" required>
            <option selected disabled>Select Category</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $subcategory->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Sub Category Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter Name"
         value="{{ $subcategory->name }}">
    </div>

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Sub Category Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" required placeholder="Enter Slug"
         value="{{ $subcategory->slug }}">
    </div>

  
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select {{ $subcategory->status === 'private' ? 'bg-secondary text-white' : '' }}" id="status"
            name="status" required>
            <option selected disabled>Select status</option>
            <option value="private" {{ $subcategory->status == "private" ? 'selected' : '' }}>private</option>
            <option value="public" {{ $subcategory->status == "public" ? 'selected' : '' }}>public</option>
        </select>
    </div>
    <div class="mb-3">
    @if($subcategory->image)
    <label class="form-label text-dark">old Image</label><br/>
        <img src="{{ asset('images/subcategory/' . $subcategory->image) }}" alt="old_mage" style="max-width: 100px; max-height: 100px;">
        @endif
        <br/>
        <label for="image" class="form-label text-dark"> Image (575 × 620 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*" >
    </div>
    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-success text-white-600 bg-success">Submit</button>
</form>
@endsection