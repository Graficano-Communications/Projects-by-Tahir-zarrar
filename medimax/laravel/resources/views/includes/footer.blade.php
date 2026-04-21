 <!-- Footer Area-->
 <style>
  .footer-area .footer-widget .social-link li a i {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    color: #fff;
    font-size: 20px;
    border-radius: 50%;
    transition: background-color 0.5s, color 0.5s;
}

/* Facebook */
.footer-area .footer-widget .social-link li a.facebook i {
    background-color: #1877F2; /* Default Facebook Blue */
}

.footer-area .footer-widget .social-link li a.facebook i:hover {
    background-color: #145dbf; /* Darker Facebook Blue on hover */
}

/* Twitter */
.footer-area .footer-widget .social-link li a.twitter i {
    background-color: #1DA1F2; /* Default Twitter Blue */
}

.footer-area .footer-widget .social-link li a.twitter i:hover {
    background-color: #0d95e8; /* Darker Twitter Blue on hover */
}

/* LinkedIn */
.footer-area .footer-widget .social-link li a.linkedin i {
    background-color: #0077B5; /* Default LinkedIn Blue */
}

.footer-area .footer-widget .social-link li a.linkedin i:hover {
    background-color: #005582; /* Darker LinkedIn Blue on hover */
}

/* Instagram */
.footer-area .footer-widget .social-link li a.instagram i {
    background-color: #C13584; /* Default Instagram Gradient Pink */
}

.footer-area .footer-widget .social-link li a.instagram i:hover {
    background-color: #a12c6f; /* Darker Instagram Pink on hover */
}


 </style>
 <footer class="footer-area bg-color pt-100 pb-70" style="border-top: 2px solid #00336B;">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-sm-6">
                 <div class="footer-widget">
                     <div class="logo mb-2" style="width: 200px !important;">
                         <!-- Light Mode Logo -->
                         <a href="/" class="logo-light">
                             <img src="{{ asset('medimax_assets/img/medimax-logo.svg') }}" alt="light mode logo">
                         </a>
                         <!-- Dark Mode Logo -->
                         <a href="/" class="logo-dark">
                             <img src="{{ asset('medimax_assets/img/medimax-logo-white.svg') }}" alt="dark mode logo">
                         </a>
                     </div>
                     <p>Medimax International in Sialkot, Pakistan, is a leading manufacturer and exporter, dedicated to excellence and quality in all its products.</p>
                     <ul class="contact">
                         <li>
                             <i class='bx bx-location-plus'></i>
                             Ugoki Road, Adalat Garah, Sialkot 51330, Pakistan
                         </li>
                         <li>
                             <a href="tel: 0092-52-3551999">
                                 <i class='bx bx-phone-call'></i>
                                 0092-52-3551999
                             </a>
                         </li>
                         <li>
                             <a href="mailto:info@medimaxint.com">
                                 <i class='bx bx-message-dots'></i>
                                 info@medimaxint.com
                             </a>
                         </li>
                     </ul>
                     <ul class="social-link">
                        <li>
                            <a href="https://www.facebook.com/medimaxint" target="_blank" class="facebook">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://x.com/medimaxint/" target="_blank" class="twitter">
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="https://www.linkedin.com/" target="_blank" class="linkedin">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li> --}}
                        <li>
                            <a href="https://www.instagram.com/medimaxint/" target="_blank" class="instagram">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                    </ul>                    
                 </div>
             </div>

             <div class="col-lg-4 col-sm-6">
                 <div class="footer-widget pl-50">
                     <h2>Quick links</h2>
                     <ul class="widget-list">
                         <li>
                             <a href="{{route('about')}}">
                                 About us
                             </a>
                         </li>
                         <li>
                             <a href="{{route('contact')}}">
                                 Contact us
                             </a>
                         </li>
                         <li>
                             <a href="{{route('portfolios')}}">
                                 Our departments
                             </a>
                         </li>
                         <li>
                             <a href="{{route('blog')}}">
                                 Blogs
                             </a>
                         </li>
                         <li>
                             <a href="{{route('upcoming')}}">
                                 News and Events
                             </a>
                         </li>

                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-sm-6">
                 <div class="footer-widget">
                     <h2>Our Products</h2>
                     <ul class="widget-list">
                         @foreach($categories as $category)
                         <li>
                             <a href="{{ route('categories.sub', $category->id) }}">
                                 {{ $category->name }}
                             </a>
                         </li>
                         @endforeach
                     </ul>
                 </div>
             </div>


         </div>
     </div>
 </footer>
 <!-- End Footer Area -->

 <!-- Footer Bottom Area -->
 <div class="footer-bottom-area">
     <div class="container">
         <p>Copyright @<script>
                 document.write(new Date().getFullYear())
             </script> Medimax-instruments. All rights reserved</p>
     </div>
 </div>
 <!-- End Footer Bottom Area -->

 <!-- Go Top -->
 <div class="go-top">
     <i class='bx bxs-upvote'></i>
 </div>
 <!-- End Go Top -->