<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vehicel;
use App\Document;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class VehicelController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        
    }
    public function save(Request $request){
//        dd($request->all());
       /* 'onner_id', 'vehicle_number', 'vehicle_name','logingcapecity','verify', 
                         */
        /*
            
            'verify' => 'false'
  'onner_id' => '2'
  'vehicle_number' => 'gh25ff11'
  'vehicle_name' => 'ashok lalen'
  'logingcapecity' => '100000'
  'doc_f' => 'Screenshot from 2020-07-14 10-39-00.png'
  'doc_b' => 'Screenshot from 2020-07-16 12-34-49.png'
  'doc_n' => 'gggjjjeas'
                  */
       $request->validate([
            'vehicle_number' =>['required', 'string', 'max:20'],
            'vehicle_name' => ['required', 'string', 'max:50'],
            'logingcapecity' => ['required', 'numeric', 'min:100','max:9999999999'],
            'verify'=>['required', 'string'],
            'doc_n'=>['required', 'string', 'max:20'],]);
          
        
        $vehicle= Vehicel::create(['onner_id' => auth()->guard()->user()->id,
                                'vehicle_number' => $request->input('vehicle_number'),
                                'vehicle_name' => $request->input('vehicle_name'),
                                'logingcapecity' => $request->input('logingcapecity'),
                                'verify'=>false]);
              $cover_d_f = $request->file('doc_b');
              //dd($request->all());

             $extension_d_f = $cover_d_f->getClientOriginalExtension();
             Storage::disk('public')->put($cover_d_f->getFilename().'.'.$extension_d_f,  File::get($cover_d_f));

 
            $document= new Document;

            $document->doc_number=$request->input('doc_n');
            $document->type = $request->input('vehicle_number');
            $document->img =$cover_d_f->getFilename().'.'.$extension_d_f;;
            $document->user_id= auth()->guard()->user()->id;
            $document->verify=false;
            $document->save();
            $cover_d_b = $request->file('doc_f');
             $extension_d_b = $cover_d_b->getClientOriginalExtension();
             Storage::disk('public')->put($cover_d_b->getFilename().'.'.$extension_d_b,  File::get($cover_d_b));

 
            $document= new Document;
            $document->doc_number=$request->input('doc_n');
            $document->type = $request->input('vehicle_number');
            $document->img =$cover_d_b->getFilename().'.'.$extension_d_b;;
            $document->user_id= auth()->guard()->user()->id;
            $document->verify=false;
            $document->save();
    }
    public function create(Request $request){
        return view('onner.vehicel.save');
    }//index
    public function index(Request $request){

    }
    public function update(Request $request){

    }
    
}
