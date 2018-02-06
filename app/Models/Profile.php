<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Profile
 * 
 * @property float $idprofile
 * @property string $nameprofile
 * @property string $descriptionprofile
 * @property float $status_idstatus
 * 
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $modules
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Profile extends Eloquent
{
	protected $table = 'profile';
	protected $primaryKey = 'idprofile';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idprofile' => 'float',
		'status_idstatus' => 'float'
	];

	protected $fillable = [
		'nameprofile',
		'descriptionprofile',
		'status_idstatus'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function modules()
	{
		return $this->belongsToMany(\App\Models\Module::class, 'profilemodule', 'profile_idprofile', 'modules_idmodule')
					->withPivot('idprofilemodule');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'profile_idprofile');
	}
}
