<?php

namespace App\Http\Controllers;
use App\Models\Review;
use App\Models\Contact;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function storef(Request $request, $id)
    {

        // Validation des données du formulaire
        $request->validate([
            'annonce_id' => 'required|exists:annonces,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'comment' => 'required|string|max:1000',
        ]);


        // Vérification si l'utilisateur (ou visiteur) a pris contact
        $contact = Contact::where('email', $request->email)
        ->where('has_contacted', true) // Vérifier si le visiteur a pris contact
        ->first();

        if (!$contact) {
            return redirect()->route('posts.show', $id)->with('error', 'Vous devez avoir pris contact avec nous avant de soumettre un avis.');
            dd('aaaaaaa');
        }

        // Création de l'avis
        Review::create([
        'annonce_id' => $id,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'comment' => $request->comment,
        ]);

        // Retour à la page de l'annonce avec un message de succès
        return redirect()->route('annonces.show', $request->annonce_id)
                        ->with('success', 'Votre avis a été soumis avec succès.');
    }


}
