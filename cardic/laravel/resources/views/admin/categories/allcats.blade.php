@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
       <ol class="breadcrumb">
					<li><a href="{{ route('categories') }}">Categories</a></li>
				</ol>
        <div class="bs-docs-example">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Image</th>
              <th>Instrument</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="CategorySortable">
          @foreach($category as $key => $cat)
            <tr id="{{$cat->id}}">
             <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
              <td>{{ $cat->name}}</td>
              <td> <img src="{{ asset('images/cats/' . $cat->image)}}"  class="img-resposive"  width="100px" height="100px" ></td>
              <td> <img src="{{ asset('images/cats/' . $cat->instrument_img)}}"  class="img-resposive"  width="100px" height="100px" ></td>
               <td>{{ $cat->description}}</td>
              <td><h4>
                  <a href="{{ route('view_subcat' ,$cat->id) }}" title="View Subcategories of {{ $cat->name}}"><span class="label label-default"><i class="fa fa-eye"></i></span></a>
                  <a href="{{ route('category_edit' ,$cat->id) }}"><span class="label label-success"><i class="fa fa-pencil-square"></i></span></a>
                 <a href="{{ route('del_cat' ,$cat->id) }}" onclick="return confirm('Are you sure you want to delete this item?');"><span class="label label-danger"><i class="fa fa-trash-o"></i></span></a>
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

  $( "#CategorySortable" ).sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#CategorySortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort_category')}}';
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