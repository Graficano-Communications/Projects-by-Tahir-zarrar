@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('products.index') }}">Products -
                                @php $prod_count = \App\product::all(); @endphp
                                <small style="color: #eb252a;">count( {{ $prod_count->count() }} )</small></a></li>
                    </ol>

                </nav>

                <div class="container">
                    <div class="col-md-12">
                        <form class="form-inline" method="post" action="{{ route('admin_search') }}">
                            <input class="form-control" type="text" placeholder="Search by code" name="search_value">
                            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                            @csrf
                        </form>
                    </div>



                    <div class="row ">
                      @foreach ($categories as $cat)
                          <div class="col-md-3" style="padding: 1%">
                              <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                      id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                      {{ $cat->name }}
                                  </a>
                                  @php $subcategory = \App\subcategory::where('category_id',$cat->id)->get()->sortBy('sequence') @endphp 
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                                    @foreach ($subcategory as $subcat)
                                      <a class="dropdown-item"
                                          href="{{ route('product_by_subcategory', $subcat->id) }}">{{ $subcat->name }}</a>
                                    @endforeach   
                                 </div> 
                              </div>
                          </div>
                      @endforeach
                  </div>



                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <table class="table table-striped bg-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th>Id</th>
                                <th scope="col">Code</th>
                                <th scope="col">Name</th>
                                <th>URL</th>
                          
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                             @php $var =\App\product_variation::where('product_id',$product->id)->first();
                                  $imgs =\App\image::where('product_id',$product->id)->first(); 
                             @endphp
                             @if(empty($imgs))
                             <div class="alert alert-danger">
                                <strong>ERROR!</strong> Please upload Images in product. {{ $product->name }}
                              </div>
                              @endif
                              @if(empty($var))
                             <div class="alert alert-danger">
                                <strong>ERROR!</strong> Please create variations for product. {{ $product->name }}
                              </div>
                              @endif
                                <tr @if(empty($imgs) || empty($var)) style="background-color: #ff5c5c" @endif>
                                    <th scope="row">{{ $key++ }}</th>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>
                                        @if ($product->feature == '1') <i class="fa fa-star"
                                                title="Best Seller"></i> @endif{{ $product->name }}
                                    </td>
                                    <td>{{ $product->slug }}</td>
                                    <td style="display: flex;">
                                        <a href="{{ route('generate_variation', $product->id) }}"><button
                                                title="Generate Variations" class="btn btn-info" type="button"
                                                style="color: white"><i class="fa fa-plus"></i></button></a>
                                        <a href="{{ route('products_options', $product->id) }}"><button class="btn btn-info"
                                                type="button" style="color: white"><i class="fa fa-list"></i></button></a>
                                        <a href="{{ route('products_images', $product->id) }}"><button class="btn btn-info"
                                                type="button" style="color: white"><i class="fa fa-image"></i></button></a>
                                        <a href="{{ route('products.edit', $product->id) }}"><button class="btn btn-success"
                                                type="button"><i class="fa fa-pencil"></i></button></a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                            {{ method_field('delete') }}
                                            @csrf
                                            <button class="btn btn-danger" type="submit"
                                                onclick="return confirm('Are you sure you want to delete this item?');"><i
                                                    class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <?php echo $products->render(); ?>
            </div>
        </div>
    </div>
@endsection
