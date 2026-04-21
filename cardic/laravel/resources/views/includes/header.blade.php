    <!-- start cursor -->
    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>
    <!-- end cursor -->
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav
            class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed border-bottom border-color-transparent-white-light">
            <div class="container-fluid">
                <div class="col-auto">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo.png') }}"
                            alt="" class="default-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo.png') }}"
                            alt="" class="alt-logo">
                        <img src="{{ asset('assets/images/logo.png') }}" data-at2x="{{ asset('assets/images/logo.png') }}"
                            alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order left-nav ps-60px lg-ps-20px md-ps-15px">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{ route('aboutusall') }}" class="nav-link">About</a></li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="javascript:void(0)" class="nav-link">Product</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                    @php
                                        $category = \App\Category::all();
                                        @endphp
                                         @foreach ($category as $cat)
                                    <li>
                                        <a href="{{ route('category', ['id' => $cat->id, 'name' => $cat->name]) }}">
                                            <div class="submenu-icon-content">
                                                {{ $cat->name }}
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="javascript:void(0)" class="nav-link">New Arrival</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                     @php
                                        use Illuminate\Support\Str;
                                        $new = \App\ProImage::select('category')->distinct()->get();
                                        @endphp
                                        @foreach ($new as $cat)
                                    <li>
                                        <a href="{{ route('new-arrival', ['category' => Str::slug($cat->category)]) }}">
                                            <div class="submenu-icon-content">
                                                {{ $cat->category }}
                                                <p>Product Detail System</p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="javascript:void(0)" class="nav-link">Resources</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                    <li><a href="{{ route('catlogue') }}">Catalouges</a></li>
                                    <li><a href="{{ route('brochures') }}">Brouchers</a></li>
                                     <li><a href="{{ route('CardicMedia') }}">Media</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon">
                                <a href="javascript:void(0)" class="nav-link">Events</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                                   
                                     <li class="nav-item"><a href="{{ route('newsevents', 'upcoming') }}" class="nav-link">Upcoming Events</a></li>
                                     <li class="nav-item"><a href="{{ route('newsevents', 'previous') }}" class="nav-link">Previous Events</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="javascript:void(0)" class="nav-link">Contact</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                    <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto ms-auto d-none d-lg-flex">
                    <div class="header-icon">
                        <div class="d-none d-xxl-flex me-25px xl-me-20px lg-me-0">
                            <div class="d-flex align-items-center widget-text"><span
                                    class="w-40px h-40px bg-base-color d-flex align-items-center justify-content-center me-10px rounded-circle fs-15"><i
                                        class="bi bi-telephone-outbound"></i></span><a href="tel:+923524267708"
                                    class="widget-text text-white-hover">+923524267708</a></div>
                        </div>
                        <div class="header-button"><a href="mailto:info@cardic.com.pk"
                                class="btn btn-medium btn-transparent-white border-1 border-color-transparent-white-light btn-rounded left-icon"><i
                                    class="feather icon-feather-mail"></i>Send a message</a></div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header --> 

    
    
    <!-- header starts -->
    {{-- <header>
        <div class="container-fluid">
            <div class="header-top row">
               
                <div class="col-sm-6 col-md-7 offset-md-2 form-box">

                </div>
                <div class="col-sm-6 col-md-2 ">
                    <div class="top-social-icon">
                        <a href="https://www.facebook.com/pg/Cardic-Instruments-2048579925441999/about/?ref=page_internal" target="_blank"><i class="fa fa-facebook-f fa-social fb"></i></a>
                        <a href="https://www.instagram.com/cardicinstruments/" target="_blank"><i class="fa fa-instagram fa-social insta"></i></a>
                        <a href="https://www.linkedin.com/company/cardic-instruments/about/" target="_blank"><i class="fa fa-linkedin fa-social linkedin"></i> </a>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12 text-right pt-2">
                    <button id="darkModeToggle" class="btn btn-sm btn-outline-secondary">
                        🌙 Dark Mode
                    </button>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center" style="padding-top:20px; padding-bottom: 20px;">
                    <a href="/"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" width="180" height="100"></a>
                </div>
            </div>

        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto" style="margin-left: 90px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <span class="vertical-line"></span>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('aboutusall') }}" id="navbarDropdown">
                                About Us
                            </a>
                        </li>
                        <span class="vertical-line"></span>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown">
                                Products
                            </a>
                            <div class="dropdown-menu dropdown-multicol4" aria-labelledby="dropdownMenuButton">
                                <div class="wrap width">
                                    <ul>
                                        @php
                                        $category = \App\Category::all();
                                        @endphp
                                        @foreach ($category as $cat)
                                        <li><a href="{{ route('category', ['id' => $cat->id, 'name' => $cat->name]) }}">{{ $cat->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <span class="vertical-line"></span>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown">
                                New Arrival
                            </a>
                            <div class="dropdown-menu dropdown-multicol4" aria-labelledby="dropdownMenuButton">
                                <div class="wrap width">
                                    <ul>
                                        @php
                                        use Illuminate\Support\Str;
                                        $new = \App\ProImage::select('category')->distinct()->get();
                                        @endphp
                                        @foreach ($new as $cat)
                                        <li> <a href="{{ route('new-arrival', ['category' => Str::slug($cat->category)]) }}">
                                                {{ $cat->category }}
                                            </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <span class="vertical-line"></span>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('catlogue') }}" id="navbarDropdown">
                                Resources
                            </a>
                            <div class="dropdown-menu dropdown-multicol3" aria-labelledby="dropdownMenuButton">
                                <div class="wrap width">
                                    <ul>
                                        <li><a href="{{ route('catlogue') }}">Catalogues</a></li>
                                        <li><a href="{{ route('brochures') }}">Brochures</a></li>
                                        <li><a href="{{ route('CardicMedia') }}">Media</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <span class="vertical-line"></span>

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                News & Events
                            </a>
                            <div class="dropdown-menu dropdown-multicol3" aria-labelledby="dropdownMenuButton">
                                <div class="wrap width">
                                    <ul>
                                        <li><a href="{{ route('newsevents', 'upcoming') }}">Upcoming</a></li>
                                        <li><a href="{{ route('newsevents', 'previous') }}">Previous</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <span class="vertical-line"></span>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('contact') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contact Us
                            </a>
                            <div class="dropdown-menu dropdown-multicol3" aria-labelledby="dropdownMenuButton">
                                <div class="wrap width">
                                    <ul>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li><a href="{{ route('feedback') }}">Feedback</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <span class="vertical-line"></span>

                        <li class="nav-item">
                            <i class="fa fa-search" style="color:gray; margin-top: 12px; cursor: pointer;"></i>
                            <div class="togglesearch">
                                <form class="form-inline" action="{{ route('search') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="search" name="search" placeholder="Product name..">
                                    <button type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> --}}
    <!-- header ends -->