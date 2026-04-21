 <!-- Sidebar  -->
 <nav id="sidebar">
     <div class="sidebar_blog_1">
         <div class="sidebar-header">
             <div class="logo_section">
                 <a href="{{ url('dashboard') }}"><img class="logo_icon img-responsive" src="{{ asset('assets/frontend/imgs/logo-light.png')}}" alt="#" /></a>
             </div>
         </div>
         <div class="sidebar_user_info text-center">
             <img class="img-responsive" src="{{ asset('assets/frontend/images/emerald2.png')}}" alt="#" width="150px" />
         </div>
     </div>
     <div class="sidebar_blog_2">
         <h4 class="text-center">Admin Panel</h4>
         <ul class="list-unstyled components">
             <li class="active">
                 <a href="{{ url('dashboard') }}"><i class="fa fa-dashboard "></i>
                     <span>Dashboard</span></a>
             </li>
             <li class="active">
                 <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-image "></i> <span>Banners</span></a>
                 <ul class="collapse list-unstyled" id="element">
                     <li><a href="{{ url('add-banners') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ url('all-banners') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#additional_page3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user "></i> <span>Our Team</span></a>
                 <ul class="collapse list-unstyled" id="additional_page3">
                     <li><a href="{{ url('add-teams') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ url('all-teams') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#additional_page4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-tasks "></i> <span>Departments</span></a>
                 <ul class="collapse list-unstyled" id="additional_page4">
                     <li><a href="{{ route('add-department') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ route('admin-departments') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#additional_page5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table "></i> <span>Catalogues</span></a>
                 <ul class="collapse list-unstyled" id="additional_page5">
                     <li><a href="{{ url('add-catalogues') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ url('all-catalogues') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#additional_page7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-tasks "></i> <span>Products</span></a>
                 <ul class="collapse list-unstyled" id="additional_page7">
                     <li><a href="{{ url('add-services') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ url('all-services') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#additional_page8" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table "></i> <span>Category</span></a>
                 <ul class="collapse list-unstyled" id="additional_page8">
                     <li><a href="{{ url('add-category') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ route('categories') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#additional_page9" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table "></i> <span>News Events</span></a>
                 <ul class="collapse list-unstyled" id="additional_page9">
                     <li><a href="{{ url('add-news-event') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ route('news-events') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
             <li class="active">
                 <a href="#element2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-newspaper-o "></i> <span>Blogs</span></a>
                 <ul class="collapse list-unstyled" id="element2">
                     <li><a href="{{ url('add-blog') }}">> <span>Add New</span></a></li>
                     <li><a href="{{ url('all-blogs') }}">> <span>All List</span></a></li>
                 </ul>
             </li>
         </ul>
     </div>
 </nav>
 <!-- end sidebar -->
