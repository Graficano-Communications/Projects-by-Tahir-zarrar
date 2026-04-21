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
            <!-- Add new headers for image and pdf columns -->
<thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
        
        <th>Actions</th>
    </tr>
</thead>

<tbody id="ProductSortable">
    @php $key = 0; @endphp
    @foreach ($products as $product)
        <tr id="{{ $product->id }}">
            <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
            <td>{{ $key++ }}</td>
            <td>{{ $product->name }}</td>
            
            
            <!-- Display image and pdf filenames -->
            <td><img src="{{ asset('images/pdf/' . $product->image) }}" width="50" height="50" alt="{{ $product->name }}"></td>
            <td>{{ $product->pdf }}</td>
            
            <td style="display: flex">
                <h4>
                                
                                <a href=" {{ route('new_arrival.product_edit' ,$product->id) }}"><span
                                        class="label label-info">Edit</span></a>
                                <a href="{{ route('new_arrival.del_product' , $product->id) }}"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><span
                                        class="label label-danger">Delete</span></a>
                            </h4>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Return a helper with preserved width of cells
            var fixHelper = function(e, ui) {
                ui.children().each(function() {
                    $(this).width($(this).width());
                });
                return ui;
            };

            $("#ProductSortable").sortable({
                delay: 150,
                stop: function() {
                    var selectedData = new Array();
                    $('#ProductSortable>tr').each(function() {
                        selectedData.push($(this).attr("id"));
                    });
                    updateOrder(selectedData);
                }
            });
        });

        function updateOrder(data) {
            var token = document.getElementById('csrf-token').value;
            var ajaxurl = '{{ route('sort_new_arrival') }}';
            var data = {
                'data': data,
                '_token': token
            };
            console.log(data);
            $.ajax({
                url: ajaxurl,
                type: 'post',
                data: data,
                success: function(data) {
                    console.log(data);
                    // alert('your change successfully saved');
                }
            })
        }
    </script>
@stop

