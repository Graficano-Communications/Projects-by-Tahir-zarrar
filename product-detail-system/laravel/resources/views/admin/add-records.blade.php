@extends('admin.layout.master')
@section('title' ,'Dashboard')
@section('main-container-admin')
    <div class="container-fluid p-0">
        @if ($errors->has('position'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('position') }}</strong>
            </div>
        @endif

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
            <strong>{{ session('status') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row px-5">
            <h1 class="text-center">Product Detail System for Graficano</h1>
        </div>
       <div class="row px-5">
        <form class="w-100" action="{{ route('save.record') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Select Position</h5>
                </div>
                <div class="card-body">
                    <select class="form-control shadow-none" name="position" required>
                        <option value="" disabled selected>Select a Position</option>
                        @for ($i = 1; $i <= 100; $i++)
                            <option value="{{ $i }}">Position {{ $i }}</option>
                        @endfor
                    </select>
                </div>
            </div>
        
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Caption</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control shadow-none" name="caption" placeholder="Caption" required>
                </div>
            </div>
        
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Banner Size Recommended (1920x1080)</h5>
                </div>
                <div class="card-body">
                    <input type="file" class="form-control shadow-none" name="image" placeholder="Image" optional>
                </div>
            </div>
        
            <div class="px-1 mt-3">
                <button type="submit" class="btn btn-success px-3">Submit</button>
            </div>
        </form>
        
       </div>
    </div>

@endsection


