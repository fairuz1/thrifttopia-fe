@extends('layouts.app')

@push('styles')
{{-- dashboard css --}}

@endpush

@section('content')
    <section id="penawaran" style="margin-top: 15%">
        <div class="row mx-auto">
          <h4 class="display-4 text-center mx-auto" style="font-family: Italiana;">Penawaran Spesial</h4>
          <div class="container text-center my-3 mx-auto">
            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item active">
                          <div class="row">
                            <div class="col item">
                              <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/pictures/radio.png') }}" class="card-img-top pt-3" alt="radio">
                                <div class="card-body">
                                  <h5 class="card-title">Radio 1990</h5>
                                  <p class="card-text">Rp 50.000</p>
                                    <button type="submit">
                                    <img src="img/arrow-circle-right.svg" alt="go">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="col item">
                              <div class="card" style="width: 18rem;">
                                <img src="img/Sepatu Olahraga.png" class="card-img-top  p-3" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Sepatu Olahraga</h5>
                                  <p class="card-text">Rp 90.000</p>
                                  <button type="submit">
                                    <img src="img/arrow-circle-right.svg" alt="go">
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="col item">
                              <div class="card" style="width: 18rem;">
                                <img src="img/Skintific.png" class="card-img-top  p-3" alt="skintific">
                                <div class="card-body">
                                  <h5 class="card-title">Skintific</h5>
                                  <p class="card-text">Rp 50.000</p>
                                  <button type="submit">
                                    <img src="img/arrow-circle-right.svg" alt="go">
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>      
                       </div>
                        <div class="carousel-item">
                          <div class="col item">
                            <div class="card" style="width: 18rem;">
                              <img src="img/Sepatu Olahraga.png" class="card-img-top  p-3" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Sepatu Olahraga</h5>
                                <p class="card-text">Rp 90.000</p>
                                <button type="submit">
                                  <img src="img/arrow-circle-right.svg" alt="go">
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="col item">
                            <div class="card" style="width: 18rem;">
                              <img src="img/Skintific.png" class="card-img-top  p-3" alt="skintific">
                              <div class="card-body">
                                <h5 class="card-title">Skintific</h5>
                                <p class="card-text">Rp 50.000</p>
                                <button type="submit">
                                  <img src="img/arrow-circle-right.svg" alt="go">
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        </div>
      </section>


      <section id="temukan">
        <div class="row mx-auto">
          <h4 class="display-4 text-center mx-auto" style="font-family: Italiana;">Temukan Pilihanmu</h4>

            <div class="row justify-content-center">     
              <div class="col-2 text-center">
                <a href="#">Rumah Tangga</a>
              </div>
              <div class="col-2 text-center">
                <a href="#">Kendaraan</a>
              </div>
              <div class="col-2 text-center">
                <a href="#">Kecantikan</a>
              </div>
              <div class="col-2 text-center">
                <a href="#">Lain-lain</a>
              </div>
            </div>
  
      
            <div class="input-group mb-3 px-4">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Semua Kategori</button>
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
                <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari kebutuhanmu di sini!">
                <span class="input-group-text"><button><i class="fas fa-search"></i></button></span> 
              </div>

  
          <!-- quick search button  -->
          <div class="quicksearch row mx-auto align-items-center">
              <button type="col button" class="btn btn-labeled btn-primary">
              <span class="btn-label"><i class="fa fa-search"></i></span>sepatu sekolah
              </button>
  
              <button type="col button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="fa fa-search"></i></span>meja rias
              </button>
  
              <button type="col button" class="btn btn-labeled btn-primary">
                <span class="btn-label"><i class="fa fa-search"></i></span>gitar akustik
              </button>
          </div>
            <div class="row  px-3">
              <div class="col item">
                <div class="card" style="width: 18rem;">
                  <div class="gambar p-4 justify-content-center">
                    <div class="text font-weight-bold py-1 px-3" style="position: absolute; z-index: 999; background-color:#FED74C; font-weight: bold; border-radius: 0 100px 100px 0; padding-left: 5dp;">
                      ELEKTRONIK
                    </div>
                    <img src="{{ asset('images/pictures/empty-image.png') }}" class="card-img-top pt-3" alt="radio">
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                      <h5 class="card-title font-weight-bold">Radio 1990</h5>
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
              <div class="col item">
                <div class="card" style="width: 18rem;">
                  <img src="img/Jaket Kulit.png" class="card-img-top p-3" alt="Jaket Kulit">
                  <div class="card-body">
                    <h5 class="card-title">Jaket Kulit</h5>
                    <p class="card-text">Rp 180.000</p>
                    <button type="submit">
                      <img src="img/arrow-circle-right.svg" alt="go">
                    </button>
                  </div>
                </div>
              </div>
              <div class="col item">
                <div class="card" style="width: 18rem;">
                  <img src="img/Skintific.png" class="card-img-top p-3" alt="skintific">
                  <div class="card-body">
                    <h5 class="card-title">Skintific</h5>
                    <p class="card-text">Rp 50.000</p>
                    <button type="submit">
                      <img src="img/arrow-circle-right.svg" alt="go">
                    </button>
                  </div>
                </div>
              </div>
              <div class="col item">
                <div class="card" style="width: 18rem;">
                  <img src="img/Sepatu Olahraga.png" class="card-img-top p-3" alt="Sepatu">
                  <div class="card-body">
                    <h5 class="card-title">Sepatu Olahraga</h5>
                    <p class="card-text">Rp 90.000</p>
                    <button type="submit">
                      <img src="img/arrow-circle-right.svg" alt="go">
                    </button>
                  </div>
                </div>
              </div>
              </div>
            </div>
      </section>




@endsection

@push('scripts')
{{-- dashboard js --}}

@endpush
