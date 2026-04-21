<!-- start footer -->
<footer class="footer-light bg-gradient-very-light-gray pb-0">
    <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
        <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url({{ asset('assets/frontend/images/newsletter.jpg') }});"
        ></div>
        <!-- start newsletter -->
        <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
            <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start"> 
                <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700"><span class="fw-700 text-highlight d-inline-block">Contact Us<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                <span class="fs-20 text-white">We’re here to help you find your perfect plot!</span>
                <div class="text-start" >
                    <a href="{{ url('contact-us') }}"
                        class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                        <span>
                            <span class="btn-text">Contact</span>
                            <span class="btn-icon"><i
                                    class="feather icon-feather-arrow-right icon-very-small"></i></span>
                            <span class="btn-icon"><i
                                    class="feather icon-feather-arrow-right icon-very-small"></i></span>
                        </span>
                    </a>
                </div>
                
            </div>
            <div class="col-lg-5 offset-xl-1 position-relative"> 
                
            </div>
        </div>
        <!-- end newsletter -->
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- start footer column -->
            <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                <div class="text-dark-gray fs-28 alt-font fw-500">Find your perfect  
                    <span class="fw-700 text-decoration-line-bottom">property today!</span></div>
                <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                    <a href="{{ url('contact-us') }}" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
                    <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                </div>
            </div>
            <!-- end footer column -->
        </div>
        <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">
            <!-- start footer column -->
            <div class="col-lg-4 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                <a href="{{ url('/') }}" class="footer-logo mb-10px d-inline-block"><img src="{{ asset('assets/frontend/images/dua-logo.png') }}" data-at2x="{{ asset('assets/frontend/images/dua-logo.png') }}" alt=""></a>
                <p class="w-85 lg-w-100">Dua Real Estate is dedicated to helping you secure your dream plot in Sialkot. We partner with CA Gold City to offer prime plots that meet your needs and lifestyle.
                </p>
                <div class="elements-social social-icon-style-02 mt-15px">
                    <ul class="small-icon dark">
                        <li><a class="facebook" href="https://www.facebook.com/profile.php?id=61566963113794" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        {{-- <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>  --}}
                        <li><a class="twitter" href="https://www.youtube.com/channel/UC6mNAaHy4skFSrmtwg9X5wA" target="_blank"><i class="fa-brands fa-youtube"></i></a></li> 
                        <li><a class="instagram" href="https://www.instagram.com/dua.real_estate/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li> 
                    </ul>
                </div>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            @php
            use Illuminate\Support\Facades\DB;

                $project = DB::table('projects')->orderBy('sequence')->first();
            @endphp
            <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Company</span>
                <ul>
                    <li><a href="{{ url('about-us') }}">About us</a></li>
                    {{-- <li><a href="agents.html">Our agent</a></li> --}}
                    <li><a href="{{ url('blogs') }}">Latest blog</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact us</a></li>
                    <li><a href="{{ route('project.show', $project->id) }}">Projects</a></li>
                </ul>
            </div>
            <!-- end footer column -->
            <!-- start footer column -->
            
            <div class="col-6 col-lg-3 col-md-3 sm-mb-25px">
                <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Contact Info</span>
                <ul>
                    <li> 
                        <a href="mailto:info@dua-realestate.com" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block ">info@dua-realestate.com</a><br>
                        <a href="mailto:duarealestate@gmail.com" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-10px">duarealestate@gmail.com</a><br>
                        <span>M.Ishfaq : </span>
                        <a href="tel:+923251800059" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">03 251 800 059</a><br>
                        <span>Malik Nadeem : </span>
                        <a href="tel:+923009612790" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block"> 03 009 612 790</a><br>
                        <span>UAN : </span>
                        <a href="tel:+923111000269" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">03 111 000 269</a>
                    </li>
                </ul>
            </div>
            <!-- end footer column -->

            <!-- start footer column -->
            <div class="col-6 col-lg-3 col-md-3">
                <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Address</span>
                <a class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">Office no.A-01 Hassan center opposite PSO PETROL PUMP IQBAL TOWN DEFENCE ROAD SIALKOT PAKISTAN</a>
            </div>
            <!-- end footer column -->                     
        </div>
        <!-- start footer content -->
        <div class="border-top border-color-extra-medium-gray pt-35px pb-35px text-center">
            <span class="fs-13 w-60 lg-w-70 md-w-90 sm-w-100 d-block mx-auto lh-22">All Rights Reserved by<a href="{{ url('/') }}" class="text-dark-gray text-decoration-line-bottom"> Dua Real Estate</a> </span>
        </div>
        <!-- end footer content -->
    </div> 
</footer>
<!-- end footer -->