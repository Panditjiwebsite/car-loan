<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckUserLogin {  //echo "nmnmnmnm";die;

    protected $except = [
        '/', 'doLogin'
    ];
    
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
 
	public function handle($request, Closure $next) {
        $userData = $request->session()->all();
        if ($request->is('admin/*') && $request->session()->has('user_data') && @$userData['user_data']['user_type'] == 'APP_ADMIN') {  
            return $next($request);
        }else{
			if ($request->is('admin/*')) {
				return redirect('/admin');
			}else{
				return redirect('/');
			}
		}        
    }

}
?>