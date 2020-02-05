<?php

namespace App\Http\Middleware;
use App\Article;
use Closure;
use Session;
use View;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class checkMemberLogin
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

               // Make sure current locale exists.
            if (Session::has('member_data')) :
                return $next($request);
                // $locale = Session::get('member_data')['first_name'];
                // var_dump($locale);
            else :
                return redirect(url('').'/login');
            endif;
    
    //         // $this->app->setLocale($locale);
    
    //         // return $next($request);

    //    die;

    //     if($request->session()->get('member_data')['user_type'] == 'MEMBER'){
    //         // When user login
    //         return $next($request);
    //     }else{
    //         // When user not login
    //         return view('front2/login-page');
    //     }






        // $login_user_name = session()->get('login_user_name');
        // $login_user_phone = session()->get('login_user_phone');
        // $login_user_type = session()->get('login_user_type');

        // if($login_user_type = "MEMBER" && $login_user_name != "" && $login_user_phone != ""){
            
        // }
        // else{
        //     return view('front2/login-page');
        // }
        
    }
}
