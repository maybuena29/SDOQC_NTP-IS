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
                    <h1 class = "M-TITTL">View Employee : {{$applicants->firstname}} {{$applicants->middlename}} {{$applicants->lastname}} </h1>
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>


                            <div class = "S1"> <!-- Mid S1------------------------------------>

                            <div class = "EXSepator">

                                    <div class="field">
                                        <label>Item Number</label>
                                        <input type="text" readonly value="{{$applicants->itemnumber}}">
                                    </div>

                                    <div class="field">
                                        <label>Type Appointment</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->typeofappointment}}">
                                    </div>
                            </div>

                                <div class = "EXSepatorB">  <!-- Mid Seperator------------------------------------>
                                    <div class="field">
                                        <label>First Name</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->firstname}}">
                                    </div>

                                    <div class="field">
                                        <label>Middle Name</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->middlename}}">
                                    </div>
                                    <div class="field">
                                        <label>Last Name</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->lastname}}">
                                    </div>
                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Position</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->position}}">
                                    </div>

                                    <div class="field">
                                        <label>Department</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->department}}">
                                    </div>

                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Birth Date</label>
                                        <input type="text" readonly name="category_id" value="{{\Carbon\Carbon::parse($applicants->birthdate)->format('F j, Y')}}">
                                    </div>

                                    <div class="field">
                                        <label>Gender</label>
                                        <input type="text" readonly name="category_id" value="{{$applicants->gender}}">
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Tin Number</label>
                                    <input type="text" readonly name="category_id" value="{{$applicants->tinnumber}}">
                                </div>

                                <div class = "EXSepator">

                                    <div class="field">
                                        <label>Date of Original Appointment</label>
                                        <input type="text" readonly name="category_id" value="{{\Carbon\Carbon::parse($applicants->DOA)->format('F j, Y')}}">
                                    </div>

                                    <div class="field">
                                        <label>Date of Last Promotion</label>
                                        <input type="text" readonly name="category_id" value="{{\Carbon\Carbon::parse($applicants->DLP)->format('F j, Y')}}">
                                    </div>

                                </div>

                                <div class="field">
                                    <label>Eligibility</label>
                                    <input type="text" readonly name="category_id" value="{{$applicants->eligibility}}">
                                </div>

                            <div class = "EXSepator">
                                <div class="field">
                                    <label>School</label>
                                    <input type="text" readonly name="category_id" value="{{$applicants->School->school}}">
                                </div>
                                <div class="field">
                                    <label>Status</label>
                                    <input type="text" readonly name="category_id" value="{{$applicants->status}}">
                                </div>
                            </div>

                            </div>  <!-- Mid S1------------------------------------>
                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-B"  href="{{Route('NTPApplicant.index')}}" > <i class="fa-solid fa-circle-xmark" ></i> <span> Back </span></a>
                            </div>

                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>



@endsection
