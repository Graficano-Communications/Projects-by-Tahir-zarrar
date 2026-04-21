<!-- resources/views/admin/blogs/create.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Add Blog</h2>
</div>

<form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="blog_name" class="form-label">Blog Name</label>
        <input type="text" class="form-control" id="blog_name" name="blog_name" required placeholder="Enter blog name">
    </div>

    <div class="mb-3">
        <label for="front_image" class="form-label">Front Image (580 × 580 px)</label>
        <input type="file" class="form-control  border border-black w-full" id="front_image" name="front_image" accept="image/*" required>
    </div>

    <div class="mb-3">
        <label for="detail_image" class="form-label">Detail Image (1600 × 900 px)</label>
        <input type="file" class="form-control  border border-black w-full" id="detail_image" name="detail_image" accept="image/*" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select bg-secondary text-white" id="status" name="status" required onchange="updateStatusClass(this)">
            <option value="private" selected>private</option>
            <option value="public">public</option>
        </select>
    </div>
    

    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="editor1" rows="5" placeholder="Enter description"></textarea>
    </div>
    <div class="mb-3">
        <label for="feature" class="form-label">Feature</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="feature" id="feature_yes" value="1">
            <label class="form-check-label" for="feature_yes">
                Yes
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="feature" id="feature_no" value="0" checked>
            <label class="form-check-label" for="feature_no">
                No
            </label>
        </div>
    </div>


    <button type="submit" class="btn btn-success bg-success">Submit</button>
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