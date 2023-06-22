<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use App\Models\DistrictMODEL;
use Carbon\Carbon;

class PrintSchoolReportCTRL extends Controller
{
    public function PrintAllSchool(){
        //Overall Query
        $schools = SchoolMODEL::orderBy('level', 'ASC')->orderBy('school', 'ASC')->with('District')->get();
        //School Level Report
        $totalES = SchoolMODEL::where('level', 'Elementary')->get();
        $totalJHS = SchoolMODEL::where('level', 'Secondary (Junior High School)')->get();
        $totalSHS = SchoolMODEL::where('level', 'Secondary (Senior High School)')->get();
        $totalJHSwithSHS = SchoolMODEL::where('level', 'Secondary (Junior High School with Senior High School)')->get();

        //Status Report
        $totalActive = SchoolMODEL::where('status', 'Active')->get();
        $totalInactive = SchoolMODEL::where('status', 'Inactive')->get();

        $pdf = Pdf::loadView('Reports.PrintSchoolReports',
                                ['schools' => $schools,
                                'levelofschool' => "All Level of Schools",
                                'totalES' => $totalES,
                                'totalJHS' => $totalJHS,
                                'totalSHS' => $totalSHS,
                                'totalJHSwithSHS' => $totalJHSwithSHS,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'portrait');
        return $pdf->download(now()->format('Y-m-d').'-AllSchools.pdf');
    }

    public function PrintES(){
        //Overall Query
        $schools = SchoolMODEL::orderBy('school', 'ASC')->with('District')->where('level', 'Elementary')->get();

        //Total Employees
        $filterSchool = SchoolMODEL::
                select('id')
                ->where('level', 'Elementary');

        $totalESemployees = ApplicantMODEL::
            select('*')
            ->whereIn('school_id', $filterSchool)
            ->get();

        //Status Report
        $totalActive = SchoolMODEL::where(['status' => 'Active', 'level' => 'Elementary'])->get();
        $totalInactive = SchoolMODEL::where(['status' => 'Inactive', 'level' => 'Elementary'])->get();

        $pdf = Pdf::loadView('Reports.PrintSchoolReports',
                                ['schools' => $schools,
                                'levelofschool' => "Elementary Schools",
                                'totalemployee' => $totalESemployees,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'portrait');
        return $pdf->download(now()->format('Y-m-d').'-ElementarySchool.pdf');
    }

    public function PrintJHS(){
        //Overall Query
        $schools = SchoolMODEL::orderBy('school', 'ASC')->with('District')->where('level', 'Secondary (Junior High School)')->get();

        //Total Employees
        $filterSchool = SchoolMODEL::
                select('id')
                ->where('level', 'Secondary (Junior High School)');

        $totalJHSemployees = ApplicantMODEL::
            select('*')
            ->whereIn('school_id', $filterSchool)
            ->get();

        //Status Report
        $totalActive = SchoolMODEL::where(['status' => 'Active', 'level' => 'Secondary (Junior High School)'])->get();
        $totalInactive = SchoolMODEL::where(['status' => 'Inactive', 'level' => 'Secondary (Junior High School)'])->get();

        $pdf = Pdf::loadView('Reports.PrintSchoolReports',
                                ['schools' => $schools,
                                'levelofschool' => "Junior High School",
                                'totalemployee' => $totalJHSemployees,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'portrait');
        return $pdf->download(now()->format('Y-m-d').'-JHSReport.pdf');
    }

    public function PrintSHS(){
        //Overall Query
        $schools = SchoolMODEL::orderBy('school', 'ASC')->with('District')->where('level', 'Secondary (Senior High School)')->get();

        //Total Employees
        $filterSchool = SchoolMODEL::
                select('id')
                ->where('level', 'Secondary (Senior High School)');

        $totalSHSemployees = ApplicantMODEL::
            select('*')
            ->whereIn('school_id', $filterSchool)
            ->get();

        //Status Report
        $totalActive = SchoolMODEL::where(['status' => 'Active', 'level' => 'Secondary (Senior High School)'])->get();
        $totalInactive = SchoolMODEL::where(['status' => 'Inactive', 'level' => 'Secondary (Senior High School)'])->get();

        $pdf = Pdf::loadView('Reports.PrintSchoolReports',
                                ['schools' => $schools,
                                'levelofschool' => "Senior High School",
                                'totalemployee' => $totalSHSemployees,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'portrait');
        return $pdf->download(now()->format('Y-m-d').'-SHSReport.pdf');
    }

    public function PrintJHSandSHS(){
        //Overall Query
        $schools = SchoolMODEL::orderBy('school', 'ASC')->with('District')->where('level', 'Secondary (Junior High School with Senior High School)')->get();

        //Total Employees
        $filterSchool = SchoolMODEL::
                select('id')
                ->where('level', 'Secondary (Junior High School with Senior High School)');

        $totalJHSnSHSemployees = ApplicantMODEL::
            select('*')
            ->whereIn('school_id', $filterSchool)
            ->get();

        //Status Report
        $totalActive = SchoolMODEL::where(['status' => 'Active', 'level' => 'Secondary (Junior High School with Senior High School)'])->get();
        $totalInactive = SchoolMODEL::where(['status' => 'Inactive', 'level' => 'Secondary (Junior High School with Senior High School)'])->get();

        $pdf = Pdf::loadView('Reports.PrintSchoolReports',
                                ['schools' => $schools,
                                'levelofschool' => "Junior High With Senior High School",
                                'totalemployee' => $totalJHSnSHSemployees,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'portrait');
        return $pdf->download(now()->format('Y-m-d').'-JHSwithSHSReport.pdf');
    }



}
