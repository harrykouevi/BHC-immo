
<div>

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
                        <div class="col-lg">
                            <input class="form-control" placeholder="Titre" wire:model="titre" type="text">
                            @error('title') <span class="error">{{ $message }}</span> @enderror
                        </div>

                    </div>


                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        <span class="btn-double-text" data-text="{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} une categorie">{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} une categorie</span>

                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
<!-- row closed -->
</div>

