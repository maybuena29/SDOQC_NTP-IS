<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="{{asset('Asset/sdo_logo.png')}}" type="image/x-icon">
    <title>School Reports</title>

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
                <th width="50%" colspan="2">
                    {{-- <img src="{{asset('Asset/sdo_logo.png')}}" alt="Logo"> --}}
                    <h2 class="text-center">SDOQC NTP-IS</h2>
                </th>
                <th width="50%" colspan="3" class="text-end company-data">
                    <span>Type: {{$levelofschool}}</span> <br>
                    <span>Date Generated:  {{now()->timezone('Asia/Manila')->format('Y-m-d | h:i:s A') }} </span> <br>
                    <span>Report As: List of Schools</span><br>
                </th>
            </tr>

            <tr class="bg-blue">
                <th>ID</th>
                <th>School</th>
                <th>Level</th>
                <th>District</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($schools as $stats)
                <tr>
                    <td>{{$stats->id}}</td>
                    <td>{{$stats->school}}</td>
                    <td>{{$stats->level}}</td>
                    <td>{{$stats->District->district}}</td>
                    <td>
                        @if($stats->status == "Active")
                            <p class="Done">{{$stats->status}}</p>
                        @endif
                        @if($stats->status == "Inactive")
                            <p class="red">{{$stats->status}}</p>
                        @endif
                    </td>
                </tr>
            @empty
            <tr>
                <td class="text-center" colspan="5">NO RECORD FOUND</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    @if ($levelofschool == "All Level of Schools")
        <table class="summary">
            <tbody>
                <tr>
                    <th class="text-center" colspan="8" width="100%">SUMMARY</th>
                </tr>
                <tr>
                    <td class="text-center" rowspan="2">Total School: {{count($schools)}}</td>
                    <td class="text-left" rowspan="2"> </td>
                    <td class="text-center" rowspan="2">Total School Level</td>
                    <td class="text-left">Elementary School: {{count($totalES)}}</td>
                    <td class="text-left">Junior High School: {{count($totalJHS)}}</td>
                    <td class="text-left" rowspan="2"> </td>
                    <td class="text-center" rowspan="2">Total Status</td>
                    <td class="text-left">Active: {{count($totalactive)}}</td>
                </tr>
                <tr>
                    <td class="text-left">Senior High School: {{count($totalSHS)}}</td>
                    <td class="text-left">JHS With SHS: {{count($totalJHSwithSHS)}}</td>
                    <td class="text-left">Inactive: {{count($totalinactive)}}</td>
                </tr>
            </tbody>
        </table>

    @else
        <table class="summary">
            <tbody>
                <tr>
                    <th class="text-center" colspan="6" width="100%">SUMMARY</th>
                </tr>
                <tr>
                    <td class="text-center" rowspan="2">Total School: {{count($schools)}}</td>
                    <td class="text-left" rowspan="2"> </td>
                    <td class="text-center" rowspan="2">Total Employee: {{count($totalemployee)}}</td>
                    <td class="text-left" rowspan="2"> </td>
                    <td class="text-center" rowspan="2">Total Status</td>
                    <td class="text-left">Active: {{count($totalactive)}}</td>
                </tr>
                <tr>
                    <td class="text-left">Inactive: {{count($totalinactive)}}</td>
                </tr>
            </tbody>
        </table>

    @endif


    {{-- <p class="text-center"> Date Printed:  {{now()->format('Y-m-d') }} </p> --}}
</body>
</html>
