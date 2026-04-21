@extends('frontend.layout.master')
@section('title' ,'Yamada')
@section('main-container')
<style>
    .btn-fill {
            background: linear-gradient(135deg, #B80000, #660000);
            border: 1px solid #B80000 !important;
            color: var(--white) !important;
        }
        .blog-article-item .article-label a {
            background: linear-gradient(135deg, #B80000, #660000);
            color: #ffffff;
            font-size: 10px;
            font-weight: 700;
            line-height: 12px;
            padding: 0 16px;
            height: 31px;
            border-color: #B80000;
        }
</style>
 <!-- page-title -->
 <div class="tf-page-title" style="background-image: url('{{ asset('assets/frontend/images/front-images/blog-banner.jpg') }}');">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <div class="heading text-center text-white">Blogs</div>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li>
                        <a class="text-white" href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <i class="icon-arrow-right text-white"></i>
                    </li>
                    <li class="text-white">
                        Blogs
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->

<!-- blog-grid-main -->
<div class="blog-grid-main">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-xl-4 col-md-6 col-12">
                <div class="blog-article-item">
                    <div class="article-thumb">
                        <a href="{{ route('blog.detail', $blog->id) }}">
                            <img class="lazyload" data-src="{{ asset('uploads/blogs/' . $blog->image) }}" src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="img-blog">
                        </a>
                        <div class="article-label">
                            <a href="{{ route('blog.detail', $blog->id) }}" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">Blogs</a>
                        </div>
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <a href="{{ route('blog.detail', $blog->id) }}" class="">{{ $blog->name }}</a>
                        </div>
                        <div class="article-btn">
                            <a href="{{ route('blog.detail', $blog->id) }}" class="tf-btn btn-line fw-6">Read more<i class="icon icon-arrow1-top-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- /blog-grid-main -->
@endsection