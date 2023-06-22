@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>


        <div class="specs">
            <a href=""> ADMIN </a> >>  <a href=""> DISTRICT </a>  >>  <a href=""> ADD </a>
        </div>

        <div class="specsxa">
            <span> DISTRICT </span>
        </div>


    <section class="packagesxss" id="package">
        <div class="Add-Holders"> <!-- Add Holder------------------------------------>
            <div class="Add-InPs"> <!-- Add Inp------------------------------------>

                <div class ="Top-Form">
                    <h1 class = "M-TITTL">New District</h1>
                </div>

                <div class ="Mid-Form">  <!-- Mid Inp------------------------------------>

                    <form action="{{Route('NTPDistrict.store')}}" method="POST" enctype="multipart/form-data" id = "SBMIT">
                        @csrf

                            <div class = "S1"> <!-- Mid S1------------------------------------>

                                <div class="field">
                                    <label>District</label>
                                    <input type="text" name="district" placeholder="Example: District 1" value="{{old('district')}}" style="@error('district') border: 1px solid red; @enderror" >
                                    <span style="color: red;">@error('district') {{$message}} @enderror </span>
                                </div>
                                <div class="field">
                                    <label>Status</label>
                                    <select class ="availability" name="status" id="" value="{{old('status')}}" style="@error('status') border: 1px solid red; @enderror">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    <span style="color: red;">@error('status') {{$message}} @enderror </span>
                                </div>

                            </div>  <!-- Mid S1------------------------------------>

                            <div class="BUTNS-AD">
                                <a class ="Add-ITM-C"  href="{{Route('NTPDistrict.index')}}"> <i class="fa-solid fa-circle-xmark"  ></i> <span> Back </span></a>
                                <button class ="Add-ITM" type="submit" id = "save"> <i class="fa-solid fa-circle-plus"></i> <span> Add </span></button>
                            </div>
                    </form>

                </div> <!-- Mid Inp------------------------------------>

            </div> <!-- Add Inp------------------------------------>
        </div> <!-- Add Holder------------------------------------>
    </section>



@endsection
