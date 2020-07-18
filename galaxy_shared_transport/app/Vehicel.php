<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicel extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'onner_id', 'vehicle_number', 'vehicle_name','logingcapecity','verify',
    ];
    
    public $timestamps = false;
    public function onner()
    {
        return $this->belongsTo('App\User','onner_id','id');
    }
    
    
}
