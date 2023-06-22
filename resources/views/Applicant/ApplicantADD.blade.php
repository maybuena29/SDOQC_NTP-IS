@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>


        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> EMPLOYEE </a>  >>  <a href=""> ADD </a>
        </div>

        <div class="specsxa">
            <span> EMPLOYEE </span>
        </div>


    <section class="packagesxss" id="package">
        <div class="Add-Holders"> <!-- Add Holder------------------------------------>
            <div class="Add-InPs"> <!-- Add Inp------------------------------------>

                <div class ="Top-Form">
                    <h1 class = "M-TITTL">New Employee</h1>
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>

                    <form action="{{Route('NTPApplicant.store')}}" method="POST" enctype="multipart/form-data" id = "SBMIT">
                        @csrf

                            <div class = "S1"> <!-- Mid S1------------------------------------>

                            <div class = "EXSepator">

                                    <div class="field">
                                        <label>Item Number</label>
                                        <input type="text" name="itemnumber" id="itemNum" placeholder="Example: ITM-001" value="{{old('itemnumber')}}" style="@error('itemnumber') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('itemnumber') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Type Appointment <span class="asterisk"> * </span> </label>
                                            <select class ="availability" name="typeofappointment" id="ToA" onchange="disableInput()" value="{{old('typeofappointment')}}" style="@error('typeofappointment') border: 1px solid red; @enderror">
                                                <option value="City Permanent">City Permanent</option>
                                                <option value="National Permanent">National Permanent</option>
                                                <option value="Contractual">Contractual</option>
                                                <option value="MOOE">MOOE</option>
                                            </select>
                                        <span style="color: red;">@error('typeofappointment') {{$message}} @enderror </span>
                                    </div>
                            </div>

                                <div class = "EXSepatorB">  <!-- Mid Seperator------------------------------------>
                                    <div class="field">
                                        <label>First Name <span class="asterisk"> * </span> </label>
                                        <input type="text" name="firstname" placeholder="Example: Allen Dex" value="{{old('firstname')}}" style="@error('firstname') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('firstname') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Middle Name <span class="asterisk"> * </span> </label>
                                        <input type="text" name="middlename" placeholder="Example: Cutiepie" value="{{old('middlename')}}" style="@error('middlename') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('middlename') {{$message}} @enderror </span>
                                    </div>
                                    <div class="field">
                                        <label>Last Name <span class="asterisk"> * </span> </label>
                                        <input type="text" name="lastname" placeholder="Example: Farol" value="{{old('lastname')}}" style="@error('lastname') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('lastname') {{$message}} @enderror </span>
                                    </div>
                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Position <span class="asterisk"> * </span>  </label>
                                        <input type="text" name="position" placeholder="Example: Teacher III" value="{{old('position')}}" style="@error('position') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('position') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Department <span class="asterisk"> * </span> </label>
                                        <input type="text" name="department" placeholder="Example: English Dept" value="{{old('department')}}" style="@error('department') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('department') {{$message}} @enderror </span>
                                    </div>

                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Birth Date <span class="asterisk"> * </span> </label>
                                        <input type="date" name="birthdate" placeholder="Example: Card" value="{{old('birthdate')}}" style="@error('birthdate') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('birthdate') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Gender <span class="asterisk"> * </span> </label>
                                            <select class ="availability" name="gender" id="" value="{{old('gender')}}" style="@error('gender') border: 1px solid red; @enderror">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        <span style="color: red;">@error('gender') {{$message}} @enderror </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Tin Number <span class="asterisk"> * </span> </label>
                                    <input type="text" name="tinnumber" placeholder="Example: TIN-2021322112" value="{{old('tinnumber')}}" style="@error('tinnumber') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('tinnumber') {{$message}} @enderror </span>
                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Date of Original Appointment <span class="asterisk"> * </span> </label>
                                        <input type="date" name="DOA" placeholder="Example: Card" value="{{old('DOA')}}" style="@error('DOA') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('DOA') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Date of Last Promotion <span class="asterisk"> * </span> </label>
                                        <input type="date" name="DLP" placeholder="Example: Card" value="{{old('DLP')}}" style="@error('DLP') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('DLP') {{$message}} @enderror </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Eligibility <span class="asterisk"> * </span> </label>
                                    <input type="text" name="eligibility" placeholder="Example: Enable" value="{{old('eligibility')}}" style="@error('eligibility') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('eligibility') {{$message}} @enderror </span>
                                </div>

                                <div>
                                    @livewire('filter-school-add');
                                </div>

                                <div class="field">
                                    <label>Status <span class="asterisk"> * </span> </label>
                                    <select class ="availability" name="status" id="" value="{{old('status')}}" style="@error('status') border: 1px solid red; @enderror">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                        <option value="Diseased">Diseased</option>
                                        <option value="Retired">Retired</option>
                                        <option value="Resigned">Resigned</option>
                                        <option value="Transferred">Transferred</option>
                                        <option value="AWOL">AWOL</option>
                                    </select>
                                    <span style="color: red;">@error('status') {{$message}} @enderror </span>
                                </div>

                            </div>  <!-- Mid S1------------------------------------>

                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-C" href="{{Route('NTPApplicant.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                                <button class ="Add-ITM" type="submit" id = "save"> <i class="fa-solid fa-circle-plus"></i> <span> Add </span></button>
                            </div>
                    </form>

                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>

    <script>
        function disableInput() {
            var appType = document.getElementById("ToA").value;
            console.log("App type: " + appType);
            var itemNumber = document.getElementById("itemNum");

            if(appType == "MOOE" || appType == "Contractual"){
                itemNumber.disabled = true;
                itemNumber.value = "";
            }else{
                itemNumber.disabled = false;
            }
        }
    </script>


@endsection
