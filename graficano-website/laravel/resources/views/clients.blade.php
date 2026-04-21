@extends('layouts.master')

@section('meta_title', 'Our clients | Digital agency')
@section('meta_description', 'Here are the clients we worked with serving the quality solutions functioning in a
    collaborative environment, and understanding our clients needs.')
@section('meta_tags', '')


@section('content')
<style>
     .bg-cli {
            background-color: #F5F5F5;
        }
</style>

 <!-- hero area start -->
    <div class="tp-contact-us-ptb p-relative">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="123" height="130" viewBox="0 0 123 130" fill="none">
                    <path
                        d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891"
                        stroke="white" stroke-width="1.5" />
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3">
                            <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre text-white tp_fade_anim">Our Clients</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                        fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title text-white pb-30">Your creative
                                <span class="shape-1"><img src="{{ asset('assets/img/about-us/about-us-4/about-us-4-shape-2.png') }}"
                                        alt=""></span> <br>journey starts here
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="tp-faq-text tp_fade_anim">
                            <p class="text-white m-0">Graficano is a beacon of best innovation and the dynamic <br> parent a
                                company of wealcoder and many other subsidiaries.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->



<!-- tp-feature-area-start -->
    <div id="feature" class="tp-feature-area tp-sm-pt tp-sm-pb tp-bg-black-2 section-meinus pt-135 pb-135">
        <div class="container container-1230">
             <div class="row">
                <div class="col-12">
                    <div class="tp-feature-include-wrap">
                        <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                            @foreach ($clients as $client)
                                <div class="col">
                                    <div class="tp-feature-include-item text-center tp-fade-anim mb-25 bg-cli"
                                        data-delay=".2">
                                        <span class="d-inline-block mb-30">
                                            <img src="{{ asset('images/clients/' . $client->image) }}"
                                                alt="" />
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-feature-area-end -->


@endsection
@section('SpecificScripts')
    <script type="text/javascript">
        function hover(element, src) {
            element.style.cursor = 'pointer';
            element.setAttribute('src', 'images/clients/' + src);
        }

        function unhover(element, src) {
            element.setAttribute('src', 'images/clients/' + src);
        }
    </script>
@stop
