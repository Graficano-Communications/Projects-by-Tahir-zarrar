@extends('layouts.master')

@section('meta_title', $portfolio->meta_title)
@section('meta_description', $portfolio->meta_description)
@section('meta_tags', $portfolio->meta_tags)
@section('SpecificStyles')
    <meta property="og:url" content="{{ route('details_portfolios', $portfolio->id) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $portfolio->meta_title }}" />
    <meta property="og:description" content="{{ $portfolio->meta_description }}" />
    @php $image = \App\Media::where('portfolio_id',$portfolio->id)->first(); @endphp
    @if ($image)
        <meta property="og:image" content="{{ asset('images/portfolio/' . $image->value) }}" />
    @endif
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">


    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <style>
        .sd-gallery-video-player-div iframe {
            margin-bottom: -4px; // Adjust this value as needed
        }

        .sd-gallery-video-player-div iframe {
            margin-bottom: 0;
            /* Adjust if necessary */
            margin-top: 0;
            /* New addition to reduce top margin */
        }


        .share-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            /* spacing between icons */
        }

        .share-buttons a {
            color: #000;
            /* Adjust color accordingly */
            font-size: 20px;
            /* Adjust size accordingly */
            transition: color 0.3s ease;
        }

        .share-buttons a:hover {
            color: #666;
            /* Adjust hover color */
        }
    </style>

