@extends('layouts.master')

@section('meta_title', ': Pricing | digital marketing services ')
@section('meta_description', 'In comparison to our competitors, we provide high-quality services apparently at balanced pricing.')
@section('meta_tags', '') 

@section('SpecificStyles')
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <style type="text/css">
        .contatc-box {
            background-color: #fdce07;
            padding-top: 10%;
            padding-bottom: 10%
        }

        .navbar-light {
            background-color: #fdce07 !important;
            position: relative;
        }

        .demo {
            padding: 100px 0;
        }

        .heading-title {
            margin: 50px;
        }

        .pricingTable {
            text-align: center;
            transition: all 0.5s ease 0s;
        }

        .pricingTable:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .pricingTable .pricingTable-header {
            color: #000;
        }

        .pricingTable .heading {
            display: block;
            padding-top: 25px;
        }

        .pricingTable .heading>h3 {
            font-size: 20px;
            margin: 0;
            text-transform: capitalize;
        }

        .pricingTable .subtitle {
            display: block;
            font-size: 13px;
            margin-top: 5px;
            text-transform: capitalize;
        }

        .pricingTable .price-value {
            display: block;
            font-size: 36px;
            font-weight: 700;
            padding-bottom: 25px;
        }

        .pricingTable .price-value span {
            display: block;
            font-size: 14px;
            line-height: 20px;
            text-transform: uppercase;
        }

        .pricingTable .pricingContent {
            text-transform: capitalize;
            background: #fbfbfb;
            color: #000;
        }

        .pricingTable .pricingContent ul {
            list-style: none;
            padding: 15px 20px 10px;
            margin: 0;
            text-align: left;
        }

        .pricingTable .pricingContent ul li {
            font-size: 14px;
            padding: 12px 0;
            border-bottom: 1px dashed #e1e1e1;
            color: #9da1ad;
        }

        .pricingTable .pricingContent ul li i {
            font-size: 14px;
            float: right;
        }

        .pricingTable .pricingTable-sign-up {
            padding: 20px 0;
            background: #fbfbfb;
            color: #fff;
            text-transform: capitalize;
        }

        .pricingTable .btn-block {
            width: 60%;
            margin: 0 auto;
            font-size: 17px;
            color: #000;
            text-transform: capitalize;
            border: none;
            border-radius: 5px;
            padding: 10px;
            transition: all 0.5s ease 0s;
        }

        .pricingTable .btn-block:before {
            content: "\f007";
            font-family: 'FontAwesome';
            margin-right: 10px;
        }

        .pricingTable.blue .pricingTable-header,
        .pricingTable.blue .btn-block {
            background: #CCFFFF;
        }

        .pricingTable.pink .pricingTable-header,
        .pricingTable.pink .btn-block {
            background: #FF3333;
        }

        .pricingTable.orange .pricingTable-header,
        .pricingTable.orange .btn-block {
            background: #FFCC00;
        }

        .pricingTable.green .pricingTable-header,
        .pricingTable.green .btn-block {
            background: #66CC99;
        }

        .pricingTable.blue .btn-block:hover,
        .pricingTable.pink .btn-block:hover,
        .pricingTable.orange .btn-block:hover,
        .pricingTable.green .btn-block:hover {
            background: #000;
            color: #fff;
        }

        .fa-check {
            color: green;
        }

        .fa-times {
            color: red;
        }

        small {
            color: #000 !important;
        }

        @media screen and (max-width: 990px) {
            .pricingTable {
                margin-bottom: 20px;
            }
        }
    </style>
@stop

