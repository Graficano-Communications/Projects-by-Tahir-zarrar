<!-- resources/views/admin/blogs/index.blade.php -->
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

        <div class="col-md-10">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('blogs') }}">blogs
                            - <small style="color: #eb252a;">count( {{ $blogs->count() }} )</small></a></li>
                </ol>
            </nav>
        </div>
        <div class="col-md-2">
            <div class="text-right">
                <a href="{{ route('blogs.create') }}">
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
            @if ($blogs->isNotEmpty())
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">sort</th>
                        <th>Title</th>
                        <th>Featured</th>
                        <th>status</th>
                        <th>Front Image</th>
                        <th>Detail Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="BlogsSortable">
                    @foreach($blogs as $blog)
                    <tr id="{{ $blog->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <!-- <td>{{ $blog->blog_name }}</td> -->
                        <td>{{ implode(' ', array_slice(str_word_count($blog->blog_name, 2), 0, 5)) }}{{ str_word_count($blog->blog_name) > 5 ? '...' : '' }}
                        </td>
                        <td>
                            <form action="{{ route('blogs.approve', $blog->id) }}" method="post">
                                @csrf
                                @method('post')
                                <div class="form-check">
                                    <input type="hidden" name="feature" value="0">
                                    <input class="form-check-input" type="checkbox" id="fcustomCheck1" name="feature" value="1" {{ $blog->feature == '1' ? 'checked' : '' }} onchange="this.form.feature.value = this.checked ? '1' : '0'; this.form.submit()">
                                    <label class="form-check-label" for="fcustomCheck1">{{ $blog->feature == '1' ? 'Yes' : 'No' }}</label>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('blogs.approve', $blog->id) }}" method="post">
                                {{ method_field('post') }}
                                @csrf
                                <select class="form-select {{ $blog->status === 'private' ? 'bg-secondary text-white' : '' }}" name="status" onchange="this.form.submit()">
                                    <option value="private" {{ $blog->status === 'private' ? 'selected' : '' }}>
                                        Private</option>
                                    <option value="public" {{ $blog->status === 'public' ? 'selected' : '' }}>
                                        Public</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <img src="{{ asset($blog->front_image) }}" alt="Front Image" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>
                            <img src="{{ asset($blog->detail_image) }}" alt="Detail Image" style="max-width: 100px; max-height: 100px;">
                        </td>

                        <td style="display: flex;gap:5px;">
                            <a class="btn btn-success" href="#collapseExample{{ $blog->id }}" data-bs-toggle="modal" data-bs-target="#modal-default{{ $blog->id }}"><i class="fa fa-eye"></i></button></a>
                            <a href="{{ route('blogs.edit', $blog->id) }}"><button class="btn btn-success" type="button"><i class="fa fa-pencil"></i></button></a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
                                {{ method_field('delete') }}
                                @csrf
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>


                    </tr>
                    <!-- //modal box  -->
                    <div class="modal fade" id="modal-default{{ $blog->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default{{ $blog->id }}" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-title-default">{{$blog->name}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="row justify-content-center">
                                                <div class="col-sm-4 mb-3">
                                                    <img src="{{ asset('images/blogs' . $blog->front_image) }}" alt="Product Image" class="img-resposive borderd" width="120px" height="90px" style="border: 1px solid #373d53;">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                    <img src="{{ asset('images/blogs' . $blog->detail_image) }}" alt="Product Image" class="img-resposive borderd" width="120px" height="90px" style="border: 1px solid #373d53;">
                                                </div>
                                            </div>

                                            <div>
                                                <p>{{$blog->blog_name}}</p>
                                                <h5>Description</h5>
                                                {!! $blog->description !!}
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        @endforeach
                </tbody>
            </table>
            @else
            <div class="text-center m-5">
                <img src="{{asset('assets_unik/images/no-item.png')}}" alt="not found" style="width:50%" />
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
        var sortable = new Sortable(document.getElementById('BlogsSortable'), {
            handle: '.handle',
            onUpdate: function(evt) {
                var selectedData = new Array();
                $('#BlogsSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                updateOrder(selectedData);
            },
        });
    });

    function updateOrder(data) {
        var token = document.querySelector('meta[name="_token"]').getAttribute('content');
        var ajaxurl = "{{ route('sort_blogs') }}";
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