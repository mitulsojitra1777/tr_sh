<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //
    public function __constrace(){
        $this->middleware('auth');
    }
    public function showDashbord(){
    	
    }
}
