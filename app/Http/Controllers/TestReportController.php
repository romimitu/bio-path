<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testreport;
use App\Billing;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DB;

class TestReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    public function create($id)
    {
        $billdata = Billing::find($id);
        return view('bio.admin.testreport.create', [ 'billdata'=>$billdata ]);
    }

    public function store($id,Request $request)
    {
        $testrepor=$request->all();
        $testrepor['billing_id']=$id;
        Testreport::create($testrepor);
        return redirect('/bills');
    }

    public function show($id)
    {
        $reports = Testreport::find($id);
        return view('bio.admin.testreport.view', ['report' => $reports]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
