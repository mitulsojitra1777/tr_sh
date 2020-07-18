<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RroleController extends Controller
{
    function all(){
        return Role::all();
    }
}
