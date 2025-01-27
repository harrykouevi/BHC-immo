
<!-- row -->
<div class="row">
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <!--div-->
        <div class="card">
            @if($successMessage)
                <div class="alert alert-success">
                    {{ $successMessage }}
                </div>
            @endif

            @if($errorMessage)
                <div class="alert alert-danger">
                    {{ $errorMessage }}
                </div>
            @endif
            <form  wire:submit.prevent="save">
                <div class="card-body">
                    {{-- <div class="main-content-label mg-b-5">
                        Form Input &amp; Textarea
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                    --}}

                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div>
                                <h6 class="card-title mb-1">Détail de l'article</h6>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <p class="mg-b-10">Titre</p>
                            <input class="form-control" placeholder="Titre" wire:model="titre" type="text">
                            @error('titre') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">Contenu de l'article</p>

                            <textarea class="form-control" placeholder="contenu"  wire:model="contenu" rows="3"></textarea>
                            @error('contenu') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    {{--
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">summernote content</p>
                            <textarea class="form-control" placeholder="Description"  wire:model="content_" id="summernote" rows="3"></textarea>


                        </div>

                    </div> --}}

                     {{--
                    <div class="row row-sm mg-t-20">
                        <div class="col-lg">
                            <p class="mg-b-10">summernote contacts_</p>
                            <textarea class="form-control" placeholder="Informations de contact"  wire:model="contacts_" id="summernote" rows="3"></textarea>


                        </div>

                    </div> --}}

                    <div class="row row-sm mg-t-20">
                        <div class="col-lg-12 col-md-12">
                            <p class="mg-b-10">Catégorie</p>
                            <select class="form-control " wire:model="categorie_id">

                                <option value="null" label="Choose one"></option>

                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                                @endforeach

                            </select>
                        </div><!-- col-4 -->
                        <div class="col-lg">
                            @error('categorie_id') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <span class="btn-double-text" data-text="{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} l'article">{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} l'article</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

