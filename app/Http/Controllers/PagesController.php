<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;

class PagesController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'tel' => 'nullable|string|max:20',
            'message' => 'required|string',
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

        // Envoi =l'utilisateur
        Mail::raw('Merci de nous avoir contacté. Votre message a été bien envoyé.', function ($mail) use ($request) {
            $mail->from(config('mail.from.address'), config('mail.from.name'))
                 ->to($request->email)  // Envoi à l'utilisateur
                 ->subject('Confirmation de message envoyé');
        });

        return redirect('/contacts')->with('status', 'Votre message a été bien envoyé');
    }
}
