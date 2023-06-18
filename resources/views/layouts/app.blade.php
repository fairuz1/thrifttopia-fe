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
		@include('layouts.navbar')
		@include('layouts.banner')		
		
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

		{{-- javascript --}}
		<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

	</body>
</html>
