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
                            <img class="img-responsive" src="" alt="">
                        </div>
                    </div>
                    <hr/>
                    <div class="row single-bill-body">
                        <div class="col-sm-6">
                            <table class="table">
                                <tr>
                                    <td>Reg. Number</td> 
                                    <td>: {{ $report->gcccode }}</td>
                                    <td>: {{ $report->id }}</td>
                                </tr>
                            </table>                            
                        </div>
                        <div class="col-sm-6">
                            <table class="table">
                                
                            </table>
                        </div>
                    </div>
                    <hr/>
                    <div class="col-sm-12" align="center">
                        <p>When medical card will ready we will contact you. For medical report please visit: biopathmedical.com</p>
                        <a href="" target="_blank">Print Preview</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
