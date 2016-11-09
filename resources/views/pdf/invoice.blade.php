<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="screen">
  <style>
    body{margin: 5px;padding: 5px;}
    h3{margin: 5px;}
    p {margin: 0 0 5px;}
    .pdf-body{border: 5px double #000;margin-bottom: 20px;}
  </style>
</head>

<body>
    <div class="col-sm-12 pdf-body">
        <table>
            <tr>
                <td style="width: 150px;">
                    <img src="uploads/{{$image}}" alt="{{$image}}" width="150" height="150" class="img-responsive">
                </td>
                <td style="text-align: center;">
                    <h3>Bio-Path Medical Services Ltd.</h3>
                    <p>44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),</p>
                    <p>Dhaka-1000, Telephone: 9359112</p>
                    <p><u><b>MONEY RECEIPT</b></u></p>
                </td>
                <td style="width: 300px;"></td>
            </tr>
        </table>  
        <table>
            <tr>
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
                            <td>Father Name</td> 
                            <td>: {{ $father }}</td> 
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
                <td style="width: 200px;"> </td>
                <td class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td>Reciept No</td>
                            <td>: {{ $receipt }}</td>
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
                            <td>GCC Slip Date</td>
                            <td>: {{ $slipdate }}</td>
                        </tr>
                        <tr>
                            <td>GCC Epiry Date</td>
                            <td>: {{ $expirydate }}</td>
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
            <p>When medical card will ready we will contact you via SMS or Phone call. For medical report please visit: www.biopathmedical.com</p>
        </div>
    </div>
    <div class="col-sm-12 pdf-body">
    	<table>
    	  	<tr>
    	  		<td style="width: 150px;">
    	  			<img src="uploads/{{$image}}" alt="{{$image}}" width="150" height="150" class="img-responsive">
    	  		</td>
    	  		<td style="text-align: center;">
					<h3>Bio-Path Medical Services Ltd.</h3>
		            <p>44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),</p>
		            <p>Dhaka-1000, Telephone: 9359112</p>
		            <p><u><b>MONEY RECEIPT</b> (Patient Copy)</u></p>
    	  		</td>
    	  		<td style="width: 300px;"></td>
    	  	</tr>
    	</table>  
    	<table>
        	<tr>
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
                            <td>Father Name</td> 
                            <td>: {{ $father }}</td> 
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
                <td style="width: 200px;"> </td>
                <td class="col-sm-6">
                    <table class="table">
                        <tr>
                            <td>Reciept No</td>
                            <td>: {{ $receipt }}</td>
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
                            <td>GCC Slip Date</td>
                            <td>: {{ $slipdate }}</td>
                        </tr>
                        <tr>
                            <td>GCC Epiry Date</td>
                            <td>: {{ $expirydate }}</td>
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
            <p>When medical card will ready we will contact you via SMS or Phone call. For medical report please visit: www.biopathmedical.com</p>
        </div>
    </div>
</body>
