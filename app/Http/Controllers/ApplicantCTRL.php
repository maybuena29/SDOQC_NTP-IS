<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicantMODEL;
use App\Models\SchoolMODEL;
use Exception;

class ApplicantCTRL extends Controller
{
    public function index(){

        $applicants = ApplicantMODEL::orderBy('id')->with('School')->get();
        // dd($applicants);
        return view('Applicant.ApplicantTBL', ['applicants' => $applicants]);
   }

   public function create(){

        $schools = SchoolMODEL::orderBy('school')->where('status', "Active")->get();
        return view('Applicant.ApplicantADD',['schools' => $schools]);

    }

   public function store(Request $request){

    $this->validate($request,[
        'typeofappointment'=> 'required',
        'firstname'=> 'required',
        'middlename'=> 'required',
        'lastname'=> 'required',
        'position'=> 'required',
        'department' => 'required',
        'gender' => 'required',
        'birthdate' => 'required',
        'tinnumber' => 'required',
        'DOA' => 'required',
        'DLP' => 'required',
        'eligibility' => 'required',
        'school_id' => 'required',
        'status' => 'required',
    ]);

     $input = $request->all();
     ApplicantMODEL::create($input);

       return back()->with('successAdd','Applicants Added Successfully !');
    }


    public function edit($id){

        $applicants = ApplicantMODEL::findorFail($id);
        $schools = SchoolMODEL::orderBy('school')->get();

        return view('Applicant.ApplicantUPDT',[
            'schools' => $schools,
            'applicants' => $applicants
        ]);

    }

    public function update(Request $request, $id){
        $applicants = ApplicantMODEL::findorFail($id);
        $this->validate($request,[
            'typeofappointment'=> 'required',
            'firstname'=> 'required',
            'middlename'=> 'required',
            'lastname'=> 'required',
            'position'=> 'required',
            'department' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'tinnumber' => 'required',
            'DOA' => 'required',
            'DLP' => 'required',
            'eligibility' => 'required',
            'school_id' => 'required',
        ]);

        $input = $request->all();
        $applicants->update($input);
        return back()->with('successupd','Applicants Has Been Updated !');
    }

    public function destroy($id){
        ApplicantMODEL::findorfail($id)->delete();
        return back()->with('successdel',"Applicants Has Been Deleted !");
    }

    public function ApplicantArchives(){

        $applicants = ApplicantMODEL::orderBy('id')->onlyTrashed()->get();
        return view('Applicant.ApplicantARC', ['applicants' => $applicants ]);
    }

    public function ApplicantArchivesDestroy($id){

        ApplicantMODEL::onlyTrashed()->findorfail($id)->forcedelete();
        return back()->with('successdel',"This Case Has Been Deleted Pemanently !");
    }

    public function ApplicantArchivesRestore($id){

        ApplicantMODEL::onlyTrashed()->findorfail($id)->restore();
        return back()->with('restor',"This Case Has Restore Successfully !");
    }

    public function show($id){
        $applicants = ApplicantMODEL::findorfail($id);
        return view('Applicant.ApplicantSHOW', ['applicants' => $applicants]);
    }

}
