<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CustomerMiddleware
{
    private $cus;
    public function __construct()
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'user')
    {
        if(Auth::guard($guard)->check()){
            return $next($request);
    }
        return redirect()->route('home')->with('error','Ban can dang nhap !');

    }
}
