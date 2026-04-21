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
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/images/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/images/favicon.png') }}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/font-icons.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/theme-vendors.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/responsive.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<style>
    .scroll-top-arrow,
    .scroll-top-arrow:focus {
        background-color: #fb8500;
        }
</style>
<body data-mobile-nav-style="classic">
@include('frontend.layouts.header')
@yield('main-container')
@include('frontend.layouts.footer')

 <!-- start scroll to top -->
 <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
 <!-- end scroll to top -->
 <!-- javascript -->
 <script type="text/javascript" src="{{url('frontend/js/jquery.min.js')}}"></script>
 <script type="text/javascript" src="{{url('frontend/js/theme-vendors.min.js')}}"></script>
 <script type="text/javascript" src="{{url('frontend/js/main.js')}}"></script>
</body>
</html>