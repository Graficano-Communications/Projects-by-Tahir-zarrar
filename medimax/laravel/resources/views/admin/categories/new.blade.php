<!-- resources/views/admin/categories/new.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a>
</div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl">Add Category</h2>
</div>

<form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Category Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" required placeholder="Enter Slug">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select bg-secondary text-white" id="status" name="status" required
            onchange="updateStatusClass(this)">
            <option value="private" selected>not featured</option>
            <option value="public">featured</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label text-dark">Image (575 × 500 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*"
            required>
    </div>
    <!-- Add other form fields as needed -->

    <button type="submit" class="btn btn-primary text-white-600  bg-success">Submit</button>
</form>
<script>
function updateStatusClass(selectElement) {
    const selectedValue = selectElement.value;
    const statusElement = document.getElementById('status');

    if (selectedValue === 'private') {
        statusElement.classList.add('bg-secondary', 'text-white');
    } else {
        statusElement.classList.remove('bg-secondary', 'text-white');
    }
}
</script>
@endsection