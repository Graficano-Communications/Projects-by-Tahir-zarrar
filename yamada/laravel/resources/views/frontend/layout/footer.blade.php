<style>
    .footer .footer-logo {
    margin-bottom: 20px;
}
</style>
<!-- footer -->
<footer id="footer" class="footer background-black md-pb-70">
    <div class="footer-wrap">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="footer-infor">
                            <div class="footer-logo ">
                                <a href="{{ route('home') }}">
                                    <img width="180px" src="{{ asset('assets/frontend/images/front-images/footer-logo.png') }}"
                                        alt="">
                                </a>
                            </div>
                            <ul>
                                <li>
                                    <p>Yamada: Your trusted partner for exceptional surgical, dental, and orthodontic
                                        instruments, innovating patient care with every tool.</p>
                                </li>
                            </ul>
                            {{-- <ul class="tf-social-icon d-flex gap-10">
                                <li><a href="#"
                                        class="box-icon w_34 round social-facebook social-line text-white"><i
                                            class="icon fs-14 icon-fb"></i></a></li>
                                <li><a href="#"
                                        class="box-icon w_34 round social-twiter social-line text-white"><i
                                            class="icon fs-12 icon-Icon-x"></i></a></li>
                                <li><a href="#"
                                        class="box-icon w_34 round social-instagram social-line text-white"><i
                                            class="icon fs-14 icon-instagram"></i></a></li>
                                <li><a href="#"
                                        class="box-icon w_34 round social-tiktok social-line text-white"><i
                                            class="icon fs-14 icon-tiktok"></i></a></li>
                                <li><a href="#"
                                        class="box-icon w_34 round social-pinterest social-line text-white"><i
                                            class="icon fs-14 icon-pinterest-1"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                        <div class="footer-heading footer-heading-desktop">
                            <h6>Useful Links</h6>
                        </div>
                        <div class="footer-heading footer-heading-moblie">
                            <h6>Useful Links</h6>
                        </div>
                        <ul class="footer-menu-list tf-collapse-content">
                            <li>
                                <a href="{{ route('home') }}" class="footer-menu_item">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}" class="footer-menu_item">About</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="footer-menu_item">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12 footer-col-block">
                        <div class="footer-heading footer-heading-desktop">
                            <h6>Category</h6>
                        </div>
                        <div class="footer-heading footer-heading-moblie">
                            <h6>Category</h6>
                        </div>
                        <ul class="footer-menu-list tf-collapse-content">
                            @php
                                $categories = DB::table('categories')
                                    ->select('id', 'slug', 'name')
                                    ->take(4) // Limit to 4 categories
                                    ->get()
                                    ->map(function ($category) {
                                        $category->subcategories = DB::table('subcategories')
                                            ->where('categories_id', $category->id)
                                            ->select('id', 'slug', 'name')
                                            ->get();
                                        return $category;
                                    });
                            @endphp
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('product.show', ['categorySlug' => $category->slug]) }}"
                                        class="footer-menu_item">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="footer-newsletter footer-col-block">
                            <div class="footer-heading footer-heading-desktop">
                                <h6>Meet Us</h6>
                            </div>
                            <div class="footer-heading footer-heading-moblie">
                                <h6>Meet Us</h6>
                            </div>
                            <div class="tf-collapse-content">
                                <div class="footer-menu_item">
                                    <ul class="footer-menu-list tf-collapse-content">
                                        <li>
                                            <a class="footer-menu_item"><p>01/563, Abbot Road Sialkot-51310, Pakistan</p></a>
                                        </li>
                                        <li>
                                            <a class="footer-menu_item">info@Yamadainst.com</a>
                                        </li>
                                        <li>
                                            <a class="footer-menu_item">+923328635787
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="footer-bottom-wrap d-flex gap-20 flex-wrap justify-content-center align-items-center">
                            <div class="footer-menu_item ">© 2025 Yamada Surgical. All Rights Reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->
