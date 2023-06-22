@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>

        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> EMPLOYEE </a>  >>  <a href=""> UPDATE </a>
        </div>
        <div class="specsxa">
            <span> EMPLOYEE </span>
        </div>

    <section class="packagesxss" id="package">
        <div class="Add-Holders"> <!-- Add Holder------------------------------------>
            <div class="Add-InPs"> <!-- Add Inp------------------------------------>

                <div class ="Top-Form">
                    <h1 class = "M-TITTL">Edit Employee</h1>
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>

                    <form action="{{Route('NTPApplicant.update', $applicants->id)}}" method="POST" enctype="multipart/form-data" id = "SBMIT">
                        @csrf
                        @method('PUT')

                            <div class = "S1"> <!-- Mid S1------------------------------------>

                            <div class = "EXSepator">

                                    <div class="field">
                                        <label>Item Number</label>
                                        <input type="text" name="itemnumber" placeholder="Example: ITM-001" value="{{old('itemnumber') ?? $applicants->itemnumber}}" style="@error('itemnumber') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('itemnumber') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Type Appointment</label>
                                            <select class ="availability" name="typeofappointment" id="" value="{{old('typeofappointment')}}" style="@error('typeofappointment') border: 1px solid red; @enderror">
                                            @if($applicants->typeofappointment == "City Permanent")
                                                <option value="City Permanent" selected>City Permanent</option>
                                                <option value="National Permanent">National Permanent</option>
                                                <option value="Contractual">Contractual</option>
                                                <option value="MOOE">MOOE</option>
                                            @endif
                                            @if($applicants->typeofappointment == "National Permanen")
                                                <option value="City Permanent">City Permanent</option>
                                                <option value="National Permanent" selected>National Permanent</option>
                                                <option value="Contractual">Contractual</option>
                                                <option value="MOOE">MOOE</option>
                                            @endif
                                            @if($applicants->typeofappointment == "Contractual")
                                                <option value="City Permanent">City Permanent</option>
                                                <option value="National Permanent">National Permanent</option>
                                                <option value="Contractual" selected>Contractual</option>
                                                <option value="MOOE">MOOE</option>
                                            @endif
                                            @if($applicants->typeofappointment == "MOOE")
                                                <option value="City Permanent">City Permanent</option>
                                                <option value="National Permanent">National Permanent</option>
                                                <option value="Contractual">Contractual</option>
                                                <option value="MOOE" selected>MOOE</option>
                                            @endif
                                            </select>
                                        <span style="color: red;">@error('typeofappointment') {{$message}} @enderror </span>
                                    </div>
                            </div>

                                <div class = "EXSepatorB">  <!-- Mid Seperator------------------------------------>
                                    <div class="field">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" placeholder="Example: Allen" value="{{old('firstname')  ?? $applicants->firstname}}" style="@error('firstname') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('firstname') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Middle Name</label>
                                        <input type="text" name="middlename" placeholder="Example: Daks" value="{{old('middlename')  ?? $applicants->middlename}}" style="@error('middlename') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('middlename') {{$message}} @enderror </span>
                                    </div>
                                    <div class="field">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" placeholder="Example: Farol" value="{{old('lastname')  ?? $applicants->lastname}}" style="@error('lastname') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('lastname') {{$message}} @enderror </span>
                                    </div>
                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Position</label>
                                        <input type="text" name="position" placeholder="Example: Principal III" value="{{old('position')  ?? $applicants->position}}" style="@error('position') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('position') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Department</label>
                                        <input type="text" name="department" placeholder="Example: English Dept" value="{{old('department')  ?? $applicants->department}}" style="@error('department') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('department') {{$message}} @enderror </span>
                                    </div>

                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Birth Date</label>
                                        <input type="date" name="birthdate" placeholder="Example: Card" value="{{old('birthdate')  ?? $applicants->birthdate}}" style="@error('birthdate') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('birthdate') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Gender</label>
                                            <select class ="availability" name="gender" id="" value="{{old('gender')  ?? $applicants->gender}}" style="@error('gender') border: 1px solid red; @enderror">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        <span style="color: red;">@error('gender') {{$message}} @enderror </span>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Tin Number</label>
                                    <input type="text" name="tinnumber" placeholder="Example: TIN-0213231" value="{{old('tinnumber')  ?? $applicants->tinnumber}}" style="@error('tinnumber') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('tinnumber') {{$message}} @enderror </span>
                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Date of Original Appointment</label>
                                        <input type="date" name="DOA" placeholder="Example: Card" value="{{old('DOA') ?? $applicants->DOA}}" style="@error('DOA') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('DOA') {{$message}} @enderror </span>
                                    </div>

                                    <div class="field">
                                        <label>Date of Last Promotion</label>
                                        <input type="date" name="DLP" placeholder="Example: Card" value="{{old('DLP') ?? $applicants->DLP}}" style="@error('DLP') border: 1px solid red; @enderror" >
                                        <span style="color: red;">@error('DLP') {{$message}} @enderror </span>
                                    </div>

                                </div>

                                <div class="field">
                                    <label>Eligibility</label>
                                    <input type="text" name="eligibility" placeholder="Example: Enable" value="{{old('eligibility') ?? $applicants->eligibility}}" style="@error('eligibility') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('eligibility') {{$message}} @enderror </span>
                                </div>

                                @livewire('filter-school-update', ['schoolID' => $applicants->school_id]);

                                <div class="field">
                                    <label>Status</label>
                                    <select class ="availability" name="status" id="" value="{{old('status')}}" style="@error('status') border: 1px solid red; @enderror">
                                        @if($applicants->status == "Active")
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Diseased">Diseased</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Resigned">Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWOL">AWOL</option>
                                        @endif
                                        @if($applicants->status == "Inactive")
                                            <option value="Active" >Active</option>
                                            <option value="Inactive" selected>Inactive</option>
                                            <option value="Diseased">Diseased</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Resigned">Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWOL">AWOL</option>
                                        @endif
                                        @if($applicants->status == "Diseased")
                                            <option value="Active" >Active</option>
                                            <option value="Inactive" >Inactive</option>
                                            <option value="Diseased" selected>Diseased</option>
                                            <option value="Retired">Retired</option>
                                            <option value="Resigned">Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWOL">AWOL</option>
                                        @endif
                                        @if($applicants->status == "Retired")
                                            <option value="Active" >Active</option>
                                            <option value="Inactive" >Inactive</option>
                                            <option value="Diseased" >Diseased</option>
                                            <option value="Retired" selected>Retired</option>
                                            <option value="Resigned">Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWOL">AWOL</option>
                                        @endif
                                        @if($applicants->status == "Resigned")
                                            <option value="Active" >Active</option>
                                            <option value="Inactive" >Inactive</option>
                                            <option value="Diseased" >Diseased</option>
                                            <option value="Retired" >Retired</option>
                                            <option value="Resigned" selected>Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWOL">AWOL</option>
                                        @endif
                                        @if($applicants->status == "Transferred")
                                            <option value="Active" >Active</option>
                                            <option value="Inactive" >Inactive</option>
                                            <option value="Diseased" >Diseased</option>
                                            <option value="Retired" >Retired</option>
                                            <option value="Resigned" >Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWOL">AWOL</option>
                                        @endif
                                        @if($applicants->status == "AWOL")
                                            <option value="Active" >Active</option>
                                            <option value="Inactive" >Inactive</option>
                                            <option value="Diseased" >Diseased</option>
                                            <option value="Retired" >Retired</option>
                                            <option value="Resigned" >Resigned</option>
                                            <option value="Transferred">Transferred</option>
                                            <option value="AWO" selected>AWOL</option>
                                        @endif

                                    </select>
                                    <span style="color: red;">@error('status') {{$message}} @enderror </span>
                                </div>

                            </div>  <!-- Mid S1------------------------------------>

                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-C"  href="{{Route('NTPApplicant.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                                <button class ="Add-ITM" type="submit" id = "save"> <i class="fa-solid fa-circle-plus"></i> <span> Update </span></button>
                            </div>
                    </form>

                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>



@endsection
