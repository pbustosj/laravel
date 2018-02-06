<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Request
 * 
 * @property float $idrequest
 * @property float $client_idclient
 * @property \Carbon\Carbon $daterequest
 * @property \Carbon\Carbon $dateresponse
 * @property float $status_idstatus
 * @property float $iduserplanner
 * 
 * @property \App\Models\Client $client
 * @property \App\Models\Status $status
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $requestdetails
 *
 * @package App\Models
 */
class Request extends Eloquent
{
	protected $table = 'request';
	protected $primaryKey = 'idrequest';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idrequest' => 'float',
		'client_idclient' => 'float',
		'status_idstatus' => 'float',
		'iduserplanner' => 'float'
	];

	protected $dates = [
		'daterequest',
		'dateresponse'
	];

	protected $fillable = [
		'client_idclient',
		'daterequest',
		'dateresponse',
		'status_idstatus',
		'iduserplanner'
	];

	public function client()
	{
		return $this->belongsTo(\App\Models\Client::class, 'client_idclient');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'iduserplanner');
	}

	public function requestdetails()
	{
		return $this->hasMany(\App\Models\Requestdetail::class, 'request_idrequest');
	}
}
