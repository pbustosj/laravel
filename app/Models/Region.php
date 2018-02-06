<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Region
 * 
 * @property float $idregion
 * @property string $nameregion
 * @property string $iso_3166_2_cl
 * 
 * @property \Illuminate\Database\Eloquent\Collection $provinces
 *
 * @package App\Models
 */
class Region extends Eloquent
{
	protected $table = 'region';
	protected $primaryKey = 'idregion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idregion' => 'float'
	];

	protected $fillable = [
		'nameregion',
		'iso_3166_2_cl'
	];

	public function provinces()
	{
		return $this->hasMany(\App\Models\Province::class, 'region_idregion');
	}
}
