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
        <form action="{{ route('jualBarang') }}" method="post">
            <div class="row">
                <div class="col-7">
                    <label for="judulBarang" class="form-label" style="color: #656B74; font-weight:800">Judul Barang</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="judulBarang" id="judulBarang" placeholder="Masukkan judul barang Anda">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control d-none" name="kategoriBarang" id="kategoriBarang" value="">
                    </div>

                    <label for="kategori" class="form-label" style="color: #656B74; font-weight:800">Kategori</label>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #0155B6">Pilih Kategori</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item">Elektronik</a></li>
                            <li><a class="dropdown-item">Hobi</a></li>
                            <li><a class="dropdown-item">Pakaian</a></li>
                            <li><a class="dropdown-item">Rumah Tangga</a></li>
                            <li><a class="dropdown-item">Kendaraan</a></li>
                            <li><a class="dropdown-item">Kecantikan</a></li>
                            <li><a class="dropdown-item">Lain-lain</a></li>
                        </ul>
                    </div>

                    <label for="harga" class="form-label pt-3" style="color: #656B74; font-weight:800">Harga</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan harga">
                    </div>

                    <label for="deskripsi" class="form-label" style="color: #656B74; font-weight:800;">Deskripsi</label>
                    <div class="input-group mb-3">
                        <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi"></textarea>
                    </div>

                    <label for="fotoBarang" class="form-label" style="color: #656B74; font-weight:800">Foto Barang (Upload ke imgbox.com)</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="fotoBarang" id="fotoBarang" placeholder="Masukkan link imgbox di sini">
                    </div>

                    <label for="lokasi" class="form-label" style="color: #656B74; font-weight:800">Foto Barang</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan lokasi Anda">
                    </div>

                    <label for="whatsapp" class="form-label" style="color: #656B74; font-weight:800">Nomor Whatsapp</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Masukkan nomor Whatsapp Anda">
                    </div>
                </div>
                <div class="col">
                    <div class="paket">
                        <label for="paket" class="form-label" style="color: #656B74; font-weight:800">Pilih paket pembayaran</label>
                        <div class="col-auto">
                            <div class="col">
                              <label>
                                <input type="radio" name="product" selected checked class="card-input-element" />
                                  <div class="card card-default card-input">
                                    <div class="card-header">Paket Seminggu</div>
                                    <div class="card-body">
                                        Rp10.000,-
                                    </div>
                                  </div>
                              </label>

                            </div>
                            <div class="col">
                              <label>
                                <input type="radio" name="product" class="card-input-element" />
                                  <div class="card card-default card-input">
                                    <div class="card-header">Paket Seminggu + Penawaran Spesial</div>
                                    <div class="card-body">
                                        Rp20.000,-
                                    </div>
                                  </div>
                              </label>
                            </div>

                        </div>

                    </div>

                    <div class="caraPembayaran">
                        <label for="paket" class="form-label" style="color: #656B74; font-weight:800">Cara Pembayaran</label>
                        <p id="caraPembayaran" style="color: #656B74; font-weight:400">
                            Lakukan pembayaran pada  e-wallet Dana atau Gopay ke nomor 087819944000. Dapat juga melalui rekening BCA 2917480317 (Vellya Riona).
                        </p>
                    </div>

                    <div class="buktiPembayaran">
                        <label for="buktiPembayaran" class="form-label" style="color: #656B74; font-weight:800">Foto Bukti Pembayaran (Upload ke imgbox.com)</label>
                        <input type="text" class="form-control" name="buktiPembayaran" id="buktiPembayaran" placeholder="Masukkan link imgbox di sini">
                    </div>

                    {{-- <button type="button" class="btn px-3 my-4" data-bs-dismiss="modal" style="color: #0155B6; font-weight:900; background-color: transparant; border-radius:20px;font-size:12pt; border: 2px solid rgba(1, 85, 182, 1)">Kembali</button> --}}
                    <button type="button" class="btn btn-primary px-3 mt-4" style="background-color: #0155B6; border-radius:20px;">Ajukan</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(".dropdown-menu li a").click(function(){
            $(".btn:first-child").html($(this).text()+' <span class="btn"></span>');
            $("#kategoriBarang").val($(this).text());
            console.log($(this).text());
        });
    </script>
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
                    @if (session()->has('auth'))
                    <button class="btn btn-outline-dark banner-button mt-2 px-4" href="#" role="button" onclick="window.location='{{ route('jualBarang') }}'" style="cursor: pointer;">Coba Sekarang!</button>
                    @else
                    <button class="btn btn-outline-dark banner-button mt-2 px-4" href="#" role="button" onclick="window.location='{{ route('login') }}'" style="cursor: pointer;">Coba Sekarang!</button>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-auto ms-auto d-none d-lg-block p-0">
            <img src="{{ asset('images/pictures/banner-image-cut.png') }}" class="img-fluid customimage" style="overflow: visible;" alt="thriftopia">
        </div>
    </div>
@endif



