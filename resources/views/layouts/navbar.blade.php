
<nav class="navbar navbar-expand-lg fixed-top custom-navbar p-3" style="background-color: #0155B6">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('/images/icons/thrifttopia_icons.svg ') }}" alt="thriftopia" width="200" height="40">
    </a>
    <ul class="navbar-nav ms-auto justify-content-end text-left me-2">
        <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
        </li>
        <li class="nav-item" id="masuk">
            <a class="nav-link" data-bs-target="#modal-login" data-bs-toggle="modal" data-bs-dismiss="modal">Masuk</a>
        </li>
    </ul>
</nav>


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