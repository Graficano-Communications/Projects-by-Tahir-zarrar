@extends('frontend.layout.master')
@section('title', 'Products – SPRY Sports Corp.')
@section('main-container')
<style>
    .text-orange{
        color: #ffaa17;
    }
</style>


<!-- ==================== Start Slider ==================== -->

<header class="page-header section-padding pb-0">
    <div class="container mt-80">
        <div class="row">
            <div class="col-lg-8">
                <div class="caption">
                    <h6 class="sub-title">Our Product</h6>
                    <h1 class="fz-80">Product</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Slider ==================== -->


<!-- ==================== Start shop ==================== -->

<section class="main-shop section-padding">
    <div class="container">
        <div class="row md-marg">
            <div class="col-lg-3">
                <div class="sidebar md-mb80">
                    <div class="item categories mb-40">
                        <div class="title">
                            <h6>Categories</h6>
                        </div>
                        <div class="dot-list">
                            <ul class="rest">
                                @foreach($categories as $cat)
                                <li>
                                    <a href="{{ route('products', $cat->slug) }}" class="{{ $category->id === $cat->id ? 'fw-bold text-orange' : '' }}">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop-products">
                    <div class="top-side d-flex align-items-end mb-40">
                        <div>
                            <h6 class="fz-16 line-height-1">Showing 1–9 of 12 results</h6>
                        </div>
                    </div>
                    <div class="row">
                        @forelse($services as $key => $service)
                        <div class="col-md-6 col-lg-4">
                            <div class="item mb-50">
                                <div class="img">
                                    @php
                                    $images = json_decode($service->service_images, true);
                                    @endphp
                                    @if (!empty($images))
                                    <a href="{{ route('product.detail', $service->slug) }}"><img src="{{ asset('images/services/' . $images[0]) }}" alt="">
                                    </a>
                                    @endif
                                </div>
                                <div class="cont">
                                    <a href="{{ route('product.detail', $service->slug) }}">
                                        <h6>{{ $service->name }}</h6>
                                    </a>
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
                    </div>
                    <div class="pagination d-flex justify-content-center mt-30">
                        <ul class="rest">
                            <li class="active"><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End shop ==================== -->








@push('scripts')
<!-- jQuery -->
<script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

<!-- plugins -->
<script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
<script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


<!-- custom scripts -->
<script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
@endpush

@endsection
