<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
  //user_id 	vehicel_id 	trip_type 	pending_space 	created_at 	updated_at 	
  protected $fillable = [
        'user_id', 'vehicel_id', 'trip_type','pending_space','created_at',
    ];
  public function driverDetail()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');

  }
  public function vehicleDetail()
  {
      return $this->belongsTo('App\Vehicel','vehicel_id','id');
  }
  public function tripDetail()
  {
      return $this->hasMany('App\TripDetail','trip_id','id');
  }
}
