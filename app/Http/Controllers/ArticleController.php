<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function seeArticles(Request $request) {

        $critere = $request->has('critere') ? $request->input('critere') : Null;
        $articleService = new ArticleService();
        // Vérifier que le critère n'est pas vide
        if(!$critere) {
            $results = $articleService->getAll(['category'], 1);
        }else{
            $results =  $articleService->search($critere , ['category'], 1);
        }
        return view('blog',['articles' => $results]);
    }

     

    public  function detailarticle() {
        $articleService = new ArticleService();
        $articles = $articleService->getAll(); // Utilise la méthode pour récupérer les articles avec leurs catégories
        return view('blog-single',['articles' => $articles]);
    }

}
