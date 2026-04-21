@extends('front-layouts.master')

@section('title', 'Products')

@section('seo')
<meta name="description" content="{{ $products->name }} ">
<meta name="keywords" content="{{ $products->name }} ">
@endsection

@section('SpecificStyles')
<style>
    .table-responsive-container {
        max-height: 500px;
        overflow-y: auto;
    }

    .custom-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 10px 8px;
    }

    .custom-table thead th {
        background-color: #4a7a9e;
        color: white;
        border-radius: 5px;
        text-align: center;
        padding: 15px;
        min-width: 120px;
        border: none;
    }

    .custom-table tbody td {
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .custom-table tbody td,
    .custom-table thead th {
        white-space: nowrap;
    }

    .breadcrumb-container {
        background-color: #f8f9fa;
        padding: 25px 0;
        margin-bottom: 20px;
    }

    .breadcrumb-container .breadcrumb {
        margin: 0;
        padding: 0;
        background-color: transparent;
    }

    /* .image-preview {

        cursor: zoom-in;
    }

    .magnifier-container {
        display: inline-block;
        position: relative;
    }

    .magnifier {
        display: none;
        position: absolute;
        top: 100px !important;
        left: 500px !important;
        overflow: hidden;
        height: 400px;
        width: 400px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: white;
    }

    .magnifier__img {
        width: 1000px;

    } */

    .gallery-area .gallery .caption{
        background-color: transparent !important;
    }
    .gallery-area .gallery .caption i{
        color: black !important;
    }
</style>

@endsection

@section('meta_keywords')
<meta name="keywords" content="your, keywords, here">
@endsection

@section('content')




<!-- Breadcrumb Area -->
<div class="container-fluid breadcrumb-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>

                <li class="breadcrumb-item active" aria-current="page">{{ $products->name }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- End Breadcrumb Area -->

<!-- Products Area -->
<div class="container gallery-area py-3">
    
    <div class="row align-items-center py-4">
        <!-- Image Section -->
        <div class="d-flex align-items-center col-12 col-md-5 covax-gallery">
            @if($products->images->isNotEmpty())
            @foreach($products->images as $image)
            <div class="">
                <div class="gallery">
                    <!-- Make the whole image clickable -->
                    <a href="{{ asset('images/products/' . $image->image_path) }}">
                        <img id="zoom_{{ $loop->index }}" class="text-center" height="auto" width="100%"
                            src="{{ asset('images/products/' . $image->image_path) }}"
                            alt="{{ $products->name }}">
                        <div class="caption">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class='bx bx-show'></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <span>No image available</span>
            @endif
        </div>

        <div class="col-12 col-md-7">
            <div class="d-card-text">
                <h3>{{ $products->name }}</h3>
                <h6>Sku: {{ $products->pcode }}</h6>
            </div>
            <div class="table-responsive-container">
                <table class="table custom-table">
                    <thead class="border-none">
                        <tr>
                            <th class="text-uppercase">Sku</th>
                            <th>Description</th>
                            <th>Size</th>
                            <th>Make Inquiry</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products->variations as $variation)
                        <tr>
                            <td class="align-middle">{{ $variation->code }}</td>
                            <td class="align-middle">{{ $variation->finish }}</td>
                            <td class="align-middle">{{ $variation->size }}</td>
                            <td class="align-middle"><i class="bx bx-cart"></i></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

<!-- End Products Area -->

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.elevatezoom@3.0.8/jquery.elevatezoom.min.js"></script>
<!-- <script type="text/javascript">
    // most efficient way to add HTML, faster than innerHTML
    const parseHTML = htmlStr => {
        const range = document.createRange();
        range.selectNode(document.body); // required in Safari
        return range.createContextualFragment(htmlStr);
    };

    // pass this function any image element to add magnifying functionality
    const makeImgMagnifiable = img => {
        const magnifierFragment = parseHTML(`
            <div class="magnifier-container">
              <div class="magnifier">
                <img class="magnifier__img" src="${img.src}"/>
              </div>
            </div>
        `);

        // This preserves the original element reference instead of cloning it.
        img.parentElement.insertBefore(magnifierFragment, img);
        const magnifierContainerEl = img.parentElement.querySelector('.magnifier-container');
        img.remove();
        magnifierContainerEl.appendChild(img);

        // query the DOM for the newly added elements
        const magnifierEl = magnifierContainerEl.querySelector('.magnifier');
        const magnifierImg = magnifierEl.querySelector('.magnifier__img');

        // set up the transform object to be mutated as mouse events occur
        const transform = {
            translate: [0, 0],
            scale: 1.5,
        };

        // shortcut function to set the transform css property
        const setTransformStyle = (el, {
            translate,
            scale
        }) => {
            const [xPercent, yRawPercent] = translate;
            const yPercent = yRawPercent < 0 ? 0 : yRawPercent;

            // make manual pixel adjustments to better center
            // the magnified area over the cursor.
            const [xOffset, yOffset] = [
                `calc(-${xPercent}% + 150px)`,
                `calc(-${yPercent}% + 50px)`,
            ];

            el.style = `
                transform: scale(${scale}) translate(${xOffset}, ${yOffset});
            `;
        };

        // show magnified thumbnail on hover
        img.addEventListener('mousemove', event => {
            const [mouseX, mouseY] = [event.pageX + 40, event.pageY - 20];
            const {
                top,
                left,
                bottom,
                right
            } = img.getBoundingClientRect();
            transform.translate = [
                ((mouseX - left) / right) * 100,
                ((mouseY - top) / bottom) * 100,
            ];
            magnifierEl.style = `
                display: block;
                top: ${mouseY}px;
                left: ${mouseX}px;
            `;
            setTransformStyle(magnifierImg, transform);
        });

        // zoom in/out with mouse wheel
        img.addEventListener('wheel', event => {
            event.preventDefault();
            const scrollingUp = event.deltaY < 0;
            const {
                scale
            } = transform;
            transform.scale = scrollingUp && scale < 3 ?
                scale + 0.1 :
                !scrollingUp && scale > 1 ?
                scale - 0.1 :
                scale;
            setTransformStyle(magnifierImg, transform);
        });

        // reset after mouse leaves
        img.addEventListener('mouseleave', () => {
            magnifierEl.style = '';
            magnifierImg.style = '';
        });
    };

    // Target all images with the class 'image-preview-js' inside the foreach loop
    const images = document.querySelectorAll('.image-preview-js');
    images.forEach(img => {
        makeImgMagnifiable(img); // Apply magnifying functionality to each image
    });
</script> -->



@endsection