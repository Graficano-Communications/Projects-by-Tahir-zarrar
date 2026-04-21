@extends('frontend.layout.master')
@section('title', 'Search Results')
@section('main-container')

<!-- Page Header -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1>Search <span>Results</span></h1>

                    <p class="text-white mt-3">
                        Results for : "<strong>{{ $query }}</strong>"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products Result Section -->
<div class="page-service-single">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                    @forelse($services as $service)

                        <div class="col-lg-3 col-md-4 col-6 mb-4">

                            @php
                                $images = json_decode($service->service_images, true);
                            @endphp

                            <div class="product-card text-center">

                                @if (!empty($images))
                                <figure class="image-anime reveal">
                                    <a href="{{ route('product.detail', $service->slug) }}">
                                        <img class="rounded-4"
                                            src="{{ asset('images/services/' . $images[0]) }}"
                                            alt="{{ $service->name }}">
                                    </a>
                                </figure>
                                @endif

                                <a href="{{ route('product.detail', $service->slug) }}">
                                    <h5 class="mt-3">{{ $service->name }}</h5>
                                </a>

                            </div>
                        </div>

                    @empty

                        <div class="col-12 text-center py-5">
                            <h3>No products found 😢</h3>
                            <p>Try searching with different keywords.</p>
                        </div>

                    @endforelse

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
