<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Commune
 * 
 * @property float $idcommune
 * @property string $namecommune
 * @property float $province_idprovince
 * 
 * @property \App\Models\Province $province
 * @property \Illuminate\Database\Eloquent\Collection $requestdetails
 *
 * @package App\Models
 */
class Commune extends Eloquent
{
	protected $table = 'commune';
	protected $primaryKey = 'idcommune';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idcommune' => 'float',
		'province_idprovince' => 'float'
	];

	protected $fillable = [
		'namecommune',
		'province_idprovince'
	];

	public function province()
	{
		return $this->belongsTo(\App\Models\Province::class, 'province_idprovince');
	}

	public function requestdetails()
	{
		return $this->hasMany(\App\Models\Requestdetail::class, 'commune_idcommune');
	}
}
