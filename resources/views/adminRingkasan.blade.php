@extends('layouts.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
                        <i class="fas fa-chart-area fa-fw me-3"></i>
                        <span>Ringkasan</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-users fa-fw me-3"></i>
                        <span>Pengguna</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-folder fa-fw me-3"></i>
                        <span>Konten</span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav
            id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div
                class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="images/icons/thriftopia-blue.svg" height="25" alt="Thriftopia" loading="lazy"/>
                </a>
                <!-- Search form -->
                <!-- <form class="d-none d-md-flex input-group w-auto my-auto">
                          <input
                            autocomplete="off"
                            type="search"
                            class="form-control rounded"
                            placeholder='Search (ctrl + "/" to focus)'
                            style="min-width: 225px;"
                          />
                          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
                        </form> -->

                <!-- Right links -->
                    <ul
                    class="navbar-nav ms-auto d-flex flex-row"> <!-- Avatar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="collapse" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="row mx-3 pt-4 px-8">
            <div class="col-9">
                <div class="row ringkasan">
                    <div class="judul">Ringkasan</div>

                    <div class="row row-cols-1 row-cols-md-3 py-2 pb-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body" style="background: #FED74C;">
                                    <h5 class="card-title jumlah">6</h5>
                                    <p class="card-text">
                                        Permintaan Postingan
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title jumlah">120</h5>
                                    <p class="card-text">
                                        Postingan Aktif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title jumlah">240</h5>
                                    <p class="card-text">
                                        Pengguna Aktif
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- kelola biaya -->
                <div class="row kelola">
                    <div class="judul pb-2">Kelola Biaya Posting</div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col">
                                <table class="table table-borderless" style="font-size: 10pt;">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col" style="width: 30%;">Kategori</th>
                                            <th scope="col">Durasi</th>
                                            <th scope="col">Biaya</th>
                                            <th scope="col">Penawaran Spesial</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <button style="border: none; background: transparent;"><i class="fa-sharp fa-solid fa-trash" style="color: red;"></i></button>
                                            </th>
                                            <td>Paket Seminggu</td>
                                            <td>7 hari</td>
                                            <td>10.000</td>
                                            <td>Tidak Ada</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <button style="border: none; background: transparent;"><i class="fa-sharp fa-solid fa-trash" style="color: red;"></i></button>
                                            </th>
                                            <td>Paket Seminggu + Penawaran Spesial</td>
                                            <td>7 hari</td>
                                            <td>20.000</td>
                                            <td>Ada</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row" style="font-size: 10pt;">
                                    <div class="subjudul pb-2">Tambah Kategori</div>
                                    <form class="d-flex flex-row align-items-center flex-wrap">
                                        <div class="form-group" style="font-size: 10pt;">
                                            <input type="text" class="form-control" id="usr" placeholder="Judul Kategori" style=" height: 30px; width: 250px; font-size: 10pt;">
                                        </div>
                                        <div class="form-group px-2" style="font-size: 10pt;">
                                            <input type="text" class="form-control" id="usr" placeholder="Durasi" style=" height: 30px; width: 100px; font-size: 10pt;">
                                        </div>
                                        <div class="form-group" style="font-size: 10pt;">
                                            <input type="text" class="form-control" id="usr" placeholder="Biaya" style=" height: 30px; width: 100px; font-size: 10pt;">
                                        </div>
                                        <div class="row d-flex aligns-items-center pt-1">
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-primary my-1 px-3"  style="width: fit-content; height: 30px; font-size: 10pt;">Simpan</button>		
                                            </div>
                                            <div class="col d-flex aligns-items-center mt-1">
                                                <div class="form-check my-1  me-sm-2">
                                                    <input type="checkbox" class="form-check-input" id="customControlInline" />
                                                    <label class="form-check-label" for="customControlInline">Penawaran Spesial</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="subjudul pb-2">Cara Pembayaran</div>
                        <form>
                            <div class="form-outline mb-1">
                              <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary my-1 px-3"  style="width: fit-content; height: 30px; font-size: 10pt;">Simpan</button>		
                        </form>
                    </div>
                </div>

                <!-- permintaan Postingan -->
                <div class="row permintaan py-3 pb-4" style="font-size: 10pt;">
                    <div class="row judul pb-1">Permintaan Postingan</div>
                        <table id="datatable" class="table table-striped">
                            <thead>
                                <tr>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Bukti Pembayaran</th>
                                <th>Judul</th>
                                <th>Konfirmasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>10/10/22</td>
                                <td>Paket Seminggu</td>
                                <td>drive.google.com</td>
                                <td>Sepatu 
                                    <button style="border: none; background: transparent; color: #0155B6;">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </button>		
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary px-3 my-1"  style="display: inline-flex;
                                    justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 10pt;">Terima</button>		
                                    <button type="submit" class="btn btn-danger px-3 py-1 my-1"  style="display: inline-flex;
                                    justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 10pt;">Tolak</button>		
                                </td>
                                <tr>
                                <td>10/10/22</td>
                                <td>Paket Seminggu</td>
                                <td>drive.google.com</td>
                                <td>Sepatu 
                                    <button style="border: none; background: transparent; color: #0155B6;">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </button>		
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary px-3 my-1"  style="display: inline-flex;
                                    justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 10pt;">Terima</button>		
                                    <button type="submit" class="btn btn-danger px-3 py-1 my-1"  style="display: inline-flex;
                                    justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 10pt;">Tolak</button>		
                                </td>
                                <tr>
                                <td>10/10/22</td>
                                <td>Paket Seminggu</td>
                                <td>drive.google.com</td>
                                <td>Sepatu 
                                    <button style="border: none; background: transparent; color: #0155B6;">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </button>		
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary px-3 my-1"  style="display: inline-flex;
                                    justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 10pt;">Terima</button>		
                                    <button type="submit" class="btn btn-danger px-3 py-1 my-1"  style="display: inline-flex;
                                    justify-content: center; align-items:center; width: fit-content; height: 25px; font-size: 10pt;">Tolak</button>		
                                </td>		
                            </tbody>
                        </table>
                </div>
            </div>

            <!-- Aktivitas -->
            <div class="col">
                <div class=" row-cols-auto judul pb-2">Aktivitas</div>
                <div class="row-cols-auto">
                    <ul class="list-group" style="font-size: 10pt;">
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
    <!--Main layout-->
        <!-- bootstrap5 dataTables js cdn -->
        <script>
            $(document).ready(function () {
              $('#datatable').DataTable();
            });
          </script>
@endsection

@push('scripts')
{{-- dashboard js --}}

@endpush