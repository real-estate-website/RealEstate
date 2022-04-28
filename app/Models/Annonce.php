<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $table = 'annonces';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titre',
        'description',
        'type',
        'nbr_piece',
        'nbr_chambre',
        'surface',
        'prix',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie', 'categorie_id', 'id');
    }
}
