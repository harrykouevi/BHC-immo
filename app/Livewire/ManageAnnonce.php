<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Annonce;
use App\Services\AnnonceService;
use App\Services\CategoryService ;
use Livewire\WithFileUploads;
use App\Models\Image;
use Illuminate\Support\Collection;
use Exception;

class ManageAnnonce extends Component
{
    use WithFileUploads;

    public $titre = '';
    public $description = '';
    public $prix = 0.00;
    public $surface = 0;
    public $adresse = '';
    public $nb_pieces= 0;
    public $nb_salon= 0;
    public $wc_douche= false;
    public $content_ = '';
    public $contacts_ = '';
    public $phone_number = '';
    public $photos = [];
    public Collection $images ;

    public $userID ; // ID de l'utilisateur connecté
    public $annonceId; // ID of the annonce for update
    public $categoryId; // ID of the category for update

    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $isUpdate = false; // Flag to determine if we're updating
    public $featuredAnnonceId; // ID of the annonce to be added to
    protected $annonceService;
    protected $categoryService;

    public $selectedcategory; // To hold the selected categorie
    public $categories; // To hold the list of categories


    protected $rules = [
        'titre' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
        'prix' => 'nullable|numeric',
        'adresse' => 'nullable|string',
        'nb_pieces' => 'nullable|numeric|max_digits:3',
        'nb_salon' => 'nullable|numeric|max_digits:3',
        'wc_douche' => 'nullable|bool',
        'content_' => 'nullable|string|max:1000',
        'contacts_' => 'nullable|string|max:100',
        'phone_number' => 'nullable|string|max:20',
        'categoryId' => 'required|exists:categories,id',
        'photos.*' => 'required|image|max:2000', // Taille maximale de 2
    ];

    public function mount($annonceId = null)
    {
        
        // Dependency injection
        $this->annonceService = new AnnonceService();
        $this->categoryService = new CategoryService();
        $this->categories = $this->categoryService->getAll(); // Adjust query as needed

        if ($annonceId) {
          
            $this->isUpdate = true;
            $this->annonceId = $annonceId;
            $this->featuredAnnonceId =  $annonceId ;
            $this->loadannonce(); // Load annonce data for editing
        }
    }

    public function loadannonce()
    {
        try {
            $post = $this->annonceService->get($this->annonceId,['images']);
            if ($post) {
                // dd($post) ;
                $this->titre = $post->titre;
                $this->description = $post->description;
                $this->prix = $post->prix;
                $this->adresse = $post->adresse;
                $this->content_ = $post->content_;
                $this->contacts_ = $post->contacts_;
                $this->phone_number = $post->phone_number;
                $this->nb_pieces = $post->nb_pieces ;
                $this->nb_salon = $post->nb_salon ;
                $this->wc_douche = $post->wc_douche ;
                $this->categoryId = $post->category_id ;

                $this->images = $post->images ;

                // dd($post->images->map(function ($user) {
                //     return $user;
                // })) ;
            }
        } catch (Exception $e) {
            session()->flash('error', 'annonce not found.');
        }
    }

    public function save() {
        
        try {
            // Validate input for post creation or update
            $this->validate();

            $this->annonceService = new AnnonceService();

            if ($this->isUpdate) {
                // Update existing annonce
                $this->annonceService->update($this->annonceId, [
                    'titre' => $this->titre,
                    'description' => $this->description,
                    'prix' => $this->prix,
                    'surface' => $this->surface,
                    'adresse' => $this->adresse,
                    'content_' => $this->content_,
                    'contacts_' => $this->contacts_,
                    'phone_number' => $this->phone_number,
                    'nb_pieces' => $this->nb_pieces ,
                    'nb_salon' => $this->nb_salon ,
                    'wc_douche' => $this->wc_douche ,
                    'category_id ' => $this->categoryId,

                ]);

                  // Enregistrer les images associées
                  foreach ($this->photos as $photo) {
                    $path = $photo->store('annonces', 'public');
                    
                    $img = $this->annonceService->imgCreate([
                        'annonce_id' => $this->annonceId,
                        'path' => $path,
                    ]);

                    $this->images->push($img) ;
                }

                $this->successMessage = 'annonce mis à jour avec succès.';
            } else {
                // Create new annonce
                $annonce = $this->annonceService->create([

                    'titre' => $this->titre,
                    'description' => $this->description,
                    'prix' => $this->prix,
                    'surface' => $this->surface,
                    'adresse' => $this->adresse,
                    'content_' => $this->content_,
                    'contacts_' => $this->contacts_,
                    'phone_number' => $this->phone_number,
                    'nb_pieces' => $this->nb_pieces ,
                    'nb_salon' => $this->nb_salon ,
                    'wc_douche' => $this->wc_douche ,
                    'category_id' => $this->categoryId,
                    'user_id' => auth()->id() // ID de l'utilisateur connecté
                ]);
                // Enregistrer les images associées
                foreach ($this->photos as $photo) {
                    $path = $photo->store('annonces', 'public');

                    $this->annonceService->imgCreate([
                        'annonce_id' => $annonce->id,
                        'path' => $path,
                    ]);
                }


                $this->successMessage = 'annonce créé avec succès.';
            }

            // Clear error message
            $this->errorMessage = null;

            // Reset fields after saving
            $this->resetFields();
            $this->dispatch('component.updated');
        }catch (Exception $e) {
            $this->dispatch('component.updated');
            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }catch (\Illuminate\Validation\ValidationException $e) {
            // Dispatch an event to reinitialize JavaScript plugins on validation failure
            $this->dispatch('component.updated');
        }
    }




    public function resetFields()
    {
        $this->titre = '';
        $this->description = '';
        $this->prix = 0;
        $this->adresse = '';
        $this->content_= '';
        $this->contacts_= '';
        $this->phone_number= '';
        $this->nb_pieces= 0;
        $this->nb_salon= 0;
        $this->wc_douche= false;
        $this->photos = Null;

    

        // Reset field for adding to featured annonces
        $this->featuredAnnonceId = null;
    }

    public function render()
    {
        return view('livewire.manage-annonce');
    }
}
