@extends('frontend.layout.master')
@section('title', 'EMERALD INSTRUMENTS')
@section('main-container')

    <!-- Page Header Start -->
	<div class="page-header parallaxie"style="background: url('{{ asset('assets/frontend/images/emd-banner-contactus.jpg') }}') no-repeat center center !important;">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>us</span></h1>
						<nav class="wow fadeInUp">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item"><a {{ route('home') }}>home</a></li>
								<li class="breadcrumb-item active" aria-current="page">contact us</li>
							</ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
                <div class="col-lg-5">
                    <!-- Contact Information Start -->
                    <div class="contact-information">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch <span>with us</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Reach out for any inquiries, support, or to discuss how we can meet your industrial needs.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/frontend/images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>contact</h3>
                                    <p>+92523560987</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/frontend/images/icon-mail.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Email</h3>
                                    <p>sheraz@emerald.pk</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->

                            <!-- Page Contact Item Start -->
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/frontend/images/icon-location.svg') }}" alt="">
                                </div>
                                <div class="contact-info-content">
                                    <h3>Our Address</h3>
                                    <p>115/C-B, Factory Roras Road, P.O.Box 766, Sialkot-51310, Pakistan.</p>
                                </div>
                            </div>
                            <!-- Page Contact Item End -->
                        </div>
                    </div>
                    <!-- Contact Information End -->
                </div>

                <div class="col-lg-7">
                    <!-- Page Contact Form Start -->
                    <div class="contact-us-form">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Contact <span>me</span></h2>
                        </div>

                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form  action="{{ route('submit.form') }}" method="POST" enctype="multipart/form-data" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.5s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" id="fname" placeholder="Enter full name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone no." required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="comment" class="form-control" id="message" rows="4" placeholder="Write Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>submit message</span></button>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                    </div>
                    <!-- Page Contact Form End -->
                </div> 
            </div>
        </div>
    </div>
    <!--  Page Contact Us End -->

    <!-- Google Map Start -->
    <div class="google-map">
        <div class="container-flude">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.2851941951367!2d74.52055279999999!3d32.4918058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea15047b27f3%3A0x4f94c9779a0c131a!2sEMERALD%20INSTRUMENTS!5e0!3m2!1sen!2s!4v1764590772448!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.2851941951367!2d74.52055279999999!3d32.4918058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea15047b27f3%3A0x4f94c9779a0c131a!2sEMERALD%20INSTRUMENTS!5e0!3m2!1sen!2s!4v1764590772448!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map End -->






@endsection
