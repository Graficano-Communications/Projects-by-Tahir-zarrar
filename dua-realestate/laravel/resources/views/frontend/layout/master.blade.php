<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="assets/frontend/images/favicon.png">
    <link rel="apple-touch-icon" href="{{url('assets/frontend/images/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/frontend/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/frontend/images/apple-touch-icon-114x114.png')}}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/vendors.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/icon.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/responsive.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/demos/real-estate/real-estate.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body data-mobile-nav-style="classic">
@include('frontend.layout.header')
@yield('main-container')
@include('frontend.layout.footer')

  <!-- start scroll progress -->
  <div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
</div>
<!-- end scroll progress -->
 <!-- javascript -->
 <script type="text/javascript" src="{{url('assets/frontend/js/jquery.js')}}"></script>
 <script type="text/javascript" src="{{url('assets/frontend/js/vendors.min.js')}}"></script>
 <script type="text/javascript" src="{{url('assets/frontend/js/main.js')}}"></script>
</body>
</html>