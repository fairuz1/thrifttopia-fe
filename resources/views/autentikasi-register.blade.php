@extends('layouts.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')

  <!-- modal autentikasi -->
  <div class="modal custom fade pe-0" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:40px; padding:20px">
            <div class="modal-header border-0">
                <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <input type="email" class="form-control" placeholder="Masukkan e-mail Anda" aria-label="Username" name="email" id="email" aria-describedby="basic-addon1">
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
                                <input type="number" class="form-control" placeholder="Masukkan nomor Whatsapp" aria-label="Username" name="whatsapp" id="whatsapp" aria-describedby="basic-addon1">
                            </div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary shadow-none" style="background-color: #0155B6; border-radius:20px; min-width:90%; font-size:14pt">Daftar</button>
                                </div>
                                <div class="col keterangan d-flex align-items-center px-0">
                                    <p class="mb-0">Sudah punya akun? <a href="#" style="color: #0155B6; font-weight:800">Masuk di sini!</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
{{-- dashboard js --}}

@endpush
