@extends('layouts.app')

@section('title', 'Contact-Us')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />
@endpush

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Crafto - The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="css/vendors.min.css"/>
        <link rel="stylesheet" href="css/icon.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
        <link rel="stylesheet" href="demos/real-estate/real-estate.css" />
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg header-light bg-white border-bottom border-color-extra-medium-gray header-reverse" data-header-hover="light">
                <div class="container-fluid"> 
                    <div class="col-auto">
                        <a class="navbar-brand" href="demo-real-estate.html">
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
                                <li class="nav-item"><a href="demo-real-estate.html" class="nav-link">Home</a></li> 
                                <li class="nav-item"><a href="demo-real-estate-about.html" class="nav-link">About</a></li>
                                <li class="nav-item dropdown submenu">
                                    <a href="demo-real-estate-rent.html" class="nav-link">Rent</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1"> 
                                        <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                                <div class="col md-mb-30px">
                                                    <a href="demo-real-estate-rent.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">20K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Apartment</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="demo-real-estate-rent.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">18K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Condominium</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="demo-real-estate-rent.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">10K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Home</span>
                                                    </a>
                                                </div>
                                                <div class="col xs-mb-30px">
                                                    <a href="demo-real-estate-rent.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">17K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Office</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="demo-real-estate-rent.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
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
                                    <a href="demo-real-estate-sell.html" class="nav-link">Sell<span class="label bg-light-red text-red border-radius-26px">Hot</span></a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2"> 
                                        <div class="d-lg-flex mega-menu m-auto ps-5 pe-5 md-ps-0 md-pe-0 md-pt-15px">
                                            <div class="row row-cols-2 row-cols-lg-5 row-cols-sm-3 w-100 mx-0 align-items-center justify-content-center">
                                                <div class="col md-mb-30px">
                                                    <a href="demo-real-estate-sell.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-apartment.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">20K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Apartment</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="demo-real-estate-sell.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-condominium.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">18K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Condominium</span>
                                                    </a>
                                                </div>
                                                <div class="col md-mb-30px">
                                                    <a href="demo-real-estate-sell.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-home.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">10K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Home</span>
                                                    </a>
                                                </div>
                                                <div class="col xs-mb-30px">
                                                    <a href="demo-real-estate-sell.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
                                                        <span class="w-120px h-120px mb-15px mx-auto bg-white d-flex justify-content-center border-radius-100px box-shadow-large box-shadow-large-hover position-relative">
                                                            <img src="images/demo-real-estate-icon-office.svg" class="w-50px" alt="">
                                                            <span class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute right-minus-5px top-5px ps-10px pe-10px">17K</span>
                                                        </span>
                                                        <span class="alt-font fw-600 fs-17 text-dark-gray">Office</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a href="demo-real-estate-sell.html" class="opacity-10 text-center justify-content-center flex-column d-flex">
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
                                    <a href="demo-real-estate-agents.html" class="nav-link">Agents</a>
                                    <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                        <li>
                                            <a href="demo-real-estate-agent-details.html"><img src="https://via.placeholder.com/148x148" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Evan thomson</span>
                                                    <p>I'm Evan, Expert in sales executive.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-real-estate-agent-details.html"><img src="https://via.placeholder.com/148x148" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Bryan jonhson</span>
                                                    <p>I'm Bryan, Expert in property broker.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-real-estate-agent-details.html"><img src="https://via.placeholder.com/148x148" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Jemmy watson</span>
                                                    <p>I'm Jemmy, Expert in property lawyer.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-real-estate-agent-details.html"><img src="https://via.placeholder.com/200x200" alt="">
                                                <div class="submenu-icon-content">
                                                    <span>Jeremy dupont</span>
                                                    <p>I'm Jeremy, Expert in property broker.</p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="demo-real-estate-agents.html" class="btn btn-dark-gray btn-round-edge align-self-center text-center text-white">All view agents</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="demo-real-estate-blog.html" class="nav-link">Blog</a></li>
                                <li class="nav-item"><a href="demo-real-estate-contact.html" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto ms-auto ps-lg-0 d-none d-sm-flex"> 
                        <div class="d-none d-xl-flex me-25px">
                            <div class="d-flex align-items-center widget-text fw-600 alt-font"><a href="tel:1234567890" class="d-inline-block"><span class="d-inline-block align-middle me-10px bg-base-color-transparent h-45px w-45px text-center rounded-circle fs-16 lh-46 text-base-color"><i class="feather icon-feather-phone-outgoing"></i></span><span class="d-none d-xxl-inline-block">123-456-7890</span></a></div>
                        </div>
                        <div class="header-icon">
                            <div class="header-button">
                                <a href="demo-real-estate-sell.html" class="btn btn-base-color btn-small btn-round-edge btn-hover-animation-switch">
                                    <span> 
                                        <span class="btn-text">Buy property</span> 
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right icon-very-small"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title -->
        <section class="cover-background page-title-big-typography ipad-top-space-margin">
            <div class="container">
                <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color">About crafto real estate</h1>
                        <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Welcome to crafto <span class="fw-700 text-highlight d-inline-block">real estate<span class="bg-base-color h-10px bottom-3px opacity-3 separator-animation"></span></span> business.</h2>
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Online property marketplace to buy, sell, and rent residential and commercial properties. Used by millions of renters to find property.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="overflow-hidden p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0 position-relative">
                        <img src="https://via.placeholder.com/1920x600" alt="" class="w-100">
                        <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 ls-minus-5px xs-ls-minus-2px position-absolute right-minus-50px lg-right-0px bottom-minus-80px md-bottom-minus-60px xs-bottom-minus-40px text-white text-outline text-outline-width-3px" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">about</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0"> 
            <div class="container">
                <div class="row align-items-center">  
                    <div class="col-lg-6 order-2 order-lg-1 position-relative align-self-end" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"tb", "easing": "easeOutQuad", "delay":50}'> 
                        <figure class="position-relative m-0">
                            <img src="https://via.placeholder.com/610x647" class="w-100" alt="">
                            <figcaption class="w-180px bg-white p-30px pt-20px border-radius-8px position-absolute top-150px right-minus-30px lg-right-0px overflow-hidden box-shadow-medium animation-float"> 
                                <span class="alt-font fs-100 fw-700 text-white d-block position-relative z-index-1">15</span>
                                <div class="alt-font fw-500 fs-24 d-block text-dark-gray lh-26 ls-minus-05px">Years of <span class="fw-700">experience.</span></div>
                                <div class="h-150px w-150px border-radius-100 bg-base-color position-absolute left-minus-10px top-minus-50px z-index-0"></div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 mb-8 order-1 order-lg-2 md-mb-40px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <span class="fs-20 d-inline-block mb-15px text-base-color">Online property marketplace</span> 
                        <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">We help you find your <span class="fw-700 text-highlight d-inline-block">new place.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2> 
                        <p class="w-80 lg-w-100">Online property marketplace to buy, sell, and rent residential and commercial properties. Used by millions of renters to find property.</p>
                        <div class="pt-20px pb-20px ps-30px pe-30px xs-p-20px border border-color-extra-medium-gray border-radius-6px mb-15px icon-with-text-style-08 w-80 lg-w-100">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="feature-box-icon me-10px">
                                    <i class="bi bi-people icon-very-medium text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="alt-font fw-600 text-dark-gray d-block fs-18 lh-26">10,000+ people trusting agency.</span>
                                </div>
                            </div>
                        </div>
                        <p class="fs-13 mb-35px xs-lh-20">Our selection of the best <span class="text-dark-gray text-decoration-line-bottom">places around</span> the world and pick yours.</p>
                        <a href="demo-real-estate-agents.html" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">Trusted agents</a> 
                        <a href="demo-real-estate-sell.html" class="btn btn-large btn-link btn-hover-animation-switch text-dark-gray p-0">
                            <span>
                                <span class="btn-text">Find property</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="bg-gradient-very-light-gray">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Giving quality with <span class="fw-700 text-highlight d-inline-block">property<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mb-5 xs-mb-8" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                            <div class="feature-box-icon mb-20px"> 
                                <img src="https://via.placeholder.com/158x158" class="h-80px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Best services</span>
                                <p>Lorem ipsum is simply printing typesetting.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                        <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                            <div class="feature-box-icon mb-20px"> 
                                <img src="https://via.placeholder.com/158x158" class="h-80px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">User friendly</span>
                                <p>Lorem ipsum is simply printing typesetting.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all xs-mb-30px">
                        <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                            <div class="feature-box-icon mb-20px"> 
                                <img src="https://via.placeholder.com/158x158" class="h-80px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Trusted property</span>
                                <p>Lorem ipsum is simply printing typesetting.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-07 transition-inner-all">
                        <div class="bg-white feature-box box-shadow-quadruple-large box-shadow-quadruple-large-hover text-center p-16 lg-p-14 border-radius-10px last-paragraph-no-margin">
                            <div class="feature-box-icon mb-20px"> 
                                <img src="https://via.placeholder.com/158x158" class="h-80px" alt="">
                            </div>
                            <div class="feature-box-content">
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Legal advisor</span>
                                <p>Lorem ipsum is simply printing typesetting.</p>
                            </div>                        
                        </div>
                    </div>
                    <!-- end features box item -->
                </div>
                <div class="row justify-content-center" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-auto icon-with-text-style-08">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-patch-check icon-medium text-base-color"></i>
                            </div>
                            <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
                                We are growing fast! Today crafto has <span class="text-decoration-line-bottom">36k+ active residents.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-hidden pt-0">
            <img src="images/demo-real-estate-07.png" alt="" class="position-absolute left-100px top-50px z-index-minus-1" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-180px, 0px, 0px);" />
            <img src="images/demo-real-estate-08.png" alt="" class="position-absolute right-100px top-100px z-index-minus-1" data-bottom-top="transform:scale(1.4, 1.4) translate3d(0px, 0px, 0px);" data-top-bottom="transform:scale(1, 1) translate3d(-400px, 0px, 0px);" />
            <div class="container">  
                <div class="row align-items-center justify-content-center">  
                    <div class="col-lg-6 text-end md-mb-50px" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'> 
                        <figure class="position-relative m-0">
                            <img src="https://via.placeholder.com/800x907" class="w-90 border-radius-6px" alt="">
                            <figcaption class="position-absolute bg-dark-gray border-radius-10px box-shadow-quadruple-large bottom-100px xs-bottom-minus-20px left-minus-30px md-left-0px w-230px xs-w-210px text-center last-paragraph-no-margin animation-float">
                                <div class="bg-white pt-35px pb-35px border-radius-8px mb-15px position-relative top-minus-1px">
                                    <h1 class="fw-700 ls-minus-3px text-dark-gray mb-0 alt-font">4.8</h1>
                                    <div class="text-golden-yellow fs-18 ls-1px">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <span class="text-dark-gray d-block alt-font fw-600">2488 Reviews</span>
                                    <div class="d-inline-block fs-12 text-uppercase bg-base-color ps-20px pe-20px lh-30 text-white border-radius-100px box-shadow-large">Excellent score</div>
                                </div>
                                <img src="images/demo-real-estate-trustpilot.svg" class="h-30px mb-20px" alt="" />
                            </figcaption>
                        </figure>
                    </div>
                    <div 
    class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start" 
    data-anime='{
        "translateY": [0, 0], 
        "opacity": [0, 1], 
        "duration": 1200, 
        "delay": 100, 
        "staggervalue": 150, 
        "easing": "easeOutQuad"
    }'
