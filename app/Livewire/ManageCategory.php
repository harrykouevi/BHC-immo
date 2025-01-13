<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CategoryService ;
use Exception;

class ManageCategory extends Component
{

    public $titre = '';


    public $categoryId; // ID of the category for update

    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages
    public $isUpdate = false; // Flag to determine if we're updating
    protected $categoryService;


    public $categories; // To hold the list of categories


    protected $rules = [
        'titre' => 'required|string|max:255',
    ];

    public function mount( CategoryService $categoryService, $categoryId = null)
    {

        // Dependency injection
        $this->categoryService = new CategoryService();

        if ($categoryId) {
            $this->isUpdate = true;
            $this->loadcategory(); // Load categorie data for editing
        }
    }

    public function loadcategory()
    {
        try {
            $post = $this->categoryService->get($this->categoryId);
            if ($post) {
                $this->titre = $post->nom;

            }
        } catch (Exception $e) {
            session()->flash('error', 'category not found.');
        }
    }

    public function save()
    {
        // Validate input for post creation or update
        $this->validate();

        $this->categoryService = new CategoryService();
        try {
            if ($this->isUpdate) {
                // Update existing categorie
                $this->categoryService->update($this->categoryId, [
                    'nom' => $this->titre,
                ]);
                $this->successMessage = 'categorie mis à jour avec succès.';
            } else {
                // Create new categorie
                $this->categoryService->create([
                    'nom' => $this->titre,
                ]);


                $this->successMessage = 'categorie créé avec succès.';
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
        $this->titre = '';
        $this->isUpdate = false;
        // Reset field for adding to featured categories
    }

    public function render()
    {
        return view('livewire.manage-category');
    }
}
