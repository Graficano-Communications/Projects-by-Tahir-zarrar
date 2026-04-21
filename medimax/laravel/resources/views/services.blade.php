@extends('front-layouts.master')
@section('title', 'services')
@section('content')

<!-- Page banner area start here -->
<section class="banner__inner-page bg-image pt-180 pb-180 bg-image" data-background="{{ asset('bison_asset/images/banner/services-main-banner.jpg') }}">
    <div class="shape2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
        <img src="{{ asset('bison_asset/images/banner/inner-banner-shape2.png') }}" alt="shape" />
    </div>
    <div class="shape1 wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img src="{{ asset('bison_asset/images/banner/inner-banner-shape1.png') }}" alt="shape" />
    </div>
    <div class="shape3 wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
        <img class="sway__animationX" src="{{ asset('bison_asset/images/banner/inner-banner-shape3.png') }}" alt="shape" />
    </div>
    <div class="container">
        <h2 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
            IT Services
        </h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <a href="/">Home</a><span><i class="fa-regular fa-angles-right mx-2"></i>IT Services</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Service area start here -->
<section class="service-inner-area pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            @foreach($service as $service)
            <div class="col-lg-4 col-md-6">
                <div class="service-two__item">
                    <div class="image">
                        <img src="{{ asset($service->image_path) }}" alt="image" />
                    </div>
                    <div class="service-two__content">
                        <div class="icon">
                            <img src="{{ asset($service->icon_path) }}" alt="icon" />
                        </div>
                        <div class="shape">
                            <img src="{{ asset('bison_asset/images/shape/service-two-item-shape.png') }}" alt="shape" />
                        </div>
                        <h4>
                            <a href="{{ route('services.show', $service->slug) }}" class="primary-hover">{{$service->name}}</a>
                        </h4>
                        <p>{!!$service->description!!}</p>
                        <a class="read-more-btn" href="{{ route('services.show', $service->slug) }}">Read More <i class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
<!-- Service area end here -->

@endsection