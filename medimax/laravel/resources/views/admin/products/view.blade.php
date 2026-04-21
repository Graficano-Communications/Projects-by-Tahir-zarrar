@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div>
            <a href="{{ url()->previous() }}" class="btn btn-primary">
                <i class="fa fa-arrow-left"></i>&nbsp; &nbsp;Go Back
            </a>
        </div>
        <div class="col-md-12">
            <h2 class="text-center mb-4">Variations for Product: {{ $variations->name }}</h2>

            @if($variations->variations->isNotEmpty())
            <table class="table table-striped bg-white">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <!-- <th scope="col">Image</th> -->
                        <th scope="col">Size</th>
                        <th scope="col">Finish</th>
                        <th scope="col">Code</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($variations->variations as $variation)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <!-- <td><img src="{{ asset('images/products/' . $variation->image) }}" alt="{{ $variation->name }}" width="50"></td> -->
                        <td>{{ $variation->size }}</td>
                        <td>{{ $variation->finish }}</td>
                        <td>{{ $variation->code }}</td>
                        <td style="display: flex;gap:5px;">
                            <!-- <a href="{{ route('variations.edit', $variation->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a> -->
                            
                            <form action="{{ route('variations.destroy', $variation->id) }}"
                                method="post">
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
            <div class="alert alert-info text-center" role="alert">
                <span class="text-white">No Variations Found for this Product.</span>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
