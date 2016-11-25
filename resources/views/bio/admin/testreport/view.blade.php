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
                                        <td><b>05-02-2016</b></td>
                                    </tr>
                                    <tr>
                                        <td>G.C.C Slip no</td>
                                        <td><b>GCC/25/54/547</b></td>
                                    </tr>
                                    <tr>
                                        <td>Date Examined: <br> 06-05-2016</td>
                                        <td>Report Expiry Date: <br> 06-05-2016</td>
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
                                        <td><b>Jakir Hussain</b></td>
                                        <td>Age</td>
                                        <td><b>28</b></td>
                                        <td>Maritial Status</td>
                                        <td><b>Married</b></td>
                                    </tr>
                                    <tr>
                                        <td>Height</td>
                                        <td><b>160cm</b></td>
                                        <td>Weight</td>
                                        <td><b>55Kg</b></td>
                                        <td>Nationality</td>
                                        <td><b>Bangladeshi</b></td>
                                    </tr>
                                    <tr>
                                        <td>Place Of Issue</td>
                                        <td><b>Dhaka</b></td>
                                        <td>Travelling To</td>
                                        <td><b>Iaran</b></td>
                                        <td>Passport No</td>
                                        <td><b>2548454</b></td>
                                    </tr>
                                    <tr>
                                        <td>Profession</td>
                                        <td><b>Worker</b></td>
                                        <td>Visa No</td>
                                        <td><b>2354311245</b></td>
                                        <td>Visa Date</td>
                                        <td><b>06-08-2015</b></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><b>Male</b></td>
                                        <td>MOFANO</td>
                                        <td><b>223564</b></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive" src="{{ asset('images/assets/logo.png')}}"">
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
                                        <td>Lt. 6/6 Rt. 6/6</td>
                                        <td colspan="2"><b>Urine</b></td>
                                    </tr>                               
                                    <tr>
                                        <td>Commet.</td>
                                        <td></td>
                                        <td>Suger</td>
                                        <td>Absent</td>
                                    </tr>
                                    <tr>
                                        <td>Ear</td>
                                        <td>Lt. NAD Rt. NAD</td>
                                        <td>ALBUMIN</td>
                                        <td>Not Detected</td>
                                    </tr>                               
                                    <tr>
                                        <td colspan="2"><b>Systemic Exam: Cardio-vascular</b></td>
                                        <td>Bilharziasis</td>
                                        <td>Not seen</td>
                                    </tr>
                                    <tr>
                                        <td>B.P</td>
                                        <td>120/80</td>
                                        <td colspan="2"><b>STOOL</b></td>
                                    </tr>                               
                                    <tr>
                                        <td>Heart</td>
                                        <td>NAD</td>
                                        <td colspan="2">Routine</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><b>RESPIRATORY EXAM</b></td>
                                        <td>1. Helminthes</td>
                                        <td>Not seen</td>
                                    </tr>                               
                                    <tr>
                                        <td>Lungs</td>
                                        <td>NAD</td>
                                        <td>2. Giardia</td>
                                        <td>Not Seen</td>
                                    </tr>
                                    <tr>
                                        <td>Chest X-Ray</td>
                                        <td>NAD</td>
                                        <td>3. Bilharziasis Culture</td>
                                        <td>Not seen</td>
                                    </tr>                               
                                    <tr>
                                        <td>Gastro Intestinal: Abdomen</td>
                                        <td>NAD</td>
                                        <td>4. Salmonella/Shegella</td>
                                        <td>NAD</td>
                                    </tr>
                                    <tr>
                                        <td>Others:Hernia</td>
                                        <td>NAD</td>
                                        <td>5. Cholera</td>
                                        <td>NAD</td>
                                    </tr>                               
                                    <tr>
                                        <td>Varicose:Hernia</td>
                                        <td>NAD</td>
                                        <td colspan="2"><b>Blood</b></td>
                                    </tr>
                                    <tr>
                                        <td>Extremities</td>
                                        <td>NAD</td>
                                        <td>Blood Group</td>
                                        <td>A +ve</td>
                                    </tr>                               
                                    <tr>
                                        <td>Deformities</td>
                                        <td>NAD</td>
                                        <td>Heamoglobin</td>
                                        <td>0.5</td>
                                    </tr>
                                    <tr>
                                        <td>Skin</td>
                                        <td>NAD</td>
                                        <td>Thick Film For</td>
                                        <td>Absent</td>
                                    </tr>                               
                                    <tr>
                                        <td>Venereal Diseases</td>
                                        <td>NAD</td>
                                        <td>1. Malaria</td>
                                        <td>Not Detected</td>
                                    </tr>
                                    <tr>
                                        <td>C.N.S</td>
                                        <td>NAD</td>
                                        <td>Micro Filaria</td>
                                        <td>Not Detected</td>
                                    </tr>                               
                                    <tr>
                                        <td>Psychiatry</td>
                                        <td>NAD</td>
                                        <td colspan="2"><b>Elisa</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" rowspan="5" width="50%">
                                        <p>Dear Sir/Madam, <br>
                                        Mentioned above is the medical report for Mr. Jakir Hussain who is FIT for the above mentioned job according to the GCC criteria.</p>
                                        </td>
                                        <td>1. HIV I & II</td>
                                        <td>Negetive</td>
                                    </tr>                               
                                    <tr>
                                        <td>2. HBsAg</td>
                                        <td>Negetive</td>
                                    </tr>
                                    <tr>
                                        <td>3. Anti HCV</td>
                                        <td>Negetive</td>
                                    </tr>                               
                                    <tr>
                                        <td>VDRL</td>
                                        <td> Non Reactive</td>
                                    </tr>                            
                                    <tr>
                                        <td>TPHA</td>
                                        <td>Negetive</td>
                                    </tr>                         
                                    <tr>
                                        <td colspan="4">Cheif Physician</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                    <div class="rorw">
                        <div class="col-sm-6">
                            Name:--------------------------
                        </div>
                        <div class="col-sm-6" align="right">
                            Signature:--------------------------
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
