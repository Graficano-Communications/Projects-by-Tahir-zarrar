

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
               <li class="breadcrumb-item active" aria-current="page">Options</li>
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
                  @if(count($options))
                  <p>Options Available already you can edit them..</p>
                  @else
                  
                  <form action="{{route('add_opt')}}" method="post"  enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="image" style="color: black">Options </label>
                        <div class="field_wrapper">
                           <div>
                              <input type="text" class="form-control" name="optionname" placeholder="Option Name">
                              <input type="text" class="form-control"  name="options" id="options" placeholder="comma seprated options such as Large , Med .. etc">
                           </div>
                        </div>
                     </div>
                     <input type="hidden" name="product_id" value="{{$product->id}}">
                     @csrf
                     <button type="submit" class="btn btn-primary btn-block">Save</button>
                  </form>
                  @endif
               </div>
            </div>
            <!-- ===============Form End -->
            <div class="row" style="margin-top: 4%">
               @foreach($options as $key => $option)
               <div class="col-md-12">
                  <h4> {{$option->name}} </h4>                    
                    <table class="table">
                       <thead>
                          <th>Name</th>
                       </thead>
                     @foreach($option->values as $val)
                     <tr>
                       <td> {{$val->name}}</td>
                       
                     </tr>
                     @endforeach
                  </table>
                  <div style="position: absolute;top: 0;right: 24px;display: flex">
                     <a href="{{route('editopt',$option->id)}}" title="Edit"><button class="btn btn-success" type="button"><i class="fa fa-pencil"></i></button></a>
                     <form action="{{route('delopt',$option->id)}}" method="post">
                        {{ method_field('delete') }}
                        @csrf
                        <button class="btn btn-danger" type="submit" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
                     </form>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>

@endsection

