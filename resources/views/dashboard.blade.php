@extends('layouts.app')

@section('content')
    @if (Route::is('dashboard'))
        <div class="row mx-auto">
            {{-- header rekomendasi --}}
            <span class="dashboard-header text-center mx-auto mt-5 mb-2">Penawaran Spesial!</span>

            {{-- item rekomendasi --}}
            <div class="container-fluid">
                <div class="row justify-content-center g-0 px-4 my-5 mb-4">
                    @for ($i = 0; $i < count($products['data']); $i++)
                        @if ($products['data'][$i]['status'] == 'published' && $products['data'][$i]['is_sold'] != 'true' && $products['data'][$i]['pricing']['name'] != 'Tanpa Iklan')
                            <div class='col col-md-2 p-2'>
                                <div class='card h-100'>
                                    <div class="d-flex flex-column">
                                        <div class='d-flex justify-content-center align-items-end p-4'>
                                            <div class="card border-0">
                                                <img id="product-image" class='img-fluid card-img card-img-top' src='{{ $products['data'][$i]['images'][0]['url'] }}' onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'">
                                                <div class='card-img-overlay d-flex justify-content-center align-items-end p-0'>
                                                    <p class='card-text new-post-status px-2 py-1'>{{ $products['data'][$i]['category']['name'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='card-body pt-0'>
                                            <div class='row px-4'>
                                                <div class='col-10 me-auto px-0'>
                                                    <h5 class='card-title'>{{ $products['data'][$i]['title'] }}</h5>
                                                    <p class='card-text'>Rp. {{ $products['data'][$i]['price'] }}</p>
                                                </div>
                                                <div class='col-auto ms-auto my-auto px-0'>
                                                    <button class='btn shadow-none p-0' data-bs-toggle='modal' data-bs-target='#modalDetail'>
                                                        <img id='detail-product' src='{{ asset("images/icons/arrow-circle-right.svg") }}' alt='go'  onclick="displayDetailProduct(this)">
                                                        <ul id="product-data" class="d-none">
                                                            <li id="product-name">{{ $products['data'][$i]['title'] }}</li>
                                                            <li id="product-descriptions">{{  $products['data'][$i]['description'] }}</li>
                                                            <li id="product-price">{{  $products['data'][$i]['price'] }}</li>
                                                            <li id="product-category">{{  $products['data'][$i]['category']['name'] }}</li>
                                                            <li id="product-seller">{{  $products['data'][$i]['seller']['name'] }}</li>
                                                            <li id="product-whatsapp">{{  $products['data'][$i]['seller']['wa_number'] }}</li>
                                                            <li id="product-location">{{  $products['data'][$i]['location']['street'] . ', ' . $products['data'][$i]['location']['city']  . ', ' . $products['data'][$i]['location']['province'] . ' ' . $products['data'][$i]['location']['postal_code'] }} </li>
                                                            <li id="product-images">
                                                                @php
                                                                    for ($j=0; $j < count($products['data'][$i]['images']); $j++) {
                                                                        $images = $products['data'][$i]['images'][$j]['url'];
                                                                        if ($j == 0) {
                                                                            echo "
                                                                                <div class='carousel-item active'>
                                                                                    <img src='{$images}' class='d-block w-100'>
                                                                                </div>
                                                                            ";
                                                                        } else {
                                                                            echo "
                                                                                <div class='carousel-item'>
                                                                                    <img src='{$images}' class='d-block w-100'>
                                                                                </div>
                                                                            ";
                                                                        }
                                                                    }
                                                                @endphp
                                                            </li>
                                                        </ul>
                                                    </button>
                                                </div>
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
                                echo "<li><a class='dropdown-item' href='$categories[$i]'>$categories[$i]</a></li>";
                            }
                        @endphp
                    </ul>

                    <input id="dashboard-search-input" type="text" class="form-control p-3" aria-label="Text input with dropdown button" placeholder="Cari kebutuhanmu di sini!">
                    <span id="dashboard-search-icons" class="input-group-text pe-3" style=""><img src="{{ asset('images/icons/search.svg')}}" alt=""></span>
                </div>
            </form>

            {{-- postingan user --}}
            <div class="row row-cols-4 justify-content-center g-0 px-4 my-5">
                @for ($i = 0; $i < count($products['data']); $i++)
                    @if ($products['data'][$i]['status'] == 'published' || $products['data'][$i]['is_sold'] != 'true' )
                        <div class='col col-md-2 p-2'>
                            <div class='card h-100'>
                                <div class="d-flex flex-column">
                                    <div class='d-flex justify-content-center align-items-end p-4'>
                                        <div class="card border-0">
                                            <img id="product-image" class='img-fluid card-img card-img-top' src='{{ $products['data'][$i]['images'][0]['url'] }}' onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'">
                                            <div class='card-img-overlay d-flex justify-content-center align-items-end p-0'>
                                                <p class='card-text new-post-status px-2 py-1'>{{ $products['data'][$i]['category']['name'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='card-body pt-0'>
                                        <div class='row px-4'>
                                            <div class='col-10 me-auto px-0'>
                                                <h5 class='card-title'>{{ $products['data'][$i]['title'] }}</h5>
                                                <p class='card-text'>Rp. {{ $products['data'][$i]['price'] }}</p>
                                            </div>
                                            <div class='col-auto ms-auto my-auto px-0'>
                                                <button class='btn shadow-none p-0' data-bs-toggle='modal' data-bs-target='#modalDetail'>
                                                    <img id='detail-product' src='{{ asset("images/icons/arrow-circle-right.svg") }}' alt='go'  onclick="displayDetailProduct(this)">
                                                    <ul id="product-data" class="d-none">
                                                        <li id="product-name">{{ $products['data'][$i]['title'] }}</li>
                                                        <li id="product-descriptions">{{  $products['data'][$i]['description'] }}</li>
                                                        <li id="product-price">{{  $products['data'][$i]['price'] }}</li>
                                                        <li id="product-category">{{  $products['data'][$i]['category']['name'] }}</li>
                                                        <li id="product-seller">{{  $products['data'][$i]['seller']['name'] }}</li>
                                                        <li id="product-whatsapp">{{  $products['data'][$i]['seller']['wa_number'] }}</li>
                                                        <li id="product-location">{{  $products['data'][$i]['location']['street'] . ', ' . $products['data'][$i]['location']['city']  . ', ' . $products['data'][$i]['location']['province'] . ' ' . $products['data'][$i]['location']['postal_code'] }} </li>
                                                        <li id="product-images">
                                                            @php
                                                                for ($j=0; $j < count($products['data'][$i]['images']); $j++) {
                                                                    $images = $products['data'][$i]['images'][$j]['url'];
                                                                    if ($j == 0) {
                                                                        echo "
                                                                            <div class='carousel-item active'>
                                                                                <img src='{$images}' class='d-block w-100'>
                                                                            </div>
                                                                        ";
                                                                    } else {
                                                                        echo "
                                                                            <div class='carousel-item'>
                                                                                <img src='{$images}' class='d-block w-100'>
                                                                            </div>
                                                                        ";
                                                                    }
                                                                }
                                                            @endphp
                                                        </li>
                                                    </ul>
                                                </button>
                                            </div>
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
                                        <div id="carousel-1" class="carousel-item active">
                                            <img src="{{ asset('images/pictures/radio.png') }}" onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/pictures/skintific.png') }}" onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'" class="d-block w-100">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('images/pictures/jaket-kulit.png') }}" onerror="this.src='{{ asset('images/pictures/empty-image.png') }}'" class="d-block w-100">
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
                                        <p class="post-categories py-1 px-2"><b id="post-categories"></b></p>
                                        <p id="post-title" class="post-title"></p>
                                        <p id="post-location" class="post-location"><i class=" me-2 fas fa-location-dot"></i></p>
                                        <p id="post-cost" class="post-cost"></p>
                                        <p id="post-descriptions" class="post-descriptions"></p>
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
                                            <p id="post-seller" class="post-seller mb-0"></p>
                                            <p class="post-seller-details">Seller</p>
                                        </div>
                                    </div>
                                    <button id="call-whatsapp" type="button" class="btn btn-whatsapp py-2" onclick="redirectToWhatsappPage()"><span class="d-flex justify-content-center align-items-center"><i class="fa fa-whatsapp fa-xl me-2"></i>Hubungi Penjual</span></button>
                                    <a id="mark-as-sold" type="button" class="btn btn-sold mt-2 py-2" href="#modalTerjual" data-bs-toggle='modal' data-bs-target='#modalTerjual' role="button" onclick="window.location='{{ route('dashboard') }}'">Tandai Terjual</a>
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
                        <div class="judul pb-1" id="staticBackdropLabel" style="font-size: 2rem; font-weight:900">
                            Yakin ingin mengubah status postingan menjadi terjual?
                        </div>
                    </div>

                    {{-- modal footer --}}
                    <div class="modal-footer border-0">
                        <button id="close-modal" type="button" class="btn btn-back px-3" data-bs-dismiss="modal" aria-label="Close">Kembali</button>
                        <button type="button" class="btn btn-danger px-5" style="border-radius: 20px; font-size: 1rem;">Ya</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                // remove unnecesary margin after modal were displayed
                $('body').on('show.bs.modal', function () {
                    $('.sticky-top').css('margin-left', '-=0px');
                });

                $('body').on('hidden.bs.modal', function () {
                    $('.sticky-top').css('margin-left', 'auto');
                });
            });

            var whatsappURL = 'https://wa.me/';

            function displayDetailProduct(element) {
                // get data by using javascript DOM
                var productElement = element.nextElementSibling.getElementsByTagName('li');

                // append data to modal
                document.getElementById('post-categories').innerHTML = productElement[3].innerHTML;
                document.getElementById('post-title').innerHTML = productElement[0].innerHTML;
                document.getElementById('post-location').innerHTML = productElement[6].innerHTML;
                document.getElementById('post-cost').innerHTML = `Rp. ${productElement[2].innerHTML}`;
                document.getElementById('post-descriptions').innerHTML = productElement[1].innerHTML;

                // setting new whatsappURL
                whatsappURL = `https://wa.me/${productElement[5].innerHTML}`;
                document.getElementById('post-seller').innerHTML = productElement[4].innerHTML;
                if (checkUserState() === true) {
                    // document.getElementById('mark-as-sold').hidden = true;
                } else {
                    document.getElementById('call-whatsapp').disabled = true;
                    document.getElementById('mark-as-sold').hidden = true;
                }

                // setting image carousel
                var images = document.getElementById("product-images");
                console.log(images.childNodes);
            }

            function redirectToWhatsappPage() {
                if (checkUserState() === true) {
                    window.location = whatsappURL;
                }
            }

            function checkUserState() {
                if ({!! json_encode($state) !!} === 'guest') {
                    return false;
                } else {
                    return true;
                }
            }

        </script>
    @endif
@endsection
