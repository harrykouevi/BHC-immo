@extends('layouts.app')

@section('title', 'Contact-Us')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />
@endpush


@section('content')

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url({{ asset('images/banner-001.jpg') }}">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-5 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Contacter nous</h1>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Relations clients</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 md-mb-50px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="text-dark-gray fw-700 ls-minus-2px w-90 md-w-100">En quoi pouvons vous aidez? </h3>
                        <p class="w-95 md-w-100">Vous avez un projet en tête ? Ensemble, faisons-le grandir !</p>
                        <div class="row row-cols-1 justify-content-center mt-30px">
                            <!-- start features box item -->
                            <div class="col icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                    <div class="feature-box-icon feature-box-icon-rounded  w-80px h-80px rounded-circle me-20px" style="background-color : #23c2ff">
                                        <i class="bi bi-envelope text-white icon-very-medium"></i>
                                    </div>
                                    <div class="feature-box-content last-paragraph-no-margin">
                                        <span class="d-block ls-minus-05px">N'hésitez pas à nous contacter!</span>
                                        <span class="d-block fs-22 text-dark-gray ls-minus-05px fw-600"><a href="mailto:bhelpconsulting@gmail.com" class="text-dark-gray text-decoration-line-bottom">bhelpconsulting@gmail.com</a></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end features box item -->
                        </div>
                    </div>
                    <div class="col-lg-6 ps-50px lg-ps-15px">
                        <div class="row row-cols-1 row-cols-sm-1 justify-content-center">
                            <div class="col xs-mb-30px" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div class="bg-very-light-gray h-100 fs-17 lh-30 p-35px lg-p-25px border-radius-5px">
                                    {{-- <img src="https://via.placeholder.com/449x274" alt="" class="border-radius-4px mb-30px lg-mb-20px"> --}}
                                    <span class="alt-font text-dark-gray fs-19 fw-600 d-inline-block"> Business Help Consulting</span>
                                    <p class="mb-15px">Sagbado, à 100 mètres de la pharmacie Actuelle, sur la route de Ségbé,
                                        Lomé, Togo</p>
                                    <span class="d-block"><span class="text-dark-gray fw-600">Mobile:</span> <a href="">(+228) 92 03 50 12</a></span>
                                    <span class="d-block"><span class="text-dark-gray fw-600">Fix:</span> <a href="">(+228) 22 50 21 16</a></span>
                                    <span class="d-block"><span class="text-dark-gray fw-600">Email:</span> <a href="mailto:bhelpconsulting@gmail.com" class="text-decoration-line-bottom">bhelpconsulting@gmail.com</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="p-0 h-500px sm-h-350px overlap-height" id="location">
            <div class="container-fluid h-100 overlap-gap-section">
                <div class="row justify-content-center h-100">
                    <div class="col-12 p-0">
                        <div id="map" class="map h-500px md-h-400px sm-h-350px" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "HTML", "color": "#005153" }, "popup": { "defaultOpen": true, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Accounting</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section>
            <div class="container overlap-section overlap-section-three-fourth" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 500, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="row row-cols-md-1 justify-content-center">
                    <div class="col-xl-10">
                        <div class="bg-white p-8 border-radius-6px box-shadow-double-large">
                            <div class="row">
                                <div class="col-9">
                                    <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-50px xs-mb-35px">Comment pouvons-nous vous aider ?</h3>
                                </div>
                                <div class="col-3 text-end" data-anime='{ "translateY": [30, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <i class="bi bi-send icon-large text-dark-gray animation-zoom"></i>

                                </div>
                                <div class="col-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- start contact form -->
                            <form  action="{{ route('send-message') }}"  method="post" class="contact-form-style-03">
                                @csrf
                                <div class="row justify-content-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Saisissez votre nom ici *</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail1" type="text" name="name" placeholder="Veuillez entrer votre nom" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Addresse Email*</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="exampleInputEmail2" type="email" name="email" placeholder="Veuillez entrer votre address email " />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Numéro de téléphone</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-telephone"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail3" type="tel" name="phone" placeholder="Veuillez entrer votre numéro de téléphone" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Suject</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-journals"></i></span>
                                            <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="exampleInputEmail4" type="text" name="subject" placeholder="Comment pouvons-nous vous être utiles ?" />
                                        </div>
                                    </div>
                                    <div class="col-12 mb-4">
                                        <label for="exampleInputEmail1" class="form-label fw-600 text-dark-gray mb-0">Méssage</label>
                                        <div class="position-relative form-group form-textarea mb-0">
                                            <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" name="message" placeholder="Pouvez-vous décrire vos besoins ?" rows="4"></textarea>
                                            <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-lg-7 col-md-8">
                                        <p class="mb-0 fs-14 lh-24 text-center text-md-start">Nous nous engageons à protéger votre vie privée. Nous ne collecterons jamais d'informations vous concernant sans votre consentement explicite.</p>
                                    </div>
                                    <div class="col-xxl-6 col-lg-5 col-md-4 text-center text-md-end sm-mt-25px">
                                        <input id="exampleInputEmail5" type="hidden" name="redirect" value="">
                                        {{-- <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge text-transform-none primary-font submit" type="submit">Send message</button> --}}
                                        <button class="btn btn-base-color btn-medium btn-rounded btn-box-shadow " type="submit">Envoyer le message</button>

                                    </div>

                                    <div class="col-12">
                                        <div class="form-results mt-20px d-none"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-center mt-8">
                        <div class="col-md-auto text-center text-md-end sm-mb-20px">
                            <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Pour en savoir plus, rendez-vous sur nos réseaux sociaux.</h6>
                        </div>
                        <div class="col-1 d-none d-lg-inline-block">
                            <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
                        </div>
                        <!-- start social icon -->
                        <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0">
                            <ul class="large-icon dark">
                                <li class="m-0"><a class="facebook" href="https://www.facebook.com/profile.php?id=61553827778735&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                                <li class="m-0"><a class="youtube" href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i><span></span></a></li>
                                <li class="m-0"><a class="tiktok" href="https://www.tiktok.com/@business.help.consulting?_t=8sSL7ZcBMFz&_r=1 " target="_blank"><i class="fa-brands fa-tiktok"></i><span></span></a></li>
                                <li class="m-0"><a class="linkedin" href="https://www.linkedin.com/company/business-help-consulting " target="_blank"><i class="fa-brands fa-linkedin"></i><span></span></a></li>
                            </ul>
                        </div>
                        <!-- end social icon -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
        <!-- end section -->

@endsection


@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
