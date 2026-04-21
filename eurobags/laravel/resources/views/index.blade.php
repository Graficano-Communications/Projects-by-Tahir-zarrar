@extends('layouts.master')

@section('title', 'eurobag')
@section('description', 'eurobag')
@section('keywords', 'eurobag')


@section('SpecificStyles')

@stop

@section('content')

    <style>
        .bg-image-card {
            background: url('{{ asset('images/about-us-2.jpg') }}') no-repeat center center;
            background-size: cover;
            min-height: 400px;
            /* default height for large screens */
            position: relative;
        }



        /* Small screens (mobiles) */
        @media (max-width: 670px) {
            .bg-image-card {
                min-height: 500px;
            }
        }

        @media (max-width: 550px) {
            .bg-image-card {
                min-height: 600px;
            }
        }

        @media (max-width: 470px) {
            .bg-image-card {
                min-height: 750px;
            }
        }

        @media (max-width: 410px) {
            .bg-image-card {
                min-height: 850px;
            }
        }

        @media (max-width: 365px) {
            .bg-image-card {
                min-height: 950px;
            }
        }

        @media (max-width: 340px) {
            .bg-image-card {
                min-height: 1050px;
            }
        }

        .overlay-text {
            background: rgba(0, 0, 0, 0.6);
            /* optional: dark overlay for readability */
            border-radius: 15px;
        }
    </style>

    <!--=================================banner -->
    
    <section class="banner">
        <div class="swiper-container">
            <div class="swiper-wrapper" style="height: 100vh">
                @foreach ($banners as $key => $banner)
                    <div class="swiper-slide align-items-center d-flex responsive-overlap-md bg-overlay-black-30"
                        style="background-image:url({{ asset('images/' . $banner->image) }}); background-size: cover; background-position: center center;">
                        <div class="swipeinner container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9 col-md-10 text-center">
                                    {{-- <h1 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.25s">A digital marketing company
                  you can trust</h1>
                <h6 data-swiper-animation="fadeInUp" data-duration="1s" data-delay="0.5s">Award-Winning website design &
                  creative digital agency.</h6>
                <a class="btn btn-dark btn-round text-white" data-swiper-animation="fadeInUp" data-duration="1s"
                  data-delay="0.75s" href="#">Get Started Now<i class="fas fa-arrow-right pl-3"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"><i class="fas fa-arrow-left icon-btn"></i></div>
            <div class="swiper-button-next"><i class="fas fa-arrow-right icon-btn"></i></div>
        </div>
    </section>
    <!--=================================banner -->

    <!--================================= About Section -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm text-center bg-image-card"
                        style="border-radius: 15px; overflow: hidden;">

                        <div class="card-body p-0 position-relative">
                            <!-- Overlay Text on Background -->
                            <div
                                class="overlay-text position-absolute top-0 start-0 w-100 h-100 d-flex flex-column align-items-center justify-content-center text-white p-4">
                                <h3 class="fw-bold mb-3" style="color: #F17E21 !important;">About Us</h3>
                                <p style="text-align: justify;">
                                    Our factory, Euro Bags International, boasts decades of experience in crafting
                                    customized bags for
                                    partners across the globe, including the USA, UK, Australia, Ireland, Spain, Germany,
                                    and many more
                                    countries. We operate a world-class BAGS production facility, ensuring that any business
                                    dealing
                                    with us benefits from direct factory access, eliminating the need for sourcing agents.
                                    We specialize in producing a wide range of customized bags and backpacks to meet your
                                    needs.
                                    With customer-friendly minimum order quantities (MOQ), and logistics partners ensuring
                                    timely delivery
                                    worldwide, you can count on us for efficient service. Our fast turnaround time will
                                    surely exceed
                                    your expectations.
                                    At Euro Bags International, our mission has always been to extend our manufacturing
                                    services to
                                    companies and brands, offering both OEM and ODM services. Renowned as one of the premier
                                    suppliers
                                    of customized and bespoke bags, we pride ourselves on delivering top-notch service. Our
                                    comprehensive offerings include research and development, product design, and marketing
                                    consultancy,
                                    ensuring we meet all your needs from inception to market. We strive to cultivate
                                    partnerships with
                                    our customers, moving beyond a mere vendor-purchaser relationship to create
                                    collaborative alliances
                                    that drive mutual success.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================= About Section -->



    <!--=================================About -->
    {{-- <section class="space-ptb">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                    <img class="img-fluid border-radius" src="{{ asset('images/about-us.jpg') }}" alt="">>
                </div>
                <div class="col-lg-6 pl-xl-5">
                    <h2 class="mb-1">About Us</h2>
                    <p class="mb-4" style="text-align: justify">
                        Our factory, Euro Bags International, boasts decades of experience in crafting customized bags for
                        partners across the globe, including the USA, UK, Australia, Ireland, Spain, Germany, and many more
                        countries. We operate a world-class BAGS production facility, ensuring that any business dealing
                        with us benefits from direct factory access, eliminating the need for sourcing agents We specialize
                        in producing a wide range of customized bags and backpacks to meet your needs. With
                        customer-friendly minimum order quantities (MOQ), and logistics partners ensuring timely delivery
                        worldwide, you can count on us for efficient service. Our fast turnaround time will surely exceed
                        your expectations.
                        At Euro Bags International, our mission has always been to extend our manufacturing services to
                        companies and brands, offering both OEM and ODM services. Renowned as one of the premier suppliers
                        of customized and bespoke bags, we pride ourselves on delivering top-notch service. Our
                        comprehensive offerings include research and development, product design, and marketing consultancy,
                        ensuring we meet all your needs from inception to market. We strive to cultivate partnerships with
                        our customers, moving beyond a mere vendor-purchaser relationship to create collaborative alliances
                        that drive mutual success.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=================================About -->

    <!--================================= category -->
    <section class="space-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Our Categories</h2>
                        <p>Our clients are some of the most forward-looking companies in the world.</p>
                    </div>
                </div>
            </div>
            <div class="row">


                @php $category = \App\category::all()->sortBy('sequence') @endphp
                @foreach ($category as $cat)
                    <div class=" col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <img class="img-fluid" src="{{ asset('images/category/' . $cat->image) }}" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-description">
                                    <div class="portfolio-info">
                                        <h5><a href="{{ route('products.catgeory', $cat->slug) }}"
                                                class="portfolio-title text-primary">{{ $cat->name }}</a></h5>
                                        <span class="text-dark">Category</span>
                                    </div>
                                    <div class="portfolio-icon">
                                        <a class="portfolio-img" href="{{ asset('images/category/' . $cat->image) }}"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--=================================category -->

    <!--=================================why choose us -->
    <section class="py-5 bg-light">
        <div class="container">

            <!-- First Row (3 Columns) -->
            <div class="row gy-4">
                <div class="col-md-4">
                    <h3 class="fw-bold">
                        <span class="text-dark">WHY</span> <span class="text-primary">CHOOSE US?</span>
                    </h3>
                    <div class="mx-auto" style="width:60px; height:2px; background:#000;"></div>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold text-dark">FINEST QUALITY</h5>
                    <p class="text-muted" style="text-align: justify">
                        We continuously strive to delight our customers with outstanding quality of our products and
                        services. In our endeavor to achieve this objective, we create and nurture people of quality by
                        continuous education and training to maintain & improve the standards of manufacturing.
                    </p>
                </div>

                <div class="col-md-4">
                    <h5 class="fw-bold text-dark">PRODUCTION</h5>
                    <p class="text-muted" style="text-align: justify">
                        Our Production Planning and Control team predetermine the processes i.e., Use of human resources,
                        Raw materials, Machines etc. to plan each and every step in a long series of separate operations. It
                        helps us take the right decision at the right time and at the right place to achieve maximum
                        efficiency.
                    </p>
                </div>

                <div class="col-md-4">
                    <h5 class="fw-bold text-dark">PROFESSIONAL WORKERS</h5>
                    <p class="text-muted" style="text-align: justify">
                        Our highly skilled workers manufacture your products who are selected and appointed at production
                        lines after detailed skill development and testing criteria. Experienced managerial staff ensure
                        Right person at Right operation to produce best quality.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold text-dark">BEST PRICE</h5>
                    <p class="text-muted" style="text-align: justify">
                        Our production planning, strict quality controls and use of technology increases the efficiency and
                        reduces the wastages which enables us to offer best competitive price to our customers.
                    </p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold text-dark">FAST SHIPPING</h5>
                    <p class="text-muted" style="text-align: justify">
                        Our professional teams of Material sourcing, Production Planning and quality ensure the timely
                        shipping of orders. Export team make it possible to choose Time & Cost effective method for shipment
                        and keeps the customers updated about the status of their shipment.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--=================================why choose us  -->


    <!--=================================Workflow -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title is-sticky">
                        <h2>Smart Strategy & Excellent Performance</h2>
                        <p class="mb-4 mb-md-5">Process that guarantees high productivity and profitability for your
                            solution.</p>
                        <a href="#" class="btn btn-light-round btn-round">Let's Start Project<i
                                class="fas fa-arrow-right pl-3"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-info feature-info-style-08">
                        <div class="feature-info-inner">
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>01</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/6.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>R&D Department</h3>
                                    <p>Innovating new designs and improving existing products for optimal functionality and
                                        aesthetics. </p>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>02</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/1.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>Designing, Mockup</h3>
                                    <p>Developing and prototyping designs to visualize and refine the final product. </p>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>03</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/7.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>Cutting</h3>
                                    <p>Precision cutting of materials to exact dimensions for efficient use and minimal
                                        waste.</p>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>04</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/11.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>Sublimation /Embroidery /Printing</h3>
                                    <p>Applying designs and logos using various advanced printing and embroidery techniques.
                                    </p>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>05</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/10.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>Stitching</h3>
                                    <p>Advanced stitching techniques ensure durability and quality in every product. </p>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>06</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/8.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>Checking</h3>
                                    <p>Conducting thorough quality checks at various stages of production. </p>
                                </div>

                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>07</span></div>
                                <div class="feature-info-content">
                                    <div class="icon">
                                        <img src="{{ asset('images/workflow/3.png') }}" class="img-fluidd">
                                    </div>
                                    <h3>Inspection</h3>
                                    <p>Final inspection to ensure products meet all quality and specification standards.
                                    </p>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>08</span></div>
                                <div class="feature-info-content">
                                    <div class="icon-box effect large">
                                        <div class="icon">
                                            <img src="{{ asset('images/workflow/5.png') }}" class="img-fluidd">
                                        </div>
                                        <h3> Packing</h3>
                                        <p>Securely packing finished products for safe delivery to customers. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="feature-info-item">
                                <div class="feature-info-number"><span>09</span></div>
                                <div class="feature-info-content">
                                    <div class="icon-box effect large">
                                        <div class="icon">
                                            <img src="{{ asset('images/workflow/2.png') }}" class="img-fluidd">
                                        </div>
                                        <h3>Dispatching </h3>
                                        <p>Efficiently shipping finished products using reliable logistics partners for
                                            timely delivery.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!--=================================
            History -->




    <!--=================================Departments -->
    <section class="space-ptb bg-dark-half-lg"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="section-title text-center">
                        <h2 class="text-white"><span class="text-primary">What's Next?</span> Our Manufacturing
                            Departments</h2>
                        <p class="lead text-white">We love what we do. Our clients tell us the same thing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($departments as $department)
                    @php
                        $images = json_decode($department->images, true);
                        $firstImage = !empty($images)
                            ? asset('images/departments/' . $images[0])
                            : 'https://dummyimage.com/500x400/808080/fff';
                    @endphp

                    <div class="col-md-4">
                        <div class="case-study">
                            <div class="case-study-img" style="background-image: url('{{ $firstImage }}');">
                            </div>
                            <div class="case-study-info">
                                <a class="case-study-title font-weight-bold" href="#">
                                    {{ $department->name }} (Department #{{ $loop->iteration }})
                                </a>
                                <a href="{{ route('departments') }}" class="icon-btn"><i
                                        class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center mt-0 mt-md-4">
                    <a href="{{ route('departments') }}" class="btn btn-primary-round btn-round mx-3">View all
                        Departments<i class="fas fa-arrow-right pl-3"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================Departments -->






    <!--=================================
            Testimonial -->
    <section class="space-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center">
                    <div class="owl-carousel testimonial" data-nav-arrow="true" data-nav-dots="false" data-items="1"
                        data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="0" data-autoheight="true">
                        <div class="item">
                            <div class="testimonial-item">
                                {{-- <div class="testimonial-avatar shadow">
                                    <img class="img-fluid rounded-circle" src="{{ asset('images/avatar-1.jpg') }}"
                                        alt="">
                                </div> --}}
                                <div class="testimonial-content">
                                    <p>I bought a backpack from Euro Bags for college, and honestly, I’m impressed. It feels strong, carries all my books easily, and the straps are super comfortable. Way better than the bag I had before.</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <h6 class="mb-1">Alice Williams </h6>
                                        <span>Our Satisfied Client</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                {{-- <div class="testimonial-avatar shadow">
                                    <img class="img-fluid rounded-circle" src="https://dummyimage.com/100x100/808080/fff"
                                        alt="">
                                </div> --}}
                                <div class="testimonial-content">
                                    <p>Needed a new gym bag and tried Euro Bags. The space inside is perfect for my shoes, towel, and bottle. It’s lightweight too, which makes carrying it so much easier.</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <h6 class="mb-1">Michael Bean</h6>
                                        <span>Our Satisfied Client</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-item">
                                {{-- <div class="testimonial-avatar shadow">
                                    <img class="img-fluid rounded-circle" src="https://dummyimage.com/100x100/808080/fff"
                                        alt="">
                                </div> --}}
                                <div class="testimonial-content">
                                    <p>I ordered school bags for my kids, and they loved them. The designs are nice, the quality feels solid, and delivery was quick. Will definitely buy again.</p>
                                </div>
                                <div class="testimonial-author">
                                    <div class="testimonial-name">
                                        <h6 class="mb-1">Antonio Sheferd</h6>
                                        <span>Our Satisfied Client</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            Testimonial -->

    <!--=================================
            Client Logo -->
    <section class="space-pb our-clients">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-primary mb-0">Logistics Partner</h5>
                </div>
                <div class="col-xl-9 col-md-8">
                    <div class="owl-carousel" data-nav-arrow="false" data-items="4" data-md-items="4" data-sm-items="4"
                        data-xs-items="3" data-xx-items="2" data-space="40" data-autoheight="true">
                        <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/0.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/6.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/2.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/3.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/4.png') }}" alt="">
                        </div>
                         <div class="item">
                            <img class="img-fluid w-75 " src="{{ asset('/images/logistic/5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            Client Logo -->

    <!--=================================
            Blog -->
    <section class="space-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Latest News & Inspirational Stories</h2>
                        <p>Check out our latest blog posts, articles, client success stories and essential announcement.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <img class="img-fluid" src="{{ asset('images/blogs/' . $blog->images) }}"
                                    alt="">
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-info">
                                    <div class="blog-post-author">
                                        <a href="{{ route('blog_post', $blog->slug) }}"
                                            class="btn btn-light-round btn-round text-primary">Blog</a>
                                    </div>
                                    <div class="blog-post-date">
                                        <a
                                            href="{{ route('blog_post', $blog->slug) }}">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y ') }}</a>
                                    </div>
                                </div>
                                <div class="blog-post-details">
                                    <h5 class="blog-post-title mb-0">
                                        <a href="{{ route('blog_post', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=================================
            BLog -->






@endsection
@section('scripts')
    <script type="text/javascript">
        function addToCart($id) {
            var val = $id;
            console.log(val);
            var id = document.getElementById('id' + val).value;
            var name = document.getElementById('name' + val).value;
            var qty = 1;
            var price = document.getElementById('price' + val).value;
            var color = document.getElementById('clr' + val).value;
            var image = document.getElementById('image' + val).value;
            var data = [id, name, qty, price, color, image];
            var token = document.getElementById('token').value;
            var token_array = {
                "_token": token
            };
            // data.push(token_array);
            data = {
                'data': data,
                '_token': token
            };
            console.log(data);
            $.ajax({
                type: 'POST',
                url: '/add_to_cart',
                data: data,
                success: function(data) {
                    $data = $(data);
                    console.log($data);
                    $('#showcart').empty();
                    var total = 0.0;
                    for (var key in data) {
                        if (data.hasOwnProperty(key)) {
                            $('<li><div class="media"><a href="#"><img class="mr-3" src="' + data[key][
                                    "options"
                                ]["image"] +
                                '" alt=""></a><div class="media-body"><a href="#"><h4>' + data[key][
                                    "name"
                                ] + '</h4></a><h4><span>' + data[key]["qty"] + ' x RS.' + data[key][
                                    "price"
                                ] +
                                '</span></h4></div></div><div class="close-circle"><a href="http://beta.cashoponline.com/removecart/' +
                                data[key]["rowId"] +
                                '"><i class="fa fa-times" aria-hidden="true"></i></a></div></li>').appendTo(
                                '#showcart');
                        }
                        total = total + data[key]["subtotal"];
                        console.log(data[key]["subtotal"]);
                    }
                    console.log(parseFloat(total));
                    $(' <li><div class="total"><h5>subtotal : <span>RS. ' + parseFloat(total) +
                        '</span></h5></div></li><li><div class="buttons"><a href="{{ route('cart') }}" class="view-cart">view cart</a><a href="{{ route('order') }}" class="checkout">checkout</a></div></li>'
                    ).appendTo('#showcart');
                    $("#addtocart").modal('show');
                },
                error: function(request, status, error) {
                    console.log(request.responseText);
                }
            });
        }
    </script>
@stop
