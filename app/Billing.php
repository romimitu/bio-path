<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
	protected $table = 'billings';

	protected $fillable = [
		'regno', 'receipt', 'name', 'mobile', 'birthday', 'country', 'father', 'mother',
		'gender','maritial_status','nationality', 'passport', 'slipdate', 'recrutoffice', 
		'gcc_slipdate', 'gcc_expirydate', 'recrutingcontact', 'reportdate',	'medicalfee', 
		'reporttime','remarks', 'password', 'image'
    ];


    public function testreport()
    {
        return $this->hasOne('App\Testreport');
    }
}
