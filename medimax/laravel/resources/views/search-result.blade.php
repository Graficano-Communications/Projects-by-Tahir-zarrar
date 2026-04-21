@extends('front-layouts.master')

@section('title', 'Search')
@section('content')
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

    .gallery-area .gallery .caption {
        background-color: transparent !important;
    }

    .gallery-area .gallery .caption i {
        color: black !important;
    }
</style>
<div class="container">
    <div class="section-title-one pt-3">
        <h2>Search result of products {{ $query }}</h2>
    </div>

    <!-- Products Area -->
    <div class="container gallery-area pb-100">
        @if($products->isNotEmpty())
            @foreach($products as $product)
            <div class="row align-items-center py-4">
                <!-- Image Section -->
                <div class="d-flex align-items-center col-12 col-md-5 gallery-area">
                    @if($product->images->isNotEmpty())
                    @foreach($product->images as $image)
                    <div class="">
                        <div class="gallery">
                            <!-- Make the whole image clickable -->
                            <a href="{{ asset('images/products/' . $image->image_path) }}">
                                <img id="zoom_{{ $loop->index }}" class="text-center" height="auto" width="100%"
                                    src="{{ asset('images/products/' . $image->image_path) }}"
                                    alt="{{ $product->name }}">
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
                        <h3>{{ $product->name }}</h3>
                        <h6>Sku: {{ $product->pcode }}</h6>
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
                                @foreach($product->variations as $variation)
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
            @endforeach
        @else
            <div class="alert alert-info" role="alert">
                No products found for "{{ $query }}".
            </div>
        @endif
    </div>
</div>
<!-- End Products Area -->
@endsection
