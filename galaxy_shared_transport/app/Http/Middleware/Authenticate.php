<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth as Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        $role= Auth::guard()->user()->roles->pluck('name')->toArray();

        if (! $request->expectsJson()) {
            return route('login');
        }
        
        if(in_array('admin', $role)){
            return route('home');
        }
        elseif(in_array('executive', $role) ){
           return route('home'); 
        }
        elseif(in_array('driver', $role)){
            return route('home');
        }
        elseif(in_array('onner', $role)){
            return route('home');
        }
        elseif(in_array('user', $role)){
            return route('home');
        }
        else{
            return route('galaxy');
        }
        
        
            
        
    }
}
