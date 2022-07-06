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
                <li class="d-block mb-2"><a href="#" id="side-menu-small">Menu</a></li>

            </ul>
            <!--end navbar-left -->
            <ul class="nav navbar-nav text-center d-inline-flex" id="brand-name">
                <li class="nav-item">
                    <h6 class="top-title">@yield('top-title')</h6>
                </li>
            </ul>
            <ul class="navbar-right p-1">
                <li class="d-block mb-2"><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span
                            class="badge">3</span></a></li>
                <li class="d-block mb-2"><a href="#" id="search">Search</a></li>
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
                    <span class="item-name">Bodywave 12” Waves Jazz Dance Records, U.S.A. 1986 vg+/ex</span>
                    <span class="remove-cart-item pointer-cursor">Remove</span>
                    <span class="item-price">€139.00</span>
                </li>

                <li class="clearfix mt-2">
                    <img class="cart-img" src="{{ asset('Assets/Images/R-15793316-1597888782-9556.jpeg.png') }}"
                        alt="item1" />
                    <span class="item-name">I Still Dream Of You 7” Dennis Planter Hot Box, U.K. 1986 vg/VG+</span>
                    <span class="remove-cart-item pointer-cursor">Remove</span>
                    <span class="item-price">€89.00</span>
                </li>
            </ul>
            <span class="total-price">Subtotal : <span id="total-amt">€228.00</span></span>
            <a href="{{ url('cart') }}" class="checkout-button">Checkout</a>
        </div>
        <!--end shopping-cart -->
    </div>
    {{-- end cart dropdown --}}
    {{-- start search-menu dropdown --}}
    <div class="container">
        <div class="search-menu" style="display: none">
            <input type="text" class="form-control" placeholder="Enter Search Terms Here">
            <a href="" class="btn btn-secondary text-white mt-2 mb-4">Submit</a>
            <h6 class="p-2">Results(3)</h6>
            <ul class="shopping-cart-items">
                <li class="clearfix">
                    <a href="javascript:void(0)" class="item-name">Te Mono Ki Te Kainga Lp - Takaski Sima - Some Record
                        Label, Japan 1986</a>
                </li>
                <li class="clearfix">
                    <a href="javascript:void(0)" class="item-name">I Still Dream Of You 7” - Dennis Planter - Hot Box
                        Llc, U.K. 1986</a>
                </li>
                <li class="clearfix">
                    <a href="javascript:void(0)" class="item-name">When She Calls 12” - Keith Snipe - Not On Label,
                        U.S.A. 1988</a>
                </li>
            </ul>
        </div>
        <!--end shopping-cart -->
    </div>
    {{-- end search-menu dropdown --}}
    {{-- start side-menu-small dropdown --}}
    <div class="container">
        <div class="side-menu-small" style="display: none">
            <h6 class="p-2">RECENT ADDS</h6>
            <ul class="shopping-cart-items p-1">
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">Boogie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">Esoteric</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">House</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">Pop Music</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="#">Tropical</a>
                </li>
                <br>
                <li class="nav-item">
                    <a class="nav-link p-0 @if(url()->current() == url('about')) active @endif" href="{{ url('about') }}">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0" href="{{ url('account') }}">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-0 @if(url()->current() == url('blog')) active @endif" href="{{ url('blog') }}">Blog</a>
                </li>
            </ul>
        </div>
        <!--end shopping-cart -->
    </div>
    {{-- end side-menu-small dropdown --}}
    <main class="mt-5">
        @yield('content')
        <div class="m-2 mt-5">
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

</body>

</html>
