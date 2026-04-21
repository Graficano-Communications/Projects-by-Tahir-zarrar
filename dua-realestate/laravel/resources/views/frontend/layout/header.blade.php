<style>
    header .navbar-brand {
    margin-right: 0;
    vertical-align: middle;
    padding: 10px 0;
    display: inline-block;
    font-size: 0;
    }
    header.sticky .navbar-brand {
        padding: 10px 0;
    }
    .custom-hr {
        border: none; /* Remove default border */
        height: 1px; /* Set height for the line */
        background-color: #28306e; /* Set the color of the line */
        border-radius: 5px; /* Round the edges (optional) */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Add a subtle shadow for depth */
    }
    /* Custom class for large screens to display the element */
    .my-lg-display {
        display: none !important; /* Default: Hidden for all screen sizes */
    }

    @media (min-width: 992px) {
        .my-lg-display {
            display: block !important; /* Visible only on large screens and above */
        }
    }

</style>
<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-light bg-white border-bottom border-color-extra-medium-gray header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left Section: UAN and Location -->
                <div class="col-12 my-lg-display">
                    <div class="row w-100 ">
                        <div class="col-9">
                            <div class="elements-social social-icon-style-02 mt-15px">
                                <a class="text-dark-gray  lh-22 d-inline-block">Office no.A-01 Hassan center opposite PSO PETROL PUMP IQBAL TOWN DEFENCE ROAD SIALKOT PAKISTAN</a>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <div class="elements-social social-icon-style-02 mt-15px">
                                <ul class="small-icon dark">
                                    <li><a class="facebook" href="https://www.facebook.com/profile.php?id=61566963113794" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="https://www.youtube.com/channel/UC6mNAaHy4skFSrmtwg9X5wA" target="_blank"><i class="fa-brands fa-youtube"></i></a></li> 
                                    <li><a class="instagram" href="https://www.instagram.com/dua.real_estate/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li> 
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
            <hr class="custom-hr">
            <div class="col-auto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/frontend/images/dua-logo.png') }}" data-at2x="{{ asset('assets/frontend/images/dua-logo.png') }}" alt="" class="default-logo">
                    <img src="{{ asset('assets/frontend/images/dua-logo.png') }}" data-at2x="{{ asset('assets/frontend/images/dua-logo.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('assets/frontend/images/dua-logo.png') }}" data-at2x="{{ asset('assets/frontend/images/dua-logo.png') }}" alt="" class="mobile-logo">
                </a>
            </div>
            <div class="col-auto menu-order left-nav ps-60px lg-ps-20px">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav alt-font">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ url('about-us') }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ url('amenities') }}" class="nav-link">Amenities</a></li>
                        <li class="nav-item"><a href="{{ url('media') }}" class="nav-link">Media</a></li>
                        <li class="nav-item dropdown submenu">
                            <a href="#" class="nav-link">Our Projects</a>
                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1">
                                <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                    <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                        @php
                                            use Illuminate\Support\Facades\DB;

                                            $projects = DB::table('projects')->orderBy('sequence')->get();
                                        @endphp

                                        @foreach ($projects as $project)
                                            <div class="col md-mb-30px">
                                                <a href="{{ route('project.show', $project->id) }}" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                    <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-250px box-shadow-large-hover position-relative">
                                                        <img src="{{ asset('uploads/projects/' . $project->image) }}" class="w-100px h-100px" alt="">
                                                        <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px"></span>
                                                    </span>
                                                    <span class="alt-font fw-600 fs-17 text-dark-gray">{{ $project->name }}</span>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="{{ url('blogs') }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ url('contact-us') }}" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                <div class="d-none d-xl-flex me-25px">
                    <div class="d-flex align-items-center widget-text fw-600 alt-font"><a href="tel:1234567890" class="d-inline-block"><span class="d-inline-block align-middle me-10px bg-base-color-transparent h-45px w-45px text-center rounded-circle fs-16 lh-46 text-base-color"><i class="feather icon-feather-phone-outgoing"></i></span><span class="d-none d-xxl-inline-block">03 111 000 269</span></a></div>
                </div>
                <div class="header-icon">
                    <div class="header-button">
                        <a href="{{ route('project.show', $project->id) }}" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                            <span>
                                <span class="btn-text">Buy property</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->
