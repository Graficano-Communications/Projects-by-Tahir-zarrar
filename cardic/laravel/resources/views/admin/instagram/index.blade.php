@extends('admin.adminmaster')

@section('title', 'Home')

@section('content')

<ol class="breadcrumb">
    <li class="active"><a href="{{ route('instagram.index') }}">Instagram Widget</a></li>
    <li><a href="{{ route('instagram.create') }}">Add New</a></li>
</ol>

<div class="bs-docs-example">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Alt text</th>
                <th>Image</th>
                <th>URL</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="BannerSortable">
            @foreach($instagramWidgets as $widget)
            <tr id="{{ $widget->id }}">
                <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
                <td>{{ $widget->alt_text }}</td>
                <td><img src="{{ asset('images/instagram/' . $widget->image) }}" class="img-responsive" width="100px" height="50px"></td>
                <td><a href="{{ $widget->link }}" target="_blank">{{ $widget->link }}</a></td>
                <td>
    <h4>
        <a href="{{ route('instagram.edit', $widget->id) }}">
            <span class="label label-success"><i class="fa fa-pencil-square"></i></span>
        </a>

        <form action="{{ route('instagram.destroy', $widget->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE') <!-- This tells Laravel to treat the request as a DELETE -->
            <button type="submit" class="label label-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                <i class="fa fa-trash-o"></i>
            </button>
        </form>
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

    $("#BannerSortable").sortable({
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
    var ajaxurl = '{{ route('sort_insta') }}';
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
        }
    });
}
</script>
@stop
