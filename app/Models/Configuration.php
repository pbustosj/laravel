<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Configuration
 * 
 * @property float $idconfiguration
 * @property string $keyconfiguration
 * @property string $valueconfiguration
 *
 * @package App\Models
 */
class Configuration extends Eloquent
{
	protected $table = 'configuration';
	protected $primaryKey = 'idconfiguration';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idconfiguration' => 'float'
	];

	protected $fillable = [
		'keyconfiguration',
		'valueconfiguration'
	];
}
