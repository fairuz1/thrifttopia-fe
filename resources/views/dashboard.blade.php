@extends('layouts.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')
    <div class="row mx-auto">

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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title font-weight-bold"><b>Radio 1990</b></h5>
                                <p class="card-text">Rp 50.000</p>
                            </div>
                            <div class="col-2">
                                <button class="btn">
                                    <img src="{{ asset('images/icons/arrow-circle-right.svg') }}" alt="go">
                                </button> 
                            </div>
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
