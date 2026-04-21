@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
       <ol class="breadcrumb">
					<li><a href="{{ route('productss') }}">Products</a></li>
				</ol>

<!-- {{print_r($products)}} -->
 <div class="row ">
@php $categories= \App\Category::all() @endphp
     @foreach($categories as $cat)
     <div class="col-md-3" style="padding: 1%">
      <div class="input-group-btn">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$cat->name}} <span class="caret"></span></button>
              <ul class="dropdown-menu">
                @php $subcategory = \App\subcategory::where('category_id',$cat->id)->get()->sortBy('sequence'); @endphp
               @foreach($subcategory as $subcat)
                <li><a href="{{route('product_by_subcategory',$subcat->id)}}">{{$subcat->name}}</a></li>
               @endforeach
              </ul>
        </div>
</div>
@endforeach
</div>
        <div class="bs-docs-example">
               @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{ $message }}</strong></div>
              @endif
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Description</th>
               <th>Actions</th>
            </tr>
          </thead>
          
          <tbody id="ProductSortable">
          @foreach($products as $key => $product)
            <tr id="{{$product->id}}">
            <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
              <td>{{$product->name}}</td>
              <td>{{$product->description}}</td>
              <td style="display: flex"><h4>
                  <!-- <a href="{{ route('product' ,$product->id) }}"><span class="label label-success">View</span></a> -->
                  <a href=" {{ url('/product_edit/' . $product->id ) }}"><span class="label label-info">Edit</span></a>
                  <!-- <a href=" {{ url('/edit_size/' . $product->id ) }}"><span class="label label-success">Sizes</span></a> -->
                 <a href="{{ url('/del_product/' . $product->id ) }}"  onclick="return confirm('Are you sure you want to delete this item?');"><span class="label label-danger">Delete</span></a>
               </h4></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
 <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
@endsection
@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
  // Return a helper with preserved width of cells
var fixHelper = function(e, ui) {
  ui.children().each(function() {
    $(this).width($(this).width());
  });
  return ui;
};

  $( "#ProductSortable" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#ProductSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_products')}}';
      var data = {'data' : data , '_token' : token};
      console.log(data);
        $.ajax({
            url:ajaxurl,
            type:'post',
            data:data,
            success:function(data){
               console.log(data);
                // alert('your change successfully saved');
            }
        })
    }
</script>
@stop