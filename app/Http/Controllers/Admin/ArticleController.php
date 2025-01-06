<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostHistory;
use App\Services\PostService;
use Exception;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        // Fetch all posts for display using the service
        // $posts = $this->postService->getAllPosts();
        return view('admin.articles.index');
    }

    public function show($id)
    {
        // Display a single post using the service
        return view('admin.articles.show', ['post' => $this->postService->getPost($id)]);
    }

    public function edit($post)
    {

        // Show form to edit an existing post
        return view('admin.articles.create', ['postId' => $post]);
    }

    public function create()
    {
        return view('admin.articles.create',['postId' => Null]);
    }



    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'draft' => 'boolean',
    //     ]);

    //     // $data['user_id'] = Auth::id(); // Assurez-vous que l'utilisateur est connecté
    //     $article = Post::create($data);

    //     return redirect()->route('articles.index'); // Redirige vers la liste des articles
    // }



    // public function update(Request $request, Post $post)
    // {
    //     // Validation des données
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //     ]);

    //     // Enregistrer l'état actuel de l'article dans l'historique
    //     PostHistory::create([
    //         'post_id' => $post->id,
    //         // 'user_id' => Auth::id(),
    //         'user_id' => 1,
    //         'content' => $post->content, // Contenu avant mise à jour
    //         'title' => $post->title, // Titre avant mise à jour
    //     ]);

    //     // Mettre à jour l'article
    //     $post->update($request->only(['title', 'content']));

    //     return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès.');
    // }

    public function getLastFiveHistories($articleId)
    {
        return PostHistory::where('post_id', $articleId)
                            ->with('user') // Assurez-vous d'avoir défini la relation user dans PostHistory
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();
    }

    // public function destroy($id)
    // {
    //     // Delete a post using the service
    //     try {
    //         $this->postService->deletePost($id);
    //         return redirect()->route('posts.index')->with('success', 'Post supprimé avec succès.');
    //     } catch (Exception $e) {
    //         return redirect()->route('posts.index')->with('error', 'Erreur lors de la suppression du post.');
    //     }
    // }

    // public function addToFeatured($articleId)
    // {
    //     $this->postService->addToFeatured($articleId);
    //     return redirect()->back()->with('success', 'Article ajouté à la une avec succès.');
    // }

    public function getFeaturedPosts()
    {
        $featuredArticles = $this->postService->getFeaturedPosts();
        return view('articles.index', compact('featuredArticles'));

    }
}
