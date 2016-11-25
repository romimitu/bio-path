@extends('layouts.app')

@section('content')
<style>
.form-group{overflow: hidden;}

</style>
<div id="wrapper">
    @include('layouts.sidebar')
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="single-bill panel-default">
                <div class="panel-body single-bill">                    
                    <div class="row single-bill-header">
                        <div class="col-sm-2" style="text-align: right;">
                            <img class="img-responsive" src="{{ asset('images/assets/logo.png')}}"">
                        </div>
                        <div class="col-sm-8" align="center">
                            <h3>Bio-Path Medical Services Ltd.</h3>
                            <p>44, Naya Paltan (1st Floor). (Opposite to Paltan Thana), Dhaka-1000,</p>
                            <p>Telephone: 9359112 or 01712964971</p>
                            <a href="http://biopathmedical.com">www.biopathmedical.com</a>
                            <div class="Page-title"><b>RECEIPT FO MEDICAL TEST</b></div>
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive" src="{{ asset('uploads/'.$bill->image)}}" alt="{{ $bill->name }}">
                        </div>
                    </div>
                    <hr/>
                    <div class="row single-bill-body">
                        <div class="col-sm-6">
                            <table class="table">
                                <tr>
                                    <td>Reg. Number</td> 
                                    <td>: {{ $bill->regno }}</td>
                                </tr>
                                <tr>
                                    <td>Name </td> 
                                    <td>: {{ $bill->name }}</td>
                                </tr>
                                <tr>
                                    <td>Mobile No</td> 
                                    <td>: {{ $bill->mobile }}</td> 
                                </tr>
                                    <td>Father Name </td> 
                                    <td>: {{ $bill->father }}</td>
                                </tr>
                                <tr>
                                    <td>Mother Name</td> 
                                    <td>: {{ $bill->mother }}</td> 
                                </tr>
                                <tr>
                                    <td>Gender</td> 
                                    <td>: {{ $bill->gender }}</td> 
                                </tr>
                                <tr>
                                    <td>Passport No</td> 
                                    <td>: {{ $bill->passport }}</td>
                                </tr>
                                <tr>
                                    <td>Recruting Office </td>
                                    <td>: {{ $bill->recrutoffice }}</td> 
                                </tr>
                                <tr>
                                    <td>Recruting Contact </td>
                                    <td>: {{ $bill->recrutingcontact }}</td> 
                                </tr>
                                <tr>
                                    <td>Remarks</td> 
                                    <td>: {{ $bill->remarks }}</td> 
                                </tr>
                                <tr>
                                    <td>Medical Fee</td>
                                    <td>: {{ $bill->medicalfee }}</td> 
                                </tr>
                                <tr>
                                    <td>Passord</td>
                                    <td>: {{ $bill->password }}</td> 
                                </tr>
                            </table>                            
                        </div>
                        <div class="col-sm-6">
                            <table class="table">
                                <tr>
                                    <td>Reciept No</td>
                                    <td>: {{ $bill->receipt }}</td>
                                </tr>
                                <tr>
                                    <td>Birth Date</td>
                                    <td>: {{ $bill->birthday }}</td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>: {{ $bill->country }}</td>
                                </tr>
                                <tr>
                                    <td>Nationality</td>
                                    <td>: {{ $bill->nationality }}</td>
                                </tr>
                                <tr>
                                    <td>Maritial Status</td>
                                    <td>: {{ $bill->maritial_status }}</td>
                                </tr>
                                <tr>
                                    <td>Slip Date</td>
                                    <td>: {{ $bill->slipdate }}</td>
                                </tr>
                                <tr>
                                    <td>GCC Slip Date</td>
                                    <td>: {{ $bill->gcc_slipdate }}</td>
                                </tr>
                                <tr>
                                    <td>GCC Epiry Date</td>
                                    <td>: {{ $bill->gcc_expirydate }}</td>
                                </tr>
                                <tr>
                                    <td>Report Delivery Date</td>
                                    <td>: {{ $bill->reportdate }}</td>
                                </tr>
                                <tr>
                                    <td>Report Delivery Time</td>
                                    <td>: {{ $bill->reporttime }}</td>
                                </tr>
                                <tr><td> <br></td></tr>
                                <tr><td align="center">Signature</td></tr>
                            </table>
                        </div>
                    </div>
                    <hr/>
                    <div class="col-sm-12" align="center">
                        <p>When medical card will ready we will contact you. For medical report please visit: biopathmedical.com</p>
                        <a href="{{ url('/bill/preview/'. $bill->id) }}" target="_blank">Print Preview</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
