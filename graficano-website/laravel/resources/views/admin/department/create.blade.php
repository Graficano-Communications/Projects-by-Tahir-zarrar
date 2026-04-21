@extends('layouts.app')

@section('content')

<div class="panel panel-default">

    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">Create New Service</h4>
        </span>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('department.department.index') }}" class="btn btn-primary" title="Show All Portfolio">
                <span class="fa fa-list" aria-hidden="true"></span>
            </a>
        </div>

    </div>

    <div class="panel-body">

        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('department.department.store') }}" accept-charset="UTF-8" id="create_portfolio_form" name="create_portfolio_form" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- Title -->
            <div class="card">
                <div class="card-body">
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">Title</label>
                <div class="col-md-10">
                    <input class="form-control" name="name" type="text" id="name" minlength="1" maxlength="191" required placeholder="Enter title here...">
                </div>
            </div>

            <!-- Service -->
            <div class="form-group">
                <label for="service_id" class="col-md-2 control-label">Select Service</label>
                <div class="col-md-10">
                    <select class="form-control" name="service_id" id="service_id" required>
                        <option value="">Select a Service</option>
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <!-- Image -->
            <div class="form-group">
                <label for="image" class="col-md-2 control-label">Icon image</label>
                <div class="col-md-10">
                    <input class="form-control" name="image" type="file" required placeholder="Enter icon image here...">
                </div>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description" class="col-md-2 control-label">Description</label>
                <div class="col-md-10">
                    <textarea class="form-control" name="description" id="description" rows="4" minlength="1" maxlength="2147483647" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="slug" class="col-md-2 control-label">Slug (Optional)</label>
                <div class="col-md-10">
                    <input class="form-control" name="slug" type="text" id="slug"  placeholder="url that redirect to the service page...">
                <span style="color:gray">url is that is the page of the services so check from website first then add it here
            e.g https//graficano.com/digital-marketing-service/search-engine-optimization-seo
            </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <input class="btn btn-primary" type="submit" value="Save Department Info">
                </div>
            </div>
            </div>
        </div>
        </form>


    </div>
</div>

@endsection