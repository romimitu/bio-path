<?php

namespace App\Http\Controllers;
use App\Testreport;
use App\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use PDF;

class IncomeReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
    	return view('bio.admin.income_reports.index');
    }

    public function report()
    {
        $datafrom = input::get('datefrom').' 00:00:01';
        $datato   = input::get('dateto').' 23:59:59';
        $reports = DB::table('billings')
                ->whereBetween('created_at', ["$datafrom", "$datato"])->get();
        $pdf = PDF::loadView('pdf.report',compact('reports'));
        return $pdf->stream('incomereport.pdf');
    }
}
