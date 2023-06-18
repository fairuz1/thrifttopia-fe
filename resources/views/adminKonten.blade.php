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
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-area fa-fw me-3"></i>
                        <span>Ringkasan</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-users fa-fw me-3"></i>
                        <span>Pengguna</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
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
            <!-- <div class="col"> -->
                <div class="row ringkasan">
                    <div class="judul">Konten</div>

                    <!-- <div class="row row-cols-1 row-cols-md-3 py-2 pb-4"> -->
                        <!-- <div class="col"> -->
                            <!-- permintaan Postingan -->
                        <div class="row permintaan py-3 pb-4" style="font-size: 10pt;">
                            <table id="datatable" class="table table-striped">
                                <thead>
                                    <tr>
                                    <th>Tanggal</th>
                                    <th>Jenis Postingan</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Lokasi</th>
                                    <th>No. Whatsapp</th>
                                    <th>Harga</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>10/10/22</td>
                                    <td>Paket Seminggu</td>
                                    <td>Aksesoris</td>
                                    <td>Sepatu 
                                        <button style="border: none; background: transparent; color: #0155B6;">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                        </button>		
                                    </td>
                                    <td>Jogja</td>
                                    <td>087819944000</td>
                                    <td>100000</td>
                                    <td>vellya123</td>
                                    <td>published</td>
                                    
                                </tbody>
                            </table>
                </div>
            </div>
                            
        

    </main>
    <!--Main layout-->
        <script>
          $(document).ready(function () {
            $('#datatable').DataTable();
          });
        </script>
@endsection

@push('scripts')
{{-- dashboard js --}}

@endpush
