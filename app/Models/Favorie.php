<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Favorie
 * 
 * @property int $ID_favorie
 * @property string $url
 *
 * @package App\Models
 */
class Favorie extends Model
{
	protected $table = 'favorie';
	protected $primaryKey = 'ID_favorie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_favorie' => 'int'
	];

	protected $fillable = [
		'url'
	];
}
