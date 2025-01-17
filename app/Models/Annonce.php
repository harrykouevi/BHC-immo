<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

     // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        //use in view
        'titre','prix', 'description','adresse',
        'nbsalon',   'nbpieces','phonenumber',
        'wcdouche','content_',
        'category_id','user_id',
        //not use in view yet
         'surface',
        'contacts_',



        'draft', // Si vous souhaitez gérer les brouillons
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'annonce_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Relation avec l'utilisateur (administrateur)
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($annonce) {
            // Supprimer les images associées
            $annonce->images()->delete();

            // Supprimer les historiques associés
            //AnnonceHistory::where('annonce_id', $annonce->id)->delete();
        });
    }

}
