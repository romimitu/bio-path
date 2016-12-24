<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all">
    <link href="/css/style.css" rel="stylesheet">
    <title>Bio-Path Medical Services Ltd</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Ubuntu|Titillium+Web');
        body,hr{margin: 0px;padding: 0px;}
        td{font-family: 'Ubuntu', sans-serif;}
        p,a,li,span {font-family: 'Titillium Web', sans-serif;}
        td, p {margin: 0px;font-size: 11px;}
        .table-bordered{border: 1px solid #ddd;}
        table tr td:last-child{border-bottom: 0px solid #ddd;}
        .table-bordered td{font-size: 13px;padding: 2px; line-height: 0.8;color: #000; border-bottom: 1px solid #ddd;vertical-align: middle;}
        .report-para td {margin: 0 0 5px;font-size: 10px;}
        .pdf-body{border: 3px double #000;}
    </style>
</head>

<body>
    <main class="page-content-wrapper" role="main">
        <div class="pdf-body">            
            <div style="width: 100%;text-align: center;margin-top: 1px;">
                <p><u><b style="border: 2px solid #000;padding: 1px;background: #ccc;color: #000;">MEDICAL REPORT</b></u></p>
            </div>
            <table>
                <tr>
                    <td style="width: 450px;">
                        <img src="images/assets/banner.png" width="400" height="70" class="img-responsive">
                    </td>
                    <td>
                        <img src="images/assets/gcc-logo.png" width="160" height="25" class="img-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>G.C.C Code: <b>{{$report->gcccode }}</b></td>
                                    <td>G.C.C Slip no: <b>{{$report->gccslipno }}</b></td>
                                </tr>
                                <tr>
                                    <td>Date Examined: {{$report->billing->gcc_slipdate}}</td>
                                    <td>Report Expiry Date: {{$report->billing->gcc_expirydate}}</td>
                                </tr>
                            </tbody>                                
                        </table>
                    </td>
                </tr>
            </table>
            <hr/>                                  
            <div class="row single-report-body">
                <p style="text-align:center"><b><u>CANDIDATE INFORMATION</u></b></p>
                <table>
                    <tr>
                        <td style="width: 600px;">
                            <table class="table table-bordered" style="width: 100%;">
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
                        </td>
                        <td>
                            <img class="img-responsive" src="{{$report->billing->image}}" width="100" height="80">
                        </td>
                    </tr>
                </table>
            </div>                    
            <table class="report-para">
                <tr><td>History of any significant past illness including: 1) Allergy: NAD, 2) Others: NAD, 3) Psychiatric and neurological disorders (Epilepsy, depression, schizophrenia): NAD</td></tr>
                <tr><td>I hereby permit the: Bio-Path Medical Services Ltd and undersigned physician to fumish such information the company may need pertaining to my health status and other pertinent and medical findings and do hereby release them from any and all legal responsibility by doing so. I also certify that my medical history contained above is true and any false statement will disqualify me from my employemnet, benifits and claims.</td></tr>
            </table>
            <table class="table table-bordered">
                <thead style="text-align: center;font-weight: 700;">                                
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
                        <td colspan="2"><b>Biochemistry</b></td>
                    </tr>
                    <tr>
                        <td>Extremities</td>
                        <td>{{$report->extremities }}</td>
                        <td>1. R.B.S</td>
                        <td>{{$report->rbs }}</td>
                    </tr>                               
                    <tr>
                        <td>Deformities</td>
                        <td>{{$report->deformities }}</td>
                        <td>2. SGPT</td>
                        <td>{{$report->sgpt }}</td>
                    </tr>
                    <tr>
                        <td>Skin</td>
                        <td>{{$report->skin }}</td>
                        <td>3. SGOT</td>
                        <td>{{$report->sgot }}</td>
                    </tr>                               
                    <tr>
                        <td>Venereal Diseases</td>
                        <td>{{$report->venerealdiseases }}</td>
                        <td>4. SB</td>
                        <td>{{$report->sb }}</td>
                    </tr>
                    <tr>
                        <td>C.N.S</td>
                        <td>{{$report->cns }}</td>
                        <td>5. Crealine</td>
                        <td>{{$report->crealine }}</td>
                    </tr>                                
                    <tr>
                        <td>Psychiatry</td>
                        <td>{{$report->psychiatry }}</td>
                        <td>6. Malaria</td>
                        <td>{{$report->malaria }}</td>
                    </tr>                            
                    <tr>
                        <td colspan="2" rowspan="2">Remarks : {{$report->remarks }}</td>
                        <td>7. Micro Filaria</td>
                        <td>{{$report->microfilaria }}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Serology</b></td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="7" width="50%">
                        Dear Sir/Madam, <br>
                        Mentioned above is the medical report for {{$report->billing->name}} who is FIT for the above mentioned job according to the GCC criteria.
                        </td>
                        <td>1. HBsAg</td>
                        <td>{{$report->hbsag }}</td>
                    </tr>                              
                    <tr>
                        <td>2. VDRL</td>
                        <td> {{$report->vdrl }}</td>
                    </tr>                           
                    <tr>
                        <td>3. TPHA</td>
                        <td>{{$report->tpha }}</td>
                    </tr> 
                    <tr>
                        <td>4. Anti HCV</td>
                        <td>{{$report->antihcv }}</td>
                    </tr> 
                    <tr>
                        <td>5. HIV I & II</td>
                        <td>{{$report->hiv }}</td>
                    </tr>                              
                    <tr>
                        <td><b>Blood Group</b></td>
                        <td>{{$report->bloodgroup }}</td>
                    </tr>  
                    <tr>                                        
                        <td><b>Heamoglobin</b></td>
                        <td>{{$report->haemoglobin }}</td>
                    </tr>                        
                    <tr>
                        <td colspan="4">Cheif Physician</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table>
                <tr>
                    <td style="width: 500px;">Name:--------------------------</td>
                    <td>Signature:--------------------------</td>
                </tr>
            </table>
        </div>
    </main>
</body>
