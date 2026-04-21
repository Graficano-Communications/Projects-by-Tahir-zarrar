@extends('front-layouts.master')

@section('title', 'blogs')

@section('content')
<style>
     .blog-card .b-card-text {
    padding: 30px 25px;
    position: relative;
    height: 250px;
}
</style>
<div class="page-banner-area bg-blog">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Blog Area -->
<div class="blog-area blog-area-two ptb-100">
    <div class="container">
        <div class="row">

            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="{{ route('blog-details', $blog->id) }}">
                        <img src="{{ asset($blog->front_image)}}" alt="Shape">
                    </a>
                    <div class="b-card-text">
                        <span>{{ $blog->created_at->format('d M Y') }} <a href="#"></a></span>
                        
                        <h3><a href="{{ route('blog-details', $blog->id) }}">{{$blog->blog_name}}</a></h3>

                        <div class="view-more">
                            <a href="{{ route('blog-details', $blog->id) }}" class="view-more-btn">
                                Read more
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach




            
           
        </div>
    </div>
</div>









@endsection