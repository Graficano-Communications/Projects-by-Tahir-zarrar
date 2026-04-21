<!-- resources/views/admin/catalog/index.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

        <div class="col-md-10">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('News') }}">news
                            - <small style="color: #eb252a;">count( {{ $news->count() }} )</small></a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
            <div class="text-right">
                <a href="{{ route('news.create') }}">
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

            <div class="nav-wrapper position-relative end-0 ">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#dashboard-tabs-icons" role="tab"
                            aria-controls="code" aria-selected="false">
                            <i class="ni ni-laptop text-sm me-2"></i> Upcoming Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#profile-tabs-icons"
                            role="tab" aria-controls="preview" aria-selected="true">
                            <i class="ni ni-badge text-sm me-2"></i> Recent Events
                        </a>
                    </li>

                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade " id="profile-tabs-icons" role="tabpanel"
                    aria-labelledby="profile-tab-icons">
                    @php
                    $filteredRecentNews = $news->where('date', '<', now()); @endphp @if ($filteredRecentNews->
                        isNotEmpty())
                        <table class="table table-striped bg-white">
                            <thead>
                                <tr>
                                    <th scope="col">Sort</th>
                                    <th scope="col">Title</th>
                                    <!-- <th scope="col">Description</th> -->
                                    <th scope="col">Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="NewsSortable">
                                @foreach ($filteredRecentNews as $item)
                                <tr id="{{ $item->id }}">
                                    <td class="handle"><a class="btn" style="cursor:move"><i
                                                class="fa fa-align-justify"></i></a></td>
                                    <td>{{ $item->title }}</td>
                                    <!-- <td>{{ $item->description }}</td> -->
                                    <td>

                                        <form action="{{ route('news.approve', $item->id) }}" method="post">
                                            {{ method_field('post') }}
                                            @csrf
                                            <select
                                                class="form-select {{ $item->status === 'private' ? 'bg-secondary text-white' : '' }}"
                                                name="status" onchange="this.form.submit()">
                                                <option value="private"
                                                    {{ $item->status === 'private' ? 'selected' : '' }}>
                                                    Private</option>
                                                <option value="public"
                                                    {{ $item->status === 'public' ? 'selected' : '' }}>
                                                    Public</option>
                                            </select>
                                        </form>

                                    </td>
                                    <td>
                                        <!-- Display the first image using an img tag -->
                                        <img src="{{ asset($item->images->first()->path) }}"
                                            alt="{{ $item->news_name }}" class="img-resposive" width="100px"
                                            height="50px">
                                    </td>
                                    <td>{{ $item->date }}</td>
                                    <td style="display: flex;gap:5px;">
                                        

                                        <a href="{{ route('news.edit', $item->id) }}"><button class="btn btn-success"
                                                type="button"><i class="fa fa-pencil"></i></button></a>
                                        <form action="{{ route('news.destroy', $item->id) }}" method="post">
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
                        @else
                        <div class="text-center m-5">
                            <img src="{{asset('assets_unik/images/no-item.png')}}"
                                alt="not found" style="width:50%" />
                        </div>
                        @endif
                </div>
                <div class="tab-pane fade show active" id="dashboard-tabs-icons" role="tabpanel"
                    aria-labelledby="dashboard-tab-icons">
                    @php
                    $filteredNews = $news->where('date', '>', now());
                    @endphp

                    @if ($filteredNews->isNotEmpty())
                    <table class="table table-striped bg-white">
                        <thead>
                            <tr>
                                <th scope="col">Sort</th>
                                <th scope="col">Title</th>
                                <!-- <th scope="col">Description</th> -->
                                <th scope="col">Status</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="NewsSortable1">
                            @foreach ($filteredNews as $item)
                            <tr id="{{ $item->id }}">
                                <td class="handle"><a class="btn" style="cursor:move"><i
                                            class="fa fa-align-justify"></i></a></td>
                                <td>{{ $item->title }}</td>
                                <!-- <td>{{ $item->description }}</td> -->
                                <td>

                                    <form action="{{ route('news.approve', $item->id) }}" method="post">
                                        {{ method_field('post') }}
                                        @csrf
                                        <select
                                            class="form-select {{ $item->status === 'private' ? 'bg-secondary text-white' : '' }}"
                                            name="status" onchange="this.form.submit()">
                                            <option value="private" {{ $item->status === 'private' ? 'selected' : '' }}>
                                                Private</option>
                                            <option value="public" {{ $item->status === 'public' ? 'selected' : '' }}>
                                                Public</option>
                                        </select>
                                    </form>

                                </td>
                                <td>
                                    <!-- Display the first image using an img tag -->
                                    <img src="{{ asset($item->images->first()->path) }}"
                                        alt="{{ $item->news_name }}" class="img-resposive" width="100px" height="50px">
                                </td>
                                <td>{{ $item->date }}</td>
                                <td style="display: flex;gap:5px;">


                                    <a href="{{ route('news.edit', $item->id) }}"><button class="btn btn-success"
                                            type="button"><i class="fa fa-pencil"></i></button></a>
                                    <form action="{{ route('news.destroy', $item->id) }}" method="post">
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
                    @else
                    <div class="text-center m-5">
                        <img src="{{asset('assets_unik/images/no-item.png')}}"
                            alt="not found" style="width:50%" />
                    </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
    <meta name="_token" content="{{ csrf_token() }}">
</div>
@endsection
@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sortable = new Sortable(document.getElementById('NewsSortable'), {
            handle: '.handle',
            onUpdate: function(evt) {
                var selectedData = new Array();
                $('#NewsSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
            },
        });
    });

    function updateOrder(data) {
        var token = document.querySelector('meta[name="_token"]').getAttribute('content');
        var ajaxurl = "{{ route('sort_news') }}";
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sortable = new Sortable(document.getElementById('NewsSortable1'), {
            handle: '.handle',
            onUpdate: function(evt) {
                var selectedData = new Array();
                $('#NewsSortable1>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
            },
        });
    });

    function updateOrder(data) {
        var token = document.querySelector('meta[name="_token"]').getAttribute('content');
        var ajaxurl = "{{ route('sort_news') }}";
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