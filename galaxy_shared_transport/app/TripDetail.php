<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripDetail extends Model
{
    protected $fillable = [
        'user_id', 'from_address_id', 'to_address_id','status','loading','pickup_person','pickup_contact','drop_person','drop_contact',
    ];
  public function fromAddress()
  {
     return $this->belongsTo('App\Address','from_address_id','id');
  }
  public function toAddress()
  {
     return $this->belongsTo('App\Address','to_address_id','id');
  }
  public function user()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');

  }
  public function trip()
  {
      return $this->belongsTo('App\Trip','trip_id','id');
  }
  public function tripStatus()
  {
      return $this->belongsTo('App\TripStatuses','status','id');
  }
}
