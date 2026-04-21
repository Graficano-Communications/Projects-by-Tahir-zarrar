@extends('layouts.master')

@section('title', 'Home')
@section('SpecificStyles')
<style>
.sidebar {
	float: left;
    width: 25%;
    height: 500px;
    position: sticky;
    top: 100px;  
}
.main{
    float: right;
    width: 75%;
    height: 100%;
    margin-left: 20px !important;
}
.sd-row{
    display: flex;
}
.sd-sidebar{
    padding-top: 36px;
}
.main-bar{
    clip-path: polygon(5% 0%, 100% 0%,100% 100%, 0% 100%);
    padding-top: 20px;
    background-color: #f5821f;
    color: #141414;
    height: 60px;
}
</style>
@stop
@section('content')


    <div class="container-fluid">
        <div class="bg-grey text-center">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 cat-info" style="padding-top: 1%">
                        <h3 style="text-transform: uppercase;">{{ $category->name }}</h3>
                        <p>{{ $category->description }}</p>
                    </div>
                </div>
            </div>
        </div>
         
       @if(count($subcategories))
        <div class="container-fluid">
            <div class="sd-row">
                <div class=" sidebar">

                    <!-- side menu -->
                    <div class="sd-sidebar">
                        <div class="sd-product-page-product-box-list">
                            <ul class="list-group">
                                @foreach ($subcategories as $subcategory)
                                    <li class="" style="list-style:none">
                                        <input style="font-weight: bold;font-size: 24px;" checked class="check_box" name="main_category" type="checkbox"
                                            value="{{str_replace(' ', '',$subcategory->name) }}">

                                        {{ $subcategory->name }}

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- side menu ends -->
                </div>

                <div class="main">
                    @foreach ($subcategories as $subcategory)
                        <div class="row ">
                            
                        </div>

                        <div id="{{ $subcategory->id }}"
                            class="row text-center space-up space-bottom filter-box portfolio-box {{ str_replace(' ', '', $subcategory->name) }}"
                            data-id="{{ str_replace(' ', '', $subcategory->name )}}" data-category="{{ str_replace(' ', '', $subcategory->name) }}">
                            <div class="col-md-12 cat-info  text-center main-bar " >
                                <h3 style="text-transform: uppercase;">{{ $subcategory->name }}</h3>
                            </div>
                            @php
                                $products = \App\Product::where('sub_category', $subcategory->id)->get();
                            @endphp
                            @if (count($products))
                                @foreach ($products as $product)
                                    <div class="col-md-3">
                                        <div class="prod-container">
                                            <a href="{{ route('productbyid', $product->id) }}">
                                                <img src="{{ asset('images/products/' . $product->image) }}"
                                                    class="img-fluid">
                                                <div class="middle">
                                                    <div class="text"><img
                                                            src="{{ asset('assets/images/arrow-btn.png') }}"
                                                            class="img-fluid"></div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- <small>330-336</small> -->
                                        <p>{{ $product->name }}</p>
                                    </div>
                                @endforeach

                            @else
                                <p>No Product Found with this category!</p>
                            @endif


                        </div>
                    @endforeach
                </div>


            </div>

        </div>
        @else
        <h1 style="text-align:center;padding:20px">Sorry! No Product Found with this Category...</h1>
        @endif
    </div>
@endsection
@section('SpecificScripts')
    <script type="text/javascript">
        var $filterCheckboxes = $('input[type="checkbox"]');
        console.log($filterCheckboxes);
        var filterFunc = function() {

            var selectedFilters = {};

            $filterCheckboxes.filter(':checked').each(function() {

                if (!selectedFilters.hasOwnProperty(this.name)) {
                    selectedFilters[this.name] = [];

                }

                $(this).parent().css("color", "#f5821f");
                selectedFilters[this.name].push(this.value);
            });


            $filterCheckboxes.filter(':not(:checked)').each(function() {
                $(this).parent().css("color", "black");

            });

            // create a collection containing all of the filterable elements
            var $filteredResults = $('.portfolio-box');

            // loop over the selected filter name -> (array) values pairs
            $.each(selectedFilters, function(name, filterValues) {

                // filter each .flower element
                $filteredResults = $filteredResults.filter(function() {

                    var matched = false,
                        currentFilterValues = $(this).data('category').split(' ');

                    // loop over each category value in the current .flower's data-category
                    $.each(currentFilterValues, function(_, currentFilterValue) {

                        // if the current category exists in the selected filters array
                        // set matched to true, and stop looping. as we're ORing in each
                        // set of filters, we only need to match once

                        if ($.inArray(currentFilterValue, filterValues) != -1) {
                            matched = true;
                            return false;
                        }
                    });

                    // if matched is true the current .flower element is returned
                    return matched;

                });
            });

            $('.portfolio-box').hide().filter($filteredResults).show();
        }

        $filterCheckboxes.on('change', filterFunc);
    </script>
@stop
