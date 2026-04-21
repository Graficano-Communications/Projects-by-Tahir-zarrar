@extends('frontend.layout.master')
@section('title' ,'EZ Soft')
@section('main-container')
<!--============= Header Section Ends Here =============-->
<section class="page-header bg_img oh" data-background="{{ asset('assets/frontend/images/front-images/blog-banner.jpg') }}">
    <div class="bottom-shape d-none d-md-block">
        <img src="{{ asset('assets/frontend/css/img/page-header.png') }}" alt="css">
    </div>
    <div class="container">
        <div class="page-header-content cl-white">
            <h2 class="title">Our Blogs</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    Blogs
                </li>
            </ul>
        </div>
    </div>
</section>
<!--============= Header Section Ends Here =============-->



<!--============= Blog Section Starts Here =============-->
<section class="blog-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <article class="mb-40-none">
                    @foreach($blogs as $blog)
                    <div class="post-item">
                        <div class="post-thumb">
                            <a href="{{ route('blog.detail', $blog->id) }}">
                                <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="blog">
                            </a>
                        </div>                        
                        <div class="post-content">
                            <h3 class="title">
                                <a href="{{ route('blog.detail', $blog->id) }}">{{ $blog->name }}</a>
                            </h3>
                            <p style="text-align: justify">{!! \Illuminate\Support\Str::words($blog->description, 40, '...') !!}</p>
                            <a href="{{ route('blog.detail', $blog->id) }}" class="read mt-2">{{ $blog->created_at->format('d F Y') }}</a>
                        </div>
                    </div>
                    @endforeach
                </article>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-10">
                <aside class="sticky-menu">
                    <div class="widget widget-follow">
                        <h5 class="title">Follow Us</h5>
                        <ul class="social-icons">
                            <li>
                                <a href="https://web.facebook.com/ezsoftpk?mibextid=ZbWKwL&_rdc=1&_rdr#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ezsoft.erp/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@ezconsultantspak" class="active"><i class="fab fa-youtube"></i></a>
                            </li>
                           
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!--============= Blog Section Ends Here =============-->
@endsection