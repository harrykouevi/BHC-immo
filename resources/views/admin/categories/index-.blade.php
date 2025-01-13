@extends('layouts.admin')

@section('title', 'Dashboard')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/accounting.css') }}" />
@endpush


@section('content')
<div class="container">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Liste des Annonces</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->


    @livewire('show-annonces-compact') <!-- Include the Livewire component -->
</div>
@endsection

@push('scripts')

@endpush
