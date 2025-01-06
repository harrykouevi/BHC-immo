<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
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

    <button wire:click="addToFeatured" wire:loading.attr="disabled">
        <span wire:loading.remove>A la une</span>
        <span wire:loading>Loading...</span>
    </button>
    <button wire:click="removeFromFeatured" wire:loading.attr="disabled">
        <span wire:loading.remove>Retirer de la une</span>
        <span wire:loading>Loading...</span>
    </button>

</div>
