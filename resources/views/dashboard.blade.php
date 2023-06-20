@extends('layouts.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')
    <div class="row mx-auto">
        {{-- header rekomendasi --}}
        <span class="dashboard-header text-center mx-auto mt-5 mb-4">Penawaran Spesial!</span>

        {{-- item rekomendasi --}}
        <div class="container-fluid">
            <div class="row justify-content-center mb-4">
                @for ($i = 0; $i < 3; $i++)
                    @if ($products['data'][$i]['status'] == 'published' || $products['data'][$i]['is_sold'] != 'true' )
                        <div class='col col-md-2 p-2'>
                            <div class='card'>
                                <div class='d-flex justify-content-center align-items-end p-4'>
                                    <span class='post-status py-1 px-3'><p class='mb-0'>ELEKTRONIK</p></span>
                                    <img class='img-fluid card-img-top pt-3' src='{{ $products['data'][$i]['images'][0]['url'] }}' onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'">
                                </div>
                                <div class='card-body pt-0'>
                                    <div class='row px-4'>
                                        <div class='col-auto me-auto px-0'>
                                            <h5 class='card-title'>{{ $products['data'][$i]['title'] }}</h5>
                                            <p class='card-text'>{{ $products['data'][$i]['price'] }}</p>
                                        </div>
                                        <div class='col-auto ms-auto my-auto px-0'>
                                            <button class='btn shadow-none p-0' data-bs-toggle='modal' data-bs-target='#modalDetail'>
                                                <img src='{{ asset("images/icons/arrow-circle-right.svg") }}' alt='go'>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
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

        {{-- search bar --}}
        <form action="get">
            <div class="input-group mt-5 px-5">
                <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">Semua Kategori</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semua Kategori</a></li>
                    <li><hr class="dropdown-divider"></li>
                    @php
                        $categories= ['Elektronik', 'Hobi', 'Pakaian', 'Rumah Tangga', 'Kendaraan', 'Kecantikan', 'Lain-lain'];
                        for ($i=0; $i < 7; $i++) {
                            echo "<li><a class='dropdown-item' href='{{ $categories[$i] }}'> {{ $categories[$i] }} </a></li>";
                        }
                    @endphp
                </ul>

                <input id="dashboard-search-input" type="text" class="form-control p-3" aria-label="Text input with dropdown button" placeholder="Cari kebutuhanmu di sini!">
                <span id="dashboard-search-icons" class="input-group-text pe-3" style=""><img src="{{ asset('images/icons/search.svg')}}" alt=""></span>
            </div>
        </form>

        {{-- postingan user --}}
        <div class="row justify-content-center g-0 px-4 my-5">
            @for ($i = 0; $i < count($products['data']); $i++)
            @if ($products['data'][$i]['status'] == 'published' || $products['data'][$i]['is_sold'] != 'true' )
                <div class='col col-md-2 p-2'>
                    <div class='card'>
                        <div class='d-flex justify-content-center align-items-end p-4'>
                            <span class='post-status py-1 px-3'><p class='mb-0'>ELEKTRONIK</p></span>
                            <img class='img-fluid card-img-top pt-3' src='{{ $products['data'][$i]['images'][0]['url'] }}' onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'">
                        </div>
                        <div class='card-body pt-0'>
                            <div class='row px-4'>
                                <div class='col-auto me-auto px-0'>
                                    <h5 class='card-title'>{{ $products['data'][$i]['title'] }}</h5>
                                    <p class='card-text'>{{ $products['data'][$i]['price'] }}</p>
                                </div>
                                <div class='col-auto ms-auto my-auto px-0'>
                                    <button class='btn shadow-none p-0' data-bs-toggle='modal' data-bs-target='#modalDetail'>
                                        <img src='{{ asset("images/icons/arrow-circle-right.svg") }}' alt='go'>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endfor
        </div>

        {{-- paginasi --}}
        <div class="row">
            <div class="col-auto ms-auto my-auto mb-0">
                <span class="dashboard-pagination-text">Lihat lebih banyak <span><img src='{{ asset("images/icons/arrow-right.svg") }}' alt=''></span></p>
            </div>
        </div>
    </div>

    {{-- popup detail modal --}}
    <div class="modal fade" id="modalDetail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modal-login-label" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content p-4">
                {{-- modal header --}}
                <div class="modal-header border-0">
                    <div class="col-auto me-auto">
                        <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" class="img-fluid">
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
                                <button type="button" class="btn btn-whatsapp"><i class="fa fa-whatsapp me-2"></i>Hubungi Penjual</button>
                                <a id="mark-as-sold" type="button" class="btn btn-sold mt-2" href="#modalTerjual" data-bs-toggle='modal' data-bs-target='#modalTerjual' role="button">Tandai Terjual</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- change to sold modal --}}
    <div class="modal fade" id="modalTerjual" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTerjual" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p-4">
                {{-- modal header --}}
                <div class="modal-header border-0">
                    <img src="{{ asset('images/icons/thriftopia-blue.svg') }}" style="max-width: 30%">
                    <button type="button" class="btn-close shadow-none mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- modal body --}}
                <div class="modal-body border-0" style="font-size:14pt;">
                    <div class="judul pb-1" id="staticBackdropLabel" style="font-size:24pt; color: #0155B6; font-weight:900">
                        Yakin ingin mengubah status postingan menjadi terjual?
                    </div>
                </div>

                {{-- modal footer --}}
                <div class="modal-footer border-0">
                    <button id="close-modal" type="button" class="btn btn-back px-3" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                    <button type="button" class="btn btn-primary px-3" style="background-color: #0155B6; border-radius:20px; font-size: 1rem;">Ya</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $('body').on('show.bs.modal', function () {
            $('.sticky-top').css('margin-left', '-=0px');
        });

        $('body').on('hidden.bs.modal', function () {
            $('.sticky-top').css('margin-left', 'auto');
        });

    </script>

@endsection
