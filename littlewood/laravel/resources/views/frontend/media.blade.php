@extends('frontend.layouts.master')
@section('title' ,'Littlewood')
@section('main-container')
<style>
    .mtb{
        margin-top: 50px;
    }
    section.half-section{
        padding: 20px 0 !important;
    }
    section.big-section {
    padding: 80px 0;
    }
    .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
</style>


        <!-- start page title -->
        <section class="half-section bg-light-gray parallax" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('frontend/images/media-banner.jpg') }}');"
        >
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Media layout</h1> --}}
                        <h2 class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Media</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="big-section">
            <div class="container">
                {{-- <div class="row justify-content-center">
                    <div class="col-md-12 text-center margin-six-bottom">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500">Video iframe</h6>
                    </div>
                </div> --}}
                <div class="row">
                    @foreach ( $video as $med )
                    <div class="col-12 col-md-6 fit-videos text-center sm-margin-30px-bottom">
                        <!-- start vimeo video -->    
                        <iframe  width="560" height="315" src="{{$med->link}}"></iframe>
                        <!-- end vimeo video -->
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection