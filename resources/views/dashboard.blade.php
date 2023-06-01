@extends('layouts.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')
    <div class="row mx-auto">
        {{-- search bar --}}
        <div class="dashboard-search input-group mb-3 px-5">
            <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">Semua Kategori</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Semua Kategori</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Elektronik</a></li>
                <li><a class="dropdown-item" href="#">Hobi</a></li>
                <li><a class="dropdown-item" href="#">Pakaian</a></li>
                <li><a class="dropdown-item" href="#">Rumah Tangga</a></li>
                <li><a class="dropdown-item" href="#">Kendaraan</a></li>
                <li><a class="dropdown-item" href="#">Kecantikan</a></li>
                <li><a class="dropdown-item" href="#">Lain-lain</a></li>                  
            </ul>
            <input type="text" class="form-control p-3" aria-label="Text input with dropdown button" placeholder="Cari kebutuhanmu di sini!">
            <span class="input-group-text"><button class="border-0"><i class="fas fa-search"></i></button></span> 
            {{-- <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari kebutuhanmu di sini!">
                    <span class="input-group-text"><button class="border-0"><i class="fas fa-search"></i></button></span> 
                </div>
            </form> --}}
        </div>


        {{-- header rekomendasi --}}
        <span class="display-4 dashboard-header text-center mx-auto mb-4">Penawaran Spesial!</span>

        {{-- item rekomendasi --}}
        <div class="row justify-content-center mb-4">
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        {{-- header rekomendasi --}}
        <span class="display-4 dashboard-header-rekomendasi text-center mx-auto mb-4">Temukan Pilihanmu!</span>

        {{-- texts rekomendasi --}}
        <div class="row justify-content-center">    
            <div class="col">
                <ul class="list-group list-group-horizontal d-flex justify-content-center">
                    <li class="list-group-item"><a href="">Semua Kategori</a></li>
                    <li class="list-group-item"><a href="">Elektronik & Gadget</a></li>
                    <li class="list-group-item"><a href="">Hobi & Olahraga</a></li>
                    <li class="list-group-item"><a href="">Pakaian & Aksesoris</a></li>
                </ul>
            </div> 
        </div>
        <div class="row justify-content-center">    
            <div class="col">
                <ul class="list-group list-group-horizontal d-flex justify-content-center">
                    <li class="list-group-item"><a href="">Rumah Tangga</a></li>
                    <li class="list-group-item"><a href="">Kecantikan</a></li>
                    <li class="list-group-item"><a href="">Kendaraan</a></li>
                    <li class="list-group-item"><a href="">Dan Lain Lain</a></li>
                </ul>
            </div> 
        </div>

        {{-- postingan user --}}
        <div class="row justify-content-center g-0 px-4 mb-5">
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0" data-bs-toggle="modal" data-bs-target="#modalDetail">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="col-2 p-2">
                <div class="card">
                    <div class="d-flex justify-content-center align-items-end p-4">
                        <div class="post-status py-1 px-3"><p class="mb-0">ELEKTRONIK</p></div>
                        <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3">
                    </div>
                    <div class="card-body pt-0">
                        <div class="row px-4">
                            <div class="col-9 px-0">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end px-0">
                                <button class="btn shadow-none p-0">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>

    {{-- popup detail  --}}
    <div class="modal custom fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius:40px; padding:20px">
                <div class="modal-header border-0">
                    <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                    <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size:14pt;">
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner"  style="border-radius:10px; outline: 5px solid rgba(146, 146, 146, 0.407); outline-offset: 15px;">
                                  <div class="carousel-item active">
                                    <img src="{{ asset('images/pictures/Radio.png') }}" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{ asset('images/pictures/Skintific.png') }}" class="d-block w-100" alt="...">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="{{ asset('images/pictures/Jaket Kulit.png') }}" class="d-block w-100" alt="...">
                                  </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                        <div class="col">
                            <p class="kategori py-1 px-2" style="border: 1px solid rgba(0, 0, 0, 1);
                            border-radius: 5px; font-family: 'Montserrat'; font-style: normal; font-weight: 600; font-size: 14px; line-height: 17px; color: #0C0C0C;">
                                ELEKTRONIK
                            </p>
                            <p class="judul" style="font-style: normal; font-weight: 600; font-size: 36px; line-height: 100%; color: #000000;">
                                Jaket Kulit
                            </p>
                            <p class="lokasi" style="font-family: 'Montserrat'; font-weight: 500; font-size: 20px; line-height: 24px; color: #292D32;">
                                <i class="fas fa-location-dot"></i>
                                Sendowo, Kota Yogyakarta
                            </p>
                            <p class="harga" style="font-weight: 700;font-size: 32px; line-height: 39px; color: #0155B6;">
                                Rp 180.000
                            </p>
                            <p class="deskripsi" style="font-weight: 500; font-size: 20px; line-height: 150%; color: #292D32;">
                                Kondisi masih bagus, pembelian Februari 2022. H&M. Terdapat 2 saku, belt lepas pasang. Bahan kulit asli.
                            </p>
                        </div>
                        <div class="col">
                            <div class="profil">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('images/pictures/avatar5.png') }}" alt="Avatar" class="avatar" style="  vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;">
                                    </div>
                                    <div class="col" style="font-weight: 600; font-size: 20px; line-height: 24px; color: #292D32;">
                                        Vellya Riona
                                        <div class="status" style="font-weight: 500; font-size: 16px; line-height: 20px; color: #292D32;">
                                            Penjual
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary mx-2" style="background-color: #0155B6; border-radius:20px; min-width:90%; font-size:14pt">
                                        <i class="fa fa-whatsapp"></i>
                                        Hubungi Penjual
                                    </button>
                                    <button type="button" class="btn px-3" data-bs-target="#modalTerjual" data-bs-toggle="modal" data-bs-dismiss="modal" style="color: rgba(250, 65, 65, 1); font-weight:900; background-color: transparant; border-radius:20px;font-size:12pt; border: 2px solid rgba(250, 65, 65, 1)">
                                        Tandai Terjual
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="modal custom fade" id="modalTerjual" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTerjual" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius:40px; padding:20px">
                <div class="modal-header border-0">
                    <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                    <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="font-size:14pt;">
                    <div class="judul pb-1" id="staticBackdropLabel" style="font-size:24pt; color: #0155B6; font-weight:900">
                        Yakin ingin mengubah status 
                        postingan menjadi terjual?
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn px-3" data-bs-dismiss="modal" style="color: #0155B6; font-weight:900; background-color: transparant; border-radius:20px;font-size:12pt; border: 2px solid rgba(1, 85, 182, 1)">Kembali</button>
                <button type="button" class="btn btn-primary px-3" style="background-color: #0155B6; border-radius:20px;font-size:12pt">Ya</button>
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
