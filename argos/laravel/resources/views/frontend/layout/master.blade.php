<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap"rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('assets/frontend/imgs/front-images/favicon.png') }}">


         <!-- Plugins -->
         <link rel="stylesheet"  href="{{url('assets/frontend/css/plugins.css')}}" />


        <!-- Core Style Css -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/style.css')}}" />


    </head>
<body class="home-main-crev main-bg">
      <!-- ==================== Start Loading ==================== -->

      {{-- <div class="loader-wrap">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="loader-wrap-heading">
            <div class="load-text">
                <span>A</span>
                <span>R</span>
                <span>G</span>
                <span>O</span>
                <span>S</span>
            </div>
        </div>
    </div> --}}

    <!-- ==================== End Loading ==================== -->


    <div class="cursor"></div>


    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

    <div id="smooth-wrapper">

      @include('frontend.layout.header')

      <div id="smooth-content">

          <main class="main-bg">

            @yield('main-container')

          </main>


          @include('frontend.layout.footer')


      </div>
  </div>





<!-- jQuery -->
<script src="{{url('assets/frontend/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{url('assets/frontend/js/jquery-migrate-3.4.0.min.js')}}"></script>

<!-- plugins -->
<script src="{{url('assets/frontend/js/plugins.js')}}"></script>
<script src="{{url('assets/frontend/js/ScrollTrigger.min.js')}}"></script>




<!-- custom scripts -->
<script src="{{url('assets/frontend/js/scripts.js')}}"></script>
@stack('scripts')
</body>
</html>