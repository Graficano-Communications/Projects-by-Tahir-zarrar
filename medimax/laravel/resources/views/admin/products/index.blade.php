@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go
                Back</a></div>

        <div class="col-md-10">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('productss') }}">Products
                            - <small style="color: #eb252a;">count( {{ $products->count() }} )</small></a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
            <div class="text-right">
                <a href="{{ route('products.create') }}">
                    <button style="float:right;" type="button" class="btn bg-gradient-success  mb-0">Add New</button>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="text-white">{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="d-flex gap-3 " style="flex-wrap: wrap;">
                <a href="{{route('productss')}}"
                    class="btn {{ Str::contains(url()->current(), '/products/index') ? 'bg-gradient-success' : 'bg-gradient-dark' }} ">
                    All Products
                </a>
                @foreach ($Category as $category)
                <div class="dropdown">
                    <a href="javascript:;"
                        class="btn {{ $category->id == request()->route('cat_id')? 'bg-gradient-success' : 'bg-gradient-dark' }}   dropdown-toggle "
                        data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                        {{$category->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        @foreach ($category->subcategories as $subcategory)
                        <li>
                            <a class="dropdown-item"
                                href=" 
                            {{ route('products.sub_category_products', ['cat_id' => $category->id, 'id' =>$subcategory->id]) }}">
                                {{$subcategory->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
            @if ($products->isNotEmpty())
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">Sort</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">P-SKU</th>
                        <th scope="col">status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="product_Sortable">
                    @foreach($products as $product)
                    <tr id="product_{{ $product->id }}" class="{{ $product->status == 'private' ? 'table-danger' : '' }}">
                        <td class="handle" style="cursor: move;">☰</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>
                            @if($product->images->isNotEmpty())
                            @foreach($product->images as $image)
                            <img src="{{ asset('images/products/' . $image->image_path) }}" alt="{{ $product->name }}" width="50">
                            @endforeach
                            @else
                            <span>No image available</span>
                            @endif
                        </td>
                        <td>{{ $product->pcode }}</td>
                        <td>
                        <form action="{{ route('products.approve', $product->id) }}" method="post">
                            {{ method_field('post') }}
                            @csrf
                            <select class="form-select {{ $product->status === 'private' ? 'bg-secondary text-white' : '' }}" name="status" onchange="this.form.submit()">
                                <option value="private" {{ $product->status === 'private' ? 'selected' : '' }}>
                                    Private</option>
                                <option value="public" {{ $product->status === 'public' ? 'selected' : '' }}>
                                    Public</option>
                            </select>
                        </form>
                        </td>
                        <td style="display: flex;gap:5px;">
                            <a href="{{ route('products.view', $product->id) }}" class="btn  btn-info">Variations</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn  btn-primary"><i class="fa fa-pencil"></i></a>
                            
                            <form action="{{ route('products.destroy', $product->id) }}"
                                method="post">
                                {{ method_field('delete') }}
                                @csrf
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="pagination  d-flex justify-content-center">
                {!! $products->render() !!}
            </div>
            @else
            <div class="text-center m-5">
                <img src="{{asset('assets_unik/images/no-item.png')}}" alt="not found" style="width:50%" />
            </div>
            @endif
        </div>
    </div>
    <meta name="_token" content="{{ csrf_token() }}">
</div>
@endsection
@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sortable = new Sortable(document.getElementById('product_Sortable'), {
            handle: '.handle',
            onUpdate: function(evt) {
                var selectedData = new Array();
                $('#product_Sortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
            },
        });
    });

    function updateOrder(data) {
        var token = document.querySelector('meta[name="_token"]').getAttribute('content');
        var ajaxurl = "{{ route('sort_products') }}";
        var data = {
            'data': data,
            '_token': token
        };
        $.ajax({
            url: ajaxurl,
            type: 'post',
            data: data,
            success: function(data) {
                // console.log(data);
                // Show success message
            },
            error: function(error) {
                // console.error('Error:', error);
                // Show error message
            }
        });
    }
</script>
@stop