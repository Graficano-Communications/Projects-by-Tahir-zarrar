<!-- resources/views/admin/news/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Edit News</h2>
</div>

<form method="POST" action="{{ route('news.update', $news->id) }}" enctype="multipart/form-data">

    @csrf
    @method('PATCH') <!-- Use PATCH method for updating -->

    <div class="mb-3">
        <label for="title" class="form-label">News Name</label>
        <input type="text" class="form-control" id="title" name="title" required placeholder="Enter news name" value="{{ $news->title }}">
    </div>

    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="description" rows="5" placeholder="Enter description">{{ $news->description }}</textarea>
    </div>

    <!--<div class="mb-3">-->
    <!--    <label for="description" class="form-label">Description</label>-->
    <!--    <textarea class="form-control" class="tinymce" id="texteditor" name="description" rows="3" required placeholder="Enter description">{{ $news->description }}</textarea>-->
    <!--</div>-->

    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" required value="{{ $news->date }}">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select {{ $news->status === 'private' ? 'bg-secondary text-white' : '' }}" id="status"
            name="status" required>
            <option value="private" {{ $news->status == "private" ? 'selected' : '' }}>private</option>
            <option value="public" {{ $news->status == "public" ? 'selected' : '' }}>public</option>
        </select>
    </div>
    <div id="image-inputs-container">
        @foreach($news->images as $index => $image)
        <div class="mb-3">
            <img src="{{ asset($image->path) }}" alt="img" style="max-width: 100px; max-height: 100px;">
            <br/>
            <label for="front_image_{{ $index }}" class="form-label">Image {{ $index + 1 }} (650 × 330 px)</label>
            <input type="file" class="form-control border border-black w-full" name="front_image[{{ $index }}]" id="front_image_{{ $index }}" accept="image/*">
        </div>
        @endforeach

    </div>

    <!-- <div class="my-1">
        <button type="button" class="btn btn-success bg-success rounded-circle" onclick="addImageInput()"> +</button>
        <button type="button" class="btn btn-danger bg-danger rounded-circle" onclick="removeImageInput()"> -</button>
    </div> -->
<br/>
    <div class="text-start">
        <button type="submit" class="btn btn-success bg-success">Submit</button>
    </div>
</form>

<script>
    function addImageInput() {
        const container = document.getElementById('image-inputs-container');
        const index = container.children.length;
        const input = document.createElement('div');
        input.innerHTML = `
        <div class="mb-3">
            <label for="front_image_${index}" class="form-label">Image ${index + 1}</label>
            <img src="{{ asset('storage/' . $news->images[$index]->path) }}" alt="Current Image" style="max-width: 100px; max-height: 100px;">
            <input type="file" class="form-control border border-black w-full" name="front_image[${index}]" id="front_image_${index}" accept="image/*">
        </div>
    `;
        container.appendChild(input);
    }


    function removeImageInput() {
        const container = document.getElementById('image-inputs-container');
        const lastInput = container.lastChild;
        if (lastInput) {
            container.removeChild(lastInput);
        }
    }
</script>

@endsection