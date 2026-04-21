@extends('frontend.layout.master')
@section('title', 'Yamada')
@section('main-container')


    <!-- page-title -->
    <div class="tf-page-title style-2"
        style="background-image: url('{{ asset('assets/frontend/images/front-images/contact-banner.jpg') }}');">
        <div class="container-full">
            <div class="heading text-center text-white">Contact Us</div>
        </div>
    </div>
    <!-- /page-title -->

    <!-- form -->
    <section class="flat-spacing-21">
        <div class="container">
            <div class="tf-grid-layout gap30 lg-col-2">
                <div class="tf-content-left">
                    <h5 class="mb_20">Visit Our Store</h5>
                    <div class="mb_20">
                        <p class="mb_15"><strong>Address</strong></p>
                        <p>01/563, Abbot Road Sialkot-51310, Pakistan</p>
                    </div>
                    <div class="mb_20">
                        <p class="mb_15"><strong>Phone</strong></p>
                        <p>(+92) 332-8635787</p>
                    </div>
                    <div class="mb_20">
                        <p class="mb_15"><strong>Email</strong></p>
                        <p>info@Yamadainst.com</p>
                    </div>
                    <div class="mb_36">
                        <p class="mb_15"><strong>Open Time</strong></p>
                        <p class="mb_15"> Mon - Fri: 9.00am - 5.00pm <br> Saturday: 10.00am - 6.00pm </p>
                        <p>Sunday Closed</p>
                    </div>
                    {{-- <div>
                        <ul class="tf-social-icon d-flex gap-20 style-default">
                            <li><a href="#" class="box-icon link round social-facebook border-line-black"><i class="icon fs-14 icon-fb"></i></a></li>
                            <li><a href="#" class="box-icon link round social-twiter border-line-black"><i class="icon fs-12 icon-Icon-x"></i></a></li>
                            <li><a href="#" class="box-icon link round social-instagram border-line-black"><i class="icon fs-14 icon-instagram"></i></a></li>
                            <li><a href="#" class="box-icon link round social-tiktok border-line-black"><i class="icon fs-14 icon-tiktok"></i></a></li>
                            <li><a href="#" class="box-icon link round social-pinterest border-line-black"><i class="icon fs-14 icon-pinterest-1"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="tf-content-right">
                    <h5 class="mb_20">Get in Touch</h5>
                    <p class="mb_24">If you’ve got great products your making or looking to work with us then drop us a
                        line.</p>
                    <div>
                        <form class="form-contact" id="contactform" action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="d-flex gap-15 mb_15">
                                <fieldset class="w-100">
                                    <input type="text" name="name" id="name" required placeholder="Name *" />
                                </fieldset>
                                <fieldset class="w-100">
                                    <input type="email" name="email" id="email" required placeholder="Email *" />
                                </fieldset>
                            </div>
                            <div class="mb_15">
                                <textarea placeholder="Message" name="comment" id="message" required cols="30" rows="10"></textarea>
                            </div>
                            <div class="send-wrap">
                                <button type="submit"
                                    class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /form -->
    <!-- map -->
    <div class="w-100">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3364.9347893743816!2d74.53044878072433!3d32.501172030445055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea5caf5a65e5%3A0x2911178844249ef6!2sYamada%20Instruments!5e0!3m2!1sen!2s!4v1740747414233!5m2!1sen!2s"
            width="100%" height="646" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- /map -->

@endsection
