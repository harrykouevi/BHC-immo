<?php

namespace App\Services;

use App\Models\FeaturedArticle;
use App\Models\Article;
use App\Models\Category;
use InvalidArgumentException;

class ArticleService
{
    public function getAll()
    {
        return Article::with('category')->get();
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
        return Article::with('category')->findOrFail($id);
    }

    // Si aucune relation supplémentaire n'est spécifiée, charge seulement "images"
    return Article::with('category')->findOrFail($id);
}





    public function getFinded(String $search){
        // Query annonces with pagination, optionally filtering by search term
        return Article::where('titre', 'like', '%' . $search . '%')
        ->paginate(9); // Adjust the number of items per page as needed
    }



    public function create(array $data)
    {
        // Créer l'annonce et associer l'utilisateur connecté
        $article = new Article();
        $article->titre = $data['titre'];
        $article->contenu = $data['contenu'];
        $article->categorie_id = $data['categorie_id'];
       //$article->user_id = auth()->id(); // ID de l'utilisateur connecté
        $article->save();
        return $article ;
    }

    public function update($id, array $data)
    {
        $article = $this->get($id);
        $article->update($data);
        return $article;
    }

    public function delete($id)
    {
        $article = $this->get($id);
        $article->delete();
    }







}
