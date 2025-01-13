@extends('layouts.app')

@section('title', 'Accueil')

@push('css')
    <!-- style sheets and font icons  -->
@endpush

@section('content')
    <!-- start banner slider -->
    <section class="p-0 top-space-margin">
        <div class="swiper full-screen md-h-600px sm-h-500px swiper-number-pagination-style-01 magic-cursor drag-cursor" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-number", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }' data-number-pagination="1">
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('{{ asset('images/banner-001.jpg') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="fs-20 d-block mb-15px">Valmont road, Boulder, CO 80301</span>
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">Luxurious <span class="fw-700">mansion</span></div>
                                <a href="#" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Planifiez une visite</a>
                                <a href="{{ route('posts.show', 'new') }}" class="btn btn-transparent-white-light border-1 btn-large btn-round-edge fw-500 xs-mt-10px xs-mb-10px">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row justify-content-center">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bed.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">4 Pièces</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bath.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 WC-douche</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-car.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">4 Garage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">Prix d'acquisition</span>
                                <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$30,99,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('{{ asset('images/banner-001.jpg') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="fs-20 d-block mb-15px">Valmont road, Boulder, CO 80301</span>
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-80 xs-w-100 ls-minus-2px">Woodland <span class="fw-700">modern</span></div>
                                <a href="#" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Planifiez une visite</a>
                                <a href="{{ route('posts.show', 'new') }}" class="btn btn-transparent-white-light border-1 btn-large btn-round-edge fw-500 xs-mt-10px xs-mb-10px">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bed.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">4 Pièces</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bath.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 WC-douche</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-car.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Garage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">Prix d'acquisition</span>
                                <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$27,99,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('{{ asset('images/banner-001.jpg') }}');">
                    <div class="container h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-md-8 position-relative text-white" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="fs-20 d-block mb-15px">Valmont road, Boulder, CO 80301</span>
                                <div class="alt-font fs-110 lg-fs-90 lh-90 lg-lh-80 mb-45px sm-mb-25px w-70 xs-w-100 ls-minus-2px">Saturate <span class="fw-700">house</span></div>
                                <a href="#" class="btn btn-white btn-large border-1 btn-round-edge btn-box-shadow me-15px xs-mt-10px xs-mb-10px">Planifiez une visite</a>
                                <a href="{{ route('posts.show', 'new') }}" class="btn btn-transparent-white-light border-1 btn-large btn-round-edge fw-500 xs-mt-10px xs-mb-10px">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute col-xxl-5 col-lg-6 right-0px bottom-0px pt-50px pb-40px ps-40px pe-40px lg-p-35px d-none d-lg-inline-block bg-white border-radius-left-8px" data-anime='{ "translateX": [50, 0], "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="row">
                            <div class="col-xl-7 lg-mb-25px">
                                <div class="row">
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bed.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 Pièces</span>
                                    </div>
                                    <div class="col text-center border-end border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-bath.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">3 WC-douche</span>
                                    </div>
                                    <div class="col text-center border-end lg-border-end-0 border-color-extra-medium-gray">
                                        <img class="mb-5px h-50px" src="images/demo-real-estate-icon-car.svg" alt="">
                                        <span class="alt-font fs-16 fw-500 d-block">2 Garage</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 ps-35px lg-ps-15px text-center text-xl-start">
                                <span class="fw-500 mb-5px d-block alt-font">Prix d'acquisition</span>
                                <h4 class="text-dark-gray fw-700 alt-font mb-0 ls-minus-1px">$23,99,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 position-relative">
                        <!-- start slider pagination -->
                        <div class="swiper-pagination left-0 text-start swiper-pagination-clickable swiper-number fs-14 alt-font ls-05px"></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <!-- <div class="slider-one-slide-prev-1 icon-very-small text-white swiper-button-prev slider-navigation-style-06"><i class="line-icon-Arrow-OutLeft icon-extra-large"></i></div>
            <div class="slider-one-slide-next-1 icon-very-small text-white swiper-button-next slider-navigation-style-06"><i class="line-icon-Arrow-OutRight icon-extra-large"></i></div> -->
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end banner slider -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 md-mb-50px position-relative" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
                        <img src="https://via.placeholder.com/610x610" alt="" class="w-100">
                        <figcaption class="position-absolute border-radius-left-8px bg-base-color right-0px bottom-0px p-45px last-paragraph-no-margin">
                            <i class="feather icon-feather-home icon-medium text-white mb-15px d-block"></i>
                            <h4 class="alt-font fw-700 text-white mb-0 d-block">258,952+</h4>
                            <p class="text-white">Properties listed for sell</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Marché immobilier en ligne</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-85" data-shadow-animation="true" data-animation-delay="700">Nous vous aidons à trouver votre <span class="fw-700 text-highlight">nouveau logement.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    <p class="w-80 md-w-100">Marché immobilier en ligne pour acheter, vendre et louer des propriétés résidentielles et commerciales. Utilisé par des millions de locataires pour trouver des biens immobiliers.</p>
                    <div class="mb-35px">
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08 mb-10px">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray">Plus de 10 ans d'expérience.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                <div class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-base-color-transparent rounded-circle me-15px">
                                    <i class="fa-solid fa-check fs-14 text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="text-dark-gray">Plus de 10 000 personnes font confiance à notre agence.</span>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                    <div class="d-inline-block">
                        <a href="#" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">A propos de nous</a>
                        <a href="#" class="btn btn-large btn-link btn-hover-animation-switch text-dark-gray p-0">
                            <span>
                                <span class="btn-text">Trouver un logement.</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 border-top border-color-extra-medium-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center g-0 bg-white" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col d-flex align-items-center text-center text-lg-start icon-with-text-style-04 border-end md-border-start md-border-bottom sm-border-start-0 xs-border-end-0 border-color-extra-medium-gray position-relative xs-pt-60px xs-pb-60px">
                    <span class="fs-26 lh-30 d-inline-block alt-font text-dark-gray fw-600 mb-0 w-100 sm-w-85 mx-auto shadow-none" data-shadow-animation="true" data-animation-delay="700">Que <span class="fw-600 text-highlight">recherchez<span class="bg-base-color h-6px bottom-3px opacity-3 separator-animation"></span></span>-vous ?</span>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 border-end md-border-bottom sm-border-end-0 border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">20K</div>
                            <a href="#" class="d-block">
                                <img src="images/demo-real-estate-icon-apartment.svg" alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Apartment</a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 border-end md-border-bottom xs-border-end-0 border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">18K</div>
                            <a href="#" class="d-block">
                                <img src="images/demo-real-estate-icon-condominium.svg" alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Copropriété</a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 border-end md-border-start sm-border-end-0 sm-border-start-0 sm-border-bottom border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">22K</div>
                            <a href="#" class="d-block">
                                <img src="images/demo-real-estate-icon-home.svg" alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Maison</a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 border-end xs-border-end-0 xs-border-bottom border-color-extra-medium-gray position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">09K</div>
                            <a href="#" class="d-block">
                                <img src="images/demo-real-estate-icon-office.svg" alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Bureau</a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 border-color-extra-medium-gray md-border-end sm-border-end-0 position-relative">
                    <div class="feature-box pt-45px pb-25px">
                        <div class="feature-box-icon mb-10px">
                            <div class="text-uppercase alt-font fw-700 text-base-color fs-12 lh-22 bg-base-color-transparent border-radius-4px position-absolute left-18px top-18px ps-10px pe-10px">20K</div>
                            <a href="#" class="d-block">
                                <img src="images/demo-real-estate-icon-shop.svg" alt="">
                            </a>
                        </div>
                        <div class="feature-box-content">
                            <a href="#" class="alt-font text-dark-gray text-dark-gray-hover fw-700 fs-15 lh-20 text-uppercase">Boutique</a>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray">
        <div class="container">
            <div class="row align-items-center mb-6 xs-mb-8">
                <div class="col-md-8 text-center text-md-start sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Propriétés <span class="fw-700 text-highlight d-inline-block">à vendre et à louer.<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                </div>
                <div class="col-md-4" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="d-flex justify-content-center justify-content-md-end">
                        <a href="#" class="fw-600 alt-font text-dark-gray text-dark-gray-hover d-flex align-items-center">Voir toutes les annonces<span class="d-flex align-items-center justify-content-center bg-dark-gray h-40px w-40px text-center rounded-circle fs-16 text-white ms-10px"><i class="feather icon-feather-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start box item -->
                <div class="col mb-30px">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="#">
                                <img src="https://via.placeholder.com/600x415" alt="">
                            </a>
                            <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                        </div>
                        <div class="bg-white">
                            <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Luxury villa in Texas</a>
                                </div>
                                <p class="mb-20px">982 Monroe ave, rochester</p>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">04</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bedrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">05</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bathrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">360m<sup>2</sup></span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Living area</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                <div class="col">
                                    <a href="{{ route('posts.show', 'new') }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">$6,89,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box item -->
                <!-- start box item -->
                <div class="col mb-30px">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="#">
                                <img src="https://via.placeholder.com/600x415" alt="">
                            </a>
                            <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
                        </div>
                        <div class="bg-white">
                            <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Modern villa in Oregon</a>
                                </div>
                                <p class="mb-20px">1261 Sampson street senver</p>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">05</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bedrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">05</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bathrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">780m<sup>2</sup></span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Living area</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                <div class="col">
                                    <a href="{{ route('posts.show', 'new') }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">$8,50,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box item -->
                <!-- start box item -->
                <div class="col mb-30px">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="#">
                                <img src="https://via.placeholder.com/600x415" alt="">
                            </a>
                            <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                        </div>
                        <div class="bg-white">
                            <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Ranch style in Florida</a>
                                </div>
                                <p class="mb-20px">2814 Hampton meadows</p>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">04</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bedrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">04</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bathrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">260m<sup>2</sup></span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Living area</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                <div class="col">
                                    <a href="{{ route('posts.show', 'new') }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">$6,50,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box item -->
                <!-- start box item -->
                <div class="col lg-mb-30px">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="#">
                                <img src="https://via.placeholder.com/600x415" alt="">
                            </a>
                            <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                        </div>
                        <div class="bg-white">
                            <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Ranch style in Illinois</a>
                                </div>
                                <p class="mb-20px">4403 Pick street pleasant view</p>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">03</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bedrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">05</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bathrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">250m<sup>2</sup></span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Living area</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                <div class="col">
                                    <a href="{{ route('posts.show', 'new') }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">$6,00,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box item -->
                <!-- start box item -->
                <div class="col sm-mb-30px">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="#">
                                <img src="https://via.placeholder.com/600x415" alt="">
                            </a>
                            <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
                        </div>
                        <div class="bg-white">
                            <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Cottage in Oklahoma</a>
                                </div>
                                <p class="mb-20px">1151 Bungalow road norfolk</p>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">03</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bedrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">03</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bathrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">300m<sup>2</sup></span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Living area</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                <div class="col">
                                    <a href="{{ route('posts.show', 'new') }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">$5,50,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box item -->
                <!-- start box item -->
                <div class="col">
                    <div class="border-radius-6px overflow-hidden box-shadow-large">
                        <div class="image position-relative">
                            <a href="#">
                                <img src="https://via.placeholder.com/600x415" alt="">
                            </a>
                            <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                        </div>
                        <div class="bg-white">
                            <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                <div class="d-flex align-items-center">
                                    <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Modern house in Texas</a>
                                </div>
                                <p class="mb-20px">3259 Filbert street bethlehem</p>
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">04</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bedrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">04</span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Bathrooms</span>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center">
                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                            <span class="fw-600 alt-font text-dark-gray">620m<sup>2</sup></span>
                                        </div>
                                        <span class="d-block lh-18 fs-15">Living area</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                <div class="col">
                                    <a href="{{ route('posts.show', 'new') }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a>
                                </div>
                                <div class="col text-end">
                                    <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">$6,95,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center mb-7">
                <div class="col-lg-5 md-mb-50px" data-anime='{ "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Pourquoi choisir notre service</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Précis à 99 % des détails d'une <span class="fw-700 text-highlight d-inline-block">propriété's<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span>.</h3>
                    <div class="mt-50px mb-50px sm-mt-40px sm-mb-40px">
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08 mb-30px">
                            <div class="feature-box feature-box-left-icon overflow-hidden">
                                <div class="feature-box-icon">
                                    <img src="https://via.placeholder.com/80x80" class="w-80px" alt="">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Most appreciated projects</span>
                                    <p class="w-80 lg-w-100">Browse millions of properties in your city save your favorites.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                        <!-- start features box item -->
                        <div class="icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon overflow-hidden">
                                <div class="feature-box-icon">
                                    <img src="https://via.placeholder.com/80x80" class="w-80px" alt="">
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Highest rental income projects</span>
                                    <p class="w-80 lg-w-100">Browse millions of properties in your city save your favorites.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end features box item -->
                    </div>
                    <div class="d-inline-block">
                        <a href="#" class="btn btn-dark-gray btn-medium btn-round-edge me-15px xs-mb-10px">about more</a>
                        <a href="#" class="btn btn-medium btn-round-edge btn-transparent-light-gray border-1 fw-700 xs-mb-10px">Trusted agents</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 position-relative" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"lr", "easing": "easeOutQuad", "delay":50}'>
                    <!-- start popup video -->
                    <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
                        <img src="https://via.placeholder.com/800x786" class="w-100 border-radius-6px" alt="">
                        <a href="#" class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                            <span>
                                <span class="video-icon bg-white">
                                    <i class="fa-solid fa-play text-dark-gray"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr border border-color-white"></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                        <figcaption class="position-absolute text-center border-radius-5px right-25px bottom-25px ps-30px pe-30px blur-box bg-white-transparent">
                            <h1 class="mx-auto mb-0 fw-700 alt-font text-dark-gray mb-5px mt-25px">4.9</h1>
                            <div class="text-base-color fs-19 ls-2px lh-10">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="text-dark-gray text-uppercase fs-13 fw-700 alt-font mb-15px d-inline-block">TrustScore</span>
                        </figcaption>
                    </figure>
                    <!-- end popup video -->
                </div>
            </div>
            <div class="row justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-auto icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-pin-map icon-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
                            Notre sélection des meilleurs endroits  à travers le <span class="text-decoration-line-bottom">Le TOGO , choisissez le vôtre..</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden bg-gradient-very-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 md-mb-50px sm-mb-35px">
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Find your dream house</span>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px w-90 xl-w-100 shadow-none" data-shadow-animation="true" data-animation-delay="700">We are available in <span class="fw-700 text-highlight d-inline-block">many countries<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                    <p class="mb-30px w-90 md-w-100">We provide a wide selection of home types for you and your family and are free to choose a home model.</p>
                    <div class="d-flex">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                        <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 bg-white box-shadow-large"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="outside-box-right-20 sm-outside-box-right-0" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                <div class="position-absolute top-25px right-25px bg-orange border-radius-50px ps-5px pe-15px lh-28">
                                                    <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-orange lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Trusted</span>
                                                </div>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Washington, USA</a>
                                                <span class="opacity-7 text-white">17 propriété listing</span>
                                                <a href="#" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Paris, France</a>
                                                <span class="opacity-7 text-white">20 propriété listing</span>
                                                <a href="#" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Chicago, USA</a>
                                                <span class="opacity-7 text-white">45 propriété listing</span>
                                                <a href="#" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">San francisco, USA</a>
                                                <span class="opacity-7 text-white">45 propriété listing</span>
                                                <a href="#" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Paris, France</a>
                                                <span class="opacity-7 text-white">20 propriété listing</span>
                                                <a href="#" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="col interactive-banner-style-05">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="#">
                                                <img src="https://via.placeholder.com/370x510" class="w-100 border-radius-6px" alt="" />
                                                <div class="position-absolute top-0px left-0px w-100 h-100 bg-gradient-gray-light-dark-transparent"></div>
                                                <div class="position-absolute top-25px right-25px bg-base-color border-radius-50px ps-5px pe-15px lh-28">
                                                    <div class="w-20px h-20px text-center bg-white rounded-circle d-inline-block align-middle text-base-color lh-18">
                                                        <i class="fa-solid fa-check fs-10"></i>
                                                    </div>
                                                    <span class="d-inline-block align-middle alt-font fw-600 text-white fs-12 text-uppercase">Verified</span>
                                                </div>
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-50px xl-p-40px sm-p-30px last-paragraph-no-margin">
                                                <img src="https://via.placeholder.com/130x130" class="mb-auto h-70px" alt="" />
                                                <a href="#" class="text-white alt-font fw-600 fs-26">Chicago, USA</a>
                                                <span class="opacity-7 text-white">45 propriété listing</span>
                                                <a href="#" class="btn btn-light-base-color btn-small btn-round-edge btn-box-shadow mt-20px">All properties<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="py-0">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-40px md-mb-30px">
                <div class="col text-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Reconnu pour avoir dépassé les <span class="fw-700 text-highlight d-inline-block">attentes de nos clients.<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                </div>
            </div>
            <div class="row g-0 row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-10 transition-inner-all md-mb-50px sm-mb-30px">
                    <div class="feature-box text-center border-end xs-border-end-0 border-color-extra-medium-gray">
                        <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                            <i class="bi bi-house-door icon-large text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Vente your home</span>
                            <p class="w-80 md-w-70 mx-auto">Lorem dummy printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-10 transition-inner-all md-mb-50px sm-mb-30px">
                    <div class="feature-box text-center border-end md-border-end-0 border-color-extra-medium-gray">
                        <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                            <i class="bi bi-camera icon-large text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Free photoshoot</span>
                            <p class="w-80 md-w-70 mx-auto">Lorem dummy printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-10 transition-inner-all xs-mb-30px">
                    <div class="feature-box text-center border-end xs-border-end-0 border-color-extra-medium-gray">
                        <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                            <i class="bi bi-key icon-large text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Buy a home</span>
                            <p class="w-80 md-w-70 mx-auto">Lorem dummy printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-10 transition-inner-all">
                    <div class="feature-box text-center">
                        <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-15px">
                            <i class="bi bi-gear icon-large text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fw-600 text-dark-gray fs-19 d-inline-block mb-5px">Free appraisal</span>
                            <p class="w-80 md-w-70 mx-auto">Lorem dummy printing typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
            <div class="row justify-content-center mt-6 sm-mt-50px">
                <div class="col-auto icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-15px">
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
    <section class="position-relative overflow-hidden">
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
                <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="fs-20 d-inline-block mb-15px text-base-color">Clients feedback</span>
                    <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Here is what our <span class="fw-700 text-highlight d-inline-block">client's<span class="bg-base-color h-10px bottom-4px opacity-3 separator-animation"></span></span> have to say</h2>
                    <div class="swiper position-relative" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                        <div class="swiper-wrapper mb-40px">
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">Love the theme, really neat and super easy to use. But the customer support is what makes this an even greater theme! ThemeZaa solved all the problems. I had with my custom settings.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="https://via.placeholder.com/148x148" alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Alexander</span> harvard</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">I've purchased several themes over the years and this theme, by far is absolutely amazing. It's built extremely well the back end was well thought out the design options are endless.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="https://via.placeholder.com/148x148" alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Shoko</span> mugikura</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide review-style-08">
                                <p class="w-80 xl-w-90 lg-w-100">The theme is very valid and offers many possibilities of customization to adapt it to your needs, but the thing I got the most out of it was the relationship with the support team.</p>
                                <div class="mt-20px">
                                    <img class="rounded-circle w-95px h-95px me-15px" src="https://via.placeholder.com/148x148" alt="">
                                    <div class="d-inline-block align-middle text-start">
                                        <div class="text-dark-gray alt-font fs-20"><span class="fw-700">Leonel</span> mooney</div>
                                        <div class="review-star-icon fs-18">
                                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="p-0 overlap-height">
        <div class="container overlap-gap-section">
            <div class="row align-items-center mb-2" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center">
                    <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Latest trends <span class="fw-700 text-highlight d-inline-block">blogs<span class="bg-base-color h-10px bottom-1px opacity-3 separator-animation"></span></span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                    <a href="#"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                                </div>
                                <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase"><a href="#" class="text-dark-gray fw-500 categories-text">Commercial</a><a href="#" class="blog-date">22 August 2023</a></span>
                                    <a href="#" class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">He is not a full man who does not own a piece of land.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                    <a href="#"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                                </div>
                                <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase"><a href="#" class="text-dark-gray fw-500 categories-text">Residential</a><a href="#" class="blog-date">22 August 2023</a></span>
                                    <a href="#" class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">Risk comes from not knowing what you're doing.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                    <a href="#"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                                </div>
                                <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase"><a href="#" class="text-dark-gray fw-500 categories-text">Commercial</a><a href="#" class="blog-date">20 August 2023</a></span>
                                    <a href="#" class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">Know what you own, and know why you own it.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card bg-transparent border-0 h-100">
                                <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                    <a href="#"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                                </div>
                                <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                    <span class="fs-14 text-uppercase"><a href="#" class="text-dark-gray fw-500 categories-text">Residential</a><a href="#" class="blog-date">18 August 2023</a></span>
                                    <a href="#" class="card-title mb-10px alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">Don't wait to buy real estate buy real estate and wait.</a>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
@endsection

@push('scripts')
   <!-- slider revolution core javaScript files -->
   <script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.tools.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.revolution.min.js') }}"></script>
   <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
   <!-- <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.actions.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.carousel.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.migration.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.video.min.js') }}"></script> -->
   <script type="text/javascript" src=" {{ asset('r/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
   <script type="text/javascript" src="{{  asset('r/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
   <script type="text/javascript" src="{{  asset('r/js/extensions/revolution.extension.navigation.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('r/js/extensions/revolution.extension.parallax.min.js') }}"></script>


   <!-- Slider's main "init" script -->
   <script>
       var tpj = jQuery;
       var revapi7;
       var $ = jQuery.noConflict();
       tpj(document).ready(function () {
           if (tpj("#demo-corporate-slider").revolution == undefined) {
               revslider_showDoubleJqueryError("#demo-corporate-slider");
           } else {
               revapi7 = tpj("#demo-corporate-slider").show().revolution({
                   sliderType: "standard",
                   /* sets the Slider's default timeline */
                   delay: 9000,
                   /* options are 'auto', 'fullwidth' or 'fullscreen' */
                   sliderLayout: 'fullscreen',
                   /* RESPECT ASPECT RATIO */
                   autoHeight: 'off',
                   /* options that disable autoplay */
                   stopLoop: "off",
                   stopAfterLoops: -1,
                   stopAtSlide: -1,
                   navigation: {
                       keyboardNavigation: 'on',
                       keyboard_direction: 'horizontal',
                       mouseScrollNavigation: 'off',
                       mouseScrollReverse: 'reverse',
                       onHoverStop: 'off',
                       arrows: {
                           enable: true,
                           style: 'hesperiden',
                           rtl: false,
                           hide_onleave: false,
                           hide_onmobile: true,
                           hide_under: 500,
                           hide_over: 9999,
                           hide_delay: 200,
                           hide_delay_mobile: 1200,
                           left: {
                               container: 'slider',
                               h_align: 'left',
                               v_align: 'center',
                               h_offset: 50,
                               v_offset: 0
                           },
                           right: {
                               container: 'slider',
                               h_align: 'right',
                               v_align: 'center',
                               h_offset: 50,
                               v_offset: 0
                           }
                       },
                       bullets: {

                           enable: true,
                           style: 'hermes',
                           tmp: '',
                           direction: 'horizontal',
                           rtl: false,

                           container: 'layergrid',
                           h_align: 'center',
                           v_align: 'bottom',
                           h_offset: 0,
                           v_offset: 30,
                           space: 12,

                           hide_onleave: false,
                           hide_onmobile: true,
                           hide_under: 0,
                           hide_over: 500,
                           hide_delay: true,
                           hide_delay_mobile: 500

                       },
                       touch: {
                           touchenabled: 'on',
                           touchOnDesktop: "on",
                           swipe_threshold: 75,
                           swipe_min_touches: 1,
                           swipe_direction: 'horizontal',
                           drag_block_vertical: true
                       }
                   },
                   responsiveLevels: [1240, 1024, 768, 480],
                   visibilityLevels: [1240, 1024, 768, 480],
                   gridwidth: [1240, 1024, 768, 480],
                   gridheight: [930, 850, 900, 850],
                   /* Lazy Load options are "all", "smart", "single" and "none" */
                   lazyType: "smart",
                   spinner: "spinner0",
                   parallax: {
                       type: "scroll",
                       origo: "slidercenter",
                       speed: 400,
                       levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5],
                   },
                   shadow: 0,
                   shuffle: "off",
                   fullScreenAutoWidth: "on",
                   fullScreenAlignForce: "on",
                   fullScreenOffsetContainer: "nav",
                   fullScreenOffset: "",
                   hideThumbsOnMobile: "off",
                   hideSliderAtLimit: 0,
                   hideCaptionAtLimit: 0,
                   hideAllCaptionAtLilmit: 0,
                   debugMode: false,
                   fallbacks: {
                       simplifyAll: "off",
                       nextSlideOnWindowFocus: "off",
                       disableFocusListener: false,
                   }
               });
           }
       }); /*ready*/
   </script>
@endpush
