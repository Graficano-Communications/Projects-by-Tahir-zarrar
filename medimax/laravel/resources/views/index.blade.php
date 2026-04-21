@extends('front-layouts.master')

@section('title', 'Home')


@section('loader')
<!-- Preloader Area -->
<div class="preloader">
    <div class="container">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="preloader loading">
                    <div class="loader">
                        <div class="box">
                            <div class="logo">
                                <img src="{{ asset('medimax_assets/img/loader.png') }}" alt="Shape">
                            </div>
                        </div>
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                        <div class="box"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->
@endsection

@section('content')

<style>
    /*================================================
Frequently Area Two CSS (Updated)
=================================================*/
.accordion {
    display: flex;
    flex-direction: column;
}

.accordion li {
    position: relative;
    margin-bottom: 20px;
    padding-left: 60px; /* Space for the timeline */
}

.accordion .title {
    cursor: pointer;
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    padding: 10px 20px;
    background: none; /* Removes background */
    border: none; /* Removes border */
    box-shadow: none; /* Removes shadow */
    transition: none; /* Removes transition */
    width: auto; /* Adjusts width automatically */
    white-space: nowrap; /* Prevents text from breaking onto a new line */
}


/* .accordion .title:hover {
    background-color: #f0f0f0;
} */

.accordion li:before {
    content: '';
    position: absolute;
    left: 30px; /* Center of the timeline */
    top: 10px;
    width: 10px;
    height: 10px;
    background-color: #007bff;
    border-radius: 50%;
}

.accordion li:after {
    content: '';
    position: absolute;
    left: 34px;
    top: 30px;
    width: 2px;
    height: calc(100% - 30px);
    background-color: #007bff;
}
.frequently-area .frequently-text .faq-contant .accordion li .title.active {
  
  color: #000000 !important;
}


    .ptb-300 {
        padding-top: 250px;
        padding-bottom: 250px;
    }

   .group {
        display: flex;
        flex-direction: column;
        /* Arrange children vertically */
        align-items: center;
        justify-content: center;
        max-width: 100%;
        padding: 5px;
        text-align: center;
    }

    .input {
        width: 100%;
        height: 45px;
        padding-left: 3rem;
        border: 2px solid transparent;
        border-radius: 10px;
        outline: none;
        background-color: #f8fafc;
        color: #0d0c22;
        transition: .5s ease;
    }

    .input::placeholder {
        color: #94a3b8;
    }

    .input:focus,
    .input:hover {
        border-color: #00336b;
        background-color: #fff;
        box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
    }

    .icon {
        position: absolute;
        left: 1rem;
        fill: none;
        width: 1rem;
        height: 1rem;
    }

   .submit-btn {
        background-color: #C9D0D7;
        color: #fff;
        border: none;
        padding: 0.3rem 0.5rem;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;

    }

    .submit-btn i {
        font-size: 1.85rem;
    }

    .submit-btn:hover {
        background-color: #00224e;
    }

    .why-us-icon {
        position: absolute;
        color: #00336B;
        top: 50%;
        transform: translateY(-113%);
        left: 20px;
        height: 95px !important;
        width: auto;
    }

    .catalogue-image {
        border: 2px solid #ddd;
        /* Add a border to the image */
        border-radius: 8px;
        /* Optional: adds rounded corners */
        width: 100%;
        /* Ensure the image takes full width of container */
        height: auto;
        /* Maintain aspect ratio */
    }

    .catalogue-details {
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .cat-name {
        font-size: 18px;
        font-weight: bold;
    }

    .cardflipbox {
        position: relative
    }

    .cardflipbox .cardflipinner {
        position: relative;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        perspective: 1000px;
        -ms-transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        -webkit-perspective: 1000px;
        -webkit-backface-visibility: hidden
    }

    .cardflipbox .innercontent {
        position: absolute;
        left: 0;
        width: 100%;
        padding: 10px;
        outline: 1px solid transparent;
        -webkit-perspective: inherit;
        perspective: inherit;
        z-index: 2;
        top: 50%;
        transform: translateY(-50%) translateZ(60px) scale(.94);
        -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
        -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
        -moz-transform: translateY(-50%) translateZ(60px) scale(.94);
        -o-transform: translateY(-50%) translateZ(60px) scale(.94)
    }

    .cardflipbox .cardback,
    .cardflipbox .cardfront {
        background-size: cover;
        background-position: center;
        border-radius: 5px;
        width: 100%;
        height: 100%;
        min-height: 500px;
        background-color: #ffffff;
        transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        -webkit-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -ms-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -moz-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -o-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px
    }

    .cardflipbox .cardfront {
        transform: rotateY(0);
        transform-style: preserve-3d;
        -ms-transform: rotateY(0);
        -webkit-transform: rotateY(0);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -moz-transform: rotateY(0);
        -o-transform: rotateY(0)
    }

    .cardflipbox .cardback {
        background-color: #C9D0D7;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        border: 1px solid #00336B;
        transform: rotateY(180deg);
        transform-style: preserve-3d;
        -ms-transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg)
    }

    .cardflipbox:hover .cardfront {
        transform: rotateY(-180deg);
        transform-style: preserve-3d;
        -ms-transform: rotateY(-180deg);
        -webkit-transform: rotateY(-180deg);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg)
    }

    .cardflipbox:hover .cardback {
        -ms-transform: rotateY(0);
        -webkit-transform: rotateY(0);
        transform: rotateY(0);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d
    }

    .cardflipbox .cardflipinner .cardfront {
        background-size: cover;
        background-position: center;
        backface-visibility: hidden;
        transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;

        -webkit-backface-visibility: hidden;
        -ms-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;
        -webkit-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;
        -moz-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;
        -o-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s
    }

    .cardflipbox .cardflipinner .cardfront::before {
        content: "";
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        opacity: .1;
        border: 1px solid #00336B;
        border-radius: 15px;
        background-color: inherit;
        backface-visibility: hidden;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px
    }
    
    .bg-gif{
        background-image: url('{{ asset('medimax_assets/img/back.gif') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    
    .spacing {
        padding-left: 65px !important;
        padding-right: 65px !important;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .title {
        background-color: #00224e;
        border-radius: 3px;
        padding: 17px 40px;
        max-width: min-content;
        text-transform: uppercase;
    }
    .ptb-50{
        padding-top: 50px;
        padding-bottom: 50px;
    }
    .blog-card .b-card-text {
    height: 250px;
    }
</style>


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach($banners as $index => $banner)
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <img src="{{ asset('images/banners/' . $banner->image) }}" class="d-block w-100" alt="...">
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #00224e;"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #00224e;"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>






<!-- About Area -->
<div class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <div class="main-img">
                        <img src="{{ asset('medimax_assets/img/about/about us.jpg') }}" alt="Image">
                        <div class="shape-1">
                            <img src="{{ asset('medimax_assets/img/shapes/shape-3.png') }}" alt="Shape">
                        </div>
                        <div class="shape-2">
                            <img src="{{ asset('medimax_assets/img/shapes/shape-3.png') }}" alt="Shape">
                        </div>
                        <div class="shape-3">
                            <img src="{{ asset('medimax_assets/img/shapes/shape-4.png') }}" alt="Shape">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title-two">
                        <span>About us</span>
                        <h2>Leading provider of surgical excellence with precision instruments worldwide</h2>
                        <p style="text-align: justify;">Medimax is a trusted name in the B2B surgical instruments industry, dedicated to supplying high-quality tools for healthcare professionals worldwide. We offer a comprehensive range of surgical instruments, including orthopedic, dental, and diagnostic solutions, designed to meet the exacting standards of medical professionals.</p>
                        <p style="text-align: justify;">
                            Medimax provides a wide range of high-quality surgical tools, including orthopedic instruments, dental tools, and diagnostic kits. These tools are made to meet the needs of doctors and ensure accurate and reliable medical care worldwide.
                        </p>
                    </div>

                    <!--<ul>-->
                    <!--    <li>-->
                    <!--        <i class='bx bx-bone'></i>-->
                    <!--        Orthopedic Solutions: Precision-crafted instruments for all orthopedic procedures.-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <i class='bx bx-knife'></i>-->
                    <!--        Dental Solutions: High-quality tools for dental surgeries and treatments.-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <i class='bx bxs-shield-plus'></i>-->
                    <!--        Diagnostic Kits: Reliable diagnostic instruments for accurate healthcare assessments.-->
                    <!--    </li>-->
                    <!--</ul>-->

                    <div class="about-btn">
                        <a href="{{ route('about') }}" class="default-btn">
                            Read More <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->

<!-- Category Area -->
<div class="team-area bg-color ptb-100">
    <div class="container">
        <div class="section-title-one">
            <span>Our Categories</span>
            <h2>Check Out Our Top-Listed Categories</h2>
        </div>

        <div class="team-slider owl-carousel owl-theme">
            @foreach ($categories as $category)

            <div class="team-card">
                <a href="{{ route('categories.sub', $category->id) }}">
                    <img src="{{ asset('images/categories/' . $category->image) }}" alt="Image">
                </a>
                <div class="caption">
                    <h3><a href="{{ route('categories.sub', $category->id) }}">{{ $category->name }}</a></h3>
                    <span>Medimax Instruments</span>

                    <ul class="social-link">
                        <li>
                            <span style="display: none !important;">Cardiologist</span>
                        </li>

                    </ul>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
<!-- End Category Area -->



<!-- Treatment Area -->
<div class="treatment-area ptb-50">
    <div class="container">
        <div class="section-title-one">
            <h2> Why Choose Medimax for Surgical Instruments</h2>
        </div>

        <div class="row align-items-center justify-content-between">
            <div class="col-md-4 col-sm-6">
                <div class="treatment-card bg-color-1">
                    <div class="shape">
                        <img src="{{ asset('medimax_assets/img/shapes/shape-13.png') }}" alt="Shape">
                        <img src="{{ asset('medimax_assets/img/shapes/Exceptional-quality.png') }}" alt="icon" class="why-us-icon">

                    </div>
                    <h3>Exceptional Quality Instruments</h3>
                    <p>Our products meet the highest industry standards, ensuring reliability and performance in every procedure</p>
                    <div class="t-card-btn">
                        <!--<a href="#" class="default-btn two">-->
                        <!--    Read more-->
                        <!--    <span></span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="treatment-card bg-color-1">
                    <div class="shape">
                        <img src="{{ asset('medimax_assets/img/shapes/shape-13.png') }}" alt="Shape">
                        <img src="{{ asset('medimax_assets/img/shapes/experienced-professionals.png') }}" alt="icon" class="why-us-icon">

                    </div>
                    <h3>Experienced Professionals</h3>
                    <p>Our team of experts brings years of industry knowledge, guiding you to the best choices for your surgical needs.</p>
                    <div class="t-card-btn">
                        <!--<a href="#" class="default-btn two">-->
                        <!--    Read more-->
                        <!--    <span></span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="treatment-card bg-color-1">
                    <div class="shape">
                        <img src="{{ asset('medimax_assets/img/shapes/shape-13.png') }}" alt="Shape">
                        <img src="{{ asset('medimax_assets/img/shapes/on-time-delivery.png') }}" alt="icon" class="why-us-icon">
                    </div>
                    <h3>On-Time Delivery</h3>
                    <p>Medimax guarantees timely delivery, so you can count on having the right instruments exactly when you need them.</p>
                    <div class="t-card-btn">
                        <!--<a href="#" class="default-btn two">-->
                        <!--    Read more-->
                        <!--    <span></span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- End Treatment Area -->




<!-- <div class="doctors-area ptb-100">
    <div class="container">
        <div class="section-title-one">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <h2>Let's check out our Catalogues</h2>
        </div>

        <div class="doctors-slider owl-carousel owl-theme">
            @foreach($catalogues as $cats)
            <div class="doctors-card">
                <a href="#">
                    <img src="{{ asset($cats->image_path) }}" alt="Image" class="catalogue-image">
                </a>
                <div class="catalogue-details">
                    <h3 class="cat-name">{{ $cats->name }}</h3>
                    <form action="{{ route('feedback.store') }}" method="POST" class="password-form">
                        @csrf
                        <input type="hidden" name="id" value="{{ $cats->id }}">
                        <div class="group">
                            <input class="input" type="password" name="password" placeholder="Enter Password" required autocomplete="off">
                            <button type="submit" class="submit-btn">
                                <i class="bx bx-download"></i> 
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div> -->


        <div class="frequently-area bg-color-1 ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section-title-two text-center">
                            <h2>Frequently Asked Questions</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto">
                        <div class="frequently-text">
                            <div class="faq-contant">
                                <div class="timeline-line"></div>
                                <ul class="accordion" style="list-style: none; padding: 0;">
                                    @foreach($catalogues as $cats)
                                        <li class="mb-4">
                                            <h3 class="title">{{ $cats->name }}</h3>
                                            <div class="accordion-content">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-4">
                                                        <p>
                                                            Our catalogs provide detailed information on our range of {{ $cats->name }} and devices. Download them to review product specifications and select the best options for your requirements
                                                        </p>
                                                        <button type="button" 
                                                        class="default-btn open-modal" 
                                                        data-bs-toggle="modal" 
                                                        data-bs-target="#feedbackModal" 
                                                        data-id="{{ $cats->id }}">
                                                        Download
                                                </button>
                                                    </div>
                                                    <img src="{{ asset($cats->image_path) }}" 
                                                         alt="{{ $cats->name }}" 
                                                         style="width: 300px; height: 200px; object-fit: cover;">
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Enter Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('feedback.store') }}" method="POST" class="password-form">
                    @csrf
                    <input type="hidden" name="id" id="catalogId" value="">
                    <div class="group">
                        <input class="input" type="password" name="password" placeholder="Enter Password" required autocomplete="off">
                        <button type="submit" class="submit-btn">
                            <i class="bx bx-download"></i> <!-- Download Icon -->
                        </button>
                    </div>
                </form>
                <p class="text-center"><span><a href="{{ route('contact')}}">Request for password.....</a></span></p>
            </div>
        </div>
    </div>
</div>




<!-- Parallex Area -->
<div class="information-area ptb-300">
    <div class="container">
        <div class="row align-items-center ">
            <div class="section-title-two three">
                <h2 class="text-white text-center">Explore Quality Surgical Instruments for Your Business with Medimax!</h2>
            </div>
        </div>
    </div>
</div>
<!-- End Parallex Area -->

<!-- Blog Area -->
<div class="blog-area ptb-100">
    <div class="container">
        <div class="section-title-one">
            <span>Our Blogs</span>
            <h2>Our latest Blogs</h2>
        </div>

        <div class="blog-slider owl-carousel owl-theme">
            @foreach($recentBlogs as $blog)
            <div class="blog-card">
                <a href="{{ route('blog-details', $blog->id) }}">
                    <img src="{{ asset($blog->front_image)}}" alt="Shape">
                </a>
                <div class="b-card-text">
                    <span>{{ explode(' ', $blog->formatted_date)[0] }} , {{ explode(' ', $blog->formatted_date)[1] }}</span>
                    <span class="t-right"><i class='bx bx-user'></i> Admin</span>

                    <h3><a href="{{ route('blog-details', $blog->id) }}">{{$blog->blog_name}}</a></h3>


                    <div class="view-more">
                        <a href="{{ route('blog-details', $blog->id) }}">
                            View more
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Frequently Area -->
<div class="frequently-area bg-color-1 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="section-title-two text-center">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="col-lg-8">
            <div class="frequently-text">
                
                <div class="faq-contant">
                    <div class="timeline-line"></div>
                    <ul class="accordion" style="list-style: none;">
                        <li>
                            <h3 class="title active">Surgical Instruments</h3>
                            <div class="accordion-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p>To see the complete range of Surgical Instruments click the download button to get access to the PDF version catalog.</p>
                                        <a href="{{ route('contact')}}" class="default-btn {{ Request::routeIs('contact') ? 'active' : '' }}">
                                            Contacts Us
                                            <span></span>
                                        </a>
                                    </div>
                                    <img style="width: 300px; height: 200px;" src="{{ asset('medimax_assets/img/about/mission.png') }}" alt="">
                                </div>
                               
                            </div>
                        </li>
                        <li>
                            <h3 class="title">How long does the treatment and test take?</h3>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet...</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="title">How will I manage the payment process?</h3>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet...</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="title">What initiative to take in case of a complaint?</h3>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet...</p>
                            </div>
                        </li>
                        <li>
                            <h3 class="title">How will I get emergency help when needed?</h3>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet...</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- End Frequently Area -->



<div class="container-fluid">
    <a href="https://www.linkedin.com/company/medimaxint/posts/?feedView=allhttps://www.linkedin.com/company/medimaxint/posts/?feedView=all" target="_blank">
        <h2 style="font-weight: 500;" class="text-center"><i class="bx bxl-linkedin-square"></i>Medimax-int</h2>
    </a>

    <div class="row mt-4">
        @foreach($instagramPosts as $post)
        <div class="col-md-2 col-sm-4 col-4 p-1">
            <div class="instagram-post">
                <a href="https://www.linkedin.com/company/medimaxint/posts/?feedView=allhttps://www.linkedin.com/company/medimaxint/posts/?feedView=all" target="_blank">

                    <img src="{{ asset($post->image_path) }}" alt="{{ $post->name }}" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;" loading="lazy" />
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>



<script>
    // Function to handle modal opening and set ID
    document.addEventListener('DOMContentLoaded', function() {
        const modalTriggers = document.querySelectorAll('.open-modal');
        const catalogIdInput = document.getElementById('catalogId');

        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const catalogId = this.getAttribute('data-id');
                catalogIdInput.value = catalogId; // Set the catalog ID in the hidden input

                // If the modal toggle is through a button (like here), the modal should open automatically
                const modalToggle = new bootstrap.Modal(document.getElementById('feedbackModal'));
                modalToggle.show();
            });
        });
    });
</script>



@endsection