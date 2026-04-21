<style>
    .footer .footer-link:hover{
        color: #ea7f23 !important;
        cursor:pointer;
    }
    .footer .footer-link a:hover{
        color: #ea7f23 !important;
        cursor:pointer;
    }
</style>

<footer class="footer-dark bg-foot footer-sticky">
    <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
        <div class="container">
            <div class="row">
                <!-- start footer column -->
                <div class="col-12 col-lg-3 col-sm-6 order-sm-1 order-lg-0 last-paragraph-no-margin md-margin-40px-bottom xs-margin-25px-bottom">
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="footer-logo"><img style="width: 70px; height:70px;" src="{{url('assets/frontend/images/Front-images/logo-sticky.png')}}"  alt=""></a>
                    </div>
                   
                    <p class="w-95 lg-w-100" >Long Stone International is a trusted supplier of high-quality health, beauty, dental, and surgical instruments. We are committed to providing reliable tools worldwide.</p>
                    <div class="social-icon-style-12 mt-3">
                        <ul class="extra-small-icon light">
                            <li><a class="facebook" href="https://www.facebook.com/share/18TPqn2g5e/?mibextid=wwXIfr" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/long.stone?igsh=cG1jems3Z2Vpamw4&utm_source=qr" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <!--<li><a class="dribbble" href="../www.dribbble.com/index.html" target="_blank"><i class="fab fa-dribbble"></i></a></li>-->
                            <li><a class="linkedin" href="http://www.linkedin.com/in/haider-imran-686713242 " target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 offset-sm-1 col-sm-5 order-sm-2 order-lg-0 md-margin-40px-bottom xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 text-uppercase d-block  margin-20px-bottom">Company</span>
                    <ul class="list-unstyled footer">
                        <li class="footer-link"><a href="{{ url('about-us') }}">About Us</a></li>
                        <li class="footer-link"><a href="{{ url('catalog') }}">Catalogs</a></li>
                        <li class="footer-link"><a href="{{ url('blogs') }}">Blog</a></li>
                        <li class="footer-link"><a href="{{ url('contact-us') }}">Contact us</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                @php
                    // Fetch the latest 4 categories
                    $latestCategories = DB::table('categories')
                        ->select('id', 'name')
                        ->orderBy('created_at', 'desc') // Assuming you have a created_at field
                        ->limit(4)
                        ->get();
                @endphp

                <div class="col-12 col-lg-2 col-sm-5 offset-sm-1 offset-lg-0 order-sm-4 order-lg-0 xs-margin-25px-bottom">
                    <span class="alt-font font-weight-500 text-uppercase d-block margin-20px-bottom">Categories</span>
                    <ul class="list-unstyled footer">
                        @foreach($latestCategories as $category)
                            <li class="footer-link"><a href="{{ url('products/' . $category->name) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- end footer column -->                    
                <!-- start footer column -->
                <div class="col-12 col-xl-3 offset-xl-1 col-lg-4 col-sm-6 order-sm-3 order-lg-0">
                    <span class="alt-font font-weight-500 text-uppercase d-block  margin-20px-bottom">Get Into Touch</span>
                    <ul class="list-unstyled footer">                           
                        <li class="footer-link"><i class="fas fa-phone-alt"></i> +92 52 3560135</li>
                        <li class="footer-link"><i class="fas fa-fax"></i> +92 52 3563647</li>
                        <li class="footer-link"><i class="fas fa-envelope"></i> info@longstoneintl.com</li>
                        <li class="footer-link"><i class="fas fa-map-marker-alt"></i> Street No. 6, Shahab Pura, Ukogi Road,Sialkot-51310, Pakistan</li>
                    </ul>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </div>
    <div class="footer-bottom  bg-foot">
        <div class="container"> 
            <div class="row align-items-center">
                <div class="text-center py-3">
                    <p class="mb-0">&copy;  Proudly Powered by <a href="{{ url('/') }}" target="_blank">Long Stone</a></p>
                </div>
                
            </div>
        </div>
    </div>
</footer>