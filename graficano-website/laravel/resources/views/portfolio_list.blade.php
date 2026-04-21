@extends('layouts.master')

@section('meta_title', 'Portfolio')
@section('meta_description', '')
@section('meta_tags', '')

@section('SpecificStyles')

@stop
@section('content')
 
    <!-- start page title -->
    <section class="half-section portfolio-parallax" data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('assets/images/banners/portfolio.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8  page-title-extra-small text-center d-flex justify-content-center flex-column">
                    <h2
                        class="text-uppercase text-yellow alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
						EXTENDED PORTFOLIO
					</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="pt-0">

        <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-3 justify-content-center padding-100px-top">
              <div class="col padding-100px-bottom">
				<a href="{{ route('frontportfolios', 'branding') }}">
					<div class="portfolio-box">
						<div class="portfolio-image">
							<img src="{{ asset('assets/images/home/Branding.jpg') }}" alt="">
							<div
								class="portfolio-hover  justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
								<div class="text-start">
									
									<h6
										class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
										<span>Branding</span>
									</h6>
								</div>
								<span
									class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
										class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
							</div>
						</div>
					</div>
				</a>
			  </div>
              <div class="col padding-100px-bottom">
				<a href="{{ route('frontportfolios', 'printing') }}">
					<div class="portfolio-box">
						<div class="portfolio-image">
							<img src="{{ asset('assets/images/home/Print.jpg') }}" alt="">
							<div
								class="portfolio-hover justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
								<div class="text-start">
								   
									<h6
										class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
										<span>Printing</span>
									</h6>
								</div>
								<span
									class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
										class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
							</div>
						</div>
					</div>
				</a>
			  </div>
              <div class="col padding-100px-bottom">
				<a href="{{ route('frontportfolios', 'photography') }}">
					<div class="portfolio-box">
						<div class="portfolio-image">
							<img src="{{ asset('assets/images/home/Photography.jpg') }}" alt="">
							<div
								class="portfolio-hover  justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
								<div class="text-start">
								   
									<h6
										class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
										<span>Photography</span>
									</h6>
								</div>
								<span
									class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
										class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
							</div>
						</div>
					</div>
				</a>
			  </div>
              <div class="col padding-100px-bottom ">
				<a href="{{ route('frontportfolios', 'web-and-digital') }}">
					<div class="portfolio-box">
						<div class="portfolio-image">
							<img src="{{ asset('assets/images/home/Digital-Marketing.jpg') }}" alt="">
							<div
								class="portfolio-hover  justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
								<div class="text-start">
									
									<h6
										class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
										<span>Web & Digital</span>
									</h6>
								</div>
								<span
									class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
										class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
							</div>
						</div>
					</div>
				</a>
			  </div>
              <div class="col padding-100px-bottom">
				<a href="{{ route('frontportfolios', 'video-3d') }}">
					<div class="portfolio-box">
						<div class="portfolio-image">
							<img src="{{ asset('assets/images/home/Videography.jpg') }}" alt="">
							<div
								class="portfolio-hover  justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
								<div class="text-start">
								   
									<h6
										class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
										<span>Video Documentaries & 3d</span>
									</h6>
								</div>
								<span
									class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
										class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
							</div>
						</div>
					</div>
				</a>
			  </div>
              <div class="col padding-100px-bottom">
				<a href="{{ route('frontportfolios', 'packaging') }}">
					<div class="portfolio-box">
						<div class="portfolio-image">
							<img src="{{ asset('assets/images/home/packaging.jpg') }}" alt="">
							<div
								class="portfolio-hover  justify-content-between d-flex flex-row align-items-end padding-3-rem-tb padding-4-rem-lr xl-padding-2-rem-all">
								<div class="text-start">
									
									<h6
										class="font-weight-600 alt-font text-extra-dark-gray text-uppercase mb-0 move-bottom-top-self">
										<span>Packaging</span>
									</h6>
								</div>
								<span
									class="position-absolute top-50px right-50px move-right-left lg-top-30px lg-right-30px sm-top-20px sm-right-20px"><i
										class="ti-arrow-top-right icon-small text-light-brownish-orange"></i></span>
							</div>
						</div>
					</div>
				</a>
			  </div>
            </div>
        </div>
    </section>
    <!-- end section -->



@endsection

@section('SpecificScripts')

@stop
