<!-- modal login -->
<div class="modal custom fade" id="modal-login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:40px; padding:20px">
            <div class="modal-header border-0">
                <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    {{-- <div class="col-5">
                        <img src="{{ asset('images/pictures/jumbotron.png') }}" alt="go" style="max-width: 40%;">
                    </div> --}}
                    <div class="col">
                        <form action="">
                            <div class="judul pb-3" id="modal-login-label" style="font-size:32pt; font-weight:800;"><span style="color: #0155B6; font-weight:800">Masuk </span>untuk lihat lebih banyak!</div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/user.svg') }}" alt="go"></span>
                                <input type="text" class="form-control" placeholder="Masukkan username/ e-mail Anda" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                                <input type="password" class="form-control" placeholder="Masukkan kata sandi Anda" aria-label="Password" aria-describedby="basic-addon1">
                            </div>
                            <div class="row mt-3">
                                <div class="col-4" style="width: fit-content;">
                                    <button type="submit" class="btn btn-primary shadow-none" style="background-color: #0155B6; border-radius:20px; font-size:14pt">Masuk</button>
                                </div>
                                <div class="col keterangan d-flex align-items-center px-0">
                                    <p class="mb-0">Belum punya akun? <a data-bs-target="#modal-registrasi" data-bs-toggle="modal" data-bs-dismiss="modal"><span style="color: #0155B6; font-weight:800">Daftar di sini!</span></a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- modal registrasi -->
