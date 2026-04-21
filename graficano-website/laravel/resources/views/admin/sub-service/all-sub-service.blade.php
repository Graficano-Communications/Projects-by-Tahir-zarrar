@extends('layouts.app')

@section('content')


@if (Session::has('success_message'))
<div class="alert alert-success">
    <span class="fa fa-ok"></span>
    {!! session('success_message') !!}

    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="panel panel-default">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="panel-heading clearfix">
        <div class="pull-left">
            <h4 class="mt-5 mb-5">Sub-Services</h4>
        </div>
        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('sub-service.create') }}" class="btn btn-success" title="Create New Sub-Service">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    <!-- Bootstrap Tabs for Services -->
    <ul class="nav nav-tabs" id="serviceTabs" role="tablist">
        @foreach($services as $service)
            <li class="nav-item">
                <a class="nav-link @if($loop->first) active @endif" id="service-tab-{{ $service->id }}" data-toggle="tab" href="#service-{{ $service->id }}" role="tab" aria-controls="service-{{ $service->id }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                    {{ $service->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="tab-content" id="serviceTabsContent">
        @foreach($services as $service)
            <div class="tab-pane fade @if($loop->first) show active @endif" id="service-{{ $service->id }}" role="tabpanel" aria-labelledby="service-tab-{{ $service->id }}">
                <div class="panel-body text-center mt-5">
                    @if ($service->subservices->isEmpty())
                        <h4>No Sub-Services Available for {{ $service->name }}</h4>
                    @else
                        <div class="panel-body panel-body-with-table">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sort</th>
                                            <th>Sub-Service Name</th>
                                            <th>Headings</th>
                                            <th>Slug</th>
                                            {{-- <th>Description</th> --}}
                                            <th>Image</th>
                                            <th>Banner Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="SubServiceSortable-{{ $service->id }}">
                                        @foreach ($service->subservices as $subservice)
                                        <tr id="{{ $subservice->id }}">
                                            <td class="handle">
                                                <a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a> {{ $subservice->id }}
                                            </td>
                                            <td>{{ $subservice->name }}</td>
                                            <td>
                                                @php
                                                    $headingsArray = json_decode($subservice->headings, true);
                                                @endphp
                                                @if(is_array($headingsArray) && !empty($headingsArray))
                                                    {{ implode(', ', array_map('trim', $headingsArray)) }}
                                                @else
                                                    No Headings
                                                @endif
                                            </td>
                                            <td>{{ $subservice->slug }}</td>
                                            {{-- <td>{{ $subservice->description }}</td> --}}
                                            <td>
                                                @if($subservice->image)
                                                    <img src="{{ url('images/sub-services/' . $subservice->image) }}" alt="{{ $subservice->name }}" width="100">
                                                @else
                                                    No Image
                                                @endif
                                            </td>
                                            <td>
                                                @if($subservice->banner_image)
                                                    <img src="{{ url('images/sub-services/banner/' . $subservice->banner_image) }}" alt="{{ $subservice->name }}" width="100">
                                                @else
                                                    No Banner Image
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-xs pull-right" role="group">
                                                    <a href="{{ route('sub-service.edit', $subservice->id) }}" class="btn btn-primary" title="Edit Sub-Service">
                                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                                    </a>
                                                    <form action="{{ route('sub-service.destroy', $subservice->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" title="Delete Sub-Service" onclick="return confirm('Are you sure you want to delete this sub-service?');">
                                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        // Apply sortable to each service's sub-services table
        @foreach($services as $service)
            $("#SubServiceSortable-{{ $service->id }}").sortable({
                items: "tr",
                cursor: 'move',
                opacity: 0.6,
                update: function() {
                    var order = $(this).sortable("serialize");
                    // You can send the updated order to the server using an AJAX call here
                    // For example:
                    // $.post("/update-order-route", order);
                }
            });
        @endforeach
    });
</script>

@endsection
