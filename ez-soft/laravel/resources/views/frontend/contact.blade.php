@extends('frontend.layout.master')
@section('title', 'EZ Soft')
@section('main-container')
    <style>
    iframe {
            width: 100%;
            /* Default for flexible layout */
            height: auto;
            border: none;
        }

        /* Extra small devices (phones, less than 576px) */
        @media (max-width: 575.98px) {
            iframe {
                width: 100%;
                height: 320px;
                /* 16:9 aspect ratio */
            }
        }

        /* Small devices (phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            iframe {
                width: 100%;
                height: 380px;
                /* 16:9 aspect ratio */
            }
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            iframe {
                width: 100%;
                height: 360px;
                /* 16:9 aspect ratio */
            }
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            iframe {
                width: 960px;
                height: 540px;
                /* 16:9 aspect ratio */
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            iframe {
                width: 1472px;
                height: 600px;
                /* Custom size provided */
            }
        }
    </style>
    <!--============= Header Section Ends Here =============-->
    <section class="page-header single-header bg_img oh" data-background="{{ asset('assets/frontend/images/front-images/contact-banner.jpg') }}">
        <div class="bottom-shape d-none d-md-block">
            <img src="{{ asset('assets/frontend/css/img/page-header.png') }}" alt="css">
        </div>
    </section>
    <!--============= Header Section Ends Here =============-->



    <!--============= Contact Section Starts Here =============-->
    <section class="contact-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header mw-100 cl-white">
                <h2 class="title">Contact Easy Soft</h2>
                <p>Whether you're looking for a demo, have a support question or a commercial query get in touch.</p>
            </div>
            <div class="row justify-content-center justify-content-lg-between">
                <div class="col-lg-7">
                    <div class="contact-wrapper">
                        <h4 class="title text-center mb-30">Get in Touch</h4>
                        <form class="contact-form" id="contact_form_submit">
                            <div class="form-group">
                                <label for="surename">Your Company Name</label>
                                <input type="text" placeholder="Enter Your Company Name" id="surename" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Full Name</label>
                                <input type="text" placeholder="Enter Your Full Name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" placeholder="Enter Your Phone Number " id="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email </label>
                                <input type="text" placeholder="Enter Your Email " id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Your Subject</label>
                                <input type="text" placeholder="Enter Your Subject " id="subject" required>
                            </div>
                            <div class="form-group mb-0">
                                <label for="message">Your Message </label>
                                <textarea id="message" placeholder="Enter Your Message" required></textarea>
                                <div class="form-check">
                                    <input type="checkbox" id="check" checked><label for="check">I agree to receive
                                        emails, newsletters and promotional messages</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-content">
                        <div class="man d-lg-block d-none">
                            <img src="{{ asset('assets/frontend/images/contact/man.png') }}" alt="bg">
                        </div>
                        <div class="contact-area">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{ asset('assets/frontend/images/contact/contact1.png') }}" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Email Us</h5>
                                    <a href="Mailto:info@ez soft.com">info@ez soft.com</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{ asset('assets/frontend/images/contact/contact2.png') }}" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Call Us</h5>
                                    <a href="Tel:565656855">+92 337 5451010</a>
                                    <a href="Tel:565656855">051 2323750</a>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="{{ asset('assets/frontend/images/contact/contact3.png') }}" alt="contact">
                                </div>
                                <div class="contact-contact">
                                    <h5 class="subtitle">Visit Us</h5>
                                    <p>Kashmir Mall, Kashmir road Sialkot</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Contact Section Ends Here =============-->


    <!--============= Map Section Starts Here =============-->
    <div class="map-section padding-bottom-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-header">
                        <div class="thumb">
                            <img src="{{ asset('assets/frontend/images/contact/earth.png') }}" alt="contact">
                        </div>
                        <h3 class="title">We Are Easy To Find</h3>
                    </div>
                    <div class="row justify-content-center">
                       
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.8969668230284!2d74.49622137549261!3d32.50218287377965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ee9c2eed57c5b%3A0x2e4797c0e7cb99c7!2sEZ%20Soft%20ERP%20Solutions!5e0!3m2!1sen!2s!4v1737012177714!5m2!1sen!2s"
                                width="1472" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============= Map Section Ends Here =============-->
@endsection
