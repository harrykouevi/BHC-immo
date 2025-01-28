<?php

use App\Jobs\ProcessImage;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Laravel\Facades\Image;
// use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleController ;
use Illuminate\Http\Request;
use App\Models\Article;

use App\Http\Controllers\ReviewController;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail; // Make sure to import your Mailable class
use App\Services\AnnonceService;
use App\Services\ArticleService;
use Google\Client;
use Google\Service\Gmail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;


/*
|--------------------------------------------------------------------------
| Front Web Routes
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

Route::get('/blogs', [ArticleController::class, 'seeArticles'] )->name('blogs');

Route::get('/blog-single',[ArticleController::class,'detailarticle'] )->name('blog-single') ;

Route::get('/contacts', [PagesController::class,"contact"] )->name('contact') ;

Route::get('/location',[PagesController::class,"getAnnonces"])->name('location');

Route::get('/sell',[PagesController::class,"getSellAnnonces"])->name('sell');

Route::post('/contacts/send_message',[PagesController::class,'sendMessage'])->name('send-message');

Route::get('/apropos',[PagesController::class,'apropos'])->name('apropos');

Route::get('/posts/{id}', [PagesController::class,'detailannonce'])->name('posts.show');
// Route pour soumettre un avis
Route::post('/posts/{id}/reviews', [ReviewController::class, 'storef'])->name('reviews.store');


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


// Route::post('/contact-up',[PagesController::class,'contactMessage']  )->name('send-me');

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
