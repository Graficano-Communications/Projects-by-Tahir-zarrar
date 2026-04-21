
@extends('layouts.master')


@section('title', '500 Error')
@section('content')


<!-- =======================
Main Banner START -->
<section class="pt-8 pt-xl-9">
	<div class="container">
			<div class="row align-items-center">
				<div class="col-md-9 col-lg-6 text-center mx-auto">
					<!-- Svg -->
				<img src="/assets/images/web/500.svg" alt="500" style="max-width:60%" />

					<br/>
					<br/>
					<br/>
					<!-- Button -->
					<a href="/" class="btn btn-dark mb-0">Back to Homepage</a>
				</div>
			</div>
	</div>
</section>
<!-- =======================
Main Banner END -->

@endsection
