<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnnonceHistory;
use App\Services\AnnonceService;
use Exception;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    protected $annonceService;

    public function __construct(AnnonceService $annonceService)
    {
        $this->annonceService = $annonceService;
    }

    public function index()
    {
        // Fetch all posts for display using the service
        // $posts = $this->annonceService->getAll();
        return view('admin.annonces.index');
    }

    public function show($id)
    {
        // Display a single post using the service
        return view('admin.annonces.show', ['post' => $this->annonceService->get($id)]);
    }

    public function edit($post)
    {

        // Show form to edit an existing post
        return view('admin.annonces.create', ['postId' => $post]);
    }

    public function create()
    {
        return view('admin.annonces.create',['postId' => Null]);
    }

    public function getLastFiveHistories($articleId)
    {
        return AnnonceHistory::where('post_id', $articleId)
                            ->with('user') // Assurez-vous d'avoir défini la relation user dans AnnonceHistory
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();
    }


    public function getFeatured()
    {
        $featuredannonces = $this->annonceService->getFeatured();
        return view('annonces.index', compact('featuredannonces'));

    }
}
