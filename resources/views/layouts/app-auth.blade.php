<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Thrifttopia</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italiana">
		<link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Montserrat">
		<script src="https://kit.fontawesome.com/88ef642845.js" crossorigin="anonymous"></script>

		<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{ asset('/css/thrifttopia.css') }}" rel="stylesheet">
	</head>
	<body>

		{{-- navbar --}}
		<div class="navbar-background">
			<section id="jumbotron">
				<div class="jumbotron-body mx-auto pt-5">
					{{-- content --}}
					@yield('content')
				</div>
			</section>
		</div>
		@include('layouts.navbar')

		{{-- footer --}}
		@include('layouts.footer')
		<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	</body>
</html>
