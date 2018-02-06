<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Module
 * 
 * @property float $idmodule
 * @property string $namemodule
 * @property string $descriptionmodule
 * @property float $status_idstatus
 * 
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $profiles
 *
 * @package App\Models
 */
class Module extends Eloquent
{
	protected $primaryKey = 'idmodule';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idmodule' => 'float',
		'status_idstatus' => 'float'
	];

	protected $fillable = [
		'namemodule',
		'descriptionmodule',
		'status_idstatus'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function profiles()
	{
		return $this->belongsToMany(\App\Models\Profile::class, 'profilemodule', 'modules_idmodule', 'profile_idprofile')
					->withPivot('idprofilemodule');
	}
}
