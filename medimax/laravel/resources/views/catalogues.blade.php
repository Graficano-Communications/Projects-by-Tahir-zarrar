@extends('front-layouts.master')

@section('title', 'catalogues')

@section('seo')
<meta name="description" content="">
<meta name="keywords" content="">
@endsection

@section('SpecificStyles')

<style>
    .bg-gif {
        background-image: url('{{ asset('medimax_assets/img/back.gif') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }


    .ptb-300 {
        padding-top: 250px;
        padding-bottom: 250px;
    }

    .group {
        display: flex;
        flex-direction: column;
        /* Arrange children vertically */
        align-items: center;
        justify-content: center;
        max-width: 100%;
        padding: 5px;
        text-align: center;
    }

    .s-card-three-btn {
        margin-top: 10px;
        /* Add space between the title and the button */
    }

    .input {
        width: 100%;
        height: 45px;
        padding-left: 3rem;
        border: 2px solid transparent;
        border-radius: 10px;
        outline: none;
        background-color: #f8fafc;
        color: #0d0c22;
        transition: .5s ease;
    }

    .input::placeholder {
        color: #94a3b8;
    }

    .input:focus,
    .input:hover {
        border-color: #00336b;
        background-color: #fff;
        box-shadow: 0 0 0 5px rgb(129 140 248 / 30%);
    }

    .icon {
        position: absolute;
        left: 1rem;
        fill: none;
        width: 1rem;
        height: 1rem;
    }

    .submit-btn {
        background-color: #C9D0D7;
        color: #fff;
        border: none;
        padding: 0.3rem 0.5rem;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;

    }

    .submit-btn i {
        font-size: 1.85rem;
    }

    .submit-btn:hover {
        background-color: #00224e;
    }

    .why-us-icon {
        position: absolute;
        color: #00336B;
        top: 50%;
        transform: translateY(-113%);
        left: 20px;
        height: 95px !important;
        width: auto;
    }

    .catalogue-image {
        border: 2px solid #ddd;
        border-radius: 8px;
        width: 100%;
        height: auto;

    }

    .catalogue-details {
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    .cat-name {
        font-size: 18px;
        font-weight: bold;
    }

    .cardflipbox {
        position: relative;
    }

    .cardflipbox .cardflipinner {
        position: relative;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        transform-style: preserve-3d;
        perspective: 1000px;
        -ms-transform-style: preserve-3d;
        -webkit-transform-style: preserve-3d;
        -webkit-perspective: 1000px;
        -webkit-backface-visibility: hidden
    }

    .cardflipbox .innercontent {
        position: absolute;
        left: 0;
        width: 100%;
        padding: 10px;
        outline: 1px solid transparent;
        -webkit-perspective: inherit;
        perspective: inherit;
        z-index: 2;
        top: 50%;
        transform: translateY(-50%) translateZ(60px) scale(.94);
        -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
        -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
        -moz-transform: translateY(-50%) translateZ(60px) scale(.94);
        -o-transform: translateY(-50%) translateZ(60px) scale(.94)
    }

    .cardflipbox .cardback,
    .cardflipbox .cardfront {
        background-size: cover;
        background-position: center;
        border-radius: 5px;
        width: 100%;
        height: 100%;
        min-height: 500px;
        background-color: #ffffff;
        transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        -webkit-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -ms-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -moz-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -o-transition: transform .9s cubic-bezier(.4, .2, .2, 1);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px
    }

    .cardflipbox .cardfront {
        transform: rotateY(0);
        transform-style: preserve-3d;
        -ms-transform: rotateY(0);
        -webkit-transform: rotateY(0);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -moz-transform: rotateY(0);
        -o-transform: rotateY(0)
    }

    .cardflipbox .cardback {
        background-color: #C9D0D7;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        border: 1px solid #00336B;
        transform: rotateY(180deg);
        transform-style: preserve-3d;
        -ms-transform: rotateY(180deg);
        -webkit-transform: rotateY(180deg);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg)
    }

    .cardflipbox:hover .cardfront {
        transform: rotateY(-180deg);
        transform-style: preserve-3d;
        -ms-transform: rotateY(-180deg);
        -webkit-transform: rotateY(-180deg);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg)
    }

    .cardflipbox:hover .cardback {
        -ms-transform: rotateY(0);
        -webkit-transform: rotateY(0);
        transform: rotateY(0);
        -webkit-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transform-style: preserve-3d
    }

    .cardflipbox .cardflipinner .cardfront {
        background-size: cover;
        background-position: center;
        backface-visibility: hidden;
        transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;

        -webkit-backface-visibility: hidden;
        -ms-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;
        -webkit-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;
        -moz-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s;
        -o-transition: transform .9s cubic-bezier(.4, .2, .2, 1), opacity .55s ease .25s
    }

    .cardflipbox .cardflipinner .cardfront::before {
        content: "";
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: block;
        opacity: .1;
        border: 1px solid #00336B;
        border-radius: 15px;
        background-color: inherit;
        backface-visibility: hidden;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px
    }

    .spacing {
        padding-left: 65px !important;
        padding-right: 65px !important;
        margin-bottom: 30px;
        text-transform: uppercase;
    }

    .title {
        background-color: #00224e;
        border-radius: 3px;
        padding: 17px 40px;
        max-width: min-content;
        text-transform: uppercase;
    }
</style>
@endsection
@section('content')


<!-- Page Banner Area -->
<div class="page-banner-area bg-5">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>All catalogues</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>catalogues</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-three bg-gif pt-100 pb-70">
    <div class="container">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="section-title-three">
            <h2 class="text-light">Let's check out our Catalogues</h2>
        </div>

        <div class="row">
            @foreach($catalogues as $cats)
            <div class="col-lg-4 col-sm-6 mb-3">
                <div class="cardflipbox" uk-scrollspy=" cls: uk-animation-slide-bottom; delay: 500; repeat: true">
                    <div class="cardflipinner">
                        <div class="cardfront" style="background-image: url('{{ asset($cats->image_path) }}');">
                            <div class="innercontent">
                                <img src="./assets/images/ca-int-lodo.png" alt="">
                            </div>
                        </div>
                        <div class="cardback">
                            <div class="innercontent">
                                <div class="spacing">
                                    <h3 style="text-align: center; font-family:'Plus Jakarta Sans', sans-serif ">
                                        Our Complete Range Catalogs
                                    </h3>


                                </div>
                                <div class="group " style="text-align: center; ">
                                    <div class="title">
                                        <h5 style="font-family: 'Plus Jakarta Sans', sans-serif">
                                            <a href="#" style="color: white; " data-id="{{ $cats->id }}" class="open-modal">
                                                {{ $cats->name }}
                                            </a>
                                        </h5>
                                    </div>


                                    <div class="s-card-three-btn">
                                        <button type="button" class="submit-btn open-modal" class="open-modal" data-bs-target="#feedbackModal" data-id="{{ $cats->id }}">
                                            <i class="bx bx-download"></i> <!-- Download Icon -->
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalLabel">Enter Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('feedback.store') }}" method="POST" class="password-form">
                    @csrf
                    <input type="hidden" name="id" id="catalogId" value="">
                    <div class="group">
                        <input class="input" type="password" name="password" placeholder="Enter Password" required autocomplete="off">
                        <button type="submit" class="submit-btn">
                            <i class="bx bx-download"></i> <!-- Download Icon -->
                        </button>
                    </div>
                </form>
                <p class="text-center"><span><a href="{{ route('contact')}}">Request for password.....</a></span></p>
            </div>
        </div>
    </div>
</div>





@endsection

@section('scripts')

<script>
    // Function to handle modal opening and set ID
    document.addEventListener('DOMContentLoaded', function() {
        const modalTriggers = document.querySelectorAll('.open-modal');
        const catalogIdInput = document.getElementById('catalogId');

        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const catalogId = this.getAttribute('data-id');
                catalogIdInput.value = catalogId; // Set the catalog ID in the hidden input

                // If the modal toggle is through a button (like here), the modal should open automatically
                const modalToggle = new bootstrap.Modal(document.getElementById('feedbackModal'));
                modalToggle.show();
            });
        });
    });
</script>

@endsection