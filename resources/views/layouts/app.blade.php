<!doctype html>
<html class="no-js" lang="fr">

    <head>
        <title>Business Help Consulting - @yield('title')</title>
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
        <link rel="stylesheet" href="{{ asset('css/real-estate.css') }}" />
        <style>
            .text-shadow{
                text-shadow: 0.5px 0.5px 20px black;
            }
            #shadow-host-companion{
                padding-top: 0px;
                padding-bottom: 0px;
            }
        </style>

    </head>

    <body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#242E45">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white border-bottom border-color-extra-medium-gray header-reverse" data-header-hover="light">
                <div class="container-fluid">
                    <div class="col-auto">
                        <a class="navbar-brand" href="#">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="default-logo">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="alt-logo">
                            <img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt="" class="mobile-logo">
                        </a>
                    </div>
                    <div class="col-auto menu-order left-nav ps-60px lg-ps-20px">

                        <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item"><a href="{{route('accueil')}}" class="nav-link">Accueil</a></li>
                                <li class="nav-item"><a href="{{route('apropos')}}" class="nav-link">A propos</a></li>
                                <li class="nav-item dropdown submenu">
                                    <a href="{{route('location')}}" class="nav-link">Location</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu submenu-content" style="background-color: rgba(0, 0, 0, 0.80); z-index: 98"  aria-labelledby="navbarDropdownMenuLink1">
                                        <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                                <div class="col md-mb-10px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">20K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Apartment</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-10px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">18K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Condominium</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-10px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">10K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Accueil</span>
                                                    </a>
                                                </div>
                                                <div class="col xs-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">17K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Office</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-shop.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">09K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Shop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a href="{{route('sell')}}" class="nav-link">Vente</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu submenu-content" style="background-color: rgba(0, 0, 0, 0.80); z-index: 98" aria-labelledby="navbarDropdownMenuLink2">
                                        <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-5px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                                <div class="col md-mb-10px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">20K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Apartment</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-10px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">18K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Condominium</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-10px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">10K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Accueil</span>
                                                    </a>
                                                </div>
                                                <div class="col xs-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">17K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Office</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-80px h-80px mt-15px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-shop.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">09K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-white">Shop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
                                <li class="nav-item"><a href="{{route('blogs')}}" class="nav-link">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto col-xl-3 col-lg-2 text-end md-pe-0">
                        <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
                            <div class="d-none d-xl-flex me-25px">
                                <div class="d-flex align-items-center widget-text fw-600 alt-font"><a href="tel:1234567890" class="d-inline-block"><span class="d-inline-block align-middle me-10px bg-base-color-transparent h-45px w-45px text-center rounded-circle fs-16 lh-46 text-base-color"><i class="feather icon-feather-phone-outgoing"></i></span><span class="d-none d-xxl-inline-block">123-456-7890</span></a></div>
                            </div>
                            <div class="header-icon">
                                <div class="header-button">
                                    <a href="{{route('location')}}" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                                        <span>
                                            <span class="btn-text">Trouver une chambre</span>
                                            <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                            <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex">
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
      
        @yield('content') <!-- Contenu spécifique à chaque page -->
       

        <!-- start footer -->
        <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
                <!-- start newsletter -->
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
                    <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start">
                        <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700">Souscrivez à <span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                        <span class="fs-20 text-white">Nous sommes la voie de l'exellence.</span>
                    </div>
                    <div class="col-lg-5 offset-xl-1 position-relative">
                        <div class="d-inline-block w-100 newsletter-style-03 position-relative">
                            <form action="email-templates/Souscrivez-newsletter.php" method="post" class="position-relative w-100">
                                <input class="input-large bg-white border-color-white w-100 box-shadow-extra-large form-control required" type="email" name="email" placeholder="Enter your email..." />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-large text-dark-gray ls-0px left-icon submit fw-700" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-base-color"></i><span>Souscrivez</span></button>
                                <div class="form-results border-radius-4px pt-10px pb-10px ps-15px pe-15px fs-16 lh-22 mt-10px w-100 text-center position-absolute d-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end newsletter -->
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- start footer column -->
                    <div class="col-auto d-flex flex-column flex-md-row align-items-center text-center text-md-start">
                        <div class="text-dark-gray fs-28 alt-font fw-500">1M+ Propriété prête à<span class="fw-700 text-decoration-line-bottom">acheter et à louer.</span></div>
                        <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                            <a href="#" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Dire, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
                            <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                        </div>
                    </div>
                    <!-- end footer column -->
                </div>
                <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">
                    <!-- start footer column -->
                    <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                        <a href="#" class="footer-logo mb-10px d-inline-block"><img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt=""></a>
                        <p class="w-85 lg-w-100">Lorem ipsum text adipiscing eiusmod elit incididunt enim.</p>
                        <div class="elements-social social-icon-style-02 mt-15px">
                            <ul class="small-icon dark">
                                <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i></a></li>
                                <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Entreprise</span>
                        <ul>
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Nos agents</a></li>
                            <li><a href="#">Dernièrs blog</a></li>
                            <li><a href="#">Contact </a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Ressources</span>
                        <ul>
                            <li><a href="#">Louez une maison</a></li>
                            <li><a href="#">Vendre une maison</a></li>
                            <li><a href="#">Prêt a faire le pas</a></li>
                            <li><a href="#">Budgets</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Client</span>
                        <ul>
                            <li><a href="#">Support client</a></li>
                            <li><a href="#">Centre d'aide</a></li>
                            <li><a href="#">Status</a></li>
                            <li><a href="#">Retour</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Faire un coucou</span>
                        <span class="d-block lh-normal">Besoin de support?</span>
                        <a href="mailto:info@domain.com" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px">info@domain.com</a>
                        <span class="d-block lh-normal">Assurance client</span>
                        <a href="tel:12345678910" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block">+1 234 567 8910</a>
                    </div>
                    <!-- end footer column -->
                </div>
                <!-- start footer content -->
                <div class="border-top border-color-extra-medium-gray pt-35px pb-35px text-center">
                    <span class="fs-13 w-60 lg-w-70 md-w-90 sm-w-100 d-block mx-auto lh-22">This site is protected by reCAPTCHA and the Google <a href="#" class="text-dark-gray text-decoration-line-bottom">privacy policy</a> and <a href="#" class="text-dark-gray text-decoration-line-bottom">terms of service</a> apply. You must not use this website if you disagree with any of these website standard terms and conditions.</span>
                </div>
                <!-- end footer content -->
            </div>
        </footer>
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
