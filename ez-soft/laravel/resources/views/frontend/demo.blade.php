@extends('frontend.layout.master')
@section('title', 'EZ Soft')
@section('main-container')



    <!--============= Banner Section Starts Here =============-->
    <section class="banner-11 oh pos-rel">
        <div class="extra-bg bg_img" data-background="{{ asset('assets/frontend/images/front-images/banner.jpg') }}"></div>
        <div class="container">
            <div class="row " style="padding-top: 280px;">
            </div>
        </div>
    </section>
    <!--============= Banner Section Ends Here =============-->



    <!--============= Feature Video Section Starts Here =============-->
    <section class="feature-video-section padding-top ash-gradient-bg">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-header mw-100">
                        <h5 class="cate">Amazing features to convince you</h5>
                        <h2 class="title">Watch our video presentation</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <p>In the process of making a app, the satisfaction of users is the most
                                    important and the focus is on usability and completeness</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="pos-rel mw-100">
                        <img class="w-100" src="{{ asset('assets/frontend/images/feature/feature-video.png') }}"
                            alt="bg">
                        <a href="https://www.youtube.com/watch?v=ObZwFExwzOo" class="video-button-2 popup">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="flaticon-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Feature Video Section Ends Here =============-->


@endsection
