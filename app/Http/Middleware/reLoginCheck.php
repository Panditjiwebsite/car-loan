<?php

namespace App\Http\Middleware;

use Closure;

class reLoginCheck
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
        //if (e(session()->get('login_user_name'))) {
        if (true) {
            return view('front2/index');
        }else{
            return view('front2/login');
        }
        return $next($request);
    }
}
