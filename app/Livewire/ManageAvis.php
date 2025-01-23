<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Services\AvisService;
use Illuminate\Support\Collection;
use Exception;

class ManageAvis extends Component
{
    
    public $id = 0;
    public $contenu = '';
    public $choice = '';
   
   
   

   // public $userID ; // ID de l'utilisateur connecté
   // ID of the annonce for update
    public $categorie_id; // ID of the category for update
    public $avisId;
    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $isUpdate = false; // Flag to determine if we're updating
    public $featuredArticleId; // ID of the annonce to be added to
    protected $articleService;
    protected $categoryService;

    public $selectedcategory; // To hold the selected categorie
    public $categories; // To hold the list of categories


    protected $rules = [
        
        'contenu' => 'required|string|max:1000',
        'choice'=> 'required|string|max:1000'
       
    ];

    public function mount($avisId = null)
    {

        // Dependency injection
        $this->AvisService = new AvisService();
        // Adjust query as needed



        if ($avisId) {

            $this->isUpdate = true;
            $this->avisId = $avisId;
            $this->featuredavisId =  $avisId ;
            $this->loadavis(); // Load annonce data for editing
        }
    }

    public function loadavis()
    {
        try {
            //$post = $this->AvisService->get($this->avisId);
          //dd($this->avisId);
            $post = $this->getAvis()->first(function ($item) {
                return $item->id == $this->avisId; // Remplacez 1 par l'ID que vous recherchez
            });
            //dd($post);
            //$mesavis = $post->where('id', $avisId);
            //dd($post);
            if ($post) {
                // dd($post) ;
                
            
                $this->contenu = $post->contenu;
                $this->choice = $post->choice ;

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

        $this->AvisService = new AvisService();

        if ($this->isUpdate) {
            //// Update existing annonce
            //$this->AvisService->update($this->avisId, [
            //    'id' => $this->id,
            //    'contenu' => $this->contenu,
            //    'choice' => $this->choice,

            //]);
            $this->successMessage = 'avis mis à jour avec succès.Ceci est un test, il nya pas de mise à jour réel au niveau de la base';
            }

            
        else {
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
            $this->category_id = Null ;
            
        }
        // Reset field for adding to featured annonces
        $this->featuredArticleId = null;
    }

    public function render()
    {
        return view('livewire.manage-avis');
    }

    public function getAvis(){
        return  collect([
            (object) ['id' => 1, 'contenu' => "Produit très satisfaisant!", 'note' => 5,'choice' => "oui"],
            (object) ['id' => 2, 'contenu' => "Moyennement satisfait.", 'note' => 3,'choice' => "oui"],
            (object) ['id' => 3, 'contenu' => "Je ne recommande pas ce produit.", 'note' => 1,'choice' => "oui"],
        ]);
        
    }
}
