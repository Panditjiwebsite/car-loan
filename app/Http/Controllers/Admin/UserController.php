<?php

/**
 * UserController Class
 *
 * @package Admin
 * @author Atul Singh Khatri
 * @version 1.0
 * @description User controller
 * @link https://domain name/admin
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admin\User_Model;

use Storage;
use DB;
use Session;
use Cookie;
use Helpers;

class UserController extends Controller
{
    var $objUserModel;
    
    public function __construct()
    {
        $this->objUserModel = new User_Model();
        
    }

    
    public function login(Request $request){

        if($request->session()->has('user_data') && @$request->session()->get('user_data')['user_type'] == 'APP_ADMIN'){   
            return redirect(url(config('constants.ADMIN_URL').'dashboard'));
        }
        
        return view('admin.login');
    }

    public function doLogin(Request $request) {
        $username = $request->input('email');
        $password = $request->input('password');
        $login = new User_Model();
        $userdata = $login->checkLogin($username, $password);
        if(!empty($userdata)) {
            $sessionData = (array) $userdata;
            Session::put('user_data', $sessionData);
            if ($request->has('remember')) {
                $this->_manage_cookie($request, 14400); // set for 10 days
                return 1;
            } else {
                $this->_manage_cookie($request, -5); // remove set password
                return 1;
            }
        } else {
            return 0;
        }
        
    }

    protected function _manage_cookie($request, $minutes) {
        $response = new Response('cookie');
        $response->withCookie(cookie('email', $request->input('email'), $minutes));
        $response->withCookie(cookie('password', $request->input('password'), $minutes));
        $response->withCookie(cookie('remember', $request->input('remember'), $minutes));
        return $response;
    }

    public function logout() {
        Session::flush(); // removes all session data
        Session::forget('user_data'); // Removes a specific variable
        return redirect(url(config('constants.ADMIN_URL')));
    }

    public function resetPass(Request $request) {
        $username = $request->input('email');
        $email = new User_Model();
        $userData = $email->getAdminData($username);
        $randomString = generateRandomStr(8, 'CA');
        if(!empty($userData)){ 
            $updatedData = array(                
                'password' => getPasswordHashed($randomString),
            );
            $updatedData['updated_at'] = date('Y-m-d H:i:s');
            DB::table('users')->where('id', $userData->id)->update($updatedData);
            $view = 'admin.mail_reset';
            $mailData = array(
            'subject' => 'Your new password for Sofo',
            'name' => $userData->first_name .' '. $userData->last_name,
            'email' => $userData->email,
            'pass' => $randomString,
            'clubName' => '',
            );
            sendSMTPMail($view, $mailData);
            return "true";        
        } 
        else {
            return "false";
        }
    }
    
    public function dashboard(){
        //$userActiveDataCount = DB::table('users')->where('user_type', '!=', 'APP_ADMIN')->where('status', '=', 'ACTIVE')->count();

        //$userDataCount = DB::table('users')->where('user_type', '!=', 'APP_ADMIN')->count();
        

        $carActiveDataCount = DB::table('cars')->where('status', '=', '1')->count();

        $carDataCount = DB::table('cars')->whereNull('deleted_at')->count();
        
        $dealerActiveDataCount = DB::table('dealership')->where('status', '=', '1')->count();
        $dealerDataCount = DB::table('dealership')->whereNull('deleted_at')->count();


        return view('admin.dashboard',compact('carDataCount','carActiveDataCount','dealerActiveDataCount','dealerDataCount'));

    }
    
    public function list_users(){
       return view('admin.users.list');
    }

     public function ajaxListusers(Request $request) {
        $listData = $this->objUserModel->getUserListDatatable($request->all());
        return response()->json($listData);
    }

    public function export_csv() {
       
         $query = DB::table('users')
            ->leftJoin('user_details', 'users.id', '=', 'user_details.user_id')
            ->leftJoin('settings', 'users.id', '=', 'settings.user_id')
            ->select('users.id as id','users.first_name as first_name','users.last_name as last_name','users.created_at as created_at','users.email as email','users.status as status', 'user_details.gender as gender','settings.passport as passport')
            ->where('users.user_type', '!=', 'APP_ADMIN')
            ->whereNull('users.deleted_at')->get();
          $request_list = array();
        // pr($query);die;
          if($query){
            foreach ($query as $key => $value) {
               $data['id']  = $value->id;
               $data['created_at']  = $value->created_at;
               $data['first_name']  = $value->first_name;
               $data['last_name']  = $value->last_name;
               $data['email']  = $value->email;
               $data['gender']  = $value->gender;
               $data['passport'] = strtoupper($value->passport);
               $data['status'] = $value->status;

               
               array_push($request_list, $data);
            }
          }
       
       $header = array(
                    'User ID',
                    'User Since',
                    'First Name',
                    'Last Name',
                    'Email',
                    'Gender',
                    'Passport',
                    'Status'
        );
        generateCSV($header, $request_list, 'UsersList.csv');

    }

    public function delete_users(Request $request) {
        
        $id = $request->id;
        $deletedat = date('Y-m-d H:i:s');
        $status = 'INACTIVE';
        DB::table('users')->where('id', $id)->update(['deleted_at' => $deletedat, 'status' => $status]);       
    }

     public function update_status(Request $request) {
        
        $id = $request->id;
        $updatedat = date('Y-m-d H:i:s');
        $getUserData = $this->objUserModel->getUserData($id);
        $status = 'ACTIVE';
        if($getUserData->status == 'ACTIVE'){
           $status = 'INACTIVE'; 
        }
        DB::table('users')->where('id', $id)->update(['updated_at' => $updatedat, 'status' => $status]);
    }

     public function users_edit($id){ 
        
        $userData = $this->objUserModel->getFullDetailsByUserId($id);
        $genderData = array('Male' => 'Male','Female'=>'Female');
        return view('admin.users.edit',compact('userData','id','genderData'));
    }

    public function user_details($id){
        $userData = $this->objUserModel->getFullDetailsByUserId($id);
        
        return view('admin.users.view', compact('userData','id'));
    }
    


    public function users_update(Request $request, $id)
    {   
        $addUserData = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => date('Y-m-d H:i:s')
        );
        if($request->password != ''){
            $addUserData['password'] = getPasswordHashed($request->password);
        }
        DB::table('users')->where('id', $request->id)->update($addUserData);
        $get_user_detail = $this->objUserModel->getUserDetailsData($id);
        $otherData = array(
            'gender' => $request->gender,
            'dob' => date("Y-m-d",strtotime($request->dob)),
            'updated_at' => date('Y-m-d H:i:s')
        );
        if(!empty($get_user_detail)){  
            DB::table('user_details')->where('user_id', $request->id)->update($otherData);
        }
        else{
            $otherData['user_id'] = $id;
            DB::table('user_details')->insert($otherData);
        }
        return redirect(config('constants.ADMIN_URL').'listusers')->with('success_msg', 'Your data successfully updated.');
    }
    

    public function change_password() {
        return view('admin.change_password');
    }
    
    public function save_change_password(Request $request) {
        
        $opassword = $request->input('opassword');
        $password = $request->input('password');
        $cpassword = $request->input('cpassword');

        $user_data = Session::get('user_data');
        $userId = $user_data['id'];
    
        $pexist = User_Model::where(['id' => $userId, 'password' => getPasswordHashed($opassword)])->first();
        
        if (empty($pexist)) {
            return redirect(config('constants.ADMIN_URL') . 'change-password/')->with('error_msg', 'Oh snap! Old password Invalid.');
        }

        if ($password != $cpassword) {
            
            return redirect(config('constants.ADMIN_URL') . 'change-password/')->with('error_msg', 'Oh snap! Password and Confirm Password not match.');
            
        } else {

            User_Model::where(['id' => $userId])->update(['password' => getPasswordHashed($password)]);
            return redirect(config('constants.ADMIN_URL') . 'change-password/')->with('success_msg', 'Password updated successfully.');
        }
    } 

     public function social_friends($id){
        return view('admin.users.listfriend', compact('id'));
    }

    public function ajax_list_friend(Request $request) {
        $listData = $this->objFriendModel->getFriendListDatatable($request->all());
        return response()->json($listData);
    }

    public function list_visits($id){
        return view('admin.users.listvisit', compact('id'));
    }

    public function ajax_list_visit(Request $request) {
        $listData = $this->objVisitModel->getVisitListDatatable($request->all());
        return response()->json($listData);
    }


    public function get_profile(){ 
        $user_data = Session::get('user_data');
        $id = $user_data['id'];
        $userData = $this->objUserModel->getAdminDetailsByUserId($id);
        if(empty($userData)){
           return redirect(config('constants.ADMIN_URL').'dashboard')->with('error_msg', 'Unable to fetch your data.'); 
        }
        
        return view('admin.users.profile',compact('userData','id'));
    }
    
    public function update_profile(Request $request)
    {   
        $user_data = Session::get('user_data');
        $id = $user_data['id'];
        $addUserData = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'updated_at' => date('Y-m-d H:i:s')
        );
        if($request->image != ''){
            $addUserData['profile_image'] = $request->image;
        }
        DB::table('users')->where('id', $id)->update($addUserData);
        if($request->image != ''){
            Session::put('user_data.profile_image',$request->image);
        }
       
        return redirect(config('constants.ADMIN_URL').'update-profile')->with('success_msg', 'Your data successfully updated.');
    }


     /*public function upload_image(Request $request)
    {

        if(isset($_POST["photo_name"]))
        {
            $data = $_POST["photo_name"];
            $image_array_1 = explode(";", $data);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $imageName ='user-'.time().'.jpg';
            Storage::disk('s3')->put($imageName, $data);
            $imageURL = Storage::disk('s3')->url($imageName);
            return  '<img src="'.$imageURL.'" class="img-thumbnail" data-id ="'.$imageURL.'" id="image_name"/>';
        }
    }*/

    public function upload_image(Request $request) {
           
        if(isset($_POST["photo_name"]))
           {
               $data = $_POST["photo_name"];
               $image_array_1 = explode(";", $data);
               $image_array_2 = explode(",", $image_array_1[1]);
               $data = base64_decode($image_array_2[1]);
               $name ='user-pic-'.time().'.jpg';     
               $imageName = config('filelocation.user-pic').$name;    
               file_put_contents($imageName, $data);
               $fileUrl = url('/' . $imageName);
               return  '<img src="'.$fileUrl.'" class="img-thumbnail" data-id ="'.$name.'" id="image_name"/>';
        }

   }
    
}
?>
