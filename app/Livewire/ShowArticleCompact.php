<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post; // Ensure you import your Post model
use App\Services\ArticleService;

class ShowArticleCompact extends Component
{
    use WithPagination; // Include the WithPagination trait

    public $search = ''; // Property for search functionality


    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search query changes
    }

    public function render()
    {

        $articles = (new ArticleService())->search($this->search) ;

        // $articles =[{ 'nom':'ffffffff','id':1},
        // { 'nom':'ffffffff'}
        // { 'nom':'ffffffff'}
        // { 'nom':'ffffffff'}
        // ]

        return view('livewire.show-article-compact', [
            'articles' => $articles,
        ]);
    }

}
