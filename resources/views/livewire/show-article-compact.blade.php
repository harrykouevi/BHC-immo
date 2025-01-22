<div>

    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-3 col-md-12 mb-3 mb-md-0">
            <div class="card">
                <div class="card-header border-bottom pt-3 pb-3 mb-0 font-weight-bold text-uppercase">Filtre</div>
                <div class="card-body pb-0">
                    <div class="row row-sm  mg-t-10">

                        <div class="col-xl-12  col-lg-12 col-md-3 col-sm-3 mg-t-10 mg-lg-t-0">
                            <div class="form-group mb-0">
                                <label class="form-label">Baby & Kids</label>
                                <input type="text" class="form-control" placeholder="Search ...">

                            </div>
                        </div><!-- col-4 -->
                        <div class="col-xl-12  col-lg-12 col-md-3 col-sm-3 mg-t-10 mg-lg-t-0">
                            <div class="form-group mb-0">
                                <label class="form-label">Women</label>
                                <select name="beast" id="select-beast1" class="form-control  nice-select  custom-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Western wear</option>
                                    <option value="2">Foot wear</option>
                                    <option value="3">Top wear</option>
                                    <option value="4">Bootom wear</option>
                                    <option value="5">Beuty Groming</option>
                                    <option value="6">Accessories</option>
                                    <option value="7">jewellery</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12  col-lg-12 col-md-3 col-sm-3  mg-t-10 mg-lg-t-0">
                            <div class="form-group">
                                <label class="form-label">Mens</label>
                                <select name="beast" id="select-beast" class="form-control  nice-select  custom-select">
                                    <option value="0">--Select--</option>
                                    <option value="1">Foot wear</option>
                                    <option value="2">Top wear</option>
                                    <option value="3">Bootom wear</option>
                                    <option value="4">Men's Groming</option>
                                    <option value="5">Accessories</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12  col-lg-12 col-md-3 col-sm-3   mg-lg-b-20">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                <span class="btn-double-text " data-text="Filtrer les articles">Rechercher</span>

                            </button>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12">

            <div class="row row-sm">

                @foreach($articles as $article)
                <div class=" col-xl-4  col-md-6 col-lg-6  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="pro-img-box">
                                <div class="d-flex product-sale">
                                    <span class="tag tag-azure tx-24">{{ $article->category->nom ?? '*'}}</span>
                                </div>
                                <img class="w-100" src="{{ asset('admin/img/ecommerce/04.jpg')}}" alt="product-image">

                            </div>
                            <div class="tx-left pd-t-15">
                                    <div class="main-content-label">{!!  Str::words($article->titre ?? 'Titre indisponible', 3, ' ...'); !!}</div>

                                    <p class="tx-12  text-muted">{!!  Str::words($article->contenu, 10, ' ...'); !!}</p>
                                   

                                  
                            <div class="text-center mt-4">
                                <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-primary btn-block">Modifier</a>
                                <form action="{{ route('admin.article.destroy', $article->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-block" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12">

                    <!-- Pagination Links -->
                    {{ $articles->links('custom-pagination') }}
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

</div>
