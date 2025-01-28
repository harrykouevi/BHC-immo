<?php

namespace App\Services;

use App\Models\FeaturedAnnonce;
use App\Models\Annonce;
use App\Models\AnnonceHistory;
use App\Models\Image;
use Illuminate\Database\Eloquent\Builder ;
use InvalidArgumentException;

class AnnonceService
{
    
    public function getAll(Array $relation = [], int $perPage = Null)
    {
        $annonce_builder =Annonce::query()->orderBy('id', 'asc') ;// Order by ;
        if(!empty($relation)){
            $annonce_builder = $this->getRelation( $annonce_builder ,$relation) ;
        }
        if($perPage){
            return  $annonce_builder->paginate($perPage);
        }else{
            return  $annonce_builder->get() ;
        }
    }

    public function search(String $search , Array $relation = [], int $perPage = Null)  {
        // Query annonces with pagination, optionally filtering by search term
        $annonce_builder = Annonce::where('titre', 'like', '%' . $search . '%')
                ->where('titre', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('adresse', 'LIKE', "%{$search}%")
                ->orWhere('prix', 'LIKE', "%{$search}%")
                ->orWhere('surface', 'LIKE', "%{$search}%")
                ->orWhere('wcdouche', 'LIKE', "%{$search}%")
                ->orWhere('nbpieces', 'LIKE', "%{$search}%")
                ->orWhere('nbsalon', 'LIKE', "%{$search}%")
                ->orWhereHas('Category', function ($query) use ($search) {
                    $query->where('nom', 'LIKE', "%{$search}%");
                }) ;

        if(!empty($relation)){
            $annonce_builder = $this->getRelation( $annonce_builder,$relation) ;
        }
        if($perPage){
            return  $annonce_builder->paginate($perPage);
        } else {
            return  $annonce_builder->get() ;
        }
    }

    private function getRelation(Builder $builder , Array $relations=[]) : Builder
    {
        foreach($relations as $relation){
            if (!is_string($relation)) {
                throw new InvalidArgumentException('All elements in relations must be strings.');
            }
        }
        return $builder->with($relations);
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
