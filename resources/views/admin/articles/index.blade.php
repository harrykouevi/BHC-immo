@extends('layouts.admin')

@section('title', 'Dashboard')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/accounting.css') }}" />
@endpush


@section('content')
<div class="container">
    <h1>Liste des Articles</h1>

    @livewire('show-posts-inline') <!-- Include the Livewire component -->
</div>
@endsection

@push('scripts')

@endpush
