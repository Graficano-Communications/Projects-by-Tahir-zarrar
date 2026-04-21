@extends('layouts.master')
@section('title', $blog->meta_title)
@section('description', $blog->meta_description)
@section('keywords', $blog->meta_description)
@section('content')
    <style>
        .breadcrumb {
            display: -ms-flexbox;
            display: flex;
            justify-content: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding: .75rem 1rem;
            margin-bottom: 1rem;
            list-style: none;
            background-color: transparent !important;
            border-radius: .25rem;
        }
    </style>

    <!--=================================
            inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('{{ asset('images/blogdetail-banner.jpg') }}');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Blog Detail</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('blog_posts') }}">blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            inner banner -->


    <!--section start-->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-12 blog-detail"
                    style="justify-content: center; display: flex; flex-direction: column;">
                    <img height="600px" src="{{ asset('images/blogs/' . $blog->images) }}"  alt="">
                    <ul class="post-social d-flex justify-content-between my-4" style="list-style: none">
                        <li>{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y ') }}</li>
                        <li>Posted By : Euro-bags Admin</li>
                    </ul>
                    <h3 class="my-4">{{ $blog->title }}</h3>

                    {!! $blog->content !!}
                </div>
            </div>

        </div>
    </section>
    <!--Section ends-->
@endsection
