@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Category.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>


        <div class="specs">
            <a href=""> EMPLOYEE </a> >>  <a href=""> REPORTS </a> >>  <a href=""> ALL EMPLOYEE </a>
        </div>

        <div class="specsxa">
            <span> EMPLOYEES </span>
        </div>


    <section class="packagesx" id="package">

        <div class="Table-1" >
            <div class="Table-con">

                <div class="Cnt">
                    <H3 class="ORP">Employee Reports</H3>
                    <p class="DY">SDO QC</p>
                </div>
                    <div class="ResponsiveSection">

                        <div class = "ResponsiveItem">
                                <a  href="{{route('PrintAllEMP')}}" class ="Add-P"> <span> PRINT ALL </span></a>
                        </div>

                        <div class = "ResponsiveItem">
                                <a  href="{{Route('PrintNATIONAL')}}" class ="Add-P"> <span> NATIONAL PERMANENT </span></a>
                        </div>

                        <div class = "ResponsiveItem">
                                 <a  href="{{Route('PrintCITY')}}" class ="Add-P"> <span> CITY PERMANENT </span></a>
                        </div>

                        <div class = "ResponsiveItem">
                                <a  href="{{Route('PrintCONTRACT')}}" class ="Add-P"> <span> CONTRACTUAL </span></a>
                        </div>

                        <div class = "ResponsiveItem">
                                <a  href="{{Route('PrintMOOE')}}" class ="Add-P"> <span> MOOE </span></a>
                        </div>
                    </div>

            </div>

            <div class = " Table-Section">
                <table id="Category" class="displayd responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Actions</th>
                        <th>Item Number </th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Appointment Type</th>
                        <th>Eligibility</th>
                        <th>School</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($applicants as $stats)
                    <tr>
                        <td class="BTNS-EDTY">
                             <a class="EditsT" href ="{{Route('NTPApplicant.show', $stats->id)}}" > <i class="fa-solid fa-eye"></i> </a>
                        </td>
                        <td>{{$stats->itemnumber}}</td>
                        <td>{{$stats->firstname}} {{$stats->middlename}} {{$stats->lastname}}</td>
                        <td>{{$stats->position}}</td>
                        <td>{{$stats->typeofappointment}}</td>
                        <td>{{$stats->eligibility}}</td>
                        <td>{{$stats->School->school}}</td>
                        <td>
                            @if($stats->status == "Active")
                                <p class="Done">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "Inactive")
                                <p class="red">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "Diseased")
                                <p class="gray">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "Retired")
                                <p class="orange">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "Resigned")
                                <p class="violet">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "Transferred")
                                <p class="blue">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "AWOL")
                                <p class="brown">{{$stats->status}}</p>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </section>



@endsection
