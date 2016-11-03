<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
	protected $table = 'billings';

	protected $fillable = [
        'name', 'country', 'father', 'medicaldate', 'passport', 'slipdate', 'recrutoffice',
        'expirydate', 'recrutingcontact', 'reportdate', 'medicalfee', 'reporttime',
        'remarks', 'password', 'image'
    ];
}
