<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillageGoTo extends Model
{
    
    protected $fillable = [
        'vehicel_starus_id', 'village_id', 
    ];
    public $timestamps = false;
    
    public function vehicleStatus() {
        return $this->belongsTo('VehicelStarus','vehicel_starus_id','id');
        
    }
    public function village() {
        return $this->belongsTo('Village','village_id','id');
    }
    
}
