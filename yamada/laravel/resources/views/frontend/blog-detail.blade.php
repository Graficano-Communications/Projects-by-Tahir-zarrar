@extends('frontend.layout.master')
@section('title', 'Yamada')
@section('main-container')
    <style>
        .ftf a {
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
    <!-- blog-detail -->
    <div class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-detail-main">
                        <div class="blog-detail-main-heading">
                            <ul class="tags-lists justify-content-center">
                                <li class="ftf">
                                    <a href="#" class="tf-btn btn-sm radius-3 btn-fill animate-hover-btn">Blog</a>
                                </li>
                            </ul>
                            <div class="title">{{ $blog->name }}</div>
                            <div class="meta">by <span>Admin</span> on
                                <span>{{ $blog->created_at->format('d F Y') }}</span></div>
                            <div class="image">
                                <img class="lazyload" data-src="{{ asset('uploads/blogs/' . $blog->banner_image) }}"
                                    src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" alt="">
                            </div>
                        </div>
                        <div class="desc">
                            {!! $blog->description !!}
                        </div>
                        <blockquote>
                            <div class="icon">
                                <img src="images/item/quote.svg" alt="">
                            </div>
                            <div class="text">
                                {{ $blog->qoute }} ( By {{ $blog->qoute_writer }} )
                            </div>
                        </blockquote>
                        <div class="grid-image ">
                            <div class="mx-auto">
                                <img class="lazyload" data-src="{{ asset('uploads/blogs/' . $blog->image) }}"
                                    src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
                            </div>
                        </div>
                        <div class="desc">
                            {!! $blog->description1 !!}
                        </div>
                        <div class="tf-article-navigation">
                            @if ($previousBlog)
                                <div class="item position-relative d-flex w-100 prev">
                                    <a href="{{ route('blog.detail', $previousBlog->id) }}" class="icon">
                                        <i class="icon-arrow-left"></i>
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('blog.detail', $previousBlog->id) }}">PREVIOUS</a>
                                        <h6>
                                            <a
                                                href="{{ route('blog.detail', $previousBlog->id) }}">{{ $previousBlog->name }}</a>
                                        </h6>
                                    </div>
                                </div>
                            @endif

                            @if ($nextBlog)
                                <div class="item position-relative d-flex w-100 justify-content-end next">
                                    <div class="inner text-end">
                                        <a href="{{ route('blog.detail', $nextBlog->id) }}">NEXT</a>
                                        <h6>
                                            <a href="{{ route('blog.detail', $nextBlog->id) }}">{{ $nextBlog->name }}</a>
                                        </h6>
                                    </div>
                                    <a href="{{ route('blog.detail', $nextBlog->id) }}" class="icon">
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-sidebar-mobile d-flex">
        <button data-bs-toggle="offcanvas" data-bs-target="#sidebarmobile" aria-controls="offcanvasRight"><i
                class="icon-open"></i></button>
    </div>
    <!-- /blog-detail -->


@endsection
