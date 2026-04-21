 <style>

.navbar-area .main-navbar.is-sticky .bg-white {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
    background-color: transparent !important;
    animation: 500ms ease-in-out 0s normal none 1 running fadeInDown;
}
 </style>
 
 <div class="navbar-area bg-white">
     <div class="main-responsive-nav">
         <div class="container">
             <div class="main-responsive-menu">
                 <div class="logo">
                     <!-- Light Mode Logo -->
                     <a href="/" class="logo-light">
                         <img src="{{ asset('medimax_assets/img/medimax-logo.svg') }}" alt="light mode logo">
                     </a>
                     <!-- Dark Mode Logo -->
                     <a href="/" class="logo-dark">
                         <img src="{{ asset('medimax_assets/img/medimax-logo-white.svg') }}" alt="dark mode logo">
                     </a>
                 </div>
             </div>
         </div>
     </div>

     <div class="main-navbar">
         <nav class="navbar navbar-expand-md navbar-two bg-white">
             <div class="container p-relative">
                 <a class="navbar-brand logo-light" href="/">
                     <img src="{{ asset('medimax_assets/img/medimax-logo.svg') }}" alt="light mode logo">
                 </a>
                 <a class="navbar-brand logo-dark" href="/">
                     <img src="{{ asset('medimax_assets/img/medimax-logo-white.svg') }}" alt="dark mode logo">
                 </a>

                 <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                             <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                                 Home

                             </a>

                         </li>

                         <li class="nav-item">
                             <a href="{{route('about')}}" class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}">
                                 About us

                             </a>


                         </li>

                         <!-- <li class="nav-item">
                             <a href="#" class="nav-link {{ Request::routeIs('categories.sub') ? 'active' : '' }}">
                                 Products
                                 <i class='bx bx-chevron-down'></i>
                             </a>

                             <ul class="dropdown-menu">
                                 @foreach ($categories as $category)

                                 <li class="nav-item">
                                     <a href="{{ route('categories.sub', $category->id) }}" class="nav-link ">
                                         {{ $category->name }}
                                     </a>
                                 </li>
                                 @endforeach

                             </ul>
                         </li> -->

                         <li class="nav-item {{ Request::routeIs('categories.sub') ? 'active' : '' }}">
                             <a href="#" class="nav-link">
                                 Products
                                 <i class='bx bx-chevron-down'></i>
                             </a>

                             <ul class="dropdown-menu">

                                 @php
                                 use App\Models\Category;

                                 $categories = Category::with(['subcategories' => function ($query) {
                                 $query->select('id', 'name', 'slug', 'category_id');
                                 }])
                                 ->select('id', 'name')
                                 ->get();
                                 @endphp


                                 @foreach ($categories as $category)
                                 <li class="nav-item">
                                     <a href="{{ route('categories.sub', $category->id) }}" class="nav-link">
                                         {{ $category->name }}
                                         <i class='bx bx-chevron-down'></i>
                                     </a>

                                     @if ($category->subcategories->count() > 0)
                                     <ul class="dropdown-menu">
                                         @foreach ($category->subcategories as $subcategory)
                                         @if ($subcategory->slug)
                                         <li class="nav-item">
                                             <a href="{{ route('subcat.show', $subcategory->slug) }}" class="nav-link">
                                                 {{ $subcategory->name }}
                                             </a>
                                         </li>
                                         @endif
                                         @endforeach
                                     </ul>
                                     @endif
                                 </li>
                                 @endforeach




                             </ul>
                         </li>

                         @php
                         use App\Models\Portfolio;
                         $portfolios = Portfolio::where('status', 'public')->orderBy('sequence', 'asc')->get();
                         @endphp

                         <li class="nav-item">
                             <a href="{{ route('portfolios') }}" class="nav-link {{ Request::routeIs('portfolios') ? 'active' : '' }}">
                                 Factory Overview
                                 <i class='bx bx-chevron-down'></i>
                             </a>
                             <ul class="dropdown-menu">
                                @foreach($portfolios as $portfolio)
                                <li class="nav-item">
                                    <a href="{{ route('portfolios') }}#portfolio-{{ $portfolio->id }}" class="nav-link">
                                        {{ $portfolio->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>                            
                            
                         </li>

                         <li class="nav-item">
                             <a href="{{route('catalogues')}}" class="nav-link {{ Request::routeIs('catalogues') ? 'active' : '' }}">
                                 Catalogues

                             </a>


                         </li>


                         <li class="nav-item">
                             <a href="#" class="nav-link {{ Request::routeIs('recent') || Request::routeIs('upcoming') ? 'active' : '' }}">
                                 News and Events
                                 <i class='bx bx-chevron-down'></i>
                             </a>
                             <ul class="dropdown-menu">

                                 <li class="nav-item">
                                     <a href="{{ route('upcoming') }}" class="nav-link">
                                         Upcoming
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a href="{{ route('recent') }}" class="nav-link">
                                         Recent
                                     </a>
                                 </li>


                             </ul>
                         </li>


                         <li class="nav-item">
                             <a href="{{ route('blog') }}" class="nav-link {{ Request::routeIs('blog') ? 'active' : '' }}">
                                 Blogs
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="{{ route('feedback') }}" class="nav-link {{ Request::routeIs('feedback') ? 'active' : '' }}">
                                 <i class='bx bx-search'></i>
                             </a>
                         </li>



                         <li class="nav-btn">
                             <a href="{{ route('contact')}}" class="default-btn {{ Request::routeIs('contact') ? 'active' : '' }}">
                                 Contacts Us
                                 <span></span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </div>
<script>
   window.addEventListener('load', () => {
    const hash = window.location.hash;
    if (hash) {
        const target = document.querySelector(hash);
        if (target) {
            target.scrollIntoView({ behavior: 'smooth' });
        }
    }
});

</script>