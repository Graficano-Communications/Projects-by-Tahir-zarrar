<style>
    .bg-slate-blue{
        background-color: #4a4c59 !important;
    }
</style>
 <!-- start footer -->
 <footer class="bg-slate-blue">
    <div class="footer-top padding-seven-tb lg-padding-eight-tb sm-padding-50px-tb">
        <div class="container">
            <div class="row justify-content-center">
                <!-- start footer column -->
                <div class="col-12 col-lg-3 col-sm-6 order-5 order-lg-0 text-md-center text-lg-start last-paragraph-no-margin">
                    <a href="{{url('/')}}" class="footer-logo margin-25px-bottom margin-5px-top d-inline-block"><img src="{{ asset('frontend/images/logo-1.png') }}" data-at2x="{{ asset('frontend/images/logo-1.png') }}" alt=""></a>
                    <p class="text-white">Over decades, we evolved into a full-scale manufacturer of protective gloves, motorcycle apparel, and finished leather.</p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 offset-xl-1 col-md-3 col-sm-4 order-1 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                    <ul>
                        <li>
                            <a href="{{route('about-us')}}">About Us</a>
                        </li>
                        <li>
                            <a href="{{route('contact-us')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('history')}}">History Timeline</a>
                        </li>
                        <li>
                            <a href="{{route('blog')}}">Blog</a>
                        </li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 col-md-3 col-sm-4 order-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Additional</span>
                    <ul>                           
                        {{-- <li>
                            <a href="{{route('department/')}}">Departments</a>
                        </li> --}}
                        <li>
                            {{-- <a href="{{route('products')}}">Products</a> --}}
                        </li>
                        <li>
                            <a href="{{route('catalogues')}}">Catalogues</a>
                        </li>
                        <li>
                            <a href="{{route('news-events')}}">News & Events</a>
                        </li>
                        <li>
                            <a href="{{route('our-team')}}">Our Team</a>
                        </li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 col-md-3 col-sm-4 order-3 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Meet Now</span>
                    <ul>
                        <li><span class="top-bar-contact-list text-white">
                            <i class="feather icon-feather-phone-call align-middle icon-extra-small text-white margin-10px-right "></i>
                              0222 8899900
                        </span></li>
                        <li><span class="top-bar-contact-list text-white">
                            <i class="feather icon-feather-mail align-middle icon-extra-small text-white margin-10px-right"></i>
                            xyz@gmail.com
                        </span></li>
                        <li><span class="top-bar-contact-list text-white d-none d-md-inline-block no-border-right pe-0">
                            <i class="feather icon-feather-map-pin align-middle icon-extra-small text-white margin-10px-right "></i>
                           Khudija Street, Pasrur Road, Babey Beri, Sialkot, 51310
                        </span></li>
                        {{-- <li><a href="latest-news.html">Latest news</a></li> --}}
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                {{-- <div class="col-12 col-xl-2 col-lg-3 col-md-3 col-sm-6 order-4 order-lg-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Services</span>
                    <ul>
                        <li><a href="our-services.html">Brand experience</a></li>
                        <li><a href="our-services.html">E-commerce website</a></li>
                        <li><a href="our-services.html">Content writing</a></li>
                        <li><a href="our-services.html">Marketing strategy</a></li>
                    </ul>
                </div> --}}
                <!-- end footer column -->                        
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
