@extends('admin.adminmaster')
@section('title', 'Home')
@section('content')
<ol class="breadcrumb">
  <li class="active"><a href="{{route('news_banners')}}">index</a></li> 
  
</ol> 

<!-- Displaying success message -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Displaying error message -->
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="bs-docs-example">
  <table class="table table-striped">
   <thead>
    <tr>
        <th></th> <!-- For the logo -->
        <th>#</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
</thead>
   <tbody id="MediaSortable">
    @foreach($newsBanners as $banner)
        <tr id="{{ $banner->id }}">
            <td><i class="fa fa-bars"></i></td> <!-- Sortable logo (using Font Awesome) -->
            <td>{{ $banner->id }}</td>
            <td>{{ $banner->title }}</td>
            <td>{{ $banner->description }}</td>
            <td>
    <!-- Displaying the image from the given path -->
    <img src="{{ asset($destinationPath . '/' . $banner->image) }}" alt="{{ $banner->title }}" width="100">
</td>
            <td>
                <!-- Edit Button -->
                <a href="{{ route('admin.news.edit', $banner->id) }}" class="btn btn-sm btn-primary">Edit</a>
                
                <!-- Delete Button -->
                <form action="{{ route('admin.news.destroy', $banner->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>


  </table>
</div>
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
@endsection
@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
}); 

  $( "#MediaSortable" ).sortable({
     handle: '.fa-bars',
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#MediaSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '{{route('sort')}}';
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