@section('content')

    <section>
		<div class="container">
			<h1 style="font-weight: bold;text-transform:uppercase">Pricing</h1>
		</div>
		
        @if (Session::has('error'))
            <p class="alert alert-info">{{ Session::get('error') }}</p>
        @endif
        @if (Session::has('gatepass'))
            <div class="demo">
                <div class="container">
					<div class="row">
                        <h1 class="heading-title">Date: 6 June,2022</h1>
                    </div>
                    @if($type == "portfolio")
                    <div class="row text-center">
                        <h1 class="heading-title">PORTFOLIO BASED</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable blue">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Startup</h3>
                                        <span class="subtitle">Five Pages Website</span>
                                    </span>
                                    <span class="price-value">Rs.60,000 <span>1 Week Support</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>5 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>EXTRA Pages(Content Based) <i class="fa fa-times"></i></li>
                                        <li>Events Page<i class="fa fa-times"></i></li>
                                        <li>CSR Page<i class="fa fa-times"></i></li>
                                        <li>Catalogues Page PDF<i class="fa fa-times"></i></li>
                                        <li>Compliances Page<i class="fa fa-times"></i></li>
                                        <li>History Timeline<i class="fa fa-times"></i></li>
                                        <li>Media Gallery<i class="fa fa-times"></i></li>
                                        <li>Video Gallery<i class="fa fa-times"></i></li>
                                        <li>Blogs<i class="fa fa-times"></i></li>
                                        <li>Departments<i class="fa fa-times"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-times"></i></li>
                                        <li>Direct Email Inquiry<i class="fa fa-check"></i></li>
                                        <li>Direct whatsapp Inquiry<i class="fa fa-times"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 3 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <i class="fa fa-times"></i></li>
                                        <li>Currency Change <i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-times"></i></li>
                                        <li>Meta Description <i class="fa fa-times"></i></li>
                                        <li>Meta Tags<i class="fa fa-times"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-times"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable pink">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Standard</h3>
                                        <span class="subtitle">7 Pages website</span>
                                    </span>
                                    <span class="price-value">Rs.70,000 <span>2 Week Support</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>7 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>2 EXTRA Pages(Content Based) <i class="fa fa-check"></i></li>
                                        <li>Events Page<i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues Page PDF<i class="fa fa-check"></i></li>
                                        <li>Compliances Page<i class="fa fa-times"></i></li>
                                        <li>History Timeline<i class="fa fa-times"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-times"></i></li>
                                        <li>Blogs<i class="fa fa-times"></i></li>
                                        <li>Departments<i class="fa fa-times"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Direct Email Inquiry<i class="fa fa-check"></i></li>
                                        <li>Direct whatsapp Inquiry<i class="fa fa-check"></i></li>
                                        <li>Whats app <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 5 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <i class="fa fa-times"></i></li>
                                        <li>Currency Change <i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-times"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-times"></i></li>

                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>



                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Premium</h3>
                                        <span class="subtitle">Fully Customized</span>
                                    </span>
                                    <span class="price-value">RS.95,000 <span>8 weeks Support</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>12 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>5 EXTRA Pages(Content Based) <i class="fa fa-check"></i></li>
                                        <li>Events Page <small>Advanced</small><i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues <small>Password Protected</small> <i class="fa fa-check"></i>
                                        </li>
                                        <li>Compliances Page<i class="fa fa-check"></i></li>
                                        <li>History Timeline<i class="fa fa-check"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-check"></i></li>
                                        <li>Blogs<i class="fa fa-check"></i></li>
                                        <li>Departments<i class="fa fa-check"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Direct Email Inquiry<i class="fa fa-check"></i></li>
                                        <li>Direct whatsapp Inquiry<i class="fa fa-check"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 7 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <small>(paid) (optional)</small><i
                                                class="fa fa-check"></i>
                                        </li>
                                        <li>Currency Change <small>(paid) (optional)</small> <i class="fa fa-check"></i>
                                        </li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-check"></i></li>
                                        <li>Alt Tag<i class="fa fa-check"></i></li>
                                        <li>Heat Map<i class="fa fa-check"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>
                    </div>
                    @endif

                    @if($type == "inquiry")

                    <div class="row text-center">
                        <h1 class="heading-title">INQUIRY CART BASED</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable blue">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Startup</h3>
                                        <span class="subtitle">Five Pages Website</span>
                                    </span>
                                    <span class="price-value">Rs.75,000 <span>1 week support Bug Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>5 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>EXTRA Pages(Content Based) <i class="fa fa-times"></i></li>
                                        <li>Events Page<i class="fa fa-times"></i></li>
                                        <li>CSR Page<i class="fa fa-times"></i></li>
                                        <li>Catalogues Page PDF<i class="fa fa-times"></i></li>
                                        <li>Compliances Page<i class="fa fa-times"></i></li>
                                        <li>History Timeline<i class="fa fa-times"></i></li>
                                        <li>Media Gallery<i class="fa fa-times"></i></li>
                                        <li>Video Gallery<i class="fa fa-times"></i></li>
                                        <li>Blogs<i class="fa fa-times"></i></li>
                                        <li>Departments<i class="fa fa-times"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-times"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 3 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <i class="fa fa-times"></i></li>
                                        <li>Currency Change <i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-times"></i></li>
                                        <li>Meta Description <i class="fa fa-times"></i></li>
                                        <li>Meta Tags<i class="fa fa-times"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-times"></i></li>

                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Add to Inquiry<i class="fa fa-check"></i></li>
                                        <li>Make Inquiry<i class="fa fa-check"></i></li>
                                        <li>Inquiry confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Manage Inquires <i class="fa fa-check"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable pink">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Standard</h3>
                                        <span class="subtitle">7 Pages website</span>
                                    </span>
                                    <span class="price-value">Rs.85,000 <span>2 weeks support Bug Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>7 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>2 EXTRA Pages(Content Based) <i class="fa fa-check"></i></li>
                                        <li>Events Page<i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues Page PDF<i class="fa fa-check"></i></li>
                                        <li>Compliances Page<i class="fa fa-times"></i></li>
                                        <li>History Timeline<i class="fa fa-times"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-times"></i></li>
                                        <li>Blogs<i class="fa fa-times"></i></li>
                                        <li>Departments<i class="fa fa-times"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 5 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <i class="fa fa-times"></i></li>
                                        <li>Currency Change <i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-times"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-times"></i></li>

                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Add to Inquiry<i class="fa fa-check"></i></li>
                                        <li>Make Inquiry<i class="fa fa-check"></i></li>
                                        <li>Inquiry confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Manage Inquires <i class="fa fa-check"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Premium</h3>
                                        <span class="subtitle">Fully Customized</span>
                                    </span>
                                    <span class="price-value">RS.100,000 <span>8 weeks support Bug Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>12 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>5 EXTRA Pages(Content Based) <i class="fa fa-check"></i></li>
                                        <li>Events Page <small>Advanced</small><i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues <small>Password Protected</small><i class="fa fa-check"></i></li>
                                        <li>Compliances Page<i class="fa fa-check"></i></li>
                                        <li>History Timeline<i class="fa fa-check"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-check"></i></li>
                                        <li>Blogs<i class="fa fa-check"></i></li>
                                        <li>Departments<i class="fa fa-check"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 10 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator<small>paid (optional)</small> <i
                                                class="fa fa-check"></i>
                                        </li>
                                        <li>Currency Change <small>(paid) (optional)</small> <i class="fa fa-check"></i>
                                        </li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-check"></i></li>
                                        <li>Alt Tag<i class="fa fa-check"></i></li>
                                        <li>Heat Map<i class="fa fa-check"></i></li>
                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Add to Inquiry<i class="fa fa-check"></i></li>
                                        <li>Make Inquiry<i class="fa fa-check"></i></li>
                                        <li>Inquiry confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Manage Inquires <i class="fa fa-check"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>
                    </div>
                    @endif 

                    @if($type == "store")
                    <div class="row text-center">
                        <h1 class="heading-title">Online Store</h1>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable blue">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Startup</h3>
                                        <span class="subtitle">Five Pages Store</span>
                                    </span>
                                    <span class="price-value">Rs.69,000 <span>1 week support Bug Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>5 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>EXTRA Pages(Content Based) <i class="fa fa-times"></i></li>
                                        <li>Events Page<i class="fa fa-times"></i></li>
                                        <li>CSR Page<i class="fa fa-times"></i></li>
                                        <li>Catalogues Page PDF<i class="fa fa-times"></i></li>
                                        <li>Compliances Page<i class="fa fa-times"></i></li>
                                        <li>History Timeline<i class="fa fa-times"></i></li>
                                        <li>Media Gallery<i class="fa fa-times"></i></li>
                                        <li>Video Gallery<i class="fa fa-times"></i></li>
                                        <li>Blogs<i class="fa fa-times"></i></li>
                                        <li>Departments<i class="fa fa-times"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-times"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 3 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <i class="fa fa-times"></i></li>
                                        <li>Currency Change <i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-times"></i></li>
                                        <li>Meta Description <i class="fa fa-times"></i></li>
                                        <li>Meta Tags<i class="fa fa-times"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-times"></i></li>

                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Product Variations<i class="fa fa-check"></i></li>
                                        <li>Add to Cart<i class="fa fa-check"></i></li>
                                        <li>Checkout<i class="fa fa-check"></i></li>
                                        <li>Order confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Email Subscription <small>Mailchimp</small> <i class="fa fa-check"></i></li>
                                        <li>Order Management <i class="fa fa-check"></i></li>
                                        <li>Brand Ambassadors Page<i class="fa fa-times"></i></li>
                                        <li>Coupon System<i class="fa fa-times"></i></li>
                                        <li>Testimonials<i class="fa fa-times"></i></li>
                                        <li>Product Review<i class="fa fa-times"></i></li>
                                        <li>Sms Api<i class="fa fa-times"></i></li>
                                        <li>Email Notification<i class="fa fa-times"></i></li>
                                        <li>Reports<i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color:#FFDE59;">
                                        <li>COD<i class="fa fa-check"></i></li>
                                        <li>Manual bank Account <small>conditional</small><i class="fa fa-times"></i>
                                        </li>
                                        <li>Manual Easypaisa<i class="fa fa-times"></i></li>
                                        <li>Paypal<i class="fa fa-times"></i></li>
                                        <li>Stripe<i class="fa fa-times"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable pink">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Standard</h3>
                                        <span class="subtitle">7 Pages website</span>
                                    </span>
                                    <span class="price-value">Rs.80,000 <span>2 weeks support Bug Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>7 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>EXTRA Pages(Content Based) <i class="fa fa-times"></i></li>
                                        <li>Events Page<i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues Page PDF<i class="fa fa-check"></i></li>
                                        <li>Compliances Page<i class="fa fa-check"></i></li>
                                        <li>History Timeline<i class="fa fa-times"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-times"></i></li>
                                        <li>Blogs<i class="fa fa-times"></i></li>
                                        <li>Departments<i class="fa fa-times"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 5 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator <i class="fa fa-times"></i></li>
                                        <li>Currency Change <i class="fa fa-times"></i></li>

                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-times"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-times"></i></li>

                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Product Variations<i class="fa fa-check"></i></li>
                                        <li>Add to Cart<i class="fa fa-check"></i></li>
                                        <li>Checkout<i class="fa fa-check"></i></li>
                                        <li>Order confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Email Subscription <small>Mailchimp</small> <i class="fa fa-check"></i></li>
                                        <li>Order Management <i class="fa fa-check"></i></li>

                                        <li>Brand Ambassadors Page<i class="fa fa-times"></i></li>
                                        <li>Coupon System<i class="fa fa-times"></i></li>
                                        <li>Testimonials<i class="fa fa-check"></i></li>
                                        <li>Product Review<i class="fa fa-check"></i></li>
                                        <li>Sms Api<i class="fa fa-times"></i></li>
                                        <li>Email Notification<i class="fa fa-times"></i></li>
                                        <li>Reports<i class="fa fa-times"></i></li>
                                    </ul>
                                    <ul style="background-color:#FFDE59;">
                                        <li>COD<i class="fa fa-check"></i></li>
                                        <li>Manual bank Account <small>conditional</small><i class="fa fa-times"></i>
                                        </li>
                                        <li>Manual Easypaisa<i class="fa fa-check"></i></li>
                                        <li>Paypal<i class="fa fa-times"></i></li>
                                        <li>Stripe<i class="fa fa-times"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable orange">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Advanced</h3>
                                        <span class="subtitle">12 Pages</span>
                                    </span>
                                    <span class="price-value">RS. 125,000 <span>4 weeks support Bug
                                            Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>12 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>3 EXTRA Pages(Content Based) <i class="fa fa-check"></i></li>
                                        <li>Events Page <small>Advanced</small><i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues <small>Password Protected</small><i class="fa fa-check"></i></li>
                                        <li>Compliances Page<i class="fa fa-check"></i></li>
                                        <li>History Timeline<i class="fa fa-check"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-check"></i></li>
                                        <li>Blogs<i class="fa fa-check"></i></li>
                                        <li>Departments<i class="fa fa-check"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 6 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator<small>google (optional)</small> <i
                                                class="fa fa-check"></i>
                                        </li>
                                        <li>Currency Change <small>(paid) (optional)</small> <i class="fa fa-check"></i>
                                        </li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-check"></i></li>
                                        <li>Alt Tag<i class="fa fa-times"></i></li>
                                        <li>Heat Map<i class="fa fa-check"></i></li>
                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Product Variations<i class="fa fa-check"></i></li>
                                        <li>Add to Cart<i class="fa fa-check"></i></li>
                                        <li>Checkout<i class="fa fa-check"></i></li>
                                        <li>Order confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Email Subscription <small>Mailchimp</small> <i class="fa fa-check"></i></li>
                                        <li>Order Management <i class="fa fa-check"></i></li>

                                        <li>Brand Ambassadors Page<i class="fa fa-check"></i></li>
                                        <li>Coupon System<i class="fa fa-check"></i></li>
                                        <li>Testimonials<i class="fa fa-check"></i></li>
                                        <li>Product Review<i class="fa fa-check"></i></li>
                                        <li>Sms Api<i class="fa fa-times"></i></li>
                                        <li>Email Notification<i class="fa fa-check"></i></li>
                                        <li>Reports<i class="fa fa-check"></i></li>
                                    </ul>
                                    <ul style="background-color:#FFDE59;">
                                        <li>COD<i class="fa fa-check"></i></li>
                                        <li>Manual bank Account <small>conditional</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Manual Easypaisa<i class="fa fa-check"></i></li>
                                        <li>Paypal<i class="fa fa-times"></i></li>
                                        <li>Stripe<i class="fa fa-times"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->
                             
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable green">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Premium</h3>
                                        <span class="subtitle">Fully Customized</span>
                                    </span>
                                    <span class="price-value">RS.150,000 <span>8 weeks support Bug Removal</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>12 Pages<i class="fa fa-check"></i></li>
                                        <li>Main Responsive Slider<i class="fa fa-check"></i></li>
                                        <li>CMS<i class="fa fa-check"></i></li>
                                        <li>Categories<i class="fa fa-check"></i></li>
                                        <li>Sub categories<i class="fa fa-check"></i></li>
                                        <li>Products<i class="fa fa-check"></i></li>
                                        <li>Product Large Page<i class="fa fa-check"></i></li>
                                        <li>About Us Page<i class="fa fa-check"></i></li>
                                        <li>Contact Us Page<i class="fa fa-check"></i></li>
                                        <li>5 EXTRA Pages(Content Based) <i class="fa fa-check"></i></li>
                                        <li>Events Page <small>Advanced</small><i class="fa fa-check"></i></li>
                                        <li>CSR Page<i class="fa fa-check"></i></li>
                                        <li>Catalogues <small>Password Protected</small><i class="fa fa-check"></i></li>
                                        <li>Compliances Page<i class="fa fa-check"></i></li>
                                        <li>History Timeline<i class="fa fa-check"></i></li>
                                        <li>Media Gallery<i class="fa fa-check"></i></li>
                                        <li>Video Gallery<i class="fa fa-check"></i></li>
                                        <li>Blogs<i class="fa fa-check"></i></li>
                                        <li>Departments<i class="fa fa-check"></i></li>
                                        <li>Social Media Links<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>Whatsapp <small>(click to chat Plugin)</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Frontend Customization<i class="fa fa-check"></i></li>
                                        <li>Upto 10 Devices Email Settings<i class="fa fa-check"></i></li>
                                        <li>Language Translator<small>paid (optional)</small> <i
                                                class="fa fa-check"></i>
                                        </li>
                                        <li>Currency Change <small>(paid) (optional)</small> <i class="fa fa-check"></i>
                                        </li>
                                    </ul>
                                    <ul style="background-color: #CCFFFF;color:#000">
                                        <li>CMS Based SEO Tools<i class="fa fa-check"></i></li>
                                        <li>Google Analytics<i class="fa fa-check"></i></li>
                                        <li>Facebook Pixel (Optional)<i class="fa fa-check"></i></li>
                                        <li>Google Tag<i class="fa fa-check"></i></li>
                                        <li>Site Map<i class="fa fa-check"></i></li>
                                        <li>Custom URLs<i class="fa fa-check"></i></li>
                                        <li>Meta Title<i class="fa fa-check"></i></li>
                                        <li>Meta Description <i class="fa fa-check"></i></li>
                                        <li>Meta Tags<i class="fa fa-check"></i></li>
                                        <li>Alt Tag<i class="fa fa-check"></i></li>
                                        <li>Heat Map<i class="fa fa-check"></i></li>
                                    </ul>
                                    <ul style="background-color: aqua;">
                                        <li>Product Variations<i class="fa fa-check"></i></li>
                                        <li>Add to Cart<i class="fa fa-check"></i></li>
                                        <li>Checkout<i class="fa fa-check"></i></li>
                                        <li>Order confirmation Email <i class="fa fa-check"></i></li>
                                        <li>Email Subscription <small>Mailchimp</small> <i class="fa fa-check"></i></li>
                                        <li>Order Management <i class="fa fa-check"></i></li>

                                        <li>Brand Ambassadors Page<i class="fa fa-check"></i></li>
                                        <li>Coupon System<i class="fa fa-check"></i></li>
                                        <li>Testimonials<i class="fa fa-check"></i></li>
                                        <li>Product Review<i class="fa fa-check"></i></li>
                                        <li>Sms Api<i class="fa fa-check"></i></li>
                                        <li>Email Notification<i class="fa fa-check"></i></li>
                                        <li>Reports<i class="fa fa-check"></i></li>
                                    </ul>
                                    <ul style="background-color:#FFDE59;">
                                        <li>COD<i class="fa fa-check"></i></li>
                                        <li>Manual bank Account <small>conditional</small><i class="fa fa-check"></i>
                                        </li>
                                        <li>Manual Easypaisa<i class="fa fa-check"></i></li>
                                        <li>Paypal<i class="fa fa-check"></i></li>
                                        <li>Stripe<i class="fa fa-check"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>
                    </div>

                    @endif

                    @if($type == "shopify")

                    <div class="row text-center">
                        <h1 class="heading-title">Shopify Store</h1>
                    </div>

                    <div class="row">


                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable pink">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Startup</h3>
                                    </span>
                                    <span class="price-value">Rs.39,000 <span>3 Days Support</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>Theme Selection<i class="fa fa-check"></i></li>
                                        <li>Theme Upload and live<i class="fa fa-check"></i></li>
                                        <li>Theme setup and Customization<i class="fa fa-check"></i></li>
                                        <li>Create Collections<i class="fa fa-check"></i></li>
                                        <li>Header Menu setup<i class="fa fa-check"></i></li>
                                        <li>Demo Data uploading<i class="fa fa-check"></i></li>
                                        <li>Extra Html Based Pages<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>whatsapp Plugin<i class="fa fa-times"></i></li>
                                        <li>1 Shopify App (Install and deploy)<i class="fa fa-check"></i></li>
                                        <li>Return Policy<i class="fa fa-times"></i></li>
                                        <li>Size charts<i class="fa fa-time"></i></li>
                                        <li>Privacy Policy<i class="fa fa-times"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="pricingTable orange">
                                <div class="pricingTable-header">
                                    <span class="heading">
                                        <h3>Premium</h3>
                                    </span>
                                    <span class="price-value">RS. 51,000 <span>2 weeks Support</span></span>
                                </div>
                                <div class="pricingContent">
                                    <ul>
                                        <li>Theme Selection<i class="fa fa-check"></i></li>
                                        <li>Theme Upload and live<i class="fa fa-check"></i></li>
                                        <li>Theme setup and Customization<i class="fa fa-check"></i></li>
                                        <li>Create Collections<i class="fa fa-check"></i></li>
                                        <li>Header Menu setup<i class="fa fa-check"></i></li>
                                        <li>Demo Data uploading<i class="fa fa-check"></i></li>
                                        <li>Instagram Plugin<i class="fa fa-check"></i></li>
                                        <li>whatsapp Plugin<i class="fa fa-check"></i></li>
                                        <li>Extra Html Based Pages<i class="fa fa-check"></i></li>
                                        <li>2 Shopify App (Install and deploy)<i class="fa fa-check"></i></li>
                                        <li>Return Policy<i class="fa fa-check"></i></li>
                                        <li>Size charts<i class="fa fa-check"></i></li>
                                        <li>Privacy Policy<i class="fa fa-check"></i></li>
                                    </ul>
                                </div><!-- /  CONTENT BOX-->

                            </div>
                        </div>


                    </div>
                    @endif
                </div>
            </div>
        @else
            <div class="container" style="padding: 50px">
                <form method="post" action="{{ route('unlock_pricing') }}">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Password to unlock Pricing</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Unlock</button>
                </form>
            </div>
        @endif

    </section>

@endsection
@section('SpecificScripts')
    <script>
        $(document).ready(function() {

            $(window).on("scroll", function() {
                if ($(window).scrollTop() > 50) {
                    $(".navbar").addClass("active-navbar");
                    $(".logo").css("height", "36px");
                } else {
                    $(".navbar").removeClass("active-navbar");
                    $(".logo").css("height", "auto");
                }
            });
        });
    </script>
@stop
