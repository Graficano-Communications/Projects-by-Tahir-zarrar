@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                    class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-gradient-success">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('last_login_details') }}">LoginDetails
                            - <small style="color: white;">count( {{ $LoginDetails->count() }} )</small></a></li>
                </ol>
            </nav>
        </div>

        <div class="col-md-12">
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">last_login_at</th>
                        <th scope="col">Ip</th>
                        <th scope="col">Device</th>
                        <th scope="col">Browser</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col">create</th>
                        <th scope="col">Update</th> -->
                    </tr>
                </thead>
                <tbody id="NewsSortable">
                    @foreach ($LoginDetails as $item)
                    <tr id="{{ $item->id }}">

                        <td>{{ $item->last_login_at }}
                        </td>
                        <td>{{ $item->last_login_ip }}</td>
                        <td>{{ $item->device }}</td>
                        <td>{{ $item->browser }}</td>
                        <td>{{ $item->platform }}</td>
                        <td> <a class="btn btn-success" href="#collapseExample{{ $item->id }}" data-bs-toggle="modal"
                                data-bs-target="#modal-default{{ $item->id }}"><i class="fa fa-eye"></i></button></a>
                        </td>


                    </tr>


                    <!-- //modal box  -->
                    <div class="modal fade" id="modal-default{{ $item->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-default{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="row justify-content-center">
                                                <p>
                                                <b>last_login_at</b>:    {{ $item->last_login_at }}
</p>
                                                <p><b>Login_ip</b> : {{ $item->last_login_ip }} </p>
                                                <p><b>User_agent</b>: {{ $item->user_agent }} </p>
                                                <p><b>Device</b> : {{ $item->device }} </p>
                                                <p><b>Browser</b> : {{ $item->browser }} </p>
                                                <p><b>Platform</b> : {{ $item->platform }} </p>
                                                <p><b>created_at</b> : {{$item->created_at->format('F j, Y \a\t g:i A')}}</p>
                                                <p><b>updated_at</b> : {{$item->updated_at->format('F j, Y \a\t g:i A')}}</p>
                                            </div>

                                            <div>

                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        @endforeach
                </tbody>
            </table>
        </div>
   <div class="col-12 justify-content-center" style="display:contents">{!! $LoginDetails->render() !!}</div>
    </div>
</div>
@endsection