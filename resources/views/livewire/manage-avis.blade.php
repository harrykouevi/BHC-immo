
    <!-- row -->
    <div class="row">
        <div class="col-md-12">
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

                <form wire:submit.prevent="save">
                    <div class="card-body">
                        <h6 class="card-title mb-1">Réponse à l'avis</h6>

                        <div class="form-group">
                            <label for="reponse">Contenu de l'avis</label>
                            <textarea
                                id="reponse"
                                class="form-control @error('reponse') is-invalid @enderror"
                                placeholder="Écrivez votre réponse ici..."
                                wire:model="reponse"
                                rows="3">
                            </textarea>
                            @error('reponse')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

