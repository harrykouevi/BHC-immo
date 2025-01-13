@extends('layouts.admin')

@section('title', 'Dashboard')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/accounting.css') }}" />
@endpush


@section('content')


    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Admin Dashboard</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Accueil</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <!-- Col -->
        <div class="col-lg-12">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">
                            <div class="main-img-user profile-user">
                                <img alt="" src="{{ asset('admin/img/faces/6.jpg') }}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">Petey Cruiser</h5>
                                    <p class="main-profile-name-text">Administrateur</p>
                                </div>
                            </div>

                            <hr class="mg-y-30">

                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>

        </div>


    </div>
    <!-- row closed -->
@endsection

@push('scripts')
    {{-- <script type="text/javascript" src="{{ asset('js/main.js') }}"></script> --}}
@endpush
