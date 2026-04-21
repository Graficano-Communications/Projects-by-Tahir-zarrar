@extends('frontend.layout.master')
@section('title', 'EZ Soft')
@section('main-container')
    <section class="page-header bg_img oh" data-background="{{ asset('assets/frontend/images/front-images/services-banner.jpg') }}">
        <div class="bottom-shape d-none d-md-block">
            <img src="./assets/css/img/page-header.png" alt="css">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Services Pages</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    <li>
                        Services Pages
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    <!--============= Advance Feature Section Starts Here =============-->
    <section class="advance-feature-section padding-top-2 padding-bottom-2">
        <div class="container">
            @foreach ($services as $service)
                <div class="advance-feature-item padding-top-2 padding-bottom-2 justify-content-center">
                    <div class="advance-feature-thumb ">
                        <img src="{{ asset('uploads/services/' . $service->service_image) }}" alt="feature">
                    </div>
                    <div class="advance-feature-content">
                        <div class="section-header left-style mb-olpo">
                            <h5 class="cate text-lg-left text-center">{{ $service->first_heading }}</h5>
                            <h2 class="title text-lg-left text-center">{{ $service->name }}</h2>
                            <p>{!! html_entity_decode($service->description) !!}</p>
                        </div>
                        <div class="text-lg-left text-center">
                            <a href="{{ route('service.detail', $service->slug) }}" class="get-button">
                            Detail <i class="flaticon-right"></i>
                        </a>
                        </div>
                        
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <!--============= Advance Feature Section Ends Here =============-->
@endsection
