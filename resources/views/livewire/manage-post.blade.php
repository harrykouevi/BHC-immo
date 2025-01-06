
<div class="row align-items-start mb-30px md-mb-15px">
    <div class="col-lg-12 pe-50px md-pe-15px md-mb-50px xs-mb-35px">
        <span class="fs-26 alt-font fw-600 text-dark-gray mb-20px d-block">Article details</span>
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
            <div class="row">
                <div class="col-md-6 mb-20px">
                    <label class="mb-10px">Titre<span class="text-red">*</span></label>
                    <input class="border-radius-4px input-small" wire:model="title" type="text" aria-label="text">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="col-12">
                    <label class="mb-10px">Contenu</label>
                    <textarea class="border-radius-4px textarea-small" rows="5" cols="5" wire:model="content" placeholder="Notes about your order, e.g. special notes for delivery." id="summernote"></textarea>
                    @error('content') <span class="error">{{ $message }}</span> @enderror
                </div>

                <!-- end tab content -->
                <div class="col-12">

                    <button type="submit" class="btn btn-base-color btn-extra-large btn-switch-text btn-round-edge btn-box-shadow w-100 text-transform-none mt-30px">
                        <span>
                            <span class="btn-double-text" data-text="{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} l'article">{{ $isUpdate ? 'Mettre à jour' : 'Créer' }} l'article</span>
                        </span>
                    </button>
                </div>

            </div>
        </form>
    </div>

</div>

