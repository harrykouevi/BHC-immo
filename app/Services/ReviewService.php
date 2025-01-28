<?php

namespace App\Services;

use App\Models\FeaturedArticle;
use App\Models\Review;
use App\Models\Annonce;

class ArticleService
{
    public function getAll()
    {
        return Review::with('Annonce')->get();
    }

    public function get($id, array $relations = [])
{
    // Vérifie si des relations supplémentaires doivent être chargées
    if (!empty($relations)) {
        // Valide que chaque élément dans $relations est une chaîne
        foreach ($relations as $relation) {
            if (!is_string($relation)) {
                throw new InvalidArgumentException('All elements in relations must be strings.');
            }
        }
        // Charge les relations spécifiées dynamiquement
        return Review::with('Annonce')->findOrFail($id);
    }

    // Si aucune relation supplémentaire n'est spécifiée, charge seulement "images"
    return Review::with('Annonce')->findOrFail($id);
}





    public function search(String $search){
        // Query annonces with pagination, optionally filtering by search term
        return Review::where('review', 'like', '%' . $search . '%')
        ->paginate(9); // Adjust the number of items per page as needed
    }

    

    //public function create(array $data)
    //{
    //    // Créer l'annonce et associer l'utilisateur connecté
    //    $article = new Article();
    //    $article->titre = $data['titre'];
    //    $article->contenu = $data['contenu'];
    //    $article->categorie_id = $data['categorie_id'];
    //   //$article->user_id = auth()->id(); // ID de l'utilisateur connecté
    //    $article->save();
    //    return $article ;
    //}

    public function update($id, array $data)
    {
        $avis = $this->get($id);
        $avis->update($data);
        return $avis;
    }

    public function delete($id)
    {
        $avis = $this->get($id);
        $avis->delete();
    }



    //public function getLastFiveHistories($annonceId)
    //{
    //    return AnnonceHistory::where('annonce_id', $annonceId)
    //                        ->with('user') // Assurez-vous d'avoir défini la relation user dans AnnonceHistory
    //                        ->orderBy('created_at', 'desc')
    //                        ->take(5)
    //                        ->get();
    //}


    /**
     * Récupérer les articles à la une.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeatured()
    {
        return FeaturedArticle::with('Category')->get();
    }

    /**
     * Ajouter un article à la une.
     *
     * @param int $annonceId
     * @return FeaturedPost
     */
    //public function addToFeatured($annonceId)
    //{
    //    return FeaturedArticle::create(['article_id' => $articleId]);
    //}

    /**
     * Retirer un article à la une.
     *
     * @param int $articleId
     */
    /*
    public function removeFromFeatured($articleId)
    {
        $article = $this->get($articleId);
        if(!is_null($article)){
            FeaturedArticle::where('article_id', $articleId)
        ->delete();}
        return true;
    }*/


    
}
