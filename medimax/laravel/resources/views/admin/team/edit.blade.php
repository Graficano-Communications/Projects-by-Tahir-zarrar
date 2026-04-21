@extends('layouts.app')

@section('content')
<div>
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a>
</div>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-xl">{{ isset($teams) ? 'Edit Post' : 'Add Post' }}</h2>
</div>

<form method="POST" action="{{ route('teams.update', $teams->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control text-dark" id="name" name="name" value="{{ old('name', $teams->name) }}" required placeholder="Enter name">
    </div>

    <div class="mb-3">
        <label for="slug" class="form-label text-dark">Slug</label>
        <input type="text" class="form-control text-dark" id="slug" name="slug" value="{{ old('slug', $teams->slug) }}" required placeholder="Enter slug">
    </div>

   

    <div class="mb-3">
        <label for="status" class="form-label text-dark">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option disabled>Select status</option>
            <option value="private" {{ old('status', $teams->status) == 'private' ? 'selected' : '' }}>private</option>
            <option value="public" {{ old('status', $teams->status) == 'public' ? 'selected' : '' }}>public</option>
        </select>
    </div>

    @if ($teams->image_path)
    <div class="mb-3">
        <label class="form-label">Current Front Image</label>
        <br />
        <img src="{{ asset($teams->image_path) }}" alt="Current Front Image" style="max-width: 100px; max-height: 100px;">
    </div>
    @endif
    <div class="mb-3">
        <label for="image" class="form-label text-dark">New Front Image (370 × 250 px)</label>
        <input type="file" class="form-control border border-black w-full" id="image" name="image" accept="image/*">
    </div>

   
  

    <button type="submit" class="btn btn-primary text-white-600 bg-success">Submit</button>
</form>


@endsection