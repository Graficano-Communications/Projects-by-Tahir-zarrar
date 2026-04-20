@extends('frontend.layout.master')
@section('title', 'Long Stone Int')
@section('main-container')
    <!-- ==================== Start Slider ==================== -->

    <header class="page-header blog-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="caption">
                        <div class="sub-title fz-12">
                            <a href="#0"><span>Marketing</span></a>
                            <span>,</span>
                            <a href="#0"><span>Design</span></a>
                        </div>
                        <h1 class="fz-55 mt-30">{{ $blog->name }}</h1>
                    </div>
                    <div class="info d-flex mt-40 align-items-center">
                        <div class="left-info">
                            <div class="d-flex">
                                <div class="author-info">
                                    <div class="d-flex align-items-center">
                                        <a href="#0" class="circle-60">
                                            <img src="{{ asset('uploads/blogs/' . $blog->banner_image) }}" alt="{{ $blog->name }}" class="circle-img">
                                        </a>
                                        <a href="#0" class="ml-20">
                                            <span class="opacity-7">Author</span>
                                            <h6 class="fz-16">By Argos Dental</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="date ml-50">
                                    <a href="#0">
                                        <span class="opacity-7">Published</span>
                                        <h6 class="fz-16">{{ $blog->created_at->format('d F Y') }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background bg-img parallaxie mt-80" data-background="{{ asset('uploads/blogs/' . $blog->banner_image) }}"></div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog section-padding pb-0">
        <div class="container">
            <div class="main-post">
                <div class="item pb-60">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="text">
                                    <div class="d-flex align-items-center">
                                        <p>{!! $blog->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="post-qoute mt-50">
                                <h6 class="fz-20">
                                    <span class="l-block">{{$blog->qoute}}</span>
                                    <span class="sub-title main-color mt-20 mb-0"> {{$blog->qoute_writer}}</span>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="mb-50 mt-50">
                        <div class="row">
                            <div class="col-sm-6 mx-auto">
                                <div class="iner-img sm-mb30">
                                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="text mb-20">
                                <p>{!! $blog->description1 !!}</p>
                            </div>


                        </div>
                    </div>
                </div>
                @if($otherBlogs->isNotEmpty())
                <div class="next-prv-post flex mt-50">
                    @foreach ($otherBlogs as $item)  
                    <div class="thumb-post bg-img" data-background="{{ asset('uploads/blogs/' . $item->image) }}">
                        <a href="{{ route('blog.detail', ['id' => $item->id]) }}">
                            <span class="fz-12 text-u ls1 main-color mb-15"><i class="pe-7s-angle-left"></i>
                                other blogs</span>
                            <h6 class="fw-600 fz-16">{{$item->name}}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>

    </section>

    <!-- ==================== End Blog ==================== -->
@endsection
