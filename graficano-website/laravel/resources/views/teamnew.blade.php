@extends('layouts.master')

@section('meta_title', 'About us | digital marketing services agency')
@section('meta_description',
'From Digital Marketing to website development, we’re here for you. We’re your next digital
partner.')
@section('meta_tags', 'digital marketing, website development, seo services')


@section('SpecificStyles')

@stop

@section('content')
<!-- start section -->
<section class="fix-background" style="background-image:url('{{ asset('assets/images/team/our-team-bg2.jpg') }}');">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center margin-7-rem-bottom z-index-0">
                <div class="tilt-box" data-tilt-options='{ "maxTilt": 20, "perspective": 1000, "easing": "cubic-bezier(.03,.98,.52,.99)", "scale": 1, "speed": 500, "transition": true, "reset": true, "glare": false, "maxGlare": 1 }'>
                    <div class="margin-20px-bottom d-block"><span class="alt-font font-weight-500 text-white text-uppercase text-small letter-spacing-1px bg-extra-dark-gray d-inline-block padding-20px-lr padding-5px-tb">We
                            are Graficano highly creative team</span></div>
                    <span class="text-extra-big alt-font text-uppercase text-extra-dark-gray font-weight-700 letter-spacing-minus-5px image-mask cover-background xs-letter-spacing-minus-1px" style="background-image: url('{{ asset('assets/images/banners/together.jpg') }}')">together</span>
                </div>
            </div>
            <div class="down-section text-center margin-35px-bottom sm-no-margin-bottom"><a href="#down-section" class="section-link bg-white d-inline-block"><i class="feather icon-feather-arrow-down icon-extra-small text-gradient-sky-blue-pink box-shadow-small padding-15px-all xs-padding-10px-all border-radius-100"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="py-0 padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr sm-no-padding-lr wow animate__fadeIn">
    <div class="bg-gradient-light-orange-light-pink border-radius-5px overflow-hidden padding-9-rem-top md-padding-6-rem-top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12  col-lg-6 col-md-8 order-lg-2 padding-100px-bottom md-padding-6-rem-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray text-decoration-line-bottom d-inline-block margin-35px-bottom">
                        As An Art Director,
                    </span>
                    <h4 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1-half margin-45px-bottom">
                        Working With <span class="font-weight-600">Designers </span>
                        And <span class="font-weight-600">Strategists</span>
                        To Create <span class="font-weight-600">Beautiful</span> Content Is A Balance Of
                        <span class="font-weight-600">Nimble Thinking And </span>
                        <span class="font-weight-600">Firm Direction.</span>
                    </h4>
                </div>
                <div class="col-12 col-lg-6 order-lg-1 text-center align-self-end wow animate__fadeIn" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/team/NOM-NOM-PNG-2.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="down-section" class="padding-100px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom">
    <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-5 justify-content-center">

            @foreach($teamMembers as $teamMember)
            <!-- start team item -->
            <div class="col team-style-02 text-center">
                <figure>
                    <div class="team-member-image border-radius-5px overflow-hidden">
                        <img alt="{{ $teamMember->name }}" src="{{ asset('images/team/' . $teamMember->image_path) }}">
                    </div>
                    <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                        <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">
                            {{ $teamMember->name }}
                        </div>
                        <span class="text-small text-uppercase">{{ $teamMember->position }}</span>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            @endforeach




        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="py-0 padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr sm-no-padding-lr wow animate__fadeIn">
    <div class="bg-gradient-light-orange-light-pink border-radius-5px overflow-hidden padding-9-rem-top md-padding-6-rem-top">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12  col-lg-6 col-md-8 order-lg-2 padding-100px-bottom md-padding-6-rem-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s">
                    <span class="alt-font font-weight-500 text-large text-extra-dark-gray text-decoration-line-bottom d-inline-block margin-35px-bottom">
                        As a design leader,
                    </span>
                    <h4 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1-half margin-45px-bottom">
                        I Try To Do Work That Is Incredibly Diverse Ranging From Conventional Identities To <span class="font-weight-600">
                            Brilliant Bizarre Components</span></h4>
                </div>
                <div class="col-12 col-lg-6 order-lg-1 text-center align-self-end wow animate__fadeIn" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/images/team/umer.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="big-section wow animate__fadeIn">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-xl-3 col-lg-4 position-relative padding-2-rem-top md-margin-7-rem-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                <span class="alt-font font-weight-500 text-fast-blue d-block margin-20px-bottom">Loved by our
                    team</span>
                <h6 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1-half margin-3-half-rem-bottom lg-w-90">
                    What our employee are saying about us?</h6>
                <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 rounded-circle"><i class="feather icon-feather-arrow-right"></i></div>
                <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 rounded-circle"><i class="feather icon-feather-arrow-left"></i></div>
            </div>
            <div class="col-12 col-lg-8 offset-xl-1 wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="testimonials-carousel-style-01 swiper-simple-arrow-style-1">
                    <div class="swiper-container" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "observer": true, "observeParents": true, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">

                            @foreach($teamMembersWithTestimonials as $teamMember)
                            <!-- start testimonials item -->
                            <div class="swiper-slide text-center">
                                <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white border-all border-color-medium-gray border-radius-6px last-paragraph-no-margin md-padding-2-rem-tb md-padding-2-half-rem-lr">
                                    <div class="feature-box-icon margin-25px-right">
                                        <img class="rounded-circle w-100px h-100px" src="{{ asset('images/team/' . $teamMember->image_path) }}" alt="" />
                                    </div>
                                    <div class="feature-box-content">
                                        <div class="margin-15px-bottom text-very-small text-golden-yellow">
                                            @for($i = 1; $i <= 5; $i++) @if($i <=$teamMember->rating)
                                                <i class="fas fa-star"></i>
                                                @else
                                                <i class="fas fa-star text-light-gray"></i>
                                                @endif
                                                @endfor
                                        </div>
                                        <div class="text-extra-dark-gray text-medium alt-font font-weight-500 line-height-12px">
                                            {{ $teamMember->name }}
                                        </div>
                                        <span class="text-small">{{ $teamMember->position }}</span>
                                    </div><br>
                                    <p class="margin-30px-top">{{ $teamMember->testimonial }}</p>
                                </div>
                            </div>
                            <!-- end testimonials item -->
                            @endforeach







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->




@endsection
@section('SpecificScripts')

@stop