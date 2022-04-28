<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnonceCategorie extends Model
{
    use HasFactory;

    protected $table = 'annonces';

    protected $primaryKey = 'id';

    public function annonce()
    {
        return $this->belongsTo('App\Models\Annonce', 'annonce_id', 'id');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'categorie_id', 'id');
    }
}
