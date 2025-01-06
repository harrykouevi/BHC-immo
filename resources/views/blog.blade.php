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
                    <div class="col-lg-8 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Latest blog.</h2>
                        <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>.</h1>

                    </div>
                    <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <a href="#down-section" class="section-link">
                            <div class="text-white">
                                <i class="feather icon-feather-chevron-down icon-very-medium"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->


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
