<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Billing;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
class BillingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {        

    }

    public function create()
    {
        //
    }

    public function upload()
    {
        return view('bio.admin.bill.billing');
    }

    public function store(Request $request)
    {
        $data = $request->only('name', 'country', 'father', 'medicaldate', 'passport', 'slipdate', 'recrutoffice',
            'expirydate', 'recrutingcontact', 'reportdate', 'medicalfee', 'reporttime',
            'remarks', 'password', 'image');

        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();            
            $image->filePath = $name;
            $file->move(public_path().'/images/', $name);
        }
        Billing::create($data);

        return redirect('/bills');
    }

    public function show($id)
    {
        //
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
