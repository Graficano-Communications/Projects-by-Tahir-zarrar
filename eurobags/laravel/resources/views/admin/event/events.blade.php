@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"> 
       
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
    <li class="breadcrumb-item active"><a href="{{route('events.index')}}">Events -  <small style="color: #eb252a;">count( {{$events->count()}} )</small></a></li>
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
      <th scope="col">#</th>   
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Location</th>
      <th scope="col">Date Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="EventSortable">
    @foreach($events as $key => $event)
    <tr id="{{$event->id}}">
      <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
      <td><img src="{{ asset('images/events/' . $event->image)}}"  class="img-resposive" height="100px" ></td>
      <td>{{$event->title}}</td>
      <td>{{$event->description}}</td> 
      <td>{{$event->location}}</td>
      <td>{{\Carbon\Carbon::parse($event->date_time)->format('d M Y ')}}</td>
      <td style="display: flex">
        <a href="{{route('events.edit',$event->id)}}"><button class="btn btn-success" type="button"><i class="fa fa-pencil" ></i></button></a>
                <form action="{{route('events.destroy',$event->id)}}" method="post">
                     {{ method_field('delete') }}
                     @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
                      <i class="fa fa-trash-o" ></i></button>
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

  $( "#EventSortable" ).sortable({
     
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#EventSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_event')}}';
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
