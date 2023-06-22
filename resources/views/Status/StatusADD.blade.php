@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

     
        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> STATUS </a>  >>  <a href=""> ADD </a> 
        </div>

        <div class="specsxa">
            <span> STATUS </span>
        </div>   


    <section class="packagesxss" id="package">  
        <div class="Add-Holders"> <!-- Add Holder------------------------------------>
            <div class="Add-InPs"> <!-- Add Inp------------------------------------>

                <div class ="Top-Form">
                    <h1 class = "M-TITTL">New Status</h1>      
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>
      
                    <form action="{{Route('NTPStatus.store')}}" method="POST" enctype="multipart/form-data" id = "SBMIT">
                        @csrf  

                            <div class = "S1"> <!-- Mid S1------------------------------------>

                                <div class="field">
                                    <label>Value</label>
                                    <input type="text" name="value" placeholder="Example: Offset / Digital" value="{{old('value')}}" style="@error('value') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('value') {{$message}} @enderror </span>
                                </div>  
                                <div class="field">
                                    <label>Availability</label>
                                    <select class ="availability" name="availability" id="" value="{{old('availability')}}" style="@error('availability') border: 1px solid red; @enderror">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    <span style="color: red;">@error('availability') {{$message}} @enderror </span>                              
                                </div>  

                            </div>  <!-- Mid S1------------------------------------>

                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-C"  href="{{Route('NTPStatus.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                                <button class ="Add-ITM" type="submit" id = "save"> <i class="fa-solid fa-circle-plus"></i> <span> Add </span></button>
                            </div>          
                    </form>
         
                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>

    
    
@endsection  