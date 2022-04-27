<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!--- Style css -->
        <link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    @yield('css')
    <title>ZAKEM</title>
</head>

<body>

    {{-- <ul class="nav justify-content-center navbar-dark bg-dark mb-2">
                <li class="nav-item"><a href="" class="nav-link">ZAKEM</a>
                </li>
    </ul> --}}
    <div id="top-nav">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
            <div class="container">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span><i class="bi bi-telephone-fill">
                                    +12312324329876</i></span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto d-none d-md-block">
                    <div class="d-flex justify-content-inline">
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="bi bi-instagram"> </i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="# target="_blank"><i class="bi bi-google"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="bi bi-pinterest"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank"><i class="bi bi-youtube"></i></a>
                    </li>
                </div>
                </ul>
            </div>
        </nav>
    </div>

    <!-- START HERE -->
    <div id="main-nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <img src="{{ asset('uploads/logo.png') }}" class="img-fluid" width="50" height="50"
                        alt="">
                    <h3 class="d-inline align-middle">ZAKEM</h3>
                </a>

                {{-- button ta carte li nhato fiha les produit --}}
                <ul class="navbar-nav cartcho">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <i class="bi bi-cart3">
                                <span class="position-absolute start-25 translate-middle badge rounded-pill bg-dark"
                                    style="font-size: 12px">
                                    0
                                </span>
                            </i>
                        </a>
                    </li>
                </ul>

                <div class="offcanvas offcanvas-end " style="width: 700px" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h3 class="offcanvas-title" id="offcanvasExampleLabel">My Carte</h3>

                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <hr class="dropdown-divider mb-3" />
                        <h5 class="display-6 text-center mb-3">In Your Shopping Cart: 0
                            Items
                        </h5>
                    </div>
                    <div class="offcanvas-footer">
                        <div class="container">
                                <hr class="dropdown-divider" />
                                <div class="row mb-3">
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-outline-primary">Expand cart</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                {{-- end of button carte --}}

                <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">About us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    john joe
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">myprofile
                                    </a>
                                    <a class="dropdown-item" href="">
                                        my order
                                    </a>
                                    <a class="dropdown-item" href="#">logout
                                    </a>
                                </div>
                            </li>
                    </ul>
                </div>


            </div>
        </nav>
    </div>
    <main class="">
        @yield('content')
    </main>
    <footer id="main-footer" class="p-4">
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <hr class="dropdown-divider" />
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <span><i class="bi bi-geo-alt-fill"> address - country - Street - NO</i></span><br>
                    <span><i class="bi bi-telephone-fill"> +123123123123</i></span><br>
                    <span><i class="bi bi-send-fill"> contact@zakem.com</i></span><br>
                </div>
                  <div class="col">
                        <h4>Follow Us</h4>
                        <hr class="dropdown-divider" />
                            <a href="#"><i class="bi bi-facebook" target="_blank"> facebook</i></a><br>
                            <a href="#"><i class="bi bi-instagram" target="_blank"> instagram</i></a><br>
                            <a href="#"><i class="bi bi-google" target="_blank"> Google+</i></a><br>
                            <a href="#"><i class="bi bi-twitter" target="_blank"> Twitter</i></a><br>
                            <a href="#"><i class="bi bi-pinterest" target="_blank"> Pinterest</i></a><br>
                            <a href="#"><i class="bi bi-youtube" target="_blank"> Youtube</i></a><br>
                    </div>
                <div class="col">

                </div>
                <div class="col d-flex justify-content-end">
                    <div>
                        <img src="{{ asset('uploads/logo1.png') }}" style="width: 200px;" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <p>Copyright &copy; <span id="year"></span> ZAKEM</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    @yield('script')
</body>

</html>
