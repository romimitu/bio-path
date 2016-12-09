<?php

namespace App\Http\Controllers;
use App\Testreport;
use App\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

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
        $datafrom = input::get('datefrom');
        $datato   = input::get('dateto');
        $report = DB::table('billings')
                ->whereBetween('created_at', ["$datafrom.' 00:00:01'", "$datato.' 23:59:59"])->get();
        return view('pdf.report');
    }
}
