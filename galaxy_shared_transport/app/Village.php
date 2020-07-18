<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
     protected $fillable = [
        'name','taluka','distic','state','country'.'pincode',
         //name	taluka	distic	state	country	pincode 	
    ];
    
    public $timestamps = false;




    public function goToVehiceleS()
    {
        return $this->belongsToMany('App\VehicelStarus', 'village_go_tos', 'village_id', 'vehicel_starus_id');
    }
}
