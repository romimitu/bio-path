<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="screen">
    <link href="/css/style.css" rel="stylesheet">
    <style>
        body{margin: 5px;padding: 5px;}
        h3{margin: 5px;}
        p {margin: 0 0 5px;}
        .pdf-body{border: 5px double #000;margin-bottom: 20px;}
        @font-face{
            font-family: 'Oswald', 'Ubuntu', 'Titillium Web';
            src:url('https://fonts.googleapis.com/css?family=Oswald|Ubuntu|Titillium+Web');
        }
    </style>
</head>

<body>
    <div class="col-sm-12 pdf-body">
        <table>
            <tr>
                <td style="width: 100px;text-align: right;">
                    <img src="images/assets/logo.png" width="90" height="70" class="img-responsive">
                </td>
                <td style="text-align: center;width: 460px">
                    <h3 style="margin: 0;font-size: 28px;color: #ff1100;line-height: 18px;">Bio-Path Medical Services Ltd.</h3>
                    <p style="margin: 0;color: #000;font-size: 14px;">44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),Dhaka-1000,</p>
                    <p style="margin: 0;color: #000;font-size: 14px;">Telephone: 9359112 or 01712964971</p>
                    <a href="http://biopathmedical.com">www.biopathmedical.com</a>
                    <p style="margin:5px 0px;"><u><b style="border: 2px solid #000;padding: 3px;background: #ccc;color: #000;">RECEIPT FOR MEDICAL REPORT</b></u></p>
                </td>
                <td style="width: 120px;">
                    <img src="uploads/{{$image}}" alt="{{$image}}" width="120" height="110" class="img-responsive">
                </td>
            </tr>
        </table>  
        <hr/>
        <table>
            <tr>
                <td style="width: 50px;"> </td>
                <td class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td>Reg. Number</td> 
                            <td>: {{ $regno }}</td>
                        </tr>
                        <tr>
                            <td>Name </td> 
                            <td>: {{ $name }}</td>
                        </tr>
                        <tr>
                            <td>Mobile No </td> 
                            <td>: {{ $mobile }}</td>
                        </tr>
                        <tr>
                            <td>Father Name</td> 
                            <td>: {{ $father }}</td> 
                        </tr>
                        <tr>
                            <td>Mother Name</td> 
                            <td>: {{ $mother }}</td> 
                        </tr>
                        <tr>
                            <td>trasstrort No</td> 
                            <td>: {{ $passport }}</td>
                        </tr>
                        <tr>
                            <td>Recruting Office </td>
                            <td>: {{ $recrutoffice }}</td> 
                        </tr>
                        <tr>
                            <td>Recruting Contact </td>
                            <td>: {{ $recrutingcontact }}</td> 
                        </tr>
                        <tr>
                            <td>Remarks</td> 
                            <td>: {{ $remarks }}</td> 
                        </tr>
                        <tr>
                            <td>Medical Fee</td>
                            <td>: {{ $medicalfee }}</td> 
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: {{ $password }}</td> 
                        </tr>
                    </table>                            
                </td>
                <td style="width: 100px;"> </td>
                <td class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td>Reciept No</td>
                            <td>: {{ $receipt }}</td>
                        </tr>
                        <tr>
                            <td>Birth Date</td>
                            <td>: {{ $birthday }}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>: {{ $country }}</td>
                        </tr>
                        <tr>
                            <td>Medical Date</td>
                            <td>: {{ $medicaldate }}</td>
                        </tr>
                        <tr>
                            <td>Slip Date</td>
                            <td>: {{ $slipdate }}</td>
                        </tr>
                        <tr>
                            <td>GCC Slip Date</td>
                            <td>: {{ $gcc_slipdate }}</td>
                        </tr>
                        <tr>
                            <td>GCC Epiry Date</td>
                            <td>: {{ $gcc_expirydate }}</td>
                        </tr>
                        <tr>
                            <td>Report Delivery Date</td>
                            <td>: {{ $reportdate }}</td>
                        </tr>
                        <tr>
                            <td>Report Delivery Time</td>
                            <td>: {{ $reporttime }}</td>
                        </tr>
                        <tr><td> <br></td></tr>
                        <tr><td align="center">Signature</td></tr>
                    </table>
                </td>
            </tr>
        </table>
        <hr/>
        <div class="col-sm-12" align="center">
            <p style="font-size: 14px;">When medical card will ready we will contact you.For more details please visit: biopathmedical.com</p>
        </div>
    </div>



    <div class="col-sm-12 pdf-body">
        <table>
            <tr>
                <td style="width: 100px;text-align: right;">
                    <img src="images/assets/logo.png" width="90" height="70" class="img-responsive">
                </td>
                <td style="text-align: center;width: 460px">
                    <h3 style="margin: 0;font-size: 28px;color: #ff1100;line-height: 18px;">Bio-Path Medical Services Ltd.</h3>
                    <p style="margin: 0;color: #000;font-size: 14px;">44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),Dhaka-1000,</p>
                    <p style="margin: 0;color: #000;font-size: 14px;">Telephone: 9359112 or 01712964971</p>
                    <a href="http://biopathmedical.com">www.biopathmedical.com</a>
                    <p style="margin:5px 0px;"><u><b style="border: 2px solid #000;padding: 3px;background: #ccc;color: #000;">RECEIPT FOR MEDICAL REPORT</b></u></p>
                </td>
                <td style="width: 120px;">
                    <img src="uploads/{{$image}}" alt="{{$image}}" width="120" height="110" class="img-responsive">
                </td>
            </tr>
        </table>  
        <hr/>
        <table>
            <tr>
                <td style="width: 50px;"> </td>
                <td class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td>Reg. Number</td> 
                            <td>: {{ $regno }}</td>
                        </tr>
                        <tr>
                            <td>Name </td> 
                            <td>: {{ $name }}</td>
                        </tr>
                        <tr>
                            <td>Mobile No </td> 
                            <td>: {{ $mobile }}</td>
                        </tr>
                        <tr>
                            <td>Father Name</td> 
                            <td>: {{ $father }}</td> 
                        </tr>
                        <tr>
                            <td>Mother Name</td> 
                            <td>: {{ $mother }}</td> 
                        </tr>
                        <tr>
                            <td>trasstrort No</td> 
                            <td>: {{ $passport }}</td>
                        </tr>
                        <tr>
                            <td>Recruting Office </td>
                            <td>: {{ $recrutoffice }}</td> 
                        </tr>
                        <tr>
                            <td>Recruting Contact </td>
                            <td>: {{ $recrutingcontact }}</td> 
                        </tr>
                        <tr>
                            <td>Remarks</td> 
                            <td>: {{ $remarks }}</td> 
                        </tr>
                        <tr>
                            <td>Medical Fee</td>
                            <td>: {{ $medicalfee }}</td> 
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>: {{ $password }}</td> 
                        </tr>
                    </table>                            
                </td>
                <td style="width: 100px;"> </td>
                <td class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td>Reciept No</td>
                            <td>: {{ $receipt }}</td>
                        </tr>
                        <tr>
                            <td>Birth Date</td>
                            <td>: {{ $birthday }}</td>
                        </tr>
                        <tr>
                            <td>Country</td>
                            <td>: {{ $country }}</td>
                        </tr>
                        <tr>
                            <td>Medical Date</td>
                            <td>: {{ $medicaldate }}</td>
                        </tr>
                        <tr>
                            <td>Slip Date</td>
                            <td>: {{ $slipdate }}</td>
                        </tr>
                        <tr>
                            <td>GCC Slip Date</td>
                            <td>: {{ $gcc_slipdate }}</td>
                        </tr>
                        <tr>
                            <td>GCC Epiry Date</td>
                            <td>: {{ $gcc_expirydate }}</td>
                        </tr>
                        <tr>
                            <td>Report Delivery Date</td>
                            <td>: {{ $reportdate }}</td>
                        </tr>
                        <tr>
                            <td>Report Delivery Time</td>
                            <td>: {{ $reporttime }}</td>
                        </tr>
                        <tr><td> <br></td></tr>
                        <tr><td align="center">Signature</td></tr>
                    </table>
                </td>
            </tr>
        </table>
        <hr/>
        <div class="col-sm-12" align="center">
            <p style="font-size: 14px;">When medical card will ready we will contact you.For more details please visit: biopathmedical.com</p>
        </div>
    </div>
</body>
