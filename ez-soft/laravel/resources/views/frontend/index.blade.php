@extends('frontend.layout.master')
@section('title', 'EZ Soft')
@section('main-container')
    <style>
        .bst {
            height: 600px;
            position: relative;
        }

        .parallax {
            background-image: url('/assets/frontend/images/front-images/parallax.jpg');
            /* fallback */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax-content {
            color: white;
            z-index: 2;
            position: relative;
            max-width: 800px;
            padding: 20px;
        }

        .parallax::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: auto;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* dark overlay for better text readability */
            z-index: 1;
        }
.full-banner-wrapper {
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.full-banner-img {
    width: 100%;
    height: auto; /* Keep aspect ratio */
    display: block;
}
@media (max-width: 600px) {
   .full-banner-img {
        height: 300px;
    }
}


        @media (max-width: 768px) {
    .bst {
        height: auto; /* or set a smaller height if needed */
        padding: 50px 20px; /* optional: add padding for spacing */
    }
}

    </style>

    <!--============= Banner Section Starts Here =============-->
  <section class="full-banner-wrapper">
    <img src="{{ asset('assets/frontend/images/front-images/banner.jpg') }}" alt="ERP Banner" class="full-banner-img">
</section>


    <!--============= Banner Section Ends Here =============-->


    <!--============= Tool Section Starts Here =============-->
    <section class="tool-section padding-bottom padding-top">
        <div class="container">
            <div class="row align-items-center px-md-5">
                <div class="col-12 col-md-6 ">
                    <img src="{{ asset('assets/frontend/images/front-images/about-us.png') }}" alt="recharge"
                        class="img-fluid">
                </div>
                <div class="col-12 col-md-6 mt-md-0 mt-4">
                    <div class="section-header left-style">
                        <h5 class="cate text-md-left text-center">About Us</h5>
                        <h2 class="title text-md-left text-center">Your Partner in Simplifying Business.</h2>
                        <p style="text-align: justify;">
                            EZ Soft is a Sweden-based software company committed to simplifying business operations
                            worldwide. Founded with the vision of digitalizing industries, we offer a comprehensive suite of
                            ERP solutions, including CRM, accounting, inventory, HR, and point-of-sale systems. Our software
                            is designed to enhance efficiency, improve decision-making, and support businesses of all sizes
                            across various sectors. With over 10 years of expertise and a presence in multiple countries, EZ
                            Soft continues to lead the way in business automation and digital transformation.
                        </p>
                    </div>
                    <div class="text-md-start text-center">
                        <a href="{{ route('about') }}" class="button-3 long-light">About Company<i
                            class="flaticon-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--============= Tool Section Ends Here =============-->

    <!--============= How It Works Section Starts Here =============-->
    <div class="feature-section padding-bottom">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Making Things Easy For You</h5>
                <h2 class="title">Why Choose EZ Soft</h2>
                <p>Our software offers distinctive features designed to streamline your business operations and ensure
                    seamless digital transformation.</p>
            </div>
            <div class="owl-theme owl-carousel feature-item-2-slider mb--50">
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="{{ asset('assets/frontend/images/front-images/Multi-Device-Access.png') }}"
                            alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Access Anytime, Anywhere</h4>
                        <p>Use EZ Soft on multiple devices simultaneously, ensuring flexibility and convenience wherever you
                            are.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="{{ asset('assets/frontend/images/front-images/Secure-&-Reliable.png') }}" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Secure & Reliable</h4>
                        <p>Enjoy peace of mind with 7 layers of database protection, auto backups, and secure data
                            management.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="{{ asset('assets/frontend/images/front-images/User-Friendly-Interface.png') }}"
                            alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Simple Yet Powerful</h4>
                        <p>With a responsive, web-based interface, our software is easy to navigate, making it accessible to
                            all users.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="{{ asset('assets/frontend/images/front-images/International-Standards.png') }}"
                            alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Global Compliance Ready</h4>
                        <p>Designed based on International Accounting Standards, making it suitable for businesses
                            worldwide.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="{{ asset('assets/frontend/images/front-images/Reliable-Testing.png') }}" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Proven Quality</h4>
                        <p>Tested for 3,000 hours to ensure reliability.</p>
                    </div>
                </div>
                <div class="feature-item-2">
                    <div class="feature-thumb">
                        <img src="{{ asset('assets/frontend/images/front-images/Unlimited-Users.png') }}" alt="feature">
                    </div>
                    <div class="feature-content">
                        <h4 class="title">Scalable Access</h4>
                        <p>Allow unlimited users to access the system simultaneously, ensuring smooth team collaboration.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= How It Works Section Starts Here =============-->


    <!--============= How It Works Section Starts Here =============-->
    <section
        class="work-section p bg_img mb-md-95 pb-md-0 parallax d-flex align-items-center justify-content-center text-center text-white bst"
        data-background="{{ asset('assets/frontend/images/front-images/parallax.jpg') }}" id="how">

        <div class="parallax-content">
            <h1 style="color: #ffffff">EZSoft ERP for Your Business</h1>
            <p>EZSoft ERP helps you manage your business better. It makes your work faster, more organized, and saves time. Whether you have a shop, factory, or office, our software can help you.</p>
            <div class="text-center">
                <a href="contact.html" class="custom-button large-button theme-shadow">Contact Us</a>
            </div>
        </div>

    </section>

    <!--============= How It Works Section Ends Here =============-->


    <!--============= Testimonial Section Starts Here =============-->
    <section class="testimonial-section padding-top padding-bottom pt-lg-half" id="client">
        <div class="container">
            <div class="section-header">
                <h5 class="cate">Testimonials</h5>
                <h2 class="title">5000+ happy clients all around the world</h2>
            </div>
            <div class="testimonial-wrapper">
                <a href="#0" class="testi-next trigger">
                    <img src="{{ asset('assets/frontend/images/client/left.png') }}" alt="client">
                </a>
                <a href="#0" class="testi-prev trigger">
                    <img src="{{ asset('assets/frontend/images/client/right.png') }}" alt="client">
                </a>
                <div class="testimonial-area testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/images/front-images/testimonial-1.jpg') }}"
                                    alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p>
                                Awesome product. The guys have put huge effort into this app and focused on simplicity
                                and ease of use.
                            </p>
                            <h5 class="title"><a href="#0">Bela Bose</a></h5>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-thumb">
                            <div class="thumb">
                                <img src="{{ asset('assets/frontend/images/front-images/testimonial-2.jpg') }}"
                                    alt="client">
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <p>
                                Awesome product. The guys have put huge effort into this app and focused on simplicity
                                and ease of use.
                            </p>
                            <h5 class="title"><a href="#0">Raihan Rafuj</a></h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="button-area">
                    <a href="#0" class="button-2">Leave a review <i class="flaticon-right"></i></a>
                </div> --}}
            </div>
        </div>
    </section>
    <!--============= Testimonial Section Ends Here =============-->


    <!--============= Custom-Plan Section Starts Here =============-->
    <section class="custom-plan bg_img oh"
        data-background="{{ asset('assets/frontend/images/front-images/line-bg.png') }}">
        <div class="container">
            <div class="custom-wrapper">
                <span class="circle"></span>
                <span class="circle two"></span>
                <div class="calculate-bg">
                    <img src="{{ asset('assets/frontend/images/front-images/calculate-bg.png') }}" alt="bg">
                </div>
                <div class="custom-area">
                    <div class="section-header cl-white">
                        <h5 class="cate-1">Let’s Make Your Business Easier!</h5>
                        <h2 class="title">Need Help? Want Simplicity? </h2>
                        <p>
                            Contact us today and start simplifying your business with EZ Soft.
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="contact.html" class="custom-button large-button theme-shadow">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Custom-Plan Section Ends Here =============-->


    <!--============= Blog Section Starts Here =============-->
    <section class="blog-section padding-top padding-bottom">
        <div class="container-fluid">
            <div class="row justify-content-center px-md-5 px-3 py-lg-0 py-3">
                <div class="col-12">
                    <div class="row justify-content-center mb-30-none">
                        @foreach ($blog as $blog)
                            <div class="col-sm-6 col-lg-4 py-lg-0 py-3">
                                <div class="blog-item">
                                    <div class="blog-image">
                                        <a href="{{ route('blog.detail', $blog->id) }}">
                                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="Blog Image"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="blog-content py-4 px-3">
                                        <a href="{{ route('blog.detail', $blog->id) }}">
                                            <h5 class="mb-2">{{ $blog->name }}</h5>
                                        </a>
                                        <p class="blog-description mb-1">{!! \Illuminate\Support\Str::words($blog->description, 20, '...') !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Blog Section Ends Here =============-->


@endsection
