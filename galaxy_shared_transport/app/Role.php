<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
    ];
    //name Descending
    public function user()
    {
        return $this->belongsToMany('App\User', 'role_users', 'user_id', 'role_id');
    }
}
