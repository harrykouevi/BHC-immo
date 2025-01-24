<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Annonce;
use App\Models\Image;
use App\Models\Category;
use App\Models\Review;

class PagesController extends Controller
{
    public function sendMessage(Request $request)
    {

        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'nullable|string|max:20',
            'message' => 'required|string|max:10000',
        ]);

        // Sauvegarde
        $message = new Contact();
        $message->nom = $request->nom;
        $message->email = $request->email;
        $message->tel = $request->tel;
        $message->message = $request->message;
        $message->save();


        $emailContent = "
            Nom : {$request->nom}\n
            Email : {$request->email}\n
            Téléphone : {$request->tel}\n
            Message : {$request->message}
        ";
        // email admin
        Mail::raw($emailContent, function ($mail) use ($request) {
            $mail->from(config('mail.from.address'), config('mail.from.name'))
                 ->to('urbainbalogou19@gmail.com')  // Envoi à l'administrateur
                 ->subject('Un message du site Immo');
        });

        // Envoi à l'utilisateur
        Mail::raw('Merci de nous avoir contacté. Votre message a été bien envoyé.', function ($mail) use ($request) {
            $mail->from(config('mail.from.address'), config('mail.from.name'))
                 ->to($request->email)  // Envoi à l'utilisateur
                 ->subject('Confirmation de message envoyé');
        });

        return redirect('/contacts')->with('status', 'Votre message a été bien envoyé');
    }

    public function search(Request $request)
    {
        $critere = $request->input('critere');

        // Vérifier que le critère n'est pas vide
        if (empty($critere)) {
            return redirect('/location')->with('error', 'Le critère de recherche est requis');
        }

        $results = Annonce::with(['Category', 'images']) // Chargement des relations
    ->where('titre', 'LIKE', "%{$critere}%")
    ->orWhere('description', 'LIKE', "%{$critere}%")
    ->orWhere('adresse', 'LIKE', "%{$critere}%")
    ->orWhere('prix', 'LIKE', "%{$critere}%")
    ->orWhere('surface', 'LIKE', "%{$critere}%")
    ->orWhere('wcdouche', 'LIKE', "%{$critere}%")
    ->orWhere('nbpieces', 'LIKE', "%{$critere}%")
    ->orWhere('nbsalon', 'LIKE', "%{$critere}%")
    ->orWhereHas('Category', function ($query) use ($critere) {
        $query->where('nom', 'LIKE', "%{$critere}%");
    })
    ->get();
        // Vérification des résultats
        if ($results->isEmpty()) {
            return redirect('/location')->with('error', 'Aucune annonce trouvée pour ce critère');
        }

        // Rediriger avec les résultats
        return redirect('/location')->with('results', $results);
    }
    public function apropos(){
        $reviews = Review::all();
        return view('apropos', compact('reviews'));
    }

    public function getAnnonces(){
        $annonces = Annonce::with(['Category', 'images'])->get();
        return view('location', compact('annonces'));
    }

    public function getSellAnnonces(){
        $annonces = Annonce::with(['Category', 'images'])->get();
        return view('sell', compact('annonces'));
    }

}
