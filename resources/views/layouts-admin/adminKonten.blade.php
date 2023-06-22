@extends('layouts-admin.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')
<!--Main layout-->
<main style="margin-top: 58px;">
    <div class="row mx-3 pt-4 px-8">
        <!-- <div class="col"> -->
            <div class="row ringkasan">
                <div class="judul">Konten</div>
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
                                    <button style="border: none; background: transparent; color: #0155B6;" data-bs-toggle="modal" data-bs-target="#modalDetail">
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
                                        <p class="post-seller mb-0">Default seller</p>
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
