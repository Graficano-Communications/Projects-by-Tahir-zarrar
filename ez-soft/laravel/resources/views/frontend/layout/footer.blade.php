<footer class="footer-section bg_img" data-background="{{ asset('assets/frontend/images/front-images/footer.jpg') }}">
    <div class="container">
        <div class="footer-top padding-top padding-bottom">
            <div class="logo">
                <a href="#0">
                    <img src="{{ asset('assets/frontend/images/logo/ezsoft-white.png') }}" alt="logo">
                </a>
            </div>
            <ul class="social-icons">
                <li>
                    <a href="https://web.facebook.com/ezsoftpk?mibextid=ZbWKwL&_rdc=1&_rdr#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/ezsoft.erp/?igshid=YmMyMTA2M2Y%3D"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/@ezconsultantspak" class="active"><i class="fab fa-youtube"></i></a>
                </li>
                {{-- <li>
                    <a href="#0"><i class="fab fa-pinterest-p"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                </li> --}}
              
            </ul>
        </div>
        <div class="footer-bottom">
            <ul class="footer-link">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('service') }}">Services</a>
                </li>
                <li>
                    <a href="{{ url('/blog') }}">Blog</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
        <div class="copyright">
            <p>
                Copyright © {{ date('Y') }}. All Rights Reserved By <a href="{{ route('home') }}">EZ Soft</a>
            </p>
        </div>
    </div>
</footer>
