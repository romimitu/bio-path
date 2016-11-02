<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
	protected $table = 'images';
    protected $fillable = [
        'name', 'country', 'father', 'medicaldate', 'passport', 'gccdate', 'recrutoffice',
        'gccexpirydate', 'recrutingcontact', 'reportdate', 'medicalfee', 'reporttime',
        'remarks', 'password', 'image'
    ];
}
