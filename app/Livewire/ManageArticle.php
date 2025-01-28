<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Services\ArticleService;
use App\Services\CategoryService ;
use Illuminate\Support\Collection;
use Exception;

class ManageArticle extends Component
{
    
    public $titre = '';
    public $contenu = '';
   
  
    public $categorie_id; // ID of the category for update
    public $articleId;
    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $isUpdate = false; // Flag to determine if we're updating
    public $featuredArticleId; // ID of the annonce to be added to
    protected $articleService;
    protected $categoryService;

    public $selectedcategory; // To hold the selected categorie
    public $categories; // To hold the list of categories


    protected $rules = [
        'titre' => 'required|string|max:255',
        'contenu' => 'required|string|max:1000',
        'categorie_id' => 'required|exists:categories,id',
       
    ];

    public function mount($articleId = null)
    {

        // Dependency injection
        $this->articleService = new ArticleService();
        $this->categoryService = new CategoryService();
        $this->categories = $this->categoryService->getAll(); // Adjust query as needed



        if ($articleId) {

            $this->isUpdate = true;
            $this->articleId = $articleId;
            $this->featuredArticleId =  $articleId ;
            $this->loadarticle(); // Load annonce data for editing
        }
    }

    public function loadarticle()
    {
        try {
            $post = $this->articleService->get($this->articleId,['categories']);
            if ($post) {
                // dd($post) ;
                $this->titre = $post->titre;
                $this->contenu = $post->contenu;
                $this->categorie_id = $post->categorie_id ;

                // dd($post->images->map(function ($user) {
                //     return $user;
                // })) ;
            }
        } catch (Exception $e) {
            session()->flash('error', 'article non trouvé.');
        }
    }

    public function save() {

        try {
            // Validate input for post creation or update
            $this->validate();

            $this->articleService = new ArticleService();

            if ($this->isUpdate) {
                // Update existing annonce
                $this->articleService->update($this->articleId, [
                    'titre' => $this->titre,
                    'contenu' => $this->contenu,
                    'categorie_id' => $this->categorie_id,

                ]);
                $this->successMessage = 'article mis à jour avec succès.';
            }else {
                // Create new annonce
                $article = $this->articleService->create([

                    'titre' => $this->titre,
                    'contenu' => $this->contenu,
                    'categorie_id' => $this->categorie_id,
                   // 'user_id' => auth()->id() // ID de l'utilisateur connecté
                ]);
                $this->successMessage = 'article créé avec succès.';
                 // Clear error message
            $this->errorMessage = null;

            // Reset fields after saving
            $this->resetFields();
            $this->dispatch('component.updated');
                }
            


                

           
        }catch (Exception $e) {
            $this->dispatch('component.updated');
            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }
        // catch (\Illuminate\Validation\ValidationException $e) {
        //     // Dispatch an event to reinitialize JavaScript plugins on validation failure
        //     $this->dispatch('component.updated');
        // }
    }


    public function resetFields()
    {
        if(!$this->isUpdate){
            $this->titre = '';
            $this->contenu = '';
            $this->categorie_id = Null ;
            
        }



        // Reset field for adding to featured annonces
        $this->featuredArticleId = null;
    }

    public function render()
    {
        return view('livewire.manage-article');
    }
}
