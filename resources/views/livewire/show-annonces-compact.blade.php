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
                                <span class="btn-double-text " data-text="Filtrer les annonces">Rechercher</span>

                            </button>

                        </div>
                    </div>

                </div>


            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12">

            <div class="row row-sm">

                @foreach($annonces as $annonce)
                <div class=" col-xl-4  col-md-6 col-lg-6  col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="pro-img-box">
                                <div class="d-flex product-sale">
                                    <span class="tag tag-azure tx-24">{{ $annonce->category->nom ?? '*'}}</span>
                                </div>
                                <img class="w-100" src="{{ asset('admin/img/ecommerce/04.jpg')}}" alt="product-image">

                            </div>
                            <div class="tx-left pd-t-15">
                                    <div class="main-content-label">{!!  Str::words($annonce->titre ?? 'Titre indisponible', 3, ' ...'); !!}</div>

                                    <p class="tx-12  text-muted">{!!  Str::words($annonce->description, 10, ' ...'); !!}</p>
                                    <h4 class="h5 mb-2 mt-2 text-center font-weight-bold">{{ $annonce->prix ?? 0}} FCFA</h4>

                                    <div class="d-flex tx-left">
                                        <div class="col pd-x-0">
                                            <div class="d-flex align-items-center tx-medium ">
                                                <img src="images/demo-real-estate-icon-bed-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">04</span>
                                            </div>
                                            <span class="d-block text-muted">Bedrooms</span>
                                        </div>
                                        <div class="col pd-x-0">
                                            <div class="d-flex align-items-center tx-medium ">
                                                <img src="images/demo-real-estate-icon-bath-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">05</span>
                                            </div>
                                            <span class=" text-muted">Bathrooms</span>
                                        </div>
                                        <div class="col pd-x-0">
                                            <div class="d-flex align-items-center tx-medium ">
                                                <img src="images/demo-real-estate-icon-size-small.svg" class="me-5px h-20px" alt="">
                                                <span class="fw-600 alt-font text-dark-gray">360m<sup>2</sup></span>
                                            </div>
                                            <span class="text-muted">Living area</span>
                                        </div>
                                    </div>

                            </div>
                            <div class="text-center mt-4">
                                <a href="{{ route('admin.annonces.edit', $annonce->id) }}" class="btn btn-primary btn-block">Modifier</a>
                                <a href="#" class="btn btn-warning btn-block">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-12">

                    <!-- Pagination Links -->
                    {{ $annonces->links('custom-pagination') }}
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

</div>
