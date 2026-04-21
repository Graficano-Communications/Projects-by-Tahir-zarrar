<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SEO Optimized Meta Tags -->
    <meta name="keywords"
        content="Black Bear apparel, fitness wear, casual wear, performance clothing, athletic apparel, gym wear, activewear, stylish sportswear, premium fitness clothing, modern workout gear">
    <meta name="description"
        content="Black Bear is where strength meets style. Discover premium fitness and casual wear designed for those who push limits and live boldly — blending comfort, durability, and modern design. Trusted by athletes and everyday warriors.">
    <meta name="author" content="Black Bear">


    <!-- Title  -->
    <title> @yield("title") </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/imgs/spryfavicon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/base.css') }}">

</head>


<body class="sub-bg">



<!-- ==================== Start Loading ==================== -->

    <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>S</span>
                <span>p</span>
                <span>r</span>
                <span>y</span>
                <span>s</span>
                <span>p</span>
                <span>o</span>
                <span>r</span>
                <span>t</span>
                <span>s</span>
            </div>
        </div>
    </div>

    <!-- ==================== End Loading ==================== -->





    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

            <!-- ==================== Start Navbar ==================== -->

        @include('frontend.layout.header')

        <!-- ==================== End Navbar ==================== -->

           



    @yield('main-container')

        <!-- ==================== Start Footer ==================== -->

@include('frontend.layout.footer')

    <!-- ==================== End Footer ==================== -->

        

    @stack('scripts')



</body>

</html>
