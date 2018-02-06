<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Profilemodule
 * 
 * @property float $idprofilemodule
 * @property float $modules_idmodule
 * @property float $profile_idprofile
 * 
 * @property \App\Models\Module $module
 * @property \App\Models\Profile $profile
 *
 * @package App\Models
 */
class Profilemodule extends Eloquent
{
	protected $table = 'profilemodule';
	protected $primaryKey = 'idprofilemodule';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idprofilemodule' => 'float',
		'modules_idmodule' => 'float',
		'profile_idprofile' => 'float'
	];

	protected $fillable = [
		'modules_idmodule',
		'profile_idprofile'
	];

	public function module()
	{
		return $this->belongsTo(\App\Models\Module::class, 'modules_idmodule');
	}

	public function profile()
	{
		return $this->belongsTo(\App\Models\Profile::class, 'profile_idprofile');
	}
}
