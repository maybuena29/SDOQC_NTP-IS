<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Exception;
use App\Models\DistrictMODEL;
use App\Models\SchoolMODEL;

class SchoolReportCTRL extends Controller
{
    public function index(){
        // $schoolLevel = session('schllvl');
        // $schoolName = session('schlname');
        $district = DistrictMODEL::orderBy('district', 'asc')->get();
        $schools = SchoolMODEL::orderBy('school', 'asc')->with('District')->get();
        return view('Reports.SchoolReports');
    }
}
