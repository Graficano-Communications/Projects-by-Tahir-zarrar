@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')

    <!-- Page Header Start -->
    <div class="page-header parallaxie"
        style="background: url('{{ asset('assets/frontend/images/emd-banner-private.jpg') }}') no-repeat center center !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Private <span>Label</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Private Label</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Private Label</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Your Own Brand on Instruments? <span>Yes,
                                    It's Possible!</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We offer our customers comprehensive private
                                labeling services and solutions. Whether it’s adding your logo to our high-quality
                                instruments or designing custom packaging with your unique branding, we’ve got you covered.
                                Create a product line that truly reflects your brand identity!
                                Let us help you make a lasting impression with personalized instruments and packaging.
                            </p>
                        </div>
                        <!-- Section Title End -->
                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li>Add your brand logo to any of our premium-quality instruments</li>
                                                <li>Custom packaging design tailored to your brand identity</li>
                                                <li>Low minimum order quantities for private label orders</li>
                                                <li>High-precision manufacturing with strict quality control</li>
                                                <li>Flexible customization options (finishing, engraving, color coating)
                                                </li>
                                                <li>Fast turnaround times for branding and production</li>
                                                <li>Dedicated support team for design, development, and sampling</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
                <div class="col-lg-6 text-center">
                    <!-- About Us Image Start -->



                    <figure class="image-anime reveal rounded-4">
                        <img src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="">
                    </figure>

                </div>


            </div>
        </div>
    </div>
    <!-- About Us End -->


@endsection
