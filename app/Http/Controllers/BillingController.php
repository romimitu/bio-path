<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Agent;
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
        $allbills = Billing::orderBy('created_at', 'desc')->paginate();
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
 
        $data['image']=uploadFile('image',$request,'uploads/');
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


    public function preview($id)
    {
        $data = Billing::find($id);
        $pdf = \PDF::loadView('pdf.invoice', $data);
        return $pdf->stream('invoice.pdf');
    }

    public function autoComplete(Request $request) {
        $query = $request->get('term','');        
        $agents=Agent::where('name','LIKE','%'.$query.'%')->get();        
        $data=array();
        foreach ($agents as $agent) {
            $data[]=array('value'=>$agent->name, 'label'=>$agent->name.' --- '.$agent->mobile, 'auto'=>[$agent->name,$agent->mobile]);
        }
        if(count($data))
            return $data;
        else
            return ['value'=>'Not Found'];
    }

}
