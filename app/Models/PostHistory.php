<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostHistory extends Model
{
    use HasFactory;

     // Définir les attributs qui peuvent être assignés en masse
     protected $fillable = [
        'title', // titre avant mise à jour
        'content', // Contenu avant mise à jour
        'user_id', // Si vous avez une relation avec un utilisateur
        'post_id', // Si vous avez une relation avec un article
    ];

    // Relation avec l'utilisateur (si applicable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
