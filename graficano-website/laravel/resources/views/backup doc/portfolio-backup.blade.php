@extends('layouts.master')

@section('title', 'Our Work')
@section('SpecificStyles')
    <link rel="stylesheet" href="{{ asset('css/portfolio-v1.css') }}">
    <!-- Load Facebook SDK for JavaScript -->
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
        .grid {
            position: relative;
            margin: 0 auto;
            padding: 1em 0 4em;
            max-width: 1920px;
            list-style: none;
            text-align: center;
        }

        /* Common style */
        .grid figure {
            position: relative;
            float: left;
            overflow: hidden;
            margin: 10px 1%;
            min-width: 48%;
            max-width: 48%;
            max-height: 500px;
            width: 48%;
            text-align: center;
            cursor: pointer;
        }

        .grid figure img {
            position: relative;
            display: block;
            min-height: 100%;
            max-width: 100%;
            opacity: 1;
        }

        .grid figure figcaption {
            padding: 2em;
            color: #fff;
            text-transform: uppercase;
            font-size: 1.25em;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .grid figure figcaption::before,
        .grid figure figcaption::after {
            pointer-events: none;
        }

        .grid figure figcaption,
        .grid figure figcaption>a {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Anchor will cover the whole item by default */
        /* For some effects it will show as a button */
        .grid figure figcaption>a {
            z-index: 1000;
            text-indent: 200%;
            white-space: nowrap;
            font-size: 0;
            opacity: 0;
        }

        .grid figure h2 {
            word-spacing: -0.15em;
            font-weight: 300;
        }

        .grid figure h2 span {
            font-weight: 800;
        }

        .grid figure h2,
        .grid figure p {
            margin: 0;
        }

        .grid figure p {
            letter-spacing: 1px;
            font-size: 68.5%;
        }

        /*---------------*/
        /***** Bubba *****/
        /*---------------*/

        figure.effect-bubba {
            background: #fff;
        }

        figure.effect-bubba figcaption::before,
        figure.effect-bubba figcaption::after {
            position: absolute;
            top: 30px;
            right: 30px;
            bottom: 30px;
            left: 30px;
            content: '';
            opacity: 0;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
        }

        figure.effect-bubba figcaption::before {
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            -webkit-transform: scale(0, 1);
            transform: scale(0, 1);
        }

        figure.effect-bubba figcaption::after {
            border-right: 1px solid #fff;
            border-left: 1px solid #fff;
            -webkit-transform: scale(1, 0);
            transform: scale(1, 0);
        }

        figure.effect-bubba h2 {
            padding-top: 18%;
            -webkit-transition: -webkit-transform 0.35s;
            transition: transform 0.35s;
            -webkit-transform: translate3d(0, -20px, 0);
            transform: translate3d(0, -20px, 0);
        }

        figure.effect-bubba p {
            padding: 20px 2.5em;
            opacity: 0;
            -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
            transition: opacity 0.35s, transform 0.35s;
            -webkit-transform: translate3d(0, 20px, 0);
            transform: translate3d(0, 20px, 0);
        }

        figure.effect-bubba:hover figcaption::before,
        figure.effect-bubba:hover figcaption::after {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        figure.effect-bubba:hover h2,
        figure.effect-bubba:hover p {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
        @media only screen and (max-width: 768px){
            /* Common style */
        .grid figure {
            
            margin: 10px;
            min-width: 100%;
            max-width: 100%;
            max-height: 500px;
            width: 100%;
           
        }
        .grid figure p {
            display: none;
        }
        }

    </style>
@stop
@section('content')

    <section>
        <div class="container">

            <div class="row" id="myBtnContainer">

                <div class="col-md-2 col-6" style="display: flex;">

                    <label class="btn btn-portfolio btn-rounded">
                        <input type="checkbox" name="fl-colour" value="branding" id="branding" /> Branding
                    </label>
                </div>
                <div class="col-md-2 col-6">
                    <label class="btn btn-portfolio btn-rounded">
                        <input type="checkbox" name="fl-colour" value="printing" id="printing" /> Print
                    </label>
                </div>
                <div class="col-md-2 col-6">
                    <label class="btn btn-portfolio btn-rounded">
                        <input type="checkbox" name="fl-colour" value="video_3d" id="video_3d" /> Video & 3d
                    </label>
                </div>
                <div class="col-md-2 col-6">
                    <label class="btn btn-portfolio btn-rounded">
                        <input type="checkbox" name="fl-colour" value="web_and_digital" id="web_and_digital" />Web & digital
                    </label>
                </div>
                <div class="col-md-2 col-6">
                    <label class="btn btn-portfolio btn-rounded">
                        <input type="checkbox" name="fl-colour" value="packaging" id="packaging" /> Packging
                    </label>
                </div>
                <div class="col-md-2 col-6">
                    <label class="btn btn-portfolio btn-rounded">
                        <input type="checkbox" name="fl-colour" value="photography" id="photography" /> Photography
                    </label>
                </div>
            </div>
        </div>
    </section>
 
    <section class="portfolio-imgs">
        <div class="container">
            <div class="row">

                @if (count($portfolios) == 0)
                    <h4>No Portfolios Available.</h4>
                @else
                    <div class="grid">
                        @foreach ($portfolios as $portfolio)
                        @php $services = str_replace(',', ' ', $portfolio->service);@endphp
                        <div class="{{$services}} portfolio-box" data-id="{{$services}}" data-category="{{$services}}">
                            <a href="{{ route('details_portfolios', $portfolio->url) }}" class="portfolio-link" > 
                                <figure class="effect-bubba">
                                    @php
                                        $image = \App\Media::where('portfolio_id', $portfolio->id)
                                            ->where('thumbnail', 1)
                                            ->first();
                                    @endphp
                                    @if ($image)
                                        @if ($image->type == 'vimeo')
                                            <div style="height: 440px;" class="embed-responsive embed-responsive-16by9 sd-gallery-video-player-div">
                                                <iframe id="vimeovideo" class="vimeo-wrapper"
                                                    src="https://player.vimeo.com/video/{{ substr($image->value, 18) }}?api=1&player_id=player1"
                                                    frameborder="0"></iframe>
                                            </div>
                                        @else
                                            <img src="{{ asset('images/portfolio/' . $image->value) }}"
                                                class="img-fluid">
                                        @endif
                                    @else
                                        <img src="{{ asset('images/portfolio/no_image.jpg') }}" class="img-fluid">
                                    @endif
                                    <figcaption>
                                        @php
                                            $pos = strrpos($portfolio->title, ' ');
                                            $first = substr($portfolio->title, 0, $pos);
                                            $second = substr($portfolio->title, $pos + 1);
                                        @endphp
                                        <h2>{{ $first }} <span>{{ $second }}</span></h2>

                                        <p class="description">
                                            {{ str_limit($portfolio->description, $limit = 150, $end = '...') }}
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </section>

@endsection

@section('SpecificScripts')





    <script type="text/javascript">
        var $filterCheckboxes = $('input[type="checkbox"]');
        console.log($filterCheckboxes);
        var filterFunc = function() {

            var selectedFilters = {};

            $filterCheckboxes.filter(':checked').each(function() {

                if (!selectedFilters.hasOwnProperty(this.name)) {
                    selectedFilters[this.name] = [];

                }

                $(this).parent().css({
                    "background-color": "#fbb034",
                    "background-image": "linear-gradient(315deg, #fbb034 0%, #ffdd00 74%)",
                    "color": "#000"
                });
                selectedFilters[this.name].push(this.value);
                console.log(this.value);
            });


            $filterCheckboxes.filter(':not(:checked)').each(function() {
                $(this).parent().css({
                    "background-color": "#d2a813",
                    "background-image": "linear-gradient(315deg, #d2a813 0%, #000000 74%)",
                    "color": "#FFCC00"
                });

            });

            // create a collection containing all of the filterable elements
            var $filteredResults = $('.portfolio-box');
            console.log(selectedFilters);
            // loop over the selected filter name -> (array) values pairs
            $.each(selectedFilters, function(name, filterValues) {

                // filter each .flower element
                $filteredResults = $filteredResults.filter(function() {

                    var matched = false,
                        currentFilterValues = $(this).data('category').split(' ');

                    // loop over each category value in the current .flower's data-category
                    $.each(currentFilterValues, function(_, currentFilterValue) {

                        // if the current category exists in the selected filters array
                        // set matched to true, and stop looping. as we're ORing in each
                        // set of filters, we only need to match once

                        if ($.inArray(currentFilterValue, filterValues) != -1) {
                            matched = true;
                            return false;
                        }
                    });

                    // if matched is true the current .flower element is returned
                    return matched;

                });
            });

            $('.portfolio-box').hide().filter($filteredResults).show();
        }

        $filterCheckboxes.on('change', filterFunc);
    </script>
    <script>
        $(document).ready(function() {

            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 50) {
                    $(".navbar").addClass("active-navbar");
                    $(".logo").css("height", "36px");
                } else {
                    $(".navbar").removeClass("active-navbar");
                    $(".logo").css("height", "auto");
                }
            });
        });
    </script>

@stop
