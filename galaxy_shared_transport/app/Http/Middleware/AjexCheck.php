<?php

namespace App\Http\Middleware;

use Closure;

class AjexCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->ajex()){
            resopnse()->view('errors.404');
        }
        else{
            return $next($request);
        }
    }
}
