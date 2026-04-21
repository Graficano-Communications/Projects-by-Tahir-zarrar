      <!-- ==================== Start Navbar ==================== -->

      <nav class="navbar navbar-expand-lg bord main-bg">
        <div class="container">

            <!-- Logo -->
            <a class="logo icon-img-100" href="{{ route('home') }}">
                <img  src="{{url('assets/frontend/imgs/front-images/logo-2.png')}}" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('home') }}" role="button"><span class="rolling-text">Home</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"  href="{{ route('about') }}" role="button"><span class="rolling-text">About</span></a>
                    </li>
                    @php
                    $categories = DB::table('categories')
                            ->select('id', 'slug', 'name')  // Fetch 'slug' instead of 'name'
                            ->get()
                            ->map(function ($category) {
                                $category->subcategories = DB::table('subcategories')
                                    ->where('categories_id', $category->id)
                                    ->select('id', 'slug', 'name')  // Fetch 'slug' instead of 'name'
                                    ->get();
                                return $category;
                            });
                    @endphp

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Products</span></a>
                        <ul class="dropdown-menu">
                            @foreach($categories as $category)
                                <li class="dropdown-item">
                                    <a href="{{ route('product.show', ['categorySlug' => $category->slug]) }}">{{ $category->name }} <i class="fas fa-angle-right icon-arrow"></i></a>
                                    <ul class="dropdown-side">
                                        @foreach($category->subcategories as $subcategory)
                                            <li><a class="dropdown-item" href="{{ route('product.show', ['categorySlug' => $category->slug, 'subcategorySlug' => $subcategory->slug]) }}">{{ $subcategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                
                
                                
                    <li class="nav-item ">
                        <a class="nav-link"  href="{{ route('blog') }}" role="button"><span class="rolling-text">Blog</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"  href="{{ route('news-event') }}" role="button"><span class="rolling-text">News</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"  href="{{ route('contact') }}" role="button"><span class="rolling-text">Contact</span></a>
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
    
    <!-- ==================== End Navbar ==================== -->