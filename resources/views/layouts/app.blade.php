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
				<div class="jumbotron mx-auto pt-5">
				<div class="container">
					<div class="row">
					<div class="col-8">
						<h1 class="display-4" style="font-family: Italiana;">Jual barang bekas anti ribet <br>
						hanya di 
						<img src="{{ asset('images/icons/thriftopia-blue.svg') }}"> 
						</h1>
						<p class="lead">
						<button class="mt-2 pl-4 pr-4 btn btn-outline-dark" href="#" role="button" style="border-radius: 20px;">Coba Sekarang!</button>
						</p>
					</div>
					<div class="col customimage">
						<img src="{{ asset('images/pictures/jumbotron.png') }}" alt="thriftopia" max-height="500">
					</div>
				</div>
				</div>
			</section>
		</div>
		@include('layouts.navbar')
		
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
