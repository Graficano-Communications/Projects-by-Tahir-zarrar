﻿@extends('frontend.layout.master')
@section('title' ,'Long Stone Int')
@section('main-container')
    <!-- start section -->
    <section class="top-space-margin">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="fs-18 mb-5 d-inline-block"> <a href="#" class="text-dark-gray text-decoration-line-bottom">Blog</a> {{ $blog->created_at->format('d F Y') }}</span>
                    <h1 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0">{{$blog->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0 pt-md-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-p-0">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12"><img style="width:100%; height:600px;" src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" class="w-100" alt=""></div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                        <div class="offset-lg-1 col-md-12 last-paragraph-no-margin text-center text-md-start">
                            {!! $blog->description !!}
                        </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0 pt-md-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <img style="width:100%; height:600px;" src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 text-center text-lg-end sm-mb-30px"><img src="images/blog-single-creative-03.png" class="mt-10px" alt=""></div>
                        <div class="offset-lg-1 col-md-8 last-paragraph-no-margin text-center text-md-start">
                            <div class="pb-35px text-center text-md-start">
                                <h5 class="text-dark-gray fw-500 w-90 md-w-100 alt-font">{{$blog->qoute}}</h5>
                                <span class="fw-600 text-dark-gray d-block lh-20 text-uppercase ls-minus-05px">{{$blog->qoute_writer}}</span>
                            </div>
                            <div class="h-3px w-100 bg-dark-gray mb-35px"></div>
                            {!! $blog->description1 !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    @if($otherBlogs->isNotEmpty())
    <section class="bg-very-light-gray"> 
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <span class="fs-20 d-inline-block text-base-color">You may also like</span>
                    <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px">Related <span class="fw-700 text-highlight d-inline-block">posts<span class="bg-base-color h-10px bottom-1px opacity-2"></span></span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @foreach ($otherBlogs as $item)     
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                        <a href="{{ route('blog.detail', ['id' => $item->id]) }}"><img src="{{ asset('uploads/blogs/' . $item->image) }}" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                        <span class="fs-14 text-uppercase"><a href="#" class="blog-date text-orange">{{ $item->created_at->format('d F Y') }}</a></span>
                                        <a href="{{ route('blog.detail', ['id' => $item->id]) }}" class="card-title alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">{{$item->name}}</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        <!-- end blog item --> 
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif
    
    <!-- end section -->
    <!-- start section -->
   
    <!-- end section -->
@endsection