<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleService;
    //
    public function __construct(ArticleService $articleService)
    {

        $this->ArticleService = $articleService;
    }


    public function create()
    {
        return view('admin.article.create');
    }


    public function index()
    {
        // Fetch all posts for display using the service
         //$posts = $this->ArticleService->getAll();
        return view('admin.article.index');
    }

    public function getFeatured()
    {
        $featuredarticles = $this->ArticleService->getFeatured();
        return view('article.index', compact('featuredarticles'));

    }


    public function show($id)
    {
        // Display a single post using the service
        return view('admin.article.index', ['post' => $this->ArticleService->get($id)]);
    }

    public function edit($post)
    {

        // Show form to edit an existing post
        return view('admin.article.create', ['postId' => $post]);
    }

    public function destroy($id)
    {
        try {
            $this->ArticleService->delete($id);
            return redirect()->route('admin.article.index')->with('success', 'Article supprimée avec succès.');
        } catch (Exception $e) {
            dd($e);
            // return redirect()->route('admin.annonces.index')->with('error', 'Erreur lors de la suppression de l\'annonce : ' . $e->getMessage());
        }
    }

    public function view_blog()
    {
        // Création d'articles statiques
        $articles = [
            (object)[
                'id' => 1,
                'title' => 'Découverte des meilleures pratiques Laravel',
                'category' => 'Développement',
                'created_at' => now()->subDays(5), // Date de création fictive
            ],
            (object)[
                'id' => 2,
                'title' => 'Comment optimiser votre application web',
                'category' => 'Performance',
                'created_at' => now()->subDays(10),
            ],
            (object)[
                'id' => 3,
                'title' => 'Les tendances du développement web en 2025',
                'category' => null, // Catégorie non spécifiée
                'created_at' => now()->subDays(15),
            ],
        ];

        return view('blog', compact('articles'));
    }
}
