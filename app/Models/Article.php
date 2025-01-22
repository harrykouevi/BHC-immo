<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',        // Ajoutez ce champ
        'contenu',      // Exemple d'autres champs
        'categorie_id',    // Exemple d'autres champs
    ];

    public function Category() 
{
    return $this->belongsTo(Category::class);
}



}

