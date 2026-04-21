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
             <a href="{{ url('dashboard') }}" ><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
          </li>
          <li class="active">
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-image purple_color"></i> <span>Banners</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="{{ url('add-banners') }}">> <span>Add New</span></a></li>
                <li><a href="{{ url('all-banners') }}">> <span>All List</span></a></li>
             </ul>
          </li>
         <li class="active">
            <a href="#additional_page3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table orange_color"></i> <span>Amenities</span></a>
            <ul class="collapse list-unstyled" id="additional_page3">
              <li><a href="{{ url('add-amenities') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-amenities') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table orange_color"></i> <span>Media Image</span></a>
            <ul class="collapse list-unstyled" id="additional_page4">
              <li><a href="{{ url('add-images') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-images') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table orange_color"></i> <span>Media Video</span></a>
            <ul class="collapse list-unstyled" id="additional_page5">
              <li><a href="{{ url('add-videos') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-videos') }}">> <span>All List</span></a></li>
            </ul>
         </li>
          <li class="active">
            <a href="#element2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-newspaper-o blue2_color"></i> <span>Blogs</span></a>
            <ul class="collapse list-unstyled" id="element2">
               <li><a href="{{ url('add-blog') }}">> <span>Add New</span></a></li>
               <li><a href="{{ url('all-blogs') }}">> <span>All List</span></a></li>
            </ul>
          </li>
          <li class="active">
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-product-hunt red_color"></i> <span>Projects</span></a>
             <ul class="collapse list-unstyled" id="apps">
               <li><a href="{{ url('add-project') }}">> <span>Add New</span></a></li>
               <li><a href="{{ url('all-projects') }}">> <span>All List</span></a></li>
             </ul>
          </li>
          <li class="active">
             <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-arrow-down blue1_color"></i> <span>Project Types</span></a>
             <ul class="collapse list-unstyled" id="additional_page">
               <li><a href="{{ url('add-project-type') }}">> <span>Add New</span></a></li>
               <li><a href="{{ url('all-project-types') }}">> <span>All List</span></a></li>
             </ul>
          </li>
          <li class="active">
            <a href="#additional_page1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dollar green_color"></i> <span>Payment Plans</span></a>
            <ul class="collapse list-unstyled" id="additional_page1">
              <li><a href="{{ url('add-payment-plan') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-payment-plans') }}">> <span>All List</span></a></li>
            </ul>
         </li>
         <li class="active">
            <a href="#additional_page2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table orange_color"></i> <span>Payment Table</span></a>
            <ul class="collapse list-unstyled" id="additional_page2">
              <li><a href="{{ url('add-payment-table') }}">> <span>Add New</span></a></li>
              <li><a href="{{ url('all-payment-tables') }}">> <span>All List</span></a></li>
            </ul>
         </li>
       </ul>
    </div>
 </nav>
 <!-- end sidebar -->