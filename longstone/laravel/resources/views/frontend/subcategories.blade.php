@extends('frontend.layout.master')
@section('title' ,'Long Stone Int')
@section('main-container')
<!-- start page title -->
<section class="cover-background background-position-top wow animate__fadeIn" style="background-image:url({{ asset('assets/frontend/images/Front-images/blog-banner.png') }});">
    <div class="opacity-medium"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                 <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Blogs</h1>
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section class="py-5 wow animate__fadeIn">
    <div class="container-fluid lg-padding-30px-lr xs-padding-15px-lr">
        <div class="row justify-content-center">
            <div class="col-12 text-center divider-full margin-4-rem-bottom p-0 lg-margin-5-half-rem-bottom xs-margin-3-half-rem-bottom wow animate__fadeIn">
                <div class="divider-border divider-light d-flex align-items-center w-100">
                    <span class="alt-font font-weight-500 text-parrot-green text-uppercase letter-spacing-1px d-block padding-30px-lr">Sub Categories</span>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-md-2">
            <!-- start interactive banner item -->
            @if ($category->subcategories->isEmpty())
                <div class="col-12 text-center w-100">
                    <p class="alert alert-warning">No Subcategories found for this Category.</p>
                </div>
            @else
                @foreach ($category->subcategories as $subcategory)
                    <div class="col interactive-banners-style-09 lg-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <figure class="m-0">
                            <img src="{{ asset('uploads/sub-categories/' . $subcategory->image) }}" alt="{{ $subcategory->name }}">
                            <div class="opacity-very-light bg-black"></div>
                            <figcaption>
                                <div class="interactive-banners-content align-items-start padding-4-rem-all last-paragraph-no-margin">
                                    <h6 class="alt-font font-weight-500 w-55 position-relative z-index-1 xl-w-80 lg-w-40 md-w-50 xs-w-60 text-white">{{ $subcategory->name }}</h6>
                                    <span class="interactive-banners-hover-icon w-40px h-40px line-height-44px text-center d-inline-block bg-white rounded-circle">
                                        <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                    </span>
                                </div>
                                <div class="interactive-banners-hover-action align-items-end d-flex bg-transparent-gradiant-white-black">
                                        <div class="padding-4-rem-all last-paragraph-no-margin">
                                            <a href="{{ route('product.show', [Str::slug($category->name), Str::slug($subcategory->name)]) }}" class="alt-font text-parrot-green -hover text-small text-uppercase d-inline-block font-weight-500">
                                                See Product
                                                <i class="feather icon-feather-arrow-right align-middle margin-5px-left"></i>
                                            </a>
                                        </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            @endif
        
            
            <!-- end interactive banner item -->
            
        </div>
    </div>
</section>
<!-- end section -->
@endsection