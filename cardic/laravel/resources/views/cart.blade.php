@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="container">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<div class="bs-docs-example">
    @if(Cart::count() > 0  )
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Size</th>
							<th>Qty</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    @foreach(Cart::content() as $prod)
						<tr>
							<td>{{$prod->name}}</td>
							<td>{{$prod->options->size}}</td>
							<td>{{$prod->qty}}</td>
							<td><a href="{{ route('removecart', $prod->rowId) }}"> Remove</a></td>
						</tr>
					@endforeach
					</tbody>
				</table>
				<a class="btn btn-primary" href="{{route('inquiry')}}" style="padding:10px 10px;color:white">Proceed Your request</a>
	@else
    <h3 class="space">You Cart is empty .. ! </h3>
@endif
</div>
</div>


@endsection
