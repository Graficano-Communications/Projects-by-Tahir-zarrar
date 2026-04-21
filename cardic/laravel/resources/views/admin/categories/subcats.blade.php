@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
       <ol class="breadcrumb">
        <li><a href="{{ route('categories') }}">Categories</a></li>
        <li class="active"><a href="{{ route('subcat_add', ['id' => $id]) }}">Add Subcategory</a></li>
    </ol>
        <div class="bs-docs-example">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Description</th>
              <th>Image</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="SubcatSortable">
              
          @foreach($subcategory as $key => $subcat)
            <tr id="{{$subcat->id}}">
             <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
              <td>{{ $subcat->name}}</td>
              <td>{{ $subcat->description}}</td>
              <td> <img src="{{ asset('images/cats/' . $subcat->image)}}"  class="img-resposive"  width="100px" height="50px" ></td>
              
              <td><h4>
                  <a href="{{ route('subcat_edit',['catid' => $subcat->category_id, 'id' => $subcat->id]) }}"><span class="label label-success"><i class="fa fa-pencil-square"></i></span></a>
     <a href="{{ route('del_subcat', ['catid' => $subcat->category_id, 'id' => $subcat->id]    ) }}" onclick="return confirm('Are you sure you want to delete this item?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>
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

  $( "#SubcatSortable" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#SubcatSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_subcategory')}}';
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