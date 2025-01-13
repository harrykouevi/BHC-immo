<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;

class PagesController extends Controller
{
   
    public function sendMessage(Request $request){
   // Validation des champs
   $request->validate([
    'nom' => 'required|string|max:255',
    'email' => 'required|email',
    'tel' => 'nullable|string|max:20',
    'message' => 'required|string',
]);

// Sauvegarde dans la base de données
$message = new Contact();
$message->nom = $request->nom;
$message->email = $request->email;
$message->tel = $request->tel;
$message->message = $request->message;
$message->save();

// Préparer le contenu de l'e-mail
$emailContent = "
    Nom : {$request->nom}\n
    Email : {$request->email}\n
    Téléphone : {$request->tel}\n
    Message : {$request->message}
";

// Envoi de l'e-mail sans vue
Mail::raw($emailContent, function ($mail) use ($request) {
    $mail->from(config('mail.from.address'), config('mail.from.name'))
         ->to('urbainbalogou19@gmail.com')
         ->subject('Un message du site Immo');
});

// Redirection après envoi
return redirect('/contacts')->with('status', 'Votre message a été bien envoyé');
}
}
