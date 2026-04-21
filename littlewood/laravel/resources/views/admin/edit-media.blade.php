@extends('admin.layouts.master')
@section('main-content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Media</h1>

        <div class="row">
            <form action="{{ url('edit-media-data', $media->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add Video Link </h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="link" value="{{$media->link}}" placeholder="Add Link here" required>
                    </div>
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection


