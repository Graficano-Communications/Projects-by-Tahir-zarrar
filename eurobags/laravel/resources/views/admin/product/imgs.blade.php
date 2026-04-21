@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('products.index')}}">Products</a></li>
    <li class="breadcrumb-item"><a href="#">{{$product->name}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Color Views</li>
  </ol>
</nav>

 <div class="container">
  @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<!-- ==============FORM ==================== -->
<div class="panel panel-default">
      <div class="panel-body">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif 
        <form action="{{route('add_img')}}" method="post"  enctype="multipart/form-data">
          <div class="row">
            <div class="col-6">
              <div class="form-group">
                <label for="color" style="color: black">Color</label>
                <small class="form-text text-muted"> color Name such as red </small>
                <input class="form-control" type="text" name="color"  required="" placeholder="color Name" >
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="color" style="color: black">Color Code</label>
                <small class="form-text text-muted">Color code such as d3d3d3 </small>
                <input class="form-control" type="text" name="code" required=""  placeholder="color Code" >
              </div>
            </div>
          </div>
         <div class="form-group">
          <label for="image" style="color: black">Images <a href="javascript:void(0);" class="add_button" style="background-color: black;color:white;padding:4px;"  title="Add field">+</a></label>
          <div class="field_wrapper">
            <div><input type="file" class="form-control-file" required=""  name="images[]" id="image" ></div>
          </div>
        </div>
        <hr>
      
        <input type="hidden" name="product_id" value="{{$product->id}}">
       @csrf
       <button type="submit" class="btn btn-primary btn-block">Save</button>
     </form>
    </div>
    
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    </div> 
<!-- ===============Form End -->
<div class="row" style="margin-top: 4%">
  <table class="table table-striped bg-white">
    <thead>
      <tr>
        <th scope="col">Sort</th>
        <th scope="col">Color</th>
        <th>Code</th>
        <th scope="col">Images</th>
        <th scope="col">Actions</th>
      </tr>
    </thead> 
    <tbody id="BannerSortable">
      @foreach($imgs as $key => $img)
      <tr id="{{$img->id}}">
        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
        <td>{{$img->color}} </td>
        <td>{{$img->code}}</td>
       <td>
        @php $imags = json_decode( $img->images); 
        @endphp
        <div class="row"> 
        @foreach($imags as $imag)
        <div class="col-2">
        <img src="{{ asset('images/products/' . $imag)}}"  class="img-fluid">
        </div>
        @endforeach
        </div>
       </td>
              <td style="display: flex;">
                <a href="{{route('editimg',$img->id)}}" title="Edit"><button class="btn btn-success" type="button"><i class="fa fa-pencil"></i></button></a>
        <form action="{{route('delimg',[$img->id,$img->product_id ])}}" method="post">
                     {{ method_field('delete') }}
                     @csrf
          <button class="btn btn-danger" type="submit" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="file" class="form-control-file"  required="" name="images[]" id="image" required=""><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-square"></i></a> </div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
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
        var ajaxurl = '{{route('sort_img')}}';
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
@endsection