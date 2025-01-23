@extends('layouts.app')

@section('title', 'Contact-Us')

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
                        <h1 class="text-base-color">A propos de nous</h1>
                        <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Bienvenue dans <span class="fw-700 text-highlight d-inline-block"><span class="bg-base-color h-10px bottom-3px opacity-3 separator-animation"></span></span>un business rentable.</h2>
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Marketplace immobilier en ligne pour acheter, vendre et louer des biens résidentiels et commerciaux.</span>
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
                                <span class="alt-font fs-100 fw-700 text-white d-block position-relative z-index-1">10</span>
                                <div class="alt-font fw-500 fs-24 d-block text-dark-gray lh-26 ls-minus-05px">années d' <span class="fw-700">experience.</span></div>
                                <div class="h-150px w-150px border-radius-100 bg-base-color position-absolute left-minus-10px top-minus-50px z-index-0"></div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 mb-8 order-1 order-lg-2 md-mb-40px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'> 
                        <span class="fs-20 d-inline-block mb-15px text-base-color">Marketplace immobilier en ligne</span> 
                        <h2 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">À vos côtés pour dénicher   <span class="fw-700 text-highlight d-inline-block">la meilleure place.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span></h2> 
                        <p class="w-80 lg-w-100">Marketplace immobilier en ligne pour acheter, vendre et louer des biens résidentiels et commerciaux.</p>
                        <div class="pt-20px pb-20px ps-30px pe-30px xs-p-20px border border-color-extra-medium-gray border-radius-6px mb-15px icon-with-text-style-08 w-80 lg-w-100">
                            <div class="feature-box feature-box-left-icon-middle">
                                <div class="feature-box-icon me-10px">
                                    <i class="bi bi-people icon-very-medium text-base-color"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span class="alt-font fw-600 text-dark-gray d-block fs-18 lh-26">10,000+ de gens font confiance à l'agence.</span>
                                </div>
                            </div>
                        </div>
                        <p class="fs-13 mb-35px xs-lh-20">Nos meilleures<span class="text-dark-gray text-decoration-line-bottom">selections</span> pour vous.</p>
                        <a href="demo-real-estate-agents.html" class="btn btn-dark-gray btn-medium btn-round-edge me-25px">Trusted agents</a> 
                        <a href="demo-real-estate-sell.html" class="btn btn-large btn-link btn-hover-animation-switch text-dark-gray p-0">
                            <span>
                                <span class="btn-text">Trouvez un immeuble</span>
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
                        <h3 class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Donnez des propriétés avec <span class="fw-700 text-highlight d-inline-block">qualité<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
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
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Nos amis Utilisateurs</span>
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
                                <span class="alt-font fw-600 text-dark-gray fs-20 d-inline-block mb-5px">Propriété de confiance</span>
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
                               Nous grandissons vite, nous comptons <span class="text-decoration-line-bottom">36k+ de propriétés actives.</span>
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
    <span class="fs-20 d-inline-block mb-15px text-base-color">Retour de nos clients</span>
    
    <h2 
        class="alt-font fw-500 text-dark-gray ls-minus-1px shadow-none" 
        data-shadow-animation="true" 
        data-animation-delay="700"
    >
        Voici les témoignages 
        <span class="fw-700 text-highlight d-inline-block">
            de nos 
            <span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span>
        </span> 
        clients
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
        @endsection
@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush