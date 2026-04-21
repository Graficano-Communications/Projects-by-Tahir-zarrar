@extends('layouts.master')

@section('meta_title', 'Digital Marketing services| web development | SEO')
@section('meta_description',
    'Graficano is a Sialkot-based digital marketing agency serving to fit your imagined concept
    into reality. We are functioning in web development, digital marketing services, video editing and SEO, etc.')
@section('meta_tags', 'web development, digital marketing services, video editing, SEO services, seo')

@section('SpecificStyles')



@stop

@section('content')
<style>
    select{
            outline: none;
    height: 60px;
    width: 100%;
    line-height: 60px;
    font-size: 16px;
    padding-left: 26px;
    padding-right: 26px;
    border-radius: 8px;
    border: 1px solid rgb(246, 246, 249);
        background: rgb(29, 29, 31);
    border-color: rgb(29, 29, 31);
        border-radius: 8px;
    }
</style>

    <!-- hero area start -->
    <div class="tp-contact-us-ptb p-relative">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="123" height="130" viewBox="0 0 123 130" fill="none">
                    <path
                        d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891"
                        stroke="white" stroke-width="1.5" />
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3">
                            <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                                <span class="tp-section-subtitle pre text-white tp_fade_anim">contact us</span>
                                <div class="ar-about-us-4-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                        fill="none">
                                        <rect y="4" width="80" height="1" fill="#fff" />
                                        <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <h3 class="tp-career-title text-white pb-30">Your creative
                                <span class="shape-1"><img src="{{ asset('assets/img/about-us/about-us-4/about-us-4-shape-2.png') }}"
                                        alt=""></span> <br>journey starts here
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <div class="tp-faq-text tp_fade_anim">
                            <p class="text-white m-0">At Graficano, we turn ideas into visuals that people remember. We craft clean designs that match your goals and help your brand stand out.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-contact-us-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tp-contact-us-text smooth">
                            <a href="#down">
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewBox="0 0 15 21"
                                        fill="none">
                                        <rect x="6.25781" width="1.5" height="21" fill="#F5F7F5" />
                                        <path d="M14.1641 13.6257C10.28 13.6257 7.13714 16.9239 7.13714 21" stroke="#F5F7F5"
                                            stroke-width="1.5" stroke-miterlimit="10" />
                                        <path d="M7.13672 21C7.13672 16.9239 3.99384 13.6257 0.109797 13.6257"
                                            stroke="#F5F7F5" stroke-width="1.5" stroke-miterlimit="10" />
                                    </svg> Scroll to explore</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        {{-- <div class="tp-contact-us-text d-none d-md-block text-md-end">
                            <p>See in Map our Office</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->


    <!-- contact area start -->
    <div class="tp-contact-us-info-area pb-120">
        <div class="container container-1750">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="tp-contact-us-content text-center " data-speed="1.2">
                        <div class="tp-contact-us-info-details mt-2">
                            <h4 class="tp-contact-us-info-title">Address</h4>
                            <div class="mb-2">
                                <img src="{{ asset('assets/images/home/pakistan-flag.webp') }}" alt="Address Icon"
                                    style="width: 60px; height: 35px;">
                            </div>
                            <p class="text-white">Kashmir Mall, Near
                                Passport Office Kashmir
                                Road, Sialkot</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
                    <div class="tp-contact-us-content text-center mt-60" data-speed="1.2">

                        <div class="tp-contact-us-info-details mt-2">

                            <h4 class="tp-contact-us-info-title">Let's Talk</h4>
                            <div class="mb-2">
                                <img src="{{ asset('images/contact/talk.webp') }}" alt="Address Icon"
                                    style="width: 40px; height: 40px;">
                            </div>
                            <a href="tel:+923129320163">+92 312 9320163</a>
                            <a href="tel:+923129320163">+92 310 6222560</a>
                            <a href="tel:0523253684">052 3253684</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
                    <div class="tp-contact-us-content text-center mt-60" data-speed=".9">

                        <div class="tp-contact-us-info-details mt-2">

                            <h4 class="tp-contact-us-info-title">E-mail Us</h4>
                            <div class="mb-2">
                                <img src="{{ asset('images/contact/email.webp') }}" alt="Address Icon"
                                    style="width: 40px; height: 40px;">
                            </div>
                            <a href="mailto:zaka@graficano.com">zaka@graficano.com</a>
                            <a href="mailto:info@graficano.com">info@graficano.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 mb-30">
                    <div class="tp-contact-us-content text-center mt-60" data-speed="1.2">

                        <div class="tp-contact-us-info-details mt-2">

                            <h4 class="tp-contact-us-info-title">Working Hours</h4>
                            <div class="mb-2">
                                <img src="{{ asset('images/contact/working-hours.webp') }}" alt="Address Icon"
                                    style="width: 40px; height: 40px;">
                            </div>
                            <p class="text-white">Monday to Saturday</p>
                            <p class="text-white">9:00 AM to 6:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
                    <div class="tp-contact-us-content text-center " data-speed="1.2">
                        <div class="tp-contact-us-info-details mt-2">
                            <h4 class="tp-contact-us-info-title">Address</h4>
                            <div class="mb-2">
                                <img src="{{ asset('assets/images/home/usa-flag.webp') }}" alt="Address Icon"
                                    style="width: 60px; height: 35px;">
                            </div>
                            <p class="text-white">27 Durham drive Dix
                                Hills NY 11746</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->


    <!-- contact form area start -->
    <div class="tp-contact-form-ptb pb-140">
        <div class="container container-1230">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-contact-form-heading tp_fade_anim mb-50">
                        <div class="ar-about-us-4-title-box shape-color  d-flex align-items-center mb-15">
                            <span class="tp-section-subtitle pre">Contact Us</span>
                            <div class="ar-about-us-4-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9"
                                    fill="none">
                                    <rect y="4" width="80" height="1" fill="#fff"></rect>
                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#fff" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="tp-section-title lts">Let's make <br>
                            your brand <br>
                            brilliant!</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-contact-form-wrap">
                        <form id="contact-form" action="{{ route('send_quiry') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Full name*</label>
                                        <input name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Email address*</label>
                                        <input name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Phone no*</label>
                                        <input name="phone" type="tel">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Website / Comapany</label>
                                        <input name="company" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Comapany Origin</label>
                                        <input name="country_origin" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">

                                        <select class="medium-input bg-dark mb-0  text-white" name="service"
                                            required>
                                            <option value="" disabled selected>Select a service</option>
                                            <option value="video_photography">VIDEO & PHOTOGRAPHY</option>
                                            <option value="design_illustration">Design & Illustration</option>
                                            <option value="content_creation">Content Creation</option>
                                            <option value="web_digital">Web & Digital</option>
                                            <option value="printing_packaging">Printing & Packaging</option>
                                            <option value="printing_packaging">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>How Can We Help You*
                                        </label>
                                        <textarea name="comment"></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LenC3EpAAAAAErPM9JSBc_vFx2AwcTadArUZ_Pq">
                                    </div>
                                    <div class="d-flex align-items-center gap-3 mt-3">
                                        <input type="checkbox" name="terms_condition" id="terms_condition"
                                            value="1" required
                                            class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <span for="terms_condition" class="text-small d-inline-block align-top w-85 text-white">I
                                            accept the terms & conditions and I understand that my data will be hold
                                            securely in accordance with the <a href="#" target="_blank"
                                                class="text-decoration-underline text-extra-dark-gray">privacy
                                                policy</a>.</span>
                                    </div>
                                    
                                    <div class="tp-contact-form-btn mt-3">
                                        <button class="w-100" type="submit">
                                            <span>
                                                <span class="text-1">Send Message</span>
                                                <span class="text-2">Send Message</span>
                                            </span>
                                        </button>
                                        <p class="ajax-response mt-5"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->





@endsection

@section('SpecificScripts')

@stop
