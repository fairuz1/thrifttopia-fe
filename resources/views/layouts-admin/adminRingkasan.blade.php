@extends('layouts-admin.app')

@section('content')

    <main class="mt-5">
        <div class="row mx-3 pt-4 px-8">
            <div class="col-9">
                {{-- judul --}}
                <div class="judul">Ringkasan</div>

                {{-- ringkasan --}}
                <div class="row row-cols-1 row-cols-md-3 py-2 pb-4">
                    {{-- ringkasan permintaan --}}
                    <div class="col">
                        <div class="card">
                            <div class="card-body main-card">
                                <h5 id="jumlah-permintaan" class="card-title jumlah">{{ $postData[0] }}</h5>
                                <p id="text-permintaan" class="card-text">Permintaan Postingan</p>
                            </div>
                        </div>
                    </div>

                    {{-- ringkasan postingan --}}
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 id="ringkasan postingan" class="card-title jumlah">{{ $postData[1] }}</h5>
                                <p id="text-postingan" class="card-text">Postingan Aktif</p>
                            </div>
                        </div>
                    </div>

                    {{-- ringkasan pengguna --}}
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 id="ringkasan-pengguna" class="card-title jumlah">{{ $postData[2] }}</h5>
                                <p id="text-pengguna" class="card-text">Pengguna Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- kelola biaya -->
                <div class="row">
                    <div class="judul pb-2">Kelola Biaya Posting</div>

                    <div class="col col-md-8 col-sm-auto">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Biaya</th>
                                    <th scope="col">Penawaran Spesial</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < count($postPrices); $i++)
                                    <tr>
                                        <th scope="row"><button class="delete-icons"><i class="fa-sharp fa-solid fa-trash"></i></button></th>
                                        <td id="paket-nama">{{ $postPrices['data'][$i]['name'] }}</td>
                                        <td id="paket-waktu">{{ $postPrices['data'][$i]['ads_duration'] }}</td>
                                        <td id="paket-harga">{{ $postPrices['data'][$i]['price'] }}</td>
                                        <td id="paket-penawaran">Tidak Ada</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                        {{-- tambah kategori  --}}
                        <div class="row">
                            <div class="subjudul pb-2">Tambah Kategori</div>
                            <form>
                                <div class="row row-cols-3">
                                    <div class="col form-group">
                                        <input type="text" class="form-control" id="usr" placeholder="Judul Kategori">
                                    </div>
                                    <div class="col form-group">
                                        <input type="text" class="form-control" id="usr" placeholder="Durasi">
                                    </div>
                                    <div class="col form-group">
                                        <input type="text" class="form-control" id="usr" placeholder="Biaya">
                                    </div>
                                </div>

                                <div class="form-group form-outline my-2">
                                    <div class="subjudul pb-2">Cara Pembayaran</div>
                                    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                </div>

                                <div class="form-group form-check my-2 me-sm-2">
                                    <label class="form-check-label" for="customControlInline">Penawaran Spesial</label>
                                    <input type="checkbox" class="form-check-input" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary mx-0 my-2 px-3">Simpan</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- permintaan Postingan -->
                <div class="row permintaan py-3 pb-4" style="font-size: 1rem;">
                    <div class="row judul pb-1">Permintaan Postingan</div>
                        <table id="data-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th id="tanggal-permintaan">Tanggal</th>
                                    <th id="kategori-permintaan">Kategori</th>
                                    <th id="bukti-permintaan">Bukti Pembayaran</th>
                                    <th id="judul-permintaan">Judul</th>
                                    <th id="konfirmasi-permintaan">Konfirmasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($j = 0; $j < count($postData[3]['data']); $j++)
                                    <tr>
                                        <td>{{ $postData[3]['data'][$j]['updated_at'] }}</td>
                                        <td>{{ $postData[3]['data'][$j]['pricing']['name'] }}</td>
                                        <td>{{ $postData[3]['data'][$j]['proof_of_payment'] }}</td>
                                        <td>{{ $postData[3]['data'][$j]['title'] }}
                                            <button style="border: none; background: transparent; color: #0155B6;" data-bs-toggle="modal" data-bs-target="#modalDetail">
                                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary px-3 my-1"  style="display: inline-flex;
                                            justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#modalTerima">Terima</button>
                                            <button type="submit" class="btn btn-danger px-3 py-1 my-1"  style="display: inline-flex;
                                            justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 1rem;" data-bs-toggle="modal" data-bs-target="#modalTolak">Tolak</button>
                                        </td>
                                    <tr>
                                @endfor
                            </tbody>
                        </table>
                </div>
            </div>

            <!-- Aktivitas -->
            <div class="col">
                <div class=" row-cols-auto judul pb-2">Aktivitas</div>
                <div class="row-cols-auto">
                    <ul class="list-group" style="font-size: 1rem;">
                        <li class="list-group-item">Akun vellya23 telah dibuat.</li>
                        <li class="list-group-item">Topi Stradivarius telah diunggah.</li>
                        <li class="list-group-item">Permintaan postingan baru dari vellya23.</li>
                        <li class="list-group-item">Topi Stradivarius telah terjual.</li>
                        <li class="list-group-item">Topi Stradivarius telah ditambahkan.</li>
                        <li class="list-group-item">Permintaan postingan baru dari vellya23.</li>
                        </ul>
                </div>
                <div class="row align-content-end">
                    <button class="col-auto" style="font-size: 20pt; border: none; background: transparent; color: #0155B6;">
                        <i class="fa-solid fa-square-caret-left"></i>
                    </button>
                    <button class="col-auto" style="font-size: 20pt; border: none; background: transparent; color: #0155B6;">
                        <i class="fa-solid fa-square-caret-right"></i>
                    </button>
                    <!-- <div class="col-auto"><button style="font-size: 20pt; color: #0155B6;"><i class="fa-solid fa-square-caret-left"></i></div></div>
                    <div class="col-auto"><button style="font-size: 20pt; color: #0155B6;"><i class="fa-solid fa-square-caret-right"></i></div></div> -->
                </div>
            </div>
        </div>

    </main>

    {{-- popup detail modal --}}
    <div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content p-4">
            {{-- modal header --}}
            <div class="modal-header border-0">
                <div class="col-auto me-auto">
                    <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" class="img-fluid" style="width: 50%">
                </div>
                <div class="col-auto ms-auto">
                    <button id="close-modal" type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>

            {{-- modal body --}}
            <div class="modal-body">
                <div class="row">
                    {{-- post images --}}
                    <div class="col my-auto">
                        <div id="postImages" class="carousel slide" data-bs-ride="carousel">
                            {{-- carousel images --}}
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/pictures/radio.png') }}" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/pictures/skintific.png') }}" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/pictures/jaket-kulit.png') }}" class="d-block w-100">
                                </div>
                            </div>

                            {{-- carousel indicators --}}
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselPostIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselPostIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselPostIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>

                            {{-- carousel indicator --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPostIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPostIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    {{-- post data --}}
                    <div class="col">
                        <div class="d-flex flex-column">
                            <div id="post-data" class="p-2">
                                <p id="post-categories" class="post-categories py-1 px-2"><b>ELEKTRONIK</b></p>
                                <p id="post-title" class="post-title">Jaket Kulit</p>
                                <p id="post-location" class="post-location"><i class=" me-2 fas fa-location-dot"></i>Sendowo, Kota Yogyakarta</p>
                                <p id="post-cost" class="post-cost">Rp 180.000</p>
                                <p id="post-descriptions" class="post-descriptions">
                                    Kondisi masih bagus, pembelian Februari 2022. H&M. Terdapat 2 saku, belt lepas pasang. Bahan kulit asli.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- poster data --}}
                    <div class="col">
                        <div class="d-flex flex-column">
                            <div id="poster-data" class="row p-2">
                                <div class="col-auto">
                                    <img src="{{ asset('images/pictures/default-profile.png') }}" alt="Avatar" class="avatar">
                                </div>
                                <div class="col-auto">
                                    <p class="post-seller mb-0">seller</p>
                                    <p class="post-seller-details">Seller</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-whatsapp py-2"><span class="d-flex justify-content-center align-items-center"><i class="fa fa-whatsapp fa-xl me-2"></i>Hubungi Penjual</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{-- terima --}}
    <div class="modal fade" id="modalTerima" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTerima" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">
                {{-- modal header --}}
                <div class="modal-header border-0">
                    <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                    <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- modal body --}}
                <div class="modal-body border-0" style="font-size:14pt;">
                    <div class="judul pb-1" id="staticBackdropLabel" style="font-size: 2rem; font-weight:900">
                        Yakin untuk menerima postingan ini ditampilkan di beranda?
                    </div>
                </div>

                {{-- modal footer --}}
                <div class="modal-footer border-0">
                    <button id="close-modal" type="button" class="btn btn-back px-3" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                    <button type="button" class="btn btn-primary px-5" style="border-radius: 20px; font-size: 1rem;" onclick="window.location='{{ route('admin-dashboard') }}'">Ya</button>
                </div>
            </div>
        </div>
    </div>


    {{-- tolak --}}
    <div class="modal fade" id="modalTolak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTolak" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">
                {{-- modal header --}}
                <div class="modal-header border-0">
                    <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                    <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- modal body --}}
                <div class="modal-body border-0" style="font-size:14pt;">
                    <div class="judul pb-1" id="staticBackdropLabel" style="font-size: 2rem; font-weight:900">
                        Yakin untuk menolak permintaan postingan ini?
                    </div>
                </div>

                {{-- modal footer --}}
                <div class="modal-footer border-0">
                    <button id="close-modal" type="button" class="btn btn-back px-3" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                    <button type="button" class="btn btn-primary px-5" style="border-radius: 20px; font-size: 1rem;" onclick="window.location='{{ route('admin-dashboard') }}'">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap5 dataTables js cdn -->
    <script>
        $(document).ready(function () {
            $('#data-table').DataTable();
        });
    </script>
@endsection
