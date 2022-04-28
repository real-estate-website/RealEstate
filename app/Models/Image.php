<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nom',
        'url',
    ];

    public function annonce()
    {
        return $this->belongsTo('App\Models\Annonce', 'annonce_id', 'id');
    }
}
