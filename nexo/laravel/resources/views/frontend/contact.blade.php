@extends('frontend.layout.master')
@section('title', 'Black Bear')
@section('main-container')


        <!-- Start Breadcrumb 
        ============================================= -->
        <div class="breadcrumb-area text-center" style="background-image: url(assets/img/shape/10.jpg);">
            <div class="light-banner-active bg-gray bg-cover" style="background-image: url(assets/img/shape/6.jpg);"></div>
            <div class="container">
                <div class="breadcrumb-item">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <h1>Get In Touch</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                                    <li class="active">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start Contact Us 
        ============================================= -->
        <div class="contact-area relative">
            <div class="container">
                <div class="contact-style-one-items">
                    <div class="row">
                        <div class="col-tact-stye-one col-lg-4">
                            <div class="contact-style-one-info">
                                <ul class="contact-address">
                                    <li>
                                        <a class="phone-link" href="tel:+4733378901"><i class="fas fa-user-headset"></i> +4733378901</a>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <h4>Location</h4>
                                            <p>
                                                55 Main Street, The Grand Avenue <br> 2nd Block, New York City
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <h4>Official Email</h4>
                                            <a href="mailto:info@digital.com.com">info@digital.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <ul class="social-link">
                                                <li>
                                                    <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>
                                                    <a class="twitter" href="#" target="_blank"><img src="assets/img/icon/twitter-dark.png" alt="Image Not Found"></a>
                                                </li>
                                                <li>
                                                    <a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-tact-stye-one col-lg-7 offset-lg-1">
                            <div class="contact-form-style-one">
                                <h4 class="sub-title">Have Questions?</h4>
                                <h2 class="title">Send us a Massage</h2>
                                <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group comments">
                                                <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" name="submit" id="submit">
                                                <i class="fa fa-paper-plane"></i> Get in Touch
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Alert Message -->
                                    <div class="col-lg-12 alert-notification">
                                        <div id="message" class="alert-msg"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->


        <!-- Start Map 
        ============================================= -->
        <div class="maps-area bg-gray overflow-hidden">
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48388.929990966964!2d-74.00332!3d40.711233!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1653598669477!5m2!1sen!2sus"></iframe>
            </div>
        </div>
        <!-- End Map -->





















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


    <main>

        <!-- ==================== Start Slider ==================== -->

        <header class="page-header section-padding sub-bg">
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="caption">
                            <h6 class="sub-title">Contact Us</h6>
                            <h1 class="fz-55">Let’s create
                                something exceptional together!
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="text">
                            <p>Since 2008, Black Bear has crafted and exported premium casual wear, fitness apparel, and
                                boxing gear with a focus on quality, trust, and customer satisfaction. We proudly serve
                                clients across the globe with dedication and care.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start Contact ==================== -->

        <section class="contact-crev section-padding">
            <div class="container">
                <div class="row">
                      @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                    <div class="col-lg-5">
                        <div class="sec-lg-head mb-80">
                            <h6 class="dot-titl-non mb-10">Get In Touch</h6>
                            <h2 class="fz-50">Let's get in <br> touch with us.</h2>
                            <p class="fz-15 mt-10">For any inquiries or questions, please feel free to reach out to us. We’re here to help and look forward to hearing from you.</p>
                            <div class="phone fz-30 fw-600 mt-30 underline">
                                <a href="#0"> +92 320 8144481</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 valign">
                        <div class="full-width">
                            <form method="post" enctype="multipart/form-data" action="{{ route('submit.form') }}">
                                @csrf
                                <div class="messages"></div>

                                <div class="controls row">

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_name" type="text" name="name" placeholder="Name"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-30">
                                            <input id="form_email" type="email" name="email" placeholder="Email"
                                                required="required">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <input id="form_subject" type="text" name="phone" placeholder="Subject">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="comment" placeholder="Message" rows="4" required="required"></textarea>
                                        </div>
                                        <div class="mt-30">
                                            <button type="submit" class="butn butn-md  radius-30">
                                                <span class="text">Let's Talk</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


        <!--============= Map Section Starts Here =============-->
        <div class="map-section padding-bottom-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                       <div class="sec-lg-head mb-10">
                            <h6 class="dot-titl-non mb-10">Meet Us</h6>
                            <h2 class="fz-50">We are Easy to Find</h2>
                        </div>
                        <div class="row justify-content-center">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.090440976412!2d74.5204507!3d32.497011799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eebac190d768b%3A0xffd50219b05af727!2sBlack%20Bear%20Industries!5e0!3m2!1sen!2sae!4v1750494627165!5m2!1sen!2sae"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============= Map Section Ends Here =============-->


    </main>








    @push('scripts')
        <!-- jQuery -->
        <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/jquery-migrate-3.4.0.min.js') }}"></script>

        <!-- plugins -->
        <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>


        <!-- custom scripts -->
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
    @endpush















@endsection
