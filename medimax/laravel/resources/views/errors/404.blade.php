@extends('front-layouts.master')

@section('title', 'Search')
@section('content')


<!-- 404 Error Area -->
<div class="error-area ptb-100">
	<div class="d-table">
		<div class="d-table-cell">
			<div class="container">
				<div class="error">
					<img src="{{ asset('medimax_assets/img/error.png') }}" alt="image">
					<h2>Page Not Found</h2>
					<div class="error-btn">
						<a href="/">Back To Home</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End 404 Error Area -->

@endsection