>
    <span class="fs-20 d-inline-block mb-15px text-base-color">Clients feedback</span>
    
    <h2 
        class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" 
        data-shadow-animation="true" 
        data-animation-delay="700"
    >
        Here is what our 
        <span class="fw-700 text-highlight d-inline-block">
            client's
            <span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span>
        </span> 
        have to say
    </h2>
    
    <div 
        class="swiper position-relative" 
        data-slider-options='{
            "autoHeight": true, 
            "loop": true, 
            "allowTouchMove": true, 
            "autoplay": { "delay": 4000, "disableOnInteraction": false }, 
            "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, 
            "effect": "fade"
        }'
    >
        <div class="swiper-wrapper mb-40px">
            <!-- Start text slider items -->
            @foreach($avis as $avi)
                <div class="swiper-slide review-style-08">
                    <p class="w-80 lg-w-100">{{ $avi->temoignage }}</p>
                    
                    <div class="mt-20px d-flex align-items-center">
                        <img 
                            class="rounded-circle w-95px h-95px me-15px" 
                            src="https://via.placeholder.com/148x148" 
                            alt="{{ $avi->nom_client }}"
                        >
                        
                        <div class="d-inline-block align-middle text-start">
                            <div class="text-dark-gray alt-font fs-20">
                                <span class="fw-700">{{ $avi->nom_client }}</span>
                            </div>
                            
                            <div class="review-star-icon fs-18">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if($i <= $avi->note)
                                        <i class="bi bi-star-fill text-warning"></i> <!-- Full star -->
                                    @else
                                        <i class="bi bi-star text-muted"></i> <!-- Empty star -->
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div> 
                </div>
            @endforeach
            <!-- End text slider items -->
        </div>

        <!-- Slider navigation -->
        <div class="d-flex justify-content-center justify-content-lg-start">
            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray">
                <i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i>
            </div>
            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray">
                <i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i>
            </div>
        </div>
    </div>
