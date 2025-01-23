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
                <h1 class="text-base-color">Rent your dream property</h1>
                <h2 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none"
                    data-shadow-animation="true"
                    data-animation-delay="700">
                    Help you find the
                    <span class="fw-300 text-highlight d-inline-block">perfect one.
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
                    Online property marketplace to buy, sell, and rent residential and commercial properties.
                    Used by millions of renters to find property.
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
                        <img src="https://via.placeholder.com/1920x600" alt="" class="w-100">
                        <div class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 position-absolute right-minus-170px lg-right-0px bottom-50px md-bottom-minus-60px xs-bottom-minus-50px text-white text-outline ls-minus-5px lg-right-0px text-outline-width-2px z-index-2" data-bottom-top="transform: translate3d(80px, 0px, 0px);" data-top-bottom="transform: translate3d(-280px, 0px, 0px);">rentals</div>
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
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Apartment</span>
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
                                        <span class="btn-text">View all property</span>
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
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Home</span>
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
                                        <span class="btn-text">View all property</span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col transition-inner-all xs-mb-30px">
                        <div class="bg-base-color h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-35px pb-35px ps-40px pe-40px lg-ps-25px lg-pe-25px">
                            <span class="fs-24 lh-26 d-inline-block alt-font text-white fw-500 mb-0"><span class="fw-700 d-block fs-45 mb-10px">18,350</span> Newly listed properties</span>
                        </div>
                    </div>
                    <div class="col transition-inner-all">
                        <div class="bg-white h-100 box-shadow-quadruple-large box-shadow-medium-hover border-radius-6px pt-25px pb-25px ps-40px pe-40px lg-p-25px">
                            <!-- start features box item -->
                            <div class="feature-box feature-box-left-icon-middle text-start">
                                <div class="feature-box-content">
                                    <span class="d-block alt-font fw-600 text-base-color ls-05px">Office</span>
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
                                        <span class="btn-text">View all property</span>
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
            Latest property for
            <span class="fw-700 text-highlight">rent
                <span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span>
            </span>
        </h3>
        <!-- Barre de recherche ajoutée ici -->
      <div class="search-bar mt-4">
    <form action="{{route('search')}}" method="GET" class="d-flex justify-content-center">
        <input type="text" name="critere" class="form-control w-50" placeholder="Rechercher par prix, description, titre..." required />
        <button type="submit" class="btn btn-primary ms-2">Rechercher</button>
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
                                        <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                        <span class="fw-600 alt-font text-dark-gray">{{ $result->surface }} m<sup>2</sup></span>
                                    </div>
                                    <span class="d-block lh-18 fs-15">Surface</span>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <img src="images/demo-real-estate-icon-price-small.svg" class="me-5px h-20px" alt="">
                                        <span class="fw-600 alt-font text-dark-gray">${{ $result->prix }}</span>
                                    </div>
                                    <span class="d-block lh-18 fs-15">Prix</span>
                                </div>
                            </div>
                        </div>
                        <div class="row ps-35px pe-35px pt-20px pb-20px md-ps-25px md-pe-25px align-items-center">
                            <div class="col">
                                <a href="{{ route('posts.show', $result->id) }}" class="btn btn-dark-gray btn-very-small btn-round-edge fw-600">Voir les détails</a>
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
@else
    <!-- Message Aucun Résultat -->
    <p class="text-center mt-4">Aucun résultat trouvé.</p>
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
                        <h5 class="alt-font fw-500 text-dark-gray">Our best trading partners with <span class="text-red fs-28 ms-5px me-5px align-middle">&#x2764;</span><strong class="text-decoration-line-bottom-medium">love peoples.</strong></h5>
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
        <!-- start footer -->
        <footer class="footer-light bg-gradient-very-light-gray pb-0">
            <div class="container position-relative pt-3 pb-3 overlap-section md-mb-15px">
                <div class="position-absolute left-0px top-0px background-no-repeat background-size-100 h-100 w-100 animation-float" style="background-image: url('https://via.placeholder.com/1190x262')"></div>
                <!-- start newsletter -->
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center align-items-center bg-base-color pt-4 pb-4 ps-6 pe-6 lg-p-5 border-radius-6px g-0">
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
@endsection


@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
