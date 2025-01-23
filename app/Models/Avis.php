<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonce_id',
        'name',
        'email',
        'phone',
        'comment',
    ];

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
}
