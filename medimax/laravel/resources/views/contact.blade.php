@extends('front-layouts.master')

@section('title', 'Contact Us')

@section('content')

<!-- Page Banner Area -->
<div class="page-banner-area bg-contact">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Contact Us Area -->
<div class="contact-area bg-color ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="contact-form">
                    <form id="contactFor" onsubmit="sendMail(); return false;">
                        <h3>Get in Touch</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required placeholder="Full name">
                                    <i class='bx bx-user'></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required placeholder="Email">
                                    <i class='bx bx-envelope'></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="phone" required placeholder="Phone Number">
                                    <i class='bx bx-phone-call'></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" required placeholder="Your subject">
                                    <i class='bx bxs-id-card'></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="6" required placeholder="Your Message"></textarea>
                            <i class='bx bx-envelope'></i>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="default-btn three">Send Your Message <span></span></button>
                        </div>
                    </form>
                </div>




            </div>

            <div class="col-lg-4">
                <div class="contact-info">
                    <div class="section-title-two">
                        <h2>Contact Info</h2>
                        <p>Medimax International in Sialkot, Pakistan, is a leading manufacturer and exporter, dedicated to excellence and quality in all its products.</p>
                    </div>
                    <ul>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel: 0092-52-3551999"> 0092-52-3551999</a>
                            <br>
                            <a href="tel:0092-52-3556999">0092-52-3556999</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:info@medimaxint.com">info@medimaxint.com</a>
                            <br>

                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:sales@medimaxint.com">sales@medimaxint.com</a>
                            <br>

                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            Ugoki Road, Adalat Garah, Sialkot 51330, Pakistan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-map">
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16564.920668328305!2d74.4753657!3d32.4841596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea2f358728c3%3A0x8b451b5efa45d41a!2sMedimax%20International!5e1!3m2!1sen!2s!4v1732775400534!5m2!1sen!2s"></iframe>
    </div>
</div>
<!-- End Contact Us Area -->
<script>
    function sendMail() {
        event.preventDefault();
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var subject = document.getElementById('subject').value;
        var message = document.getElementById('message').value;

        // Construct mailto link
        var mailtoLink = "mailto:sales@medimaxint.com" +
            "?subject=" + encodeURIComponent(subject) +
            "&body=" + encodeURIComponent("Name: " + name + "\nEmail: " + email + "\nPhone: " + phone + "\n\nMessage:\n" + message);

        // Open the email client with the mailto link
        window.location.href = mailtoLink;
    }
</script>


@endsection