<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Requestdetail
 * 
 * @property float $idrequestdetail
 * @property float $subitem_idsubitem
 * @property float $request_idrequest
 * @property \Carbon\Carbon $daterequestdetail
 * @property \Carbon\Carbon $dateresponsedetail
 * @property string $statusrequestdetail
 * @property string $descriptionrequestdetail
 * @property string $pathdocumentrequestdetail
 * @property float $iduserincharge
 * @property float $status_idstatus
 * @property float $commune_idcommune
 * 
 * @property \App\Models\Commune $commune
 * @property \App\Models\Request $request
 * @property \App\Models\Status $status
 * @property \App\Models\Subitem $subitem
 * @property \App\Models\User $user
 *
 * @package App\Models
 */
class Requestdetail extends Eloquent
{
	protected $primaryKey = 'idrequestdetail';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idrequestdetail' => 'float',
		'subitem_idsubitem' => 'float',
		'request_idrequest' => 'float',
		'iduserincharge' => 'float',
		'status_idstatus' => 'float',
		'commune_idcommune' => 'float'
	];

	protected $dates = [
		'daterequestdetail',
		'dateresponsedetail'
	];

	protected $fillable = [
		'subitem_idsubitem',
		'request_idrequest',
		'daterequestdetail',
		'dateresponsedetail',
		'statusrequestdetail',
		'descriptionrequestdetail',
		'pathdocumentrequestdetail',
		'iduserincharge',
		'status_idstatus',
		'commune_idcommune'
	];

	public function commune()
	{
		return $this->belongsTo(\App\Models\Commune::class, 'commune_idcommune');
	}

	public function request()
	{
		return $this->belongsTo(\App\Models\Request::class, 'request_idrequest');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function subitem()
	{
		return $this->belongsTo(\App\Models\Subitem::class, 'subitem_idsubitem');
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class, 'iduserincharge');
	}
}
