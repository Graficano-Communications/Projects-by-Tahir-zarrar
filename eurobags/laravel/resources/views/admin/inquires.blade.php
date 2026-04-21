@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route('events.index')}}">Inquiries -  <small style="color: #eb252a;">count( {{$orders->count()}} )</small></a></li>
  </ol> 
</nav>

 <div class="container-fluid">

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
 <?php echo $orders->render(); ?>
  <table class="table table-striped bg-white" >
  <thead> 
    <tr> 
      <th scope="col">#</th>   
      <th scope="col">Order No</th>
      <th scope="col">Order Date</th>
      <th scope="col">Sender Name</th>
      <th scope="col">Tracking No</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody id="EventSortable">
    @foreach($orders as $key => $order)
    <tr> 
      <td>{{$key++}}</td>
      <td>{{$order->order_no}}</td> 
      <td>{{\Carbon\Carbon::parse($order->created_at)->format('d M Y ')}}</td>
      <td>{{$order->name}}</td>
      <td>@if($order->tracking_no){{$order->tracking_no}}@else N/A @endif</td>
      <td>{{$order->status}}</td>
      
      <td style="display: flex;">

        <a class="btn btn-primary"  target="_blank" href="{{asset('/inquires/details/'.$order->id)}}"> <i class="fa fa-eye"></i></a>
        <a class="btn btn-success"  target="_blank" href="{{asset('/inquiry_pdf/'.$order->order_pdf)}}"><i class="fa fa-file-pdf-o"></i></a>
       <form action="{{route('del_inquiry',$order->id)}}" method="post">
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
    
</div>
@endsection


