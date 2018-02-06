<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Item
 * 
 * @property float $iditem
 * @property string $nameitem
 * @property string $descriptionitem
 * @property float $status_idstatus
 * 
 * @property \App\Models\Status $status
 * @property \Illuminate\Database\Eloquent\Collection $subitems
 *
 * @package App\Models
 */
class Item extends Eloquent
{
	protected $table = 'item';
	protected $primaryKey = 'iditem';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'iditem' => 'float',
		'status_idstatus' => 'float'
	];

	protected $fillable = [
		'nameitem',
		'descriptionitem',
		'status_idstatus'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}

	public function subitems()
	{
		return $this->hasMany(\App\Models\Subitem::class, 'item_iditem');
	}
}
