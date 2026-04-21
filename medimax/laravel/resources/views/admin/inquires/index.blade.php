<!-- resources/views/admin/banners/index.blade.php -->
@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i
                    class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('inquires') }}">Inquires
                            - <small style="color: #eb252a;">count( {{ $inquires->count() }} )</small></a></li>
                </ol>
            </nav>
        </div>
        <!-- <div class="col-md-2">
            <div class="text-right">
                <a href="{{ route('inquires.create') }}">
                    <button style="float:right;" type="button" class="btn bg-gradient-success  mb-0">Add New</button>
                </a>
            </div>
        </div> -->
        <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="text-white">{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>

        <div class="nav-wrapper position-relative end-0 ">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#completed-tabs-icons"
                        role="tab" aria-controls="code" aria-selected="false">
                        <i class="ni ni-laptop text-sm me-2"></i> Pending inquiries
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#pending-tabs-icons" role="tab"
                        aria-controls="preview" aria-selected="true">
                        <i class="ni ni-badge text-sm me-2"></i> Dispatch inquiries
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#dispatch-tabs-icons" role="tab"
                        aria-controls="preview" aria-selected="true">
                        <i class="ni ni-badge text-sm me-2"></i> Complete inquiries
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
        <div class="tab-pane fade show active" id="completed_tabs_icons" role="tabpanel"
            aria-labelledby="dashboard-tab-icons">
            @php
            $inquires_completed = $inquires->where('status', '===', "pending");
            @endphp
            @if ($inquires_completed->isNotEmpty())
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">sort</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="BannersSortable">
                    @foreach ($inquires_completed as $key => $inquire)
                    <tr id="{{ $inquire->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <td>{{ $inquire->name }} </td>
                        <td>{{ $inquire->email }} </td>
                        <td>{{ $inquire->product_name }} </td>
                        <td>{{ $inquire->quantity }} </td>



                        <td>
                            <form action="{{ route('inquires.approve', $inquire->id) }}" method="post">
                                {{ method_field('post') }}
                                @csrf
                                <select
                                    class="form-select {{ $inquire->status === 'private' ? 'bg-secondary text-white' : '' }}"
                                    name="status" onchange="this.form.submit()">
                                    <option value="pending" {{ $inquire->status === 'pending' ? 'selected' : '' }}>
                                        pending</option>
                                    <option value="completed" {{ $inquire->status === 'completed' ? 'selected' : '' }}>
                                        completed</option>
                                    <option value="dispatch" {{ $inquire->status === 'dispatch' ? 'selected' : '' }}>
                                        Dispatch</option>
                                </select>
                            </form>
                        </td>

                        <td style="display: flex;gap:5px;">

                            <a class="btn btn-success" href="#collapseExample{{ $inquire->id }}" data-bs-toggle="modal"
                                data-bs-target="#modal-default{{ $inquire->id }}"><i class="fa fa-eye"></i></button></a>


                        </td>

                    </tr>

                    <div class="modal fade" id="modal-default{{ $inquire->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-default{{ $inquire->id }}" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-title-default">Order</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div>

                                        <p> <b>Name :</b> {{$inquire->name}}</p>
                                        <p> <b>Email :</b> {{$inquire->email}}</p>
                                        <p> <b>Phone :</b> {{$inquire->phone}}</p>
                                        <hr />
                                        <h5>Order Details</h5>
                                        <p> <b>Name :</b> {{$inquire->product_name}}</p>
                                        <p> <b>Quantity :</b> {{$inquire->quantity}}</p>

                                    </div>

                                    <h5>Message</h5>
                                    <p> {!! $inquire->message !!} </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link  ml-auto"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

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

        <div class="tab-pane fade " id="pending-tabs-icons" role="tabpanel"
            aria-labelledby="dashboard-tab-icons">
            @php
            $inquires_pending = $inquires->where('status', '===', "dispatch");
            @endphp
            @if ($inquires_pending->isNotEmpty())
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">sort</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="BannersSortable">
                    @foreach ($inquires_pending as $key => $inquire)
                    <tr id="{{ $inquire->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <td>{{ $inquire->name }} </td>
                        <td>{{ $inquire->email }} </td>
                        <td>{{ $inquire->product_name }} </td>
                        <td>{{ $inquire->quantity }} </td>



                        <td>
                            <form action="{{ route('inquires.approve', $inquire->id) }}" method="post">
                                {{ method_field('post') }}
                                @csrf
                                <select
                                    class="form-select {{ $inquire->status === 'private' ? 'bg-secondary text-white' : '' }}"
                                    name="status" onchange="this.form.submit()">
                                    <option value="pending" {{ $inquire->status === 'pending' ? 'selected' : '' }}>
                                        pending</option>
                                    <option value="completed" {{ $inquire->status === 'completed' ? 'selected' : '' }}>
                                        completed</option>
                                    <option value="dispatch" {{ $inquire->status === 'dispatch' ? 'selected' : '' }}>
                                        Dispatch</option>
                                </select>
                            </form>
                        </td>

                        <td style="display: flex;gap:5px;">

                            <a class="btn btn-success" href="#collapseExample{{ $inquire->id }}" data-bs-toggle="modal"
                                data-bs-target="#modal-default{{ $inquire->id }}"><i class="fa fa-eye"></i></button></a>


                        </td>

                    </tr>

                    <div class="modal fade" id="modal-default{{ $inquire->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-default{{ $inquire->id }}" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-title-default">Order</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div>

                                        <p> <b>Name :</b> {{$inquire->name}}</p>
                                        <p> <b>Email :</b> {{$inquire->email}}</p>
                                        <p> <b>Phone :</b> {{$inquire->phone}}</p>
                                        <hr />
                                        <h5>Order Details</h5>
                                        <p> <b>Name :</b> {{$inquire->product_name}}</p>
                                        <p> <b>Quantity :</b> {{$inquire->quantity}}</p>

                                    </div>

                                    <h5>Message</h5>
                                    <p> {!! $inquire->message !!} </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link  ml-auto"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

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
        <div class="tab-pane fade " id="dispatch-tabs-icons" role="tabpanel"
            aria-labelledby="dashboard-tab-icons">
            @php
            $inquires_dispatch = $inquires->where('status', '===', "completed");
            @endphp
            @if ($inquires_dispatch->isNotEmpty())
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">sort</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody id="BannersSortable">
                    @foreach ($inquires_dispatch as $key => $inquire)
                    <tr id="{{ $inquire->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <td>{{ $inquire->name }} </td>
                        <td>{{ $inquire->email }} </td>
                        <td>{{ $inquire->product_name }} </td>
                        <td>{{ $inquire->quantity }} </td>



                        <td>
                            <form action="{{ route('inquires.approve', $inquire->id) }}" method="post">
                                {{ method_field('post') }}
                                @csrf
                                <select
                                    class="form-select {{ $inquire->status === 'private' ? 'bg-secondary text-white' : '' }}"
                                    name="status" onchange="this.form.submit()">
                                    <option value="pending" {{ $inquire->status === 'pending' ? 'selected' : '' }}>
                                        pending</option>
                                    <option value="completed" {{ $inquire->status === 'completed' ? 'selected' : '' }}>
                                        completed</option>
                                    <option value="dispatch" {{ $inquire->status === 'dispatch' ? 'selected' : '' }}>
                                        Dispatch</option>
                                </select>
                            </form>
                        </td>

                        <td style="display: flex;gap:5px;">

                            <a class="btn btn-success" href="#collapseExample{{ $inquire->id }}" data-bs-toggle="modal"
                                data-bs-target="#modal-default{{ $inquire->id }}"><i class="fa fa-eye"></i></button></a>


                        </td>

                    </tr>

                    <div class="modal fade" id="modal-default{{ $inquire->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="modal-default{{ $inquire->id }}" aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-title-default">Order</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div>

                                        <p> <b>Name :</b> {{$inquire->name}}</p>
                                        <p> <b>Email :</b> {{$inquire->email}}</p>
                                        <p> <b>Phone :</b> {{$inquire->phone}}</p>
                                        <hr />
                                        <h5>Order Details</h5>
                                        <p> <b>Name :</b> {{$inquire->product_name}}</p>
                                        <p> <b>Quantity :</b> {{$inquire->quantity}}</p>

                                    </div>

                                    <h5>Message</h5>
                                    <p> {!! $inquire->message !!} </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link  ml-auto"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

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

  <div class="col-12 justify-content-center" style="display: contents;">
                   {!! $inquires->render() !!}
            </div>
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
    var ajaxurl = "{{ route('sort_inquires') }}";
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