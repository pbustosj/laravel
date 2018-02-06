<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Clienttype
 * 
 * @property float $idclienttype
 * @property string $nameclienttype
 * @property string $descriptionclienttype
 * @property float $status_idstatus
 * 
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $clients
 *
 * @package App\Models
 */
class Clienttype extends Eloquent
{
	protected $table = 'clienttype';
	protected $primaryKey = 'idclienttype';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idclienttype' => 'float',
		'status_idstatus' => 'float'
	];

	protected $fillable = [
		'nameclienttype',
		'descriptionclienttype',
		'status_idstatus'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function clients()
	{
		return $this->hasMany(\App\Models\Client::class, 'clienttype_idclienttype');
	}
}
