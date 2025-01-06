<?php

namespace App\Livewire;


use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post; // Ensure you import your Post model
use App\Services\PostService;

class ShowPostsCompact extends Component
{
    use WithPagination; // Include the WithPagination trait

    public $search = ''; // Property for search functionality


    public function updatingSearch()
    {
        $this->resetPage(); // Reset pagination when search query changes
    }

    public function render()
    {

        $posts = (new PostService())->getFindedPosts($this->search) ;

        return view('livewire.show-posts-compact', [
            'posts' => $posts,
        ]);
    }

}
