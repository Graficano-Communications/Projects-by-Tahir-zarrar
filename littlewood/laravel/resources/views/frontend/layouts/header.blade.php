 <!-- start header -->
 <style>
     .border-color-black-transparent {
         color: #fb8500 !important;
     }

     .bg-light-gray-1 {
         background-color: #36454E !important;
     }

     .bg-blu {
         background-color: #FFFFFF;
     }

     .yw {
         color: #fb8500 !important;
     }

     .yv {
         color: #011647 !important;
     }

     .navbar-light .navbar-nav .dropdown-menu a{
        color: #011647 !important;
        font-weight: 500;
        font-size: 16px;
     }
     .navbar-light .navbar-nav .dropdown-menu a:focus,
     .navbar-light .navbar-nav .dropdown-menu a:hover,
     .navbar.navbar-light .navbar-nav .dropdown-menu a.active {
         color: #fb8500 !important ;
         cursor: pointer;
     }

 </style>
 <header class="header-with-topbar">
     <div
         class="top-bar bg-light-gray-1 border-bottom border-color-black-transparent d-none d-md-inline-block padding-35px-lr md-no-padding-lr">
         <div class="container-fluid nav-header-container">
             <div class="d-flex flex-wrap align-items-center">
                 <div class="col-12 text-center text-sm-start col-sm-auto me-auto ps-lg-0">
                     <ul class="social-icon padding-5px-tb">
                         <li><a class="text-neon-blue-hover" href="#" target="_blank"><i
                                     class="fab fa-facebook-f"></i></a></li>
                         <li><a class="text-neon-blue-hover" href="#" target="_blank"><i
                                     class="fab fa-dribbble"></i></a></li>
                         <li><a class="text-neon-blue-hover" href="#" target="_blank"><i
                                     class="fab fa-twitter"></i></a></li>
                         <li><a class="text-neon-blue-hover" href="#" target="_blank"><i
                                     class="fab fa-instagram"></i></a></li>
                     </ul>
                 </div>
                 <div class="col-auto d-none d-sm-block text-end px-lg-0 font-size-0">
                     <div class="top-bar-contact">
                         <span class="top-bar-contact-list text-white">
                             <i class="feather icon-feather-phone-call icon-extra-small text-white"></i>
                             0222 8899900
                         </span>
                         <span class="top-bar-contact-list d-none d-md-inline-block no-border-right pe-0 text-white">
                             <i class="feather icon-feather-map-pin icon-extra-small text-white"></i>
                             Khudija Street, Pasrur Road, Babey Beri, Sialkot, 51310
                         </span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <nav
         class="navbar navbar-expand-lg top-space navbar-light bg-blu header-light fixed-top navbar-boxed header-reverse-scroll">
         <div class="container-fluid nav-header-container">
             <div class="col-6 col-lg-2 me-auto ps-lg-0">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     <img src="{{ asset('frontend/images/logo-1.png') }}"
                         data-at2x="{{ asset('frontend/images/logo-1.png') }}" class="default-logo" alt="">
                     <img src="{{ asset('frontend/images/logo-1.png') }}"
                         data-at2x="{{ asset('frontend/images/logo-1.png') }}" class="alt-logo" alt="">
                     <img src="{{ asset('frontend/images/logo-1.png') }}"
                         data-at2x="{{ asset('frontend/images/logo-1.png') }}" class="mobile-logo" alt="">
                 </a>
             </div>
             <div class="col-auto menu-order px-lg-0">
                 <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                     <span class="navbar-toggler-line"></span>
                     <span class="navbar-toggler-line"></span>
                     <span class="navbar-toggler-line"></span>
                     <span class="navbar-toggler-line"></span>
                 </button>
                 <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                     <ul class="navbar-nav alt-font">

                         <li class="nav-item dropdown megamenu">
                             <a href="{{ url('/') }}"
                                 class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                         </li>

                         <li class="nav-item dropdown simple-dropdown">
                             <a href="javascript:void(0);"
                                 class="nav-link {{ in_array(Route::currentRouteName(), ['about-us', 'history', 'our-team', 'blog']) ? 'active' : '' }}">About
                                 Us</a>
                             <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                 aria-hidden="true"></i>
                             <ul class="dropdown-menu" role="menu">
                                 <li><a class=" {{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}"
                                        href="{{ route('about-us') }}">About Us</a></li>
                                 <li><a class=" {{ Route::currentRouteName() == 'history' ? 'active' : '' }}"
                                        href="{{ route('history') }}">History Timeline</a>
                                 </li>
                                 <li><a class=" {{ Route::currentRouteName() == 'our-team' ? 'active' : '' }}"
                                        href="{{ route('our-team') }}">Team</a></li>
                                 <li><a class=" {{ Route::currentRouteName() == 'blog' ? 'active' : '' }}"
                                        href="{{ route('blog') }}">Blog</a></li>
                             </ul>
                         </li>

                         <li class="nav-item dropdown simple-dropdown">
                             <a href="{{ route('media') }}"
                                 class="nav-link {{ Route::currentRouteName() == 'media' ? 'active' : '' }}">Media</a>
                             <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                 aria-hidden="true"></i>
                         </li>

                         {{-- @php
                            $categories = \App\Models\Category::with('subcategories')->orderBy('sequence')->get();
                        @endphp
                        <li class="nav-item dropdown megamenu">
                            <a href="{{ route('products') }}" class="nav-link {{ Route::currentRouteName() == 'products' ? 'active' : '' }}">Products</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
    
                            <div class="menu-back-div dropdown-menu megamenu-content" role="menu">
                                <div class="d-lg-flex justify-content-start">
                                    @foreach ($categories as $category)
                                        @if ($category->subcategories->isNotEmpty())
                                            <ul class="d-lg-inline-block m-3">
                                                <li class="dropdown-header yw" style="font-size: 18px; font-weight:700;">
                                                    {{ $category->name }}</li>
                                                @foreach ($category->subcategories as $subcategory)
                                                    <li>
                                                        <a class="yv" style="font-size: 15px"
                                                           href="{{ route('products.subcategory', ['id' => $subcategory->id]) }}">
                                                            {{ $subcategory->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </li> --}}

                         <li class="nav-item dropdown megamenu">
                             <a href="{{ route('catalogues') }}"
                                 class="nav-link {{ Route::currentRouteName() == 'catalogues' ? 'active' : '' }}">Catalogues</a>
                         </li>

                         @php
                             $departments = \App\Models\Department::orderBy('sequence')->get();
                         @endphp
                         <li class="nav-item dropdown simple-dropdown">
                             <a href="#"
                                 class="nav-link {{ Route::currentRouteName() == 'department' ? 'active' : '' }}">Departments</a>
                             <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown"
                                 aria-hidden="true"></i>
                             <ul class="dropdown-menu" role="menu">
                                 @foreach ($departments as $department)
                                     <li>
                                         <a 
                                             href="{{ route('department', $department->id) }}">{{ $department->name }}</a>
                                     </li>
                                 @endforeach
                             </ul>
                         </li>

                         <li class="nav-item dropdown megamenu">
                             <a href="{{ route('news-events') }}"
                                 class="nav-link {{ Route::currentRouteName() == 'news-events' ? 'active' : '' }}">Events
                                 & Expo</a>
                         </li>

                         <li class="nav-item dropdown megamenu">
                             <a href="{{ route('contact-us') }}"
                                 class="nav-link {{ Route::currentRouteName() == 'contact-us' ? 'active' : '' }}">Contact
                                 Us</a>
                         </li>

                     </ul>
                 </div>
             </div>
         </div>
     </nav>
 </header>
 <!-- end header -->
