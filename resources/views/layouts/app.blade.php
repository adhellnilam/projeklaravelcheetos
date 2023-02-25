<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Cheetos | @yield('title')</title>

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Cheetos</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="/home" class="nav-item nav-link {{ ($title === "home") ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ ($title === "about") ? 'active' : '' }}">About</a>
                <a href="/contact" class="nav-item nav-link {{ ($title === "contact") ? 'active' : '' }}">Contact</a>
                <a href="/product" class="nav-item nav-link {{ ($title === "product") ? 'active' : '' }}">Product</a>
                <a href="/transaction" class="nav-item nav-link {{ ($title === "transaction") ? 'active' : '' }}"><i class="bi bi-cart-fill"></i></a>
            </div>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/logout" class="nav-item">Logout <i class="bi bi-box-arrow-right"></i></a>
            </li>
        </div>
    </nav>

    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="https://img.freepik.com/premium-photo/corn-sticks-bacon-flavor-cheetos-fast-food-meal-snack-table-copy-space-food_88242-16600.jpg?w=740" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Hello, And Welcome {{ Auth::user()->name }}</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">We Made With Passion</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="https://img.freepik.com/premium-photo/pizza-with-cheetos-chips-sauce-gray-background_212840-700.jpg?w=740" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Hello, And Welcome {{ Auth::user()->name }}</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">We Create With Love</h1>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

     @if ($message = Session::get('success'))
        <div class="alert alert-dark alert-dismissible fade show" role="alert" style="width: 930px; margin-left: 200px; background-color: #EAA636; color: white;">
            <i class="bi bi-check2-square"><p style="position: absolute; margin-left: 20px; margin-top: -24px;">{{ $message }}</p></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @yield('konten')

   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
   <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
   <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
   <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
   <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

   <!-- Template Javascript -->
   <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>