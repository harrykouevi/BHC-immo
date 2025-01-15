@extends('layouts.app')

@section('title', 'Location')

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
                <h1 class="text-base-color">Les meilleures propriétés à louer</h1>
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
                <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Dernière propriété à <span class="fw-700 text-highlight">Louer<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h3>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Location</div>
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
                <div class="row mb-2">
                    <div class="col-12 text-center">
                        <h5 class="alt-font fw-500 text-dark-gray">Nos meilleurs partenaires commerciaux avec <span class="text-red fs-28 ms-5px me-5px align-middle">&#x2764;</span><strong class="text-decoration-line-bottom-medium">des gens amoureux.</strong></h5>
                    </div>
                </div>
                <div class="row position-relative clients-style-08">
                    <div class="col swiper text-center feather-shadow mb-3" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper marquee-slide">
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-remax.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-zillow.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-realtor.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-redfin.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-trulia.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-remax.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-zillow.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                            <!-- start client item -->
                            <div class="swiper-slide">
                                <a href="#"><img src="images/logo-realtor.svg" alt="" class="h-35px xs-h-30px" /></a>
                            </div>
                            <!-- end client item -->
                        </div>
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
