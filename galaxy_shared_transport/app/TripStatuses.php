<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TripStatuses extends Model
{
    protected $fillable = [
        'title',
    ];
    public $timestamps = false;
    
  public function tripDetail()
  {
      return $this->hasMany('App\TripDetail','status','id');
  }
}
