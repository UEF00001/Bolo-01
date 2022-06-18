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
        <div class="container-fluid">
            <ul class="navbar-left">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
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
                    </ul>
                </div>
            </ul>
            <!--end navbar-left -->
            <ul class="nav navbar-nav text-center d-inline-flex" id="brand-name">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">BOLO RECORDS</a></li>
            </ul>
            <ul class="navbar-right">
                <li class="d-block mb-2"><a href="{{ url('cart') }}" id="cart"><i class="fa fa-shopping-cart"></i>
                        Cart <span class="badge">3</span></a></li>
                <li style="cursor: pointer" id="search">
                    <input type="text" id="search-form" placeholder="Search" class="d-inline-block form-control w-auto">
                </li>
            </ul>
            <!--end navbar-right -->
        </div>
        <!--end container -->
    </nav>
    {{-- <div class="container">
        <div class="shopping-cart" style="display: none">
            <div class="shopping-cart-header">
                <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
                <div class="shopping-cart-total">
                    <span class="lighter-text">Total:</span>
                    <span class="main-color-text">$2,229.97</span>
                </div>
            </div>
            <!--end shopping-cart-header -->

            <ul class="shopping-cart-items">
                <li class="clearfix">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item1.jpg" alt="item1" />
                    <span class="item-name">Sony DSC-RX100M III</span>
                    <span class="item-price">$849.99</span>
                    <span class="item-quantity">Quantity: 01</span>
                </li>

                <li class="clearfix">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item2.jpg" alt="item1" />
                    <span class="item-name">KS Automatic Mechanic...</span>
                    <span class="item-price">$1,249.99</span>
                    <span class="item-quantity">Quantity: 01</span>
                </li>

                <li class="clearfix">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/cart-item3.jpg" alt="item1" />
                    <span class="item-name">Kindle, 6" Glare-Free To...</span>
                    <span class="item-price">$129.99</span>
                    <span class="item-quantity">Quantity: 01</span>
                </li>
            </ul>

            <a href="#" class="button">Checkout</a>
        </div>
        <!--end shopping-cart -->
    </div> --}}
    <!--end container -->
    <main class="container-fluid mt-5">
        @yield('content')
        <div class="mx-5 mt-5">
            <footer class="d-flex flex-column flex-wrap justify-content-between my-4 py-3">
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
