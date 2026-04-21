<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dixor - Creative Digital Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Nexo - Creative Digital Agency Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

   

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/style.css') }}" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

</head>

<body class="bg-dark">

    <div class="radio-btn">
        <div class="radio-inner"></div>
    </div>


    <!-- Start Preloader
    ============================================= -->
    {{-- <div id="preloader">
        <div class="dixor-loader-inner">
            <div class="dixor-loader">
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
                <span class="dixor-loader-item"></span>
            </div>
        </div>
    </div> --}}
    <!-- preloader end -->


    @include('frontend.layout.header')


    <div class="smooth-scroll-container">



        @yield('main-container')
        @include('frontend.layout.footer')


    </div>

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/effect-slicer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ScrollOnReveal.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ScrollSmoother.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap-init.js') }}"></script>

</body>

</html>
