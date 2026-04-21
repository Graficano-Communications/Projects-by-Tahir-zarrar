<!-- resources/views/admin/blogs/index.blade.php -->
@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-12"> <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back</a></div>

        <div class="col-md-12 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('blogs') }}">profile</a></li>
                </ol>
            </nav>
        </div>
  
        <div class="col-md-12">


            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong class="text-white">{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        </div>
        <div class="container ">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">
                    <br />
                    <div class="w-30">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
                <div class="col-12">
                    <br />
                    <br />
                    <div class="w-30">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-12">
            @include('profile.partials.delete-user-form')
            </div> -->
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
</div>
@endsection
@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#blogsSortable").sortable({

        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#blogsSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });
});

function updateOrder(data) {
    var token = document.getElementById('csrf-token').value;
    var ajaxurl = '{{ route("sort_banner") }}';
    var data = {
        'data': data,
        '_token': token
    };
    // console.log(data);
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: data,
        success: function(data) {
            // console.log(data);
            // alert('your change successfully saved');
        }
    })
}
</script>
@stop