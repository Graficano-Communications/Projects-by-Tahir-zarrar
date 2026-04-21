@extends('admin.adminmaster')


 
@section('title', 'Home')



@section('content')

       <ol class="breadcrumb">

					<li><a href="{{route('eventss')}}">Events</a></li>

				</ol>

        <div class="bs-docs-example">

        <table class="table table-striped">

          <thead> 

            <tr>

              <th>#</th>

              <th>Title</th>

              <!-- <th>Description</th> -->

              <!-- <th>Location</th> -->

              <th>Date Time</th>

              <th>Image</th>

              <th>Action</th>

            </tr>
 
          </thead>

          <tbody id="EventSortable">

          @foreach($events as $key => $event)

            <tr id="{{$event->id}}">

              <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>

              <td style="width: 150px">{{ $event->title}}</td>

              <td style="width: 150px">{{ $event->description}}</td>

              <td>{{ $event->location}}</td>

              <td>{{ $event->date_time}}</td>

              <td><img src="{{ asset('images/' . $event->image) }}" class="img-resposive"  width="50px" height="50px" /></td> 

              <td><h4>

                 <a href="{{ route('events_edit' ,$event->id) }}"><span class="label label-success"><i class="fa fa-pencil-square"></i></span></a>

                 <a href="{{ route('del_event' ,$event->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>

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
