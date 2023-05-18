<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Thrifttopia</title>

		<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/css/thrifttopia.css') }}" rel="stylesheet">
	</head>
	<body>

		{{-- navbar --}}
		<section class="navbar-background">
			@include('layouts.navbar')
		</section>
		
		{{-- content --}}
		<div class="page-content">
			<div class="content-wrapper">
				<div class="content mt-0">
					@yield('content')
				</div>
			</div>
		</div>

		{{-- footer --}}
		@include('layouts.footer')
		<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	</body>
</html>
