<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\User_Model;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use Storage;
use DB;
use Session;
use Cookie;
use Helpers;

class MemberController extends Controller
{

    // public function __construct(){
    //     $this->middleware('checkMemberLogin')->except(['login']);
    // }

    public function login(Request $request){

        // if login than return "member-area"
        if($request->session()->get('member_data')['user_type'] == 'MEMBER'){   
            return redirect(url(config('constants.MEMBER_URL').'member-area'));
        }

        // if not login than return "login-page"
        return view('front2/login-page');
    }

    public function member_doLogin(Request $request){
        $username = $request->input('email');
        $password = $request->input('user_password');
        $login = new User_Model();
        $memberdata = $login->checkMemberLogin($username, $password);

        if(!empty($memberdata)) {
            $sessionData = (array) $memberdata;
            Session::put('member_data', $sessionData);

            // First session set than redirect "member-area" view
            return redirect(url(config('constants.MEMBER_URL')).'/member-area');
        }

    }

    public function logout(){
        Session::flush(); // removes all session data
        Session::forget('member_data'); // Removes a specific variable
        return redirect(url('').'/login');
    }
    
    // When member login than "member_area" access
    public function member_area(){
        return view('front2/index');

    }

}
