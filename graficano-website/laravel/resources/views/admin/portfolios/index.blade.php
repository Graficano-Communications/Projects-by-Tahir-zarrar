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

    <div class="panel-heading clearfix">

        <div class="pull-left">
            <h4 class="mt-5 mb-5">Portfolios - {{ $service }}</h4>
        </div>

        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('portfolios.portfolio.create') }}" class="btn btn-success" title="Create New Portfolio">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>

    </div>


    @if (count($portfolios) == 0)
    <div class="panel-body text-center">
        <h4>No Portfolios Available.</h4>
    </div>
    @else
    <div class="panel-body panel-body-with-table">
        <div class="container">
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/branding') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','branding') }}"> Branding</a>
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/printing') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','printing') }}"> Design & Print</a>
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/photography') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','photography') }}"> Photography</a>
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/video_3d') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','video_3d') }}"> Video & 3d</a>
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/web_and_digital') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','web_and_digital') }}"> Web & UI/UX</a>
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/packaging') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','packaging') }}"> Product design & packaging</a>
            <a class="btn btn-primary mx-2 {{ request()->is('portfolio_by_category/media') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','media') }}"> Social Media Marketing</a>
            <a class="btn btn-primary mx-2  my-2{{ request()->is('portfolio_by_category/Expos') ? 'btn-warning' : '' }}" href="{{ route('portfolio_by_category','Expos') }}"> PR events and Expos</a>
        </div>

        <div class="table-responsive">

            <table class="table table-striped ">
                <thead>
                    <tr>
                        <th>Sort</th>
                        <th>Title</th>
                        <th>Service</th>
                        <th>featured?</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody id="PortfolioSortable">
                    @foreach ($portfolios as $portfolio)
                    <tr id="{{ $portfolio->id }}">
                        <td class="handle"><a class="btn" style="cursor:move"><i
                                    class="fa fa-align-justify"></i></a> {{ $portfolio->sequence }}</td>
                        <td>{{ $portfolio->title }}</td>
                        <td>{{ $portfolio->service }}</td>
                        <td>{{ $portfolio->featured }}</td>
                        <td>

                            <form method="POST" action="{!! route('portfolios.portfolio.destroy', $portfolio->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                <div class="btn-group btn-group-xs pull-right" role="group">
                                    <a href="{{ route('portfolios.portfolio.show', $portfolio->id) }}"
                                        class="btn btn-info" title="Show Portfolio">
                                        <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{ route('portfolios.portfolio.edit', $portfolio->id) }}"
                                        class="btn btn-primary" title="Edit Portfolio">
                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                    </a>

                                    <button type="submit" class="btn btn-danger" title="Delete Portfolio"
                                        onclick="return confirm(&quot;Click Ok to delete Portfolio.&quot;)">
                                        <span class="fa fa-trash" aria-hidden="true"></span>
                                    </button>
                                </div>

                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

    @endif

</div>
@endsection

@section('specificscripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#PortfolioSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#PortfolioSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });

                $.ajax({
                    url: '{{ route("sort_portfolio") }}',
                    method: 'POST',
                    data: {
                        ids: selectedData,
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(response) {
                        if (response.status == 'success') {
                            console.log('Order updated successfully');
                        } else {
                            console.log('Order update failed');
                        }
                    }
                });
            }
        });
    });
</script>

@endsection