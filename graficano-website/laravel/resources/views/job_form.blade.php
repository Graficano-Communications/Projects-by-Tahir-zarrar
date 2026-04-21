@extends('layouts.master')

@section('meta_title', 'Hiring | digital marketing services agency')
@section('meta_description',
    'From Digital Marketing to website development, we’re here for you. We’re your next digital
    partner.')
@section('meta_tags', 'digital marketing, website development, seo services')


@section('content')
<style>
    .you p {
        color: #ffffff;
    }
    .you ul {
        color: #ffffff;
    }
</style>


    <!-- hero area start -->
    <div class="ar-hero-area p-relative" data-background="{{ asset('assets/img/team/team-bg.png') }}">
        <div class="tp-career-shape-1">
            <span><svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 84 84" fill="none">
                    <path
                        d="M36.3761 0.5993C40.3065 8.98556 47.3237 34.898 32.8824 44.3691C25.3614 49.0997 9.4871 52.826 1.7513 31.3747C-1.16691 23.2826 5.38982 15.9009 20.5227 20.0332C29.2536 22.4173 50.3517 27.8744 60.9 44.2751C66.4672 52.9311 71.833 71.0287 69.4175 82.9721M69.4175 82.9721C70.1596 77.2054 74.079 66.0171 83.8204 67.3978M69.4175 82.9721C69.8033 79.1875 67.076 70.1737 53.0797 64.3958M49.1371 20.8349C52.611 22.1801 63.742 28.4916 67.9921 39.9344"
                        stroke="#030303" stroke-width="1.5" />
                </svg></span>
        </div>
        <div class="container container-1230">
            <div class="ar-about-us-4-hero-ptb">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="ar-hero-title-box tp_fade_anim" data-delay=".3">
                            <span class="tp-application-subtitle mb-25">Full time</span>
                            <h3 class="tp-career-title pb-30">{{ $Career->title }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero area end -->

    <!-- tp-application-aera-start -->
    <div class="tp-application-aera pb-80">
        <div class="container justify-content-center">
            <div class="row justify-content-center">
                @if ($errors->any())
                    <div class=" col-12 col-lg-9">
                        <div class="alert alert-danger ">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="col-lg-12">
                    
                </div>
                <div class="col-lg-10">
                    <div class="tp-contact-form-wrap tp-application-form-wrap " id="contact_Section">
                        <div class="pt-100 you">{!! $Career->description !!}</div>
                        <form id="contactForm" action="{{ route('hiring_form_submit') }}" method="POST"
                            enctype="multipart/form-data" accept-charset="UTF-8">
                            @csrf
                            <div class="row">

                                <!-- Job Position -->
                                <div class="col-lg-12 pt-100">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Position Applying For *</label>
                                        <input type="text" name="job_name" value="{{ $Career->title }}" readonly>
                                    </div>
                                </div>

                                <!-- Candidate Name -->
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Your Name*</label>
                                        <input name="candidate_name" required type="text">
                                    </div>
                                </div>

                                <!-- Candidate Email -->
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Your Email Address*</label>
                                        <input type="email" name="candidate_email" required>
                                    </div>
                                </div>

                                <!-- Mobile -->
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Phone Number*</label>
                                        <input type="number" name="candidate_mobile" required>
                                    </div>
                                </div>

                                <!-- DOB -->
                                <div class="col-lg-6">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Date of Birth*</label>
                                        <input  type="text" name="candidate_dob" required>
                                    </div>
                                </div>

                                <!-- Gender -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Gender*</label><br>
                                        @php $gender = json_decode($Career->gender); @endphp
                                        @if (in_array('Male', $gender))
                                            <label><input type="radio" name="candidate_gender" value="Male" required>
                                                Male</label>&nbsp;&nbsp;
                                        @endif
                                        @if (in_array('Female', $gender))
                                            <label><input type="radio" name="candidate_gender" value="Female" required>
                                                Female</label>
                                        @endif
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Permanent Address*</label>
                                        <input type="text" name="candidate_address" placeholder="Permanent Address"
                                            required>
                                    </div>
                                </div>

                                <!-- Cover Letter -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Why did you decide to apply here and why should we select you?* (max 100
                                            words)</label>
                                        <textarea name="candidate_cover_letter" required></textarea>
                                    </div>
                                </div>

                                <!-- Project -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Tell us about a project that you worked on and felt proud of it</label>
                                        <textarea name="candidate_project"></textarea>
                                    </div>
                                </div>

                                <!-- Portfolio -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Share your Portfolio (Behance, Dribbble, etc)*</label>
                                        <input type="url" name="candidate_portfolio" placeholder="https://example.com"
                                            required>
                                    </div>
                                </div>

                                <!-- Salary -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Your current salary & salary expectations*</label>
                                        <textarea name="candidate_salary" required></textarea>
                                    </div>
                                </div>

                                <!-- Experience -->
                                <div class="col-lg-12 my-3">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>How many years of experience do you have?*</label>
                                        <input type="text" name="candidate_experience"
                                            placeholder="Write Fresh if no experience">
                                    </div>
                                    <div id="company-container"></div>
                                    <button type="button" class="btn btn-sm btn-success" onclick="addCompany()">Add
                                        Experience</button>
                                </div>

                                <!-- LinkedIn -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>Your LinkedIn URL?</label>
                                        <input type="url" name="candidate_linkedin"
                                            placeholder="https://linkedin.com/in/...">
                                    </div>
                                </div>

                                <!-- How did you hear -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label>How Did You Hear About This Position?*</label><br>
                                        <label><input type="radio" name="how_he_hear" value="Linkedin" required>
                                            Linkedin</label><br>
                                        <label><input type="radio" name="how_he_hear" value="Instagram">
                                            Instagram</label><br>
                                        <label><input type="radio" name="how_he_hear" value="Facebook">
                                            Facebook</label><br>
                                        <label><input type="radio" name="how_he_hear" value="Google Search"> Google
                                            Search</label><br>
                                        <label><input type="radio" name="how_he_hear" value="Other"
                                                id="how_he_hear_other"> Other</label><br>
                                        <div style="display:none;" id="how_he_hear_textbox_div">
                                            <input type="text" id="how_he_hear_textbox" placeholder="Please specify">
                                        </div>
                                    </div>
                                </div>

                                <!-- CV Upload -->
                                <div class="col-lg-12">
                                    <div class="tp-application-upload mb-15">
                                        <span>Upload your CV *</span>
                                        <input type="file" name="candidate_cv" accept=".doc,.docx,.pdf,.jpg,.jpeg"
                                            required>
                                        <p style="font-size:12px;color:red">Allowed: DOC, PDF, JPG. Max size: 5 MB.</p>
                                    </div>
                                </div>

                                <!-- Terms -->
                                <div class="col-lg-12">
                                    <div class="tp-contact-form-input mb-20">
                                        <label><input type="checkbox" name="terms_condition" value="1" required>
                                            I accept the <a href="/privacy-policy" target="_blank">terms &
                                                conditions</a>.</label><br>
                                        <label><input type="checkbox" name="general_policies" value="1" required>
                                            I have read the Company’s General Policies.</label>
                                    </div>
                                </div>

                                <!-- Captcha -->
                                <div class="col-lg-12">
                                    <div class="g-recaptcha mb-20"
                                        data-sitekey="6LdUKSgqAAAAAI8M8XQmMUFYK0W_Zeh8R0CQQ54k"></div>
                                </div>

                                <!-- Submit -->
                                <div class="col-lg-12">
                                    <div class="tp-application-btn mt-10">
                                        <button type="submit" class="tp-btn-yellow-green green-solid btn-60">
                                            <span>
                                                <span class="text-1">Submit Now</span>
                                                <span class="text-2">Submit Now</span>
                                            </span>
                                            <i>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 11L11 1M11 1H1M11 1V11" stroke="currentcolor"
                                                        stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tp-application-aera-end -->















 


 

    {{-- <section class="half-section  text-center pb-0"
        style="background-image:url('{{ asset('assets/images/team/our-team-bg2.jpg') }}');">
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <!-- <h2 class="text-uppercase text-yellow alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                            Our Blogs
                        </h2> -->
                    <div class="d-flex justify-content-center">
                        <!-- <img src="http://127.0.0.1:8000/assets/images/footer-Logo.png" alt="" style="height:80px" /> -->
                        <h3
                            class="alt-font text-Black font-weight-600 margin-35px-bottom md-margin-25px-bottom text-center">
                            Application Form !</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-2 padding-eleven-lr xl-padding-two-lr xs-no-padding-lr" data-parallax-background-ratio="0.5">

        <div class="container">
            <div class="row justify-content-center">
                @if ($errors->any())
                    <div class=" col-12 col-lg-9">
                        <div class="alert alert-danger ">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <!-- <div class="col-12 col-md-5 cover-background sm-h-350px wow animate__fadeInLeft" data-wow-delay="0.4s" ></div> -->
                        <div class="col-12 col-md-12  wow animate__fadeIn" data-wow-delay="0.4s" id="contact_Section">

                            <form id="contactForm" action="{{ route('hiring_form_submit') }}" method="POST"
                                enctype="multipart/form-data" accept-charset="UTF-8" class="alt-font text-white">
                                @csrf
                                <div class="col margin-2-rem-bottom sm-margin-25px-bottom">
                                    <div
                                        class="bg-white box-shadow-medium padding-4-rem-lr padding-2-half-rem-tb padding-4-rem-tb sm-box-shadow-none sm-border-bottom border-color-medium-gray">
                                        <span class="text-dark-gray  font-weight-600">Position Applying for
                                            *</span>
                                        <br />
                                        <br />


                                        <h6
                                            class="alt-font text-dark-gray text-uppercase font-weight-600 margin-35px-bottom md-margin-25px-bottom">
                                            {{ $Career->title }}</h6>
                                        <input type="text" name="job_name" hidden value="{{ $Career->title }}" />
                                    </div>
                                    <br />
                                    <div
                                        class="bg-white box-shadow-medium padding-4-rem-lr padding-2-half-rem-tb padding-4-rem-tb sm-box-shadow-none sm-border-bottom border-color-medium-gray">
                                        <span class="text-dark-gray  font-weight-600"> Name </span>
                                        <input
                                            class="  margin-25px-bottom required input-border-bottom border-color-extra-dark-white bg-transparent"
                                            type="text" name="candidate_name" required>

                                        <span class="text-dark-gray  font-weight-600"> Email * </span>
                                        <input
                                            class="  margin-25px-bottom required input-border-bottom border-color-extra-dark-white bg-transparent"
                                            type="email" name="candidate_email" required>

                                        <span class="text-dark-gray  font-weight-600">Mobile no * </span>
                                        <input
                                            class="  margin-25px-bottom required input-border-bottom
                                         border-color-extra-dark-white bg-transparent"
                                            type="number" name="candidate_mobile" required>

                                        <span class="text-dark-gray  font-weight-600">Date of birth * </span>
                                        <input type="date"
                                            class="  margin-25px-bottom required input-border-bottom border-color-extra-dark-white bg-transparent"
                                            name="candidate_dob" required>
                                        <br />
                                        <div>
                                            <span class="text-dark-gray"> Gender </span>
                                            <br />
                                            @php
                                                // Decode the gender JSON array
                                                $gender = json_decode($Career->gender);
                                            @endphp

                                            @if (in_array('Male', $gender))
                                                <span class="text-dark-gray"> Male
                                                    <input type="radio"
                                                        class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                                        name="candidate_gender" value="Male" checked
                                                        placeholder="Date of birth">
                                                </span>
                                            @endif

                                            @if (in_array('Female', $gender))
                                                <span class="text-dark-gray"> Female
                                                    <input type="radio"
                                                        class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                                        name="candidate_gender" value="Female" checked
                                                        placeholder="Date of birth">
                                                </span>
                                            @endif
                                        </div>
                                        <span class="text-dark-gray  font-weight-600">Permanent Address * </span>
                                        <input type="text"
                                            class="  margin-25px-bottom required input-border-bottom border-color-extra-dark-white bg-transparent"
                                            name="candidate_address" placeholder="Permanent Address">

                                    </div>

                                </div>
                                <div
                                    class="bg-white box-shadow-medium padding-4-rem-lr padding-2-half-rem-tb padding-4-rem-tb sm-box-shadow-none sm-border-bottom border-color-medium-gray">

                                    <span class="text-dark-gray font-weight-600">Upload your CV</span>
                                    <input type="file"
                                        class="s margin-0px-bottom  required border-none  bg-transparent"
                                        name="candidate_cv" style="margin:0px !important;"
                                        accept=".doc, .docx, .pdf, .jpg, .jpeg" max-size="5242880">
                                    <p class="text-dark-red margin-25px-bottom" style="font-size:12px">Possible file
                                        types:
                                        doc, PDF, JPG. Maximum
                                        file
                                        size: 5 MB.</p>
                                    <br />
                                    <br />
                                    <br />
                                    <br />

                                    <span class="text-dark-gray font-weight-500">Your Portfolio link</span>
                                    <input type="text"
                                        class="margin-25px-bottom input-border-bottom border-color-extra-dark-white bg-transparent"
                                        name="candidate_portfolio"
                                        placeholder="e.g. Behance / Instagram / Pinterest / Website" pattern="https?://.+"
                                        title="Please enter a valid URL">
                                    <div class="col ">
                                        <span class="text-dark-gray font-weight-600">Cover Letter </span>
                                        <textarea class="medium-textarea h-100px  required  border-color-extra-dark-white bg-transparent"
                                            name="candidate_cover_letter" placeholder="Your message"></textarea>
                                        <p class="text-dark-gray margin-25px-bottom" style="font-size:12px">not more than
                                            100 words. Don't use the
                                            AI generated text</p>
                                        <br />
                                    </div>
                                </div>
                                <br />
                                <div
                                    class="bg-white box-shadow-medium padding-4-rem-lr padding-2-half-rem-tb padding-4-rem-tb sm-box-shadow-none sm-border-bottom border-color-medium-gray">

                                    <span class="text-dark-gray font-weight-500">How many years of Experience do u have ?
                                    </span>
                                    <input type="number"
                                        class="   input-border-bottom border-color-extra-dark-white bg-transparent"
                                        name="candidate_experience">
                                    <p class="text-dark-gray margin-25px-bottom" style="font-size:10px">
                                        Write Fresh if u don't have not any Experience</p>
                                    <div id="company-container">
                                        <div class="company-details">
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-medium btn-success mb-0 " style="float:right"
                                        onclick="addCompany()">Add Experience</button>
                                    <br />
                                    <!-- <span class="text-dark-gray font-weight-500">Your Last Company </span>
                                        <input type="text"
                                            class="  margin-25px-bottom  input-border-bottom border-color-extra-dark-white bg-transparent"
                                            type="text" name="candidate_last_company">
                                        <div class="row">
                                            <div class="col-6"> <span class="text-dark-gray font-weight-500">Start Date</span>
                                                <input type="date"
                                                    class="  margin-25px-bottom  input-border-bottom border-color-extra-dark-white bg-transparent"
                                                    name="candidate_last_company_number">
                                            </div>
                                            <div class="col-6">
                                                <span class="text-dark-gray font-weight-500">End date</span>
                                                <input type="date"
                                                    class="  margin-25px-bottom  input-border-bottom border-color-extra-dark-white bg-transparent"
                                                    name="candidate_last_company_number">
                                            </div>
                                        </div> -->
                                    <span class="text-dark-gray font-weight-500">Your Linkedin Url ?</span>
                                    <input type="text"
                                        class="  margin-25px-bottom  input-border-bottom border-color-extra-dark-white bg-transparent"
                                        name="candidate_linkedin">

                                    <div
                                        class="bg-white box-shadow-medium padding-4-rem-lr padding-2-half-rem-tb padding-4-rem-tb sm-box-shadow-none sm-border-bottom border-color-medium-gray">
                                        <span class="text-dark-gray  font-weight-600">How Did You Hear About This Position?
                                            *</span>
                                        <br /><br />

                                        <input type="radio" id="how_he_hear_linkedin"
                                            class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                            name="how_he_hear" value="Linkedin">
                                        &nbsp;&nbsp;<span class="text-dark-gray">Linkedin</span>
                                        <br />

                                        <input type="radio" id="how_he_hear_instagram"
                                            class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                            name="how_he_hear" value="Instagram">
                                        &nbsp;&nbsp;<span class="text-dark-gray">Instagram</span>
                                        <br />

                                        <input type="radio" id="how_he_hear_facebook"
                                            class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                            name="how_he_hear" value="Facebook">
                                        &nbsp;&nbsp;<span class="text-dark-gray">Facebook</span>
                                        <br />

                                        <input type="radio" id="how_he_hear_google"
                                            class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                            name="how_he_hear" value="Google Search">
                                        &nbsp;&nbsp;<span class="text-dark-gray">Google Search</span>
                                        <br />

                                        <input type="radio" id="how_he_hear_other"
                                            class="margin-25px-bottom required border-color-extra-dark-white bg-transparent"
                                            name="how_he_hear" value="Other">
                                        &nbsp;&nbsp;<span class="text-dark-gray">Other</span>
                                        <br />

                                        <div style="display:none;" id="how_he_hear_textbox_div">
                                            <input type="text"
                                                class="margin-25px-bottom input-border-bottom required border-color-extra-dark-white bg-transparent"
                                                id="how_he_hear_textbox" placeholder="Please specify">
                                        </div>
                                    </div>

                                </div>
                                <br />
                                <div
                                    class="bg-white box-shadow-medium padding-4-rem-lr padding-2-half-rem-tb padding-4-rem-tb sm-box-shadow-none sm-border-bottom border-color-medium-gray">

                                    <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                        class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right"
                                        required>
                                    <span for="terms_condition"
                                        class="  margin-25px-bottom text-small d-inline-block align-top w-85 "
                                        style="color:#626262 !important">I accept
                                        the terms & conditions and I understand that my data will be hold securely in
                                        accordance with the <a href="/privacy-policy" target="_blank"
                                            class="text-decoration-underline text-dark-gray">privacy policy</a>.</span>


                                    <br />
                                    <input type="checkbox" name="general_policies" id="general_policies" value="1"
                                        class=" margin-25px-bottom terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right"
                                        required>

                                    <span for="general_policies" class="text-small d-inline-block align-top w-85 "
                                        style="color:#626262 !important">I have read the
                                        <a href="/privacy-policy" target="_blank"
                                            class="text-decoration-underline text-dark-gray">Company's General</a>
                                    </span>


                                    <!--<div style="margin-bottom:20px;margin-left:0px;" id="g-recaptcha-response" name="g-recaptcha-response"-->
                                    <!--    class=" margin-25px-top col-lg-12 col-md-12 col-sm-12 col-xs-12 g-recaptcha"-->
                                    <!--    data-sitekey="6LdUKSgqAAAAAI8M8XQmMUFYK0W_Zeh8R0CQQ54k"></div>-->

                                    <div class="g-recaptcha" data-sitekey="6LdUKSgqAAAAAI8M8XQmMUFYK0W_Zeh8R0CQQ54k">
                                    </div>



                                    <div class="col  text-end">
                                        <input type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium btn-warning mb-0 " type="submit">Send
                                            Message</button>
                                    </div>
                                </div>

                        </div>
                        <div class="form-results d-none"></div>
                        </form>


                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}















@endsection

@section('SpecificScripts')
    <script>
        $(document).ready(function() {
            $('input[name="how_he_hear"]').change(function() {
                if ($('#how_he_hear_other').is(':checked')) {
                    $('#how_he_hear_textbox_div').show();
                } else {
                    $('#how_he_hear_textbox_div').hide();
                }
            });
        });
    </script>


   <script>
    function addCompany() {
        var container = document.getElementById("company-container");
        var newCompany = document.createElement("div");
        newCompany.classList.add("company-details", "tp-contact-form-input", "mb-20", "p-3", "border", "rounded");

        newCompany.innerHTML = `
            <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="fw-bold text-white">Your Last Company</span>
                <button type="button" class="btn btn-sm btn-danger" onclick="removeCompany(this)">Remove</button>
            </div>
            <input type="text" class="form-control mb-3" name="candidate_last_company[]" placeholder="Company Name" required>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Start Date</label>
                    <input type="date" class="form-control" name="candidate_last_company_start_date[]" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">End Date</label>
                    <input type="date" class="form-control" name="candidate_last_company_end_date[]" required>
                </div>
            </div>
        `;
        container.appendChild(newCompany);
    }

    function removeCompany(button) {
        var companyDiv = button.closest(".company-details");
        companyDiv.remove();
    }
</script>

@stop
