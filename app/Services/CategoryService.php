<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getAll()
    {
        return Category::all();
    }

    public function getFinded(String $search){
        // Query annonces with pagination, optionally filtering by search term
        return Category::where('nom', 'like', '%' . $search . '%')
        ->paginate(9); // Adjust the number of items per page as needed
    }

    public function get($id)
    {
        return Category::findOrFail($id);
    }

    public function create(array $data)
    {
        // Créer l'annonce et associer l'utilisateur connecté
        $annonce = new Category();
        $annonce->nom = $data['nom'];
        $annonce->save();
        return $annonce ;
    }

    public function update($id, array $data)
    {
        $annonce = $this->get($id);
        $annonce->update($data);
        return $annonce;
    }

    public function delete($id)
    {
        $annonce = $this->get($id);
        $annonce->delete();
    }



}
