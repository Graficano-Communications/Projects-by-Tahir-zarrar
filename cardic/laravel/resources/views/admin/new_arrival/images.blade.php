@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('new_arrival.productss') }}">New Arrival Products</a></li>
    </ol>
    <div class="bs-docs-example">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sort</th>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody id="BannerSortable">
			@if($images)
            @php $key = 0; @endphp
                @foreach ($images as  $image)
					<tr id="{{$image->id}}">
						<td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                        <td>{{ $key++ }}</td>
                        <td>{{ $image->title }}</td>
                        <td><img src="{{ asset('images/products/new_arrivals/'.$image->image) }}" style="height: 100px"></td>
                        <td style="display: flex">
                            <h4>
                                <a href=" {{ route('new_arrival.product_image_edit' ,$image->id) }}"><span
                                        class="label label-info">Edit</span></a>
                                <a href="{{ route('new_arrival.del_product' , $image->id) }}"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><span
                                        class="label label-danger">Delete</span></a>
                            </h4>
                        </td>
                    </tr>
                @endforeach
				@else
				<h1>No Images found with this product, go back edit this product and add Images</h1>
				@endif
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
      var ajaxurl = '{{route('sort_new_arrival_images')}}';
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
