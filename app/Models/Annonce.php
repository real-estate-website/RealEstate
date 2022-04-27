<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Annonce
 * 
 * @property int $ID_annonce
 * @property string $titre
 * @property string $description
 * @property string $type
 * @property int $prix
 * @property string $adresse
 * @property int $ID_users
 *
 * @package App\Models
 */
class Annonce extends Model
{
	protected $table = 'annonce';
	protected $primaryKey = 'ID_annonce';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_annonce' => 'int',
		'prix' => 'int',
		'ID_users' => 'int'
	];

	protected $fillable = [
		'titre',
		'description',
		'type',
		'prix',
		'adresse',
		'ID_users'
	];
}
