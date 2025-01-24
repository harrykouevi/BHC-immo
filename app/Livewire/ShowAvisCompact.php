<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post; // Ensure you import your Post model
use App\Services\AvisService;

class ShowAvisCompact extends Component
{
    use WithPagination; // Include the WithPagination trait

    public $search = ''; // Property for search functionality


    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search query changes
    }

    public function render()
    {

      //$lesavis = $this->getAvis();
      $lesavis = (new AvisService())->getFinded($this->search) ;

        return view('livewire.show-avis-compact', [
            'lesavis' => $lesavis,
        ]);
    }

    /*
    public function getAvis(){
        return  collect([
            (object) ['id' => 1, 'contenu' => "Produit très satisfaisant!", 'note' => 5,'choice' => "oui"],
            (object) ['id' => 2, 'contenu' => "Moyennement satisfait.", 'note' => 3,'choice' => "oui"],
            (object) ['id' => 3, 'contenu' => "Je ne recommande pas ce produit.", 'note' => 1,'choice' => "oui"],
        ]);
        
    }*/
}
