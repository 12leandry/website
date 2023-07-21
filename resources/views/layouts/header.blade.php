<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TestSarl </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dash/assets/img/test1689447240.ico') }}">
    <link href="{{ asset('assets') }}/img/test.png" rel="icons">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navbar">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets') }}/img/testlogo.svg" alt="">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            {{-- Navbar start --}}
              <nav id="navbar" class="navbar">
                  <ul>
                      <li><a href="{{ route('home') }}" class="{{ $activeLink == 'home' ? 'active' : ' ' }}">Accueil</a>
                      </li>
                      <li><a href="{{ route('A-Propos') }}" class="{{ $activeLink == 'A-Propos' ? 'active' : ' ' }}">A
                              Propos</a></li>
                      <li><a href="{{ route('Services') }}"
                              class="{{ $activeLink == 'Services' ? 'active' : ' ' }}">Services</a></li>
                      <li><a href="{{ route('Projets') }}"
                              class="{{ $activeLink == 'Projets' ? 'active' : ' ' }}">Projets</a></li>

                      <li><a href="{{ route('Contact') }}"
                              class="{{ $activeLink == 'Contact' ? 'active' : ' ' }}">Contact</a></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li><img src="{{ asset('assets') }}/img/flags/cameroon.svg"
                              style="width: 50px; height: 25px; padding-left: 20px  " alt=""> </li>
                  </ul>
              </nav>
            <!-- .navbar end -->
        </div>
    </header><!-- End Header -->


    @yield('content')

</body>

</html>
