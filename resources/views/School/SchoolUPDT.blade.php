@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

     
        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> SCHOOL </a>  >>  <a href=""> UPDATE </a> 
        </div>

        <div class="specsxa">
            <span> SCHOOL </span>
        </div>   


    <section class="packagesxss" id="package">  
        <div class="Add-Holders"> <!-- Add Holder------------------------------------>
            <div class="Add-InPs"> <!-- Add Inp------------------------------------>

                <div class ="Top-Form">
                    <h1 class = "M-TITTL">New School</h1>      
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>
      
                    <form action="{{Route('NTPSchool.update', $schools->id)}}" method="POST" enctype="multipart/form-data" id = "SBMIT">
                        @csrf  
                        @method('PUT')
                            <div class = "S1"> <!-- Mid S1------------------------------------>
                                <div class = "EXSepator">  <!-- Mid Seperator------------------------------------>
                                    <div class="field">
                                        <label>School</label>
                                        <input type="text" name="school" placeholder="Example: Card" value="{{old('school') ?? $schools->school}}" style="@error('school') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('school') {{$message}} @enderror </span>
                                    </div>  

                                    <div class="field">
                                        <label>Level</label>
                                        <select class ="availability" name="level" id="" value="{{old('level')}}" style="@error('level') border: 1px solid red; @enderror">
                                            @if($schools->level == "Elementary")                                        
                                                <option value="Elementary" selected>Elementary</option> 
                                                <option value="Secondary (Junior High School)">Secondary ( Junior High School )</option>
                                                <option value="Secondary (Senior High School)">Secondary ( Senior High School )</option>  
                                                <option value="Secondary (Junior High School with Senior High School)">Secondary ( Junior High School with Senior High School )</option>
                                            @endif
                                            @if($schools->level == "Secondary ( Junior High School)")
                                                <option value="Elementary" selected>Elementary</option> 
                                                <option value="Secondary (Junior High School)">Secondary ( Junior High School )</option>
                                                <option value="Secondary (Senior High School)">Secondary ( Senior High School )</option>  
                                                <option value="Secondary (Junior High School with Senior High School)">Secondary ( Junior High School with Senior High School )</option>    
                                            @endif  
                                            @if($schools->level == "Secondary ( Senior High School )")
                                                <option value="Elementary" selected>Elementary</option> 
                                                <option value="Secondary (Junior High School)">Secondary ( Junior High School )</option>
                                                <option value="Secondary (Senior High School)">Secondary ( Senior High School )</option>  
                                                <option value="Secondary (Junior High School with Senior High School)">Secondary ( Junior High School with Senior High School )</option>                             
                                            @endif 
                                            @if($schools->level == "Secondary ( Junior High School with Senior High School)")
                                                <option value="Elementary" selected>Elementary</option> 
                                                <option value="Secondary (Junior High School)">Secondary ( Junior High School )</option>
                                                <option value="Secondary (Senior High School)">Secondary ( Senior High School )</option>  
                                                <option value="Secondary (Junior High School with Senior High School)">Secondary ( Junior High School with Senior High School )</option>                          
                                            @endif                                                                             
                                        </select>
                                        <span style="color: red;">@error('level') {{$message}} @enderror </span>                              
                                </div>  


                                </div>
                                <div class="field">
                                    <label>District</label>
                                    <select  class ="selects"  name="district_id" id="" value="{{old('district_id')}}" style="@error('district_id') border: 1px solid red; @enderror">                                               
                                        <option disabled= "" value="">Select type</option>
                                                   
                                        @foreach($districts as $catdata)
                                        <option value="{{$catdata->id}}" {{$catdata->id == $schools->district_id ? 'selected' : ''}}>{{$catdata->district}}</option>
                                        @endforeach
                                    </select>
                                    <span style="color: red;">@error('categorytype_id') {{$message}} @enderror </span>                                   
                                </div> 

                                <div class="field">
                                    <label>Status</label>
                                    <select class ="availability" name="status" id="" value="{{old('status')}}" style="@error('status') border: 1px solid red; @enderror">
                                        @if($schools->status == "Active")
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        @endif
                                        @if($schools->status == "Inactive")
                                            <option value="Inactive" selected>Inactive</option>
                                            <option value="Active" >Active</option>
                                        @endif  
                                    </select>
                                    <span style="color: red;">@error('status') {{$message}} @enderror </span>                              
                                </div>  

                            </div>  <!-- Mid S1------------------------------------>

                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-C"  href="{{Route('NTPSchool.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                                <button class ="Add-ITM" type="submit" id = "save"> <i class="fa-solid fa-circle-plus"></i> <span> Update </span></button>
                            </div>          
                    </form>
         
                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>

    
    
@endsection  