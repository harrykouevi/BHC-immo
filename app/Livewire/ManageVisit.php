<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Visit;
use App\Services\VisitService;
use Illuminate\Support\Collection;
use Exception;

class ManageVisit extends Component
{
    use WithFileUploads;

    public $visitor_name = '';
    public $visitor_email = '';
    public $nbpieces= 0;
    public $nbsalon= 0;
    public $wcdouche= false;
    public $content_ = '';
    public $contacts_ = '';
    public $phonenumber = '';
    public $photos = [];
    public $tochooseoptions = [
        '0' => 'Non',
        '1' => 'Interne',
        '2' => 'Externe',
    ];
    public Collection $images ;

    public $userID ; // ID de l'utilisateur connecté
    public $annonceId; // ID of the annonce for update
    public $categoryId; // ID of the category for update

    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $isUpdate = false; // Flag to determine if we're updating
    public $featuredVisitId; // ID of the annonce to be added to
    protected $annonceService;
    protected $categoryService;

    public $selectedcategory; // To hold the selected categorie
    public $categories; // To hold the list of categories


    protected $rules = [
        'titre' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
        'prix' => 'nullable|numeric',
        'visitor_email' => 'nullable|string',
        'nbpieces' => 'nullable|numeric|max_digits:3',
        'nbsalon' => 'nullable|numeric|max_digits:3',
        'wcdouche' => 'nullable|bool',
        'content_' => 'nullable|string|max:1000',
        'contacts_' => 'nullable|string|max:100',
        'phonenumber' => 'nullable|string|max:20',
        'categoryId' => 'required|exists:categories,id',
        'photos.*' => 'required|image|max:2000', // Taille maximale de 2
    ];

    public function mount($annonceId = null)
    {

        // Dependency injection
        $this->annonceService = new VisitService();
        $this->categoryService = new CategoryService();
        $this->categories = $this->categoryService->getAll(); // Adjust query as needed



        if ($annonceId) {

            $this->isUpdate = true;
            $this->annonceId = $annonceId;
            $this->featuredVisitId =  $annonceId ;
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
                $this->visitor_email = $post->visitor_email;
                $this->content_ = $post->content_;
                $this->contacts_ = $post->contacts_;
                $this->phonenumber = $post->phonenumber;
                $this->nbpieces = $post->nbpieces ;
                $this->nbsalon = $post->nbsalon ;
                $this->wcdouche = $post->wcdouche ;
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

            $this->annonceService = new VisitService();

            if ($this->isUpdate) {
                // Update existing annonce
                $this->annonceService->update($this->annonceId, [
                    'titre' => $this->titre,
                    'description' => $this->description,
                    'prix' => $this->prix,
                    'surface' => $this->surface,
                    'visitor_email' => $this->visitor_email,
                    'content_' => $this->content_,
                    'contacts_' => $this->contacts_,
                    'phonenumber' => $this->phonenumber,
                    'nbpieces' => $this->nbpieces ,
                    'nbsalon' => $this->nbsalon ,
                    'wcdouche' => $this->wcdouche ,
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
                    'visitor_email' => $this->visitor_email,
                    'content_' => $this->content_,
                    'contacts_' => $this->contacts_,
                    'phonenumber' => $this->phonenumber,
                    'nbpieces' => $this->nbpieces ,
                    'nbsalon' => $this->nbsalon ,
                    'wcdouche' => $this->wcdouche ,
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
        }
        // catch (\Illuminate\Validation\ValidationException $e) {
        //     // Dispatch an event to reinitialize JavaScript plugins on validation failure
        //     $this->dispatch('component.updated');
        // }
    }


    public function removeImage($index)
    {
        if (isset($this->photos[$index])) {
            unset($this->photos[$index]);
            // Re-index the array to maintain sequential keys
            $this->photos = array_values($this->photos);
        }
    }

    public function resetFields()
    {
        if(!$this->isUpdate){
            $this->titre = '';
            $this->description = '';
            $this->prix = 0;
            $this->visitor_email = '';
            $this->content_= '';
            $this->contacts_= '';
            $this->phonenumber= '';
            $this->nbpieces= 0;
            $this->nbsalon= 0;
            $this->wcdouche= false;
            $this->category_id = Null ;
            $this->annonce->user_id = Null ;
        }

        $this->photos = Null;

        // Reset field for adding to featured annonces
        $this->featuredVisitId = null;
    }

    public function render()
    {
        return view('livewire.manage-annonce');
    }
}
