<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\VisitService ;

class VisitController extends Controller
{
    public function __construct(VisitService $visitService)
    {
        $this->visitService = $visitService;
    }

    public function index() // Méthode pour afficher toutes les demandes de visites
    {
        return view('admin.visits.index'); // Retourne la vue 'visits.index' avec les données des visites
    }

    public function show($visitId) // Méthode pour afficher le formulaire de création d'une demande de visite
    {
        return view('admin.visits.show',['id' => $visitId]);
    }

    public function edit($visitId)
    {
        // Show form to edit an existing visitId
        return view('admin.visits.create', ['id' => $visitId]);
    }

}
