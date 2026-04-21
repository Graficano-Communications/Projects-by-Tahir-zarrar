@extends('frontend.layout.master')
@section('title', 'Core Star Sports')
@section('main-container')
<style>
    .breadcrumb-item {
    position: relative;
    padding: 40px 0 ;
    padding-top: 220px;
}
</style>

    <!-- Start Breadcrumb
                ============================================= -->
    <div class="breadcrumb-area text-center">
        <div class="light-banner-active "></div>
        <div class="container">
            <div class="breadcrumb-item">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Product Detail</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                <li class="active">Team</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Breadcrumb -->

    <!-- Start Team Single Area
                ============================================= -->
    <div class="team-single-area default-padding-bottom">
        <div class="container">
            <div class="team-content-top">
                <div class="row align-center">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="col-xl-6 col-lg-5 left-info">
                        @php
                            $images = json_decode($service->service_images, true);
                        @endphp
                        <div class="team-style-one-carousel swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">

                                <!-- Single Item -->
                                @foreach ($images as $image )
                                    
                                @endforeach
                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="thumb">
                                            <img src="{{ asset('images/services/' . $image) }}" alt="Image Not Found">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->

                               

                            </div>
                        </div>
                       
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="team-right-info">
                            <h2>{{ $service->name }}</h2>
                            {{-- <span>Senior SEO Analyst</span> --}}
                            <p>
                                {!! $service->description !!}
                            </p>
                            <ul class="user-location">
                                <li>
                                    <strong>Sku:</strong>
                                    <p>{{ $service->sku }}</p>
                                </li>
                                <li>
                                    <strong>Tags:</strong>
                                    <p>{{ $service->tags }}</p>
                                </li>
                                <li>
                                    <strong>Category:</strong>
                                    <p>{{ $category->name }}</p>
                                </li>
                            </ul>
                            <div class="social">
                                <a class="btn circle btn-sm btn-gradient animation" href="contact-us.html">Inquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        {!! $service->description2 !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single -->



@endsection