<div class="modal custom fade pe-0" id="modal-registrasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-registrasi-Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:40px; padding:20px">
            <div class="modal-header border-0">
                <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
                        <div class="judul pb-3" id="modal-registrasi-Label" style="font-size:32pt; font-weight:800;"><span style="color: #0155B6; font-weight:800; line-height:9%">Daftar Akun, </span>dapatkan keuntungan!</div>
                        <img src="{{ asset('images/pictures/daftar.png') }}" alt="go" style="max-width: 40%;">
                    </div>
                    <div class="col">
                        <form>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/sms.svg') }}" alt="go"></span>
                                <input type="email" class="form-control" placeholder="Masukkan e-mail Anda" aria-label="email" name="email" id="email" aria-describedby="email">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/user.svg') }}" alt="go"></span>
                                <input type="text" class="form-control" placeholder="Buat Username Anda" aria-label="username" name="username" id="username" aria-describedby="username">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                                <input type="password" class="form-control" placeholder="Buat kata sandi" aria-label="password" name="password" id="password" aria-describedby="password">

                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                                <input type="password" class="form-control" placeholder="Ulangi kata sandi" aria-label="repeat-password" name="repeat-password" id="repeat-password" aria-describedby="repeat-password">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/whatsapp.svg') }}" alt="go"></span>
                                <input type="number" class="form-control" placeholder="Masukkan nomor Whatsapp" aria-label="Username" name="whatsapp" id="whatsapp" aria-describedby="whatsapp">
                            </div>
                            <div class="row mt-3">
                                <div class="col-4" style="width: fit-content;">
                                    <button type="submit" class="btn btn-primary shadow-none" style="background-color: #0155B6; border-radius:20px; font-size:14pt">Daftar</button>
                                </div>
                                <div class="col keterangan d-flex align-items-center px-0">
                                    <p class="mb-0">Sudah punya akun? <a href="#" style="color: #0155B6; font-weight:800" data-bs-target="#modal-login" data-bs-toggle="modal" data-bs-dismiss="modal">Masuk di sini!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="navbar-background">
    <div class="jumbotron p-5 mx-5" style="height:fit-content">
        <div class="row pb-1">
            <div class="judul pb-1" id="staticBackdropLabel" style="font-size:32pt; color: #0155B6;"><span style="font-weight:800; line-height:9%">Unggah Barangmu </span>Sekarang!</div>
            <p style="color: #656B74; font-size:14pt; padding-bottom:10px"> Jual barang dan lakukan pembayaran, kami akan melakukan approval dalam 1x24 jam.

            <div class="col-7">
                <label for="judulBarang" class="form-label" style="color: #656B74; font-weight:800">Judul Barang</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="judulBarang" placeholder="Masukkan judul barang Anda" aria-describedby="basic-addon3">
                </div>

                <label for="kategori" class="form-label" style="color: #656B74; font-weight:800">Kategori</label>
                <div class="input-group mb-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:300px; background-color:#fff; color:#656B74">
                          Pilih kategori
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Elektronik</a></li>
                            <li><a class="dropdown-item" href="#">Hobi</a></li>
                            <li><a class="dropdown-item" href="#">Pakaian</a></li>
                            <li><a class="dropdown-item" href="#">Rumah Tangga</a></li>
                            <li><a class="dropdown-item" href="#">Kendaraan</a></li>
                            <li><a class="dropdown-item" href="#">Kecantikan</a></li>
                            <li><a class="dropdown-item" href="#">Lain-lain</a></li>
                        </ul>
                      </div>
                </div>

                <label for="harga" class="form-label" style="color: #656B74; font-weight:800">Harga</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="harga" placeholder="Masukkan harga" aria-describedby="basic-addon3">
                </div>

                <label for="deskripsi" class="form-label" style="color: #656B74; font-weight:800;">Deskripsi</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="judulBarang" placeholder="Masukkan deskripsi" aria-describedby="basic-addon3">
                </div>

                <label for="foto" class="form-label" style="color: #656B74; font-weight:800">Link Foto Barang</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="foto" placeholder="Masukkan link google drive foto barang" aria-describedby="basic-addon3">
                </div>

                <label for="lokasi" class="form-label" style="color: #656B74; font-weight:800">Lokasi</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="lokasi" placeholder="Masukkan lokasi Anda" aria-describedby="basic-addon3">
                </div>

                <label for="nomor" class="form-label" style="color: #656B74; font-weight:800">No. Whatsapp</label>
                <div class="input-group mb-3">
                    <input     class="form-control"
                    id="formControlDisabled"
                    type="text"
                    placeholder="087819944000"
                    aria-label="disabled input example"
                    disabled>
                    <i class="fa fa-info-circle" aria-hidden="true" style="color: #656B74"></i>
                </div>

            </div>

            <div class="col-4 ps-5">
                <form>
                    <label for="nomor" class="form-label" style="color: #656B74; font-weight:800">Pilih Paket Pembayaran</label>
                        <div class="input-group-text">
                            <div class="row">
                                <div class="col " style="background-color: #0155B6; border-radius:15px 0 0 15px; width:fit-content">
                                    <input class="form-check-input" name="harga1" type="radio" id="harga1" aria-label="Radio button">
                                </div>
                                <div class="col" style="background-color: #0155B6; border-radius:0 15px 15px 0;">
                                    <div class="row my-2">
                                        <div class="col">
                                            <div class="row judulPaket mx-3" style="color: #FED74C; font-weight:800"> Dengan iklan di Dashboard </div>
                                        </div>
                                        <div class="row hargaPaket mx-3" style="color: #fff; font-weight:900; font-size:24pt"> Rp20.000,- </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col " style="background-color: #0155B6; border-radius:15px 0 0 15px; width:fit-content">
                                    <input class="form-check-input" name="harga1" type="radio" id="harga1" aria-label="Radio button">
                                </div>
                                <div class="col" style="background-color: #0155B6; border-radius:0 15px 15px 0;">
                                    <div class="row my-2">
                                        <div class="col">
                                            <div class="row judulPaket mx-3" style="color: #FED74C; font-weight:800"> Dengan iklan di Dashboard </div>
                                        </div>
                                        <div class="row hargaPaket mx-3" style="color: #fff; font-weight:900; font-size:24pt"> Rp20.000,- </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>


                <div class="caraPembayaran py-3">
                    <div style="color: #656B74; font-weight:800">Cara Pembayaran</div>
                    <div class="deskripsiPembayaran" style="color: #656B74;">
                        Lakukan pembayaran pada  e-wallet Dana atau Gopay ke nomor 087819944000.
                        Dapat juga melalui rekening BCA 2917480317(Vellya Riona).
                    </div>
                </div>

                <label for="foto" class="form-label" style="color: #656B74; font-weight:800">Link Bukti Pembayaran</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="foto" placeholder="Masukkan link google drive bukti pembayaran" aria-describedby="basic-addon3">
                </div>

                <button class="btn shadow-none lead mt-2 px-4" href="#" role="button" style="border-radius: 20px; color:#0155B6; border: 2px solid #0155B6; font-weight:900" data-bs-toggle="modal" data-bs-target="#modalAjukan">Ajukan</button>



<div class="modal custom fade" id="modalAjukan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:40px; padding:20px">
            <div class="modal-header border-0">
                <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="font-size:14pt;">
                <div class="judul pb-1" id="staticBackdropLabel" style="font-size:24pt; color: #0155B6; font-weight:900">Ajukan Sekarang?</div>
                Pengajuan postingan barang Anda akan di-review oleh admin terlebih dahulu.
                Anda akan mendapat konfirmasi melalui notifikasi paling lambat 1x24 jam.
                Anda tidak dapat mengedit data barang yang telah diposting.
            </div>
            <div class="modal-footer">
            <button type="button" class="btn px-3" data-bs-dismiss="modal" style="color: #0155B6; font-weight:900; background-color: transparant; border-radius:20px;font-size:12pt; border: 2px solid rgba(1, 85, 182, 1)">Kembali</button>
            <button type="button" class="btn btn-primary px-3" style="background-color: #0155B6; border-radius:20px;font-size:12pt">Ajukan</button>
            </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

