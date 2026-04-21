<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>Cardic Instruments - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">






    @yield('SpecificStyles')


    <style>
        /* Light Mode */
        body {
            background: #ffffff;
            color: #000000;
        }

        /* Dark Mode */
        body.dark-mode {
            background: #000000;
            color: #ffffff;
        }

        /* Example for navbar */
        .navbar {
            background: #f8f9fa;
        }

        body.dark-mode .navbar {
            background: #000000;
        }

        /* Dark Mode */
        body.dark-mode .header-top {
            background-color: #000000;
            color: #fff;
        }

        /* Default (Light Mode) Button */
        #darkModeToggle {
            background: transparent;
            border: 2px solid #6c757d;
            color: #333;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        /* Hover Effect (Light Mode) */
        #darkModeToggle:hover {
            background-color: #6c757d;
            color: #fff;
        }

        /* Dark Mode Styles */
        body.dark-mode #darkModeToggle {
            border: 1px solid #fff;
            color: #fff;
            /* Button text white in dark mode */
        }

        /* Hover Effect (Dark Mode) */
        body.dark-mode #darkModeToggle:hover {
            background-color: #fff;
            color: #000;
            /* Text black on hover */
        }


        /* ================= Dark Mode Navbar ================= */

        /* Brand */
        body.dark-mode .navbar-light .navbar-brand {
            color: #fff;
        }

        body.dark-mode .navbar-light .navbar-brand:hover,
        body.dark-mode .navbar-light .navbar-brand:focus {
            color: #ddd;
        }

        /* Nav links */
        body.dark-mode .navbar-light .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.6);
        }

        body.dark-mode .navbar-light .navbar-nav .nav-link:hover,
        body.dark-mode .navbar-light .navbar-nav .nav-link:focus {
            color: rgba(255, 255, 255, 0.9);
        }

        body.dark-mode .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(255, 255, 255, 0.3);
        }

        body.dark-mode .navbar-light .navbar-nav .active>.nav-link,
        body.dark-mode .navbar-light .navbar-nav .nav-link.active,
        body.dark-mode .navbar-light .navbar-nav .nav-link.show,
        body.dark-mode .navbar-light .navbar-nav .show>.nav-link {
            color: #fff;
        }

        /* Toggler */
        body.dark-mode .navbar-light .navbar-toggler {
            color: rgba(255, 255, 255, 0.6);
            border-color: rgba(255, 255, 255, 0.2);
        }

        body.dark-mode .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.6)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Navbar text */
        body.dark-mode .navbar-light .navbar-text {
            color: rgba(255, 255, 255, 0.6);
        }

        body.dark-mode .navbar-light .navbar-text a {
            color: #fff;
        }

        body.dark-mode .navbar-light .navbar-text a:hover,
        body.dark-mode .navbar-light .navbar-text a:focus {
            color: #ddd;
        }

        /* Light mode */
        .bg-grey {
            background-color: #f4f4f4;
        }

        /* Dark mode */
        body.dark-mode .bg-grey {
            background-color: #000000;
            /* or #1a1a1a for deeper dark */
            color: #fff;
            /* optional: make text inside white */
        }


        .vertical-line {
            display: inline-block;
            height: 25px;
            width: 1px;
            background-color: gray;
            vertical-align: middle;
            margin-top: 5px;
            margin-left: 20px;
            margin-right: -13px;

        }

        @media (max-width: 600px) {
            .vertical-line {
                display: none;
            }
        }

        /* Add these styles to your CSS */
        .instrument-img {
            position: absolute;
            top: 45%;
            left: 57%;
            bottom: 53%;
            transform: translate(-50%, -50%);
            /*width: 100%;*/
            height: 90%;
            max-width: 400px;
            z-index: 1;
            border-radius: 20px;
            transition: left 1.8s ease;
            object-fit: inherit;
        }

        .border-image {

            border-radius: 20px;

            width: 100%;
        }

        .instrument-img:hover {
            left: 35%;
            /* Adjust the position on hover */
        }


        .footer-sevtion {
            display: flex;
            justify-content: center;
            border-left: 1px solid #FFFFFF;
            height: 150px;
            color: white;
        }

        @media screen and (max-width: 767px) {
            .footer-sevtion {
                justify-content: left;
                text-align: left;
            }
        }
    </style>









</head>

<body>


    <!-- header -->
    @include('includes.header')
    <!-- //header -->

    <div style="min-height:80vh;">
        @yield('content')
    </div>



    @include('includes.footer')

    <div class="modal fade" id="cartdata" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <h4>Your Cart !</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <div class="bs-docs-example">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Size</th>
                                    <th>Qty</th>
                                </tr>
                            </thead>
                            <tbody id="showcart"></tbody>
                        </table>
                        <a class="btn btn-primary" href="{{ route('cart') }}"
                            style="padding:10px 10px;color:white">Check Out</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>



    @yield('SpecificScripts')
    <script>
        const toggle = document.getElementById('darkModeToggle');
        const body = document.body;

        // Load saved mode
        if (localStorage.getItem('dark-mode') === 'enabled') {
            body.classList.add('dark-mode');
            toggle.textContent = "☀️ Light Mode";
        }

        toggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');

            if (body.classList.contains('dark-mode')) {
                localStorage.setItem('dark-mode', 'enabled');
                toggle.textContent = "☀️ Light Mode";
            } else {
                localStorage.setItem('dark-mode', 'disabled');
                toggle.textContent = "🌙 Dark Mode";
            }
        });
    </script>


    <!-- used for search button in header-->
    <script type="text/javascript">
        $(document).ready(function() {

            $(".fa-search").click(function() {
                $(".togglesearch").toggle();
                $("input[type='text']").focus();
            });

        });
    </script>

</body>

</html>
