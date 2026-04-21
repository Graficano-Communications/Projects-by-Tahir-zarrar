        <style>
            /* Button Style */
            .change-btn {
                background: var(--white-color);
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                width: 38px;
                height: 38px;
                margin: 0;
                border-radius: 8px;
                border: none;
            }

            /* Contact info spacing */
            .ttt .contact-info-item {
                padding-bottom: 15px !important;
                margin-bottom: 15px !important;
            }

            /* ===============================
   MEGA MENU CORE
================================ */

            .nav-item.mega-menu {
                position: static;
            }

            /* panel */
            .mega-panel {
                position: absolute;
                left: 0;
                top: 100%;
                width: 100vw;

                background: #fff;
                opacity: 0;
                visibility: hidden;
                pointer-events: none;

                transform: translateY(6px);
                transition: opacity .2s ease, transform .2s ease;
                z-index: 9999;
            }

            /* visible state (JS will add this) */
            .mega-panel.active {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: translateY(0);
            }

            .mega-link {
                display: block;
                break-inside: avoid;
                /* 🔥 IMPORTANT */
                margin-bottom: 10px;

                font-size: 14px;
                font-weight: 500;
                color: #231F20;
                text-decoration: none;
                line-height: 1.4;
                text-align: left;
            }

            .mega-link:hover {
                color: var(--accent-color);
            }

            /* ===== REMOVE TOP GOOGLE BAR ===== */
            .goog-te-banner-frame.skiptranslate {
                display: none !important;
            }

            body {
                top: 0 !important;
            }

            /* Sometimes Google adds margin to html */
            html {
                margin-top: 0 !important;
            }

            /* ===== REMOVE GOOGLE LOGO & TEXT ===== */
            .goog-logo-link {
                display: none !important;
            }

            .goog-te-gadget span {
                display: none !important;
            }

            .goog-te-gadget {
                font-size: 0 !important;
            }

            /* ===== FIX DROPDOWN LOOK ===== */
            .goog-te-combo {
                margin: 0 !important;
                padding: 6px 10px;
                border-radius: 6px;
                border: 1px solid #ddd;
                font-size: 14px;
                outline: none;
            }

            /* Remove blue highlight after language change */
            .goog-text-highlight {
                background-color: transparent !important;
                box-shadow: none !important;
            }

            /* Remove translate tooltip */
            #goog-gt-tt,
            .goog-te-balloon-frame {
                display: none !important;
            }

            /* Prevent body shifting when translate */
            .skiptranslate iframe {
                display: none !important;
            }

            /* Keep translator under globe icon exactly */
            .translate-box {
                position: absolute;
                right: -10px;
                top: 32px;
                z-index: 9999;
                width: 150px;
            }

            /* Remove extra spacing Google adds */
            .goog-te-gadget {
                line-height: 0 !important;
            }

            /* Make dropdown full width of box */
            .goog-te-combo {
                width: 100% !important;
            }

            .translate-box {
                position: absolute;
                right: -10px;
                top: 32px;
                z-index: 9999;
                width: 150px;
                display: none;
                /* 👈 hidden by default */
            }

            .search-box {
                position: absolute;
                right: -10px;
                top: 32px;
                width: 260px;
                background: #fff;
                padding: 12px;
                border-radius: 8px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
                display: none;
                z-index: 9999;
            }

            .search-box input {
                width: 100%;
                padding: 8px 10px;
                border: 1px solid #ddd;
                border-radius: 6px;
                margin-bottom: 8px;
            }

            .search-box button {
                width: 100%;
                padding: 8px;
                border: none;
                background: #000;
                color: #fff;
                border-radius: 6px;
            }
        </style>


        <!-- Topbar Section Start -->
        <div class="main-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <p style="color: #ffffff; margin-bottom: 0px; font-size: 12px;  ">And We sent down iron, wherein
                            is
                            mighty power and (many) uses for mankind" [Al-Quran: Chapter 57 (Al-Hadid), Verse 25]</p>
                        <!-- Logo End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">

    <!-- Left empty column -->
    <div class="col-lg-4"></div>

    <!-- Center Logo -->
    <div class="col-lg-4 text-center">
        <div class="site-logo">
            <a href="{{ route('home') }}">
                <img height="100px" src="{{ asset('assets/frontend/images/emerald2.png') }}" alt="Logo">
            </a>
        </div>
    </div>

    <!-- Right Icons -->
    <div class="col-lg-4 text-end">
        <div class="header-social-box d-inline-flex">
            <div class="header-social-links">
                <ul>
                    <!-- Search -->
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="javascript:void(0)" id="searchToggle">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>

                        <div class="search-box">
                            <form action="{{ route('search') }}" method="GET">
                                <input type="text" name="search" placeholder="Search products..." required>
                                <button type="submit">Search</button>
                            </form>
                        </div>
                    </li>

                    <!-- Language -->
                    <li class="nav-item position-relative">
                        <a class="nav-link" href="javascript:void(0)" id="langToggle">
                            <i class="fa-solid fa-globe"></i>
                        </a>

                        <div id="google_translate_element" class="translate-box"></div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>

            </div>
        </div>
        <!-- Topbar Section End -->

        <!-- Header Start -->
        <header class="main-header">
            <div class="header-sticky">
                <nav class="navbar navbar-expand-lg">
                    <div class="container">
                        <!-- Logo Start -->
                        <a class="navbar-brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/frontend/images/emerald2.png') }}" alt="Logo">
                        </a>
                        <!-- Logo End -->

                        <!-- Main Menu Start -->
                        <div class="collapse navbar-collapse main-menu">
                            <div class="nav-menu-wrapper">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class="nav-item "><a class="nav-link" href="{{ route('about') }}">Company</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('news.show') }}">News</a>
                                    </li>
                                    {{-- <li class="nav-item submenu">
                                        <a class="nav-link">
                                            Company
                                        </a>
                                        <ul class="nav-item submenu">

                                            <li class="nav-link">
                                                <a style="color: #231F20" href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li class="nav-link">
                                                <a style="color: #231F20" href="{{ route('private') }}">Private
                                                    label</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    @php
                                        use App\Models\Category;

                                        $categories = Category::with([
                                            'subcategories' => function ($query) {
                                                $query->orderBy('sequence');
                                            },
                                        ])
                                            ->orderBy('sequence')
                                            ->get();
                                    @endphp

                                    @foreach ($categories as $category)
                                        <li class="nav-item mega-menu">
                                            <a class="nav-link" href="{{ route('products', $category->slug) }}">
                                                {{ $category->name }}
                                            </a>

                                            @if ($category->subcategories->count())
                                                <div class="mega-panel">
                                                    <div class="container">
                                                        <div class="row py-4">

                                                            <div class="col-lg-9">
                                                                <div class="row">
                                                                    @foreach ($category->subcategories as $subCategory)
                                                                        <div class="col-lg-3 col-md-4 col-6 mb-2">
                                                                            <a class="mega-link"
                                                                                href="{{ route('products.subcategory', [$category->slug, $subCategory->slug]) }}">
                                                                                {{ $subCategory->name }}
                                                                            </a>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3 d-none d-lg-block">
                                                                <img src="{{ asset('assets/frontend/images/header.jpg') }}"
                                                                    class="img-fluid rounded mb-3">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach

                                    <li class="nav-item submenu d-lg-none d-block">
                                        <a class="nav-link">
                                            Products
                                        </a>
                                        <ul class="nav-item submenu ">
                                            @foreach ($categories as $category)
                                                <li class="nav-link">
                                                    <a style="color: white"
                                                        href="{{ route('products', $category->slug) }}">
                                                        {{ $category->name }} <i
                                                            class="fas fa-angle-right icon-arrow"></i>
                                                    </a>

                                                    @if ($category->subcategories->count())
                                                        <ul class="dropdown-side">
                                                            @foreach ($category->subcategories as $subCategory)
                                                                <li>
                                                                    <a class="nav-link"
                                                                        href="{{ route('products.subcategory', [$category->slug, $subCategory->slug]) }}">
                                                                        {{ $subCategory->name }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    {{-- 
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('departments') }}">Department</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('catalogues') }}">Catalogues</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('news.show') }}">News &
                                            Events</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.show') }}">Blog</a>
                                    </li> --}}
                                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Social Box Start -->
                            {{-- <div class="header-social-box d-inline-flex">
                                <!-- Header Social Links Start -->
                                <div class="header-social-links">
                                    <button class="change-btn" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        <span class="slicknav_icon">
                                            <span class="slicknav_icon-bar"></span>
                                            <span class="slicknav_icon-bar"></span>
                                            <span class="slicknav_icon-bar"></span>
                                        </span>
                                    </button>
                                </div>
                                <!-- Header Social Links End -->
                            </div> --}}
                            <!-- Header Social Box End -->
                        </div>
                        <!-- Main Menu End -->
                        <div class="navbar-toggle"></div>
                    </div>
                </nav>
                <div class="responsive-menu"></div>
            </div>
        </header>
        <!-- Header End -->
        <!-- Offcanvas (Right Side) -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">EMERALD INSTRUMENTS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container">
                    <div class="row">
                        <a class="navbar-brand" {{ route('home') }}>
                            <img src="{{ asset('assets/frontend/images/emerald2.png') }}" alt="Logo" />
                        </a>
                        <p>EMERALD INSTRUMENTS is a modern industrial company delivering precision-engineered solutions
                            for
                            manufacturing, construction, oil & gas, architecture, and growing businesses.</p>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <img width="100px" height="100px"
                                src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="" />
                        </div>
                        <div class="col-4">
                            <img width="100px" height="100px"
                                src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="" />
                        </div>
                        <div class="col-4">
                            <img width="100px" height="100px"
                                src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4">
                            <img width="100px" height="100px"
                                src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="" />
                        </div>
                        <div class="col-4">
                            <img width="100px" height="100px"
                                src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="" />
                        </div>
                        <div class="col-4">
                            <img width="100px" height="100px"
                                src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="contact-information">
                            <!-- Contact Info Box Start -->
                            <div class="contact-info-box ttt">
                                <!-- Page Contact Item Start -->
                                <div class="contact-info-item wow fadeInUp ">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/frontend/images/icon-phone.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>contact</h3>
                                        <p>+92523560987</p>
                                    </div>
                                </div>
                                <!-- Page Contact Item End -->

                                <!-- Page Contact Item Start -->
                                <div class="contact-info-item wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/frontend/images/icon-mail.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>Email</h3>
                                        <p>sheraz@emerald.pk</p>
                                    </div>
                                </div>
                                <!-- Page Contact Item End -->

                                <!-- Page Contact Item Start -->
                                <div class="contact-info-item">
                                    <div class="icon-box">
                                        <img src="{{ asset('assets/frontend/images/icon-location.svg') }}"
                                            alt="" />
                                    </div>
                                    <div class="contact-info-content">
                                        <h3>Our Address</h3>
                                        <p>115/C-B, Factory Roras Road, P.O.Box 766, Sialkot-51310, Pakistan.</p>
                                    </div>
                                </div>
                                <!-- Page Contact Item End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.querySelectorAll('.nav-item.mega-menu').forEach(item => {
                let panel = item.querySelector('.mega-panel');
                let timer;

                item.addEventListener('mouseenter', () => {
                    clearTimeout(timer);
                    panel.classList.add('active');
                });

                item.addEventListener('mouseleave', () => {
                    timer = setTimeout(() => {
                        panel.classList.remove('active');
                    }, 150); // 🔥 hover delay prevents flicker
                });

                panel.addEventListener('mouseenter', () => {
                    clearTimeout(timer);
                    panel.classList.add('active');
                });

                panel.addEventListener('mouseleave', () => {
                    timer = setTimeout(() => {
                        panel.classList.remove('active');
                    }, 150);
                });
            });
        </script>
        <script>
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                        pageLanguage: 'en',
                        includedLanguages: 'en,ur,ar,fr,de,es,zh-CN,tr,ru',
                        autoDisplay: false
                    },
                    'google_translate_element'
                );
            }
            document.addEventListener("DOMContentLoaded", function() {

                const toggleBtn = document.getElementById("langToggle");
                const translateBox = document.querySelector(".translate-box");

                toggleBtn.addEventListener("click", function(e) {
                    e.stopPropagation();

                    if (translateBox.style.display === "block") {
                        translateBox.style.display = "none";
                    } else {
                        translateBox.style.display = "block";
                    }
                });

                // Click outside = close dropdown
                document.addEventListener("click", function(e) {
                    if (!translateBox.contains(e.target)) {
                        translateBox.style.display = "none";
                    }
                });

            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const searchBtn = document.getElementById("searchToggle");
                const searchBox = document.querySelector(".search-box");

                searchBtn.addEventListener("click", function(e) {
                    e.stopPropagation();
                    searchBox.style.display =
                        searchBox.style.display === "block" ? "none" : "block";
                });

                document.addEventListener("click", function(e) {
                    if (!searchBox.contains(e.target)) {
                        searchBox.style.display = "none";
                    }
                });

            });
        </script>


        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
