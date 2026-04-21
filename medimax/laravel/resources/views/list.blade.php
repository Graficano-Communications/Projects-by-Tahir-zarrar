@extends('front-layouts.master')

@section('title', 'products-list')

@section('content')

<style>
    .subcategories-list {
        list-style: none;
        margin-left: 10px;
        /* Indent subcategories */
        display: none;
        /* Initially hide */
    }

    .subcategories-list li {
        margin: 0px 0;
    }

    /* Display on hover (optional) */
    li:hover>.subcategories-list {
        display: block;
    }
</style>


<div class="page-banner-area bg-3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Products of {{$category->name}}</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>{{$category->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="services-dateils-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    @if($products->isEmpty())
                    <div class="col-12">
                        <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
                            No products found.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    @else
                    @foreach ($products as $product)
                    <div class="col-lg-3 col-sm-6">
                        <div class="services-card-three">
                            @if($product->images->isNotEmpty())
                            @foreach($product->images as $image)
                            <a href="{{ route('product-details', $product->id) }}">
                                <img src="{{ asset('images/products/' . $image->image_path) }}" alt="Image">
                            </a>
                            @endforeach
                            @endif
                            <div class="s-card-three-text">
                                <h3><a href="{{ route('product-details', $product->id) }}">{{ $product->name }}</a></h3>

                                <div class="s-card-three-btn">
                                    <a href="{{ route('product-details', $product->id) }}" class="default-btn three">
                                        View Product
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif


                </div>

            </div>

            <div class="col-lg-3 col-md-12">
                <div class="widget-area">
                    <div class="widget widget_search">
                        <h3 class="widget-title">Search</h3>

                        <form class="search-form" action="{{ route('search') }}">
                            <input type="search" name="name" class="search-field" placeholder="Search products...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>

                    <div class="widget widget_categories">
                        <h3 class="widget-title">Product Categories</h3>
                        <ul class="bg-f6f4ff">
                            @foreach ($categories as $category)
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href="{{ route('categories.sub', $category->id) }}">{{ $category->name }}</a>

                                @if ($category->subcategories->count() > 0)
                                <ul class="subcategories-list">
                                    @foreach ($category->subcategories as $subcategory)
                                    <li>
                                        <i class='bx bx-chevron-right'></i>
                                        <a href="{{ route('subcat.show', $subcategory->slug) }}">{{ $subcategory->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </div>



                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <ul class="pagination">
                @if ($products->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @else
                <li class="page-item">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                @endif

                @foreach ($products->links()->elements[0] as $page => $url)
                @if ($page == $products->currentPage())
                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                @else
                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
                @endforeach

                @if ($products->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                @else
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>




@endsection