<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>@yield('title')</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- site icon -->
        <link rel="icon" href="{{ asset('assets/frontend/images/front-images/favicon.png') }}" type="image/png" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
        <!-- site css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.css') }}" />
        <!-- color css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/colors.css') }}" />
        <!-- select bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-select.css') }}" />
        <!-- scrollbar css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/perfect-scrollbar.css') }}" />
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/css/font-awesome.min.css') }}" />
    </head>
    
    <body class="dashboard dashboard_1">
        <div class="full_container">
            <div class="inner_container">
                @include('admin.layout.sidebar')
                <div id="content">
                    <!-- topbar -->
                    @include('admin.layout.header')
                    <!-- end topbar -->
                    <!-- dashboard inner -->
                    <div class="midde_cont">
                    @yield('main-container-admin')
                    @include('admin.layout.footer')
                    </div>
                    <!-- end dashboard inner -->
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
        <!-- wow animation -->
        <script src="{{ asset('assets/admin/js/animate.js') }}"></script>
        <!-- select country -->
        <script src="{{ asset('assets/admin/js/bootstrap-select.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ asset('assets/admin/js/owl.carousel.js') }}"></script>
        <!-- chart js -->
        <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/utils.js') }}"></script>
        <script src="{{ asset('assets/admin/js/analyser.js') }}"></script>
        <script src="{{ asset('assets/admin/plugin/editor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/admin/plugin/editor/ckeditor/styles.js') }}"></script>
        <script src="{{ asset('assets/admin/plugin/editor/ckeditor/adapters/jquery.js') }}"></script>
        <script src="{{ asset('assets/admin/plugin/editor/ckeditor/ckeditor.custom.js') }}"></script>
        <!-- nice scrollbar -->
        <script src="{{ asset('assets/admin/js/perfect-scrollbar.min.js') }}"></script>
        <script>
        var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- custom js -->
        <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
        <script src="{{ asset('assets/admin/js/chart_custom_style1.js') }}"></script>
        

    </body>
</html>