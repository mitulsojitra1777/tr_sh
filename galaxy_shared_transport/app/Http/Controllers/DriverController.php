<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\OnnerDetails;
use App\Vehicel;
use App\VehicelStarus;
use App\Village;
use App\User;
use App\Document;
use App\Role_users;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{
    public function __constract(){
        $this->middleware('auth');
        ini_set('max_execution_time', 300); 
    }
    public function create(Request $request){
        ini_set('max_execution_time', 300); 
        return view('onner.driver.save');
    }
    public function index(Request $request){
      


    }
    public function update(Request $request){

    }
    public function save(Request $request){
        $messages = [
               'name.required' => 'The :attribute field is required.',
               'name.max' => 'name must be macximum 255 char',
               'email.required' => 'please enter email',
               'email.email'=>'enter valid email.',
               'email.unique'=>'email alredy registerd.',
               'mobile.min'=>'mobile must be 10 digit.',
               'mobile.max'=>'mobile must be 10 digit.',
           ];
        $request->validate(['name' => ['required', 'string', 'max:255'],
          'mobile'=>['required', 'numeric', 'min:1111111111','max:9999999999', 'unique:users',],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'dl_f'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'dl_b'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'dl_n'=>['required', 'string', 'max:10'],
            //'pan_f'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'pan_b'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'pan_n'=>['required', 'string'],
            //'Adar_f'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'Adar_b'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'Adhar_n'=>['required', 'string'],
            ],$messages);
        
        //$data=$request->all();
//        $user= User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'mobile' => $data['mobile'],
//            'password' => Hash::make($data['password']),
//        ]);
        //driver_id','onner_id
        
           $user=new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->mobile=$request->input('mobile');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            $onnerd=new OnnerDetails;
            $onnerd->status=1;
            $onnerd->user_id=$user->id;
            $onnerd->onner_id=auth()->guard()->user()->id;
            $onnerd->save();
            $role_user=new Role_users;
            $role_user->user_id=$user->id;
            $role_user->role_id=3;
            
            $role_user->save();
//            $image =$request->file('Adar_f');
//            $image->encode('jpeg');
            //$image->encode('jpeg');
             $cover_ad_f = $request->file('Adar_f');
             $extension_a_f = $cover_ad_f->getClientOriginalExtension();
             Storage::disk('public')->put($cover_ad_f->getFilename().'.'.$extension_a_f,  File::get($cover_ad_f));

 
            $document= new Document;
            $document->doc_number=$request->input('Adar_n');
            $document->type = 'Adhar Card';
            $document->img =$cover_ad_f->getFilename().'.'.$extension_a_f;;
            $document->user_id=$user->id;
            $document->verify=false;
            $document->save();
       /* $document= Document::create(['doc_number'=>$data['Adar_b'],
                                    'type' => 'Adhar Card',
                                    'img' =>$image,
                                    'user_id'=>$user->id,
                                    'verify'=>false,]);*/
//        $image = $request->file('Adar_b');
//        //Response$image->encode('jpeg'));
//
//        $image->encode('jpeg');
             $cover_ad_b = $request->file('Adar_b');
            $extension_a_b = $cover_ad_b->getClientOriginalExtension();
            Storage::disk('public')->put($cover_ad_b->getFilename().'.'.$extension_a_b,  File::get($cover_ad_b));

        
        $document1= Document::create(['doc_number'=>$request->input('Adar_n'),
                                    'type' => 'Adhar Card',
                                    'img' =>$cover_ad_b.'.'.$extension_a_b,
                                    'user_id'=>$user->id,
                                    'verify'=>false,]);
//        $image =$request->file('pan_f');
//        //Response::make($image->encode('jpeg'));
//
//        $image->encode('jpeg');
         $cover_p_f = $request->file('pan_f');
        $extension_p_f = $cover_p_f->getClientOriginalExtension();
        Storage::disk('public')->put($cover_p_f->getFilename().'.'.$extension_p_f,  File::get($cover_p_f));

        
        $document2= Document::create(['doc_number'=>$request->input('pan_n'),
                                    'type' => 'Pan Card',
                                    'img' =>$cover_p_f->getFilename().'.'.$extension_p_f,
                                    'user_id'=>$user->id,
                                    'verify'=>false,]);
//        $image =$request->file('pan_b');
//        //Response::make($image->encode('jpeg'));
//        $image->encode('jpeg');
         $cover_p_b = $request->file('pan_b');
    $extension_p_b = $cover_p_b->getClientOriginalExtension();
    Storage::disk('public')->put($cover_p_b->getFilename().'.'.$extension_p_b,  File::get($cover_p_b));

        
        $document3= Document::create(['doc_number'=>$request->input('pan_n'),
                                    'type' => 'Pan Card',
                                    'img' =>$cover_p_b->getFilename().'.'.$extension_p_b,
                                    'user_id'=>$user->id,
                                    'verify'=>false,]);
//        $image =$request->file('dl_f');
//        //Response::make($image->encode('jpeg'));
//        $image->encode('jpeg');
         $cover_d_f = $request->file('dl_f');
    $extension_d_f = $cover_d_f->getClientOriginalExtension();
    Storage::disk('public')->put($cover_d_f->getFilename().'.'.$extension_d_f,  File::get($cover_d_f));

        
        $document4= Document::create(['doc_number'=>$request->input('dl_n'),
                                    'type' => 'Driving Licance',
                                    'img' =>$cover_d_f->getFilename().'.'.$extension_d_f,
                                    'user_id'=>$user->id,
                                    'verify'=>false,]);
//        $image =$data['dl_b'];
//        //Response::make($image->encode('jpeg'));
//
//        $image->encode('jpeg');
        $cover_d_b = $request->file('dl_b');
        $extension_d_b = $cover_d_b->getClientOriginalExtension();
        Storage::disk('public')->put($cover_d_b->getFilename().'.'.$extension_d_b,  File::get($cover_d_b));

        
        $document5= Document::create(['doc_number'=>$request->input('dl_n'),
                                    'type' => 'Driving Licance',
                                    'img' => $cover_d_b->getFilename().'.'.$extension_d_b,
                                    'user_id'=>$user->id,
                                    'verify'=>false,]);
        
           
            
            
            //'doc_number', 'type', 'img','user_id','verify'
            


        return redirect(url('/home'));
    }

    public function destroy(Request $request){

    }
    public function login(Request $request){
        
        $vehicle= OnnerDetails::where('user_id',auth()->guard()->user()-id)->get()[0]->onner->vehicleOnner->where('verify',true);
        return view('driver.login',['vehicles'=>$vehicle]);

    }
    public function vehicle(Request $request) {
        $request->validate([
            'name'=>['required', 'string', 'max:20'],
            'pincode'=>['required', 'numeric'],

        ]);
        $village=Village::where('name',$request->input('name'))->get();
        $onner=OnnerDetails::where('driver_id', auth()->guard()->user()->id)->get();
        $vehicle= Vehicel::where('onner_id',$onner->onner_id)->get();
        $village= Village::where('name', $request->input('name'))->get();
        $vs=new VehicelStarus;
        //'user_id', 'vehicel_id', 'status','trip_status','login','loginon','village_id',
        $vs->user_id= auth()->guard()->user()->id;
        $vs->vehicel_id=$vehicle[0]->id;
        $vs->status='online';
        $vs->trip_status='none';
        $vs->login= date('Y-m-d');
        $vs->loginon= date('H:i:s');
        $vs->village_id=$village[0]->id;
        $vs->save();

        return redirect('driver/dashbord');
    }


}
