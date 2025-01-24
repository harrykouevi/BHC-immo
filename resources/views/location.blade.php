<@extends('layouts.app')

@section('title', 'Accueil')

@push('css')
    <!-- style sheets and font icons  -->
@endpush

@section('content')

    <!-- start page title -->
    <section class="cover-background page-title-big-typography ipad-top-space-margin">
        <div class="container">
            <div class="row align-items-center justify-content-center g-0">
                <!-- Section gauche avec les titres -->
                <div class="col-xxl-5 col-xl-6 col-lg-7 page-title-extra-small md-mb-30px"
                    data-anime='{
                        "el": "childs",
                        "translateY": [30, 0],
                        "opacity": [0,1],
                        "duration": 600,
                        "delay": 0,
                        "staggervalue": 300,

                        "easing": "easeOutQuad"
                    }'>
                    <h1 class="text-base-color">Louez votre propriété de rêve</h1>
                    <h2 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none"
                        data-shadow-animation="true"
                        data-animation-delay="700">
                        A vos côtés pour
                        <span class="fw-300 text-highlight d-inline-block">dénicher l'idéale.
                            <span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span>
                        </span>
                    </h2>
                </div>

                <!-- Section droite avec la description -->
                <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px">
                    <span class="d-block w-85 lg-w-100 text-description"
                        data-anime='{
                            "el": "lines",
                            "translateY": [15, 0],
                            "opacity": [0,1],
                            "duration": 600,
                            "delay": 0,
                            "staggervalue": 300,
                            "easing": "easeOutQuad"
                        }'>
                        Marketplace immobilier en ligne pour acheter, vendre et louer des biens résidentiels et commerciaux.
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="overflow-hidden position-relative p-0">
        <div class="opacity-very-light bg-dark-gray z-index-1"></div>
        <div class="container-fluid">
            <div class="row overlap-height">
                <div class="col-12 p-0 position-relative overlap-gap-section">
                    <img src="{{ asset('img/banner-001 - Copie.jpg') }}" alt="" class="w-100">
                    <div class="alt-font fw-600 fs-250 lg-fs-275 md-fs-250 xs-fs-160 position-absolute right-minus-170px lg-right-0px bottom-130px md-bottom-minus-60px xs-bottom-minus-50px text-white text-outline ls-minus-5px lg-right-0px text-outline-width-2px z-index-2" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">Locations</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray z-index-3 position-relative">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 overlap-section md-overlap-disable overlap-section-one-fourth justify-content-center" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col transition-inner-all md-mb-30px">
                    <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                        <!-- start features box item -->
                        <div class="feature-box feature-box-left-icon-middle text-start">
                            <div class="feature-box-content">
                                <span class="d-block alt-font fw-600 text-base-color ls-05px">Appartement</span>
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
                                    <span class="btn-text">Voir toutes les propriétés</span>
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
                                <span class="d-block alt-font fw-600 text-base-color ls-05px">Maison</span>
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
                                    <span class="btn-text">Voir toutes les propriétés</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col transition-inner-all xs-mb-30px">
                    <div class="bg-base-color h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-35px pb-35px ps-40px pe-40px lg-ps-25px lg-pe-25px">
                        <span class="fs-24 lh-26 d-inline-block alt-font text-white fw-500 mb-0"><span class="fw-700 d-block fs-45 mb-10px">18,350</span> Propriétés nouvellement listées</span>
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
                                    <span class="btn-text">Voir toutes les propriétés</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 xs-mb-10 pt-9" id="rentals">
                <div class="col-12 text-center">
                    <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none"
                        data-shadow-animation="true"
                        data-animation-delay="700"
                        data-anime='{
                            "translateY": [30, 0],
                            "opacity": [0,1],
                            "duration": 600,
                            "delay": 0,
                            "staggervalue": 300,
                            "easing": "easeOutQuad"
                        }'>
                        Nos dernières offres
                        <span class="fw-700 text-highlight">de location
                            <span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span>
                        </span>
                    </h3>
                    <!-- Barre de recherche ajoutée ici -->
                    <div class="search-bar mt-4">
                        <form action="{{route('search')}}" method="GET" class="d-flex justify-content-center">
                            <input type="text" name="critere" class="form-control w-50" placeholder="Rechercher par prix, description, titre..." required />
                            <button type="submit" class="btn btn-primary ms-2 " style="background-color:green;">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- start box item -->
            @if(session('results') && session('results')->isNotEmpty())
            <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- Boucle sur les résultats -->
                @foreach(session('results') as $result)
                    <div class="col mb-30px">
                        <div class="border-radius-6px overflow-hidden box-shadow-large">
                            <div class="image position-relative">
                                <a href="#">
                                    <!-- Image Dynamique ou Placeholder -->
                                    <img src="{{ $result->images->first() ? asset('storage/' . $result->images->first()->path) : 'https://via.placeholder.com/600x415' }}" alt="Image de {{ $result->titre }}">
                                </a>
                                <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent</div>
                            </div>
                            <div class="bg-white">
                                <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                    <div class="d-flex align-items-center">
                                        <!-- Titre Dynamique -->
                                        <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ $result->titre }}</a>
                                    </div>
                                    <!-- Adresse Dynamique -->
                                    <p class="mb-20px">{{ $result->adresse }}</p>
                                    <div class="row g-0">
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                        <span class="fw-600 alt-font text-dark-gray">{{ $result->nb_pieces }} </span>
                                                    </div>
                                                    <span class="d-block lh-18 fs-15">Chambres</span>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                        <span class="fw-600 alt-font text-dark-gray">{{ $result->wc_douche }}</span>
                                                    </div>
                                                    <span class="d-block lh-18 fs-15">WC douche</span>
                                                </div>
                                                <div class="col">
                                                    <div class="d-flex align-items-center">
                                                        <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                        <span class="fw-600 alt-font text-dark-gray">{{ $result->surface }}m<sup>2</sup></span>
                                                    </div>
                                                    <span class="d-block lh-18 fs-15">Living area</span>
                                                </div>
                                            </div>
                                        </div>
                                <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                    <div class="col">
                                        <a href="#" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Détails</a>
                                    </div>
                                    <div class="col text-end">
                                        <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">${{ $result->prix }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @elseif(isset($annonces) && $annonces->isNotEmpty())
            <div class="row row-cols-1 row-cols-xl-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                @foreach($annonces as $annonce) <!-- Boucle sur les annonces -->
                    <div class="col mb-30px">
                            <div class="border-radius-6px overflow-hidden box-shadow-large">
                                <div class="image position-relative">
                                    <a href="#">
                                        <!-- Image Dynamique ou Placeholder -->
                                        <img src="{{ $annonce->images->first() ? asset('storage/' . $annonce->images->first()->path) : 'https://via.placeholder.com/600x415' }}" alt="Image de {{ $annonce->titre }}">
                                    </a>
                                    <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">Rent</div>
                                </div>
                                <div class="bg-white">
                                    <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                                        <div class="d-flex align-items-center">
                                            <!-- Titre Dynamique -->
                                            <a href="#" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ $annonce->titre }}</a>
                                        </div>
                                        <!-- Adresse Dynamique -->
                                        <p class="mb-20px">{{ $annonce->adresse }}</p>
                                        <div class="row g-0">
                                                    <div class="col">
                                                        <div class="d-flex align-items-center">
                                                            <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                            <span class="fw-600 alt-font text-dark-gray">{{ $annonce->nb_pieces }} </span>
                                                        </div>
                                                        <span class="d-block lh-18 fs-15">Chambres</span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="d-flex align-items-center">
                                                            <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                            <span class="fw-600 alt-font text-dark-gray">{{ $annonce->wc_douche }}</span>
                                                        </div>
                                                        <span class="d-block lh-18 fs-15">WC douche</span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="d-flex align-items-center">
                                                            <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                            <span class="fw-600 alt-font text-dark-gray">{{ $annonce->surface }}m<sup>2</sup></span>
                                                        </div>
                                                        <span class="d-block lh-18 fs-15">Living area</span>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                                        <div class="col">
                                            <a href="#" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Détails</a>
                                        </div>
                                        <div class="col text-end">
                                            <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">${{ $annonce->prix }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

            @else
            <p>Problème de chargement des annonces.</p>
            @endif


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
                    <h5 class="alt-font fw-500 text-dark-gray">Nos meilleurs partenaires commerciaux, <span class="text-red fs-28 ms-5px me-5px align-middle"></span><strong class="text-decoration-line-bottom-medium">au service des gens avec ❤ passion.</strong></h5>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
