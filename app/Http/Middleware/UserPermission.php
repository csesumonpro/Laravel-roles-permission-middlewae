<?php

namespace App\Http\Middleware;

use Closure;

class UserPermission
{
    use \App\Traits\UserPermission;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ( $this->checkRequestPermission()){
            return response()->view('welcome');
        }

        return $next($request);
    }
}
