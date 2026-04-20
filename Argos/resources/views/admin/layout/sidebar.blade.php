 <!-- Sidebar  -->
 <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="{{ url('dashboard') }}"><img class="logo_icon img-responsive" src="{{ asset('assets/admin/images/logo/dua-logo.png') }}"alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info text-center">
             <img class="img-responsive" src="{{ asset('assets/admin/images/logo/dua-logo.png') }}" alt="#" width="150px"/>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4 class="text-center">Admin Panel</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <a href="{{ url('dashboard') }}" ><i class="fa fa-dashboard grey-theme-color"></i> <span>Dashboard</span></a>
          </li>
          <li class="active">
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-image purple_color"></i> <span>Banners</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="{{ url('add-banners') }}">> <span>Add New</span></a></li>
                <li><a href="{{ url('all-banners') }}">> <span>All List</span></a></li>
             </ul>
          </li>
         <li class="active">
            <a href="#additional_page3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table grey-theme-color"></i> <span>News & Events</span></a>
            <ul class="collapse list-unstyled" id="additional_page3">
              <li><a href="{{ url('add-news') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-news') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table grey-theme-color"></i> <span>Process Steps</span></a>
            <ul class="collapse list-unstyled" id="additional_page7">
              <li><a href="{{ url('add-process-step') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-process-steps') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table grey-theme-color"></i> <span>Category</span></a>
            <ul class="collapse list-unstyled" id="additional_page4">
              <li><a href="{{ url('add-category') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-categories') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table grey-theme-color"></i> <span>Catalogues</span></a>
            <ul class="collapse list-unstyled" id="additional_page5">
              <li><a href="{{ url('add-catalogues') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-catalogues') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table grey-theme-color"></i> <span>Products</span></a>
            <ul class="collapse list-unstyled" id="additional_page6">
              <li><a href="{{ url('add-product') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-products') }}">> <span>All List</span></a></li>
            </ul>
         </li>
          <li class="active">
            <a href="#element2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-newspaper-o blue2_color"></i> <span>Blogs</span></a>
            <ul class="collapse list-unstyled" id="element2">
               <li><a href="{{ url('add-blog') }}">> <span>Add New</span></a></li>
               <li><a href="{{ url('all-blogs') }}">> <span>All List</span></a></li>
            </ul>
          </li>
       </ul>
    </div>
 </nav>
 <!-- end sidebar -->