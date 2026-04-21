@extends('frontend.layout.master')
@section('title', 'Nexo')
@section('main-container')


    <!-- Start Breadcrumb
            ============================================= -->
    <div class="breadcrumb-area text-center" style="background-image: url(assets/img/shape/10.jpg);">
        <div class="light-banner-active bg-gray bg-cover" style="background-image: url(assets/img/shape/6.jpg);"></div>
        <div class="container">
            <div class="breadcrumb-item">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>Our Products</h1>
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

    <!-- Start Products Area ============================================= -->
    <div class="team-style-three-area default-padding bottom-less">
        <div class="container-full">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-3 col-md-6 mb-30">
                    <div class="dot-list">
                        <h6 class="sub-title">Our Categories</h6>
                        <ul class="rest">
                            @foreach ($categories as $cat)
                                <li>
                                    <a href="{{ route('products', $cat->slug) }}"
                                        class="{{ $category->id === $cat->id ? 'fw-bold text-orange' : '' }}">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- Single Products -->
                <div class="col-xl-9">
                    <div class="row">
                        <!-- Single Products -->
                        @forelse($services as $key => $service)
                            <div class="col-xl-4 col-md-6 mb-30">
                                <div class="team-style-three-item">
                                    @php
                                        $images = json_decode($service->service_images, true);
                                    @endphp
                                    @if (!empty($images))
                                        <div class="thumb">
                                            <img src="{{ asset('images/services/' . $images[0]) }}" alt="Image Not Found">
                                        </div>
                                    @endif
                                    <div class="info">
                                        <h4><a href="{{ route('product.detail', $service->slug) }}">{{ $service->name }}</a></h4>
                                        <span>{{ $service->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h4 class="text-muted">No products against this category.</h4>
                                </div>
                            </div>
                        @endforelse
                        <!-- Single Products -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Team Area -->



@endsection
