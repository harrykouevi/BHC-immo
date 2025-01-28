<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function seeArticles() {
        $articleService = new ArticleService();
        $articles = $articleService->getAll(); // Utilise la méthode pour récupérer les articles avec leurs catégories
        return view('blog',['articles' => $articles]);
    }

     

    public  function detailarticle() {
        $articleService = new ArticleService();
        $articles = $articleService->getAll(); // Utilise la méthode pour récupérer les articles avec leurs catégories
        return view('blog-single',['articles' => $articles]);
    }

}
