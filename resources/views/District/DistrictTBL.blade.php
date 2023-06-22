@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Category.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

     
        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> DISTRICT </a> 
        </div>

        <div class="specsxa">
            <span> DISTRICT </span>
        </div>   


    <section class="packagesx" id="package">  
    <div class="Table-1" >
        <div class="Table-con">

            <div class="Cnt">
                <H3 class="ORP">District Table</H3>
                <p class="DY">SDO QC</p>
            </div>

            <div class="Cnt2">                
                       
                <div class = "A-DD">
                        <a  href="{{Route('NTPDistrict.create')}}" class ="Add-P">  <i class="fa-solid fa-plus"></i> <span> New </span></a> <!--Modal Button any -->
                </div>           
            </div>

        </div>

        <div class = " Table-Section">
            <table id="Category" class="displayd responsive nowrap" style="width:100%">
                <thead>
                    <tr>   
                        <th>Actions</th>  
                        <th>ID</th>                        
                        <th>District</th>
                        <th>Status</th>           
                    </tr>
                </thead>
                <tbody>
                @foreach ($districts as  $stats)   
                    <tr>               
                        <td class="BTNS-EDTY"> 
                      
                            <!-- <button class="Edits" onclick="deleteData()" type="submit"> <i class="fa-solid fa-pen-to-square"></i> <span> EDIT </span> </button>                                   -->
                            <a class="Edits" href ="{{Route('NTPDistrict.edit', $stats->id)}}" > <i class="fa-solid fa-pen-to-square"></i>  <span> EDIT </span> </a>                   
                            <button class="Dlts" onclick="deleteDataPermanent({{$stats->id}})" type="submit"><i class="fa-solid fa-trash"></i> <span> DELETE </span> </button>
                             <form id ="deleteP-form-{{$stats->id}}" action="{{Route('NTPDistrict.destroy', $stats->id)}}" method = "POST">  @csrf  @method('DELETE') </form>
                        </td>  
                        <td>{{$stats->id}}</td>
                        <td>{{$stats->district}}</td>
                        <td> 
                            @if($stats->status == "Active")
                                <p class="Done">{{$stats->status}}</p>
                            @endif
                            @if($stats->status == "Inactive")
                                <p class="red">{{$stats->status}}</p>
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