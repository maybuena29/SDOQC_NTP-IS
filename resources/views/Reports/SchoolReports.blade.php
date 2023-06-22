@extends('Layout.CustomerApp')
@section('css')
<link rel="stylesheet" href="{{ asset('css/Category.css')}}">
<link rel="stylesheet" href="{{ asset('css/AddingCss.css')}}">
@endsection
@section('contentFE')
@section('TopTTL','OrderView')

    <section class="homes" id="home"> </section>


        <div class="specs">
            <a href=""> SCHOOL </a> >>  <a href=""> REPORTS </a> >>  <a href=""> ALL SCHOOLS </a>
        </div>

        <div class="specsxa">
            <span> SCHOOLS </span>
        </div>


    <section class="packagesx" id="package">
        <div>
            @livewire('generate-school-report');
        </div>
    </section>

    <script>
        function generateReport(){
            var table = document.getElementById("SchoolReportTable");
            table.classList.toggle("showTable");
        }
    </script>


@endsection
