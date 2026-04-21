@extends('layouts.master')

@section('title', 'Products | Cardic Instruments')

@section('content')


    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background" style="background-image: url()">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["{{ $category->name ?? 'Cardic Instruments' }}"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                       {!! str_replace('&rsquo;', "'", $category->description) !!}
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
                        <li>{{ $category->name ?? 'Cardic Instruments' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container-fluid">
            <div class="row align-items-center mt-3 px-4">

                @foreach ($data as $subcat)
                    @if ($subcat->sequence % 2 == 1)
                        {{-- NORMAL ROW --}}
                        <div class="col-lg-6 md-mb-50px sm-mb-30px">
                            <img class="rounded-4 img-fluid" src="{{ asset('images/cats/' . $subcat->image) }}"
                                alt="{{ $subcat->name }}">
                        </div>

                       <div class="col-xl-6 col-lg-6
                       "
                            data-anime='{ 
                            "el": "childs", 
                            "translateY": [30, 0], 
                            "opacity": [0,1], 
                            "duration": 600, 
                            "delay": 0, 
                            "staggervalue": 300, 
                            "easing": "easeOutQuad" 
                        }'>
                            <span class="fs-25 fw-600 text-red text-uppercase mb-25px d-block">
                                <span class="w-70px xs-w-50px h-2px bg-red d-inline-block align-middle me-15px"></span>
                                {{ $subcat->name }}
                            </span>
                            <img src="{{ asset('images/icons/' . $subcat->icon_image) }}" class=" img-fluid">



                            {{-- <h4 class="alt-font text-dark-gray mb-20px">
                                {{ $subcat->name }}
                            </h4> --}}

                            <p>{{ $subcat->description }}</p>

                        </div>
                    @else
                        {{-- REVERSED ROW --}}
                        <div class="col-xl-6 col-lg-6 mt-3
                       "
                            data-anime='{ 
                            "el": "childs", 
                            "translateY": [30, 0], 
                            "opacity": [0,1], 
                            "duration": 600, 
                            "delay": 0, 
                            "staggervalue": 300, 
                            "easing": "easeOutQuad" 
                        }'>
                            <span class="fs-25 fw-600 text-red text-uppercase mb-25px d-block">
                                <span class="w-70px xs-w-50px h-2px bg-red d-inline-block align-middle me-15px"></span>
                                {{ $subcat->name }}
                            </span>
                            <img src="{{ asset('images/icons/' . $subcat->icon_image) }}" class=" img-fluid">



                            {{-- <h4 class="alt-font text-dark-gray mb-20px">
                                {{ $subcat->name }}
                            </h4> --}}

                            <p>{{ $subcat->description }}</p>

                        </div>

                        <div class="col-lg-6 md-mb-50px sm-mb-30px">
                            <img class="rounded-4 img-fluid" src="{{ asset('images/cats/' . $subcat->image) }}"
                                alt="{{ $subcat->name }}">
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
