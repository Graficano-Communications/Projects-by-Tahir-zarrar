@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('team.update', $teamMember->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $teamMember->name }}">
    </div>

    <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" name="position" class="form-control" value="{{ $teamMember->position }}">
    </div>

    <div class="form-group">
        <label for="rating">Rating:</label>
        <select name="rating" class="form-control">
            <option value="1" @if($teamMember->rating == 1) selected @endif>1</option>
            <option value="2" @if($teamMember->rating == 2) selected @endif>2</option>
            <option value="3" @if($teamMember->rating == 3) selected @endif>3</option>
            <option value="4" @if($teamMember->rating == 4) selected @endif>4</option>
            <option value="5" @if($teamMember->rating == 5) selected @endif>5</option>
        </select>
    </div>
    <div class="form-group">
    <label for="featured">Show on front-end:</label>
    <select name="featured" class="form-control">
        <option value="0" @if($teamMember->featured == 0) selected @endif>No</option>
        <option value="1" @if($teamMember->featured == 1) selected @endif>Yes</option>
    </select>
</div>


    <div class="form-group">
        <label for="testimonial">Testimonial:</label>
        <textarea name="testimonial" class="form-control" rows="5">{{ $teamMember->testimonial }}</textarea>
    </div>

    <div class="form-group">
        <label for="image_path">Image:</label>
        @if($teamMember->image_path)
            <img src="{{ asset('images/team/' . $teamMember->image_path) }}" height="50px">
        @endif
        <input type="file" name="image_path" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
@endsection
