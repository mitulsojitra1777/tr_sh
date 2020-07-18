<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicelStarus extends Model
{
    protected $fillable = [
        'user_id', 'vehicel_id', 'status','trip_status','login','loginon','village_id',
    ];
    
    public $timestamps = false;
    public function goToVillages()
    {
        return $this->belongsToMany('App\Village', 'village_go_tos', 'vehicel_starus_id', 'village_id');
    }
    public function vehicel()
    {
        return $this->belongsTo('App\Vehicel', 'vehicel_id', 'id');
    }
    public function driver()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }//village_id
    public function currentVillages()
    {
        return $this->belongsTo('App\Village', 'village_id', 'id');
    }
}
