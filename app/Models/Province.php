<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Province
 * 
 * @property float $idprovince
 * @property string $nameprovince
 * @property float $region_idregion
 * 
 * @property \App\Models\Region $region
 * @property \Illuminate\Database\Eloquent\Collection $communes
 *
 * @package App\Models
 */
class Province extends Eloquent
{
	protected $table = 'province';
	protected $primaryKey = 'idprovince';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idprovince' => 'float',
		'region_idregion' => 'float'
	];

	protected $fillable = [
		'nameprovince',
		'region_idregion'
	];

	public function region()
	{
		return $this->belongsTo(\App\Models\Region::class, 'region_idregion');
	}

	public function communes()
	{
		return $this->hasMany(\App\Models\Commune::class, 'province_idprovince');
	}
}
