@extends('layouts.app')

@section('content')
<style>
.form-group{overflow: hidden;}

</style>
<div id="wrapper">
    @include('layouts.sidebar')
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="single-report panel-default">
                <div class="panel-body">                    
                    <div class="row single-bill-header">                     
                        <div class="Page-title" style="text-align: center;"><b>MEDICAL TEST REPORT</b></div>
                        <div class="col-sm-2" style="text-align: right;">
                            <img class="img-responsive" src="{{ asset('images/assets/logo.png')}}"">
                        </div>
                        <div class="col-sm-5">
                            <h3>Bio-Path Medical Services Ltd.</h3>
                            <p>44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),<br>Dhaka-1000,</p>
                            <p>Telephone: 9359112 or 01712964971</p>
                            <a href="http://biopathmedical.com">www.biopathmedical.com</a>
                        </div>

                        <div class="col-sm-5">
                            <p>EXECUTIVE BORAD OF THE HEALTH MINISTERS COUNCIL FOR GCC STATES</p>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>G.C.C Code</td>
                                        <td><b>{{$report->gcccode }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>G.C.C Slip no</td>
                                        <td><b>{{$report->gccslipno }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Date Examined: <br> {{$report->billing->gcc_slipdate}}</td>
                                        <td>Report Expiry Date: <br> {{$report->billing->gcc_expirydate}}</td>
                                    </tr>
                                </tbody>                                
                            </table>
                        </div>
                    </div>
                    <hr/>                                  
                    <div class="row single-report-body">
                        <p style="text-align:center"><b>CANDIDATE INFORMATION</b></p>
                        <div class="col-sm-10">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td><b>{{$report->billing->name}}</b></td>
                                        <td>Date Of Birth</td>
                                        <td><b>{{$report->billing->birthday}}</b></td>
                                        <td>Maritial Status</td>
                                        <td><b>{{$report->billing->maritial_status}}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Height</td>
                                        <td><b>{{$report->height }}</b></td>
                                        <td>Weight</td>
                                        <td><b>{{$report->weight }}</b></td>
                                        <td>Nationality</td>
                                        <td><b>{{$report->billing->nationality}}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Place Of Issue</td>
                                        <td><b>Dhaka</b></td>
                                        <td>Travelling To</td>
                                        <td><b>{{$report->billing->country}}</b></td>
                                        <td>Passport No</td>
                                        <td><b>{{$report->billing->passport}}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Profession</td>
                                        <td><b>{{$report->profession }}</b></td>
                                        <td>Visa No</td>
                                        <td><b>{{$report->visano }}</b></td>
                                        <td>Visa Date</td>
                                        <td><b>{{$report->visadate }}</b></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><b>{{$report->billing->gender}}</b></td>
                                        <td>MOFANO</td>
                                        <td><b>{{$report->mofano }}</b></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive" src="{{ asset('uploads/'.$report->billing->image)}}"">
                        </div>
                    </div>                    
                    <div class="col-sm-12 report-para">
                        <p>History of any significant past illness including: 1) Allergy: NAD, 2) Others: NAD, 3) Psychiatric and neurological disorders(Epilepsy, depression, schizophrenia): NAD</p>
                        <p>'I hereby permit the: Bio-Path Medical Services Ltd and undersigned physician to fumish such information the company may need pertaining to my health status and other pertinent and medical findings and do hereby release them from any and all legal responsibility by doing so. I also certify that my medical history contained above is true and any false statement will disqualify me from my employemnet, benifits and claims.</p>
                    </div>                              
                    <div class="row single-report-body">
                        <div class="col-sm-12 test-list">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td colspan="2">MEDICAL EXAMINATION</td>
                                        <td colspan="2">LABORATORY INVESTIGATION</td>
                                    </tr>                                 
                                    <tr>
                                        <td>Type of EXAMINATION</td>
                                        <td>Result</td>
                                        <td>Type of LAB INVESTIGATION</td>
                                        <td>Result</td>
                                    </tr> 
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>EYE</td>
                                        <td>{{$report->eye }}</td>
                                        <td colspan="2"><b>Urine</b></td>
                                    </tr>                               
                                    <tr>
                                        <td>Commet.</td>
                                        <td>{{$report->commet }}</td>
                                        <td>Suger</td>
                                        <td>{{$report->sugar }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ear</td>
                                        <td>{{$report->ear }}</td>
                                        <td>ALBUMIN</td>
                                        <td>{{$report->albumin }}</td>
                                    </tr>                               
                                    <tr>
                                        <td colspan="2"><b>Systemic Exam: Cardio-vascular</b></td>
                                        <td>Bilharziasis</td>
                                        <td>{{$report->bilharziasis }}</td>
                                    </tr>
                                    <tr>
                                        <td>B.P</td>
                                        <td>{{$report->bp }}</td>
                                        <td colspan="2"><b>STOOL</b></td>
                                    </tr>                               
                                    <tr>
                                        <td>Heart</td>
                                        <td>{{$report->heart }}</td>
                                        <td colspan="2">Routine</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><b>RESPIRATORY EXAM</b></td>
                                        <td>1. Helminthes</td>
                                        <td>{{$report->helminthes }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>Lungs</td>
                                        <td>{{$report->lungs }}</td>
                                        <td>2. Giardia</td>
                                        <td>{{$report->giardia }}</td>
                                    </tr>
                                    <tr>
                                        <td>Chest X-Ray</td>
                                        <td>{{$report->chestxray }}</td>
                                        <td>3. Bilharziasis Culture</td>
                                        <td>{{$report->bilharziasisculture }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>Gastro Intestinal: Abdomen</td>
                                        <td>{{$report->abdomen }}</td>
                                        <td>4. Salmonella/Shegella</td>
                                        <td>{{$report->salmonella }}</td>
                                    </tr>
                                    <tr>
                                        <td>Others:Hernia</td>
                                        <td>{{$report->herina }}</td>
                                        <td>5. Cholera</td>
                                        <td>{{$report->cholera }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>Varicose Veins</td>
                                        <td>{{$report->varicoseveins }}</td>
                                        <td colspan="2"><b>Blood</b></td>
                                    </tr>
                                    <tr>
                                        <td>Extremities</td>
                                        <td>{{$report->extremities }}</td>
                                        <td>Blood Group</td>
                                        <td>{{$report->bloodgroup }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>Deformities</td>
                                        <td>{{$report->deformities }}</td>
                                        <td>Heamoglobin</td>
                                        <td>{{$report->haemoglobin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Skin</td>
                                        <td>{{$report->skin }}</td>
                                        <td>Thick Film For</td>
                                        <td>{{$report->thickfilmfor }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>Venereal Diseases</td>
                                        <td>{{$report->venerealdiseases }}</td>
                                        <td>1. Malaria</td>
                                        <td>{{$report->malaria }}</td>
                                    </tr>
                                    <tr>
                                        <td>C.N.S</td>
                                        <td>{{$report->cns }}</td>
                                        <td>Micro Filaria</td>
                                        <td>{{$report->microfilaria }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>Psychiatry</td>
                                        <td>{{$report->psychiatry }}</td>
                                        <td colspan="2"><b>Elisa</b></td>
                                    </tr>                            
                                    <tr>
                                        <td rowspan="3">Remarks</td>
                                        <td>{{$report->remarks }}</td>
                                        <td colspan="2"><b>Serolory</b></td>
                                    </tr>
                                    <tr>
                                        <td>1. R.B.S</td>
                                        <td>{{$report->rbs }}</td>
                                    </tr>
                                    <tr>
                                        <td>L.F.T.S</td>
                                        <td>{{$report->lfts }}</td>
                                    </tr>
                                    <tr>
                                        <td>Creatinine</td>
                                        <td>{{$report->creatinine }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" rowspan="5" width="50%">
                                        <p>Dear Sir/Madam, <br>
                                        Mentioned above is the medical report for {{$report->billing->name}} who is FIT for the above mentioned job according to the GCC criteria.</p>
                                        </td>
                                        <td>1. HIV I & II</td>
                                        <td>{{$report->hiv }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>2. HBsAg</td>
                                        <td>{{$report->hbsag }}</td>
                                    </tr>
                                    <tr>
                                        <td>3. Anti HCV</td>
                                        <td>{{$report->antihcv }}</td>
                                    </tr>                               
                                    <tr>
                                        <td>VDRL</td>
                                        <td> {{$report->vdrl }}</td>
                                    </tr>                            
                                    <tr>
                                        <td>TPHA</td>
                                        <td>{{$report->tpha }}</td>
                                    </tr>                         
                                    <tr>
                                        <td colspan="4">Cheif Physician</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <a href="{{ url('/testreports/printview/'. $report->id) }}" target="_blank">Print Preview</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
