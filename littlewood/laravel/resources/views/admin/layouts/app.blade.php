<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('admin/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/tinymce/init-tinymce.js')}}"></script>
    {{-- <script src="{{ asset('admin/js/app.js') }}"></script> --}}

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="{{ asset('resources/sass/app.scss') }}" rel="stylesheet">
    <script src="{{ asset('resources/js/app.js')}}"></script>
    {{-- <link href="{{ asset('resources/sass/app.scss') }}" rel="stylesheet"> --}}
    
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
@yield('main-container') 
<script src="{{ asset('admin/js/app.js') }}"></script>
</body>
</html>
