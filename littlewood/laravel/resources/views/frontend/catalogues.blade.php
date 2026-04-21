@extends('frontend.layouts.master')
@section('title', 'Catalogues')
@section('main-container')
    <style>
        .mtb {
            margin-top: 50px;
        }

        section.half-section {
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
    <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5"
        style="background-image: url('{{ asset('frontend/images/catalogue-banner.jpg') }}')">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Catalogues</h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Catalogues</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-light-gray padding-nine-lr pt-0 xl-no-padding-lr">
        <div class="container-fluid mtb">
            <div class="row">
                <div class="col-12 blog-content xs-no-padding-lr">
                    <ul
                        class="blog-modern blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start catalogue item -->
                        @foreach ($catalogue as $cat)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <a><img src="{{ asset('uploads/catalogues/' . $cat->image) }}" alt=""></a>
                                    </div>
                                    <div class="post-details bg-white text-center padding-3-rem-all xl-padding-2-rem-all">
                                        <a
                                            class="blog-category text-fast-blue margin-15px-bottom text-medium font-weight-500 letter-spacing-1px text-uppercase">{{ $cat->name }}</a>
                                        <form action="{{ route('catalogue.download') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $cat->id }}">
                                            <!-- Hidden input for catalogue ID -->
                                            <input placeholder="Enter Code" name="password" type="password">
                                            <button class="btn btn-medium btn-dark-gray mb-0"
                                                type="submit">Download</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                        <!-- end catalogue item -->
                    </ul>
                    <!-- start pagination -->
                    {{-- <div class="col-12 d-flex justify-content-center margin-7-half-rem-top lg-margin-5-rem-top wow animate__fadeIn">
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
