@extends('front-layouts.master')

@section('title', 'Portfolio')

@section('content')


<!-- Page Banner Area -->
<div class="page-banner-area" style="background-image: url('{{ asset($portfolio->detail_image) }}');">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>{{$portfolio->name}}</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>{{$portfolio->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->
 <div class="container pt-5">
 <h3 class="case-single__title mt-40 mb-30">{{$portfolio->name}}</h3>
 <p>{!!$portfolio->description!!}</p>
 </div>

<!-- Gallery Area -->
<div class="gallery-area">
    <div class="container-fluid">
        

        <div class="row no-gutters covax-gallery">
            @foreach($portfolio->images as $image)
            <div class="col-lg-4 col-sm-6">
                <div class="gallery">
                    <img src="{{ asset('images/portfolio/' . $image->images) }}" alt="Image">
                    <div class="caption">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="{{ asset('images/portfolio/' . $image->images) }}">
                                    <i class='bx bx-show'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- End Gallery Area -->


@endsection