<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AnnonceFavorie
 * 
 * @property int $ID_favorie
 * @property int $ID_annonce
 *
 * @package App\Models
 */
class AnnonceFavorie extends Model
{
	protected $table = 'AnnonceFavorie';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_favorie' => 'int',
		'ID_annonce' => 'int'
	];
}
