<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Collection;
use App\Models\Admin\User_Model;

class reController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front2.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('user_password');
        $password = md5($password);

        $records = DB::table('users')->where('email','=',$email)->where('password','=',$password)->get();

        if ($records->isEmpty()) {
            return redirect()->back()->with('message', 'Username or Password wrong');
          }
        else{
            foreach($records as $record){
                $login_user_name = $record->first_name;
                $login_user_phone = $record->phone;
                $login_user_type = $record->user_type;
            }
            $request->session()->put('login_user_name', $login_user_name." | ");
            $request->session()->put('login_user_phone', "Ref.number: ".$login_user_phone);
            // $request->session()->put('login_user_name', $login_user_name);
            // $request->session()->put('login_user_phone', $login_user_phone);
            // $request->session()->put('login_user_type', $login_user_type);
            







            // $username = $request->input('email');
            // $password = $request->input('user_password');

            // $login = new User_Model();
            // $memberdata = $login->checkMemberLogin($username, $password);
            // if(!empty($memberdata)) {
            //     $sessionData = (array) $memberdata;
            //     Session::put('member_data', $sessionData);
            //     if ($request->has('remember')) {
            //         $this->_manage_cookie($request, 14400); // set for 10 days
            //         return 1;
            //     } else {
            //         $this->_manage_cookie($request, -5); // remove set password
            //         return 1;
            //     }
            // } else {
            //     return 0;
            // }

            // dd("ih");
           











            return view('front2/index');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
