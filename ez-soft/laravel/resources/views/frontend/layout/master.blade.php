<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/front-images/favicon.png') }}" type="image/x-icon">

    <style>
        h2 {
            font-size: 40px;
            line-height: 50px;
        }

        .blog-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .blog-image img {
            width: 100%;
            height: 350px;
            display: block;
            object-fit: cover;
        }

        .blog-content {
            padding: 16px;
        }

        .blog-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .blog-description {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
        }

        .scrollToTop {
            width: 35px;
            height: 35px;
            line-height: 35px;
            color: #ffffff;
            z-index: 999;
            bottom: 30px;
            right: 30px;
            position: fixed;
            border-radius: 5px;
            -webkit-transform: translateY(150px);
            -ms-transform: translateY(150px);
            transform: translateY(150px);
            background: #4C9CCD !important;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!--============= ScrollToTop Section Starts Here =============-->
    <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <div class="overlay"></div>
    <!--============= ScrollToTop Section Ends Here =============-->
    @include('frontend.layout.header')
    @yield('main-container')

    @include('frontend.layout.footer')

    <script src="{{ asset('assets/frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/paroller.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>




</body>

</html>
