@extends('frontend.layout.master')
@section('title', 'EZ Soft')
@section('main-container')

    <!--============= Header Section Ends Here =============-->
    <section class="page-header bg_img"
        data-background="{{ asset('assets/frontend/images/front-images/about-us-banner.jpg') }}">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('assets/frontend/css/img/page-header.png') }}">
        </div>
        <div class="container">
            <div class="page-header-content cl-white">
                <h2 class="title">About Us</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        About Us
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->


    <!--============= About Section Starts Here =============-->
    <section class="about-section padding-top padding-bottom-2  oh">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-thumb rtl">
                        <img src="{{ asset('assets/frontend/images/front-images/about-us-1.jpg') }}" alt="about" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-content">
                        <div class="section-header left-style">
                            <h5 class="cate text-md-left text-center">Your Trusted Digital Partner</h5>
                            <h2 class="title text-md-left text-center">Redefining Business with Smart Solutions</h2>
                            <p style="text-align: justify;">
                                At EZ Soft, we simplify business operations through advanced, user-friendly software. 
                                From managing accounts to streamlining inventory, we’re here to make your workflow seamless 
                                and efficient. Trusted by businesses globally, we’re committed to your success.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--============= About Section Ends Here =============-->

    <!--============= Counter Section Starts Here =============-->
    <section>
        <div class="container">
            <div class="row align-items-center ">
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-center justify-content-sm-start justify-content-center mt-3">
                            <div class="counter-thumb">
                                <img src="{{ asset('assets/frontend/images/counter/counter1.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">500</span><span>+</span></h3>
                                <p>Global Reach</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-center justify-content-sm-start justify-content-center mt-3">
                            <div class="counter-thumb">
                                <img src="{{ asset('assets/frontend/images/counter/counter2.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">2000</span><span>+</span></h3>
                                <p>Successful Projects</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-center justify-content-sm-start justify-content-center mt-3">
                            <div class="counter-thumb">
                                <img src="{{ asset('assets/frontend/images/counter/counter3.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">6</span><span>+</span></h3>
                                <p>Diverse Industries</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 d-flex align-items-center justify-content-sm-start justify-content-center mt-3">
                            <div class="counter-thumb">
                                <img src="{{ asset('assets/frontend/images/counter/counter1.png') }}" alt="counter">
                            </div>
                            <div class="counter-content">
                                <h3 class="title"><span class="counter">3000</span><span>+</span></h3>
                                <p>Hours Reliable Testing</p>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    <!--============= Counter Section End Here =============-->

    <!--============= Coverage Section Starts Here =============-->
    <section class="coverage-section padding-top padding-bottom-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="section-header left-style coverage-header">
                        <h5 class="cate text-md-left text-center">Global Presence at Your Service</h5>
                        <h2 class="title text-md-left text-center">Serving Worldwide Success</h2>
                        <p style="text-align: justify;">With clients spanning multiple continents, EZ Soft is committed to delivering digital solutions across the globe. Our reach extends from the Middle East to Europe and beyond, providing seamless service wherever our clients need us.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="coverage-right-area text-md-right text-center">
                        {{-- <div class="rating-area">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <span class="average">5.0 / 5.0</span>
                        </div> --}}
                        <h2 class="amount">150+</h2>
                        <a >Global Reach</a>
                    </div>
                </div>
            </div>
            <div class="coverage-wrapper bg_img" data-background="{{ asset('assets/frontend/images/bg/world-map.png') }}">
                <div class="border-item-4">
                    <span class="name">UAE</span>
                    <h2 class="title">50+</h2>
                </div>
                <div class="border-item-2">
                    <span class="name">Sweden</span>
                    <h2 class="title">40+</h2>
                </div>
                <div class="border-item-1">
                    <span class="name">Pakistan</span>
                    <h2 class="title">100+</h2>
                </div>
                <div class="border-item-6">
                    <span class="name">Oman</span>
                    <h2 class="title">30+</h2>
                </div>
                <div class="border-item-5">
                    <span class="name">Qatar</span>
                    <h2 class="title">10+</h2>
                </div>
                <div class="border-item-3">
                    <span class="name">USA</span>
                    <h2 class="title">15+</h2>
                </div>
            </div>
        </div>
    </section>
    <!--============= Coverage Section Ends Here =============-->


    <!--============= Team Section Starts Here =============-->
    <section class="team-section padding-top-2 padding-bottom-2 oh">
        <div class="container">
            <div class="section-header">
                <h5 class="cate ">Meet the Minds Behind It</h5>
                <h2 class="title ">Meet Our Experts</h2>
                <p>Our team is a group of highly skilled professionals dedicated to creating innovative solutions for your business.</p>
            </div>
            <div class="team-slider owl-carousel ">
                @foreach ($team as $member)
                    <div class="team-item">
                        <div class="team-thumb ">
                            <img src="{{ asset('uploads/teams/' . $member->image) }}" alt="team">
                        </div>
                        <div class="team-content">
                            <h4 class="title">
                                <a href="#0">{{ $member->name }}</a>
                            </h4>
                            <span class="info">{{ $member->designation }}</span>
                        </div>
                    </div>
                @endforeach
                


                <!-- Add more team items as needed -->
            </div>
        </div>
    </section>
    <!--============= Team Section Ends Here =============-->


    <!--============= Creativity Section Starts Here =============-->
    <section class="oh creativity-section padding-bottom-2 bg-max-lg-ash bg_img top_center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 pt-md-0 pt-5">
                <div class="section-header left-style mb-0">
                    <h5 class="cate text-md-left text-center">Easy Tools for Better Business Management</h5>
                    <h2 class="title text-md-left text-center">All-in-One Solutions for Every Task</h2>
                    <p class="text-justify">
                        EZ Soft offers easy-to-use tools to help businesses stay organized and make daily work simpler. Our software covers everything you need, such as Accounts, which helps manage finances, and Inventory, which keeps track of products and stock. The HR feature helps with employee details, attendance, and payroll. The Production module helps manufacturers manage orders, materials, and work processes. With features like export, CRM, and point of sale, EZ Soft connects all parts of your business, making operations smoother and improving customer service.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-lg-0 mt-4">
                <img src="{{ asset('assets/frontend/images/front-images/about-us-2.jpg') }}" alt="feature" class="img-fluid">
            </div>
        </div>
    </div>
