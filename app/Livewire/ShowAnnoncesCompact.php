<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post; // Ensure you import your Post model
use App\Services\AnnonceService;

class ShowAnnoncesCompact extends Component
{
    use WithPagination; // Include the WithPagination trait

    public $search = ''; // Property for search functionality


    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search query changes
    }

    public function render()
    {

        $annonces = (new AnnonceService())->search($this->search)->paginate(8) ;

        return view('livewire.show-annonces-compact', [
            'annonces' => $annonces,
        ]);
    }

}
