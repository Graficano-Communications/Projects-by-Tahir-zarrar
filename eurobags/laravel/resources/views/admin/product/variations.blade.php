

@extends('admin.layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="{{route('products.index')}}">Products</a></li>
               <li class="breadcrumb-item active" aria-current="page">Variations</li>
               <li class="breadcrumb-item "><a href="{{ route('refresh_variation',$product_id) }}"><button class="btn-success float-right">Refresh Variations</button></a></li>
            </ol>
            
         </nav>
         <div class="container">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button> 
               <strong>{{ $message }}</strong>

            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
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
                  
                  <form action="{{route('update_variations')}}" method="post"  enctype="multipart/form-data">
                    <div class="row" style="background-color: black;color:white;padding:20px;margin-bottom:10px">
                        <div class="col-2">Image</div>
                        <div class="col-2">color</div>
                        <div class="col-2">Option Name</div>
                        <div class="col-3">Value</div>
                        <div class="col-2">Qty</div>
                        <div class="col-1">status</div>
                    </div>
                    <div class="row"> 
                    @foreach ($variations as $var)
                    <div class="col-2">
                     @if($var->color)
                     @php $imags = json_decode($var->color->images); @endphp
                     @foreach($imags as $key => $img)
                     @if ($loop->first)
                         <div class="front">
                             <img src="{{ asset('images/products/' . $img)}}" class="img-fluid bg-img" alt="" style="height: 60px">
                             </div>
                     @endif
                     @endforeach
                     @else
                     N/A
                     @endif
                    </div>
                    <div class="col-2">@if($var->color){{ $var->color->color }}@else N/A @endif</div>
                    <div class="col-2">
                          @if($var->option) {{ $var->option->name }} @else <p>N/A</p>@endif
                    </div>
                    <div class="col-3">
                    @if($var->option_value){{ $var->option_value->value }} @else <p>N/A</p>@endif
                   </div>
                    <div class="col-2">
                        <div class="form-group">
                            <input type="text" class="form-control" name="qty[]" value="{{ $var->qty }}" placeholder="Option Name">    
                      </div>
                      <input type="hidden" name="var_id[]" value="{{ $var->id }}">
                    </div>
                    <div class="col-1">
                       @if($var->status == 1) instock @else out of stock @endif
                    </div>
                  
                    @endforeach
                    </div>
                     <input type="hidden" name="product_id" value="{{$product_id}}">
                     @csrf
                     <button type="submit" class="btn btn-primary btn-block">Save</button>
                  </form>
               </div>
            </div>
           
         </div>
      </div>
   </div>
</div>

@endsection

