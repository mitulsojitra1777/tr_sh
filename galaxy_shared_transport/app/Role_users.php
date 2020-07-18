<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_users extends Model
{
    //user_id 	role_id 	
    protected $fillable = [
        'user_id', 'role_id', 
    ];
    public $timestamps = false;
}
