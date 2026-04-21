@extends('layouts.master')

@section('title', 'Order Confirmation')

@section('content')

    <!-- thank-you section start -->
    <section class="section-b-space light-layout">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="border:4px solid #be2025;padding:30px">
                    <div class="success-text"><i class="fa fa-check-circle" aria-hidden="true"></i>
                        <h2>Thank you for choosing Credo</h2>
                        <p>your selected product will be with you shortly.</p> 
                        <p>{{ $msg }}</p>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->

@endsection