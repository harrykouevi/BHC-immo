<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Il s"agit des images lié aux annonces
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    // Relation avec les annonces
    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function temporaryUrl(){
        return Null ;
    }
}
