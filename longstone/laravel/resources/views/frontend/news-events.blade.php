@extends('frontend.layout.master')
@section('title' ,'Long Stone Int')
@section('main-container')
    <!-- start page title -->
    <section class="cover-background background-position-top wow animate__fadeIn" style="background-image:url({{ asset('assets/frontend/images/Front-images/news-banner.jpg') }});">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom">News & Events</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section --> 
    <section class="bg-light-gray ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-9 col-md-12 col-xl-10 blog-content">
                    <div class="blog-list blog-side-image">
                        <!-- start blog item --> 
                        @foreach($amenities as $amenity)
                        <div class="blog-post bg-white box-shadow-medium margin-30px-bottom wow animate__fadeIn">
                            <div class="d-flex flex-column flex-md-row align-items-center">
                                <div class="blog-post-image sm-margin-25px-bottom">
                                    <a  title="">
                                        <img src="{{ asset('uploads/amenities/' . $amenity->image) }}" alt="{{ $amenity->caption }}" />
                                    </a>
                                </div>
                                <div class="post-details padding-4-half-rem-lr md-padding-2-half-rem-lr sm-no-padding">
                                    <a  class="alt-font text-small text-fast-blue font-weight-500 text-uppercase d-inline-block margin-15px-bottom sm-margin-10px-bottom">
                                        {{ \Carbon\Carbon::parse($amenity->date)->format('d F Y') }}
                                    </a>
                                    <a  class="alt-font font-weight-500 text-extra-large text-color-orange d-block margin-20px-bottom sm-margin-10px-bottom">
                                        {{ $amenity->caption }}
                                    </a>
                                    <p class="margin-seventeen-bottom sm-margin-25px-bottom just">
                                        {{ $amenity->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- end blog item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection