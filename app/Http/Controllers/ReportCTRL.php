<?php

namespace App\Http\Controllers;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use Illuminate\Http\Request;

class ReportCTRL extends Controller
{
    public function index(){
        
        $applicants = ApplicantMODEL::orderBy('id')->with('School')->get();   
        return view('Reports.ReportsEMPALLPRNT', ['applicants' => $applicants]);
     
   }
  
}
