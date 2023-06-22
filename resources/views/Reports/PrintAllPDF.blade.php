<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="{{asset('Asset/sdo_logo.png')}}" type="image/x-icon">
    <title>Employee Report</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 12px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 10px;
        }

        .summary tr td{
            border: 1px solid #ddd;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        /* .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        } */

        .text-start {
            text-align: left;
  
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
   

        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="3">
                    {{-- <img src="{{asset('Asset/sdo_logo.png')}}" alt="Logo"> --}}
                    <h2 class="text-center">SDOQC NTP-IS</h2>
                </th>
                <th width="50%" colspan="10" class="text-end company-data">
                    <span>Type: {{$typeofreport}}</span> <br>               
                    <span>Date Generated:  {{now()->timezone('Asia/Manila')->format('Y-m-d | h:i:s A') }} </span> <br>
                    <span>Report As: List of Employees</span><br>
                </th>
            </tr>

            <tr class="bg-blue">
                <th>Item Number </th>  
                <th>Appointment Type</th>                      
                <th>Name</th>
                <th>Position</th>  
                <th>Department</th>   
                <th>Gender</th>    
                <th>BirthDate</th>  
                <th>TIN Number</th>
                <th>Date of Appointment</th>
                <th>Date of Last Promotion</th>
                <th>Eligibility</th>
                <th>School</th>    
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($applicants as $stats)
            <tr>
                <td>{{$stats->itemnumber}}</td>
                <td>{{$stats->typeofappointment}}</td>
                <td>{{$stats->firstname}} {{$stats->middlename}} {{$stats->lastname}}</td>
                <td>{{$stats->position}}</td>
                <td>{{$stats->department}}</td>
                <td>{{$stats->gender}}</td>
                <td>{{\Carbon\Carbon::parse($stats->birthdate)->format('F j, Y')}}</td>
                <td>{{$stats->tinnumber}}</td>
                <td>{{\Carbon\Carbon::parse($stats->DOA)->format('F j, Y')}}</td>
                <td>{{\Carbon\Carbon::parse($stats->DLP)->format('F j, Y')}}</td>
                <td>{{$stats->eligibility}}</td>
                <td>{{$stats->School->school}}</td>
                <td>{{$stats->status}}</td>        
            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="13">NO RECORD FOUND</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <table class="summary">
        <tbody>
            <tr>
                <th class="text-center" colspan="8" width="100%">SUMMARY</th>
            </tr>
            <tr>
                <td class="text-center" rowspan="2">Total Gender</td>
                <td class="text-left">Male: {{count($totalmale)}}</td>
                <td class="text-left" rowspan="2"> </td>
                <td class="text-center" rowspan="2">Total Status</td>
                <td class="text-left" rowspan="2">Active: {{count($totalactive)}}</td>
                <td class="text-left">Diseased: {{count($totaldiseased)}}</td>
                <td class="text-left">AWOL: {{count($totalawol)}}</td>
                <td class="text-left">Resigned: {{count($totalresigned)}}</td>
            </tr>
            <tr>
                <td class="text-left">Female: {{count($totalfemale)}}</td>
                <td class="text-left">Retired: {{count($totalretired)}}</td>
                <td class="text-left">Transferred: {{count($totaltransferred)}}</td>
                <td class="text-left">Inactive: {{count($totalinactive)}}</td>
            </tr>
        </tbody>
    </table>
    
    {{-- <p class="text-center"> Date Printed:  {{now()->format('Y-m-d') }} </p> --}}
</body>
</html>