<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Status
 * 
 * @property float $idstatus
 * @property string $namestatus
 * @property string $descriptionstatus
 * @property string $tipeofstatus
 * 
 * @property \Illuminate\Database\Eloquent\Collection $clients
 * @property \Illuminate\Database\Eloquent\Collection $clienttypes
 * @property \Illuminate\Database\Eloquent\Collection $contacts
 * @property \Illuminate\Database\Eloquent\Collection $items
 * @property \Illuminate\Database\Eloquent\Collection $modules
 * @property \Illuminate\Database\Eloquent\Collection $profiles
 * @property \Illuminate\Database\Eloquent\Collection $requests
 * @property \Illuminate\Database\Eloquent\Collection $requestdetails
 * @property \Illuminate\Database\Eloquent\Collection $subitems
 * @property \Illuminate\Database\Eloquent\Collection $users
 *
 * @package App\Models
 */
class Status extends Eloquent
{
	protected $table = 'status';
	protected $primaryKey = 'idstatus';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idstatus' => 'float'
	];

	protected $fillable = [
		'namestatus',
		'descriptionstatus',
		'tipeofstatus'
	];

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class, 'status_idstatus');
	}

	public function clienttypes()
	{
		return $this->hasMany(\App\Models\Clienttype::class, 'status_idstatus');
	}

	public function contacts()
	{
		return $this->hasMany(\App\Models\Contact::class, 'status_idstatus');
	}

	public function items()
	{
		return $this->hasMany(\App\Models\Item::class, 'status_idstatus');
	}

	public function modules()
	{
		return $this->hasMany(\App\Models\Module::class, 'status_idstatus');
	}

	public function profiles()
	{
		return $this->hasMany(\App\Models\Profile::class, 'status_idstatus');
	}

	public function requests()
	{
		return $this->hasMany(\App\Models\Request::class, 'status_idstatus');
	}

	public function requestdetails()
	{
		return $this->hasMany(\App\Models\Requestdetail::class, 'status_idstatus');
	}

	public function subitems()
	{
		return $this->hasMany(\App\Models\Subitem::class, 'status_idstatus');
	}

	public function users()
	{
		return $this->hasMany(\App\Models\User::class, 'status_idstatus');
	}
}
