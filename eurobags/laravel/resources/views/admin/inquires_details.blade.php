@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
    	<div class="col-md-3 bg-white">
        
            </div> 
        </div>
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route('inquires')}}">Inquiries</a></li>
  </ol> 
</nav>

 <div class="container-fluid">

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-primary float-right"  target="_blank" href="{{route('regenerate_pdf',$order->id)}}"> <i class="fa fa-pdf"></i> Regenrate PDF</a>
    </div>
    <div class="col-md-6">
      <dl class = "dl-horizontal">
         <dt>Order No</dt>
         <dd>{{$order->order_no}}</dd>
         <dt>Name</dt>
         <dd>{{$order->name}}</dd>
         <dt>Date</dt>
         <dd>{{\Carbon\Carbon::parse($order->created_at)->format('d M Y ')}}</dd>
         <dt>Company Name</dt>
         <dd>{{$order->company}}</dd> 
         <dt>Email</dt>
         <dd>{{$order->email}}</dd>      
      </dl>      
    </div>
    <div class="col-md-6">
      <dl class = "dl-horizontal">   
         <dt>Country</dt>
         <dd>{{$order->country}}</dd>
         <dt>Address</dt>
         <dd>{{$order->address}}</dd>
         <dt>Phone</dt> 
         <dd>{{$order->phone}}</dd>
         <dt>Message</dt>
         <dd>{{$order->notes}}</dd>
      </dl>   
    </div>
    <div class="col-md-12">
      @php $order_items = \App\order_item::where('order_id' , $order->id)->get() @endphp
      <table class="table table-striped bg-white">
        <thead>
          <th>sr#</th>
          <th>Name</th>
          <th>Image</th>
          <th>Price</th>
          <th>Qty</th>
        </thead>
        <tbody>
          @foreach($order_items as $key => $item)
          <tr>
            <td>{{ $key }}</td>
            <td>{{ $item->name }} <br> color : {{ $item->color }} <br> {{ $item->options }}</td>

            <td><img src="{{ $item->image }} " class="img-fluid" style="height: 100px"></td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->qty }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-4">
      <form action="{{route('updateinquiry',$order->id)}}" method="post"  class="bg-white"> 
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Status</label>
            <select class="custom-select" name="status">
              <option value="new" {{ $order->status == 'new' ? 'selected' : '' }}>New</option>
              <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
              <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
              <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
              <option value="on-hold" {{ $order->status == 'on-hold' ? 'selected' : '' }}>On-Hold</option>
              <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
              <option value="contacted" {{ $order->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
              <option value="replied" {{ $order->status == 'replied' ? 'selected' : '' }}>Replied</option>
              <option value="out-of-stock" {{ $order->status == 'out-of-stock' ? 'selected' : '' }}>out of stock</option>
              
            </select>  
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Admin Notes</label>
            <input class="form-control" type="text" name="notes" placeholder="Write notes here" value="{{$order->notes}}">
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Update Order</button>
      </form>
    </div>
    
    <div class="col-md-4">
      <form action="{{route('notify_customer',$order->id)}}" method="post"  class="bg-white"> 
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Enter Tracking No</label>
            <input class="form-control" type="text" required name="tracking_no"> 
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Send Notification Email & SMS</button>
      </form>
    </div>

    <div class="col-md-4">
      <form action="{{route('notify_cancelled',$order->id)}}" method="post"  class="bg-white"> 
        @method('PUT')
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Order Cancelled Note</label>
            <input class="form-control" type="text" required name="message"> 
        </div>
        @csrf
        <button type="submit" class="btn btn-primary">Send Notification Email & SMS</button>
      </form>
    </div>

  </div>
  
</div>

</div>
</div>
 </div>
    
</div>
@endsection


