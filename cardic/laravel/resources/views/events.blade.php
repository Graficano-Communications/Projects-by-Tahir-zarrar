@extends('layouts.master')
@section('title', 'Events | Cardic Instruments')
@section('content')

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url('{{ asset('assets/frontend/images/front-images/card-event-banner.jpg') }}')">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["NEWS & EVENTS - {{ $type }}"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        Over the years, our commitment to excellence and passion for
                        clients has been recognized.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start breadcrumb -->
    <section class="pt-15px pb-15px border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>NEWS & EVENTS - {{ $type }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section class="overflow-hidden position-relative pt-2 pb-0 xl-pt-5 lg-pt-8 md-pt-11 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-lg-5 col-md-6">
                    <div
                        class="fs-300 xl-fs-250 lg-fs-200 text-dark-orange fw-600 ls-minus-20px word-break-normal position-relative">
                        Events
                        <div
                            class="position-absolute left-minus-100px top-minus-80px xl-w-230px md-w-200px xl-left-minus-50px xl-top-minus-100px d-none d-md-block z-index-9">
                            <img src="{{ asset('assets/frontend/images/front-images/cardictext.png') }}"
                                class="animation-rotation" alt="" />
                            <div class="absolute-middle-center w-100 z-index-minus-1">
                                <img src="{{ asset('assets/frontend/images/front-images/cardic-round.png') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0 half-section">
        <div class="container">
            @if (count($events))
                @foreach ($events as $index => $event)
                    <div class="row justify-content-center mb-7 sm-mb-40px">
                        <div class="col-xl-10"
                            data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>

                            <div
                                class="row border-bottom border-2 border-color-dark-gray pb-50px mb-50px sm-pb-35px sm-mb-35px align-items-center">

                                <!-- Number -->
                                {{-- <div class="col-md-1 text-center text-md-end md-mb-15px">
                                    <div class="fs-16 fw-600 text-dark-gray">
                                        {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                    </div>
                                </div> --}}

                                <div class="col-md-5  icon-with-text-style-01 md-mb-25px">
                                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                        <div class="feature-box-icon me-50px md-me-35px">
                                            <img src="{{ asset('images/' . $event->image) }}" width="400px;" alt="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="col-md-4  icon-with-text-style-01 md-mb-25px">
                                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                        <div class="feature-box-content">
                                            <span class="d-inline-block text-dark-gray mb-5px fs-20 ls-minus-05px">
                                                <span class="fw-700">{{ $event->title }}</span>
                                            </span>
                                            <p class="w-90 md-w-100">
                                                {!! \Illuminate\Support\Str::words(strip_tags($event->description), 10, '...') !!}
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="col-lg-3 col-md-4 text-center text-md-end">
                                    <a href="javascript:void(0)"
                                        class="btn btn-large btn-expand-ltr text-dark-gray btn-rounded fw-700"
                                        data-bs-toggle="modal" data-bs-target="#eventModal{{ $event->id }}">
                                        <span class="bg-base-color"></span>
                                        View Details
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- MODAL -->
                    <div class="modal fade" id="eventModal{{ $event->id }}" tabindex="-1"
                        aria-labelledby="eventModalLabel{{ $event->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title fw-700" id="eventModalLabel{{ $event->id }}">
                                        {{ $event->title }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('images/' . $event->image) }}" class="img-fluid rounded"
                                            alt="">
                                    </div>

                                    <div class="event-description">
                                        {!! $event->description !!}
                                    </div>
                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- END MODAL -->
                @endforeach
            @else
                <h3 style="padding:40px">No Event Found!</h3>
            @endif
        </div>
    </section>
    <!-- end section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection
