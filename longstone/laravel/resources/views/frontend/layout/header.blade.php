
<style>
    .navbar-nav .nav-link:hover{
        color: #ea7f23 !important;
    }
    .mobile-top-space {
    margin-top: 0 !important; /* Example: Adjust margin */
    padding-top: 0px; /* Example: Adjust padding */
    background-color: #ea7f23; /* Example: Change background color */
}
/* Initially hide the sticky logo */
.sticky-logo {
    display: none;
}

/* When the header becomes sticky, hide the default logo and show the sticky logo */
.sticky .header-reverse-scroll .default-logo,
.sticky .header-reverse-scroll .alt-logo {
    display: none;
}

.sticky .header-reverse-scroll .sticky-logo {
    display: inline-block;
}

</style>
<header>
    <nav class="navbar navbar-expand-lg   header-reverse-scroll menu-logo-center py-md-4 ">
        <div class="container-lg nav-header-container">
            <div class="col-6 px-lg-0 menu-logo">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url('assets/frontend/images/Front-images/logo-4.png')}}"  alt="" class="default-logo">
                    <img src="{{url('assets/frontend/images/Front-images/logo-4.png')}}"  alt="" class="alt-logo">
                    <img src="{{url('assets/frontend/images/Front-images/logo-5.png')}}"  class="mobile-logo" alt="">
                    <img src="{{url('assets/frontend/images/Front-images/logo-sticky.png')}}" alt="" class="sticky-logo">
                </a>
            </div>
            <div class="col-6 col-lg-12 px-lg-0 menu-order">
                <div class=" collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav alt-font navbar-left justify-content-end">
                        <li class="nav-item dropdown megamenu">
                            <a href="{{ url('/') }}" class="nav-link text-uppercase">Home</a>
                        </li>
                        {{-- <li class="nav-item dropdown simple-dropdown">
                            <a href="{{ url('about-us') }}" class="nav-link text-uppercase">About</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li> --}}
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#"  class="nav-link text-uppercase">About</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown">
                                    <a  href="{{ url('about-us') }}">About</a>
                                </li>
                                <li class="dropdown">
                                    <a  href="{{ url('mdr') }}">Mdr</a>
                                </li>
                            </ul>
                        </li>
                        @php
                            $categories = DB::table('categories')
                                ->select('id', 'name')
                                ->get()
                                ->map(function ($category) {
                                    $category->subcategories = DB::table('subcategories')
                                        ->where('categories_id', $category->id)
                                        ->select('id', 'name')
                                        ->get();
                                    return $category;
                                });
                        @endphp

                        <li class="nav-item dropdown simple-dropdown">
                            <a href="#" class="nav-link text-uppercase">Products</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                            <ul class="dropdown-menu" role="menu">
                                @foreach($categories as $category)
                                <li class="dropdown">
                                    <a data-bs-toggle="dropdown" href="javascript:void(0);">
                                        {{ $category->name }}
                                        <i class="fas fa-angle-right dropdown-toggle"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($category->subcategories as $subcategory)
                                        <li>
                                            <a href="{{ url('products/' . Str::slug($category->name) . '/' . Str::slug($subcategory->name)) }}">
                                                {{ $subcategory->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>


                        <li class="nav-item dropdown simple-dropdown">
                            <a href="{{ url('catalog') }}" class="nav-link text-uppercase">Catalog</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                    </ul>
                    <ul class="navbar-nav alt-font navbar-right justify-content-start">
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="{{ url('blogs') }}" class="nav-link text-uppercase">Blog</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="{{ url('news-events') }}" class="nav-link text-uppercase">News & Events</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                        <li class="nav-item dropdown simple-dropdown">
                            <a href="{{ url('contact-us') }}" class="nav-link text-uppercase">Contact</a>
                            <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="col-6 col-lg-1 text-end hidden-xs px-lg-0  ">
                <div class="header-push-button text-end">
                    <a href="javascript:void(0);" class="push-button ">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            
        </div>
    </nav>
    <div class="hamburger-menu hamburger-menu-big-font bg-extra-medium-slate-blue xl-w-60 lg-w-70 md-w-50 sm-w-100">
        <a href="javascript:void(0);" class="close-menu "><i class="ti-close"></i></a>
        <div class="row g-0 h-100">
            <div class="col-6 cover-background d-none d-lg-block" style="background-image: url('{{ asset('assets/frontend/images/Front-images/sideimage.jpg') }}');"></div>
            <div class="col-lg-6">
                <div class="row g-0 align-items-center justify-content-center h-100 padding-5-half-rem-all xs-padding-3-rem-all">
                    <div class="col-12 menu-list-wrapper menu-list-wrapper-small text-center text-md-start" data-scroll-options='{ "theme": "light" }'>
                        <!-- start menu -->
                        <ul class="menu-list alt-font w-100">
                            <!-- start menu item -->
                            <li class="menu-list-item"><a href="{{ url('/') }}">home</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li class="menu-list-item"><a href="{{ url('about-us') }}">about</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li class="menu-list-item"><a href="{{ url('catalog') }}">Catalogs</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li class="menu-list-item"><a href="{{ url('blogs') }}">blog</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li class="menu-list-item"><a href="{{ url('news-events') }}">news</a></li>
                            <!-- end menu item -->
                            <!-- start menu item -->
                            <li class="menu-list-item"><a href="{{ url('contact-us') }}">contact</a></li>
                            <!-- end menu item -->
                        </ul>
                        <!-- end menu -->
                    </div>
                    <div class="col-12 d-none d-md-block">
                        <div class="alt-font margin-50px-top social-icon-style-12 text-small text-uppercase">
                            <ul class="list-style-03 light">
                                <li><a class="facebook" href="https://www.facebook.com/share/18TPqn2g5e/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f w-30px"></i>Facebook</a></li>
                                <!--<li><a class="twitter" href="../www.twitter.com/{{ url('/') }}" target="_blank"><i class="fab fa-twitter w-30px"></i>Twitter</a></li>-->
                                <li><a class="instagram" href="https://www.instagram.com/long.stone?igsh=cG1jems3Z2Vpamw4&utm_source=qr" target="_blank"><i class="fab fa-instagram w-30px"></i>Instagram</a></li>
                                <li><a class="linkedin" href="http://www.linkedin.com/in/haider-imran-686713242" target="_blank"><i class="fab fa-linkedin w-30px"></i>Linkedin</a></li>
                                <!--<li class="no-border"><a class="dribbble" href="../www.dribbble.com/{{ url('/') }}" target="_blank"><i class="fab fa-dribbble w-30px"></i>Dribbble</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    window.addEventListener("scroll", function() {
    let header = document.querySelector(".header-reverse-scroll");
    if (window.scrollY > 50) { // Adjust this value as needed
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
});

</script>