</section>

    <!--============= Creativity Section Ends Here =============-->


    <!--============= Sponsor Section Section Here =============-->
    <section class="sponsor-section padding-top-2 padding-bottom">
        <div class="container">
            <div class="section-header mw-100">
                <h5 class="cate">Used by over 1,000,000 people worldwide</h5>
                <h2 class="title">Countries that trust us</h2>
            </div>
            <div class="sponsor-slider-4 owl-theme owl-carousel">
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-oman.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-england.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-sweden.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-denmark.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-saudia.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-usa.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-uae.png') }}" alt="sponsor">
                </div>
                <div class="sponsor-thumb">
                    <img src="{{ asset('assets/frontend/images/front-images/flag-japan.png') }}" alt="sponsor">
                </div>
            </div>
        </div>
    </section>
    <!--============= Sponsor Section Ends Here =============-->
    <script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                toolTip: {
                    shared: true
                },
                legend: {
                    fontSize: 0
                },
                backgroundColor: "transparent",
                color: "#ffffff",
                data: [{
                        type: "splineArea",
                        showInLegend: true,
                        name: "Income",
                        yValueFormatString: "$#,#000",
                        xValueFormatString: "YYYY",
                        dataPoints: [{
                                x: new Date(2015, 1),
                                y: 0
                            },
                            {
                                x: new Date(2016, 1),
                                y: 1000
                            },
                            {
                                x: new Date(2017, 1),
                                y: 700
                            },
                            {
                                x: new Date(2018, 1),
                                y: 1400
                            },
                            {
                                x: new Date(2019, 1),
                                y: 1500
                            },
                            {
                                x: new Date(2021, 1),
                                y: 1000
                            },
                        ]
                    },
                    {
                        type: "splineArea",
                        showInLegend: true,
                        yValueFormatString: "#k",
                        name: "Active Members",
                        dataPoints: [{
                                x: new Date(2015, 1),
                                y: 0
                            },
                            {
                                x: new Date(2016, 1),
                                y: 400
                            },
                            {
                                x: new Date(2017, 1),
                                y: 1000
                            },
                            {
                                x: new Date(2018, 1),
                                y: 1000
                            },
                            {
                                x: new Date(2019, 1),
                                y: 2000
                            },
                            {
                                x: new Date(2021, 1),
                                y: 2200
                            },
                        ]
                    }
                ]
            });
            chart.render();

        }
        document.addEventListener("DOMContentLoaded", function() {
            var teamSlider = document.querySelector('.team-slider');

            if (teamSlider) {
                $('.team-slider').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
                    },
                    navText: ["<i class='flaticon-left-arrow'></i>", "<i class='flaticon-right-arrow'></i>"]
                });
            }
        });
    </script>
@endsection
