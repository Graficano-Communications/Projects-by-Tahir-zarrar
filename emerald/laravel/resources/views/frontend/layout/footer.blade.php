    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-12">
                    <!-- Footer Header Start -->
                    <div class="footer-header">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Ready to work with us?</h2>
                            <p>Partner with Emarled Instruments to access reliable, professional security services that safeguard your people, property, assets, and ensure unwavering protection.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Footer Contact Circle Start -->
                        <div class="footer-contact-circle">
                             <a href="{{ route('contact') }}">
                                <img src="{{ asset('assets/frontend/images/contact-now-circle.svg') }}" alt="">
                            </a>
                        </div>
                        <!-- Footer Contact Circle End -->
                    </div>
                    <!-- Footer Header End -->
                </div> --}}

                <div class="col-lg-4 col-md-12">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                            <img src="{{ asset('assets/frontend/images/emerald2.png') }}" alt="">
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content ">
                            <h4 style="font-weight: 600;" >Emerald Instruments</h4>
                            <p style="font-weight: 500; font-size: 16px;">115/C-B, Factory Roras Road, P.O.Box 766,
                                Sialkot-51310, Pakistan.</p>
                            <p>
                                <a href="tel:+92523560987"
                                    style="color:#231F20; text-decoration:none; font-weight: 500; font-size: 16px;">
                                    Tel: (92) 52 3560987
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@emerald.pk"
                                    style="color:#231F20; text-decoration:none; font-weight: 500; font-size: 16px;">
                                    Email: info@emerald.pk
                                </a>
                            </p>

                        </div>
                        <!-- About Footer Content End -->
                        <hr style="height:2px; background:#231F20; border:none;">


                        <!-- Footer Social Link Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/emeraldinstruments"><img
                                            src="{{ asset('assets/frontend/images/emerald-1.png') }}"
                                            alt=""></a>
                                </li>
                                <li><a href="https://www.instagram.com/emeraldinstruments/"><img
                                            src="{{ asset('assets/frontend/images/emerald-2.png') }}"
                                            alt=""></a>
                                </li>
                                <li><a href="https://www.youtube.com/@emeraldinstruments"><img
                                            src="{{ asset('assets/frontend/images/emerald-3.png') }}"
                                            alt=""></a>
                                </li>
                                <li><a href="https://www.youtube.com/@emeraldinstruments"><img
                                            src="{{ asset('assets/frontend/images/emerald-4.png') }}"
                                            alt=""></a>

                                </li>
                            </ul>
                        </div>
                        <!-- Footer Social Link End -->

                    </div>
                    <!-- About Footer End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">

                        <h3>Products</h3>
                        @php
                            use App\Models\Category;

                            $categories = Category::with([
                                'subcategories' => function ($query) {
                                    $query->orderBy('sequence');
                                },
                            ])
                                ->orderBy('sequence')
                                ->get();
                        @endphp
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="{{ route('products', $category->slug) }}">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="{{ route('catalogues') }}">History</a></li>
                            <li><a href="{{ route('news.show') }}">Manufacturig</a></li>
                            <li><a href="{{ route('blog.show') }}">Certificates</a></li>
                            <li><a href="{{ route('news.show') }}">Private Labeling</a></li>
                            <li><a href="{{ route('blog.show') }}">Catalogue</a></li>

                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>News</h3>
                        <ul>
                            <li><a href="{{ route('news.show') }}">Events</a></li>
                            <li><a href="{{ route('blog.show') }}">Blogs</a></li>

                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <!-- Footer Links Start -->
                    <div class="footer-links">
                        <h3>Additional</h3>
                        <ul>
                            <li><a href="{{ route('catalogues') }}">Terms & Condition</a></li>
                            <li><a href="{{ route('news.show') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('blog.show') }}">FAQ</a></li>

                        </ul>
                    </div>
                    <!-- Footer Links End -->
                </div>


            </div>

            <!-- Footer Copyright Section Start -->
            {{-- <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>© 2025 All Rights Reserved By <a href="{{ route('home') }}" style="color:#A8CF45;">EMERALD INSTRUMENTS</a></p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>
                </div>
            </div> --}}
            <!-- Footer Copyright Section End -->
        </div>
    </footer>
    <div class="main-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <p style="color: #ffffff; margin-bottom: 0px; font-size: 14px;  ">@2026 All Rights Reserved by <a
                            href="{{ route('home') }}" style="color: #ffffff !important;">EMERALD INSTRUMENTS</a></p>
                    <!-- Logo End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
