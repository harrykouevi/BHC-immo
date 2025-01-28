<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Annonce;
use App\Models\Image;
use App\Models\Category;
use App\Models\Review;
use App\Services\AnnonceService;
use App\Services\ArticleService;

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

    private function search_(Request $request , int $per_page = NULL)
    {
        $critere = $request->has('critere') ? $request->input('critere') : Null;
        // Vérifier que le critère n'est pas vide
        if(!$critere) {
            $results =(new AnnonceService)->getAll(['category', 'images'], $per_page);
        }else{
            $results = (new AnnonceService)->search($critere , ['category', 'images'], $per_page);
        }
        // retourner les résultats
        return $results ;
    }

    public function apropos(){
        $avis = Review::all();
        return view('apropos', compact('avis'));
    }


    public function getAnnonces(Request $request){
        $annonces = $this->search_($request, 3);
        return view('location', compact('annonces'));
    }

    public function getSellAnnonces(Request $request){
        $annonces = $this->search_($request ,3);
        return view('sell', compact('annonces'));
    }

   
    public  function detailannonce($id) {
        // Créer une instance du service Annonce
        $annonceService = new AnnonceService();
    
        // Récupérer les annonces mises en avant
        $post = $annonceService->get($id);
        $annonces = $annonceService->getAll();
    
    
        // Retourner la vue avec les données
        return view('post-single', [
            'post' => $post,
            'annonces' => $annonces,
        ]);
    }

  
    public  function contact() {
        return view('contactus');
    }


    // public  function contactMessage(Request $request) {
    //     // Increase memory limit if necessary
    //     $validatedData = $request->validate(
    //     [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email',
    //         'phone' => 'required|max:15', // Add validation for phone number
    //         'subject' => 'required|max:255', // Add validation for subject
    //         'message' => 'required|max:1000',
    //     ]);
    //     // Envoi de l'e-mail
    //     Mail::to('koueviharry@gmail.com')->send(new ContactMail(
    //         $validatedData['name'],
    //         $validatedData['email'],
    //         $validatedData['phone'],
    //         $validatedData['subject'],
    //         $validatedData['message'])
    //     );
    
    //     // Initialize Google Client
    //     $client = new Client();
    //     $client->setAuthConfig('../service-account.json'); // Path to your service account JSON
    //     $client->addScope(Gmail::GMAIL_SEND);
    //     $client->setSubject('koueviharry@gmail.com'); // The user you want to impersonate
    
    //     // Create Gmail service
    //     $service = new Gmail($client);
    
    //     // Create email content
    //     $email = new \Google\Service\Gmail\Message();
    //     $rawMessageString = "From: ".$validatedData['email']."\r\n";
    //     $rawMessageString .= "To: koueviharry@gmail.com\r\n";
    //     $rawMessageString .= "Subject: Test Email\r\n\r\n";
    //     $rawMessageString .= "This is a test email sent from the Gmail API using PHP.";
    
    //     // Encode message in base64url format
    //     $rawMessage = base64_encode($rawMessageString);
    //     $email->setRaw($rawMessage);
    
    
    //     $service->users_messages->send('me', $email);
    
    //    return back()->with('success', 'Votre message a été envoyé avec succès !');
    
    // }
}
