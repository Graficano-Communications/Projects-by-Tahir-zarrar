@extends('admin.layouts.master')
@section('main-content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Edit Catalogues</h1>
            <form action="{{ route('edit-catalogues-data', $catalogues->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $catalogues->name) }}" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Password</h5>
                    </div>
                    
                    <div class="card-body">
                        <input type="text" class="form-control" id="password" name="password" value="{{ old('password', $catalogues->password) }}" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image</h5>
                    </div>
                    <div class="card-body">
                       <img src="{{ asset('uploads/catalogues/'.$catalogues->image) }}" width="70px" height="70px" alt="Image">
                       <input type="file" class="form-control  mt-2" id="image" name="image" value="{{ old('image', $catalogues->image) }}" required>
                       {{-- <input type="file" class="form-control mt-3" id="pdf" name="image"  > --}}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pdf</h5>
                    </div>
                    <div class="card-body">
                        {{-- @if ($catalogues->pdf)
                            <p>Uploaded File: {{ $catalogues->pdf }}</p>
                        @else
                            <p>No file uploaded</p>
                        @endif --}}

                        <input type="text" class="form-control" id="pdf" name="pdf" value="{{ old('pdf', $catalogues->pdf) }}" required>
                        <input type="file" class="form-control mt-3" id="pdf" name="pdf"  >
                    </div>
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection


