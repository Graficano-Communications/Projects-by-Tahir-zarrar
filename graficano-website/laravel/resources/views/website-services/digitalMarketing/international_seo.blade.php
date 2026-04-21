@extends('layouts.master')

@section('meta_title', 'International Seo')
@section('meta_description',
'International Seo')
@section('meta_tags', '')
<meta name="robots" content="noindex, nofollow" />
@section('content')

@include('website-services.banner',
['name' => "International Seo",
'img' => "assets/images/banners/banner-services.webp"])
<section id="down-section" class="pt-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-6 position-relative ">
                <img class="border-radius-5px" src="{{asset('assets/images/sub-services/seo/international-SEO.webp')}}"
                    alt="" />
            </div>
            <div class="col-lg-6 col-md-6  sm-margin-30px-bottom offset-lg-1">
                <h1 class="alt-font font-weight-600 text-extra-dark-gray w-90" style="font-size:26px;">International Seo
                </h1>
                <p style="text-align: justify;">Coming Soon ... </p>
            </div>
        
        </div>
    </div>
</section>
<section class="overflow-visible  big-section " style="padding:55px 2px !important; ">
    <div class="container">
        <div class="overlap-section">
            <div class="bg-neon-orange border-radius-6px padding-4-half-rem-tb padding-4-rem-lr sm-no-padding-lr wow animate__pulse"
                style="background-image: url(https://lithohtml.themezaa.com/images/home-elerning-bg-03.png);">
                <div class="row align-items-center justify-content-between">

                    <div class="col-xl-4 text-center text-xl-start lg-margin-40px-bottom">
                        <span class="text-extra-medium alt-font text-white">Get in touch !!</span>
                        <h6 class="alt-font font-weight-600 text-white letter-spacing-minus-1-half m-0">
                            Want to get this service ?</h6>
                    </div>

                    <div class="col-lg-3 text-center">
                        <a href="/contact-us"
                            class="btn btn-medium btn-dark-gray btn-fancy btn-round-edge section-link">contact us </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection