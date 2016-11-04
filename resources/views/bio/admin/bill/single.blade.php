@extends('layouts.app')

@section('content')
<style>
.form-group{overflow: hidden;}

</style>
<div id="wrapper">
    @include('layouts.sidebar')
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body single-bill">                    
                    <div class="row">
                        <div class="col-sm-3">
                            <img class="img-responsive" src="/uploads/{{ $bill->image }}" alt="{{ $bill->name }}">
                        </div>
                        <div class="col-sm-6" align="center">
                            <h3>Bio-Path Medical Services Ltd.</h3>
                            <p>44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),</p>
                            <p>Dhaka-1000, Telephone: 9359112</p>
                            <p>MONEY RECEIPT</p>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table">
                                <tr>
                                    <td>Reg. Number</td> 
                                    <td>: {{ $bill->id }}</td>
                                </tr>
                                <tr>
                                    <td>Name </td> 
                                    <td>: {{ $bill->name }}</td>
                                </tr>
                                <tr>
                                    <td>Father Name</td> 
                                    <td>: {{ $bill->father }}</td> 
                                </tr>
                                <tr>
                                    <td>trasstrort No</td> 
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
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>: {{ $bill->receipt }}-{{ $bill->id }}</td>
                                </tr>
                                <tr>
                                    <td>Medical Date</td>
                                    <td>: {{ $bill->medicaldate }}</td>
                                </tr>
                                <tr>
                                    <td>GCC Slip Date</td>
                                    <td>: {{ $bill->slipdate }}</td>
                                </tr>
                                <tr>
                                    <td>GCC Epiry Date</td>
                                    <td>: {{ $bill->expirydate }}</td>
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
                        <p>When medical card will ready we will contact you via SMS or Phone call. For medical report please visit: www.biopathmedical.com</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
