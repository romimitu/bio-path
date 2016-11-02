<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing;

class BillingController extends Controller
{
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
        //
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
