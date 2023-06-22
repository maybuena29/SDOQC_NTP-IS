<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Exception;
use App\Models\DistrictMODEL;
use App\Models\SchoolMODEL;

class SchoolCTRL extends Controller
{

    public function index(){
        $schools = SchoolMODEL::orderBy('school')->with('District')->get();

        return view('School.SchoolTBL',[
           'schools' => $schools,
       ]);
   }

   public function create(){

       $districts = DistrictMODEL::orderBy('district')->where('status', "Active")->get();
       return view('School.SchoolADD',['districts' => $districts]);

   }

   public function store(Request $request){

         $this->validate($request,[
           'school'=>'required',
           'level' => 'required',
           'district_id'=>'required',
           'status' => 'required',
           'school' => [
                'required',
                Rule::unique('schooltbl')->where(function ($query) use ($request) {
                    return $query->where('level', $request->level);
                }),
            ],
         ]);

          $input = $request->all();
          SchoolMODEL::create($input);

         return back()->with('successAdd','School Added Successfully !');
   }

   public function edit($id){

       $schools = SchoolMODEL::findorFail($id);
       $districts = DistrictMODEL::orderBy('district')->get();

       return view('School.SchoolUPDT',[
           'schools' => $schools,
           'districts' => $districts
       ]);

   }
   public function update(Request $request, $id){
       $schools = SchoolMODEL::findorFail($id);
       $this->validate($request,[
            'school'=> 'required',
            'level' => 'required',
            'district_id'=>'required',
            'status' => 'required',
            'school' => [
                'required',
                Rule::unique('schooltbl')->where(function ($query) use ($request) {
                    return $query->where('level', $request->level);
                }),
            ],
       ]);

       $input = $request->all();
       $schools->update($input);
       return back()->with('successupd','School Has Been Updated !');
   }

   public function destroy($id){

        $dexcute = SchoolMODEL::findorfail($id);

        try{
            $dexcute->delete();
            return back()->with('successdel',"School Has Been Deleted !");

        }catch(exception $e){
            return back()->with('Cannot',"This School is Connected to District Branch !");
        }

   }


}
