@extends('frontend.layout.master')
@section('title', 'Long Stone Int')
@section('main-container')
    <style>
        a {
            color: #939393;
        }

        input {
            border: 1px solid black;
            /* Optional: makes the border visible */
        }

        textarea {
            border: 1px solid black;
            /* Optional: makes the border visible */
        }

        select {
            border: 1px solid black;
            /* Optional: makes the border visible */
        }
    </style>
    <!-- start page title -->
    <section class="cover-background background-position-top wow animate__fadeIn"
        style="background-image:url({{ asset('assets/frontend/images/Front-images/contact-banner.png') }});">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show " role="alert">
                        <strong>{{ session('status') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                        <div
                            class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Mail-Read d-block icon-medium text-fast-green margin-25px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500">How can we
                                    help you?</span>
                                <a href="mailto:info@longstoneintl.com" class=" alt-font text-decoration-underline">Send us
                                    an email</a>
                            </div>
                            <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                <p>Let us know your needs, and we’ll provide the best solutions.</p>
                            </div>
                        </div>
                        <div class="feature-box-overlay"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                    <div
                        class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                        <div
                            class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                            <div class="feature-box-icon">
                                <i class="line-icon-Phone-2 d-block icon-medium text-fast-green margin-25px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500">Feel free
                                    to get in touch?</span>
                                <a href="tel:+1234567890" class="alt-font text-decoration-underline">Give us a call
                                    toady</a>
                            </div>
                            <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                <p>Reach out to us for any inquiries or assistance.</p>
                            </div>
                        </div>
                        <div class="feature-box-overlay"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col-12 col-lg-4 col-md-6 col-sm-8">
                    <div
                        class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                        <div
                            class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                            <div class="feature-box-icon">
                                <i
                                    class="line-icon-Approved-Window d-block icon-medium text-fast-green margin-25px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500">Ready to
                                    request a quote?</span>
                                <a href="mailto:info@longstoneintl.com"
                                    class="alt-font text-decoration-underline section-link">Describe your project</a>
                            </div>
                            <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                <p>Contact us today to get a customized quote.</p>
                            </div>
                        </div>
                        <div class="feature-box-overlay"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <section class="wow animate__fadeIn" style="padding: 60px 0px 20px 0px;">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">
                        Get in touch with our team today!
                    </span>
                    <h4 class="alt-font font-weight-600 text-medium-gray">We're here to assist you.</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12  col-xxl-3 col-lg-4 col-sm-6">
                     <div class="shadow py-5">
                        <div class=" text-center">
                            <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 ">Muhammad
                                Safdar</span>
                            <p class="alt-font mb-0">Managing Partner</p>
                            <a href="mailto:m.safdar@longstoneintl.com"
                                class="alt-font text-decoration-underline ">m.safdar@longstoneintl.com </a>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-xxl-3 col-lg-4 col-sm-6">
                    <div class="shadow py-5">
                        <div class=" text-center">
                            <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 ">Imran
                                Ahmed</span>
                            <p class="alt-font mb-0">Managing Partner / Export Manager</p>
                             <a href="tel:+923006101043" class="alt-font text-decoration-underline">+92 300 6101043</a>
                            <a href="mailto:imran.ahmed@longstoneintl.com"
                                class="alt-font text-decoration-underline ">imran.ahmed@longstoneintl.com </a>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-xxl-3 col-lg-4 col-sm-6 mt-xxl-0 mt-3">
                    <div class="shadow py-5">
                        <div class=" text-center">
                            <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 ">Mir Hamza SAFDAR</span>
                            <p class="alt-font mb-0">Marketing Manager</p>
                            <a href="tel:+923215513899" class="alt-font text-decoration-underline">+92 321 5513899</a>
                            <a href="mailto:Mir.hamza@longstoneintl.com"
                                class="alt-font text-decoration-underline ">Mir.hamza@longstoneintl.com </a>
                        </div>
                    </div>
                </div>
                <div class="col-12  col-xxl-3 col-lg-4 col-sm-6 mt-xxl-0 mt-3">
                    <div class="shadow py-5">
                        <div class=" text-center">
                            <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 ">Haider IMRAN</span>
                            <p class="alt-font mb-0">Marketing Manager</p>
                            <a href="tel:+923001101043" class="alt-font text-decoration-underline">+92 300 1101043</a>
                            <a href="mailto:haider.imran@longstoneintl.com"
                                class="alt-font text-decoration-underline ">haider.imran@longstoneintl.com </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                    <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out
                        the form and we’ll be in touch soon!</span>
                    <h4 class="alt-font font-weight-600 text-medium-gray">How we can help you?</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 bg-light-gray p-5">
                    <!-- start contact form -->
                    <form action="{{ route('contact.send') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12 margin-25px-bottom sm-margin-25px-bottom">
                                <input class="medium-input bg-white margin-25px-bottom required" type="text"
                                    name="name" placeholder="Your name">
                                <input class="medium-input bg-white margin-25px-bottom required" type="email"
                                    name="email" placeholder="Your email address">
                                <input class="medium-input bg-white margin-25px-bottom" type="tel" name="phone"
                                    placeholder="Your mobile">
                                <select class="medium-input bg-white margin-25px-bottom required" name="country">
                                    <option value="">Select Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Åland Islands">Åland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of
                                        The</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guernsey">Guernsey</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Isle of Man">Isle of Man</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jersey">Jersey</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's
                                        Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The
                                        South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-leste">Timor-leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                    <option value="Other">Other</option>
                                </select>
                                <input class="medium-input bg-white margin-25px-bottom required" type="text"
                                    name="city" placeholder="Your city name">
                                <input class="medium-input bg-white margin-25px-bottom required" type="text"
                                    name="nature_of_contact" placeholder="Nature of contact">
                                <textarea class="medium-textarea h-200px bg-white" name="comment" placeholder="Your message"></textarea>
                            </div>
                            <div class="col text-center">
                                <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0"
                                    type="submit">Send Message</button>
                            </div>
                        </div>
                        <div class="form-results d-none"></div>
                    </form>
                    <!-- end contact form -->
                </div>
                <div class="col-md-6  p-5">
                    <div class="row ">
                        <div class="col-12 margin-25px-bottom sm-margin-25px-bottom ">
                            <div class="shadow-sm py-5 bg-light-gray">
                                <div class=" text-start ps-3">
                                    <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 " style="padding-left: 55px;">Head Office</span>
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="line-icon-Map-Marker d-block icon-medium text-fast-green margin-25px-bottom"></i>
                                        <div>
                                            <p class="alt-font mb-0">Street No. 6, Shahab Pura, Ukogi Road,Sialkot-51310, Pakistan</p>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 margin-25px-bottom sm-margin-25px-bottom">
                            <div class="shadow-sm py-5 bg-light-gray">
                                <div class=" text-start ps-3">
                                    <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 " style="padding-left: 55px;">Email</span>
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="line-icon-Mail-Read d-block icon-medium text-fast-green margin-25px-bottom"></i>
                                        <div>
                                            <a href="mailto:info@longstoneintl.com" class="alt-font text-decoration-underline ">info@longstoneintl.com </a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 margin-25px-bottom sm-margin-25px-bottom">
                            <div class="shadow-sm py-5 bg-light-gray">
                                <div class=" text-start ps-3">
                                    <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 " style="padding-left: 55px;">Phone</span>
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="line-icon-Phone-2 d-block icon-medium text-fast-green margin-25px-bottom"></i>
                                        <div>
                                            <a href="tel:+92523560135" class="alt-font text-decoration-underline">+92 52 3560135</a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 margin-25px-bottom sm-margin-25px-bottom">
                            <div class="shadow-sm py-5 bg-light-gray">
                                <div class=" text-start ps-3">
                                    <span class="text-medium-gray text-extra-medium d-block alt-font font-weight-500 " style="padding-left: 55px;">Fax</span>
                                    <div class="d-flex align-items-center gap-3">
                                        <i class="line-icon-Fax d-block icon-medium text-fast-green margin-25px-bottom"></i>
                                        <div>
                                            <a href="tel:+92523563647" class="alt-font text-decoration-underline">+92 52 3563647</a>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row">
                <div class="col h-600px p-0 md-h-450px xs-h-300px">
                    <iframe class="w-100 h-100 filter-grayscale-100"
                        src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=longstone+sialkot&aq=&sll=53.438327,-1.023552&sspn=0.007912,0.021136&ie=UTF8&hq=longstone&hnear=Si%C4%81lkot,+Sialkot+District,+Punjab,+Pakistan&t=m&ll=32.491588,74.516213&spn=0.012395,0.043776&output=embed"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection
