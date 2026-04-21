@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')



    <!-- ==================== Start Slider ==================== -->

    <!-- Page Header Start -->
    <div class="page-header parallaxie"
        style="background: url('{{ asset('uploads/blogs/' . $blog->banner_image) }}') no-repeat center center !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">{{ $blog->name }}</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item"><a href="blog.html">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $blog->name }}</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Blog ==================== -->
    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image Start -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            <p class="wow fadeInUp">{!! $blog->description !!}</p>


                            <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                                <p>{{ $blog->qoute }} - {{ $blog->qoute_writer }}</p>
                            </blockquote>

                            <p class="wow fadeInUp" data-wow-delay="1.4s">{!! $blog->description1 !!}</p>
                        </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                        <span class="tag-links">
                                            Date:
                                            <a href="#">{{ \Carbon\Carbon::parse($blog->date)->format('F j, Y') }}</a>

                                        </span>
                                    </div>
                                    <!-- Post Tags End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->


    <!-- ==================== End Blog ==================== -->
@endsection








