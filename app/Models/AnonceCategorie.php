<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnonceCategorie
 * 
 * @property int $ID_annonce
 * @property int $ID_categorie
 *
 * @package App\Models
 */
class AnonceCategorie extends Model
{
	protected $table = 'anonceCategorie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_annonce' => 'int',
		'ID_categorie' => 'int'
	];
}
