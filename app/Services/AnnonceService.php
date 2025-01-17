<?php

namespace App\Services;

use App\Models\FeaturedAnnonce;
use App\Models\Annonce;
use App\Models\AnnonceHistory;
use App\Models\Image;

class AnnonceService
{
    public function getAll()
    {
        return Annonce::with('category')->get();
    }

    public function getFinded(String $search){
        // Query annonces with pagination, optionally filtering by search term
        return Annonce::where('titre', 'like', '%' . $search . '%')
        ->paginate(9); // Adjust the number of items per page as needed
    }

    public function get($id,Array $relations=[])
    {
        return Annonce::with('images')->findOrFail($id);
        if(!empty($relations)){
            foreach($relations as $relation){
                if (!is_string($relation)) {
                    throw new InvalidArgumentException('All elements in relations must be strings.');
                }
            }
            $e = implode(", ", $relations) ;
            return Annonce::with($e)->findOrFail($id);
        }else{
            return Annonce::findOrFail($id);
        }

    }

    public function create(array $data)
    {
        // Créer l'annonce et associer l'utilisateur connecté
        $annonce = new Annonce();
        $annonce->titre = $data['titre'];
        $annonce->description = $data['description'];
        $annonce->prix = $data['prix'];
        $annonce->nbpieces = $data['nbpieces'];
        $annonce->nbsalon = $data['nbsalon'];
        $annonce->wcdouche = $data['wcdouche'];
        $annonce->adresse = $data['adresse'];
        $annonce->phonenumber = $data['phonenumber'];
        $annonce->content_ = $data['content_'];
        $annonce->contacts_ = $data['contacts_'];
        $annonce->category_id = $data['category_id'];
        $annonce->user_id = auth()->id(); // ID de l'utilisateur connecté
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



    public function getLastFiveHistories($annonceId)
    {
        return AnnonceHistory::where('annonce_id', $annonceId)
                            ->with('user') // Assurez-vous d'avoir défini la relation user dans AnnonceHistory
                            ->orderBy('created_at', 'desc')
                            ->take(5)
                            ->get();
    }


    /**
     * Récupérer les articles à la une.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getFeatured()
    {
        return FeaturedAnnonce::with('annonce')->get();
    }

    /**
     * Ajouter un article à la une.
     *
     * @param int $annonceId
     * @return FeaturedPost
     */
    public function addToFeatured($annonceId)
    {
        return FeaturedAnnonce::create(['annonce_id' => $annonceId]);
    }

    /**
     * Retirer un article à la une.
     *
     * @param int $annonceId
     */
    public function removeFromFeatured($annonceId)
    {
        $annonce = $this->get($annonceId);
        if(!is_null($annonce)){
        FeaturedAnnonce::where('annonce_id', $annonceId)
        ->delete();}
        return true;
    }

    public function imgGetAll()
    {
        return Image::get();
    }

    public function imgGet($id)
    {
        return Image::findOrFail($id);
    }

    public function imgCreate(array $data)
    {
        // Créer l'image et associer l'utilisateur connecté
        $image = new Image();
        $image->path = $data['path'];
        $image->annonce_id = $data['annonce_id'];
        $image->save();
        return $image ;
    }

    public function imgUpdate($id, array $data)
    {
        $image = $this->imgGet($id);
        $image->update($data);
        return $image;
    }

    public function imgDelete($id)
    {
        $image = $this->get($id);
        $image->delete();
    }
}
