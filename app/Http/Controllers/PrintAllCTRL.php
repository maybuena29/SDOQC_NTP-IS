<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use Carbon\Carbon;

class PrintAllCTRL extends Controller
{
    public function PrintAllEMP(){

        //Overall Query
        $applicants = ApplicantMODEL::orderBy('typeofappointment')->orderBy('school_id', 'ASC')->orderBy('firstname', 'ASC')->with('School')->get();
        //Gender Report
        $totalMale = ApplicantMODEL::where('gender', 'Male')->get();
        $totalFemale = ApplicantMODEL::where('gender', 'Female')->get();
        //Status Report
        $totalDiseased = ApplicantMODEL::where('status', 'Diseased')->get();
        $totalRetired = ApplicantMODEL::where('status', 'Retired')->get();
        $totalResigned = ApplicantMODEL::where('status', 'Resigned')->get();
        $totalTransferred = ApplicantMODEL::where('status', 'Transferred')->get();
        $totalAWOL = ApplicantMODEL::where('status', 'AWOL')->get();
        $totalActive = ApplicantMODEL::where('status', 'Active')->get();
        $totalInactive = ApplicantMODEL::where('status', 'Inactive')->get();

        $pdf = Pdf::loadView('Reports.PrintAllPDF',
                                ['applicants' => $applicants,
                                'typeofreport' => "All Type of Employee",
                                'totalmale' => $totalMale,
                                'totalfemale' => $totalFemale,
                                'totaldiseased' => $totalDiseased,
                                'totalretired' => $totalRetired,
                                'totalresigned' => $totalResigned,
                                'totaltransferred' => $totalTransferred,
                                'totalawol' => $totalAWOL,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'landscape');
        return $pdf->download(now()->format('Y-m-d').'-AllEmployee.pdf');

    }
    public function PrintNATIONAL(){

        //Overall Query
        $applicants = ApplicantMODEL::orderBy('firstname', 'ASC')->orderBy('school_id', 'ASC')->with('School')->where('typeofappointment', 'National Permanent')->get();
        //Gender Report
        $totalMale = ApplicantMODEL::where(['gender' => 'Male', 'typeofappointment' => 'National Permanent'])->get();
        $totalFemale = ApplicantMODEL::where(['gender' => 'Female', 'typeofappointment' => 'National Permanent'])->get();
        //Status Report
        $totalDiseased = ApplicantMODEL::where(['status' => 'Diseased', 'typeofappointment' => 'National Permanent'])->get();
        $totalRetired = ApplicantMODEL::where(['status' => 'Retired', 'typeofappointment' => 'National Permanent'])->get();
        $totalResigned = ApplicantMODEL::where(['status' => 'Resigned', 'typeofappointment' => 'National Permanent'])->get();
        $totalTransferred = ApplicantMODEL::where(['status' => 'Transferred', 'typeofappointment' => 'National Permanent'])->get();
        $totalAWOL = ApplicantMODEL::where(['status' => 'AWOL', 'typeofappointment' => 'National Permanent'])->get();
        $totalActive = ApplicantMODEL::where(['status' => 'Active', 'typeofappointment' => 'National Permanent'])->get();
        $totalInactive = ApplicantMODEL::where(['status' => 'Inactive', 'typeofappointment' => 'National Permanent'])->get();

        $pdf = Pdf::loadView('Reports.PrintAllPDF',
                                ['applicants' => $applicants,
                                'typeofreport' => "National Permanent List",
                                'totalmale' => $totalMale,
                                'totalfemale' => $totalFemale,
                                'totaldiseased' => $totalDiseased,
                                'totalretired' => $totalRetired,
                                'totalresigned' => $totalResigned,
                                'totaltransferred' => $totalTransferred,
                                'totalawol' => $totalAWOL,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'landscape');

        return $pdf->download(now()->format('Y-m-d').'-NationalPermanentReport.pdf');

    }
    public function PrintCITY(){

        //Overall Query
        $applicants = ApplicantMODEL::orderBy('firstname', 'ASC')->orderBy('school_id', 'ASC')->with('School')->where('typeofappointment', 'City Permanent')->get();
        //Gender Report
        $totalMale = ApplicantMODEL::where(['gender' => 'Male', 'typeofappointment' => 'City Permanent'])->get();
        $totalFemale = ApplicantMODEL::where(['gender' => 'Female', 'typeofappointment' => 'City Permanent'])->get();
        //Status Report
        $totalDiseased = ApplicantMODEL::where(['status' => 'Diseased', 'typeofappointment' => 'City Permanent'])->get();
        $totalRetired = ApplicantMODEL::where(['status' => 'Retired', 'typeofappointment' => 'City Permanent'])->get();
        $totalResigned = ApplicantMODEL::where(['status' => 'Resigned', 'typeofappointment' => 'City Permanent'])->get();
        $totalTransferred = ApplicantMODEL::where(['status' => 'Transferred', 'typeofappointment' => 'City Permanent'])->get();
        $totalAWOL = ApplicantMODEL::where(['status' => 'AWOL', 'typeofappointment' => 'City Permanent'])->get();
        $totalActive = ApplicantMODEL::where(['status' => 'Active', 'typeofappointment' => 'City Permanent'])->get();
        $totalInactive = ApplicantMODEL::where(['status' => 'Inactive', 'typeofappointment' => 'City Permanent'])->get();

        $pdf = Pdf::loadView('Reports.PrintAllPDF',
                                ['applicants' => $applicants,
                                'typeofreport' => "City Permanent List",
                                'totalmale' => $totalMale,
                                'totalfemale' => $totalFemale,
                                'totaldiseased' => $totalDiseased,
                                'totalretired' => $totalRetired,
                                'totalresigned' => $totalResigned,
                                'totaltransferred' => $totalTransferred,
                                'totalawol' => $totalAWOL,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'landscape');

        return $pdf->download(now()->format('Y-m-d').'-CityPermanentReport.pdf');

    }
    public function PrintCONTRACT(){

        //Overall Query
        $applicants = ApplicantMODEL::orderBy('firstname', 'ASC')->orderBy('school_id', 'ASC')->with('School')->where('typeofappointment', 'Contractual')->get();
        //Gender Report
        $totalMale = ApplicantMODEL::where(['gender' => 'Male', 'typeofappointment' => 'Contractual'])->get();
        $totalFemale = ApplicantMODEL::where(['gender' => 'Female', 'typeofappointment' => 'Contractual'])->get();
        //Status Report
        $totalDiseased = ApplicantMODEL::where(['status' => 'Diseased', 'typeofappointment' => 'Contractual'])->get();
        $totalRetired = ApplicantMODEL::where(['status' => 'Retired', 'typeofappointment' => 'Contractual'])->get();
        $totalResigned = ApplicantMODEL::where(['status' => 'Resigned', 'typeofappointment' => 'Contractual'])->get();
        $totalTransferred = ApplicantMODEL::where(['status' => 'Transferred', 'typeofappointment' => 'Contractual'])->get();
        $totalAWOL = ApplicantMODEL::where(['status' => 'AWOL', 'typeofappointment' => 'Contractual'])->get();
        $totalActive = ApplicantMODEL::where(['status' => 'Active', 'typeofappointment' => 'Contractual'])->get();
        $totalInactive = ApplicantMODEL::where(['status' => 'Inactive', 'typeofappointment' => 'Contractual'])->get();

        $pdf = Pdf::loadView('Reports.PrintAllPDF',
                                ['applicants' => $applicants,
                                'typeofreport' => "Contractual List",
                                'totalmale' => $totalMale,
                                'totalfemale' => $totalFemale,
                                'totaldiseased' => $totalDiseased,
                                'totalretired' => $totalRetired,
                                'totalresigned' => $totalResigned,
                                'totaltransferred' => $totalTransferred,
                                'totalawol' => $totalAWOL,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'landscape');

        return $pdf->download(now()->format('Y-m-d').'-ContractualReport.pdf');

    }
    public function PrintMOOE(){

        //Overall Query
        $applicants = ApplicantMODEL::orderBy('firstname', 'ASC')->orderBy('school_id', 'ASC')->with('School')->where('typeofappointment', 'MOOE')->get();
        //Gender Report
        $totalMale = ApplicantMODEL::where(['gender' => 'Male', 'typeofappointment' => 'MOOE'])->get();
        $totalFemale = ApplicantMODEL::where(['gender' => 'Female', 'typeofappointment' => 'MOOE'])->get();
        //Status Report
        $totalDiseased = ApplicantMODEL::where(['status' => 'Diseased', 'typeofappointment' => 'MOOE'])->get();
        $totalRetired = ApplicantMODEL::where(['status' => 'Retired', 'typeofappointment' => 'MOOE'])->get();
        $totalResigned = ApplicantMODEL::where(['status' => 'Resigned', 'typeofappointment' => 'MOOE'])->get();
        $totalTransferred = ApplicantMODEL::where(['status' => 'Transferred', 'typeofappointment' => 'MOOE'])->get();
        $totalAWOL = ApplicantMODEL::where(['status' => 'AWOL', 'typeofappointment' => 'MOOE'])->get();
        $totalActive = ApplicantMODEL::where(['status' => 'Active', 'typeofappointment' => 'MOOE'])->get();
        $totalInactive = ApplicantMODEL::where(['status' => 'Inactive', 'typeofappointment' => 'MOOE'])->get();

        $pdf = Pdf::loadView('Reports.PrintAllPDF',
                                ['applicants' => $applicants,
                                'typeofreport' => "MOOE List",
                                'totalmale' => $totalMale,
                                'totalfemale' => $totalFemale,
                                'totaldiseased' => $totalDiseased,
                                'totalretired' => $totalRetired,
                                'totalresigned' => $totalResigned,
                                'totaltransferred' => $totalTransferred,
                                'totalawol' => $totalAWOL,
                                'totalactive' => $totalActive,
                                'totalinactive' => $totalInactive
                                ])->setPaper('legal', 'landscape');

        return $pdf->download(now()->format('Y-m-d').'-MOOEReport.pdf');

    }
}
