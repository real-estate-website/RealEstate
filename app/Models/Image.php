<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * 
 * @property int $ID_images
 * @property string $nom
 * @property string $url
 * @property int $ID_annonce
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $table = 'images';
	protected $primaryKey = 'ID_images';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_images' => 'int',
		'ID_annonce' => 'int'
	];

	protected $fillable = [
		'nom',
		'url',
		'ID_annonce'
	];
}
