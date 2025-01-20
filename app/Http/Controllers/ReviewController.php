<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller
{
    /**
     * Affiche le formulaire de soumission d'avis.
     *
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $annonce = Annonce::findOrFail($id); // Crée une nouvelle instance d'annonce
        return view('reviews', compact('annonce'));
    }

    /**
     * Stocke un nouvel avis dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'annonce_id' => 'required|exists:annonces,id',
            'content' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Création de l'avis
        Review::create([
            'annonce_id' => $validatedData['annonce_id'],
            'user_id' => Auth::id(), // ID de l'utilisateur connecté
            'content' => $validatedData['content'],
            'rating' => $validatedData['rating'],
        ]);

        return redirect()->back()->with('status', 'Votre avis a été soumis avec succès.');
    }

}
