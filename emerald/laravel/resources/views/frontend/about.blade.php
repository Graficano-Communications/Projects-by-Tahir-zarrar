@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')

    <!-- Page Header Start -->
    <div class="page-header parallaxie"
        style="background: url('{{ asset('assets/frontend/images/emd-about-banner.jpg') }}') no-repeat center center !important;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">About <span>Us</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Us Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Our Legacy of <span>Trusted Service</span>
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Emerald Instruments has over 44 years of
                                experience crafting high-quality surgical, dental, and professional instruments, committed
                                to precision, integrity, and supporting healthcare professionals worldwide with reliable
                                tools.


                            </p>
                        </div>
                        <!-- Section Title End -->
                        <div class="about-content-body">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- About List Btn Box Start -->
                                    <div class="about-list-btn">
                                        <!-- About Content List Start -->
                                        <div class="about-content-list wow fadeInUp" data-wow-delay="0.5s">
                                            <ul>
                                                <li>Founded by Mr. Muhammad Afzal in 1980</li>
                                                <li>Strong values rooted in honesty and fairness</li>
                                                <li>Family support guiding continuous growth</li>
                                                <li>Committed to innovation and reliable medical products</li>
                                            </ul>
                                        </div>
                                        <!-- About Content List End -->
                                    </div>
                                    <!-- About List Btn Box End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- About Content End -->
                </div>
                <div class="col-lg-6 text-center">
                    <!-- About Us Image Start -->



                    <figure class="image-anime reveal rounded-4">
                        <img src="{{ asset('assets/frontend/images/emd-about-1.jpg') }}" alt="">
                    </figure>

                </div>


            </div>
        </div>
    </div>
    <!-- About Us End -->




    <!-- Our Mission Vision Section Start -->
    <div class="our-mission-vision">
        <div class="mission-vision-bg parallaxie">
            <div class="container">
                <div class="row section-row align-items-center">
                    <div class="col-lg-6">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">our approach</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Delivering Precision with
                                <span>Craftsmanship and Innovation</span></h2>
                        </div>
                        <!-- Section Title End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Section Title Content Start -->
                        <div class="section-title-content dark-section wow fadeInUp" data-wow-delay="0.25s">
                            <p>We blend traditional instrument-making expertise with advanced CNC and modern manufacturing
                                to create high-quality surgical, dental, and professional tools.</p>
                        </div>
                        <!-- Section Title Content End -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Mission Vision Box Start -->
                    <div class="mission-vision-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="missionvision">
                        <!-- Sidebar Mission Vision Nav start -->
                        <div class="mission-vision-nav">
                            <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab"
                                        data-bs-target="#mission" type="button" role="tab" aria-selected="true"><img
                                            src="images/icon-mission-nav.svg" alt=""> our mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="installation-tab" data-bs-toggle="tab"
                                        data-bs-target="#vision" type="button" role="tab" aria-selected="false"><img
                                            src="images/icon-vision-nav.svg" alt=""> our vision</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value"
                                        type="button" role="tab" aria-selected="false"><img
                                            src="images/icon-value-nav.svg" alt=""> our value</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Mission Vision Nav End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade show active" id="mission" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>Emerald Instruments aims to provide top‑quality surgical, dental, and
                                                ophthalmic instruments built with precision and reliability for
                                                professionals worldwide. We believe in honest craftsmanship, dependable
                                                delivery, and total customer satisfaction.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Use premium surgical-grade materials</li>
                                                <li>Strict quality control at every step</li>
                                                <li>Reliable delivery worldwide</li>
                                                <li>OEM and private-label support</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-mission.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade" id="vision" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>We envision Emerald Instruments as a leading global name in medical and
                                                professional tools — recognized for precision, durability, and
                                                responsiveness to evolving healthcare needs. We strive to expand our reach,
                                                embrace innovation, and set new benchmarks in instrument manufacturing.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Expand and innovate product range</li>
                                                <li>Invest in advanced manufacturing technology</li>
                                                <li>Reach more international markets</li>
                                                <li>Uphold high ethical and quality standards</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-vision.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->

                        <!-- Mission Vision Item Start -->
                        <div class="mission-vision-item tab-pane fade" id="value" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Mission Vision Content Start -->
                                    <div class="mission-vision-content">
                                        <div class="mission-vision-content-header">
                                            <p>Our team combines decades of experience, technical skill, and commitment —
                                                spanning design, manufacturing, quality control, and export services.
                                                Together, we ensure every instrument reflects our dedication to excellence
                                                and meets international standards.</p>
                                        </div>

                                        <div class="mission-vision-content-list">
                                            <ul>
                                                <li>Skilled in design and production</li>
                                                <li>Expert quality control staff</li>
                                                <li>Dedicated export and OEM support</li>
                                                <li>Committed to precision and reliability</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mission Vision Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Mission Vision Image Start -->
                                    <div class="mission-vision-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-values.jpg') }}" alt="">
                                        </figure>
                                    </div>
                                    <!-- Mission Vision Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Mission Vision Item End -->
                    </div>
                    <!-- Mission Vision Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission Vision Section End -->

    <!-- Our History Section Start -->
    <div class="our-history">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our history</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Foundation of excellences <span>in Medical
                                Instruments</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>Built on a legacy of quality and innovation, we have established a strong foundation in the
                            industrial sector, consistently delivering reliable solutions that drive progress and set
                            industry standards.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Our History Box Start -->
                    <div class="our-history-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="historybox">

                        <!-- Sidebar Our History Nav start -->
                        <div class="our-history-nav ">
                            <ul class="nav nav-tabs" id="historyTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="1980-tab" data-bs-toggle="tab"
                                        data-bs-target="#1980" type="button" role="tab" aria-selected="true">In
                                        1980 - Company Establishment</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="1998-tab" data-bs-toggle="tab" data-bs-target="#1998"
                                        type="button" role="tab" aria-selected="false">In 1998 - New
                                        Building</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2000-tab" data-bs-toggle="tab" data-bs-target="#2000"
                                        type="button" role="tab" aria-selected="false">In 2000 - Ahmed Sheraz
                                        Joining</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2004-tab" data-bs-toggle="tab" data-bs-target="#2004"
                                        type="button" role="tab" aria-selected="false">In 2004 - First Business
                                        Trip</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2006-tab" data-bs-toggle="tab" data-bs-target="#2006"
                                        type="button" role="tab" aria-selected="false">In 2006 - Founding Emerald
                                        Instruments</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2011-tab" data-bs-toggle="tab" data-bs-target="#2011"
                                        type="button" role="tab" aria-selected="false">In 2011 - Muhammad Naeem
                                        Joins</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2012-tab" data-bs-toggle="tab" data-bs-target="#2012"
                                        type="button" role="tab" aria-selected="false">In 2012 - First CNC
                                        Machine</button>
                                </li>
                            </ul>
                        </div>


                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade show active" id="1980" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2" data-cursor="-opaque">Company
                                                <span>Establishment</span></h2>
                                            <p>Mr. Muhammad Afzal, an experienced engineer with a strong technical
                                                background, founded Emerald Surgical Company in 1980. From a young age, he
                                                worked in the manufacturing of surgical and dental instruments, as well as
                                                manicure implements, which gave him a deep understanding of the industry and
                                                the expertise needed to launch his own contract manufacturing business.
                                                Starting a new business was challenging, but his passion, hard work, and
                                                commitment to quality and integrity quickly distinguished him in the field.
                                                As a result, Emerald soon became a respected name in the industry.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-1.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="1998" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2" data-cursor="-opaque">New Company building
                                                <span>in Sialkot</span></h2>
                                            <p>As company continued to grow, Mr. Muhammad Afzal constructed a new building
                                                on his own land, conveniently located in the neighborhood of his
                                                residence.Living so close to the factory provided him with a unique
                                                advantage, allowing him to focus intensely on the business while still being
                                                able to attend to his family and spend quality time with his growing
                                                children.This proximity enabled him to maintain a balance between his
                                                professional commitments and personal life, contributing to the company's
                                                success and his family's well-being.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-2.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="2000" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2" data-cursor="-opaque">Ahmed Sheraz Joins the
                                                <span>company</span></h2>
                                            <p>Ahmed Sheraz, the elder son of the company’s founder, took on the role of
                                                Marketing and Customer Relations Manager after completing his business
                                                studies.In this capacity, he focused on expanding exports and uncovering new
                                                market opportunities. Drawing on his advanced education and deep passion for
                                                his work, Ahmed spearheaded a significant modernization of the company's IT
                                                systems.His efforts not only streamlined operations but also equipped the
                                                company to meet contemporary challenges head-on and maintain a competitive
                                                edge in the industry.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-3.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="2004" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2" data-cursor="-opaque">First Business trip
                                                <span>Abroad</span></h2>
                                            <p>Before 2004, our primary means of communication with international customers
                                                included letters, faxes, phone calls, and emails.In that year, Mr. Ahmed
                                                Sheraz implemented a transformative approach by initiating face-to-face
                                                meetings with both existing and prospective clients.This strategic shift
                                                allowed us to engage more personally with our customers and gain a deeper,
                                                more nuanced understanding of their needs, especially regarding new
                                                projects.The decision to meet in person facilitated more meaningful
                                                interactions, enabling us to better grasp the specific requirements and
                                                expectations of our clients. This direct engagement not only strengthened
                                                our relationships but also provided valuable insights that were often missed
                                                through other communication channels.As a result, our ability to tailor our
                                                services and solutions to better meet customer needs was significantly
                                                enhanced, leading to improved satisfaction and successful project outcomes.
                                            </p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-4.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- Our History Item Start -->
                        <div class="our-history-item tab-pane fade" id="2006" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!-- Our History Content Start -->
                                    <div class="our-history-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2" data-cursor="-opaque">Founding <span>Emerald
                                                    Instruments</span></h2>
                                            <p>The company name Emerald Instruments was changed in 2006, ushered in with a
                                                new logo designed by the founder’s elder son.This rebranding was a key
                                                element in the company’s strategic vision to expand the family business and
                                                advance the development of cutting-edge, highly precise instruments.The
                                                initiative aimed to position the company as a leader in innovation, ensuring
                                                its growth and success in a competitive market.</p>
                                        </div>
                                        <!-- Section Title End -->
                                    </div>
                                    <!-- Our History Content End -->
                                </div>

                                <div class="col-lg-6">
                                    <!-- Our History Image Start -->
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-5.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                    <!-- Our History Image End -->
                                </div>
                            </div>
                        </div>
                        <!-- Our History Item End -->

                        <!-- 2011 -->
                        <div class="our-history-item tab-pane fade" id="2011" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Muhammad Naeem <span>Joins the Company</span>
                                            </h2>
                                            <p>Muhammad Naeem, the second son of the company’s founder, joined Emerald
                                                Instruments as a partner and production manager after completing his
                                                business and technical education.</p>
                                            <p>His training in CNC operations and design development elevated our production
                                                capabilities to European-level quality.</p>
                                            <p>His dedication has been key in producing advanced instruments that many
                                                manufacturers struggle to create.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-6.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2012 -->
                        <div class="our-history-item tab-pane fade" id="2012" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Installation of <span>First CNC Machine</span>
                                            </h2>
                                            <p>In 2012, Emerald Instruments installed its first CNC machine, marking a major
                                                shift towards precision and automated manufacturing.</p>
                                            <p>This upgrade significantly improved production accuracy for our international
                                                customers.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-7.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                    <!-- Our History Box End -->
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    <!-- Our History Box Start -->
                    <div class="our-history-box tab-content wow fadeInUp" data-wow-delay="0.25s" id="historybox">

                        



                        <!-- 2015 -->
                        <div class="our-history-item tab-pane fade" id="2015" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">European <span>Subsidiary Established</span>
                                            </h2>
                                            <p>To better serve European and American customers, our subsidiary Progline sp.
                                                z o.o. was established in Poland in 2015.</p>
                                            <p>Ahmed Sheraz frequently visits Poland to oversee operations and maintain
                                                service quality.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-8.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2017 -->
                        <div class="our-history-item tab-pane fade" id="2017" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Expansion of <span>Company Premises</span></h2>
                                            <p>Growing production demands led to expanding operations into the founder’s
                                                renovated family home.</p>
                                            <p>A major step that improved manufacturing capacity and workflow efficiency.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-9.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2018 - Hussnain -->
                        <div class="our-history-item tab-pane fade" id="2018na" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Hussnain Afzal <span>Joins the Company</span>
                                            </h2>
                                            <p>After completing his business studies, Hussnain Afzal joined as a partner and
                                                export manager.</p>
                                            <p>He introduced innovative ideas that simplified company operations
                                                dramatically.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-10.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2018 ERP -->
                        <div class="our-history-item tab-pane fade" id="2018erp" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Implementation of <span>ERP System</span></h2>
                                            <p>Under Hussnain's leadership, Emerald Instruments adopted an ERP system,
                                                improving management and production efficiency like never before.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-11.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2018 CNC upgrade -->
                        <div class="our-history-item tab-pane fade" id="2018cnc" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Upgraded Production with <span>Japanese
                                                    CNC</span></h2>
                                            <p>In 2018, Tsugami CNC Swiss-type lathe machines were added, delivering
                                                unmatched precision and minimal tolerances.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-12.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2019 -->
                        <div class="our-history-item tab-pane fade" id="2019" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Trade Fair <span>IDS Germany 2019</span></h2>
                                            <p>Emerald Instruments made its first major international appearance at IDS
                                                Cologne 2019, opening new global opportunities.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-13.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2025 -->
                        <div class="our-history-item tab-pane fade" id="2025" role="tabpanel">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="our-history-content">
                                        <div class="section-title">
                                            <h2 class="text-anime-style-2">Past and <span>Ready for the Future</span></h2>
                                            <p>With a proud legacy and continuous innovation, Emerald Instruments is
                                                prepared to shape the future of precision manufacturing.</p>
                                            <p>Our strong foundation and forward-thinking vision ensure long-term growth and
                                                global excellence.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="our-history-image">
                                        <figure class="image-anime">
                                            <img src="{{ asset('assets/frontend/images/emd-hist-14.jpg') }}"
                                                alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Our History Nav start -->
                        <div class="our-history-nav">
                            <ul class="nav nav-tabs" id="historyTab" role="tablist">                     
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2015-tab" data-bs-toggle="tab" data-bs-target="#2015"
                                        type="button" role="tab" aria-selected="false">In 2015 - European
                                        Subsidiary</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2017-tab" data-bs-toggle="tab" data-bs-target="#2017"
                                        type="button" role="tab" aria-selected="false">In 2017 - Expansion of
                                        Premises</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2018na-tab" data-bs-toggle="tab"
                                        data-bs-target="#2018na" type="button" role="tab" aria-selected="false">In
                                        2018 - Hussnain Afzal Joins</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2018erp-tab" data-bs-toggle="tab"
                                        data-bs-target="#2018erp" type="button" role="tab" aria-selected="false">In
                                        2018 - ERP System</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2018cnc-tab" data-bs-toggle="tab"
                                        data-bs-target="#2018cnc" type="button" role="tab" aria-selected="false">In
                                        2018 - Japanese CNC Upgrade</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2019-tab" data-bs-toggle="tab" data-bs-target="#2019"
                                        type="button" role="tab" aria-selected="false">In 2019 - IDS Trade
                                        Fair</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="2025-tab" data-bs-toggle="tab" data-bs-target="#2025"
                                        type="button" role="tab" aria-selected="false">In 2025 - Past &
                                        Future</button>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Our History Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our History Section End -->


    <!-- Our Features Section Start -->
    <div class="our-features">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our key feature</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Core strengths in <span>industrial
                                excellence</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-6">
                    <!-- Section Title Content Start -->
                    <div class="section-title-content wow fadeInUp" data-wow-delay="0.25s">
                        <p>At Emerald Instruments, our strength lies in delivering precision-driven industrial solutions
                            through innovation, expertise, and dependable engineering. We combine modern technology with
                            industry insight to support reliable operations and long-term performance across diverse
                            industrial sectors.</p>
                    </div>
                    <!-- Section Title Content End -->
                </div>
            </div>

            <div class="row no-gutters">
                <!-- Our Features Boxes Start -->
                <div class="our-features-boxes">
                    <!-- Our Features Item Start -->
                    <div class="our-features-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/frontend/images/emd-technology.png') }}" alt="">
                        </div>
                        <div class="features-item-content">
                            <h3>Smart Technology Implementation</h3>
                            <p>We utilize modern engineering tools and intelligent systems to enhance accuracy, control, and
                                operational efficiency. Our solutions are designed to integrate seamlessly into industrial
                                environments, ensuring dependable performance and optimized workflows.</p>
                        </div>
                    </div>
                    <!-- Our Features Item End -->

                    <!-- Our Features Item Start -->
                    <div class="our-features-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/frontend/images/emd-quality.png') }}" alt="">
                        </div>
                        <div class="features-item-content">
                            <h3>Assured Quality & Reliability</h3>
                            <p>Quality is embedded in every stage of our process—from design to delivery. We maintain strict
                                quality control measures to ensure consistency, durability, and compliance with industry
                                standards, giving our clients confidence in every solution we provide.</p>
                        </div>
                    </div>
                    <!-- Our Features Item End -->

                    <!-- Our Features Item Start -->
                    <div class="our-features-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/frontend/images/emd-research.png') }}" alt="">
                        </div>
                        <div class="features-item-content">
                            <h3>Research-Driven Development</h3>
                            <p>Innovation at Emerald Instruments is powered by continuous research and technical
                                improvement. By closely following industry advancements and evolving requirements, we
                                develop forward-thinking solutions that meet today’s challenges while preparing for
                                tomorrow’s demands.</p>
                        </div>
                    </div>
                    <!-- Our Features Item End -->

                    <!-- Our Features Item Start -->
                    <div class="our-features-item features-image-box">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/frontend/images/emd-key.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- Our Features Item End -->
                </div>
                <!-- Our Features Boxes End -->
            </div>
        </div>
    </div>
    <!-- Our Features Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Core strengths in <span>Instruments
                                innovation</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    @foreach ($teams as $team)
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a  data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('uploads/teams/' . $team->image) }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Team Image End -->

                        <!-- Team Content Start -->
                        <div class="team-content">
                            <h3>{{ $team->name }}</h3>
                            <p>{{ $team->designation }}</p>
                        </div>
                        <!-- Team Content End -->
                    </div>
                    @endforeach
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Testimonial Section Start -->
        <div class="container">
            <div class="row align-items-center">
                 <div class="col-lg-12">
                    <!-- Agency Support Slider  -->
                    <div class="testimonial-company-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img src="{{ asset('assets/frontend/images/emd-cert-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->

                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img src="{{ asset('assets/frontend/images/emd-cert-2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->

                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img src="{{ asset('assets/frontend/images/emd-cert-3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->

                                <!-- Agency Support Logo  -->
                                <div class="swiper-slide">
                                    <div>
                                        <img src="{{ asset('assets/frontend/images/emd-cert-4.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- Agency Support Logo -->
                            </div>
                        </div>
                    </div>
                    <!-- Agency Support Slider -->
                </div>
            </div>
        </div>
    <!-- Our Testimonial Section End -->

@endsection
