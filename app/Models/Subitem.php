<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Subitem
 * 
 * @property float $idsubitem
 * @property string $namesubitem
 * @property string $descriptionsubitem
 * @property float $item_iditem
 * @property float $status_idstatus
 * 
 * @property \App\Models\Item $item
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $requestdetails
 *
 * @package App\Models
 */
class Subitem extends Eloquent
{
	protected $table = 'subitem';
	protected $primaryKey = 'idsubitem';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idsubitem' => 'float',
		'item_iditem' => 'float',
		'status_idstatus' => 'float'
	];

	protected $fillable = [
		'namesubitem',
		'descriptionsubitem',
		'item_iditem',
		'status_idstatus'
	];

	public function item()
	{
		return $this->belongsTo(\App\Models\Item::class, 'item_iditem');
	}

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function requestdetails()
	{
		return $this->hasMany(\App\Models\Requestdetail::class, 'subitem_idsubitem');
	}
}
