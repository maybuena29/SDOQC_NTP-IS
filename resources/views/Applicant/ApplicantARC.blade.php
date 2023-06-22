@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Category.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

     
        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> EMPLOYEE </a> 
        </div>

        <div class="specsxa">
            <span> EMPLOYEES </span>
        </div>   


    <section class="packagesx" id="package">  
    <div class="Table-1" >
        <div class="Table-con">

            <div class="Cnt">
                <H3 class="ORPRED">Employee Table : Archive</H3>
                <p class="DY">SDO QC</p>
            </div>

            <div class="Cnt2">                
                <div class = "A-DD">
                    <a  href="" class ="ARCC">  <i class="fa-solid fa-box-archive"></i></a> 
                </div>            
                <div class = "A-DD">
                    <a  href=" {{route ('NTPApplicant.index')}}"  class ="Add-P"> <i class="fa-solid fa-reply"></i> <span> Return </span></a> <!--Modal Button any -->
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
                @foreach ($applicants as  $stats)   
                    <tr>               
                        <td class="BTNS-EDTY">  
                            <button class="Dlts" onclick="deleteDataPermanent({{$stats->id}})" type="submit"><i class="fa-solid fa-trash"></i> <span> DELETE </span> </button>
                            <form id ="deleteP-form-{{$stats->id}}" action="{{Route('ApplicantArchivesDestroy', $stats->id)}}" method = "POST"> @csrf @method('DELETE')  </form>
                            <button class="EditsT" onclick="resetData({{$stats->id}})" type="submit"><i class="fa-solid fa-repeat"></i> <span> RESTORE </span> </button> 
                            <form id ="reset-form-{{$stats->id}}" action="{{Route('ApplicantArchivesRestore', $stats->id)}}" method = "POST"> @csrf @method('PUT') </form>     
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
                            @if($stats->status == "Transfered")
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