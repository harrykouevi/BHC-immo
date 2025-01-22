<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
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
}
