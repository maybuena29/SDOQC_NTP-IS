<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NTPLogOutCTLR extends Controller
{
    public function store(){
        auth()->logout();
        return redirect()->route('NTPLogin.index');
    }
    
}
