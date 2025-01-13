<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedAnnonce extends Model
{
    use HasFactory;

     // Définir les attributs qui peuvent être assignés en masse
     protected $fillable = [
        'annonce_id', // Si vous avez une relation avec un article
    ];

    // Relation avec l'utilisateur (si applicable)
    public function post()
    {
        return $this->belongsTo(Annonce::class);
    }
}
