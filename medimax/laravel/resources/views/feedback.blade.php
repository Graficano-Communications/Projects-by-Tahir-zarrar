@extends('front-layouts.master')

@section('title', 'Feedback')

@section('content')
<script src='https://challenges.cloudflare.com/turnstile/v0/api.js'></script>
<!-- =======================
Main hero START -->
<section class="pt-xl-8">
    <div class="container">
        <div class="row g-4 g-xxl-5">
            <div class="col-xl-9 mx-auto">
                <!-- Image -->
                <img src="{{asset('assets_unik/images/feedback.jpg')}}" class="rounded" alt="contact-bg">
                <!-- Contact form START -->
                <div class="row mt-n5 mt-sm-n7 mt-md-n8">
                    <div class="col-11 col-lg-10 mx-auto">
                        <div class="card shadow p-4 p-sm-5 p-md-6">
                            <!-- Card header -->
                            <div class="card-header border-bottom px-0 pt-0 pb-5">
                                <!-- Breadcrumb -->
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="list-style:none;margin-bottom:0px !important">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if ($message = Session::get('success'))
                                <div class="alert alert-success bg-succes alert-dismissible fade show" role="alert">
                                    <strong class="text-black">{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                @if ($message = Session::get('error'))
                                <div class="alert alert-danger bg-succes alert-dismissible fade show" role="alert">
                                    <strong class="text-black">{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <nav class="mb-3" aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dots pt-0">

                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Review</li>
                                    </ol>
                                </nav>
                                <!-- Title -->
                                <h1 class="mb-3 h3">Your feedback fuels our journey.</h1>
                                <p class="mb-0">share your thoughts here!</p>
                            </div>
                            <!-- Card body & form -->
                            <form class="card-body px-0 pb-0 pt-5" method="POST" action="{{ route('feedback.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <!-- Name -->
                                <div class="input-floating-label form-floating mb-4">
                                    <input type="text" name="name" class="form-control bg-transparent" id="floatingName"
                                        placeholder="Password">
                                    <label for="floatingName">Your name</label>
                                </div>
                                <!-- Email -->
                                <div class="input-floating-label form-floating mb-4">
                                    <input type="email" name="email" class="form-control bg-transparent"
                                        id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="input-floating-label form-floating mb-4">
                                    <input type="text" name="company_name" class="form-control bg-transparent"
                                        id="floatingInput" placeholder="company">
                                    <label for="floatingInput">Organization</label>
                                </div>
                                <div class="input-floating-label form-floating mb-4">
                                    <select class="form-select form-control bg-transparent" id="rating" name="rating"
                                        required>
                                        <option selected disabled>Rating </option>
                                        <option value="1">⭐ (1/5)</option>
                                        <option value="2">⭐⭐ (2/5)</option>
                                        <option value="3">⭐⭐⭐ (3/5)</option>
                                        <option value="4">⭐⭐⭐⭐ (4/5)</option>
                                        <option value="5">⭐⭐⭐⭐⭐ (5/5)</option>
                                    </select>
                                </div>

                                <!-- Message -->
                                <div>
                                    <textarea class="form-control bg-transparent" name="editor1"
                                        placeholder="Write your message here...." style="height: 150px"></textarea>

                                </div>
                                <br />
                                <div class="cf-turnstile " data-sitekey="0x4AAAAAAAXsZee4erJ3gaBA"></div>
                                <input type="text" name="status" value="private" hidden>

                                <br />
                                <button class="btn btn-lg btn-primary mb-0 ">Send a message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Contact form END -->
            </div>
        </div> <!-- Row END -->
    </div>
</section>
<!-- =======================
Main hero END -->


@endsection