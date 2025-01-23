<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    // Relation avec les annonces
    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
    public function article()
    {
        return $this->hasMany(Article::class);
    }
}
