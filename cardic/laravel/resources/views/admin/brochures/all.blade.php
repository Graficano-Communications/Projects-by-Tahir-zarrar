@extends('admin.adminmaster')



@section('title', 'Home')



@section('content')

       <ol class="breadcrumb">

					<li><a href="{{route('brochures')}}">brochures</a></li>
					<li><a href="{{route('new_brochure')}}">New</a></li>

				</ol>

        <div class="bs-docs-example">

        <table class="table table-striped">

          <thead>

            <tr>

              <th>#</th>

              <th>Caption</th>

              <th>Image</th>

              <th>File</th>

              <th>Action</th>

            </tr>

          </thead>

          <tbody id="catlogSortable">

          

          <tr id="">
          <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>

              <td></td>

              <td> </td>

              <td></td>

              <td><h4>

                  <a href=""><span class="label label-success"><i class="fa fa-pencil-square"></i></span></a>

                 <a href="" onclick="return confirm('Are you sure you want to delete this item?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>

               </h4></td> 

            </tr>

           

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

  $( "#catlogSortable" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#catlogSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_catlog')}}';
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
