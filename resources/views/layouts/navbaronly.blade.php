{{-- navbar --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top px-3 pt-3 mb-3">
    <div class="container-fluid">
        {{-- navbar brand --}}
        <a class="navbar-brand" href="#"><img src="{{ asset('/images/icons/thrifttopia_icons.svg ') }}" alt="thriftopia" width="200" height="40"></a>

        {{-- navbar toggler --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- navbar collapse --}}
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mb-2 mb-md-0 align-items-center">
                {{-- navbar items --}}
                @if (session()->has('auth'))
                    <li class="nav-item"><img src="{{ asset('images/pictures/default-profile.png') }}" class="img-fluid" style="width: 80%" alt="Avatar" class="avatar"></li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link" style="cursor: pointer; border: none; background-color: transparent;">{{ session()->get('auth')['email'] }}</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" onclick="window.location='{{ route('dashboard') }}'">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" data-bs-target="#modal-login" data-bs-toggle="modal" data-bs-dismiss="modal" style="cursor: pointer;">Masuk</a> --}}
                        <a class="nav-link" onclick="window.location='{{ route('login') }}'" style="cursor: pointer;">Masuk</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>

{{-- navbar background --}}
{{-- <div class="navbar-background"></div>

<div class="row jumbotron mx-5">
    <div class="col px-md-5 py-5" style="z-index: 999 !important; position: relative !important;">
        <div class="row">
            <div class="col-12">
                <h1 class="banner-header">
                    Jual barang bekas anti ribet <br> hanya di
                    <img class="img-fluid" style="width: 30vw !important;" src="{{ asset('images/icons/thriftopia-blue.svg') }}">
                </h1>
            </div>
            <div class="col-12">
                <button class="btn btn-outline-dark banner-button mt-2 px-4" href="#" role="button">Coba Sekarang!</button>
            </div>
        </div>
    </div>
    <div class="col-auto ms-auto d-none d-lg-block p-0">
        <img src="{{ asset('images/pictures/banner-image-cut.png') }}" class="img-fluid customimage" style="overflow: visible;" alt="thriftopia">
    </div>
</div> --}}

