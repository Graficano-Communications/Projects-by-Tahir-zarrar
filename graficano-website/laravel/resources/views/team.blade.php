@extends('layouts.master')

@section('meta_title', 'Our Team | Digital Marketing Services Agency')
@section('meta_description',
    'From Digital Marketing to website development, we’re here for you. We’re your next digital
    partner.')
@section('meta_tags', 'digital marketing, website development, seo services')


@section('SpecificStyles')

@stop

@section('content')





    <!-- hero area start -->
    <div class="tp-team-inner-ptb p-relative pb-70 include-bg"
        data-background="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                    <path
                        d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344"
                        stroke="#fff" stroke-width="1.5" />
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                            <div class="ar-about-us-4-title-box shape-color  d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre tp_fade_anim">Team</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                        fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title">Meet our team of creators, designers, and expert problem solvers.
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->

    <!-- about us area start -->
    <section class="tp-about-us-2-area tp-about-us-2-ptb  p-relative">
        <div class="container container-1800 gx-0">
            <div class="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-about-us-2-thumb anim-zoomin-wrap p-relative text-center">
                            <div class="anim-zoomin">
                                <img data-speed=".8" src="{{ asset('assets/img/front-images/graficano-sirnoman.png') }}" alt="">
                            </div>
                            <div class="tp-about-us-2-thumb-shape">
                                <div class="shape-1"><img src="{{ asset('assets/img/about-us/about-us/about-us-shape.png') }}"
                                        alt=""></div>
                                <div class="shape-2"><img src="{{ asset('assets/img/about-us/about-us/about-us-shape.png') }}"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="tp-about-us-2-right p-relative">
                            <h5 class="tp-about-us-2-title tp-text-revel-anim">Founder & Art
                                Director</h5>
                            <div class="pp-about-heading pb-55">
                                <h3 class="tp-section-title-teko fs-80 tp_fade_anim mt-40">
                                    Working With Designers And Strategists To Create Beautiful Content
                                    Is A Balance Of Nimble Thinking And Firm Direction.

                                </h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us area end -->


    <!-- team area start -->
    <div class="studio-team-area pt-140 mb-60">
        <div class="container container-1460">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="studio-team-title-box tp_text_anim text-center mb-80">
                        <h3 class="tp-section-title-clash tp-text-revel-anim fs-200 mb-20">Our Creative Force</h3>
                    </div>
                </div>
            </div>
            <div class="studio-team-wrap z-index-5">
                @foreach ($teamMembers->chunk(2) as $chunk)
                    <div class="row">
                        @foreach ($chunk as $teamMember)
                            <div class="col-md-6 col-sm-6">
                                <div class="studio-team-thumb-wrap {{ $loop->first ? 'mt-160' : 'text-xl-end' }}">
                                    <div class="studio-team-thumb p-relative mb-120">
                                        <img src="{{ asset('images/team/' . $teamMember->image_path) }}"
                                            alt="{{ $teamMember->name }}">
                                        <div class="studio-team-content text-center">
                                            <h4 class="studio-team-title-sm">
                                                <a href="#">{{ $teamMember->name }}</a>
                                            </h4>
                                            <span>{{ $teamMember->position }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- team area end -->


    <!-- about us area start -->
    <section class="tp-about-us-2-area tp-about-us-2-ptb pt-200 p-relative">
        <div class="container container-1800 gx-0">
            <div class="">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-about-us-2-thumb anim-zoomin-wrap p-relative text-center">
                            <div class="anim-zoomin">
                                <img data-speed=".8" src="{{ asset('assets/img/front-images/umer.webp') }}" alt="">
                            </div>
                            <div class="tp-about-us-2-thumb-shape">
                                <div class="shape-1"><img src="{{ asset('assets/img/about-us/about-us/about-us-shape.png') }}"
                                        alt=""></div>
                                <div class="shape-2"><img src="{{ asset('assets/img/about-us/about-us/about-us-shape.png') }}"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                        <div class="tp-about-us-2-right p-relative">
                            <h5 class="tp-about-us-2-title tp-text-revel-anim">Co-partner & Design Leader</h5>
                            <div class="pp-about-heading pb-55">
                                <h3 class="tp-section-title-teko fs-80 tp_fade_anim mt-40">
                                    I Try To Do Work That Is Incredibly Diverse Ranging From Conventional Identities To Brilliant Bizarre Components
                                </h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us area end -->




@endsection
@section('SpecificScripts')

@stop
