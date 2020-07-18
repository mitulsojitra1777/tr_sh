<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnnerDetails extends Model
{
  	
    protected $fillable = [
        'driver_id','onner_id',
    ];
  public $timestamps = false;
 
  public function driver()
  {
      return $this->belongsToMany('App\User');
      
  }
  public function onner()
  {
      return $this->belongsTo('App\User','onner_id','id');
      
  }

 
  // public function trips()
  // {
  //     return $this->hasMany('App\Trip','onner_det_id','id');
  // }
}
