@extends('admin.layouts.master')
@section('main-content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Banners</h1>

        <div class="row">
            <form action="{{ url('update-portfolio', $portfolio->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Caption</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control shadow-none" value="{{$portfolio->caption}}" name="caption" placeholder="Caption" required>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Description</h5>
                    </div>
                    <div class="card-body">
                        <textarea class="form-control  shadow-none" rows="2" value=""  name="description" placeholder="Description">{{$portfolio->description}}</textarea>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Banner  Size Recomended (1920*1080)</h5>
                    </div>
                    <div class="card-body">
                        <img width="80px" height="40px" src="{{ asset('uploads/portfolios/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                        <input type="file" class="form-control shadow-none mt-2"  name="image" placeholder="Image" >
                        
                    </div>
                </div>
                <div class="px-3">
                    <button type="submit" class="btn btn-success px-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection


