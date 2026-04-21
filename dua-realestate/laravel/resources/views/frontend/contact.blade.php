@extends('frontend.layout.master')
@section('title' ,'Dua Real Estate')
@section('main-container')
    <!-- start page title -->
    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-base-color">Build relationships</h1>
                    <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Have questions? <span class="fw-700 text-highlight d-inline-block">Ready to assist!<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                </div>
                <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                    <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>At Dua Real Estate, we specialize in selling properties and are ready to help you find your perfect property.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-hidden p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 position-relative">
                    <img src="{{ asset('assets/frontend/images/contact-us (1).jpg') }}" alt="" class="w-100">
                    <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 sm-fs-200 xs-fs-140 ls-minus-5px xs-ls-minus-2px position-absolute right-minus-50px lg-right-minus-0px bottom-minus-80px md-bottom-minus-60px xs-bottom-minus-40px text-white text-outline text-outline-width-3px" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">contact</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->  
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center align-items-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                <div class="col-lg-6 pt-8 pb-8 text-center text-sm-start"> 
                    <h6 class="alt-font fw-700 text-dark-gray mb-15px">Pakistan</h6>
                    <div class="row row-cols-1 row-cols-sm-2 mb-10">
                        <div class="col last-paragraph-no-margin xs-mb-20px">
                            <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px">Dua Real Estate - Sialkot</span>
                            <p class="w-80 lg-w-100">Office no.A-01 Hassan center opposite  PSO PETROL PUMP IQBAL TOWN DEFENCE  ROAD SIALKOT PAKISTAN</p>
                        </div>
                        <div class="col">
                            <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px">Get in touch</span>
                            <a href="tel:+923251800059"><span>M.Ishfaq : </span> 03 251 800 059</a><br>
                            <a href="tel:+923009612790"><span>Malik Nadeem : </span>  03 009 612 790</a><br>
                            <a href="tel:+923111000269"><span>UAN : </span>  03 111 000 269</a><br>
                            <a href="mailto:info@dua-realestate.com" class="text-decoration-line-bottom text-dark-gray">info@dua-realestate.com</a><br>
                            <a href="mailto:duarealestate@gmail.com" class="text-decoration-line-bottom text-dark-gray">duarealestate@gmail.com</a>
                        </div>
                    </div>
                    {{-- <h6 class="alt-font fw-700 text-dark-gray mb-15px">New york</h6>
                    <div class="row row-cols-1 row-cols-sm-2">
                        <div class="col last-paragraph-no-margin xs-mb-20px">
                            <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px">Crafto - USA</span>
                            <p class="w-80 lg-w-100">27 Eden Walk Eden Centre,<br> Orchard, New York, USA</p>
                        </div>
                        <div class="col">
                            <span class="fs-18 alt-font fw-600 d-block text-dark-gray mb-5px"> Get in touch</span>
                            <a href="tel:12345678910">03 111 000 269</a><br>
                            <a href="mailto:duarealestate@gmail.com" class="text-decoration-line-bottom text-dark-gray">duarealestate@gmail.com</a>
                        </div>
                    </div> --}}
                </div> 
                <div class="col-lg-6 align-self-start contact-form-style-03 position-relative"> 
                    <div class="bg-white box-shadow-double-large p-12 lg-p-9 border-radius-10px">
                        <h3 class="fw-700 alt-font text-dark-gray mb-30px sm-mb-20px">How can help you?</h3>
                        <!-- start contact form -->
                        <form action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-medium-gray opacity-6"><i class="bi bi-emoji-smile"></i></span>
                                <input class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control required" type="text" name="name" placeholder="Your name*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon medium-gray opacity-6"><i class="bi bi-envelope"></i></span>
                                <input class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control required" type="email" name="email" placeholder="Your email address*" />
                            </div>
                            <div class="position-relative form-group mb-20px">
                                <span class="form-icon text-medium-gray opacity-6"><i class="bi bi-telephone"></i></span>
                                <input class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control" type="tel" name="phone" placeholder="Your phone" />
                            </div>
                            <div class="position-relative form-group form-textarea mt-15px mb-0"> 
                                <textarea class="ps-0 border-radius-0px bg-transparent border-color-extra-medium-gray form-control" name="comment" placeholder="Your message" rows="3"></textarea>
                                <span class="form-icon medium-gray opacity-6"><i class="bi bi-chat-square-dots"></i></span>
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-medium btn-base-color btn-round-edge mt-35px  fw-600" type="submit">Send message</button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>
                        
                        <!-- end contact form -->
                    </div>
                </div> 
            </div> 
        </div>
    </section>
    <!-- end section --> 
    <!-- start section -->
    <section class="bg-very-light-gray p-0">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-12 p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.4637273143426!2d74.50276038072005!3d32.48703273117783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea1bd6a6456d%3A0xbc783c56ce04a31b!2sDefence%20Road%2C%20Sialkot%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1731567272793!5m2!1sen!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>                
            </div> 
        </div>
    </section>
    <!-- end section -->  
    <!-- start section -->
    <section class="overlap-height half-section">
        <div class="container overlap-gap-section"> 
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-01 md-mb-40px">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <img src="{{ asset('assets/frontend/images/pride.png') }}" class="h-85px" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Pride in Our Work</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-01 md-mb-40px">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <img src="{{ asset('assets/frontend/images/promise.png') }}" class="h-85px" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Promises Delivered</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-01 xs-mb-40px">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <img src="{{ asset('assets/frontend/images/supreme.png') }}" class="h-85px" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Partnering with the Best</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-01">
                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <img src="{{ asset('assets/frontend/images/transparency.png') }}" class="h-85px" alt="">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-19 lh-26 alt-font text-dark-gray fw-600 w-75 lg-w-100">Transparency in dealings.</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>  
        </div>
    </section>
    <!-- end section -->
@endsection