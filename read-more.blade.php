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

</style>

@endpush


@section('content')

<!-- start page title -->
<section class="cover-background page-title-big-typography ipad-top-space-margin">
    <div class="container">
        <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
            <!-- Carrousel d'images -->
            <div class="col-12 position-relative mb-30px">
                <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Images du carrousel -->
                        @foreach($annonce->images as $index => $image)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100" alt="Image">
                            </div>
                        @endforeach
                    </div>
                    <!-- Boutons de navigation -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Texte -->
            <div class="col-xl-7 col-lg-8 position-relative page-title-extra-small md-mb-30px md-mt-auto">
                <h3 class="alt-font fw-600 text-dark-gray mb-15px ls-minus-1px">{{ $annonce->titre }}</h3>
                <h1 class="mb-0 d-flex">
                    <i class="feather icon-feather-map-pin icon-extra-medium text-base-color me-5px"></i>
                    {{ $annonce->adresse }}
                </h1>
            </div>
            <div class="col-lg-3 offset-xl-2 offset-lg-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                <h4 class="text-dark-gray fw-700 alt-font mb-5px">${{ number_format($annonce->prix, 0, '.', ',') }}</h4>
                <span class="fw-500 fs-18">${{ number_format($annonce->prix / $annonce->surface, 2) }} - Per sq. ft.</span>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->


<!-- start section -->
<section class="pt-30px pb-30px border-bottom border-color-extra-medium-gray">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
            <div class="col text-center border-end xs-border-end-0 border-color-extra-medium-gray alt-font md-mb-15px">
                <span class="fs-19 text-dark-gray fw-600">Property size:</span> {{ $annonce->surface }} sq ft
            </div>
            <div class="col text-center border-end md-border-end-0 border-color-extra-medium-gray alt-font md-mb-15px">
                <span class="fs-19 text-dark-gray fw-600">Year built:</span> {{ $annonce->created_at->format('Y') }}
            </div>
            <div class="col text-center border-end xs-border-end-0 border-color-extra-medium-gray alt-font sm-mb-15px">
                <span class="fs-19 text-dark-gray fw-600">Accommodation:</span> {{ $annonce->draft ? 'Furnished' : 'Not Furnished' }}
            </div>
            <div class="col text-center alt-font">
                <span class="fs-19 text-dark-gray fw-600">Heating:</span> {{ $annonce->draft ? 'TA furnace' : 'Unknown' }}
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
                        <span class="text-dark-gray fs-24 fw-600 alt-font mb-15px d-block">Property description</span>
                        <p>{{ $annonce->description }}</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col bg-very-light-gray p-35px lg-ps-15px lg-pe-15px border-radius-6px fs-16">
                        <div class="row row-cols-2 row-cols-md-4 row-cols-sm-2">
                            <div class="col text-center border-end border-color-extra-medium-gray sm-mb-30px">
                                <img src="images/demo-real-estate-icon-bed.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">4 Bedrooms</span>
                            </div>
                            <div class="col text-center border-end sm-border-end-0 border-color-extra-medium-gray sm-mb-30px">
                                <img src="images/demo-real-estate-icon-bath.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">4 Bathrooms</span>
                            </div>
                            <div class="col text-center border-end border-color-extra-medium-gray">
                                <img src="images/demo-real-estate-icon-car.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">2 Parking</span>
                            </div>
                            <div class="col text-center">
                                <img src="images/demo-real-estate-icon-swimming.svg" class="w-50px mb-15px" alt="">
                                <span class="text-dark-gray d-block lh-20">Swimming pool</span>
                            </div>
                        </div>
                    </div>
                    <div class="ps-45px pe-45px pt-35px pb-45px xs-p-25px contact-form-style-01 mt-0">
                        <div class="mb-20px last-paragraph-no-margin">
                            <p class="mb-0 alt-font fw-500 text-dark-gray">
                                <i class="feather icon-feather-phone-call icon-small text-base-color me-10px"></i>
                                <span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Phone:</span>
                                <a href="tel:{{ $annonce->user->phone }}" class="text-dark-gray text-base-color-hover">{{ $annonce->user->phone }}</a>
                            </p>
                            <p class="alt-font fw-500 text-dark-gray">
                                <i class="feather icon-feather-mail icon-small text-base-color me-10px"></i>
                                <span class="fw-600 w-20 sm-w-15 xs-w-20 d-inline-block">Email:</span>
                                <a href="mailto:{{ $annonce->user->email }}" class="text-dark-gray text-decoration-line-bottom">{{ $annonce->user->email }}</a>
                            </p>
                        </div>
                        <span class="alt-font fs-20 fw-600 text-dark-gray d-block mb-25px">Leave your message here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="pt-0 pb-30px position-relative overlap-height overflow-hidden">
    <div class="container-fluid overlap-gap-section">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h3 class="alt-font text-dark-gray fw-500 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Best review by <span class="fw-700 text-highlight d-inline-block">happy customer<span class="bg-base-color h-10px bottom-5px opacity-3 separator-animation"></span></span></h3>
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/148x148" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/148x148" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/148x148" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/200x200" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/200x200" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/148x148" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/148x148" alt="" />
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
                                    <img class="rounded-circle w-110px h-110px md-w-80px md-h-80px me-25px md-me-20px" src="https://via.placeholder.com/148x148" alt="" />
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


@endsection

@push('scripts')
    {{--  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
