<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 31 Jan 2018 18:34:15 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Contact
 * 
 * @property float $idcontact
 * @property string $mailcontact
 * @property string $subjectcontact
 * @property string $messagecontact
 * @property \Carbon\Carbon $senddatecontact
 * @property string $mailuserresponse
 * @property \Carbon\Carbon $senddateresponse
 * @property float $status_idstatus
 * 
 * @property \App\Models\Status $status
 *
 * @package App\Models
 */
class Contact extends Eloquent
{
	protected $table = 'contact';
	protected $primaryKey = 'idcontact';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idcontact' => 'float',
		'status_idstatus' => 'float'
	];

	protected $dates = [
		'senddatecontact',
		'senddateresponse'
	];

	protected $fillable = [
		'mailcontact',
		'subjectcontact',
		'messagecontact',
		'senddatecontact',
		'mailuserresponse',
		'senddateresponse',
		'status_idstatus'
	];

	public function status()
	{
		return $this->belongsTo(\App\Models\Status::class, 'status_idstatus');
	}
}
