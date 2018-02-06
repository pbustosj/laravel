<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property float $iduser
 * @property float $runuser
 * @property string $dvuser
 * @property string $firstnameuser
 * @property string $lastnameuser
 * @property string $mailuser
 * @property string $passuser
 * @property float $profile_idprofile
 * @property float $status_idstatus
 * 
 * @property \App\Models\Profile $profile
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $requests
 * @property \Illuminate\Database\Eloquent\Collection $requestdetails
 *
 * @package App\Models
 */
class User extends Eloquent
{
	protected $table = 'user';
	protected $primaryKey = 'iduser';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'iduser' => 'float',
		'runuser' => 'float',
		'profile_idprofile' => 'float',
		'status_idstatus' => 'float'
	];

	protected $fillable = [
		'runuser',
		'dvuser',
		'firstnameuser',
		'lastnameuser',
		'mailuser',
		'passuser',
		'profile_idprofile',
		'status_idstatus'
	];

	public function profile()
	{
		return $this->belongsTo(\App\Models\Profile::class, 'profile_idprofile');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function requests()
	{
		return $this->hasMany(\App\Models\Request::class, 'iduserplanner');
	}

	public function requestdetails()
	{
		return $this->hasMany(\App\Models\Requestdetail::class, 'iduserincharge');
	}

	
}
