@extends('layouts.master')

@section('title', 'Broucher | Cardic Instruments')

@section('content')

    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('assets/frontend/images/front-images/card-broucher-banner.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["RESOURCES"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        All Brochures and introductory booklets can be loaded directly, but for security purposes, these
                        resources are password protected. We are happy to send you a password via email. Email us at
                        info@cardic.com.pk
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
                        <li>Broucher</li>
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
                    <div class="fs-300 xl-fs-250 lg-fs-200 text-dark-orange fw-600 ls-minus-20px word-break-normal position-relative">
                      Broucher
                        <div class="position-absolute left-minus-100px top-minus-80px xl-w-230px md-w-200px xl-left-minus-50px xl-top-minus-100px d-none d-md-block z-index-9">
                            <img src="{{ asset('assets/frontend/images/front-images/cardictext.png') }}"
                                class="animation-rotation" alt="" />
                            <div class="absolute-middle-center w-100 z-index-minus-1">
                                <img src="{{ asset('assets/frontend/images/front-images/cardic-round.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    @if (Session::has('download.in.the.next.request'))
        <meta http-equiv="refresh" content="5;url={{ Session::get('download.in.the.next.request') }}">
    @endif
    <section>
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-block"
                    style="color: #fbfbfb;background-color: #f5821f;border-color: #f5821f;margin:10px 0px">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-block"
                    style="color: #fbfbfb;background-color: red;border-color: red;margin:10px 0px">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "scale":[0.9,1], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <!-- start interactive banner item -->
                @foreach ($brochures as $catlog)
                    @if ($catlog->type == 'brochure')
                        <div class="col mb-30px">
                            <div class="interactive-banner-style-04 transition-inner-all">
                                <figure class="m-0 hover-box position-relative overflow-hidden border-radius-6px">
                                    <img src="{{ asset('images/pdf/' . $catlog->image) }}" alt="" />
                                    <div class="overlay-bg bg-gradient-gray-light-dark-transparent opacity-full-dark"></div>
                                    <figcaption class="d-flex flex-column justify-content-end h-100 w-100 p-25px">
                                        <div
                                            class="d-flex flex-column justify-content-center align-items-center last-paragraph-no-margin text-center features-content p-40px lg-p-50px md-p-25px">
                                            <div class="position-relative z-index-1">
                                                {{-- <img src="{{ asset('images/pdf/' . $catlog->image) }}" class="h-60px mb-15px" alt="" > --}}
                                                <a href="demo-gym-and-fitness-schedule.html"
                                                    class="d-block alt-font fw-500 text-dark-gray text-dark-gray-hover box-title fs-24">{{ $catlog->name }}</a>
                                                {{-- <p class="text-dark-gray opacity-6 fw-500">Lorem ipsum do consectetur adipiscing elit do eiusmod.</p> --}}
                                                <form action="{{ route('downloadcatlog') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $catlog->id }}">
                                                    <input style="margin:10px 0px" id="cat-down" type="submit"
                                                        class="categories-btn bg-white text-dark-gray text-uppercase fw-600 ms-0 mb-auto align-self-start"
                                                        value="CLICK HERE TO DOWNLOAD">
                                                </form>
                                                {{-- <a href="{{ $catlog->name }}" class="d-flex justify-content-center align-items-center w-60px h-60px rounded-circle bg-white mx-auto mt-20px"><i class="fa-solid fa-arrow-right text-dark-gray icon-small"></i></a> --}}
                                            </div>
                                            <div class="box-overlay bg-base-color border-radius-6px"></div>
                                        </div>
                                        <div
                                            class="fs-26 alt-font fw-500 text-center text-white box-button p-15px border-radius-2px d-inline-block">
                                            {{ $catlog->name }}</div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    @endif
                @endforeach
                <!-- end interactive banner item -->



            </div>
        </div>
    </section>
    <!-- end section -->




@endsection
