@extends('frontend.layout.master')
@section('title' ,'Dua Real Estate')
@section('main-container')
<style>
    /* //payment_table  */
.payment_plan-table {
    list-style-type: none;
    padding: 0;
}

.payment_plan-table_price{
font-weight: 700;
font-size: 30px;
letter-spacing: 2px;
 padding: 10px 0px;
}
.payment_plan-table li {
    margin-top: 0rem;
    font-size: 16px;
    height: 50px;
    display:flex;
     justify-content: center;
     align-items: center;
    
}
.payment_plan-table li:nth-child(3n+1) {
    background: #F1F1F1;
    color:#475A69;
    padding: 10px 0px;

}

.payment_plan-table li:nth-child(3n+2) {
    background: #28306e;
    color:white;

}

.payment_plan-table li:nth-child(3n) {
  
    background: #E7E7E7;
    color:#475A69;

    padding: 10px 0px;
}

.mobile_bg_color{
background-color: #F1F1F1;

}
.fs-350 {
    font-size: 15rem;
    line-height: 21.875rem;
}

.mobile_bg_color:hover{
    background-color: #F1F1F1; 
    }

    @media only screen and (max-width: 767px) {
    .mobile{
        padding: 0px 25px;
        background:rgb(239, 237, 237);
        margin-bottom:20px;
    }
}

</style>
    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h1 class="text-base-color">Best Plans for you</h1>
                    <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Help you to find the <span class="fw-700 text-highlight d-inline-block">perfect one.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                </div>
                <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                    <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Dua Real Estate, in partnership with CA Gold City, offers flexible payment plans to help residents and businesses secure their place in Sialkot’s premier housing society.</span>
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-hidden position-relative p-0">
        <div class="opacity-very-light bg-dark-gray z-index-1"></div>
        <div class="container-fluid">
            <div class="row overlap-height">
                <div class="col-12 p-0 position-relative overlap-gap-section">
                    <img src="{{ asset('assets/frontend/images/projects.jpg') }}" alt="" class="w-100">
                    <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 position-absolute right-minus-170px lg-right-0px bottom-50px md-bottom-minus-60px xs-bottom-minus-50px text-white text-outline ls-minus-5px lg-right-0px text-outline-width-2px z-index-2" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">CA Gold City</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section --> 
    <!-- start section --> 
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center mb-6 xs-mb-8">
                <div class="col-md-8 text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Plans for make you <span class="fw-700 text-highlight d-inline-block"> Plot Owner<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                </div>
                {{-- <div class="col-md-4" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <a href="test" class="fw-600 alt-font text-dark-gray text-dark-gray-hover d-flex align-items-center">View all property<span class="d-flex align-items-center justify-content-center bg-dark-gray h-40px w-40px text-center rounded-circle fs-16 text-white ms-10px"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div> --}}
            </div>
            <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center">
                <!-- Start box item -->
                @foreach($plans as $plan)
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="#">
                                    <img src="{{ asset('uploads/payment_plans/' . $plan->plan_image) }}" alt="Plans Image">
                                </a>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ $plan->plan_name }}</a>
                                    </div>
                                    <p class="mb-20px">{{ $plan->short_description }}</p>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col text-center">
                                        <a href="#" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600" data-bs-toggle="modal" data-bs-target="#modal-{{ $plan->id }}">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <!-- Full Page Modal for Each Plan -->
                    <div class="modal fade" id="modal-{{ $plan->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $plan->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalLabel-{{ $plan->id }}">{{ $plan->plan_name }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 md-mb-50px">
                                                @isset($plan->large_description)
                                                    <span class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Property description</span>
                                                    <p>{!! $plan->large_description !!}</p>
                                                @endisset
            
                                                <!-- Specifications for the Plan -->
                                                @if(!empty($plan->specifications))
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Specification</span>
                                                        </div>
                                                    </div>
                                                    @foreach(array_chunk($plan->specifications, 3) as $specChunk)
                                                        <div class="row">
                                                            @foreach($specChunk as $spec)
                                                                <div class="col-xl-4 col-md-6 col-12">
                                                                    <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                                                        <div class="feature-box-icon me-10px">
                                                                            <img src="images/property-details-08.svg" class="w-25px" alt="">
                                                                        </div>
                                                                        <div class="feature-box-content">
                                                                            <span class="text-dark-gray">{{ $spec['heading'] }}:</span> {{ $spec['details'] }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                @endif
            
                                                <!-- Payment Tables Related to the Plan -->
                                                <div class="row align-items-center pricing-table-style-05 g-0 mb-6 justify-content-center">
                                                    @foreach($plan->paymentTables as $table)
                                                        <div class="col-lg-4 col-md-8 md-mb-30px px-1 my-2">
                                                            <div class="d-flex justify-content-center align-items-center gap-3">
                                                                <div class="d-flex ">
                                                                    <img src="{{ asset('uploads/payment_tables/' . $table->plan_image) }}" alt="{{ $table->plan_name }}" width="65px" height="60px" style="margin-right:20px" />
                                                                    <h2 class="mb-0">
                                                                        <span style="font-size:50px; font-weight:700; color:#28306e;">{{ $table->plan_name }}</span>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <ul class="text-center payment_plan-table">
                                                                @foreach($table->specifications as $spec)
                                                                    <li>{{ $spec['heading'] ?? 'Default Heading' }}</li>
                                                                    <li class="payment_plan-table_price">
                                                                        <div style="font-size:32px;">
                                                                            {{ $spec['details'] ?? 'Default Details' }}
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- End box item -->
            </div>
            
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
    </section>
    <!-- end section -->
@endsection