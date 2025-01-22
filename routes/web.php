<?php

use App\Jobs\ProcessImage;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;

use Illuminate\Http\Request;
use App\Models\Article;

use App\Http\Controllers\ReviewController;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Make sure to import your Mailable class
use App\Services\AnnonceService;
use Google\Client;
use Google\Service\Gmail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/login', function () {
    return view('auth.login');
})->name('login') ;

Route::get('/', function () {
    $featuredPosts = ( new AnnonceService())->getFeatured();
    $posts = $featuredPosts->map(function($featuredPost){  return $featuredPost->post ; }) ;

    $annonceService = new AnnonceService();
    $annonces = $annonceService->getAll(); // Utilise la méthode pour récupérer les annonces avec leurs catégories

    return view('welcome',['articles'=>$posts, 'annonces' => $annonces]);
})->name('accueil');


Route::get('/contacts', function () {
    return view('contactus');
})->name('contact') ;

Route::get('/location',[PagesController::class,"getAnnonces"])->name('location');


Route::get('/search',[PagesController::class,"search"])->name('search');

Route::post('/contacts/send_message',[PagesController::class,'sendMessage'])->name('send-message');
Route::get('/apropos',[PagesController::class,'apropos'])->name('apropos');;
Route::get('/blogs', function () {
    return view('blog');
})->name('blogs.index') ;

Route::get('/posts/{id}', function ($id) {
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
})->name('posts.show');

// Route pour afficher le formulaire de soumission d'avis
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews');

// Route pour stocker un nouvel avis
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('/A7d3F9kL2qX1', function () {
    return view('a-upload');
});

Route::post('/A7d3F9kL2qX1-up', function (Request $request) {
     // Increase memory limit if necessary
     ini_set('memory_limit', '556M'); // Adjust as needed
    $request->validate(['image' => 'required|image|mimes:jpg,jpeg,png,gif',
    'file_name'=> 'nullable|string',],
    [
        'file_name.string' => 'Le champ nom doit être une chaîne.',
        'image.required' => 'Un fichier image est requis.',
        'image.image' => 'Le fichier doit être une image.',
        'image.mimes' => 'L\'image doit être un fichier de type : jpg, jpeg, png, gif.',
    ]);
    $img =  $request->file('image') ;
    // Stocker l'image temporairement
    $path = $img->store('images');
    $getClientOriginalName = ($request->filled('file_name'))? $request->input('file_name')  .'.'.$img->getClientOriginalExtension() : $img->getClientOriginalName() ;

    // Envoyer le job à la queue
    ProcessImage::dispatch(storage_path('app/' . $path),$getClientOriginalName);

    return back()->with('success', 'L\'image est en cours de traitement !');

})->name('X1-up');


Route::post('/contact-up', function (Request $request) {
    // Increase memory limit if necessary
    $validatedData = $request->validate(
    [
        'name' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required|max:15', // Add validation for phone number
        'subject' => 'required|max:255', // Add validation for subject
        'message' => 'required|max:1000',
    ]);
    // Envoi de l'e-mail
    Mail::to('koueviharry@gmail.com')->send(new ContactMail(
        $validatedData['name'],
        $validatedData['email'],
        $validatedData['phone'],
        $validatedData['subject'],
        $validatedData['message'])
    );

    // Initialize Google Client
$client = new Client();
$client->setAuthConfig('../service-account.json'); // Path to your service account JSON
$client->addScope(Gmail::GMAIL_SEND);
$client->setSubject('koueviharry@gmail.com'); // The user you want to impersonate

// Create Gmail service
$service = new Gmail($client);

// Create email content
$email = new \Google\Service\Gmail\Message();
$rawMessageString = "From: ".$validatedData['email']."\r\n";
$rawMessageString .= "To: koueviharry@gmail.com\r\n";
$rawMessageString .= "Subject: Test Email\r\n\r\n";
$rawMessageString .= "This is a test email sent from the Gmail API using PHP.";

// Encode message in base64url format
$rawMessage = base64_encode($rawMessageString);
$email->setRaw($rawMessage);


    $service->users_messages->send('me', $email);

   return back()->with('success', 'Votre message a été envoyé avec succès !');

})->name('send-me');

/*
|--------------------------------------------------------------------------
| Admin Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Inclure les routes admin
require __DIR__ . '/admin.php';

