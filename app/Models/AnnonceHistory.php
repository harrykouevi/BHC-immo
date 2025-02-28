<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceHistory extends Model
{
    use HasFactory;

     // Définir les attributs qui peuvent être assignés en masse
     protected $fillable = [
        'titre', 'description', 'prix', 'surface', 'adresse', 'category_id',
        'user_id', // Si vous avez une relation avec un utilisateur
        'annonce_id', // Si vous avez une relation avec un article
    ];

    // Relation avec l'utilisateur (si applicable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
