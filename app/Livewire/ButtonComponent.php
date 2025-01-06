<?php

namespace App\Livewire;

use App\Services\PostService;
use Exception;
use Livewire\Component;

class ButtonComponent extends Component
{
    public $loading = false; // Property to track loading state
    public $articleId ;

    public $successMessage; // Public property for success messages
    public $errorMessage; // Public property for error messages

    public function mount( $articleId)
    {
            $this->articleId = $articleId;
    }

    public function addToFeatured()
    {

        $this->loading = true; // Set loading to true when action starts

        // Simulate a delay or perform some action
        sleep(2); // Simulating a long-running process (for demonstration)

        $this->loading = false; // Set loading to false when action completes

        try {
            // Call the service to add the article to featured
            ( new PostService())->addToFeatured($this->articleId);
            $this->successMessage = 'Article ajouté à la une avec succès.';
            $this->errorMessage = null;



        } catch (Exception $e) {

            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }
    }

    public function removeFromFeatured()
    {

        $this->loading = true; // Set loading to true when action starts

        // Simulate a delay or perform some action
        sleep(2); // Simulating a long-running process (for demonstration)

        $this->loading = false; // Set loading to false when action completes

        try {
            // Call the service to add the article to featured
            ( new PostService())->removeFromFeatured($this->articleId);
            $this->successMessage = 'Article retiré de la une avec succès.';
            $this->errorMessage = null;



        } catch (Exception $e) {

            // Handle any exceptions that occur during save
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
            $this->successMessage = null; // Clear previous success message
        }
    }



    public function render()
    {
        return view('livewire.button-component');
    }
}


