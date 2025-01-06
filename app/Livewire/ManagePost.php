<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Services\PostService;
use Exception;

class ManagePost extends Component
{


    public $title = '';
    public $content = '';
    public $articleId; // ID of the article for update

    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $isUpdate = false; // Flag to determine if we're updating
    public $featuredArticleId; // ID of the article to be added to
    protected $postService;


    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function mount(PostService $postService, $articleId = null)
    {
        // Dependency injection
        $this->postService = new PostService();

        if ($articleId) {
            // Load the post data for editing

            $this->isUpdate = true;
            $this->articleId = $articleId;
            $this->featuredArticleId =  $articleId ;

            $this->loadArticle(); // Load article data for editing
        }
    }

    public function loadArticle()
    {
        try {
            $post = $this->postService->getPost($this->articleId);
            if ($post) {
                $this->title = $post->title;
                $this->content = $post->content;
            }
        } catch (Exception $e) {
            session()->flash('error', 'Article not found.');
        }
    }

    public function save()
    {
        // Validate input for post creation or update
        $this->validate();

        $this->postService = new PostService();
        try {
            if ($this->isUpdate) {
                // Update existing article
                $this->postService->updatePost($this->articleId, [
                    'title' => $this->title,
                    'content' => $this->content,

                ]);
                $this->successMessage = 'Article mis à jour avec succès.';
            } else {
                // Create new article
                $this->postService->createPost([
                    'title' => $this->title,
                    'content' => $this->content,
                    'user_id' => 1,
                ]);
                $this->successMessage = 'Article créé avec succès.';
            }

            // Clear error message
            $this->errorMessage = null;

            // Reset fields after saving
            $this->resetFields();
        } catch (Exception $e) {
            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }
    }




    public function resetFields()
    {
        $this->title = '';
        $this->content = '';
        $this->articleId = null;
        $this->isUpdate = false;

        // Reset field for adding to featured articles
        $this->featuredArticleId = null;
    }

    public function render()
    {
        return view('livewire.manage-post');
    }
}
