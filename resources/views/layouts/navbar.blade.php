<nav class="navbar navbar-expand-lg fixed-top custom-navbar" style="background-color: #0155B6">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('/images/icons/thrifttopia_icons.svg ') }}" alt="thriftopia" width="200" height="40">
    </a>
    <ul class="navbar-nav ms-auto justify-content-end text-left me-5">
        <li class="nav-item">
            <a class="nav-link" href="#tentang">Tentang</a>
        </li>
        <li class="nav-item" id="masuk">
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Masuk</a>
        </li>
    </ul>
</nav>


  <!-- Modal MASUK -->
{{-- <div class="modal custom fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"  style="width: 25cm; border-radius:40px; padding:20px">
            <div class="modal-header">
                <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                <button type="button" class="btn-close mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
                        <img src="{{ asset('images/pictures/jumbotron.png') }}" alt="go" style="max-width: 40%;">
                    </div>
                    <div class="col">
                        <div class="judul pb-3" id="staticBackdropLabel" style="font-size:32pt; font-weight:800;"><span style="color: #0155B6; font-weight:800">Masuk </span>untuk lihat lebih banyak!</div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/user.svg') }}" alt="go"></span>
                            <input type="text" class="form-control" placeholder="Masukkan username/ e-mail Anda" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><img src="{{ asset('images/icons/key.svg') }}" alt="go"></span>
                            <input type="password" class="form-control" placeholder="Masukkan kata sandi Anda" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-5"></div>
                        <button type="button" class="btn btn-primary mx-2" style="background-color: #0155B6; border-radius:20px; width:12%; font-size:14pt">Masuk</button>
                        <div class="col">
                            <div class="keterangan mt-1" style="font-size: 14pt">Belum punya akun? <a><span style="color: #0155B6; font-weight:800">Daftar di sini!</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

  <!-- Modal DAFTAR-->
  <div class="modal custom fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"  style="width: 25cm; border-radius:40px; padding:20px">
            <div class="modal-header">
                <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                <button type="button" class="btn-close mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-5">
                        <div class="judul pb-3" id="staticBackdropLabel" style="font-size:32pt; font-weight:800;"><span style="color: #0155B6; font-weight:800; line-height:9%">Daftar Akun, </span>dapatkan keuntungan!</div>
                        <img src="{{ asset('images/pictures/daftar.png') }}" alt="go" style="max-width: 40%;">
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
            
            </div>
        </div>
    </div>
</div>