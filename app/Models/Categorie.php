<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * 
 * @property int $ID_categorie
 * @property string $Nom
 *
 * @package App\Models
 */
class Categorie extends Model
{
	protected $table = 'categorie';
	protected $primaryKey = 'ID_categorie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_categorie' => 'int'
	];

	protected $fillable = [
		'Nom'
	];
}
