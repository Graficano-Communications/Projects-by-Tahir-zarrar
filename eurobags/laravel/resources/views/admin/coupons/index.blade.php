@extends('admin.layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
    	
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route('banners.index')}}">Banners
      - <small style="color: #eb252a;">count( {{$coupons->count()}} )</small></a></li>
  </ol>
</nav>

 <div class="container">
  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
  <table class="table table-striped bg-white">
  <thead>
    <tr>
      <th scope="col">Sort</th>
      <th scope="col">Title</th>
      <th scope="col">code</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Discount Type</th>
      <th scope="col">Discount</th>
      <th>Free Shipping</th>
      <th>Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead> 
  <tbody id="couponSortable">
    @foreach($coupons as $key => $coupon)
    <tr id="{{$coupon->id}}">
      <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
      <td>{{$coupon->title}} </td>
      <td>{{$coupon->code}} </td>
      <td>{{$coupon->start_date}} </td>
      <td>{{$coupon->end_date}} </td>
      <td>{{$coupon->discount_type}} </td>
      <td>{{$coupon->discount}} </td>
      <td>@if($coupon->free_shipping == 1) yes @else no @endif</td> 
      <td>@if($coupon->status == 1) enable @else disable @endif</td> 
            <td style="display: flex;">
              <a href="{{route('coupons.edit',$coupon->id)}}"><button class="btn btn-success" type="button"><i class="fa fa-pencil" ></i></button></a>
                <form action="{{route('coupons.destroy',$coupon->id)}}" method="post">
                     {{ method_field('delete') }}
                     @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" ></i></button>
                </form>

            </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
       </div>
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
</div>
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

  $( "#couponSortable" ).sortable({
     
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#couponSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_coupon')}}';
      var data = {'data' : data , '_token' : token};
      // console.log(data);
        $.ajax({
            url:ajaxurl,
            type:'post',
            data:data,
            success:function(data){
               // console.log(data);
                // alert('your change successfully saved');
            }
        })
    }
</script>
@stop
