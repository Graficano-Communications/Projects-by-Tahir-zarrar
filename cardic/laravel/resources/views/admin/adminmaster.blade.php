<!DOCTYPE html>

<html>

<head>

<title>Cardic Surgicals - @yield('title')</title>

<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

<link href="{{ asset('css/font-awesome.css') }} " rel="stylesheet"> 

<link href="{{ asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>

<!-- Styles for order UI -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script defer src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<!-- Styles for order UI -->

<!-- <link href="css/catbanner.css" rel='stylesheet' type='text/css'/> -->

<!-- //for bootstrap working -->

<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>

</head>



<body>

<!-- header -->

@include('admin.includes.header')

<!-- //header -->

<div class="banner-bootom-w3-agileits">

	   @include('admin.includes.sidemenu') 

		 <div class="col-md-8  products-right">

			  @yield('content')

		 </div>	

</div>



<script defer type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script defer type="text/javascript" src="{{ asset('assets/js/jquery.js')}}"></script>
<script defer type="text/javascript" src="{{ asset('assets/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugin/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugin/tinymce/init-tinymce.js')}}"></script>
@yield('specificscripts')
<script>
	
</script>

</body>

</html>

