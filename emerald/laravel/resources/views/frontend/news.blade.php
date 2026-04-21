@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')

<!-- Page Header Start -->
    <div class="page-header parallaxie"style="background: url('{{ asset('assets/frontend/images/emd-banner-events.jpg') }}') no-repeat center center !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Events</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Testimonial Section Start -->
<div class="our-testimonial pb-4">
    <div class="container">

        @foreach ($news as $index => $item)
            <div class="row align-items-center mb-5">

                @if ($index % 2 == 0)
                    <!-- EVEN INDEX (0,2,4...) → Image Left / Content Right -->

                    <!-- IMAGE -->
                    <div class="col-lg-6 pb-5">
                        <div class="our-testimonial-image pb-5">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('uploads/news/' . $item->image) }}" alt="{{ $item->caption }}">
                            </figure>
                        </div>
                    </div>

                    <!-- CONTENT -->
                    <div class="col-lg-6">
                        <div class="our-testimonial-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ $item->date }}</h3>

                                <h2 class="text-anime-style-3" data-cursor="-opaque">
                                    {{ $item->caption }}
                                </h2>

                                <div class="testimonial-content mt-4">
                                    <p>{{ $item->description }}</p>
                                </div>

                                <div class="testimonial-body">
                                    <div class="author-content">
                                        <h3>{{ $item->location }}</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                @else
                    <!-- ODD INDEX (1,3,5...) → Content Left / Image Right -->

                    <!-- CONTENT -->
                    <div class="col-lg-6">
                        <div class="our-testimonial-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ $item->date }}</h3>

                                <h2 class="text-anime-style-3" data-cursor="-opaque">
                                    {{ $item->caption }}
                                </h2>

                                <div class="testimonial-content mt-4">
                                    <p>{{ $item->description }}</p>
                                </div>

                                <div class="testimonial-body">
                                    <div class="author-content">
                                        <h3>{{ $item->location }}</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- IMAGE -->
                    <div class="col-lg-6 pb-5">
                        <div class="our-testimonial-image pb-5">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('uploads/news/' . $item->image) }}" alt="{{ $item->caption }}">
                            </figure>
                        </div>
                    </div>

                @endif

            </div>
        @endforeach

    </div>
</div>
<!-- Our Testimonial Section End -->



  
@endsection














