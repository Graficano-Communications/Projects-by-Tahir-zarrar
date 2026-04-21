@extends('frontend.layout.master')
@section('title' ,'EZ Soft')
@section('main-container')
    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img" data-background="{{ asset('assets/frontend/images/front-images/blog-banner.jpg') }}">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('assets/frontend/css/img/page-header.png') }}" alt="css">
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    
    <!--============= Blog Section Starts Here =============-->
    <section class="blog-single-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-70 mb-lg-0">
                    <article>
                        <div class="post-details">
                            <div class="post-inner">
                                <div class="post-header">
                                    <div class="meta-post">
                                        <a href="#0" class="read"></a>
                                    </div>
                                    <h3 class="title">
                                        {{ $blog->name }}
                                    </h3>
                                </div>
                                <div class="post-content">
                                    <div class="entry-content">
                                        <p>{!! $blog->description !!}</p>
                                        <img src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" alt="blog">
                                        <p>{!! $blog->description1 !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <aside class="sticky-menu">
                        <div class="widget widget-post">
                            <h5 class="title">latest post</h5>
                            <div class="slider-nav">
                                <span class="widget-prev"><i class="fas fa-angle-left"></i></span>
                                <span class="widget-next active"><i class="fas fa-angle-right"></i></span>
                            </div>
                            <div class="widget-slider owl-carousel owl-theme">
                                @foreach ($otherBlogs as $item) 
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('blog.detail', ['id' => $item->id]) }}">
                                            <img src="{{ asset('uploads/blogs/' . $item->image) }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="p-title">
                                            <a href="{{ route('blog.detail', ['id' => $item->id]) }}">{{$item->name}}</a>
                                        </h6>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="widget widget-follow">
                            <h5 class="title">Follow Us</h5>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0" class="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="active">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0" class="">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!--============= Blog Section Ends Here =============-->
@endsection