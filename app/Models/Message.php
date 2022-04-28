<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'objet',
        'contenu',
        'annonce_id',
        'expediteur_id',
        'destinataire_id',
    ];

    public function annonce()
    {
        return $this->belongsTo('App\Models\User', 'annonce_id', 'expediteur_id', 'destinataire_id');
    }

    public function expediteur()
    {
        return $this->belongsTo('App\Models\User', 'expediteur_id', 'id');
    }

    public function destinataire()
    {
        return $this->belongsTo('App\Models\User', 'destinataire_id', 'id');
    }
}
