<?php

namespace App\Http\Controllers;
use App\Testreport;
use App\Billing;
use Illuminate\Support\Facades\Input;
use DB;
use PDF;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function getreport()
    {
    	$regno		=	Input::get('regno');
    	$password	=	Input::get('password');
		$report = DB::table('billings')
            ->where('regno', $regno)
            ->where('password', $password)
    		->leftJoin('testreports', 'billings.id', '=', 'testreports.billing_id')
    		->get();

        $pdf = PDF::loadView('pdf.getreport',compact('report'));
        return $pdf->stream('testreport.pdf');
    }
}
