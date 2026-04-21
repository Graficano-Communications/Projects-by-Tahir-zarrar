<!-- resources/views/admin/banners/new.blade.php -->

@extends('layouts.app')

@section('content')
<div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl ">Add Instagram Post</h2>
</div>

<form method="POST" action="{{ route('teams.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" required placeholder="Enter name">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label text-dark">Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" required placeholder="Enter slug">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option selected disabled>Select</option>
            <option value="private" selected>private</option>
            <option value="public">public</option>
        </select>
    </div>
   

    
    <div class="mb-3">
        <label for="image" class="form-label text-dark"> Front-Image (370 × 250 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" required accept="image/*">
    </div>

 

   



    









    <!-- Add other form fields as needed -->
    <button type="submit" class="btn btn-primary text-white-600  bg-success">Submit</button>
</form>





@endsection