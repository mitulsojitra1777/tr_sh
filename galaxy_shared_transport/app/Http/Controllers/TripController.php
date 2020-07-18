<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use App\TripDetail;

class TripController extends Controller
{
    //
    
    public function create(Request $request){
        return view('trip.add');
    }
    public function save(Request $request){
        
        /*
        "from_village" => "vichhavad"
        "from_taluka" => "visavadar"
        "from_nrCity" => "bhesan"
        "from_distic" => "junagadh"
        "from_landmark" => "oop primary school"
        "from_state" => "gujrat"
        "from_pincode" => "362020"
        "from_country" => "india"
        "to_village" => "visavadar"
        "to_taluka" => "visavadar"
        "to_nrCity" => "visavadar"
        "to_distic" => "junagadh"
        "to_landmark" => "oop collage"
        "to_state" => "gujrat"
        "to_pincode" => "362020"
        "to_country" => "india"
        "loading" => "250"
        "user_id" => "30"
        "status" => "1"
              */
//         Validator::make($data, [
//            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'mobile'=>['required', 'numeric', 'min:1111111111','max:9999999999', 'unique:users'],
//        ],$messages);*/
        $message=[
                'from_pincode.min'=>'pincode minimum 6 digit',
                'from_pincode.max'=>'pincode maximum 7 digit',
                'to_pincode.min'=>'pincode minimum 6 digit',
                'to_pincode.max'=>'pincode maximum 7 digit',
                'loading.min'=>'trip alow minimum loading  10 Kg allowd',
                
            
            ];
        $request->validate([
            'from_village' => ['required', 'string', 'max:20'],
            'from_taluka' => ['required', 'string', 'max:20'],
            'from_nrCity' => ['required', 'string', 'max:20'],
            'from_distic' => ['required', 'string', 'max:20'],
            'from_landmark' => ['required', 'string', 'max:50'],
            'from_state' => ['required', 'string', 'max:20'],
            'from_pincode' => ['required', 'numeric','min:100000', 'max:9999999'],
            'from_country' => ['required', 'string', 'max:20'],
            'to_village' => ['required', 'string', 'max:20'],
            'to_taluka' => ['required', 'string', 'max:20'],
            'to_nrCity' => ['required', 'string', 'max:20'],
            'to_distic' => ['required', 'string', 'max:20'],
            'to_landmark' => ['required', 'string', 'max:50'],
            'to_state' => ['required', 'string', 'max:20'],
            'to_pincode' => ['required', 'numeric','min:100000', 'max:9999999'],
            'to_country' => ['required', 'string', 'max:20'],
            'loading' => ['required', 'numeric','min:10'],
            'pickup_person'=>['required', 'string'],
            'pickup_contact'=>['required', 'string'],
            'drop_person'=>['required', 'string'],
            'drop_contact'=>['required', 'string'],
            
        ],$message);
        /*
        "pickup_person" => "hardik solanki"
  "pickup_contact" => "9484509666"
  "drop_person" => "dhaval patel"
  "drop_contact" => "9484828568"
         *          */
        $from_add=Address::create(['village'=>$request->input('from_village'),
                                    'taluka'=>$request->input('from_taluka'),
                                    'nrCity'=>$request->input('from_nrCity'),
                                    'distic'=>$request->input('from_distic'),
                                    'landmark'=>$request->input('from_landmark'),
                                    'state'=>$request->input('from_state'),
                                    'pincode'=>$request->input('from_pincode'),
                                    'country'=>$request->input('from_country'),]);
                 /*"to_village" => "visavadar"
          "to_taluka" => "visavadar"
          "to_nrCity" => "visavadar"
          "to_distic" => "junagadh"
          "to_landmark" => "oop collage"
          "to_state" => "gujrat"
          "to_pincode" => "362020"
          "to_country" => "india*/
        $to_add=Address::create(['village'=>$request->input('to_village'),
                                    'taluka'=>$request->input('to_taluka'),
                                    'nrCity'=>$request->input('to_nrCity'),
                                    'distic'=>$request->input('to_distic'),
                                    'landmark'=>$request->input('to_landmark'),
                                    'state'=>$request->input('to_state'),
                                    'pincode'=>$request->input('to_pincode'),
                                    'country'=>$request->input('to_country'),]);
        /*
            "loading" => "250"
              "user_id" => "30"
              "status" => "1"
        */
        $trip_det= TripDetail::create(['user_id'=> auth()->guard()->user()->id, 
                                        'from_address_id'=>$from_add->id, 
                                        'to_address_id'=>$to_add->id,
                                        'status'=>1,
                                        
                                        'loading'=>$request->input('loading'),
                                        'pickup_person'=>$request->input('pickup_person'),
                                        'pickup_contact'=>$request->input('pickup_contact'),
                                        'drop_person'=>$request->input('drop_person'),
                                        'drop_contact'=>$request->input('drop_contact'),
            ]);
        
    }
    public function update(Request $request){
        
    }
    public function list(Request $request){
        
    }
    public function createTD(Request $request){
        
    }
    public function saveTD(Request $request){
        
    }
    public function updateTD(Request $request){
        
    }
    public function listTD(Request $request){
        
    }
    
    
}
