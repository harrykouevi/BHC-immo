<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

     // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'title',
        'content',
        'user_id', // Si vous avez une relation avec un utilisateur
        'draft', // Si vous souhaitez gérer les brouillons
    ];

    // Relation avec l'utilisateur (si applicable)
    public function user()
    {
        return $this->belongsTo(User::class) ;
    }
}
