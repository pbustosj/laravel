<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Client
 * 
 * @property float $idclient
 * @property float $runclient
 * @property string $dvclient
 * @property string $nameclient
 * @property \Carbon\Carbon $datecreateclient
 * @property float $clienttype_idclienttype
 * @property float $status_idstatus
 * 
 * @property \App\Models\Clienttype $clienttype
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $requests
 *
 * @package App\Models
 */
class Client extends Eloquent
{
	protected $table = 'client';
	protected $primaryKey = 'idclient';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idclient' => 'float',
		'runclient' => 'float',
		'clienttype_idclienttype' => 'float',
		'status_idstatus' => 'float'
	];

	protected $dates = [
		'datecreateclient'
	];

	protected $fillable = [
		'runclient',
		'dvclient',
		'nameclient',
		'datecreateclient',
		'clienttype_idclienttype',
		'status_idstatus'
	];

	public function clienttype()
	{
		return $this->belongsTo(\App\Models\Clienttype::class, 'clienttype_idclienttype');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function requests()
	{
		return $this->hasMany(\App\Models\Request::class, 'client_idclient');
	}

	
}
