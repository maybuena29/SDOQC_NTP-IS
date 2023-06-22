@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

     
        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> STATUS </a>  >>  <a href=""> UPDATE </a> 
        </div>

        <div class="specsxa">
            <span> STATUS </span>
        </div>   


    <section class="packagesxss" id="package">  
        <div class="Add-Holders"> <!-- Add Holder------------------------------------>
            <div class="Add-InPs"> <!-- Add Inp------------------------------------>

                <div class ="Top-Form">
                    <h1 class = "M-TITTL">Update District</h1>      
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>
      
                    <form action="{{Route('NTPDistrict.update', $districts->id)}}" method="POST" enctype="multipart/form-data" id = "SBMIT">
                        @csrf  
                        @method('PUT')

                            <div class = "S1"> <!-- Mid S1------------------------------------>

                                <div class="field">
                                    <label>District</label>
                                    <input type="text" name="district" placeholder="Example: Offset / Digital" value="{{old('district') ?? $districts->district}}" style="@error('district') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('district') {{$message}} @enderror </span>
                                </div>  
                                <div class="field">
                                    <label>Availability</label>
                                    <select class ="availability" name="status" id="" value="{{old('status')}}" style="@error('status') border: 1px solid red; @enderror">
                                        @if($districts->status == "Active")
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        @endif
                                        @if($districts->status == "Inactive")
                                            <option value="Inactive" selected>Inactive</option>
                                            <option value="Active" >Active</option>
                                        @endif  
                                    </select>                    
                                </div>  

                            </div>  <!-- Mid S1------------------------------------>

                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-C"  href="{{Route('NTPDistrict.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                                <button class ="Add-ITM" type="submit" id = "save"> <i class="fa-solid fa-circle-plus"></i> <span> Update </span></button>
                            </div>          
                    </form>
         
                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>

    
    
@endsection  