@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')
<!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our<span>Product</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
                                <li class="breadcrumb-item"><a href="services.html">services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">industrial automation and
                                    robotics</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Service Sidebar Start -->
                    <div class="service-sidebar">
                        <!-- Service Category List Start -->
                        <div class="service-catagery-list wow fadeInUp">
                            <h3>services category</h3>
                            <ul>
                                @foreach($categories as $cat)
                                <li><a href="{{ route('products', $cat->slug) }}">{{ $cat->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Service Category List End -->
                    </div>
                    <!-- Service Sidebar End -->
                </div>

                <div class="col-lg-9">
                    <!-- Service Single Content Start -->
                    <div class="row">
                        @forelse($services as $key => $service)
                        <div class="col-4  mb-4">
                            @php
                                    $images = json_decode($service->service_images, true);
                                    @endphp
                                    @if (!empty($images))
                            <figure class="image-anime reveal">
                                <img class="rounded-5 " src="{{ asset('images/services/' . $images[0]) }}" alt="">
                            </figure>
                            @endif
                            <a href="{{ route('product.detail', $service->slug) }}">
                                <h3 class="text-center">{{ $service->name }}</h3>
                            </a>
                        </div>
                        @empty
                        <div class="row">
                            <div class="col-12 text-center">
                                <h4 class="text-muted">No products against this category.</h4>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->


@endsection
