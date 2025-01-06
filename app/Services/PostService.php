<?php

namespace App\Services;

use App\Models\FeaturedPosts;
use App\Models\Post;
use App\Models\PostHistory;

class PostService
{
    public function getAllPosts()
    {
        return Post::all();
    }

    public function getFindedPosts(String $search){
        // Query posts with pagination, optionally filtering by search term
        return Post::where('title', 'like', '%' . $search . '%')
        ->paginate(9); // Adjust the number of items per page as needed
    }

    public function getPost($id)
    {
        return Post::findOrFail($id);
    }

    public function createPost(array $data)
    {
        return Post::create($data);
    }

    public function updatePost($id, array $data)
    {
        $post = $this->getPost($id);
        $post->update($data);
        return $post;
    }

    public function deletePost($id)
    {
        $post = $this->getPost($id);
        $post->delete();
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


    /**
     * Récupérer les articles à la une.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeaturedPosts()
    {
        return FeaturedPosts::with('post')->get();
    }

    /**
     * Ajouter un article à la une.
     *
     * @param int $articleId
     * @return FeaturedPost
     */
    public function addToFeatured($articleId)
    {
        return FeaturedPosts::create(['post_id' => $articleId]);
    }

    /**
     * Retirer un article à la une.
     *
     * @param int $articleId
     */
    public function removeFromFeatured($articleId)
    {
        $post = $this->getPost($articleId);
        if(!is_null($post)){
        FeaturedPosts::where('post_id', $articleId)
        ->delete();}
        return true;
    }
}
