<!doctype html>
<html class="no-js" lang="fr">

    <head>
        <title>Business Help Conulting - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" >
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}" >
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}" >
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}" >
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- slider revolution CSS files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('r/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('r/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('r/css/navigation.css') }}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
        @livewireStyles
        @stack('css')

    </head>

    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
        <div class="box-layout">
            <!-- start header -->
            <header>
                <!-- start navigation -->
                <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
                    <div class="container-fluid">
                        <div class="col-auto col-xl-3 col-lg-2 me-lg-0 me-auto">
                            <a class="navbar-brand_" href="demo-corporate.html" style="padding: 11px 0 !important;">
                                <img src="{{ asset('images/1732619577887-file.png') }}" data-at2x="{{ asset('images/1732619577887-file.png') }}" alt="" class="default-logo" style="width: 220px !important;">
                                {{-- <img src="{{ asset('images/1732619577887-file.png') }}" data-at2x="{{ asset('images/demo-corporate-logo-black@2x.png') }}" alt="" class="alt-logo">
                                <img src="{{ asset('images/1732619577887-file.png') }}" data-at2x="{{ asset('images/demo-corporate-logo-black@2x.png') }}" alt="" class="mobile-logo"> --}}
                            </a>
                        </div>
                        <div class="col-auto col-xl-6 col-lg-8 menu-order position-static">
                            <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                                <span class="navbar-toggler-line"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item"><a href="{{ route('accueil') }}" class="nav-link">Accueil</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link">A propos</a></li>
                                    <li class="nav-item dropdown dropdown-with-icon-style02">
                                        <a href="#" class="nav-link">Services</a>
                                        <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a href=""><i class="line-icon-Medal-2"></i>Business planning</a></li>
                                            <li><a href=""><i class="line-icon-Archery-2"></i>Market research</a></li>
                                            <li><a href=""><i class="line-icon-Financial"></i>Business consulting</a></li>
                                            <li><a href=""><i class="line-icon-Money-Bag"></i>Audience analysis</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="nav-item"><a href="demo-corporate-customer-stories.html" class="nav-link">Testimonials</a></li>
                                    <li class="nav-item"><a href="demo-corporate-pricing.html" class="nav-link">Pricing</a></li>-->

                                    <li class="nav-item"><a href="{{ route('blogs.index') }}" class="nav-link">Blog</a></li>
                                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0">
                            <div class="col-auto  text-end md-pe-0">
                                <div class="header-icon">
                                    <div class="header-search-icon icon">
                                        <a href="#" class="search-form-icon header-search-form"><i class="feather icon-feather-search"></i></a>
                                        <!-- start search input -->
                                        <div class="search-form-wrapper">
                                            <button title="Close" type="button" class="search-close">×</button>
                                            <form id="search-form" role="search" method="get" class="search-form text-left" action="search-result.html">
                                                <div class="search-form-box">
                                                    <h2 class="text-dark-gray text-center fw-600 mb-4 ls-minus-1px">What are you looking for?</h2>
                                                    <input class="search-input" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                                    <button type="submit" class="search-button">
                                                        <i class="feather icon-feather-search" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end search input -->
                                    </div>
                                    <div class="header-button ms-20px d-none d-xl-inline-block">
                                        <a href="" class="btn btn-rounded btn-transparent-light-gray border-1 btn-medium btn-switch-text text-transform-none">
                                            <span>
                                                <span class="btn-double-text fw-600" data-text="Free consultation">Consultation gratuite</span>
                                                <span><i class="fa-regular fa-envelope"></i></span>
                                            </span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-auto  text-end md-pe-0">
                                <div class="header-icon">
                                    <div class="header-search-icon icon">
                                        <a href="{{ route('admin') }}" class=""   data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-html="true" title="<span class=tooltip-title>Connexion (Administrateur)</span>"><span>
                                            <span class="" ><i class="fa fa-sign-in"></i></span>
                                        </span></a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </nav>
                <!-- end navigation -->
            </header>
            <!-- end header -->
            <div>
                @yield('content') <!-- Contenu spécifique à chaque page -->
            </div>

            <!-- start footer -->
            <footer class="p-0 fs-16 border-top border-color-extra-medium-gray">
                <div class="container">
                    <div class="row justify-content-center pt-6 sm-pt-40px">
                        <!-- start footer column -->
                        <div class="col-6 col-xl-3 col-lg-12 col-sm-6 last-paragraph-no-margin text-xl-start text-lg-center order-sm-1 lg-mb-50px sm-mb-30px">
                            <a href="demo-corporate.html" class="footer-log mb-15px d-inline-block"><img src="{{ asset('images/1732619577887-file.png') }}" data-at2x="{{ asset('images/demo-corporate-logo-black@2x.png') }}" alt=""></a>
                            <p class="lh-30 w-90 xl-w-100 mx-lg-auto mx-xl-0">Ensemble, passons de l’idée à une entreprise innovante pour un réel impact pour nous et nos communautés.</p>
                            <div class="elements-social social-icon-style-02 mt-20px xs-mt-15px">
                                <ul class="medium-icon dark">
                                    <li class="my-0"><a class="facebook" href="https://www.facebook.com/profile.php?id=61553827778735&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="my-0"><a class="youtube" href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li class="my-0"><a class="tiktok" href="https://www.tiktok.com/@business.help.consulting?_t=8sSL7ZcBMFz&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                    <li class="my-0"><a class="linkedin" href="https://www.linkedin.com/company/business-help-consulting" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>

                            </div>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-6 col-xl-2 col-lg-3 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                            <span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Liens</span>
                            <ul>
                                <li><a href="">Qui sommes-nous</a></li>
                                <li><a href="">Nos services</a><div class="bg-dark-gray fw-600 text-white lh-22 text-uppercase border-radius-30px ps-10px pe-10px fs-10 ms-10px d-inline-block align-middle">Hot</div></li>
                                <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-6 col-xl-2 col-lg-3 col-sm-4 xs-mb-30px order-sm-4 order-lg-3">
                            <span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Services</span>
                            <ul>
                                <li><a href="">Service d’Appui</a></li>
                                <li><a href="">Location d’espaces</a></li>
                                <li><a href="">Pré incubateur / Incubateur</a></li>
                                <li><a href="">Accélérateur</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->

                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-xl-3 col-lg-3 col-sm-6 md-mb-50px sm-mb-30px xs-mb-0 order-sm-2 order-lg-5">
                            <span class="fs-17 fw-600 d-block text-dark-gray mb-5px">Newsletter</span>
                            <p class="lh-30 w-95 sm-w-100 mb-15px">Abonnez-vous à notre newsletter pour obtenir les dernières nouvelles et mises à jour!</p>
                            <div class="d-inline-block w-100 newsletter-style-02 position-relative">
                                <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative">
                                    <input class="border-color-extra-medium-gray bg-transparent border-radius-4px w-100 form-control input-small pe-50px required" type="email" name="email" placeholder="Veuillez entrer votre adresse e-mail" />
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn pe-20px submit lh-16" aria-label="submit"><i class="feather icon-feather-mail icon-small text-dark-gray"></i></button>
                                    <div class="form-results border-radius-4px pt-5px pb-5px ps-15px pe-15px fs-14 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                                </form>
                            </div>
                        </div>
                        <!-- end footer column -->
                    </div>
                    <div class="row justify-content-center align-items-center pt-2">
                        <!-- start divider -->
                        <div class="col-12">
                            <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                        </div>
                        <!-- end divider -->
                        <!-- start copyright -->
                        <div class="col-lg-5 pt-35px pb-35px md-pt-0 order-2 order-lg-1 text-center text-lg-start last-paragraph-no-margin"><p>&copy; Copyright © 2024 <a href="" target="_blank" class="text-dark-gray fw-600 text-decoration-line-bottom">Business Help Conulting</a></p></div>
                        <!-- end copyright -->
                        <!-- start footer menu -->
                        <div class="col-lg-7 pt-35px pb-35px md-pt-25px md-pb-5px order-1 order-lg-2 text-center text-lg-end">
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
        </div>
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>

        @stack('scripts') <!-- Définir une stack pour les scripts -->

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        @livewireScripts
    </body>

</html>
