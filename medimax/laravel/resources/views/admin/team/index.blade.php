<!-- resources/views/admin/banners/index.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                    class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>
        <div class="col-md-10">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('teams') }}">instagram
                            - <small style="color: #eb252a;">count( {{ $teams->count() }} )</small></a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
            <div class="text-right">
                <a href="{{ route('teams.create') }}">
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
        </div>
        @if ($teams->isNotEmpty())
        <table class="table table-striped bg-white">
            <thead>
                <tr>
                    <th scope="col">sort</th>
                    <th scope="col">Name</th>
                    <th scope="col">status</th>
                    <th scope="col">Image</th>
                    
                    <th scope="col ">Actions</th>
                </tr>
            </thead>
            <tbody id="BannersSortable">
                @foreach ($teams as $key => $testimonial)
                <tr id="{{ $testimonial->id }}">
                    <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                    </td>
                    <td>{{ $testimonial->name }} </td>
                    <td>

                        <form action="{{ route('teams.approve', $testimonial->id) }}" method="post">
                            {{ method_field('post') }}
                            @csrf
                            <select
                                class="form-select {{ $testimonial->status === 'private' ? 'bg-secondary text-white' : '' }}"
                                name="status" onchange="this.form.submit()">
                                <option value="private" {{ $testimonial->status === 'private' ? 'selected' : '' }}>
                                    Private</option>
                                <option value="public" {{ $testimonial->status === 'public' ? 'selected' : '' }}>
                                    Public</option>
                            </select>
                        </form>

                    </td>
                 
                    <td>
                        <img src="{{ asset($testimonial->image_path) }}" alt="..." class="avatar shadow"
                            >
                    </td>
                    <!-- <td>{{$testimonial->created_at->format('F j, Y \a\t g:i A')}}</td> -->
                    <td>
                        <div style="display: flex;gap:5px;">
                         

                            <a href="{{ route('teams.edit', $testimonial->id) }}"><button class="btn btn-success"
                                    type="button"><i class="fa fa-pencil"></i></button></a>
                            <form action="{{ route('teams.destroy', $testimonial->id) }}" method="post">
                                {{ method_field('delete') }}
                                @csrf
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?');"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>

                </tr>

              
                @endforeach
            </tbody>
        </table>
        @else
                    <div class="text-center m-5">
                        <img src="{{asset('assets_unik/images/no-item.png')}}"
                            alt="not found" style="width:50%" />
                    </div>
                    @endif
        <meta name="_token" content="{{ csrf_token() }}">
    </div>
</div>
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var sortable = new Sortable(document.getElementById('BannersSortable'), {
        handle: '.handle',
        onUpdate: function(evt) {
            var selectedData = new Array();
            $('#BannersSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        },
    });
});

function updateOrder(data) {
    var token = document.querySelector('meta[name="_token"]').getAttribute('content');
    var ajaxurl = "{{ route('sort_teams') }}";
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