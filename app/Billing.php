<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
	protected $table = 'billings';

	protected $fillable = [
		'regno', 'receipt', 'name', 'mobile', 'birthday', 'country', 'father', 'mother',
		'medicaldate', 'passport', 'slipdate', 'recrutoffice', 'gcc_slipdate', 
		'gcc_expirydate', 'recrutingcontact', 'reportdate',	'medicalfee', 'reporttime',
		'remarks', 'password', 'image'
    ];
}
