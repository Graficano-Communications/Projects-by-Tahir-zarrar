@extends('frontend.layout.master')
@section('title', 'EZ Soft')
@section('main-container')

    <!--============= Banner Section Starts Here =============-->
    <section class="page-header bg_img"
        data-background="{{ asset('assets/frontend/images/front-images/about-us-banner.jpg') }}">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('assets/frontend/css/img/page-header.png') }}">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">Service Detail</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        Service
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <!--============= Colaboration Section Starts Here =============-->
    <section class="colaboration-section padding-top-2 padding-bottom-2 oh" id="screenshot">
        <div class="container">
            <div class="row align-items-center flex-wrap-reverse">
                <div class="col-lg-6 col-xl-7 rtl">
                    <div class="collaboration-anime-area">
                        <div class="main-thumb">
                            <img src="{{ asset('assets/frontend/images/collaboration/main.png') }}" alt="colaboration">
                        </div>
                        <div class="mobile wow slideInUp" data-wow-delay="1s">
                            <div class="show-up">
                                <img src="{{ asset('assets/frontend/images/collaboration/mobile.png') }}"
                                    alt="colaboration">
                            </div>
                            <div class="mobile-slider owl-theme owl-carousel ltr">
                                @foreach ($service->characteristics as $characteristic)
                                    @if ($characteristic->image)
                                        <div class="mobile-item bg_img"
                                            data-background="{{ asset('uploads/services/' . $characteristic->image) }}">
                                            <!-- You can also add more content here if needed -->
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="girl wow slideInLeft">
                            <img src="{{ asset('assets/frontend/images/collaboration/girl.png') }}" alt="colaboration">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="section-header left-style">
                        <h5 class="cate text-md-left text-center">{{ $service->name }}</h5>
                        <h4 class="title text-md-left text-center">{{ $service->first_heading }}</h4>
                        <p style="text-align: justify">{{ $service->detailing }}</p>
                    </div>
                    <div class="colaboration-wrapper">
                        <div class="colaboration-slider owl-carousel owl-theme">
                            @foreach ($service->characteristics as $characteristic)
                                <div class="colaboration-item">
                                    <div class="colaboration-content">
                                        <h5 class="title text-md-left text-center">{{ $characteristic->heading }}</h5>
                                        <p style="text-align: justify">
                                            {{ $characteristic->detail }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="cola-nav text-center">
                            <a class="cola-prev mr-4">
                                <img src="{{ asset('assets/frontend/images/collaboration/left.png') }}" alt="colaboration">
                            </a>
                            <a class="cola-next">
                                <img src="{{ asset('assets/frontend/images/collaboration/right.png') }}"
                                    alt="colaboration">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Colaboration Section Ends Here =============-->
    <section class="trial-section padding-bottom-2 padding-top-2">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="content">
                        <div class="s-item">
                            <h3 class="subtitle mb-md-4 mb-2 text-md-left text-center">About Service</h3>
                            <p style="text-align: justify">{!! html_entity_decode($service->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============= Faq Section Starts Here =============-->
    <section class="faq-section padding-top-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-header">
                        {{-- <div class="cate text-md-left text-center">
                            <img src="{{ asset('assets/frontend/images/cate.png') }}" alt="cate">
                        </div> --}}
                        <h2 class="title text-md-left text-center">Frequently Asked Questions <img src="{{ asset('assets/frontend/images/cate.png') }}" alt="cate"></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-wrapper mb--38">
                        @foreach ($service->faqs as $faqs)
                            <div class="faq-item">
                                <div class="faq-thumb">
                                    <i class="flaticon-pdf"></i>
                                </div>
                                <div class="faq-content">
                                    <h4 class="title">{{ $faqs->question }}</h4>
                                    <p>
                                        {{ $faqs->answer }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Faq Section Ends Here =============-->


    <!--============= Trial Section Starts Here =============-->
    <section class="trial-section padding-bottom padding-top">
        <div class="container">
            <div class="trial-wrapper padding-top padding-bottom pr">
                <div class="ball-1">
                    <img src="{{ asset('assets/frontend/images/balls/balls.png') }}" alt="balls">
                </div>
                <div class="trial-content cl-white">
                    <h3 class="title">Need help for getting started?</h3>
                    <p>
                        Discover how our ERP software can simplify your business operations, improve productivity, and save time.
                    </p>
                </div>
                <div class="trial-button">
                    <a href="{{ route('contact') }}" class="transparent-button">Contact Us <i class="flaticon-right ml-xl-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--============= Trial Section Ends Here =============-->


@endsection
