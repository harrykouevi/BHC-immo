<div>
    @error('comment') <span class="error">{{ $message }}</span> @enderror
    <form  class="row contact-form-style-02">
        <div class="col-md-6 mb-30px">
            <input class="input-name border-radius-4px form-control required" type="text" name="name" placeholder="Veuillez entrer votre nom*">
        </div>
        <div class="col-md-6 mb-30px">
            <input class="border-radius-4px form-control required" type="email" name="email" placeholder="Veuillez entrer votre email address*">
        </div>
        <div class="col-md-12 mb-30px">
            <textarea class="border-radius-4px form-control" cols="40" rows="4" wire:model="comment" placeholder="Laissez un commentaire..." required></textarea>
        </div>
        <div class="col-12">
            <input type="hidden" name="redirect" value="">
            <button class="btn btn-dark-gray btn-small btn-round-edge submit"  wire:click="submit">Commenter</button>
            <div class="form-results mt-20px d-none"></div>
        </div>
    </form>
</div>

