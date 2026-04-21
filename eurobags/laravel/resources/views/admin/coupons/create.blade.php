@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('coupons.index')}}">Coupon</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="{{route('coupons.store')}}" method="post"  enctype="multipart/form-data">

             <div class="col-sm-12">
             <div class="form-group row">
                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                  <input class="form-control col-md-7" id="validationCustom0" type="text" name="title" required="">
              </div>
              <div class="form-group row">
                  <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                  <input class="form-control col-md-7" id="validationCustom1" type="text" name="code" required="">
                  <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
              </div> 
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Start Date</label>
                  <input class="datepicker-here form-control digits col-md-7" type="text" name="start_date" data-language="en">
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">End Date</label>
                  <input class="datepicker-here form-control digits col-md-7" type="text" name="end_date" data-language="en">
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Free Shipping</label>
                  <div class="checkbox checkbox-primary col-md-7">
                      <input id="checkbox-primary-1" type="checkbox" name="free_shipping" data-original-title="" title="">
                      <label for="checkbox-primary-1">Allow Free Shipping</label>
                  </div>
              </div>

              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Discount Type</label>
                  <select class="custom-select col-md-7" required="" name="discount_type">
                      <option value="Percent">Percent</option>
                      <option value="Fixed">Fixed</option>
                  </select>
              </div>
              <div class="form-group row">
                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>  Discount</label>
                  <input class="form-control col-md-7" id="validationCustom0" type="text" name="discount" required="">
              </div>
              <div class="form-group row">
                  <label class="col-xl-3 col-md-4">Status</label>
                  <div class="checkbox checkbox-primary col-md-7">
                      <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="" name="status">
                      <label for="checkbox-primary-2">Enable the Coupon</label>
                  </div>
              </div>
              <div class="form-group row" >
                @php $category = \App\subcategory::all()->sortBy('sequence') @endphp
                <label class="col-xl-3 col-md-4">Categories</label>
                <div class=" col-md-7" style="border: 4px solid #d3d3d3">
                <div class="row">
                @foreach ($category as $cat)
                    <div class="col-md-3">
                        <label class="checkbox-inline" style="padding: 4px 20px">
                            <input type="checkbox" name="collections[]" value="{{ $cat->id }}">  {{ $cat->name }}
                          </label>
                    </div>
                  @endforeach
                  </div>
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