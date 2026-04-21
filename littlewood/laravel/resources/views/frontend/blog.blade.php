@extends('frontend.layouts.master')
@section('title' ,'Littlewood')
@section('main-container')
<style>
    .mtb{
        margin-top: 50px;
    }
    section.half-section{
        padding: 20px 0 !important;
    }
    .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
</style>
        <!-- start page title -->
        <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image: url(' {{ asset('frontend/images/blog-banner.jpg') }}');"
        >
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Blog</h1> --}}
                        <h2 class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Blog</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section --> 
        <section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr">
            <div class="container-fluid mtb">
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @foreach ($blog as $blog )
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="{{route('blog-detail', $blog->id)}}" title=""><img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->name }}"
                                            alt=""></a>
                                        <a  class="blog-category alt-font">Creative</a>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a  class="alt-font text-small d-inline-block margin-10px-bottom">{{ $blog->created_at->format('d F Y') }}
                                        </a>
                                        <a href="{{route('blog-detail', $blog->id)}}" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray margin-15px-bottom d-block">{{$blog->name}}</a>
                                        <p>{!! $blog->description !!}
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <span class="alt-font text-small me-auto">By <a >Little Wood</a></span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                            <!-- end blog item -->
                            
                        </ul>
                        <!-- start pagination -->
                        {{-- <div class="col-12 d-flex justify-content-center margin-7-half-rem-top md-margin-5-rem-top wow animate__fadeIn">
                            <ul class="pagination pagination-style-01 text-small font-weight-500 align-items-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left icon-extra-small d-xs-none"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right icon-extra-small  d-xs-none"></i></a></li>
                            </ul>
                        </div> --}}
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->  
        

@endsection