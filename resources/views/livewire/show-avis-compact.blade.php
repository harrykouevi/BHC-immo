<div>
    <div class="col-xl-9 col-lg-9 col-md-12">
        <div class="row row-sm">
            @foreach($lesavis as $avis)
            <div class="col-12 mb-3"> <!-- Avis prennent toute la largeur -->
                <div class="card">
                    <div class="card-body">
                        <!-- Contenu de l'avis -->
                        <div class="main-content-label mb-3" style="font-weight: normal; text-transform: lowercase;">{!! Str::words($avis->comment ?? 'aucun avis') !!}</div>
                        
                        <!-- Boutons -->
                        <div class="d-flex justify-content-between">
                            @if ($avis->approuve == "non")
                                <a href="{{ route('admin.avis.update', $avis->id) }}" class="btn btn-sm btn-success">Approuver</a>
                            @else
                                <a href="{{ route('admin.avis.update', $avis->id) }}" class="btn btn-sm btn-danger">Désapprouver</a>
                            @endif
                            <a href="{{route('admin.avis.reponse',$avis->id)}}" class="btn btn-sm btn-primary">Répondre</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-lg-12">
            <!-- Pagination -->
        </div>
    </div>
</div>
