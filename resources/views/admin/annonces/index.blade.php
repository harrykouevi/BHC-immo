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
                <h4 class="content-title mb-0 my-auto">Liste des Annonces</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
            </div>
        </div>

    </div>
        <!-- Affichage des messages de succès -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <!-- Affichage des messages d'erreur -->
        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
    <!-- breadcrumb -->


    @livewire('show-annonces-compact') <!-- Include the Livewire component -->

@endsection

@push('scripts')

@endpush
