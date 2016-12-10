<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="screen">
    <title>Bio-Path Medical Services Ltd</title>
    <style>
        body{margin: 5px;padding: 5px;}
        h3{margin: 5px;}
        p {margin: 0 0 5px;}
        .pdf-body{border: 5px double #000;margin-bottom: 20px;}
        .pdf-body tr td {font-size: 13px;}
        table.table{width: 100%;}
        .table-bordered td{font-size: 16px; padding: 2px;line-height: 1;color: #000;border: 1px solid #ddd;}
        @font-face{
            font-family: 'Oswald', 'Ubuntu', 'Titillium Web';
            src:url('https://fonts.googleapis.com/css?family=Oswald|Ubuntu|Titillium+Web');
        }
    </style>
</head>

<body>
    <div class="col-sm-12 pdf-body">
        <table class="table">
            <tr>
                <td style="width: 100px;text-align: right;">
                    <img src="images/assets/logo.png" width="90" height="70" class="img-responsive">
                </td>
                <td style="text-align: center;width: 460px">
                    <h3 style="margin: 0;font-size: 28px;color: #ff1100;line-height: 18px;">Bio-Path Medical Services Ltd.</h3>
                    <p style="margin: 0;color: #000;font-size: 14px;">44, Naya Paltan (1st Floor). (Opposite to Paltan Thana),Dhaka-1000,</p>
                    <p style="margin: 0;color: #000;font-size: 14px;">Telephone: 9359112 or 01712964971</p>
                    <a href="http://biopathmedical.com">www.biopathmedical.com</a>
                    <p style="margin:5px 0px;"><u><b style="border: 2px solid #000;padding: 3px;background: #ccc;color: #000;">Income Report</b></u></p>
                </td>
            </tr>
        </table>  
        <hr/>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Reg No.</th>
                    <th>Patient Name</th>
                    <th>Created Date</th>
                    <th>Agent Name</th>
                    <th>Medical Fee</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $key=>$report)
                <tr>
                    <td>{{$report->regno}}</td>
                    <td>{{$report->name}}</td>
                    <td>{{$report->created_at}}</td>
                    <td>{{$report->recrutoffice}}</td>
                    <td>{{$report->medicalfee}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4" align="right">Total</td>                    
                    <td><?php 
                        $sum = 0;
                        foreach($reports as $key=>$report)
                        {
                           $sum+= $report->medicalfee;
                        }
                        echo $sum;
                    ?></td>                    
                </tr>
            </tbody>
        </table>
        <hr/>
        <div class="col-sm-12" align="center">
            <p style="font-size: 14px;">For more details please visit: biopathmedical.com</p>
        </div>
    </div>
</body>
