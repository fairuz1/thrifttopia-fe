<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Thrifttopia</title>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Italiana">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="{{ asset('/css/thrifttopia.css') }}" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/88ef642845.js" crossorigin="anonymous"></script>
	</head>
	<body>

        {{-- navbar --}}
        <nav class="navbar navbar-expand-md navbar-dark fixed-top px-3 pt-3 mb-3">
            <div class="container-fluid">
                {{-- navbar brand --}}
                <a class="navbar-brand" href="#"><img src="{{ asset('/images/icons/thrifttopia_icons.svg ') }}" alt="thriftopia" width="200" height="40"></a>

                {{-- navbar toggler --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- navbar collapse --}}
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        {{-- navbar items --}}
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" onclick="window.location='{{ route('dashboard') }}'" style="cursor: pointer;">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="window.location='{{ route('login') }}'" style="cursor: pointer;">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- navbar background --}}
        <div class="navbar-background mb-5"></div>

        {{-- content --}}
        <main class="page-content login mx-5">
            <div class="container-fluid">
                <div class="row p-5">
                    <div class="col-5">
                        <p class="mb-0" id="modal-registrasi-Label" style="font-size: 3rem; font-weight:800;">
                            <span style="color: #0155B6; font-weight:800; line-height:9%">Daftar Akun, </span>dapatkan keuntungan!
                        </p>
                        <img src="{{ asset('images/pictures/daftar.png') }}" class="img-fluid customimage" style="overflow: visible;" alt="thriftopia">
                    </div>
                    <div class="col my-auto">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/sms.svg') }}" alt="go"></span>
                                <input type="email" class="form-control" placeholder="Masukkan e-mail Anda" aria-label="email" name="email" id="email" aria-describedby="email" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/user.svg') }}" alt="go"></span>
                                <input type="text" class="form-control" placeholder="Buat Username Anda" aria-label="username" name="username" id="username" aria-describedby="username" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                                <input type="password" class="form-control" placeholder="Buat kata sandi" aria-label="password" name="password" id="password" aria-describedby="password" required>

                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                                <input type="password" class="form-control" placeholder="Ulangi kata sandi" aria-label="repeat-password" name="repeat-password" id="repeat-password" aria-describedby="repeat-password" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/whatsapp.svg') }}" alt="go"></span>
                                <input type="number" class="form-control" placeholder="Masukkan nomor Whatsapp" aria-label="Username" name="whatsapp" id="whatsapp" aria-describedby="whatsapp" required>
                            </div>
                            <div class="row mt-3">
                                <div class="col-auto" style="width: fit-content;">
                                    <button type="submit" class="btn btn-primary shadow-none px-5" style="background-color: #0155B6; border-radius:20px; font-size:14pt; width: fit-content;">Daftar</button>
                                </div>
                                <div class="col keterangan d-flex align-items-center px-0">
                                    <p class="mb-0">Sudah punya akun? <a onclick="window.location='{{ route('login') }}'" style="color: #0155B6; font-weight:800">Masuk di sini!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        {{-- footer --}}
        @include('layouts.footer')

		{{-- javascript --}}
		<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>

