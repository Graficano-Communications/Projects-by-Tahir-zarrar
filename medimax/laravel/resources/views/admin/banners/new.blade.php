<!-- resources/views/admin/banners/new.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Add Banners</h2>
</div>

<form method="POST" action="{{ route('banners.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label text-dark">Banner Title</label>
        <input type="text" class="form-control text-dark" id="title" name="title" required placeholder="Enter title">
    </div>
    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="editor1" rows="5" placeholder="Enter description"></textarea>
    </div>
    <div class="mb-3">
    <label for="status" class="form-label text-dark">Status</label>
    <select class="form-select bg-secondary text-white" id="status" name="status" required onchange="updateStatusClass(this)">
        <option value="private" selected>private</option>
        <option value="public">public</option>
    </select>
</div>
    <div class="mb-3">
            <label for="image" class="form-label text-dark">Banner Image (1920 × 1000 px)</label>
            <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*" required>
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
@section('scripts')



@stop