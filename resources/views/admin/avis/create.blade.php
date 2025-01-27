@extends('layouts.admin')

@section('title', 'Avis')

@push('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@endpush



@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Avis</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ formulaire</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
     @livewire('manage-avis',['avisId' =>  $avisId ?? null])

@endsection

@push('scripts')

    <script>
        $(document).ready(function() {
            // Set up CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });


    </script>
@endpush
