<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="{{route('home')}}">
        <span class="align-middle">Little Wood</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('home')}}" data-id="home">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">DASHBOARD</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('banners')}}" data-id="banners">
                <i class="align-middle" data-feather="image"></i> <span class="align-middle">BANNERS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('all-media')}}" data-id="media">
                <i class="align-middle" data-feather="image"></i> <span class="align-middle">Media</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('categories')}}" data-id="categories">
                <i class="align-middle" data-feather="list"></i> <span class="align-middle">CATEGORIES</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('portfolios')}}" data-id="portfolios">
                <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">PORTFOLIOS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin-products')}}" data-id="products">
                <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">PRODUCTS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin-departments')}}" data-id="departments">
                <i class="align-middle" data-feather="grid"></i> <span class="align-middle">DEPARTMENTS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin-events')}}" data-id="events">
                <i class="align-middle" data-feather="calendar"></i> <span class="align-middle">EVENTS</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin-catalogues')}}" data-id="catalogues">
                <i class="align-middle" data-feather="file"></i> <span class="align-middle">CATALOGUES</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('admin-blogs')}}" data-id="blogs">
                <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">BLOGS</span>
                </a>
            </li>  
        </ul>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
<script>
    $(document).ready(function() {
        // Check local storage for the active item and set it
        const activeItemId = localStorage.getItem('activeSidebarItem');
        if (activeItemId) {
            $('.sidebar-item').removeClass('active');
            $(`.sidebar-link[data-id=${activeItemId}]`).parent().addClass('active');
        }
    
        // Add click event to set the active item
        $('.sidebar-link').on('click', function() {
            // Remove active class from all sidebar items
            $('.sidebar-item').removeClass('active');
            // Add active class to the clicked sidebar item
            $(this).parent().addClass('active');
            // Store the active item in local storage
            const id = $(this).data('id');
            localStorage.setItem('activeSidebarItem', id);
        });
    });
    </script>
    