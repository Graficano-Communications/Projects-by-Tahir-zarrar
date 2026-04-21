@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')



    <!-- Page Header Start -->
    <div class="page-header parallaxie"style="background: url('{{ asset('assets/frontend/images/emd-banner-department.jpg') }}') no-repeat center center !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Our <span>Departments</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Departments</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Our Work Section Start -->
    <div class="page-projects">
        <div class="container">
            <div class="row">

                <!-- Filter Menu -->
                <div class="col-lg-12">
                    <div class="our-Project-nav wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li><a href="#" class="active-btn" data-filter="*">all</a></li>

                            @foreach ($departments as $department)
                                <li>
                                    <a href="#" data-filter=".{{ Str::slug($department->name) }}">
                                        {{ $department->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Items -->
                <div class="col-lg-12">
                    <div class="row project-item-boxes align-items-center">

                        @foreach ($departments as $department)
                            @php
                                $images = explode(',', $department->image); // split multiple images
                                $class = Str::slug($department->name); // create filter class
                            @endphp

                            @foreach ($images as $image)
                                <div class="col-md-6 project-item-box {{ $class }}">
                                    <!-- Project Item Start -->
                                    <div class="project-item wow fadeInUp">

                                        <!-- Image -->
                                        <div class="project-image">
                                            <figure class="image-anime">
                                                <img src="{{ asset('uploads/departments/' . trim($image)) }}"
                                                    alt="{{ $department->name }}">
                                            </figure>
                                        </div>

                                        <!-- Tag -->
                                        <div class="project-tag">
                                            <a href="javascript:void(0);">{{ $department->name }}</a>
                                        </div>

                                        <!-- Title -->
                                        <div class="project-content">
                                            <h3>
                                                <a href="{{ route('departments') }}">
                                                    {{ $department->name }}
                                                </a>
                                            </h3>
                                        </div>

                                    </div>
                                    <!-- Project Item End -->
                                </div>
                            @endforeach
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Our Work Section End -->







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
