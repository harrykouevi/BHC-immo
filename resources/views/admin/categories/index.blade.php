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
                <h4 class="content-title mb-0 my-auto">Liste des categories</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->


    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <p class="tx-12 tx-gray-500 mb-2">Ici la liste des différentes catégories. </p>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mg-b-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $categories as $category)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$category->nom}}</td>

                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>
    <!-- /row -->
</div>
@endsection

@push('scripts')

@endpush
