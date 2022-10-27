<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Auth;


class Anything extends Middleware{

    public function handle($request, Closure $next, ...$guards){
        $Today = date('Y-m-d');
        //dd($Today);

        return $next($request);
    }
}