@stop
@section('content')
    <!-- start banner section -->
    @php
        $image = \App\Media::where('portfolio_id', $portfolio->id)->where('thumbnail', 1)->first();
    @endphp
    <!-- start banner section -->



    <div class="container">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <section class="tp-breadcrumb-area tp-breadcrumb-ptb pb-100 Portfolio-box-lg" id="down-section">
        <div class="container container-1230">
            <div class="row portfolio-media px-sm-1 ">

                @if (count($mediaObjects) == 0)
                    <h4>No Media Available.</h4>
                @else
                    @php
                        $segments = [];
                        $portraitSegment = [];

                        foreach ($mediaObjects as $media) {
                            if ($media->type === 'Portrait') {
                                if (count($portraitSegment) < 3) {
                                    $portraitSegment[] = $media;
                                } else {
                                    $segments[] = $portraitSegment;
                                    $portraitSegment = [$media];
                                }
                            } else {
                                if (!empty($portraitSegment)) {
                                    $segments[] = $portraitSegment;
                                    $portraitSegment = [];
                                }
                                $segments[] = $media;
                            }
                        }

                        if (!empty($portraitSegment)) {
                            $segments[] = $portraitSegment;
                        }
                    @endphp

                    @foreach ($segments as $segment)
                        @if (is_array($segment))
                            @php
                                $colSize = 12 / count($segment);
                            @endphp
                            @foreach ($segment as $media)
                                <div
                                    class="col-md-{{ $colSize }} col-{{ $colSize }} mb-2 p-0 portrait-margin-reduced px-1 ">
                                    <img src="{{ asset('images/portfolio/' . $media->value) }}"
                                        alt="{{ $portfolio->title }}" class="img-fluid portrait"
                                        oncontextmenu="return false;">
                                </div>
                            @endforeach
                        @else
                            @php
                                $media = $segment;
                            @endphp
                            @if ($media->type == 'landscape')
                                <div class="col-md-12 col-12 mb-2 p-0 px-sm-1">
                                    <img src="{{ asset('images/portfolio/' . $media->value) }}" class="img-fluid landscape"
                                        alt="{{ $portfolio->title }}" oncontextmenu="return false;">
                                </div>
                            @elseif($media->type == 'vimeo')
                                <div
                                    class="embed-responsive embed-responsive-16by9 sd-gallery-video-player-div mt-0 mb-0 pt-0 pb-0 p-0 px-sm-1">
                                    <iframe id="vimeovideo" class="vimeo-wrapper" width="100%" height="800px"
                                        src="https://player.vimeo.com/video/{{ substr($media->value, 18) }}?api=1&player_id=player1"
                                        frameborder="0"></iframe>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="d-flex align-tems-center justify-content-center col-12 text-center mt-3 gap-3">
                <button class="btn btn-warning" id="shareButton">Share <i style=" font-weight: bold;"
                        class="line-icon-Share icon-extra-small "></i></button>
                <a href="https://wa.me/923129320163?text=Hello,%20I%20would%20like%20to%20inquire%20about..."
                    class="btn btn-warning">
                    Inquiry Via Whatsapp <i style="font-weight: bold;" class="line-icon-Notepad icon-extra-small"></i>
                </a>

            </div>
    </section>

    <!-- breadcurmb area start -->
    <div class="" data-background="{{ asset('assets/img/blog/blog-masonry/blog-bradcum-bg.png') }}">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-portfolio-details-1-heading">
                        <h3 class="tp-portfolio-details-1-title tp_fade_anim" data-delay=".5">
                            {{ $portfolio->title }}
                        </h3>
                        <div class="tp-portfolio-details-1-btn tp_fade_anim" data-delay=".7">
                            <a class="tp-portfolio-details-btn" href="{{ $portfolio->website }}">Visit Site <span><svg
                                        xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                        fill="none">
                                        <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-portfolio-details-1-content">
                        <p>{{ $portfolio->description }}</p>
                        <div class="tp-portfolio-details-1-list">
                            <ul>
                                <li><span>Client :</span> {{ $portfolio->client }}</li>
                                <li><span>Date :</span>{{ \Carbon\Carbon::parse($portfolio->date)->format('d F Y') }}</li>
                                <li><span>Role :</span>{{ $portfolio->service }}</li>
                                <li><span>Location :</span>{{ $portfolio->location }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcurmb area end -->



    @if ($reviews->isNotEmpty())
        <section class="big-section wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center margin-seven-bottom">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500">Reviews on this Portfolio</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div
                        class="col-lg-10 position-relative padding-10-rem-lr sm-padding-7-rem-lr xs-padding-6-rem-lr wow animate__fadeIn">
                        <div class="swiper slider-custom-text black-move"
                            data-slider-options='{ "loop": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- Loop through each published review -->
                                @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <div class="d-flex flex-column">
                                            <div class="align-self-center text-center w-100">
                                                <!-- Quote icon/image -->
                                                <img alt="Quote"
                                                    src="{{ asset('assets/images/home-yoga-meditation-icon-quote.jpg') }}"
                                                    class="w-70px margin-50px-bottom xs-w-50px xs-margin-25px-bottom">

                                                <!-- Review Comment -->
                                                <p
                                                    class="text-large line-height-36px md-line-height-30px margin-40px-bottom w-90 d-inline-block xs-margin-25px-bottom">
                                                    "{{ $review->comment }}"
                                                </p>

                                                <!-- Reviewer Name and Rating -->
                                                <span
                                                    class="alt-font font-weight-500 text-salmon-rose text-uppercase d-block">{{ $review->name }}</span>
                                                <div class="star-rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $review->rating)
                                                            <i class="fas fa-star text-warning"></i>
                                                            <!-- Filled star for rating -->
                                                        @else
                                                            <i class="far fa-star text-warning"></i>
                                                            <!-- Empty star for remaining -->
                                                        @endif
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- End of loop -->
                            </div>
                        </div>

                        <!-- Slider pagination controls -->
                        <div
                            class="swiper-button-next-nav slider-custom-text-next swiper-button-next font-weight-600 alt-font text-small text-dark-purple">
                            NEXT</div>
                        <div
                            class="swiper-button-previous-nav slider-custom-text-prev swiper-button-prev font-weight-600 alt-font text-small text-dark-purple">
                            PREV</div>
                    </div>
                </div>
            </div>
        </section>
    @endif




    <div class="overflow-visible pt-100 ">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                     <div class="tp-contact-form-wrap">
                        <form id="contact-form" action="{{ route('review.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Full name*</label>
                                        <input name="name" type="text">
                                    </div>
                                </div>
                                <input type="text" name="portfolio" hidden value="{{ $portfolio->title }}">
                            <input type="text" name="portfolio_id" hidden value="{{ $portfolio->id }}">
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Email address*</label>
                                        <input name="email" type="email">
                                    </div>
                                </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 text-start">
                                <div class="rating">
                                    <input value="5" name="rating" id="star5" type="radio">
                                    <label for="star5"></label>
                                    <input value="4" name="rating" id="star4" type="radio">
                                    <label for="star4"></label>
                                    <input value="3" name="rating" id="star3" type="radio">
                                    <label for="star3"></label>
                                    <input value="2" name="rating" id="star2" type="radio">
                                    <label for="star2"></label>
                                    <input value="1" name="rating" id="star1" type="radio">
                                    <label for="star1"></label>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>How Can We Help You*
                                        </label>
                                        <textarea name="comment"></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LenC3EpAAAAAErPM9JSBc_vFx2AwcTadArUZ_Pq"></div>
                                    <div class="tp-contact-form-btn mt-2">
                                        <button class="w-100" type="submit">
                                            <span>
                                                <span class="text-1">Send Message</span>
                                                <span class="text-2">Send Message</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start section -->
    <section class="overflow-visible  big-section " style="padding:55px 2px !important; ">
        <div class="container pb-0">
            <div class="z-index-6 overlap-section">

                <div class="bg-gradient-magenta-orange-2 border-radius-5px padding-55px-tb  md-margin-8-rem-bottom md-padding-40px-all xs-padding-20px-lr sm-margin-7-rem-bottom wow animate__flipInX"
                    data-wow-delay="0.1s">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-12 col-lg-6 text-center text-lg-end md-margin-30px-bottom sm-margin-20px-bottom">
                            <h6 class="alt-font font-weight-800 text-white mb-0">Get your free quote today?</h6>
                        </div>

                        <div class="col-12 col-lg-6 col-md-auto text-center">
                            <a href="{{ route('getqoute') }}">
                                <button class="btn btn-extra-large btn-dark-gray btn-round-edge btn-slide-right-bg ">
                                    <i class="far fa-envelope icon-extra-small left-icon"></i>Get started
                                </button>
                            </a>
                            <div class="form-results border-radius-4px position-absolute left-0px d-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
@section('SpecificScripts')


    <script>
        $(document).ready(function() {
            $(".box-bottom").hover(function() {
                $(".btn-back").css("display", "none");
            }, function() {
                $(".btn-back").css("display", "block");
            });

            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 50) {
                    $(".navbar").addClass("active");
                    $(".logo").css("height", "36px");
                } else {
                    $(".navbar").removeClass("active");
                    $(".logo").css("height", "auto");
                }
            });

            var $temp = $("<input>");
            var $url = $(location).attr('href');

            $('.clipboard').on('click', function() {
                $("body").append($temp);
                $temp.val($url).select();
                document.execCommand("copy");
                $temp.remove();
                alert("Copied");
            });

            $('#shareButton').on('click', function() {
                if (navigator.share) {
                    navigator.share({
                            title: '{{ $portfolio->meta_title }}',

                            url: '{{ Request::fullUrl() }}',
                        })
                        .then(() => console.log('Successful share'))
                        .catch((error) => console.log('Error sharing', error));
                } else {
                    alert('Web Share API not supported in this browser.');
                }
            });
        });
    </script>

@stop
