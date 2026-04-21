@extends('admin.adminmaster')



@section('title', 'Home')



@section('content')

       <ol class="breadcrumb">

					<li class="active"><a href="{{route('banners')}}">Banner</a></li>

          <li ><a  href="{{route('new_banner')}}">Add New</a> </li>

				</ol>

        <div class="bs-docs-example">

        <table class="table table-striped">

          <thead>

            <tr>

              <th>#</th>

              <th>Caption</th>

              <th>Image</th>

              <th>Action</th>

            </tr>

          </thead>

          <tbody id="BannerSortable">

          @foreach($banners as $key => $banner)

          <tr id="{{$banner->id}}">
          <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>

              <td>{{ $banner->caption}}</td>

              <td> <img src="{{ asset('images/banners/' . $banner->image)}}"  class="img-resposive"  width="100px" height="50px" ></td>

              <td><h4>

                  <a href="{{ route('banner_edit' ,$banner->id) }}"><span class="label label-success"><i class="fa fa-pencil-square"></i></span></a>

                 <a href="{{ route('del_banner' ,$banner->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>

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

  $( "#BannerSortable" ).sortable({
     
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#BannerSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_banner')}}';
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
