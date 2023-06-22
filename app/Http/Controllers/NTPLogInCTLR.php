<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NTPLogInCTLR extends Controller
{
    public function __construct(){
        $this->middleware(['guest']);
    }
    public function index(){
        return view('NTPLogIn');
   }
   public function store(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);
        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('invalids','Invalid username or password');
        }
        return redirect()->route('NTPDashBoard.index')->with('Log','Log in Successfully');
   }
}
