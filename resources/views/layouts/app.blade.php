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
                                    <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1">
                                        <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                                <div class="col md-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">20K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Apartment</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">18K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Condominium</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">10K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Accueil</span>
                                                    </a>
                                                </div>
                                                <div class="col xs-mb-30px">
                                                    <a href="        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">17K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Office</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-shop.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">09K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Shop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown submenu">
                                    <a href="#" class="nav-link">Vente<span class="label bg-light-red text-red border-radius-26px">Hot</span></a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2">
                                        <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                                <div class="col md-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">20K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Apartment</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">18K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Condominium</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">10K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Accueil</span>
                                                    </a>
                                                </div>
                                                <div class="col xs-mb-30px">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">17K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Office</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="#" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-shop.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">09K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Shop</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown dropdown-with-icon">
                                    <a href="#" class="nav-link">Agents</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                        <li>
                                            <a href="#"><img src="https://via.placeholder.com/148x148" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Evan thomson</span>
                                                    <p>I'm Evan, Expert in sales executive.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="https://via.placeholder.com/148x148" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Bryan jonhson</span>
                                                    <p>I'm Bryan, Expert in propriété broker.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="https://via.placeholder.com/148x148" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Jemmy watson</span>
                                                    <p>I'm Jemmy, Expert in propriété lawyer.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="https://via.placeholder.com/200x200" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Jeremy dupont</span>
                                                    <p>I'm Jeremy, Expert in propriété broker.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="btn btn-dark-gray btn-round-edge align-self-center text-center text-white">All view agents</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
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
                                    <a href="#" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                                        <span>
                                            <span class="btn-text">Devenir propriétaire</span>
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
        <div>
            @yield('content') <!-- Contenu spécifique à chaque page -->
        </div>

        <!-- start footer -->
        <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
                <!-- start newsletter -->
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
                    <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start">
                        <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px shadow-none" data-shadow-animation="true" data-animation-delay="700">Subscribe to <span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                        <span class="fs-20 text-white">Social media its ways of our excellence.</span>
                    </div>
                    <div class="col-lg-5 offset-xl-1 position-relative">
                        <div class="d-inline-block w-100 newsletter-style-03 position-relative">
                            <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
                                <input class="input-large bg-white border-color-white w-100 box-shadow-extra-large form-control required" type="email" name="email" placeholder="Enter your email..." />
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-large text-dark-gray ls-0px left-icon submit fw-700" aria-label="submit"><i class="icon feather icon-feather-mail icon-small text-base-color"></i><span>Subscribe</span></button>
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
                        <div class="text-dark-gray fs-28 alt-font fw-500">1M+ Propriété prête à<span class="fw-700 text-decoration-line-bottom">acheter and à louer.</span></div>
                        <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                            <a href="#" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
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
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Company</span>
                        <ul>
                            <li><a href="#">A propos us</a></li>
                            <li><a href="#">Our agent</a></li>
                            <li><a href="#">Latest blog</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Resources</span>
                        <ul>
                            <li><a href="#">Location a home</a></li>
                            <li><a href="#">Vente a home</a></li>
                            <li><a href="#">Ready to move</a></li>
                            <li><a href="#">Budget homes</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Customer</span>
                        <ul>
                            <li><a href="#">Client support</a></li>
                            <li><a href="#">Help center</a></li>
                            <li><a href="#">System status</a></li>
                            <li><a href="#">Feedback</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-10px">Say hello</span>
                        <span class="d-block lh-normal">Need support?</span>
                        <a href="mailto:info@domain.com" class="text-dark-gray text-decoration-line-bottom lh-22 d-inline-block mb-20px">info@domain.com</a>
                        <span class="d-block lh-normal">Customer care</span>
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
        <!-- end footer -->
        <!-- start subscription popup -->
            <div id="subscribe-popup" class="mfp-hide subscribe-popup">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-md-10 bg-white">
                            <div class="row position-relative box-shadow-quadruple-large">
                                <div class="col-lg-6 cover-background md-h-400px xs-h-300px" style="background-image:url('https://via.placeholder.com/600x690');"></div>
                                <div class="col-lg-6 newsletter-popup p-8 lg-p-5 md-p-6 xs-p-8 position-relative">
                                    <span class="text-base-color mb-10px d-block" style="">Nous offrons une large gamme d'options.</span>
                                    <h4 class="d-inline-block alt-font text-dark-gray mb-20px">1M+ Propriété prête à<span class="fw-700 d-inline-flex text-highlight">acheter & à louer.<span class="bg-base-color h-10px bottom-8px opacity-3"></span></span></span></h4>
                                    <p>Abonnez-vous à nos newsletters et recevez des mises à jour sur les propriétés à vendre et à louer.</p>
                                    <div class="d-inline-block w-100 newsletter-style-05 position-relative mb-20px">
                                        <form action="email-templates/subscribe-newsletter.php" method="post">
                                            <input class="input-medium w-100 border-radius-4px form-control required mb-15px" type="email" name="email" placeholder="Entrez votre adresse e-mail" />
                                            <input type="hidden" name="redirect" value="">
                                            <button type="submit" aria-label="submit" class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">Abonnez-vous maintenant!</button>
                                            <div class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 w-100 text-center position-absolute z-index-1 d-none"></div>
                                        </form>
                                    </div>
                                    <label for="newsletter-off" class="fs-15"><input class="w-auto me-10px position-relative top-1px p-0" type="checkbox" id="newsletter-off" name="newsletter-off">Don't show this popup again</label>
                                </div>
                                <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end subscription popup -->
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