</div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->    
        <!-- start section -->
        <section class="pt-0 pb-30px sm-pb-50px overlap-height">
            <div class="container overlap-gap-section">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center align-items-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col md-mb-30px">
                        <div class="bg-white border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="images/demo-real-estate-logo-01.svg" class="h-40px" alt="" />
                            </div>
                            <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                                <div class="alt-font mx-auto lh-28">Property sell listed - <span class="fw-700 text-dark-gray">275% Growth</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col md-mb-30px">
                        <div class="bg-white border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="images/demo-real-estate-logo-02.svg" class="h-40px" alt="" />
                            </div>
                            <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                                <div class="alt-font mx-auto lh-28">Property selling - <span class="fw-700 text-dark-gray">235% Growth</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-white border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="images/demo-real-estate-logo-03.svg" class="h-40px" alt="" />
                            </div>
                            <div class="border-top border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                                <div class="alt-font mx-auto lh-28">Property agents - <span class="fw-700 text-dark-gray">175% Growth</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5 md-mt-7" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-12 text-center align-items-center">
                        <div class="bg-dark-gray alt-font fs-12 fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px me-10px sm-m-5px d-inline-block align-middle">Fun facts</div>
                        <div class="fs-20 text-dark-gray d-block d-md-inline-block align-middle alt-font fw-600">World's famous ratings companies we worked with us.</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
                <!-- start newsletter -->
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 xs-p-10 border-radius-6px g-0">
                    <div class="col-xl-6 col-lg-7 md-mb-25px sm-mb-15px position-relative text-center text-lg-start">
                        <h3 class="alt-font fw-500 text-white ls-minus-1px mb-10px">Subscribe to <span class="fw-700 text-highlight d-inline-block">newsletter<span class="bg-white h-10px bottom-1px opacity-3"></span></span></h3>
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
                        <div class="text-dark-gray fs-28 alt-font fw-500">1M+ property ready to <span class="fw-700 text-decoration-line-bottom">buying and selling.</span></div>
                        <div class="bg-white border-radius-50px d-flex align-items-center p-10px ps-35px ms-20px md-ps-20px md-ms-15px box-shadow-medium sm-m-20px">
                            <a href="demo-real-estate-contact.html" class="text-dark-gray fs-22 alt-font fw-500 me-10px overflow-hidden">Say, <span class="fw-700 w-65px text-start d-inline-block" data-fancy-text='{ "effect": "rotate", "string": ["Hello!", "Salve!", "Hallå!"] }'></span></a>
                            <span class="text-dark-gray h-45px w-45px text-center d-flex align-items-center justify-content-center border-radius-100 bg-base-color-transparent fs-20">&#128075;</span>
                        </div>
                    </div>
                    <!-- end footer column -->
                </div>
                <div class="row justify-content-center mt-5 mb-4 sm-mb-35px">
                    <!-- start footer column -->
                    <div class="col-lg-3 last-paragraph-no-margin md-mb-35px text-center text-lg-start">
                        <a href="demo-real-estate.html" class="footer-logo mb-10px d-inline-block"><img src="images/demo-real-estate-logo-black.png" data-at2x="images/demo-real-estate-logo-black@2x.png" alt=""></a>
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
                            <li><a href="demo-real-estate-about.html">About us</a></li>
                            <li><a href="demo-real-estate-agents.html">Our agent</a></li>
                            <li><a href="demo-real-estate-blog.html">Latest blog</a></li>
                            <li><a href="demo-real-estate-contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3 sm-mb-25px">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Resources</span>
                        <ul>
                            <li><a href="demo-real-estate-rent.html">Rent a home</a></li>
                            <li><a href="demo-real-estate-sell.html">Sell a home</a></li>
                            <li><a href="demo-real-estate-agents.html">Ready to move</a></li>
                            <li><a href="demo-real-estate-about.html">Budget homes</a></li>
                        </ul>
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-6 col-lg-2 col-md-3">
                        <span class="alt-font fs-18 fw-600 d-block text-dark-gray mb-5px">Customer</span>
                        <ul>                           
                            <li><a href="demo-real-estate-contact.html">Client support</a></li>
                            <li><a href="demo-real-estate-contact.html">Help center</a></li>
                            <li><a href="demo-real-estate-contact.html">System status</a></li>
                            <li><a href="demo-real-estate-contact.html">Feedback</a></li>
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
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/vendors.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush