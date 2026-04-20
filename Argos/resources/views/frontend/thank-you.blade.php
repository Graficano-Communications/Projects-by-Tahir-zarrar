@extends('frontend.layout.master')
@section('title' ,'Argos Dental')
@section('main-container')
<section class="thank-you-section">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
        <strong>{{ session('status') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif  
    <div class="container text-center">
        <h1>Thank You for Your Order!</h1>
        <p>Your order has been placed successfully.</p>
        <p><strong>Order ID:</strong> {{ $order->id }}</p>
        <p><strong>Total Amount:</strong> ${{ number_format($order->total, 2) }}</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Return to Home</a>
    </div>
</section>
@endsection
