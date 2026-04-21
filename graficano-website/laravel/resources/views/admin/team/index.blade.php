@extends('layouts.app')

@section('content')

@if(Session::has('success_message'))
<div class="alert alert-success">
    <span class="glyphicon glyphicon-ok"></span>
    {!! session('success_message') !!}

    <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
    </button>

</div>
@endif







<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-left">
            <h4 class="mt-5 mb-5">Add Team members</h4>
        </div>
        <div class="btn-group btn-group-sm pull-right" role="group">
            <a href="{{ route('teams.create') }}" class="btn btn-success" title="Create New Insta Post">
                <span class="fa fa-plus" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="panel-body text-center">
        <h4>Team members.</h4>
    </div>
    <div class="panel-body panel-body-with-table">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Sort</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Show on front</th>
                        <th>Image</th>
                        <th>rating</th>
                        <th>testimonial</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="TeamSortable">
                    @foreach($teamMembers as $teamMember)
                    <tr id="{{ $teamMember->id }}">
                        <td class="handle">
                            <a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a>
                        </td>
                        <td>{{ $teamMember->name }}</td>
                        <td>{{ $teamMember->position }}</td>
                        <td>{{ $teamMember->featured == 1 ? 'Yes' : 'No' }}</td>

                        <td>
                            @if($teamMember->image_path)
                            <img src="{{ asset('images/team/' . $teamMember->image_path) }}" class="img-responsive" height="50px">
                            @else
                            <img src="path-to-default-image" class="img-responsive" height="50px">
                            @endif
                        </td>
                        <td>{{ $teamMember->rating }}</td>
                        <td>{{ $teamMember->testimonial }}</td>
                        <td>
                            <div class="btn-group btn-group-xs pull-right" role="group">
                                <a href="{{ route('team.edit', $teamMember->id) }}" class="btn btn-primary" title="Edit Member">
                                    <span class="fa fa-pencil" aria-hidden="true"></span>
                                </a>
                                <form method="POST" action="{{ route('team.destroy', $teamMember->id) }}" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete Member">
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
</div>





<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
@endsection

@section('specificscripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#TeamSortable").sortable({

            delay: 150,
            stop: function() {
                var selectedData = new Array();
                $('#TeamSortable>tr').each(function() {
                    selectedData.push($(this).attr("id"));
                });
                
                $.ajax({
                url: '{{ route("team.sort") }}',
                method: 'POST',
                data: {
                    ids: selectedData,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if(response.status == 'success') {
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
<script type="text/javascript">
   
    
    document.addEventListener("DOMContentLoaded", function(){
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            form.addEventListener('submit', function(event){
                const confirmDelete = confirm('Are you sure you want to delete this member? This action cannot be undone.');

                if (!confirmDelete) {
                    event.preventDefault();
                }
            });
        });
    });


   
</script>

@endsection