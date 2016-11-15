<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Billing;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use DB;

class BillingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {        
        $allbills = Billing::all();
        return view('bio.admin.bill.view', ['billing' => $allbills]);
    }

    public function create()
    {

        $lastInserted = Billing::all()->last();
        return view('bio.admin.bill.billing', [ 'lastInsertedID'=>$lastInserted ]);
    }

    public function upload()
    {
        
    }

    public function store(Request $request)
    {
        $data = $request->except('image');
 
        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
           
            $name = $timestamp. '-' .$file->getClientOriginalName();            
            $data['image'] = $name;
            $file->move(public_path().'/uploads/', $name);
        }
        Billing::create($data);
 
        $pdf = \PDF::loadView('pdf.invoice', $data);
        Session::flash('msg', 'Data Successfully Save!!');
        return $pdf->stream('invoice.pdf');
    }


    public function show($id)
    {
        $allBills = Billing::find($id);
        return view('bio.admin.bill.single', ['bill' => $allBills]);

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
        $bill = Billing::find($id);            
        $bill->destroy($id);
        
        Session::flash('delete', 'Data Successfully Deleted!!');
        return redirect('/bills');
    }


    public function print(Request $request)
    {
        $data = Billing::find($id);
        $pdf = \PDF::loadView('pdf.invoice', $data);
        return $pdf->stream('invoice.pdf');
    }

}
