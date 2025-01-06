@extends('layouts.app')

@section('title', 'Contact-Us')

@push('css')
    <style>
        .bg-tranquil {
            background-color: #f3f8f8;
        }
    </style>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/demos/accounting/accounting.css') }}" />

@endpush


@section('content')

        <!-- start page title -->
        <section class="top-space-margin page-title-big-typography cover-background magic-cursor round-cursor" style="background-image: url({{ asset('images/banner-001.jpg') }}">
            <div class="container">
                <div class="row extra-very-small-screen align-items-center">
                    <div class="col-lg-8 col-sm-8 position-relative page-title-extra-small" data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [-30, 0], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h2 class="text-white text-shadow-medium fw-500 ls-minus-2px mb-0">Better to see something once than hear about it a thousand times.</h2>
                        <h1 class="mb-20px xs-mb-20px text-white text-shadow-medium"><span class="w-30px h-2px bg-yellow d-inline-block align-middle position-relative top-minus-2px me-10px"></span>Postez par</h1>

                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 blog-standard md-mb-50px sm-mb-40px blog-details mb-12">
                        <!-- start blog details  -->
                            <div class="entry-meta mb-20px fs-15">
                                <span><i class="text-dark-gray feather icon-feather-calendar"></i><a href="blog-grid.html">26 August 2023</a></span>
                                <span><i class="text-dark-gray feather icon-feather-user"></i><a href="blog-grid.html">Jonse robbert</a></span>
                                <span><i class="text-dark-gray feather icon-feather-folder"></i><a href="blog-grid.html">Creative</a></span>
                            </div>

                            <h5 class="text-dark-gray fw-600 w-80 sm-w-100 mb-6">{{ $article->title ?? 'Titre indisponible'}}</h5>
                            <div class="p-9 border-radius-5px bg-dark-gray blockquote-style-01 mb-6">
                                <!-- start blockquote -->
                                <i class="bi bi-chat-quote float-start me-30px xs-me-20px text-gradient-pink-orange icon-extra-double-large xs-icon-double-large"></i>
                                <blockquote class="mb-0 d-table last-paragraph-no-margin">
                                    <p class="fs-28 lh-36 text-white mb-15px">The food you eat can be either the safest and most powerful medicine or the <span class="fw-500 text-decoration-line-bottom">slowest form of poison.</span></p>
                                    <div class="fw-500 text-uppercase fs-13 text-white mt-15px">- Alexander harvard</div>
                                </blockquote>
                                <!-- end blockquote -->
                            </div>
                            <p>{{ $article->content ?? 'contenu indisponible'}}</p>
                            <blockquote class="alt-font border-4 border-start border-color-base-color text-dark-gray fw-500 ps-40px mt-7 mb-7 ms-60px lg-ms-30px sm-ms-0 lg-ps-30px">
                                <p>Tomorrow is the most important thing in life. Comes into us at midnight very clean. It's perfect when it arrives and it puts itself in our hands. It hopes we've learned something from yesterday.</p>
                                <footer class="fs-14 fw-600 text-base-color d-inline-block text-uppercase">John Wayne</footer>
                            </blockquote>
                            <img src="https://via.placeholder.com/800x570" alt="" class="w-100 border-radius-6px mb-7">
                            <p><span class="alt-font first-letter text-dark-gray">M</span>lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non , sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <!-- end blog details -->
                    </div>
                    <div class="col-12 col-lg-12 blog-standard md-mb-50px sm-mb-40px">
                        <div class="row mb-50px sm-mb-30px">
                            <div class="tag-cloud col-12 col-md-9 text-center text-md-start sm-mb-15px">
                                <a href="blog-grid.html">Development</a>
                                <a href="blog-grid.html">Event</a>
                                <a href="blog-grid.html">Multimedia </a>
                                <a href="blog-grid.html">Fashion</a>
                            </div>
                            <div class="tag-cloud col-12 col-md-3 text-uppercase text-center text-md-end">
                                <a class="likes-count fw-500 mx-0" href="#"><i class="fa-regular fa-heart text-red me-10px"></i><span class="text-dark-gray text-dark-gray-hover">05 Likes</span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-7">
                                <div class="d-block d-md-flex w-100 box-shadow-extra-large align-items-center border-radius-4px p-8">
                                    <div class="w-140px text-center me-60px sm-mx-auto">
                                        <img src="https://via.placeholder.com/125x125" class="rounded-circle w-110px" alt="">
                                        <a href="blog-grid.html" class="text-dark-gray fw-500 mt-25px d-inline-block lh-20">Colene Landin</a>
                                        <span class="fs-15 lh-20 d-block sm-mb-15px">Co-founder</span>
                                    </div>
                                    <div class="w-75 sm-w-100 text-center text-md-start">
                                        <p class="mb-5px">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type.</p>
                                        <a href="blog-grid.html" class="btn btn-link btn-large text-dark-gray mt-20px fw-600">All author posts</a>
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
        <section class="bg-tranquil" style="background-color: ">
            <div class="container">
                <div class="row justify-content-center mb-1">
                    <div class="col-lg-7 text-center">
                        <span class="alt-font text-dark-gray fs-19 fw-500 mb-5px d-inline-block ls-minus-05p">Suggestions similaires.</span>
                        <h2 class="alt-font text-dark-gray fw-600 ls-minus-3px">Articles associés</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 px-0 xs-ps-15px xs-pe-15px">
                    @if($articles->count() < 3 )
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                                    <div class="blog-image">
                                        <a href="demo-business-blog-single-modern.html" class="d-block"><img src="https://via.placeholder.com/800x570" alt="" /></a>
                                        {{-- <div class="blog-categories">
                                            <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Agency</a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body p-12">
                                        <a href="demo-business-blog-single-modern.html" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">How to bring the season into your great marketing.</a>
                                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                            <div class="me-auto">
                                                <span class="blog-date fw-500 d-inline-block">30 August 2023</span>
                                                <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Den viliamson</a></div>
                                            </div>
                                            <div class="like-count">
                                                <a href="demo-business-blog-single-modern.html"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">65</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                                    <div class="blog-image">
                                        <a href="demo-business-blog-single-modern.html" class="d-block"><img src="https://via.placeholder.com/800x570" alt="" /></a>
                                        {{-- <div class="blog-categories">
                                            <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Luxurious</a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body p-12">
                                        <a href="demo-business-blog-single-modern.html" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">Build up healthy habits and strong peaceful life.</a>
                                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                            <div class="me-auto">
                                                <span class="blog-date fw-500 d-inline-block">28 August 2023</span>
                                                <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Hugh macleod</a></div>
                                            </div>
                                            <div class="like-count">
                                                <a href="demo-business-blog-single-modern.html"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">25</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                                    <div class="blog-image">
                                        <a href="demo-business-blog-single-modern.html" class="d-block"><img src="https://via.placeholder.com/800x570" alt="" /></a>
                                        {{-- <div class="blog-categories">
                                            <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Business</a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body p-12">
                                        <a href="demo-business-blog-single-modern.html" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">Make business easy with beautiful application.</a>
                                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                            <div class="me-auto">
                                                <span class="blog-date fw-500 d-inline-block">26 August 2023</span>
                                                <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Walton smith</a></div>
                                            </div>
                                            <div class="like-count">
                                                <a href="demo-business-blog-single-modern.html"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">30</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                    @else
                        <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            @foreach ( $articles as $article )

                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                                    <div class="blog-image">
                                        <a href="{{ route('blogs.show', $article->id) }}" class="d-block"><img src="https://via.placeholder.com/800x570" alt="" /></a>
                                        {{-- <div class="blog-categories">
                                            <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Agency</a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body p-12">
                                        <a href="{{ route('blogs.show', $article->id) }}" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">{{$article->title}}.</a>
                                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                            <div class="me-auto">
                                                <span class="blog-date fw-500 d-inline-block">30 August 2023</span>
                                                <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Den viliamson</a></div>
                                            </div>
                                            <div class="like-count">
                                                <a href="{{ route('blogs.show', $article->id) }}"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">65</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- end blog item -->
                            @endforeach

                        </ul>
                    @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        @if ($article instanceof App\Models\Post)


        @livewire('comments',['post' => $article]) <!-- Include the Livewire component -->

        @endif
        <section class="bg-dark-gray" style="    padding-top: 5px; padding-bottom: 5px;"></section>
        <!-- end section -->

@endsection


@push('scripts')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCA56KqSJ11nQUw_tXgXyNMiPmQeM7EaSA&callback=initMap"></script>
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
