<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ApplicantMODEL;
use App\Models\DistrictMODEL;
use App\Models\SchoolMODEL;
use Illuminate\View\View;

class DashBoardCTLR extends Controller
{
    public function index(){

        $applicant = ApplicantMODEL::where('status', 'Active')->get();
        $school = SchoolMODEL::where('status', 'Active')->get();
        $district = DistrictMODEL::where('status', 'Active')->get();

        // $SPD = DB::raw("
        //     SELECT (SELECT `district` FROM `disticttbl` WHERE id = schooltbl.district_id ) AS 'District', COUNT(school) AS 'TotalSchool' FROM schooltbl WHERE status = 'Active' GROUP BY district_id
        // ");

        $SPD = SchoolMODEL::
         select('*')
        ->selectRaw('count(*) as TotalSchool')
        ->where('status', '=', 'Active')
        ->groupBy('district_id')
        ->get();
        
        $SL = SchoolMODEL::
        select('*')
        ->selectRaw('count(*) as TotalSchoolPerLevel')
        ->where('status', '=', 'Active')
        ->groupBy('level')
        ->get();
        
        
        //For Employee Analytics
        $ASC = ApplicantMODEL::
        select('*')
        ->selectRaw('count(*) as TotalEmployeeStatus')
        ->groupBy('status')
        ->get();

        $TOA = ApplicantMODEL::
        select('*')
        ->selectRaw('count(*) as TypeOfAppointment')
        ->groupBy('typeofappointment')
        ->get();
        
        $EDC = ApplicantMODEL::
        select('*')
        ->selectRaw('count(*) as TotalEmployeePerDep')
        ->groupBy('department')
        ->get();

        $EPC = ApplicantMODEL::
        select('*')
        ->selectRaw('count(*) as TotalEmployeePerPos')
        ->groupBy('position')
        ->get();
        
        // dd($ASC);
        // SELECT (SELECT district FROM disticttbl WHERE id = schooltbl.district_id ) AS District, COUNT(school) AS TotalSchool FROM schooltbl WHERE status = Active GROUP BY district_id

        // $spdData = [];

        // foreach($SPD as $row){
        //     $spdData['label'][] = $row->Distrtict;
        //     $spdData['data'][] = $row->TotalSchool;
        // }

        // $spdData['chart_data'] = json_encode($spdData);

        return view('Dashboard', [
            'applicant' => $applicant,
            'school' => $school,
            'district' => $district,
            'SPD' => $SPD,
            'SL' => $SL,
            'ASC' => $ASC,
            'TOA' => $TOA,
            'EDC' => $EDC,
            'EPC' => $EPC,
        ]);

    }


}
