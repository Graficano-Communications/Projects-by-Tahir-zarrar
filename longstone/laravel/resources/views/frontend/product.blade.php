@extends('frontend.layout.master')

@section('title', 'Long Stone Int')
@section('main-container')

    <style>
        .table-responsive-container {
            max-height: 500px; /* Adjust this height as needed */
            overflow-y: auto;
        }

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px 8px; /* Adds space between columns and rows */
        }

        .custom-table thead th {
            background-color: #ea7f23; /* Color from the image */
            color: white;
            border-radius: 10px; /* To make the header rounded */
            text-align: center;
            padding: 8px;
        }

        .custom-table tbody td {
            text-align: center;
            padding: 8px; /* Adds padding between columns */
            background-color: #f8f9fa; /* Light background for separation */
            border-radius: 10px; /* To make the cell edges rounded */
            box-shadow: 0 0 5px rgba(0,0,0,0.1); /* Optional: Adds a light shadow for separation */
        }

        .custom-table tbody td, .custom-table thead th {
            white-space: nowrap; /* Prevents text wrapping */
        }
        .btn-link {
            font-weight: 500;
            color: #808184;
            text-decoration: underline
        }

        .btn-link:hover {
            color: #ea7f23;
        }
        .border-color-fast-blue {
        border-color: #ea7f23 !important;
        }
    </style>

    
    <!-- Services Details Area -->
    <section class="cover-background background-position-top wow animate__fadeIn"  style="background-image:url({{ asset('assets/frontend/images/Front-images/product-banner.jpg') }});">
        <div class="opacity-medium"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-center">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom">Products</h1>
                </div>  
            </div>
        </div>
    </section>
    
    <!-- Services Details Area -->
    <section>
        <div class="container">
            <div class="row py-4">
                <!-- Category Filter Section -->
                <div class="col-12 col-md-3">
                    <h6 class="alt-font text-extra-dark-gray font-weight-500">Find by Category</h6>
                    <div class="panel-group accordion-style-01 no-margin-bottom" id="accordion-style-01">
                        @foreach($categories as $index => $category)
                        <div class="panel bg-transparent">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-style-01" 
                                   href="#accordion-style-{{ $category->id }}"
                                   @if(request('category_name') == $category->name) aria-expanded="true" @else aria-expanded="false" @endif>
                                    <div class="panel-title">
                                        <span class="text-extra-dark-gray font-weight-500 d-inline-block">
                                            <span class="d-inline-block margin-25px-right">{{ $index + 1 }}</span>
                                            {{ $category->name }}
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-{{ $category->id }}" 
                                class="panel-collapse collapse @if(str_replace(' ', '-', request('category_name', '')) == str_replace(' ', '-', $category->name)) show @endif" 
                                data-bs-parent="#accordion-style-01">
                               <div class="panel-body">
                                   <div class="border-left border-width-2px border-color-fast-blue padding-40px-left">
                                       <ul>
                                           @foreach($category->subcategories as $subcategory)
                                               <li>
                                                   <a href="{{ route('product.show', ['category_name' => str_replace(' ', '-', $category->name), 'subcategory_name' => str_replace(' ', '-', $subcategory->name)]) }}" 
                                                      class="btn btn-link @if(str_replace(' ', '-', request('subcategory_name', '')) == str_replace(' ', '-', $subcategory->name)) active @endif">
                                                       {{ $subcategory->name }}
                                                   </a>
                                               </li>
                                           @endforeach
                                       </ul>
                                   </div>
                               </div>
                           </div>                           
                        </div>
                    @endforeach
                    

                    </div>
                </div>

                <!-- Products Section -->
                <div class="col-12 col-md-9">
                    @if(isset($products) && $products->isNotEmpty())
                    @foreach ($products as $product)
                        <div class="row mb-4">
                            <!-- Product Image and Name -->
                            <div class="col-12 col-md-5 mt-2 text-center">
                                <img height="auto" width="100%" src="{{ asset('uploads/products/' . $product->product_image) }}" alt="{{ $product->name }}">
                                <h5 class="text-center mt-2">{{ $product->product_name }}</h5>
                            </div>
                
                            <!-- Table Section -->
                            <div class="col-12 col-md-7 mt-2">
                                @if(isset($product->variations) && $product->variations->isNotEmpty())
                                    <div class="table-responsive">
                                        <table class="table custom-table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Size</th>
                                                    <th>Finish</th>
                                                    <th>Code</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($product->variations as $variation)
                                                    <tr>
                                                        <td>{{ $variation->name }}</td>
                                                        <td>{{ $variation->size }}</td>
                                                        <td>{{ $variation->finish }}</td>
                                                        <td>{{ $variation->code }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <!-- Alert for No Variations -->
                                    <div class="alert alert-warning text-center mt-3">
                                        No variations available for this product.
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Alert for No Products -->
                    <div class="alert alert-danger text-center mt-4">
                        No products available at the moment.
                    </div>
                @endif
                
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Details Area -->

@endsection
