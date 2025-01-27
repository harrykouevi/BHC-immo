@extends('layouts.app')

@section('title', 'Location')

@push('css')

    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />

<style>
    .carousel {
        position: relative;
        width: 100%;
        height: 400px; /* Ajustez la hauteur selon vos besoins */
        overflow: hidden;
    }

    .carousel-item {
        width: 100%;
        height: 100%;
    }

    .carousel-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel-control-prev, .carousel-control-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5); /* Fond semi-transparent pour les contrôles */
        color: white;
        border: none;
        padding: 10px;
        cursor: pointer;
        z-index: 10;
    }

    .carousel-control-prev {
        left: 10px;
    }

    .carousel-control-next {
        right: 10px;
    }

    .image-container {
    width: 300px; /* Largeur fixe */
    height: 300px; /* Hauteur fixe */
    overflow: hidden; /* Pour éviter que l'image déborde du conteneur */
    position: relative; /* Nécessaire pour le positionnement des images si besoin */
    }

    .responsive-image {
        width: 100%; /* L'image prendra toute la largeur du conteneur */
        height: 100%; /* L'image prendra toute la hauteur du conteneur */
        object-fit: cover; /* Ajuste l'image pour remplir le conteneur tout en conservant son ratio */
    }


</style>

@endpush


@section('content')


<!-- start page title -->
<section class="cover-background page-title-big-typography ipad-top-space-margin">
    <div class="container">
        <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
            <div class="col-xl-7 col-lg-8 position-relative page-title-extra-small md-mb-30px md-mt-auto" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font fw-600 text-dark-gray mb-15px ls-minus-1px">{{ $post?->titre  }}</h3>
                <h1 class="mb-0 d-flex"><i class="feather icon-feather-map-pin icon-extra-medium text-base-color me-5px"></i>{{ $post?->adresse }}</h1>
            </div>
            <div class="col-lg-3 offset-xl-2 offset-lg-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                <h4 class="text-dark-gray fw-700 alt-font mb-5px">{{$post?->prix}} FCFA</h4>
                {{-- <span class="fw-500 fs-18">$3,700 - Per sq. ft.</span> --}}
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="p-0 overflow-hidden">
    <div class="container-fluid p-0">
        <div class="row row-cols-1 justify-content-center">
            <!-- start content carousal item -->
            <div class="col">
                <div class="swiper magic-cursor slider-four-slide swiper-dark-pagination swiper-pagination-style-3" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 20, "loop": true, "pagination": { "el": ".slider-four-slide-pagination", "clickable": true }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper">
                        <!-- start content carousal item -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/626x600" alt="" class="w-100" />
                        </div>
                        <!-- end content carousal item -->
                        <!-- start content carousal item -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/626x600" alt="" class="w-100" />
                        </div>
                        <!-- end content carousal item -->
                        <!-- start content carousal item -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/626x600" alt="" class="w-100" />
                        </div>
                        <!-- end content carousal item -->
                        <!-- start content carousal item -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/626x600" alt="" class="w-100" />
                        </div>
                        <!-- end content carousal item -->
                        <!-- start content carousal item -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/626x600" alt="" class="w-100" />
                        </div>
                        <!-- end content carousal item -->
                        <!-- start content carousal item -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/626x600" alt="" class="w-100" />
                        </div>
                        <!-- end content carousal item -->
                    </div>
                    <!-- start slider navigation -->
                    <!-- <div class="slider-one-slide-prev-1 icon-very-small bg-white h-40px w-40px swiper-button-prev slider-navigation-style-01"><i class="feather icon-feather-arrow-left fs-20 text-light-gray"></i></div>
                    <div class="slider-one-slide-next-1 icon-very-small bg-white h-40px w-40px swiper-button-next slider-navigation-style-01"><i class="feather icon-feather-arrow-right fs-20 text-light-gray"></i></div> -->
                    <!-- end slider navigation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-30px pb-30px border-bottom border-color-extra-medium-gray">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <div class="col text-center border-end xs-border-end-0 border-color-extra-medium-gray alt-font md-mb-15px">
                <span class="fs-19 text-dark-gray fw-600">Surface : </span> {{ $post->surface }}m<sup>2</sup>
            </div>
            <div class="col text-center border-end md-border-end-0 border-color-extra-medium-gray alt-font md-mb-15px">
                {{-- <span class="fs-19 text-dark-gray fw-600">Year built:</span> 2016 --}}
            </div>
            <div class="col text-center border-end xs-border-end-0 border-color-extra-medium-gray alt-font sm-mb-15px">
                {{-- <span class="fs-19 text-dark-gray fw-600">Accommodation:</span> Furnished --}}
            </div>
            <div class="col text-center alt-font">
                {{-- <span class="fs-19 text-dark-gray fw-600">Heating:</span> TA furnace --}}
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 md-mb-50px">
                <div class="row mb-15px">
                    <div class="col-12">
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Description de l'annonce</span>
                        <p>{{$post->description}}</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col bg-very-light-gray p-35px lg-ps-15px lg-pe-15px border-radius-6px fs-16">
                        <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2">
                            <div class="col text-center border-end border-color-extra-medium-gray sm-mb-30px">
                                <img src="images/demo-real-estate-icon-bed.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">{{$post->nbpieces}} Chambres</span>
                            </div>
                            <div class="col text-center border-end sm-border-end-0 border-color-extra-medium-gray sm-mb-30px">
                                <img src="images/demo-real-estate-icon-bath.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">{{$post->wcdouche}} Toilettes</span>
                            </div>
                            <div class="col text-center border-end border-color-extra-medium-gray">
                                <img src="images/demo-real-estate-icon-car.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">Parking</span>
                            </div>
                            <div class="col text-center">
                                <img src="images/demo-real-estate-icon-swimming.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">Piscine</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-12">
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Specifications</span>
                    </div>
                    <div class="col-xl-6">
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-08.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Property ID:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">GE-G612</div>
                        </div>
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-09.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Property type:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">Single Family</div>
                        </div>
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-12.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Property size:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">1400 Sq Ft</div>
                        </div>
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-15.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Cooling:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">Yes</div>
                        </div>
                        <div class="row g-0 align-items-center lg-mb-15px lg-pb-15px lg-border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-13.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Swimming pool:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">No</div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-06.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Parking:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">3 Car garage</div>
                        </div>
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-11.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Heating:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">Yes</div>
                        </div>
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-10.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Outdoor:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">Porch & Patio</div>
                        </div>
                        <div class="row g-0 align-items-center mb-15px pb-15px border-bottom border-color-extra-medium-gray">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-14.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Year built:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">2013</div>
                        </div>
                        <div class="row g-0 align-items-center">
                            <div class="col">
                                <!-- start features box item -->
                                <div class="feature-box feature-box-left-icon-middle last-paragraph-no-margin">
                                    <div class="feature-box-icon me-10px">
                                        <img src="images/demo-real-estate-property-details-09.svg" class="w-25px" alt="">
                                    </div>
                                    <div class="feature-box-content">
                                        <span class="text-dark-gray">Total floors:</span>
                                    </div>
                                </div>
                                <!-- end features box item -->
                            </div>
                            <div class="col">03</div>
                        </div>
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-12">
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Localisation</span>
                    </div>
                    <div class="col-12">
                        <div id="map" class="map small-screen border-radius-6px" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Dark", "marker": { "type": "HTML", "color": "#06af47" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Real Estate</strong><p class=\"alt-font\">401 Broadway, 24th Floor, Orchard View, London, UK</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-12">
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Caractéristiques</span>
                    </div>
                    <div class="col-6 col-sm-4">
                        <!-- start list style -->
                        <ul class="list-style-02 ps-0 mb-0">
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Refrigirateur</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Salle de Gym</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Machine a laver</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Barbeque</li>
                        </ul>
                        <!-- end list style -->
                    </div>
                    <div class="col-6 col-sm-4">
                        <!-- start list style -->
                        <ul class="list-style-02 ps-0 mb-0">
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Cintres</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Micro-ondes</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Sauna</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Séchoir</li>
                        </ul>
                        <!-- end list style -->
                    </div>
                    <div class="col-6 col-sm-4">
                        <!-- start list style -->
                        <ul class="list-style-02 ps-0 mb-0">
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Lessive</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Douche</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Internet</li>
                            <li><i class="bi bi-check-circle icon-small me-10px"></i>Outdoor</li>
                        </ul>
                        <!-- end list style -->
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-12">
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Plan du rez-de-chaussée</span>
                        @foreach($post->images as $image)
                            <img src="{{ asset('storage/'.$image->path) }}" alt="Image" class="responsive-image" style="width: 300px; height: 300px; padding:3px;">
                        @endforeach
                    </div>
                </div>
                <div class="row mt-7">
                    <div class="col-12">
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-25px d-block">Plan du premier étage</span>
                    </div>
                </div>
            </div>
            <!-- start sticky -->
            <div class="col-xl-4 offset-xl-1 col-lg-5">
                <div class="bg-base-color-light border-radius-6px position-sticky top-120px">

                    <div class="ps-45px pe-45px pt-35px pb-45px xs-p-25px contact-form-style-01 mt-0">
                        <span class="alt-font fs-20 fw-600 text-dark-gray d-block mb-25px">Nous contacter autrement</span>
                        <div class="mb-20px last-paragraph-no-margin">
                            <p class="mb-0 alt-font fw-500 text-dark-gray"><i class="feather icon-feather-phone-call icon-small text-base-color me-10px"></i><span class="fw-600  d-inline-block">Téléphone:</span><a href="tel:12345678910" class="text-dark-gray text-base-color-hover">+1 234 567 8910</a></p>
                            <p class="alt-font fw-500 text-dark-gray"><i class="feather icon-feather-mail icon-small text-base-color me-10px"></i><span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Email:</span><a href="mailto:info@domain.com" class="text-dark-gray text-decoration-line-bottom">info@domain.com</a></p>
                            <div class="elements-social social-icon-style-02 mt-5px w-100 text-start ">
                                <ul class="medium-icon">
                                    <li class="m-0"><a class="facebook text-black" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li class="m-0"><a class="dribbble text-black" href="http://www.tiktok.com" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="alt-font fs-20 fw-600 text-dark-gray d-block mb-25px">Laisser un commentaire</span>
                        <div>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <!-- start contact form -->
                        <form action="{{ route('reviews.store', $post->id) }}" method="POST">
                            @csrf <!-- Inclure le token CSRF pour la sécurité -->
                            <input type="hidden" name="annonce_id" value="{{ $post->id }}"> <!-- Passer l'ID de l'annonce -->

                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                <input type="text" name="name" class="form-control border-color-white box-shadow-large required" placeholder="Votre nom*" required />
                            </div>
                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control border-color-white box-shadow-large required" placeholder="Votre adresse e-mail*" required />
                            </div>
                            <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="bi bi-telephone-outbound"></i></span>
                                <input type="tel" name="phone" class="form-control border-color-white box-shadow-large" placeholder="Votre téléphone" />
                                {{-- <input type="text" name="name" class="form-control border-color-white box-shadow-large required" placeholder="Votre Nom*" /> --}}
                            </div>
                            {{-- <div class="position-relative form-group mb-15px">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control border-color-white box-shadow-large required" placeholder="Téléphone /addresse email *" />
                            </div> --}}

                            <div class="position-relative form-group form-textarea">
                                <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                <textarea placeholder="Votre message" name="comment" class="form-control border-color-white box-shadow-large" rows="3" required></textarea>
                                {{-- <button class="btn btn-small btn-round-edge btn-base-color mt-20px " type="submit">Envoyer</button> --}}
                                {{-- <textarea placeholder="Ecrivez votre commentaire" name="comment" class="form-control border-color-white box-shadow-large" rows="3"></textarea>
                                <input type="hidden" name="redirect" value=""> --}}
                                {{-- <div class="form-results mt-20px d-none"></div> --}}
                            </div>
                            <button class="btn btn-small btn-round-edge btn-base-color mt-20px " type="submit">Commenter</button>
                        </form>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
            <!-- end sticky -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-gradient-very-light-gray">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Propriétés <span class="fw-700 text-highlight d-inline-block">similaires<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-2 row-cols-md-2 justify-content-center">
            @foreach($annonces as $annonce) <!-- Boucle sur les posts -->
            <!-- start box item -->
            <div class="col mb-30px">
                <div class="border-radius-6px overflow-hidden box-shadow-large">
                    <div class="image position-relative">
                        <div class="col-auto bg-orange border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">{{ $annonce->category ? $annonce->category->nom : 'Aucune catégorie' }}</div>
                        <a href="Souscrivez"> <!-- Lien vers l'annonce -->
                            <img src="{{ $annonce->images->first() ? asset('storage/' . $annonce->images->first()->path) : 'https://via.placeholder.com/600x415' }}" alt="Image de {{ $annonce->titre }}">

                        </a>
                        <div class="col-auto bg-base-color border-radius-50px ps-15px pe-15px text-uppercase alt-font fw-600 text-white fs-12 lh-24 position-absolute left-20px top-20px">{{ $annonce->type }}</div> <!-- Type de l'annonce (Vente/Location) -->
                    </div>
                    <div class="bg-white">
                        <div class="content ps-40px pe-40px pt-35px pb-35px md-p-25px border-bottom border-color-transparent-dark-very-light">
                            <div class="d-flex align-items-center">
                                <a href="Souscrivez" class="alt-font text-dark-gray fw-700 fs-22 me-10px">{{ $annonce->titre }}</a> <!-- Titre de l'annonce -->
                            </div>
                            <p class="mb-20px">{{ $annonce->address }}</p> <!-- Adresse de l'annonce -->
                            <div class="row g-0">
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/demo-real-estate-icon-bed-small.svg') }}" class="me-5px h-20px" alt="">
                                        <span class="fw-600 alt-font text-dark-gray">{{ $annonce->nbpieces }}</span> <!-- Nombre de chambres -->
                                    </div>
                                    <span class="d-block lh-18 fs-15">Chambre</span>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/demo-real-estate-icon-bath-small.svg') }}" class="me-5px h-20px" alt="">
                                        <span class="fw-600 alt-font text-dark-gray">{{ $annonce->wcdouche }}</span> <!-- Nombre de salles de bain -->
                                    </div>
                                    <span class="d-block lh-18 fs-15">Toilettes</span>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('images/demo-real-estate-icon-size-small.svg') }}" class="me-5px h-20px" alt="">
                                        <span class="fw-600 alt-font text-dark-gray">{{ $annonce->surface }}m<sup>2</sup></span> <!-- Surface habitable -->
                                    </div>
                                    <span class="d-block lh-18 fs-15">Surface</span>
                                </div>
                            </div>
                        </div>
                        <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                            <div class="col">
                                <a href="Souscrivez" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Details</a> <!-- Bouton détails -->
                            </div>
                            <div class="col text-end">
                                <span class="fs-24 alt-font text-dark-gray fw-700 mb-0">{{$annonce?->prix}} FCFA</span> <!-- Prix de l'annonce -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end box item -->
            @endforeach
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0 pb-30px position-relative overlap-height overflow-hidden">
    <div class="container-fluid overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Notre Sélection des meilleurs Avis de <span class="fw-700 text-highlight d-inline-block">Nos Clients<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 p-0 review-style-09">
                <div class="swiper slider-shadow-left-right lg-slider-shadow-none magic-cursor lg-ps-15px lg-pe-15px" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false },  "pagination": { "el": ".slider-three-slide-pagination", "clickable": true, "dynamicBullets": true }, "navigation": { "nextEl": ".slider-three-slide-next", "prevEl": ".slider-three-slide-prev" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1400": { "slidesPerView": 4 }, "1200": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper pt-30px pb-30px">
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div> --}}
                                        <span class="fw-600 alt-font text-dark-gray d-inline-block">Matthew taylor</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div> --}}
                                        <span class="fs-18 fw-600 alt-font text-dark-gray d-inline-block">Herman miller</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div> --}}
                                        <span class="fs-18 fw-600 alt-font text-dark-gray d-inline-block">Jacob kalling</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div> --}}
                                        <span class="fs-18 fw-600 alt-font text-dark-gray d-inline-block">Alexa harvard</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div> --}}
                                        <span class="fs-18 fw-600 alt-font text-dark-gray d-inline-block">Jhon smith</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div> --}}
                                        <span class="fw-600 alt-font text-dark-gray d-inline-block">Matthew taylor</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div> --}}
                                        <span class="fs-18 fw-600 alt-font text-dark-gray d-inline-block">Herman miller</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <!-- start review item -->
                            <div class="border-radius-10px bg-white box-shadow-double-large">
                                <div class="d-flex align-items-center p-40px md-p-25px">
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="{{ asset('img/logos/bhc-logo.png') }}" alt="" />
                                    <div>
                                        <p class="mb-10px lh-32">Lorem ipsum amet tempor incididunt nostrud dolore.</p>
                                        {{-- <div class="d-inline-block bg-orange text-white border-radius-3px ps-10px pe-10px fs-13 ls-minus-2px lh-28 me-10px md-me-5px sm-me-10px align-middle">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div> --}}
                                        <span class="fs-18 fw-600 alt-font text-dark-gray d-inline-block">Jacob kalling</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end review item -->
                        </div>
                        <!-- end slider item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->

@endsection

@push('scripts')

    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const carousel = new bootstrap.Carousel(document.getElementById('imageCarousel'), {
            interval: 5000, // Automatiquement passer à l'image suivante toutes les 5 secondes
            ride: 'carousel' // Démarre le carrousel automatiquement à l'ouverture
        });

        const prevButton = document.querySelector('.carousel-control-prev');
        const nextButton = document.querySelector('.carousel-control-next');

        prevButton.addEventListener('click', () => {
            carousel.prev();
        });

        nextButton.addEventListener('click', () => {
            carousel.next();
        });
        });

    </script>

    {{--  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
