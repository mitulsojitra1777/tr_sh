<?php
namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    var $role = '';

    public function __construct()
    {
        $this->middleware('auth');
        $this->role = Role::all();
    }

    // add user
    public function showRegistrationForm()
    {
        return view('adduser', [
            'role' => $this->role
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed'
            ],
            'role' => [
                'required'
            ]
        ]);
    }

    public function register(Request $request)
    {}

    
}
