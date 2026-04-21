@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <div class="bg-grey text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cat-info" style="padding-top: 10px">
                    <h3>New Arrivals</h3>
                    <p>All our products can be downloaded directly. For security purposes, these resources are password protected. Reach out to us for a password.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('download.in.the.next.request'))
     <meta http-equiv="refresh" content="5;url={{ Session::get('download.in.the.next.request') }}">
@endif



<div class="container mt-4">
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if($message = Session::get('error'))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @endif
</div>


<div class="container">
    <div class="row space-up space-bottom">
        @foreach ($products as $product)
            <div class="col-md-3">
                <img src="{{ asset('images/pdf/' . $product->image) }}" class="img-fluid">
                <h4 class="text-center mt-2">{{ $product->name }} 
                    <a href="#" data-toggle="modal" data-target="#productModal{{ $product->id }}" class="btn btn-primary mb-2 btn-sm">
                        <i class="fa fa-download"></i>
                    </a>
                </h4>

                <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4>{{ $product->name }}</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>
                           <div class="modal-body">
    <div class="col-md-12 text-center">
        <img src="{{ asset('images/pdf/' . $product->image) }}" class="img-fluid mb-3">
        <h5>DOWNLOAD NOW</h5>
        <div id="loading" style="display: none;">
    Loading...
</div>

        <form action="{{ route('downloadPdf', $product->id) }}" method="post">

            @csrf
            <div class="styled-input agile-styled-input-top">
                <input type="password" name="pdf_password" class="form-control" required placeholder="Enter PDF Password">
            </div>
            <input type="submit" class="btn btn-primary mt-2" value="Download">
        </form>
    </div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('SpecificScripts')

@stop

