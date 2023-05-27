@extends('layouts.app-auth')

@push('styles')


@endpush

@section('content')

<div class="container" style="background: #FED74C">
    <div class="row pb-1">
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
</div>

@endsection

@push('scripts')
{{-- dashboard js --}}

@endpush