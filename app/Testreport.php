<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testreport extends Model
{
    protected $fillable = [
        'billing_id','gcccode','gccslipno','height','weight','profession','visano','visadate','mofano','eye','commet', 'ear', 'bp','heart','lungs','chestxray','abdomen','herina', 'varicoseveins','extremities','deformities','skin','venerealdiseases','cns','psychiatry','sugar','albumin','bilharziasis','helminthes','giardia','bilharziasisculture','salmonella','cholera','bloodgroup','haemoglobin','thickfilmfor','malaria','microfilaria','remarks', 'rbs','lfts','creatinine','hiv','hbsag','antihcv','vdrl','tpha',
    ];


    public function billing()
    {
        return $this->belongsTo('App\Billing');
    }
}
