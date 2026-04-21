@extends('admin.layouts.master')
@section('main-content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>CATALOGUES</h1>

        <div class="row">
            <form action="{{ url('add-catalogues-data') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Name</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Password</h5>
                    </div>
                    <div class="card-body">
                        <input type="password" class="form-control shadow-none" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Image (Recomended Size 800x1010)</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="image" placeholder="Image" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pdf File</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" class="form-control shadow-none" name="pdf" placeholder="Pdf File" required>
                    </div>
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection


