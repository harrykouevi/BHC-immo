@extends('layouts.app')

@section('title', 'Contact-Us')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />
@endpush


@section('content')
        <!-- start section -->
        <section class="bg-gradient-very-light-gray">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-12 text-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Offrir de la qualité avec <span class="fw-700 text-highlight d-inline-block">propriété<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
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
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Meilleures services</span>
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
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Propriété de confiance</span>
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
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Facile à utiliser</span>
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
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Conseiller juridique</span>
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
                               Nous grandissons vite! Aujourd'hui BHC a <span class="text-decoration-line-bottom">+de 10 résidence.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="position-relative overflow-hidden pt-0">
                    <div class="col-lg-5 offset-lg-1 col-md-10 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <span class="fs-20 d-inline-block mb-15px text-base-color">Avis des clients</span>
                        <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Voici ce que nos <span class="fw-700 text-highlight d-inline-block">clients<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span> ont à dire</h2>
                        <div class="swiper position-relative" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "fade" }'>
                            
                            <div class="swiper-wrapper mb-40px">
                                <!-- start text slider item -->
                            @foreach($avis as $avi)   
                    <div class="swiper-slide review-style-08">
    <!-- Témoignage -->
                     <p class="w-80 lg-w-100">{{ $avi->temoignage }}</p>
        <div class="mt-20px">
            <!-- Image (ajoutez une image par défaut ou personnalisée) -->
            <img class="rounded-circle w-95px h-95px me-15px" src="https://via.placeholder.com/148x148" alt="Client {{ $avi->nom_client }}">
            <div class="d-inline-block align-middle text-start">
                <!-- Nom du client -->
                <div class="text-dark-gray alt-font fs-20">
                    <span class="fw-700">{{ $avi->nom_client }}</span>
                </div>
                <!-- Affichage des étoiles -->
                <div class="review-star-icon fs-18">
                    @for ($i = 1; $i <= 5; $i++)
                        @if($i <= $avi->note)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Étoile pleine -->
                        @else
                            <i class="bi bi-star text-muted"></i> <!-- Étoile vide -->
                        @endif
                    @endfor
                </div>
            </div>
        </div>
</div>
@endforeach
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                               
                                <!-- end text slider item -->
                                
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
       @endsection


@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush