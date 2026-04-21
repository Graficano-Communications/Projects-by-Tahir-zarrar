<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Long Stone Int">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Long Stone Int’l Co. has been a trusted name in the industry since 1999, specializing in high-quality surgical, dental, and body care instruments.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{url('assets/frontend/images/Front-images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{url('assets/frontend/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/frontend/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/frontend/images/apple-touch-icon-114x114.png')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/css/responsive.css')}}" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/revolution/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/frontend/revolution/css/navigation.css')}}">
    </head>
<body class="pt-0" data-mobile-nav-style="classic">
@include('frontend.layout.header')
<div class="main-content">
@yield('main-container')
</div>
@include('frontend.layout.footer')

  <!-- start scroll progress -->
  <a style="color: #939393 !important;" class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
  <!-- end scroll to top -->
  <!-- javascript -->
  <script type="text/javascript" src="{{url('assets/frontend/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{url('assets/frontend/js/theme-vendors.min.js')}}"></script>
  <script type="text/javascript" src="{{url('assets/frontend/js/main.js')}}"></script>

  <!-- revolution js files -->
  <script type="text/javascript" src="{{url('assets/frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{url('assets/frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

</body>
</html>