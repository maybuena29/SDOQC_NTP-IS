<?php

namespace App\Http\Controllers;
use App\Models\StatusMODEL;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class StatusCTRL extends Controller
{
    public function index(){
        $status = StatusMODEL::get();
        return view('Status.StatusTBL', ['status' => $status]);
   }
   public function create(){
        return view('Status.StatusADD');
    }

    public function store(Request $request){

        $this->validate($request,[
            'value'=>['required',Rule::unique('statustbl', 'value')],
            'availability' => 'required',
        ]);

          $input = $request->all();
          StatusMODEL::create($input);

          return back()->with('successAdd','Status Added Successfully!');
    }
    public function edit($id){
        $statusEDT = StatusMODEL::findorFail($id);
        return view('Status.StatusUPDT',[
            'statusEDT' => $statusEDT
        ]);
    }

    public function update(Request $request, $id){
        $statsx = StatusMODEL::findorFail($id);
        $this->validate($request,[
            'value'=>['required',Rule::unique('statustbl', 'value')->ignore($statsx->id)],
        ]);


        $input = $request->all();
        $statsx->update($input);


        return back()->with("successupd","Status Has Been Updated !");
    }

    public function destroy($id){

        StatusMODEL::findorfail($id)->delete();

        return back()->with('successdel',"Status Has Been Deleted !");
    }


}
