<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <title>Business Help Conulting - Admin - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <link rel="apple-touch-icon"href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72"href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114"href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
        @livewireStyles
        @stack('css')

    </head>
    <body data-mobile-nav-style="classic" class="custom-cursor">
        <!-- start cursor -->
        <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
        </div>
        <!-- end cursor -->
        <!-- start header -->
        <header class="header-with-topbar">
            <!-- start header top bar -->
            <div class="header-top-bar top-bar-dark bg-very-light-gray">
                <div class="container-fluid">
                    <div class="row h-45px xs-h-auto align-items-center m-0 xs-pt-5px xs-pb-5px">
                        <div class="col-lg-6 col-md-7 text-center text-md-start xs-px-0">
                            <div class="fs-15 text-dark-gray fw-500">Our accounting experts waiting for you! <a href="demo-accounting-contact.html" class="text-dark-gray text-decoration-line-bottom fw-600">Contact now</a></div>
                        </div>
                        <div class="col-lg-6 col-md-5 text-end d-none d-md-flex">
                            <div class="widget fs-15 fw-500 me-35px lg-me-25px md-me-0 text-dark-gray"><a href="tel:02228899900"><i class="feather icon-feather-phone-call"></i>0222 8899900</a></div>
                            <div class="widget fs-15 fw-500 text-dark-gray d-none d-lg-inline-block"><i class="feather icon-feather-map-pin"></i>Broadway, 24th Floor, San Francisco</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header top bar -->
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white responsive-sticky">
                <div class="container-fluid">
                    <div class="col-auto col-lg-2 me-lg-0 me-auto">
                        <a class="navbar-brand" href="demo-accounting.html">
                            <img src="{{ asset('images/demo-corporate-logo-black.png') }}" data-at2x="{{ asset('images/demo-accounting-logo-black@2x.png') }}" alt="" class="default-logo">
                            <img src="{{ asset('images/demo-corporate-logo-black.png') }}" data-at2x="{{ asset('images/demo-accounting-logo-black@2x.png') }}" alt="" class="alt-logo">
                            <img src="{{ asset('images/demo-corporate-logo-black.png') }}" data-at2x="{{ asset('images/demo-accounting-logo-black@2x.png') }}" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order position-static">
                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">

                        </div>
                    </div>
                    <div class="col-auto col-lg-2 text-end d-none d-sm-flex">
                        <div class="header-icon">
                            <div class="header-button">
                                <a href="{{ route('accueil') }}" class="btn btn-small btn-rounded btn-base-color btn-box-shadow">Sortir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url(https://via.placeholder.com/1920x500)">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Investment consulting</h1>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Admin Dashboard</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="bg-very-light-gray border-radius-6px p-45px lg-p-25px mb-25px">
                            <span class="fs-20 ls-minus-05px alt-font text-dark-gray fw-600 mb-20px d-inline-block">Accounting services</span>
                            <ul class="p-0 m-0 list-style-02">
                                <li class="pb-10px mb-10px border-bottom border-color-transparent-dark text-dark-gray" ><a href="{{ route('admin.articles.create')}}">Création d'article</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                                <li class="pb-10px mb-10px border-bottom border-color-transparent-dark text-dark-gray"><a href="{{ route('admin.articles.index')}}" class="text-dark-gray text-dark-gray-hover">Les articles</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                                <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-accounting-services-details.html">Online consulting</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                                <li class="pb-10px mb-10px border-bottom border-color-transparent-dark"><a href="demo-accounting-services-details.html">Investment consulting</a><i class="feather icon-feather-arrow-right ms-auto"></i></li>
                                <li><a href="demo-accounting-services-details.html">Banking and financing</a><i class="feather icon-feather-arrow-right lh-32 ms-auto"></i></li>
                            </ul>
                        </div>
                        <div class="bg-dark-gray border-radius-6px ps-35px pb-25px pt-25px lg-ps-25px mb-25px">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="feature-box-icon feature-box-icon-rounded w-65px h-65px me-20px lg-me-15px rounded-circle bg-yellow rounded-box">
                                    <i class="bi bi-telephone-outbound icon-extra-medium text-white"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="fs-19 lh-22 mb-5px d-block text-white opacity-6 fw-300">Customer care?</span>
                                    <a href="tel:12345678910" class="text-white fs-20 fw-500 lh-22">+1 234 567 8910</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 order-1 order-lg-2 md-mb-50px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        @yield('content') <!-- Contenu spécifique à chaque page -->


                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="footer-dark bg-dark-gray pt-10px pb-10px sm-pt-35px sm-pb-35px lg-pb-35px">

            <div class="container">
                <div class="row  fs-17 fw-300 mt-2  md-mt-10px md-mb-10px xs-mt-35px xs-mb-35px">
                    <!-- start footer column -->
                    <div class="col-6 col-lg-4 order-sm-1 md-mb-40px xs-mb-30px last-paragraph-no-margin">
                        <a href="demo-accounting.html" class="footer-logo mb-15px d-inline-block"><img src="{{ asset('images/demo-accounting-logo-white.png') }}" data-at2x="images/demo-accounting-logo-white@2x.png') }}" alt=""></a>
                        <div class="elements-social social-icon-style-02 mt-20px lg-mt-20px">
                            <ul class="small-icon light">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->


                    <!-- start footer column -->
                    <div class="col-6 col-lg-2  col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                        <span class="fs-18 fw-400 d-block text-white mb-5px">Get in touch</span>
                        <p class="mb-5px">Customer care?</p>
                        <a href="tel:12345678910" class="text-white lh-16 d-block">+1 234 567 8910</a>
                    </div>
                    <!-- end footer column -->

                    <div class="col-6 col-lg-2 offset-lg-2 col-sm-4 xs-mb-30px order-sm-5 order-lg-4">
                    </div>

                </div>
                <div class="row align-items-center fs-16 fw-300">
                    <!-- start copyright -->
                    <div class="col-md-4 last-paragraph-no-margin order-2 order-md-1 text-center text-md-start"><p>&COPY; Copyright 2024 <a href="index.html" target="_blank" class="text-decoration-line-bottom text-white">Crafto</a></p></div>
                    <!-- end copyright -->
                    <!-- start footer menu -->
                    <div class="col-md-8 text-md-end order-1 order-md-2 text-center text-md-end sm-mb-5px">
                        <ul class="footer-navbar sm-lh-normal">
                            <li><a href="#" class="nav-link">Privacy policy</a></li>
                            <li><a href="#" class="nav-link">Terms and conditions</a></li>
                            <li><a href="#" class="nav-link">Copyright</a></li>
                        </ul>
                    </div>
                    <!-- end footer menu -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
         <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
          <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
          </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>

        @stack('scripts') <!-- Définir une stack pour les scripts -->

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        @livewireScripts
    </body>
</html>
