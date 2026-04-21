<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" />
    <meta name="msapplication-TileImage" content="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}" />
    <meta property="og:image" content="{{ asset('medimax_assets/img/FAVICON-WHITE.png')}}">

    <title>
        Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Font Awesome CDN -->
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link href="{{ asset('admin/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin/assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-100">

    @include('layouts.side')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ">

        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur">
            <!-- navbar-scroll="true"   > -->
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol> -->
                    <h6 class="font-weight-bolder mb-0">Dashboard, {{ Auth::user()->name }}</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <!-- <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span> -->
                            <!-- <input type="text" class="form-control" placeholder="Type here..."> -->
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center"> <i class="fa fa-user me-sm-1"></i> </li>
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('logout') }}" class="nav-link text-body font-weight-bold px-0" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">

                                <span class="d-sm-inline d-none">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 ">
            @yield('content')
        </div>


    </main>



    <!--   Core JS Files   -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/chartjs.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugin/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/plugin/tinymce/init-tinymce.js')}}"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: 0.5
                };
                // Initialize Smooth Scrollbar
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        });
    </script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script async defer src="{{ asset('admin/assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
    @yield('scripts')
</body>

</html>