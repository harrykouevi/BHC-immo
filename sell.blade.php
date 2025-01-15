@extends('layouts.app')

@section('title', 'Vente')

@push('css')

    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />

@endpush


@section('content')

        <!-- start page title -->
        <section class="cover-background page-title-big-typography ipad-top-space-margin">
            <div class="container">
                <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="text-base-color">Les meilleures propriétés à vendre</h1>
                        <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Vous aider à trouver le <span class="fw-700 text-highlight d-inline-block">parfait.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Marché immobilier en ligne pour acheter, vendre et louer des biens résidentiels et commerciaux. Utilisé par des millions de locataires pour trouver un bien immobilier.</span>
                    </div>
                </div>
            </div><br><br>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="bg-very-light-gray z-index-3 position-relative">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 overlap-section md-overlap-disable overlap-section-one-fourth justify-content-center" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col transition-inner-all md-mb-30px">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Appartements</span>
                                    <h4 class="d-inline-block text-dark-gray fw-800 ls-minus-1px alt-font mb-0 d-inline-block">8215</h4>
                                </div>
                                <div class="feature-box-icon me-0">
                                    <img src="images/demo-real-estate-icon-apartment.svg" alt="">
                                </div>
                            </div>
                            <!-- end features box item -->
                            <div class="border-top border-1 border-color-extra-medium-gray pt-10px mt-15px">
                                <a href="#rentals" class="btn btn-extra-large btn-link btn-hover-animation-switch text-dark-gray text-uppercase-inherit section-link">
                                    <span>
                                        <span class="btn-text">Voir plus</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col transition-inner-all md-mb-30px">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Maisons</span>
                                    <h4 class="d-inline-block text-dark-gray fw-800 ls-minus-1px me-5px alt-font mb-0 d-inline-block">9235</h4>
                                </div>
                                <div class="feature-box-icon me-0">
                                    <img src="images/demo-real-estate-icon-home.svg" alt="">
                                </div>
                            </div>
                            <!-- end features box item -->
                            <div class="border-top border-1 border-color-extra-medium-gray pt-10px mt-15px">
                                <a href="#rentals" class="btn btn-extra-large btn-link btn-hover-animation-switch text-dark-gray text-uppercase-inherit section-link">
                                    <span>
                                        <span class="btn-text">Voir plus</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col transition-inner-all xs-mb-30px">
                        <div class="bg-base-color h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-35px pb-35px ps-40px pe-40px lg-p-25px">
                            <span class="fs-24 lh-26 d-inline-block alt-font text-white fw-500 mb-0"><span class="fw-700 d-block fs-45 mb-10px">18,350</span> Propriétés nouvellement répertoriées</span>
                        </div>
                    </div>
                    <div class="col transition-inner-all">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Bureau</span>
                                    <h4 class="d-inline-block text-dark-gray fw-800 ls-minus-1px me-5px alt-font mb-0 d-inline-block">4413</h4>
                                </div>
                                <div class="feature-box-icon me-0">
                                    <img src="images/demo-real-estate-icon-office.svg" alt="">
                                </div>
                            </div>
                            <!-- end features box item -->
                            <div class="border-top border-1 border-color-extra-medium-gray pt-10px mt-15px">
                                <a href="#rentals" class="btn btn-extra-large btn-link btn-hover-animation-switch text-dark-gray text-uppercase-inherit section-link">
                                    <span>
                                        <span class="btn-text">Voir plus</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 xs-mb-10 pt-9" id="rentals">
                    <div class="col-12 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Dernière propriété à <span class="fw-700 text-highlight">vendre<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start box item -->
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="demo-real-estate-property-details.html">
                                    <img src="https://via.placeholder.com/600x415" alt="">
                                </a>
                                <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vendre</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="demo-real-estate-property-details.html" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Villa de luxe à Lomé</a>
                                    </div>
                                    <p class="mb-20px">982 Monroe ave, rochester</p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">04</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Chambres</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">05</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Salles de bains</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">360m<sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Surface habitable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="demo-real-estate-property-details.html" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600" style="font-size: 8px;">Voir les détails</a>
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
                                <a href="demo-real-estate-property-details.html">
                                    <img src="https://via.placeholder.com/600x415" alt="">
                                </a>
                                <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="demo-real-estate-property-details.html" class="alt-font text-dark-gray fw-700 fs-22 me-10px" style="font-size: 8px;">Modern villa in Oregon</a>
                                    </div>
                                    <p class="mb-20px">1261 Sampson street senver</p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">05</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Chambres</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">05</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Salles de bains</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">780m<sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Surface habitable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="demo-real-estate-property-details.html" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600" style="font-size: 8px;">Voir les détails</a>
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
                                <a href="demo-real-estate-property-details.html">
                                    <img src="https://via.placeholder.com/600x415" alt="">
                                </a>
                                <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="demo-real-estate-property-details.html" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Ranch style in Florida</a>
                                    </div>
                                    <p class="mb-20px">2814 Hampton meadows</p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">04</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Chambres</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">04</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Salles de bains</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">260m<sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Surface habitable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="demo-real-estate-property-details.html" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600" style="font-size: 8px;">Voir les détails</a>
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
                                <a href="demo-real-estate-property-details.html">
                                    <img src="https://via.placeholder.com/600x415" alt="">
                                </a>
                                <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="demo-real-estate-property-details.html" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Ranch style in Illinois</a>
                                    </div>
                                    <p class="mb-20px">4403 Pick street pleasant view</p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">03</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Chambres</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">05</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Salles de bains</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">250m<sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Surface habitable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="demo-real-estate-property-details.html" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600" style="font-size: 8px;">Voir les détails</a>
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
                                <a href="demo-real-estate-property-details.html">
                                    <img src="https://via.placeholder.com/600x415" alt="">
                                </a>
                                <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="demo-real-estate-property-details.html" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Cottage in Oklahoma</a>
                                    </div>
                                    <p class="mb-20px">1151 Bungalow road norfolk</p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">03</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Chambres</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">03</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Salles de bains</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">300m<sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Surface habitable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="demo-real-estate-property-details.html" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600" style="font-size: 8px;">Voir les détails</a>
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
                                <a href="demo-real-estate-property-details.html">
                                    <img src="https://via.placeholder.com/600x415" alt="">
                                </a>
                                <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Vente</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <a href="demo-real-estate-property-details.html" class="alt-font text-dark-gray fw-700 fs-22 me-10px">Modern house in Texas</a>
                                    </div>
                                    <p class="mb-20px">3259 Filbert street bethlehem</p>
                                    <div class="row g-0">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">04</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Chambres</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">04</span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Salles de bains</span>
                                        </div>
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">620m<sup>2</sup></span>
                                            </div>
                                            <span class="d-block lh-18 fs-15">Surface habitable</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="demo-real-estate-property-details.html" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600 " style="font-size: 8px;">Voir les détails</a>
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
                <div class="row">
                    <div class="mt-5 xs-mt-10 d-flex justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start pagination -->
                        <ul class="pagination pagination-style-01 fs-13 alt-font fw-600 mb-0">
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                        </ul>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="overflow-hidden position-relative overlap-height pb-30px">
            <div class="container overlap-gap-section">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 md-mb-50px">
                        <span class="fs-20 d-inline-block mb-15px text-base-color" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Comment fonctionne le marché immobilier</span>
                        <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none sm-w-80 xs-w-100" data-shadow-animation="true" data-animation-delay="700" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>Étape pour acheter une <span class="fw-700 text-highlight">propriété de rêve.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2>
                        <div class="row row-cols-1 mt-50px"  data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-base-color-light alt-font fs-15 fw-600 position-relative">
                                            <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                            <div class="box-overlay bg-base-color rounded-circle"></div>
                                        </div>
                                        <span class="progress-step-separator bg-extra-medium-gray"></span>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Recherche de biens immobiliers</span>
                                        <p class="w-80 lg-w-100">BHC-Immobilier est simplement la norme de l'industrie de la composition et de l'impression factice.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-base-color-light alt-font fs-15 fw-600 fw-600 position-relative">
                                            <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                            <div class="box-overlay bg-base-color rounded-circle"></div>
                                        </div>
                                        <span class="progress-step-separator bg-extra-medium-gray"></span>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Sélectionnez votre favori</span>
                                        <p class="w-80 lg-w-100">Lorem ipsum simply dummy printing typesetting industry's standard.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                            <!-- start process step item -->
                            <div class="col-12 process-step-style-05 position-relative hover-box">
                                <div class="process-step-item d-flex">
                                    <div class="process-step-icon-wrap position-relative">
                                        <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-55px w-55px bg-base-color-light alt-font fs-15 fw-600 fw-600 position-relative">
                                            <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                            <div class="box-overlay bg-base-color rounded-circle"></div>
                                        </div>
                                    </div>
                                    <div class="process-content ps-35px last-paragraph-no-margin mb-30px">
                                        <span class="text-dark-gray fs-19 alt-font mb-5px fw-600 d-block">Prenez votre clé de propriété</span>
                                        <p class="w-80 lg-w-100">Lorem ipsum simply dummy printing typesetting industry's standard.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end process step item -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 position-relative" data-anime='{ "effect": "slide", "color": "#262b35", "direction":"tb", "easing": "easeOutQuad", "delay":50}'>
                        <figure class="position-relative m-0">
                            <img src="https://via.placeholder.com/697x671" alt="">
                            <figcaption class="position-absolute top-50 translate-middle-y left-0px d-none d-md-block">
                                <img src="https://via.placeholder.com/151x151" class="animation-float" alt="">
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="col-12 text-center align-items-center">
                        <div class="bg-white border border-1 border-color-extra-medium-gray box-shadow-extra-large alt-font fs-12 fw-700 text-dark-gray text-uppercase border-radius-30px ps-20px pe-20px me-10px sm-me-0 sm-m-5px d-inline-block align-middle">Fun facts</div>
                        <div class="fs-22 text-dark-gray d-block d-sm-inline-block align-middle alt-font fw-600">Les agences de notation les plus connues au monde avec lesquelles nous avons travaillé.</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

@endsection

@push('scripts')
    {{--  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
