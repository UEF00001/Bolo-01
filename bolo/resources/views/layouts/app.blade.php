<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('title', env('APP_NAME', 'Bolo'))</title>
</head>

<body>
    {{-- <nav class="navbar navbar-expand-md navbar-fixed-top navbar-light bg-light main-nav">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hair products</a>
                </li>
            </ul>
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">VIRTUAL BEAUTY</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">3</span></a></li>
            </ul>
        </div>
    </nav> --}}
    <nav>
        <div>
            <ul class="navbar-left p-1">
                {{-- <div class="dropdown"> --}}
                {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button> --}}

                {{-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <h6 class="dropdown-header">RECENT ADDS</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Boogie</a></li>
                        <li><a class="dropdown-item" href="#">Esoteric</a></li>
                        <li><a class="dropdown-item" href="#">House</a></li>
                        <li><a class="dropdown-item" href="#">Pop Music</a></li>
                        <li><a class="dropdown-item" href="#">Tropical</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ url('about') }}">Information</a></li>
                        <li><a class="dropdown-item" href="{{ url('account') }}">Account</a></li>
                        <li><a class="dropdown-item" href="{{ url('blog') }}">Blog</a></li>
                    </ul> --}}
                {{-- </div> --}}
                <li class="d-block mb-2"><a href="#" id="side-menu-small" class="bg-white text-dark">Menu</a></li>

            </ul>
            <!--end navbar-left -->
            <ul class="nav navbar-nav text-center d-inline-flex" id="brand-name">
                <li class="nav-item">
                    <h6 class="top-title"><span class="bg-white">@yield('top-title', 'Heaven’s Gate Records')</span></h6>
                </li>
            </ul>
            <ul class="navbar-right p-1">
                <li class="d-block"><a href="#" id="cart" class="text-dark">Cart(3)</a></li>
                <li class="d-block mb-2"><a href="#" id="search" class="text-dark">Search</a></li>
            </ul>
            <!--end navbar-right -->
        </div>
        <!--end container -->
    </nav>
    {{-- start cart dropdown --}}
    <div class="container">
        <div class="shopping-cart" style="display: none">
            <ul class="shopping-cart-items">
                <li class="clearfix">
                    <img class="cart-img" src="{{ asset('Assets/Images/R-7696672-1447303028-4579.jpeg.png') }}"
                        alt="item1" />
                    <span class="item-name">Bodywave 12”</span>
                    <span class="item-name">Waves</span>
                    <span class="item-name">Jazz Dance Records, U.S.A. 1986</span>
                    <span class="item-name">VG+/EX</span>
                    <div class="d-flex justify-content-between">
                        <span class="remove-cart-item pointer-cursor">(Remove)</span>
                        <span class="item-price">€139.00</span>
                    </div>
                </li>

                <li class="clearfix mt-2">
                    <img class="cart-img" src="{{ asset('Assets/Images/R-15793316-1597888782-9556.jpeg.png') }}"
                        alt="item1" />
                    <span class="item-name">I Still Dream Of You 7”</span>
                    <span class="item-name">Dennis Planter</span>
                    <span class="item-name">Hot Box, U.K. 1986</span>
                    <span class="item-name">VG/VG+</span>
                    <div class="d-flex justify-content-between">
                        <span class="remove-cart-item pointer-cursor">(Remove)</span>
                        <span class="item-price">€89.00</span>
                    </div>
                </li>
            </ul>
            <div class="d-flex justify-content-end pt-5">
                <span class="total-price">Subtotal : <span id="total-amt">€228.00</span></span>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ url('cart') }}" class="text-decoration-none text-dark standard-font">(Check Out)</a>
            </div>
        </div>
        <!--end shopping-cart -->
    </div>
    {{-- end cart dropdown --}}
    {{-- start search-menu dropdown --}}
    <div class="container">
        <div class="search-menu" style="display: none">
            <input type="text" class="border-0 d-block mb-1 text-dark" placeholder="Enter Search Terms Here">
            <a href="" class="standard-font text-dark text-decoration-none mt-2 mb-4">(Submit)</a>
            <h6 class="standard-font" style="padding-top: 64px">Results(3)</h6>
            <div class="row">
                <div class="search-result pointer-cursor col-6" onclick="location.href='{{ url('get-happy') }}';">
                    <img class="img-fluid" src="{{ asset('Assets/Images/R-15793316-1597888782-9556.jpeg.png') }}"
                        alt="">
                    <p class="mb-0 standard-font">Touche-Moi 12” Not 2 Bad Feat.</p>
                    <p class="standard-font">Camile</p>
                </div>
                <div class="search-result pointer-cursor col-6"
                    onclick="location.href='{{ url('when-she-calls-club-mix') }}';">
                    <img class="img-fluid" src="{{ asset('Assets/Images/R-17152054-1611868791-8576.jpeg.png') }}"
                        alt="">
                    <p class="mb-0 standard-font">When She Calls 12”</p>
                    <p class="standard-font">Keith Snipe</p>
                </div>
                <div class="search-result pointer-cursor col-6" onclick="location.href='{{ url('raw-land') }}';">
                    <img class="img-fluid" src="{{ asset('Assets/Images/R-2406404-1366293407-8559.jpeg.png') }}"
                        alt="">
                    <p class="mb-0 standard-font">Make A Show 12”</p>
                    <p class="standard-font">Daina Sutherland</p>
                </div>
                <div class="search-result pointer-cursor col-6" onclick="location.href='{{ url('raw-land') }}';">
                    <img class="img-fluid" src="{{ asset('Assets/Images/R-2406404-1366293407-8559.jpeg.png') }}"
                        alt="">
                    <p class="mb-0 standard-font">Make A Show 12”</p>
                    <p class="standard-font">Daina Sutherland</p>
                </div>
            </div>
        </div>
        <!--end shopping-cart -->
    </div>
    {{-- end search-menu dropdown --}}
    {{-- start side-menu-small dropdown --}}
    <div class="container">
        <div class="side-menu-small" style="display: none">
            <h6 class="p-2 standard-font">RECENT ADDS</h6>
            <ul class="shopping-cart-items p-1">
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0" href="#">Boogie</a>
                </li>
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0" href="#">Esoteric</a>
                </li>
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0" href="#">House</a>
                </li>
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0" href="#">Pop Music</a>
                </li>
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0" href="#">Tropical</a>
                </li>
                <br>
                <li class="nav-ite standard-font" id="info">
                    <a class="nav-link p-0 @if (url()->current() == url('about')) active @endif"
                        href="{{ url('about') }}">Information</a>
                </li>
                <div class="py-3">
                    <li class="nav-item about-sub-links d-none">
                        <a class="nav-link p-0"
                            href="@if (url()->current() != url('about')) {{ url('about') }}@endif#about">About</a>
                    </li>
                    <li class="nav-item about-sub-links d-none">
                        <a class="nav-link p-0"
                            href="@if (url()->current() != url('about')) {{ url('about') }}@endif#contact">Contact</a>
                    </li>
                    <li class="nav-item about-sub-links d-none">
                        <a class="nav-link p-0"
                            href="@if (url()->current() != url('about')) {{ url('about') }}@endif#shipping">Shipping</a>
                    </li>
                </div>
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0" href="{{ url('account') }}">Account</a>
                </li>
                <li class="nav-ite standard-font">
                    <a class="nav-link p-0 @if (url()->current() == url('blog')) active @endif"
                        href="{{ url('blog') }}">Blog</a>
                </li>
            </ul>
        </div>
        <!--end shopping-cart -->
    </div>
    {{-- end side-menu-small dropdown --}}
    <main class="mt-5">
        @yield('content')
        <div class="m-2 mt-5" id="footer-div">
            <footer class="d-flex flex-column flex-wrap justify-content-between">
                <p class="col-md-4 mb-0 text-muted">Instagram</p>
                <p class="col-md-4 mb-0 text-muted">Mailing List</p>
                <p class="col-md-4 mb-0 text-muted">shop@bolo-records.com</p>
            </footer>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('after-scripts')
</body>

</html>
