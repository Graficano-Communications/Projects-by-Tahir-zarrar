<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
    <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/eurocon.png')); ?>" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo:400,500,600,700&display=swap">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon/flaticon.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap/bootstrap.min.css')); ?>" />



    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/owl-carousel/owl.carousel.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper/swiper.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup/magnific-popup.css')); ?>" />


    <!-- Template Style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />

</head>



<body>
    <style>
        .whatspp-plugin {
            position: fixed;
            width: 25px;
            height: 25px;
            bottom: 80px;
            right: 22px;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 100000;
        }
    </style>
    <!--=================================
    header -->
    <header class="header default">
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="d-block d-md-flex align-items-center text-center">
                            <div class="mr-4 d-inline-block py-1">
                                <a href="mailto:info@euro-bag.com">
                                    <i class="far fa-envelope mr-2 fa-flip-horizontal text-primary"></i>
                                    info@euro-bag.com
                                </a>
                            </div>
                            <div class="mr-auto d-inline-block py-1">

                            </div>
                            <div class="d-inline-block py-1">
                                <ul class="list-unstyled">
                                    <li><a href=""><i class="fas fa-map-marker-alt text-primary mr-2"></i>NOUL
                                            MORE RORAS ROOADNEAR HARRAR SIALKOT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar bg-white navbar-static-top navbar-expand-lg align-items-center justify-content-center">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="fas fa-align-left"></i></button>
                <a class="navbar-brand" href="/">
                    <img class="img-fluid" src="<?php echo e(asset('assets/images/Euro-Bags-logo.png')); ?>" alt="logo">
                </a>
                <div class="navbar-collapse collapse justify-content-lg-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">
                            <a class="nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('about')); ?>">Company</a>
                        </li>

                        <?php $category = \App\category::all()->sortBy('sequence'); ?>
                        <li class="dropdown nav-item mega-menu <?php echo e(request()->is('products*') ? 'active' : ''); ?>">
                            <a href="#" class="nav-link" data-toggle="dropdown">Products</a>
                            <ul class="dropdown-menu megamenu">
                                <li>
                                    <div class="row">
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-sm-6 col-lg-3">
                                                <h6 class="mb-3 nav-title">
                                                    <a href="<?php echo e(route('products.catgeory', $cat->slug)); ?>">
                                                        <?php echo e($cat->name); ?>

                                                    </a>
                                                </h6>
                                                <?php
                                                    $subcategory = \App\subcategory::where('category_id', $cat->id)
                                                        ->orderBy('sequence')
                                                        ->get();
                                                ?>
                                                <?php if($subcategory->count()): ?>
                                                    <ul class="list-unstyled mt-lg-3">
                                                        <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <a
                                                                    href="<?php echo e(route('product_by_category', [$cat->slug, $subcat->slug])); ?>">
                                                                    <?php echo e($subcat->name); ?>

                                                                </a>
                                                            </li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item <?php echo e(request()->routeIs('media') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('media')); ?>">Inovation & Industry Insights</a>
                        </li>

                        

                        <li class="nav-item <?php echo e(request()->routeIs('events') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('events')); ?>">Events</a>
                        </li>

                        <li class="nav-item <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">
                            <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
                    <ul class="nav ml-1 ml-lg-2 align-self-center">
                        <li class="contact-number nav-item pr-4 ">
                            <a class="font-weight-bold" href="https://wa.me/923461157705"><i
                                    class="fab fa-whatsapp pr-2"></i> + (92) 3461157705</a>
                        </li>
                        <li class="header-search nav-item">
                            <div class="search">
                                <a class="search-btn not_click" href="javascript:void(0);"></a>
                                <div class="search-box not-click">
                                    <form action="<?php echo e(route('search')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="text" class="not-click form-control" name="search"
                                            placeholder="Search..">
                                        <button class="search-button" type="submit"> <i
                                                class="fa fa-search not-click"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--=================================
    header -->


    <?php echo $__env->yieldContent('content'); ?>




    <!--=================================
    footer -->
    <footer class="footer bg-light overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-6">
                    <div class="p-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="<?php echo e(route('home')); ?>"><img class="img-fluid"
                                        src="<?php echo e(asset('assets/images/Euro-Bags-logo.png')); ?>" alt="logo"></a>
                                <p class="mt-3 text-dark">Euro-Bags is an innate brand that produces premium export
                                    quality bags of all types.
                                    From Backpacks to gym bags, travel bags to sports bags, or any lifestyle bag, we
                                    provide our customers best quality material and craftsmanship at their doorsteps. We
                                    have a history of creating custom bags for international brands and now you can get
                                    all those prestigious innovated bags in Pakistan at a very low price.</p>
                                <ul class="list-unstyled mb-0 social-icon">
                                    <li><a href="https://www.facebook.com/share/16wWezv1nL/?mibextid=wwXIfr"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a
                                            href="https://www.instagram.com/eurobagsinternational?igsh=eGloMzgxdGlhdW5s&utm_source=qr"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/haseeb-akram-a88171284?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h5 class="text-primary">Head office</h5>
                                <p class="text-dark">NOUL MORE RORAS ROOADNEAR HARRAR SIALKOT</p>
                                <p class="text-dark"> <a class="font-weight-bold"
                                        href="https://wa.me/923461157705"><i
                                            class="fab fa-whatsapp mr-2 text-primary"></i> + (92) 3461157705</a>
                                </p>
                                <p class="text-dark">
                                    <i class="far fa-envelope mr-2 text-primary"></i>
                                    <a href="mailto:info@euro-bag.com" class="text-dark">info@euro-bag.com</a>
                                </p>
                                <h4 class="text-dark mb-0 font-weight-bold"><a class="text-dark"
                                        href="tel:+923461157705"> + (92) 3461157705</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 bg-dark">
                    <div class="p-6">
                        <div class="row">
                            <div class="col-sm-6 col-lg-5 mb-4 mb-lg-0">
                                <h5 class="text-primary mb-2 mb-sm-4">About Euro-Bags</h5>
                                <div class="footer-link">
                                    <ul class="list-unstyled mb-0">
                                        <li><a class="text-white" href="<?php echo e(route('blog_posts')); ?>">Blogs</a></li>
                                        <li><a class="text-white" href="<?php echo e(route('contact')); ?>">Contact</a></li>
                                        <li><a class="text-white"
                                                href="<?php echo e(route('page', 'privacy-policy')); ?>">Privacy Policy</a></li>
                                        <li><a class="text-white" href="<?php echo e(route('page', 'about-us')); ?>">About</a>
                                        </li>
                                        <li><a class="text-white" href="<?php echo e(route('departments')); ?>">Departments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-5">
                                <h5 class="text-primary mb-2 mb-sm-4">Social Links</h5>
                                <div class="footer-link">
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <h6 class="text-white">NTN NO : 7102158-6</h6>
                                        </li>
                                        <li>
                                            <h6 class="text-white">STRN NO : 3277876238154</h6>
                                        </li>
                                        <li>
                                            <h6 class="text-white">SCCI NO : A-58925</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="mb-0 text-white mt-5">©Copyright 2025 <a href="/" class="text-primary">Euro
                                Bags</a> All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
    footer -->

    <!-- end footer -->
    <a class="whatspp-plugin" href="https://wa.me/923461157705" target="_blank">
        <img src="<?php echo e(asset('images/whts.png')); ?>" class="img-responsive float-right" style="height:70px">
    </a>

    <!-- cart start -->
    <!-- <div class="addcart_btm_popup" id="fixed_cart_icon">
        <a href="<?php echo e(route('cart')); ?>" class="fixed_cart">
            <i class="ti-shopping-cart"></i>
        </a>
    </div> -->
    <!-- cart end -->






    <!-- JS Global Compulsory (Do not remove)-->
    <script src="<?php echo e(asset('assets/js/jquery-3.4.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/popper/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.min.js')); ?>"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="<?php echo e(asset('assets/js/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiperanimation/SwiperAnimation.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/counter/jquery.countTo.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owl-carousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>


    <!-- Template Scripts (Do not remove)-->
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>


    <script>
        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
