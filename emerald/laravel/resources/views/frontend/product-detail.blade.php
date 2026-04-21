@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')








    <!-- ==================== Start product ==================== -->
    <div class="our-testimonial" style="background: white">
        <div class="container">
            <div class="row align-items-center">

                <!-- LEFT col-6 (Scrollable Images) -->
                <div class="col-lg-6">
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                @php
                                    $images = json_decode($service->service_images, true);
                                @endphp
                                @foreach ($images as $image)
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="our-testimonial-image">
                                                <figure class="image-anime reveal">
                                                    <img src="{{ asset('images/services/' . $image) }}" alt="">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Testimonial Slide End -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque"><span>{{ $service->name }}</span></h2>
                            <div class="genuine-rating">
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                </ul>
                            </div>

                            <p class="wow fadeInUp" data-wow-delay="0.25s">{!! $service->description !!}
                            </p>

                        </div>
                        <!-- Section Title End -->

                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li>SKU: {{ $service->sku }}</li>
                                                <li>Tags: {{ $service->tags }}</li>
                                                <li>Category: {{ $category->name }} </li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->

                                        <!-- About Content Btn Start -->
                                        <div class="about-content-btn wow fadeInUp" data-wow-delay="0.75s">
                                            <a href="{{ route('contact') }}" class="btn-default"><span>Enquire now</span></a>
                                        </div>
                                        <!-- About Content Btn End -->
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>


            </div>
        </div>
    </div>

    <!-- Our History Section Start -->
    <div class="our-history pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our History Content Start -->
                    <div class="our-history-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <p>{!! $service->description2 !!}</p>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Our History Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our History Section End -->


    <!-- ==================== End product ==================== -->



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
