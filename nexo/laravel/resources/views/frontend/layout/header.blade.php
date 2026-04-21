<!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed no-background">


            <div class="container d-flex justify-content-between align-items-center">            
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/frontend/img/front/nexo-logo-5.png') }}" class="logo logo-display" alt="Logo">
                        <img src="{{ asset('assets/frontend/img/front/nexo-logo-5.png') }}" class="logo logo-scrolled" alt="Logo">
                        <img src="{{ asset('assets/frontend/img/front/nexo-logo-5.png') }}" class="logo-dark" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img class="regular-img" src="{{ asset('assets/frontend/img/front/nexo-logo-3.png') }}" alt="Logo">
                    <img class="light-img" src="{{ asset('assets/frontend/img/front/nexo-logo-3.png') }}" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>
                    
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
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
                        <li class="dropdown megamenu-fw megamenu-style-two column-three">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="col-menu-wrap">
                                        <div class="menu-cal-items">
                                            @foreach ($categories as $category)
                                            <div class="col-menu">
                                                <a href="{{ route('products', $category->slug) }}">
                                                    <h4>{{ $category->name }}</h4>
                                                </a>
                                                @if ($category->subcategories->count())
                                                <ul class="menu-col">
                                                    @foreach ($category->subcategories as $subCategory)
                                                    <li><a href="{{ route('products.subcategory', [$category->slug, $subCategory->slug]) }}">{{ $subCategory->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="megamenu-banner">
                                            <div class="thumb">
                                                <img src="assets/img/banner/1.jpg" alt="Image Not Found">
                                                <a href="https://www.youtube.com/watch?v=35mvh-2oII8" class="popup-youtube video-button"><i class="fas fa-play"></i></a>
                                            </div>
                                            <h4>Intro Video</h4>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('catalouges') }}">catalouges</a></li>
                        <li><a href="{{ route('news.show') }}">Event</a></li>
                        <li><a href="{{ route('blog.show') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav flex">
                        <ul>
                            <li class="side-menu">
                                <a href="#">
                                    <span class="bar-1"></span>
                                    <span class="bar-2"></span>
                                    <span class="bar-3"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->


                    <!-- Start Side Menu -->
                    <div class="side">
                        <a href="#" class="close-side"><i class="fas fa-times"></i></a>
                        <div class="top">
                            <div class="widget">
                                <div class="logo">
                                    <img src="{{ asset('assets/frontend/img/front/nexo-logo-3.png') }}" alt="Logo">
                                </div>
                            </div>
                            <div class="widget address">
                                <div>
                                    <ul>
                                        <li>
                                            <div class="content">
                                                <p>Address</p> 
                                                <strong>California, TX 70240</strong>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content">
                                                <p>Email</p> 
                                                <strong>support@validtheme.com</strong>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="content">
                                                <p>Contact</p> 
                                                <strong>+44-20-7328-4499</strong>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="widget newsletter">
                                <h4 class="title">Get Subscribed!</h4>
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
                                        <span class="input-group-addon">
                                            <button type="submit">
                                                <i class="fas fa-arrow-right"></i>
                                            </button>  
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div class="widget social">
                                <ul class="link">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><img src="assets/img/icon/twitter.png" alt="Image Not Found"></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Side Menu -->

                </div>
                <!-- Main Nav -->

            </div>  
            <!-- Overlay screen for menu -->
            
            <!-- End Overlay screen for menu --> 
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->



