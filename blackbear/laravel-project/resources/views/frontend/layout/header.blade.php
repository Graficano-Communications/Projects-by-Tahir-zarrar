<!--============= Header Section Ends Here =============-->

<nav class="navbar navbar-expand-lg main-bg">
    <div class="container">

        <!-- Logo -->
        <a class="logo icon-img-180" href="{{ route('home') }}">
            <img src="{{ asset('assets/frontend/images/black-bear-logo.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"><span class="rolling-text">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"><span class="rolling-text">About</span></a>
                </li>
                @php
                    use App\Models\Category;

                    $categories = Category::with([
                        'subcategories' => function ($query) {
                            $query->orderBy('sequence');
                        },
                    ])
                        ->orderBy('sequence')
                        ->get();
                @endphp


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="rolling-text">Products</span>
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li class="dropdown-item">
                                <a href="{{ route('products', $category->slug) }}">
                                    {{ $category->name }} <i class="fas fa-angle-right icon-arrow"></i>
                                </a>

                                @if ($category->subcategories->count())
                                    <ul class="dropdown-side">
                                        @foreach ($category->subcategories as $subCategory)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('products.subcategory', [$category->slug, $subCategory->slug]) }}">
                                                    {{ $subCategory->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="{{ route('departments') }}"><span
                            class="rolling-text">Department</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalouges') }}"><span
                            class="rolling-text">Catalogues</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}"><span class="rolling-text">Contact</span></a>
                </li>
            </ul>
        </div>

        <div class="search-form">
            <div class="form-group">
                <input type="text" name="search" placeholder="Search">
                <button><span class="pe-7s-search"></span></button>
            </div>
            <div class="search-icon">
                <span class="pe-7s-search open-search"></span>
                <span class="pe-7s-close close-search"></span>
            </div>
        </div>
    </div>
</nav>
