@extends('front-layouts.master')

@section('title', 'Search')
@section('content')


<!-- Subcategories Area -->
<div class="doctors-area bg-color ptb-100">
    <div class="container">
        <div class="section-title-one">
            <h2>Let's check out our products</h2>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form id="" action="{{ route('search') }}">
                        <h3>Search Products</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Enter password">
                                    <div class="help-block with-errors"></div>
                                    <i class='bx bx-search'></i>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="default-btn three">Search product <span></span></button>

                        </div>
                    </form>
                </div>
            </div>


        </div>

       





    </div>
</div>
<!-- End Subcategories Area -->
@endsection