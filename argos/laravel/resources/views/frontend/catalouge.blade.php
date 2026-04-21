@extends('frontend.layout.master')
@section('title' ,'Long Stone Int')
@section('main-container')
 <!-- start page title -->
 <section class="cover-background background-position-top wow animate__fadeIn"  style="background-image:url({{ asset('assets/frontend/images/Front-images/blog-banner.png') }});">
    <div class="opacity-medium"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                 <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Catalogs</h1>
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class=" border-top border-color-medium-gray wow animate__fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <!-- start interactive banner item -->
            @foreach($catalogues as $catalogue)
            <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeInRight mt-4" data-wow-delay="0.2s">
                <div class="interactive-banners-style-05">                                    
                    <div class="interactive-banners-image">
                        <img src="{{ asset('uploads/catalogues/' . $catalogue->image) }}" alt="{{ $catalogue->name }}" />
                        <div class="overlay-bg bg-gradient-midium-gray-transparent opacity-medium"></div>
                        <a href="{{ asset('uploads/catalogues/' . $catalogue->pdf) }}" class="section-link icon-box-circled w-35px h-35px line-height-32px text-center text-white border-all border-width-2px border-color-white position-absolute bottom-50px right-45px z-index-1 lg-right-30px xs-bottom-25px" download>
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="interactive-banners-content padding-3-half-rem-all lg-padding-2-half-rem-lr xs-padding-4-rem-all">
                        <div class="overlayer-box bottom-0px top-auto opacity-9 bg-extra-dark-gray"></div>
                        <div class="d-table h-100 w-100">
                            <div class="d-table-cell align-bottom padding-35px-right">
                                <span class="text-white d-block text-extra-large margin-15px-bottom alt-font font-weight-500">{{ $catalogue->name }}</span>
                                <p class="interactive-banners-content-text width-85 lg-w-95">Catalogue description here if needed.</p>
                                <a href="{{ asset('uploads/catalogues/' . $catalogue->pdf) }}" class="btn btn-medium btn-gradient-light-purple-light-orange mb-0" download>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end section -->
@endsection