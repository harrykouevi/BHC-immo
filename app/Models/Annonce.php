<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

     // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'titre', 'description', 'prix', 'surface', 'adresse', 'category_id', 'user_id',
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
}
