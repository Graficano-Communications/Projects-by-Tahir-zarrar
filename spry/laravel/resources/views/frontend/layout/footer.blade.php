<!-- ==================== Start Footer ==================== -->
<footer class="pt-80">
    <div class="container pb-80">
        <div class="row">
            <div class="col-lg-3 offset-lg-1 ">
                <div class="colum md-mb50">
                    <div class="tit mb-20">
                        <div class="icon-img-180 ">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/frontend/imgs/logospry.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="text">
                        <p style="text-align: justify">
                            Built on trust, quality, and performance. SPRY Sports Corp. stands for excellence in sports
                            manufacturing and global export. Since 2002, we have proudly delivered durable, innovative,
                            and high-quality sports goods and garments to clients worldwide.
                        </p>
                    </div>
                    <ul class="rest social-text d-flex mt-20">
                        {{-- <li class="mr-30">
                            <a href="https://www.facebook.com/black.bear.industries"><i
                                    class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="mr-30">
                            <a href="https://www.instagram.com/blackbearindustries/"><i
                                    class="fab fa-instagram"></i></a>
                        </li> --}}
                        <li class="mr-30">
                            <a href="https://www.linkedin.com/company/spry-sports-corporation/"><i
                                    class="fab fa-linkedin"></i></a>
                        </li>
                        {{-- <li>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 md-mb50 offset-lg-1">
                <div class="tit mb-20">
                    <h6>Important Links</h6>
                </div>
                <ul class="rest social-text">
                    <li>
                        <a href="{{ route('blog.show') }}">Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('news.show') }}">News & Events</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <div class="tit mb-20">
                    <h6>Categories</h6>
                </div>
                <ul class="rest social-text">
                    @php
                        $categories = \App\Models\Category::orderBy('sequence')->get();
                    @endphp
                    @foreach ($categories as $cat)
                        <li>
                            <a href="{{ route('products', $cat->slug) }}" title="{{ $cat->name }}">
                                {{ $cat->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col-lg-3 ">
                <div class="colum md-mb50">
                    <div class="tit mb-20">
                        <h6>Contact Us</h6>
                    </div>

                    <div class="text">


                        <h6 style="font-size: 17px;">
                            <a href="#"> <i class="fas fa-phone "></i> +92 52 6548094, 95</a>
                        </h6>
                        <h6 style="font-size: 17px;">
                            <a href="#"> <i class="fas fa-envelope"></i> sprypak@sprysports.net</a>
                        </h6>
                        <h6 style="font-size: 17px;">
                            <a href="#"> <i class="fas fa-map-marker-alt"></i> Simbal Pur, Aimnabad Road, Sialkot, Pakistan. Po Box: 51110</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer pt-20 pb-20 bord-thin-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-center">

                    <p class="fz-13 mb-0">© All Rights Reserved by <span class="underline"><a href="{{ route('home') }}"
                                target="_blank">Spry Sports</a></span></p>

                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ==================== End Footer ==================== -->
