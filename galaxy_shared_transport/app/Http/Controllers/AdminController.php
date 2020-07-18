<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Role_users;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __constract(){
      $this->middleware('auth');
    }
    public function newUser(Request $request){
      return view('admin.registar', ['role'=> Role::all()]);
    }
    public function saveUser(Request $request){
        
        $data=$request->all();
        //dd($data);
        $role=Role::where('name',$data['role'])->get();
        
       $messages = [
                'name.required' => 'The :attribute field is required.',
                'name.max' => 'name must be macximum 255 char',
                'email.required' => 'please enter email', 
                'email.email'=>'enter valid email.',
                'email.unique'=>'email alredy registerd.',
                'mobile.min'=>'mobile must be 10 digit.',
                'mobile.max'=>'mobile must be 10 digit.',
            ];  
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'mobile'=>['required', 'numeric', 'min:1111111111','max:9999999999', 'unique:users',],
            'role'=>['required', ],
        ],$messages);
         $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'password' => Hash::make($data['password']),
        ]);
         
        $roles= new Role_users;
        $roles->user_id=$user->id;
        $roles->role_id=$role[0]->id;
        $roles->save();
        
        
      return redirect(url('/admin/registar'));
    }
}
