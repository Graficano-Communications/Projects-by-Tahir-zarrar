@extends('frontend.layout.master')
@section('title' ,'Long Stone Int')
@section('main-container')
<!-- start page title -->
<section class="cover-background background-position-top wow animate__fadeIn" style="background-image:url({{ asset('assets/frontend/images/Front-images/blog-banner.jpg') }});">
    <div class="opacity-medium"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                 <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Blogs</h1>
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class=" border-top border-color-medium-gray wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-12 col-lg-4 col-md-6 interactive-banners-style-02 wow animate__fadeInRight mt-3" data-wow-delay="0.8s">
                <a href="{{ route('blog.detail', $blog->id) }}">
                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}">
                    <div class="bg-gradient-black-transparent opacity-full"></div>
                    <span class="category-name font-weight-500 border-radius-2px text-extra-small">Blogs</span>
                    <div class="alt-font category-content justify-content-center">
                        <div class="d-flex">
                            <span class="m-0 align-self-center text-white text-large text-uppercase font-weight-500 w-60 letter-spacing-minus-1-half xl-w-80">{{ $blog->name }}</span>
                            <span class="align-self-center text-center ms-auto interactive-banners-icon">
                                <span class="d-inline-block line-height-40px rounded-circle bg-white w-40px h-40px">
                                    <i class="feather icon-feather-arrow-right text-extra-dark-gray"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- end section -->
@endsection