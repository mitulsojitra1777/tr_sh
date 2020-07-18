<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','mobile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_users', 'user_id', 'role_id');
    }
    public function driverTrips()
    {
        return $this->hasMany('App\Trip','user_id','id');
    }
    public function vehicleDriver()
    {
        return $this->belongsToMany('App\User','onner_details','onner_id','driver_id');
    }
    public function vehicleOnner()
    {
        return $this->hasMany('App\Vehicel','onner_id','id');
    }
    public function userTrips()
    {
        return $this->hasMany('App\TripDetail','user_id', 'id');
    }//Document
    public function userDocument()
    {
        return $this->hasMany('App\Document','user_id', 'id');
    }
    
}
