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
                        <h1 class="text-base-color">Nos derniers articles immobiliers</h1>
                        <h2 class="alt-font text-dark-gray fw-500 mb-0 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="700">Suivez les dernières <span class="fw-700 text-highlight d-inline-block">actualités immobilières.<span class="bg-base-color h-10px bottom-10px opacity-3 separator-animation"></span></span> news.</h2>
                    </div>
                    <div class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                        <span class="d-block w-85 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Marché immobilier en ligne pour acheter, vendre et louer des biens résidentiels et commerciaux. Utilisé par des millions de locataires pour trouver un bien immobilier.</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <section class="pb-2 overlap-height sm-pb-50px">
            <div class="container overlap-gap-section">
                <div class="row">
                    <div class="col-12">
                        <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- start blog items -->
                            @foreach($articles as $article)
                                <li class="grid-item">
                                    <div class="card bg-transparent border-0 h-100">
                                        <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                            <span class="fs-14 text-uppercase">
                                                <a href="#" class="text-dark-gray fw-500 categories-text">{{ $article->category ?? 'Non spécifiée' }}</a>
                                                <a href="#" class="blog-date">{{ $article->created_at->format('d M Y') }}</a>
                                            </span>
                                            <a href="{{ route('article.show', $article->id) }}" class="card-title alt-font fw-600 lh-30 text-dark-gray d-inline-block w-95 fs-19">
                                                {{ Str::limit($article->title, 60) }}
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            <!-- end blog items -->
                        </ul>
                        <div class="row">
                            <div class="col-12 mt-2 d-flex justify-content-center">
                                <!-- start pagination -->
                                {{ $articles->links('vendor.pagination.bootstrap-4') }}
                                <!-- end pagination -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start section -->
        <section id="down-section">
            <div class="container">
                <div class="row g-0">
                    @livewire('show-posts-compact') <!-- Include the Livewire component -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
        <!-- end section -->

@endsection


@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
