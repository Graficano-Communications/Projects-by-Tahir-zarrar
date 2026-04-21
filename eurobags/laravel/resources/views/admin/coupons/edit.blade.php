@extends('admin.layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('coupons.index')}}">coupons</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('coupons.update',$coupon->id)}}" method="post"  enctype="multipart/form-data">
  	  	@method('PUT')
            <div class="form-group row">
                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                  <input class="form-control col-md-7" id="validationCustom0" type="text" value="{{$coupon->title}}" name="title" required="">
              </div>
              <div class="form-group row">
                  <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                  <input class="form-control col-md-7" id="validationCustom1" value="{{$coupon->code}}" type="text" name="code" required="">
                  <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Start Date</label>
                  <input class="datepicker-here form-control digits col-md-7" value="{{$coupon->start_date}}" type="text" name="start_date" data-language="en">
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">End Date</label>
                  <input class="datepicker-here form-control digits col-md-7" type="text" value="{{$coupon->end_date}}" name="end_date" data-language="en">
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Free Shipping</label>
                  <div class="checkbox checkbox-primary col-md-7">
                      <input id="checkbox-primary-1" type="checkbox" name="free_shipping" data-original-title="" title="" @if($coupon->free_shipping == 1) checked='checked' @endif>
                      <label for="checkbox-primary-1">Allow Free Shipping</label>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Discount Type</label>
                  <select class="custom-select col-md-7" required="" name="discount_type" >
                      <option value="Percent" @if($coupon->discount_type == 'Percent') selected='selected' @endif>Percent</option>
                      <option value="Fixed" @if($coupon->discount_type === 'Fixed') selected='selected' @endif>Fixed</option>
                  </select>
              </div>
              <div class="form-group row">
                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>  Discount</label>
                  <input class="form-control col-md-7" id="validationCustom0" type="text" value="{{$coupon->discount}}" name="discount" required="">
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Status</label>
                  <div class="checkbox checkbox-primary col-md-7">
                      <input id="checkbox-primary-2" @if($coupon->status == 1) checked='checked' @endif type="checkbox" data-original-title="" title="" name="status">
                      <label for="checkbox-primary-2">Enable the Coupon</label>
                  </div>
              </div>
              <div class="form-group row" >
                @php $search = json_decode($coupon->collections);
                     $category = \App\subcategory::all()->sortBy('sequence') @endphp
                <label class="col-xl-3 col-md-4">Categories</label>
                <div class=" col-md-7" style="border: 4px solid #d3d3d3">
                <div class="row">
                @foreach ($category as $cat)
                    <div class="col-md-3">
                        <label class="checkbox-inline" style="padding: 4px 20px">
                            <input type="checkbox" name="collections[]" value="{{ $cat->id }}" @if (in_array($cat->id, $search)) checked  @endif>  {{ $cat->name }}
                          </label>
                    </div>
                  @endforeach
                  </div>
                  </div>
              </div>
           @csrf
            <button type="submit" class="btn btn-primary">Submit</button>
           </form>
  </div>
</div>
          
       </div>
    </div>
</div>
@endsection