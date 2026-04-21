<div class="col-md-3 products-left">

  <div class="filter-price">

    <h3>Admin Panel <span>Cardiac</span></h3>

    <ul class="dropdown-menu6">

      <li>

        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
          <div class="ui-slider-range ui-widget-header" style="left: 11.1111%; width: 66.6667%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 11.1111%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 77.7778%;"></a>
        </div>

        <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;">

      </li>

    </ul>

  </div>

  <div class="css-treeview">

    <h4>Cardiac Instruments</h4>

    <ul class="tree-list-pad">



      <li><input type="checkbox" checked="checked" id="item-0"><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> MANAGE</label>

        <ul>

          <li>

            <input type="checkbox" id="item-0-0"><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Products</label>

            <ul>

              <li><a href="{{ route('productss') }}">View All</a></li>

              <li><a href="{{ route('new_products') }}">Add New</a></li>

              <li><a href="importexport">Export Products</a></li>

            </ul>

          </li>

          <li>

            <input type="checkbox" id="item-0-1"><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Categories</label>

            <ul>

              <li><a href="{{ route('categories') }}">View All</a></li>

              <li><a href="{{ route('new_categories') }}">Add New</a></li>

            </ul>

          </li>

          <li>

            <input type="checkbox" id="item-0-2"><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Events</label>

            <ul>

              <li><a href="{{route('eventss')}}">View All</a></li>

              <li><a href="{{route('new_events')}}">Add New</a></li>

            </ul>

          </li>

          <li>

            <input type="checkbox" id="item-0-3"><label for="item-0-3"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Banners</label>

            <ul>

              <li><a href="{{route('banners')}}">View All</a></li>

              <li><a href="{{route('new_banner')}}">Add New</a></li>

            </ul>

          </li>

          <li>

            <input type="checkbox" id="item-0-4"><label for="item-0-4"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Catlogs</label>

            <ul>

              <li><a href="{{route('pdfs')}}">View All</a></li>

              <li><a href="{{route('new_pdf')}}">Add New</a></li>

            </ul>

          </li>
          <!-- <li>

               <input type="checkbox" id="item-0-5"><label for="item-0-5"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Brochures</label>

               <ul>

                 <li><a href="{{route('brochure')}}">View All</a></li>

                 <li><a href="{{route('new_brochure')}}">Add New</a></li>

               </ul>

              </li> -->
          <li>

            <input type="checkbox" id="item-0-11"><label for="item-0-11"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Media</label>

            <ul>

              <li><a href="{{route('medias')}}">View All</a></li>

              <li><a href="{{route('new_media')}}">Add New</a></li>

            </ul>

          </li>

          <li>

            <input type="checkbox" id="item-0-12"><label for="item-0-12"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> News Banner</label>

            <ul>

              <li><a href="{{route('news_banners')}}">View All</a></li>

              <li><a href="{{route('new_news_banner')}}">Add New</a></li>

            </ul>

          </li>


          <li>

            <input type="checkbox" id="item-0-13"><label for="item-0-13"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> About</label>

            <ul>

              <li><a href="{{route('aboutus')}}">View All</a></li>

              <li><a href="{{route('new_about')}}">Add New</a></li>

            </ul>

          </li>

          <li>

            <input type="checkbox" id="item-0-1e"><label for="item-0-1e"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> New Arrival Products</label>

            <ul>

              <li><a href="{{route('new_arrival.productss')}}">View All</a></li>

              <li><a href="{{route('new_arrival.new_products')}}">Add New</a></li>

            </ul>

          </li>


          <li>
            <input type="checkbox" id="item-0-14">
            <label for="item-0-14"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Instagram Widget</label>
            <ul>
              <li><a href="{{ route('instagram.index') }}">View All</a></li>
              <li><a href="{{ route('instagram.create') }}">Add New</a></li>
            </ul>
          </li>
          <li>
            <input type="checkbox" id="item-0-15">
            <label for="item-0-15"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Product Detail</label>
            <ul>
              <li><a href="{{ route('pro-banners') }}">View All</a></li>
              <li><a href="{{ route('add-banner') }}">Add New</a></li>
            </ul>
          </li>





        </ul>

      </li>



    </ul>

  </div>



  <div class="clearfix"></div>

</div>