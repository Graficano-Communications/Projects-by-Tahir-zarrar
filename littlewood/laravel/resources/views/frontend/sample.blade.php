@extends('frontend.layouts.master')
@section('title', 'Littlewood')
@section('main-container')
    <style>
        section.big-section {
            padding: 60px 0;
        }

        section {
            padding: 80px 0 !important;
        }

        section.half-section {
            padding: 120px 0 !important;
            position: relative !important;
            background-size: cover !important;
        }

        .banner-text {
            background: linear-gradient(to right, #ffb703 0%, #fb8500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- start page title -->

    <section class="half-section bg-light-gray parallax " data-parallax-background-ratio="0.5"
        style="background-image:url('{{ asset('frontend/images/sample-banner.jpg') }}');">
        <div class="container">
            <div class="row align-items-stretch justify-content-center extra-small-screen">
                <div
                    class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                    {{-- <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Contact Us</h1> --}}
                    <h2
                        class="banner-text alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">
                        Request a Sample</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="cover-background big-section xs-no-padding-tb xs-border-tb border-color-medium-gray wow animate__fadeIn bg-light-blue">
        <div class="container xs-no-padding-lr">
            <div class="row justify-content-center ">
                <div class="col-12 col-xl-7 col-lg-7 col-md-9 col-sm-11">
                    <div 
                        class="text-center bg-white box-shadow-large border-radius-6px padding-5-rem-tb padding-7-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius" style="background-color: #011647 !important">
                        <span
                            class="alt-font text-medium text-white text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">Request
                            a Sample</span>
                        <h5
                            class="alt-font banner-text font-weight-700 text-uppercase letter-spacing-minus-1px margin-40px-bottom w-80 mx-auto xs-w-100">
                            Need a Sample for your business?</h5>
                        <!-- start contact form -->
                        <form action="{{ route('sample.form') }}" method="post" enctype="multipart/form-data"
                            class="margin-30px-bottom">
                            @csrf

                            <input class="medium-input border-radius-5px margin-25px-bottom required" type="text"
                                name="name" placeholder="Your name" />

                            <input class="medium-input border-radius-5px margin-25px-bottom required" type="email"
                                name="email" placeholder="Your email address" />

                            <input class="medium-input border-radius-5px margin-25px-bottom required" type="text"
                                name="phone" placeholder="Your Phone number" />

                            <!-- Select Box -->
                            <select class="medium-input border-radius-5px margin-25px-bottom required" name="portfolio_id">
                                <option value="">Select a Category</option>
                                @foreach ($portfolios as $portfolio)
                                    <option value="{{ $portfolio->id }}">{{ $portfolio->caption }}</option>
                                @endforeach
                            </select>

                            <!-- File Upload -->
                            <input class="medium-input border-radius-5px margin-25px-bottom required bg-white" type="file"
                                name="attachment" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" />

                                 <input class="medium-input border-radius-5px margin-25px-bottom required" type="text"
                                name="comment" placeholder="Your message" />

                            <button
                                class="btn btn-fancy btn-large btn-dark-gray btn-round-edge w-100 no-margin-bottom "
                                type="submit" name="submit">Request for a Sample</button>

                            <div class="form-results border-radius-5px d-none"></div>
                        </form>

                        <p class="w-80 mx-auto text-extra-small line-height-22px m-0 xs-w-100 text-white">We are committed to
                            protecting your privacy. We will never collect information about you without your explicit
                            consent.</p>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


@endsection
