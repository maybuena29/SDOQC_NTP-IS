<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\DistrictMODEL;
use Exception;

class DistrictCTRL extends Controller
{
    public function index(){
        $districts = DistrictMODEL::get();
        return view('District.DistrictTBL', ['districts' => $districts]);
   }

    public function create(){
        return view('District.DistrictADD');
    }

    public function store(Request $request){

        $this->validate($request,[
            'district'=>['required',Rule::unique('disticttbl', 'district')],
            'status' => 'required',
        ]);

          $input = $request->all();
          DistrictMODEL::create($input);

          return back()->with('successAdd','District Added Successfully!');
    }

    public function edit($id){
        $districts = DistrictMODEL::findorFail($id);
        return view('District.DistrictUPDT',[
            'districts' => $districts
        ]);
    }

    public function update(Request $request, $id){
        $districts = DistrictMODEL::findorFail($id);
        $this->validate($request,[
            'district'=>['required',Rule::unique('disticttbl', 'district')->ignore($districts->id)],
        ]);


        $input = $request->all();
        $districts->update($input);


        return back()->with("successupd","District Has Been Updated !");
    }

    public function destroy($id){

        $dexcute = DistrictMODEL::findorfail($id);

        try{
            $dexcute->delete();
            return back()->with('successdel',"District Has Been Deleted !");
        }catch(exception $e){
            return back()->with('Cannot',"This School is Connected to District Branch !");
        }

    }
}
