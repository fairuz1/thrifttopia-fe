{{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top px-3 py-2 mb-3">
    <div class="container-fluid align-contents-center">
        {{-- navbar brand --}}
        <a class="navbar-brand" href="#"><img src="{{ asset('/images/icons/thrifttopia_icons.svg ') }}" alt="thriftopia" width="200" height="40"></a>

        {{-- navbar toggler --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- navbar collapse --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
                {{-- navbar items --}}
                @if (session()->has('auth'))
                    <li class="nav-item">
                        {{-- <a class="nav-link" data-bs-target="#modal-login" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor: pointer;">Masuk</a> --}}
                        <a class="nav-link" onclick="window.location='{{ route('jualBarang') }}'" style="cursor: pointer;">Jual Barang</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link" style="cursor: pointer; border: none; background-color: transparent;"><b>{{ session()->get('auth')['email'] }}</b></button>
                        </form>
                    </li>

                    <li class="nav-item"><img src="{{ asset('images/pictures/default-profile.png') }}" class="img-fluid" style="width: 60%" alt="Avatar" class="avatar"></li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" onclick="window.location='{{ route('dashboard') }}'" style="cursor: pointer;">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" data-bs-target="#modal-login" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor: pointer;">Masuk</a> --}}
                        <a class="nav-link" onclick="window.location='{{ route('login') }}'" style="cursor: pointer;">Masuk</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>

{{-- navbar background --}}
<div class="navbar-background"></div>

@if (Route::is('jualBarang'))
    <div class="row jumbotron mx-5 p-5">
        <div class="judul pb-1" id="staticBackdropLabel" style="font-size:32pt; color: #0155B6;"><span style="font-weight:800; line-height:9%">Unggah Barangmu </span>Sekarang!</div>
        <p style="color: #656B74; font-size:14pt; padding-bottom:10px"> Jual barang dan lakukan pembayaran, kami akan melakukan approval dalam 1x24 jam.
        <div class="col-5">
            {{-- <div class="judul pb-3" id="staticBackdropLabel" style="font-size:32pt; font-weight:800;"><span style="color: #0155B6; font-weight:800; line-height:9%">Daftar Akun, </span>dapatkan keuntungan!</div> --}}
            {{-- <img src="{{ asset('images/pictures/daftar.png') }}" alt="go" style="max-width: 40%;"> --}}
            <label for="judulBarang" class="form-label" style="color: #656B74; font-weight:800">Judul Barang</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="judulBarang" placeholder="Masukkan judul barang Anda" aria-describedby="basic-addon3">
            </div>

            <label for="kategori" class="form-label" style="color: #656B74; font-weight:800">Kategori</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="kategori" placeholder="Msasukkan judul barang Anda" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col">
            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/sms.svg') }}" alt="go"></span>
                    <input type="text" class="form-control" placeholder="Masukkan e-mail Anda" aria-label="Username" name="email" id="email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/user.svg') }}" alt="go"></span>
                    <input type="text" class="form-control" placeholder="Buat Username Anda" aria-label="Username" name="username" id="username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                    <input type="password" class="form-control" placeholder="Buat kata sandi" aria-label="Password" name="password" id="password" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                    <input type="password" class="form-control" placeholder="Ulangi kata sandi" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/whatsapp.svg') }}" alt="go"></span>
                    <input type="text" class="form-control" placeholder="Masukkan nomor Whatsapp" aria-label="Username" name="whatsapp" id="whatsapp" aria-describedby="basic-addon1">
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <button type="button" class="btn btn-primary mx-2" style="background-color: #0155B6; border-radius:20px; min-width:90%; font-size:14pt">Daftar</button>
                    </div>
                    <div class="col">
                        <div class="keterangan mt-1" style="font-size: 14pt"><p>Sudah punya akun? <a style="color: #0155B6; font-weight:800">Masuk di sini!</a></p></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endif

@if (Route::is('dashboard'))
    <div class="row jumbotron mx-5">
        <div class="col px-md-5 py-5" style="z-index: 999 !important; position: relative !important;">
            <div class="row">
                <div class="col-12">
                    <h1 class="banner-header">
                        Jual barang bekas anti ribet <br> hanya di
                        <img class="img-fluid" style="width: 30vw !important;" src="{{ asset('images/icons/thriftopia-blue.svg') }}">
                    </h1>
                </div>
                <div class="col-12">
                    <button class="btn btn-outline-dark banner-button mt-2 px-4" href="#" role="button" onclick="window.location='{{ route('login') }}'" style="cursor: pointer;">Coba Sekarang!</button>
                </div>
            </div>
        </div>
        <div class="col-auto ms-auto d-none d-lg-block p-0">
            <img src="{{ asset('images/pictures/banner-image-cut.png') }}" class="img-fluid customimage" style="overflow: visible;" alt="thriftopia">
        </div>
    </div>
@endif



