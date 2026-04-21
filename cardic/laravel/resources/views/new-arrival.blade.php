@extends('layouts.master')

@section('title', 'New Arrival | Cardic Instruments')


@section('content')
@php

        $cols = 20;
        $rows = 10;
    @endphp
<style>
        .about ul li {
            padding: 10px 0;
        }

        .table-container {
            --cols: {
                    {
                    $cols
                }
            }

            ;

            --rows: {
                    {
                    $rows
                }
            }

            ;
            width: 100%;
            height: 600px;
            background-size: cover;
            background-position: center;
            border-radius: 2px;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        td {
            width: calc(100%/var(--cols));
            height: calc(100%/var(--rows));
            position: relative;
        }

        .dot-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .dot-container:hover .dialog-box {
            display: block;
        }

        .cross-icon {
            font-size: 40px;
            font-weight: bold;
            transition: transform .3s;
            transform-origin: center;
            cursor: pointer;
        }

        .cross-icon:hover {
            transform: rotate(45deg);
        }

        .dot {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            color: #f5821f;
            font-size: 22px;
            font-weight: bold;
            transition: transform .3s;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .dot:hover {
            transform: scale(1.2);
        }

        .dialog-box {
            position: absolute;
            top: 0;
            left: 90px;
            display: none;
            width: 150px;
            background: #fff;
            color: #333;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            font-size: 14px;
            text-align: center;
            animation: fadeIn .3s ease;
        }

        .dialog-box img {
            width: auto;
            height: 120px;

            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 0.5rem;
        }

        .dialog-box p {
            margin: 0;
            line-height: 1.4;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .try {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Responsive */
        @media(max-width:768px) {
            .table-container {
                height: auto;
            }

            .dot {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }

            .dialog-box {
                width: 200px;
                font-size: 12px;
            }
        }

        @media(max-width:480px) {
            .dot {
                width: 30px;
                height: 30px;
                font-size: 14px;
            }

            .dialog-box {
                width: 180px;
                font-size: 12px;
            }
        }

        .cta-section {
            background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
                url('{{ asset(' images/banners/catalogs.jpg') }}') center/cover no-repeat;
            color: #fff;
            padding: 50px 30px;
            text-align: center;
            border-radius: 10px;
            display: flex;
            flex-wrap: wrap;
            animation: fadeIn 1s ease-in-out;
        }

        .cta-btn {
            background: #F5821F;
            border: none;
            padding: 12px 25px;
            font-size: 18px;
            border-radius: 5px;
            transition: transform .3s;
            white-space: nowrap;
        }

        .cta-btn:hover {
            transform: scale(1.1);
        }

        .icon-grid {
            display: flex;
            gap: 1rem;
            /* space between icons */
            margin-top: 1.1rem;
            /* distance from the paragraph above */
        }

        .icon-item {
            text-align: center;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: #e6e6e6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-circle img {
            width: 45%;
            /* icon fills half the circle */
            height: auto;
        }

        .icon-label {
            margin-top: 0.5rem;
            max-width: 100px;
            /* same width as circle */
            margin-left: auto;
            margin-right: auto;
            font-size: 0.875rem;
            color: #333;
            line-height: 1.2;
            /* allow two lines */
            word-wrap: break-word;
        }

        .padding-pc {
            padding: 0;
        }

        @media (min-width: 768px) {
            .padding-pc {
                padding: 3rem;
            }
        }
    </style>
    <!-- start page title -->
    <section class="page-title-separate-breadcrumbs ipad-top-space-margin cover-background"
        style="background-image: url({{ asset('images/banners/new.jpg') }})">
        <div class="opacity-full-dark bg-gradient-dark-transparent"></div>
        <div class="container position-relative">
            <div class="row flex-column flex-lg-row justify-content-center align-items-lg-end extra-very-small-screen">
                <div class="col-xxl-8 col-md-7 position-relative page-title-large md-mb-30px sm-mb-20px">
                    <h1 class="text-white alt-font fw-500 ls-minus-1px mb-0 font-style-italic"
                        data-fancy-text='{ "opacity": [0, 1], "delay": 500, "speed": 50, "string": ["RESOURCES"], "easing": "easeOutQuad" }'>
                    </h1>
                </div>
                <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 last-paragraph-no-margin"
                    data-anime='{ "opacity": [0, 1], "delay": 500, "easing": "easeOutQuad" }'>
                    <p class="text-white opacity-8">
                        All Brochures and introductory booklets can be loaded directly, but for security purposes, these
                        resources are password protected. We are happy to send you a password via email. Email us at
                        info@cardic.com.pk
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start breadcrumb -->
    <section class="pt-15px pb-15px border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Broucher</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumbs -->
    <!-- start section -->
    <section >
        <div class="container">
            <div class="row justify-content-center"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="border-radius-6px h-450px md-h-350px sm-h-400px d-flex flex-wrap align-items-center justify-content-center overflow-hidden cover-background box-shadow-quadruple-large pt-15"
                        style="background-image: url('https://cardicinstruments.com/images/banners/catalogs.jpg')">
                        <!-- <div class="opacity-full-dark bg-gradient-regal-blue-transparent"></div> -->
                        <div class="row justify-content-center m-0">
                            <div class="col-lg-7 col-md-8 z-index-1 text-center text-md-start sm-mb-20px">
                                <h3 class="text-white mb-0 fw-400 fancy-text-style-4">We make the instruments for you check
                                    <span class="fw-600"
                                        data-fancy-text='{ "effect": "rotate", "string": ["broucher!", "problems!", "brands!"] }'></span>
                                </h3>
                            </div>
                            <div class="col-md-2 position-relative z-index-1 text-center sm-mb-20px">

                            </div>
                        </div>
                        <div
                            class="w-100 text-center position-relative mt-auto pt-20px pb-25px ps-15px pe-15px border-top border-color-transparent-white-light">
                            <div class="fs-14 text-uppercase text-white fw-600 ls-05px">Click to explore Product Brochures
                                <a href="{{ route('brochures') }}" class="text-decoration-line-bottom text-white">Click
                                    Here</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <section style="padding-top: 0px !important;">
        
        <div class="container-fluid section_text_data">
            @foreach ($banners as $banner)
                <div class="row align-items-center padding-pc">
                    <div class="col-md-12">
                        <section class="try pt-0">
                            <div class="table-container" data-pro-id="{{ $banner->id }}"
                                style="--cols:{{ $cols }};--rows:{{ $rows }};background-image:url('{{ asset('uploads/banners/' . $banner->image) }}')">
                                <table>
                                    <tbody>
                                        @for ($r = 0; $r < $rows; $r++)
                                            <tr>
                                                @for ($c = 0; $c < $cols; $c++)
                                                    @php
                                                        $i = $r * $cols + $c + 1;
                                                        $pos = $records
                                                            ->where('pro_id', $banner->id)
                                                            ->pluck('position')
                                                            ->toArray();
                                                    @endphp
                                                    <td>
                                                        @if (in_array($i, $pos))
                                                            <div class="dot-container">
                                                                <span class="dot"
                                                                    data-position="{{ $i }}"><span
                                                                        class="cross-icon">×</span></span>
                                                                <div class="dialog-box"></div>
                                                            </div>
                                                        @endif
                                                    </td>
                                                @endfor
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-8">
                         <span class="fs-15 fw-600 text-red text-uppercase mb-25px d-block"><span class="w-70px xs-w-50px h-2px bg-red d-inline-block align-middle me-15px"></span>Best New Arrival</span>
                        <h2 class="alt-font text-dark-gray mb-20px">{{ $banner->caption }}</h2>
                        <p style="text-align: justify;">{!! $banner->description !!}</p>


                        @php
                            $iconList = $banner->icons ? json_decode($banner->icons, true) : [];
                        @endphp

                        @if (count($iconList))
                            <div class="icon-grid">
                                @foreach ($iconList as $entry)
                                    <div class="icon-item">
                                        <div class="icon-circle">
                                            <img src="{{ asset('uploads/banners/' . $entry['file']) }}"
                                                alt="{{ $entry['label'] }}">
                                        </div>
                                        <div class="icon-label">{{ $entry['label'] }}</div>
                                    </div>
                                @endforeach
                            </div>
                        @endif



                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <script>
        const records = @json($records);

        document.addEventListener('DOMContentLoaded', function() {
            const dotContainers = document.querySelectorAll('.dot-container');

            dotContainers.forEach(container => {
                const dot = container.querySelector('.dot');
                const dialog = container.querySelector('.dialog-box');

                if (dot && dialog) {
                    const position = parseInt(dot.getAttribute('data-position'));
                    const record = records.find(r => r.position === position);

                    if (record) {
                        // Pre-populate dialog content with image first, then text
                        let dialogContent = '';
                        if (record.image) {
                            dialogContent += `<img src="/${record.image}" alt="${record.caption}">`;
                        }
                        dialogContent += `<p>${record.caption || 'No caption available'}</p>`;
                        dialog.innerHTML = dialogContent;

                        // Show dialog on hover
                        container.addEventListener('mouseenter', () => {
                            dialog.style.display = 'block';
                        });

                        container.addEventListener('mouseleave', () => {
                            dialog.style.display = 'none';
                        });
                    }
                }
            });
        });
    </script>
@endsection
