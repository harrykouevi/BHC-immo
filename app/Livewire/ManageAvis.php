<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Review;
use App\Services\AvisService;
use Exception;

class ManageAvis extends Component
{
    public $avisId;
    public $reponse = '';
    public $successMessage;
    public $errorMessage;
    public $isUpdate = false;

    protected $rules = [
        'reponse' => 'required|string|max:1000',
    ];

    public function mount($avisId = null)
    {
        $this->avisId = $avisId;
        $this->isUpdate = $avisId ? true : false;

        if ($this->isUpdate) {
            $this->loadAvis();
        }
    }

    public function loadAvis()
    {
        try {
            $avis = Review::findOrFail($this->avisId);
            $this->reponse = $avis->reponse;
        } catch (Exception $e) {
            $this->errorMessage = 'Avis introuvable.';
        }
    }

    public function save()
    {
        try {
            $this->validate();

            $avis = Review::findOrFail($this->avisId);
            $avis->reponse = $this->reponse;
            $avis->save();

            $this->successMessage = 'Réponse enregistrée avec succès.';
            $this->errorMessage = null;
        } catch (Exception $e) {
            $this->successMessage = null;
            $this->errorMessage = 'Une erreur est survenue : ' . $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.manage-avis');
    }
}
