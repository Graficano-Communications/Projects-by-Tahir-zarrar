<!-- resources/views/admin/news/create.blade.php -->

@extends('layouts.app')

@section('content')
<div > <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Add News</h2>
</div>

<form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">News Name</label>
        <input type="text" class="form-control" id="title" name="title" required placeholder="Enter news name">
    </div>

    <div class="mb-3">
        <label for="description" style="text-align: left;">Description</label>
        <textarea type="text" class="tinymce" id="texteditor" name="description" rows="5" placeholder="Enter description"></textarea>
    </div>

    <!--<div class="mb-3">-->
    <!--    <label for="description" class="form-label">Description</label>-->
    <!--    <textarea class="form-control" class="tinymce" id="texteditor" name="description" rows="3" required-->
    <!--        placeholder="Enter description"></textarea>-->
    <!--</div>-->

    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select bg-secondary text-white" id="status" name="status" required
            onchange="updateStatusClass(this)">
            <option value="private" selected>private</option>
            <option value="public">public</option>
        </select>
    </div>
    <!-- <div id="image-inputs-container">
        <input type="file" class="form-control border border-black w-full" name="front_image[]" accept="image/*" required>
    </div>
    <div class="my-1">
        <button type="button" class="btn btn-success bg-success rounded-circle" onclick="addImageInput()"> +</button>
        <button type="button" class="btn btn-danger bg-danger rounded-circle" onclick="removeImageInput()"> -</button>
    </div> -->

    <div class="mb-3" id="images-container">
        <label for="images" class="form-label">Images (650 × 330 px)</label>
        <div class="input-group mb-3">
            <input class="form-control border border-black w-full" name="front_image[]" type="file" required>
            
        </div>
    </div>
    <div >
        <button type="submit" class="btn btn-success bg-success">Submit</button>
    </div>
</form>



@endsection