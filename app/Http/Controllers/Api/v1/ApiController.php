<?php

/**
 * ApiController
 * @package API
 * @Class User
 * @author Ranjan Rahi
 * @version 1.0
 * @description Technician based processes
 */

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use DOMDocument;
use OpenTok\OpenTok;
use OpenTok\MediaMode;
use App\Helpers\FileUpload;
use App\Models\Users_Model;
use App\Models\User_Details_Model;
use App\Models\Social_Media_Model;
use App\Models\User_Settings_Model;
use App\Models\Cms_Model;
use App\Models\Places_Model;
use App\Models\Friends_Model;
use App\Models\Notifications_Model;
use App\Models\Notifications_Log_Model;





/***************************************************/

class ApiController extends Controller {
    /* public function __construct() {
      $this->techModel = new Technician_Model();
      } */
    
       
    /**
     * @package API
     * @class ApiController
     * @function signup
     * @author Ranjan Rahi
     * @version 1.0
     */

    public function signUp(Request $request) {
        $validator = Validator::make($request->all(), [
                    'email' => 'required|email|max:255',
                    'device_type' => 'required',
                    'signUp_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => '', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {
            $count = DB::table('users')->where('email', $request->input('email'))->count();
            if ($count > 0 && $request->input('signUp_type') == 'normal') {
                return response()->json(['payload' => new \stdClass(), "message" => 'This email is already registered.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            } else {
                $userToken = generateRandomStr(15, 'user_');
                if($request->input('signUp_type') == 'normal'){
                    if(empty($request->input('password'))){
                        return response()->json(['payload' => new \stdClass(), "message" => 'password is required', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
                    }
                    $password = getPasswordHashed($request->input('password'));
                } else {
                    $password = getPasswordHashed(generateRandomStr(5, 'pass_'));
                }
                $udata = array(
                                    'first_name' => $request->input('first_name'),
                                    'email' => $request->input('email'),
                                    'password' => $password,
                                    'device_type' => $request->input('device_type'),
                                    'device_token' => $request->input('device_token'),
                                    'user_type' => 'MEMBER',
                                    'api_token' => $userToken,
                                    'lat' => $request->input('lat'),
                                    'lng' => $request->input('lng'),
                                    'signUp_type' => $request->input('signUp_type'),
                                );

                if($count == 0){
                    $id = DB::table('users')->insertGetId( $udata );
                    User_Details_Model::insert(['user_id'=> $id]);
                } else { 
                    
                    $userData = Users_Model::select('*')->where('email', $request->input('email'))->first();                  
                    Users_Model::where('id',$userData->id)->update(array('lat'=>$request->lat,'lng' => $request->lng, 'api_token' => $userToken, 'signUp_type'=>$request->signUp_type));
                }
                $userData = Users_Model::select('*')->where('email', $request->input('email'))->first()->toArray(); 
                        // Add User Token
                unset($userData['password']);
                return response()->json(['payload' => $userData, "message" => 'Signup success.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            }
        }
    }
    
    
    
    /**
     * @package API
     * @class ApiController
     * @function login
     * @author Ranjan Rahi
     * @version 1.0
     * @description Technician login
     */
    public function logIn(Request $request) {

        $validator = Validator::make($request->all(), [
                    'email' => 'required|max:127',
                    'password' => 'required'
        ]);

        $userData = new \stdClass();
        if ($validator->fails()) {
            return response()->json(['payload' => $userData, "message" => 'Please enter correct email or password.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {

            $loginData = array(
                'email' => $request->email,
                'password' => getPasswordHashed($request->password),
            );

            $userData = Users_Model::select('*')->where($loginData)->first();
            
            //pr($userData);
            if (empty($userData)) {
                return response()->json(['payload' => new \stdClass(), "message" => 'Invalid email/password.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            } else{
            if($userData->status == 'INACTIVE') {
                return response()->json(['payload' => new \stdClass(), "message" => 'User is inactive in Sofo.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            }
            else {
                if(isset($request->device_token) && isset($request->device_type)){
                    Users_Model::where('id',$userData->id)->update(array('device_token'=>$request->device_token,'device_type' => $request->device_type));
                }
                if(isset($request->lat) && isset($request->lng)){
                    Users_Model::where('id',$userData->id)->update(array('lat'=>$request->lat,'lng' => $request->lng));
                }
                                
                // Add User Token
                $userToken = generateRandomStr(15, 'user_');
                Users_Model::where('id',$userData->id)->update(array('api_token'=>$userToken));
                                
                $userData = array(
                    'user_id' => $userData->id,
                    'first_name' => $userData->first_name,
                    'last_name' => $userData->last_name,
                    'phone' => $userData->phone,
                    'email' => $userData->email, 
                    //'dob' => empty($userData->dob) ? "" : $userData->dob,  
                    'device_type' => $userData->device_type, 
                    'device_token' => $userData->device_token,
                    'user_type' => $userData->user_type,
                    'status' => $userData->status,
                    'api_token' => $userToken,
                    'profile_image'=>$userData->profile_image,
                );
                return response()->json(['payload' => $userData, "message" => 'Login successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            }
         }
        }
    }
    
    
      
     /**
     * @package API
     * @class ApiController
     * @function sendForgetPasswordToken
     * @author Ramayan Prasad
     * @version 1.0
     */

    public function sendForgetPasswordToken(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {

            return response()->json(['payload' => new \stdClass(), "message" => 'Please enter correct email.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {

            $email = $request->input('email');
            $count = Users_Model::where('email', '=', $email)->count();

            if ($count == 1) {

                $userId = Users_Model::select('id')->where('email', '=', $email)->first();

                $verificationCode = randomOtp();

                $mailData = array(
                    'subject' => 'OTP',
                    'email' => $request->email,
                    'otp' => $verificationCode,
                );
                sendSMTPMail('mails.forgot-password', $mailData);


                DB::table('user_token')->where(['user_id' => $userId->id, 'token_type' => 'forgot_otp'])->delete();

                DB::table('user_token')
                ->insert(array(
                    'user_type' => 'user',
                    'user_id' => $userId->id,
                    'token_type' => 'forgot_otp',
                    'token' => $verificationCode
                )
            );

                $data = new \stdClass();
                $data->email = $email;
                $data->otp = $verificationCode;

                return response()->json(['payload' => $data, "message" => 'Your OTP sent on your email.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            } else {

                return response()->json(['payload' => new \stdClass(), "message" => 'You are not a registered user.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            }
        }
    }


     /**
     * @package API
     * @class ApiController
     * @function verifyOtp
     * @author Ramayan Prasad
     * @version 1.0
     */

    public function verifyOtp(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'otp_code' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['payload' => new \stdClass(), "message" => 'Please enter correct otp.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {

            // Get user details
            $email = $request->email;
            $userDetails = Users_Model::where(['email' => $email])->first();

            $verificationcode = $request->otp_code;
            $count = DB::table('user_token')->where(array('user_type' => 'user', 'token_type' => 'forgot_otp', 'user_id' => $userDetails['id'], 'token' => $verificationcode))->count();

            if ($count > 0) {
                $data = new \stdClass();
                $data->user_id = $userDetails['id'];

                return response()->json(['payload' => $data, "message" => 'OTP matched successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            } else {

                return response()->json(['payload' => new \stdClass(), "message" => 'Please enter valid OTP.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            }
        }
    }

      
    /**
     * @package API
     * @class ApiController
     * @function resetPassword
     * @author Ranjan Rahi
     * @version 1.0
     */

    public function resetPassword(Request $request) {
    
        $validator = Validator::make($request->all(), [
                    'email' => 'required|email|max:255',
                    'new_password' => 'required',
                    'confirm_password' => 'required|same:new_password',               
        ]);
        
     
        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please enter same password.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {
        
            $email = $request->email;   
           $count = users_Model::where(array('user_type' => 'MEMBER', 'email' => $email))->count();
       
            if ($count > 0) {
                $confirmPassword = $request->confirm_password;
                
                users_Model::where(array('email' => $email))->update(array('password' => getPasswordHashed($confirmPassword)));

                return response()->json(['payload' => new \stdClass(), "message" => 'Password update successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            } else {

                return response()->json(['payload' => new \stdClass(), "message" => 'Invalid Email.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            }
        }
    }


    /**
     * @package API
     * @class ApiController
     * @function  change password
     * @author Ramayan Prasad
     * @version 1.0
     */
      
    public function changePassword(Request $request) {
        
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
   
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'old_password' => 'required',
            'new_password' => 'required|different:old_password',
            'confirm_password' => 'required|same:new_password'
         ]);

        if ($validator->fails()) {

            return response()->json(['payload' => new \stdClass(), "message" => '', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {
            $user_Id = $request->user_id;
            $oldPassword = getPasswordHashed($request->old_password);

           if($user_Id == $userId){
         
           $count = users_Model::where(array('id' => $user_Id,'password' => $oldPassword))->count();

            if ($count > 0) {
               
                $confirmPassword = $request->confirm_password;

                users_Model::where(array('id' => $user_Id,'password' => $oldPassword))->update(array('password' => getPasswordHashed($confirmPassword)));

                return response()->json(['payload' => [], "message" => 'Password changed successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            } 
            else {

                return response()->json(['payload' => [], "message" => 'Old Password is incorrect.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            }
          }
          else{
            return response()->json(['payload' => [], "message" => 'user id is incorrect.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
          }
        }

    }
   

/**
     * @package API
     * @class ApiController
     * @function updatePlace
     * @author Ranjan Rahi
     * @version 1.0
     **/

    public function updatePlace(Request $request) {

        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'user_id'  => 'required',
                    'lng' => 'required',
                    'lat' => 'required',
         ]);
     
        if($userId != $request->user_id){
        return response()->json(['payload' => new \stdClass(), "message" => 'User id not exists.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please enter user id,latitude and longitute.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } else {
        
            $user = DB::table('users')
            ->where(array('user_type' => 'MEMBER', 'id' => $userId))
            ->first();
            
            if (!empty($user)) {
            $lat = $request->lat; // new    
            $lng = $request->lng; // new
             
            $query = DB::table('places');
            $distanceStr = "111111 * DEGREES(ACOS(LEAST(COS(RADIANS(lat)) * COS(RADIANS(".$lat.")) * COS(RADIANS(lng - ".$lng.")) + SIN(RADIANS(lat)) * SIN(RADIANS(".$lat.")), 1.0))) AS distance";
            
            //DB::enableQueryLog();
            $query->selectRaw("place_id, $distanceStr");
            $query->orderby("distance","ASC");
            $place = $query->first();
            //pr(DB::getQueryLog()); die;

            $place_id =$place->place_id; // getting nearest place_id 
            $place_distance =round($place->distance,0);// nearest distance
         
            $updated_at = strtotime($user->updated_at); // checking updated at is blank
            if(empty($updated_at)){
                users_Model::where(array('id' => $userId))
                ->update(array('lng' => $lng,'lat'=> $lat,'place_id'=>$place_id,'updated_at'=>NOW()));
            }

            else{
            $current_time = strtotime(NOW());
            $time_diff = abs($current_time - $updated_at);
            

            if($time_diff <= 360 && $place_distance <= 5)// wating for 5 mins
            {
            users_Model::where(array('id' => $userId))
                 ->update(array('lng' => $lng,'lat'=> $lat,'place_id'=>$place_id,'updated_at'=>NOW()));
            
            if($user->place_id != $place_id && $user->place_id != '') {
               DB::table('people_at_places')->
                   insert(
                       array(
                        'user_id'=>$userId,
                        'place_id'=>$place_id

                       )
                    );
                }
                
            }
            else{
                users_Model::where(array('id' => $userId))
                ->update(array('lng' => $lng,'lat'=> $lat,'updated_at'=>NOW()));
              }
    
            } 
            return response()->json(['payload' => new \stdClass(), "message" => 'Place updated successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
           }

         else 
            {
           return response()->json(['payload' => new \stdClass(), "message" => 'Place not updated.', 'dev_message' => '', "type" => 'ERROR', "code" => 0]);
            }
        }
    }
    

    
    /**
     * @package API
     * @class ApiController
     * @function Places
     * @author Ranjan Rahi
     * @version 1.0*/

    public function haversineGreatCircleDistance(
        $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 3959)
      {
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);
      
        $lonDelta = $lonTo - $lonFrom;
        $a = pow(cos($latTo) * sin($lonDelta), 2) +
          pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
        $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);
      
        $angle = atan2(sqrt($a), $b);
        return $angle * $earthRadius;
      }



  
    public function Places(Request $request) {
         $validator = Validator::make($request->all(), [
                    'lat' => 'required',
                    'lng' => 'required',
                    
         ]);
        
      
        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please enter latitude and longitute.', 'dev_message' => json_encode($validator->errors()),"type" => 'ERROR', "code" => 0]);
          } else {
                
                $filter_by_types =explode(',',$request->filter_types); //for filter places
                $rating =$request->rating;//for filter places by rating
            
                $custom_places =array('airport','amusement_park','aquarium','art_gallery','atm','bakery','bank','bar','beauty_salon','bicycle_store','book_store','bowling_alley','bus_station','cafe','campground','car_dealer','car_wash','casino','church','clothing_store','convenience_store','department_store','florist','furniture_store','gas_station','gym','hair_care','home_goods_store','jewelry_store','library','liquor_store','lodging','meal_delivery','meal_takeaway','movie_theater','museum','night_club','park','parking','pharmacy','post_office','restaurant','rv_park','school','shoe_store','shopping_mall','spa','stadium','store','subway_station','supermarket','taxi_stand','train_station','zoo'); // for all places

                $radius = $request->radius;
                $lat = $request->lat;
                $lng = $request->lng;
                
                if($radius ==''){
                   $radius =100;
                } 

                $places_url =file_get_contents('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$lat.','.$lng.'&radius='.$radius.'&key=AIzaSyAvD9K8Xop9GL4au8fYHqkO2PlriFBfTW8');
                
                //echo 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$lat.','.$lng.'&type=bank&radius='.$radius.'&key=AIzaSyAvD9K8Xop9GL4au8fYHqkO2PlriFBfTW8'; die;
        
                $places =json_decode($places_url);
                $nextpage = isset($places->next_page_token)?$places->next_page_token:'';
               
                
                $aLink='';
                $placeid_array=array();
                $places_array =array();
                foreach($places->results as $val){ 
                
                if(!empty($filter_by_types))//checking for request
                {  // echo "tets"; die;
                 $check = array_intersect($val->types,$filter_by_types);
                } 
              
                if(empty($request->filter_types)) // checking for all
                { 
                 $check = array_intersect($val->types,$custom_places);
                } 
                
                if(!empty($check)){
                    $goahead =1;
                    if(!empty($request->rating)){
                        $checkr = isset($val->rating)?(int)($val->rating):0;
                        
                      if($request->rating !=$checkr)  {
                          $goahead =0;
                          //pr($checkr); die;
                      }
                    }
                    if($goahead ==1){
                       //echo $goahead; die;
                	$distance =$this->haversineGreatCircleDistance($lat, $lng, $val->geometry->location->lat, $val->geometry->location->lng);
                    $distance =number_format($distance,2);
                   
                    if(isset($val->photos)){
                    $string = $val->photos[0]->html_attributions[0];
                    $dom = new DOMDocument();
                    $dom->loadHTML($string);
                    $elementA = $dom->getElementsByTagName('a')->item(0);
                    $aText = $elementA->nodeValue;
                    $aLink = $elementA->getAttribute('href');
                    }
                   
                    // getting user count
      
                    $places_array[]=array(
                        'lat'=>$val->geometry->location->lat,
                        'lng'=>$val->geometry->location->lng,
                        'icon'=>$val->icon,
                        'id'=>$val->id,
                        'name'=>$val->name,
                        'place_id'=>$val->place_id,
                        'rating'=> isset($val->rating)?(int)($val->rating):0,
                        'vicinity'=>isset($val->vicinity)?$val->vicinity:'',
                        'types'=>$val->types,
                        'photos'=>$aLink,
                        'photo_reference'=>isset($val->photos)?$val->photos[0]->photo_reference:'',
                        'totalusers'=>0,
                        'distance' =>$distance
                      );
                      
                // inserting places in tables
                 
                $placeid_array[]=$val->place_id;

                $count = Places_Model::where(array('place_id' => $val->place_id))->count();
               
                if($count == 0){
                    Places_Model::insert(
                    array(
                        'place_id'=>$val->place_id,
                        'name'=>$val->name,
                        'icon'=>$val->icon,
                        'rating'=> isset($val->rating)?round($val->rating,2):0,
                        'address'=>isset($val->vicinity)?$val->vicinity:'',
                        'lat'=>$val->geometry->location->lat,
                        'lng'=>$val->geometry->location->lng,
                        'distance' =>$distance,
                        'type' =>implode(',',$val->types),
                        'image' =>$aLink,
                        'photo_reference'=>isset($val->photos)?$val->photos[0]->photo_reference:''
                      )
                    );

                }
              }
             }
           
         }
           
           
           $newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." -6 minutes"));
           $countuserbyplace = Users_Model::selectRaw('count(1) as cnt,place_id')
                            ->where('updated_at','>=',$newTime)
                            ->where('status','ACTIVE')
                            ->whereIn('place_id',$placeid_array)
                            ->groupBy('place_id')
                            ->get();
            $result = $countuserbyplace->pluck('cnt','place_id');                
             
            $i=0;    
            foreach($places_array as $placescount)
            {
                
              if(isset($result[$placescount['place_id']])){
               
                $places_array[$i]['totalusers']=$result[$placescount['place_id']];
        
              }
              $i++;
            }
            
           return response()->json(['payload' => $places_array, 'next_page_token'=>$nextpage, "message" => 'Places .', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
            }
        }

      
 


  /**
     * @package API
     * @class ApiController
     * @function userProfile
     * @author Ranjan Rahi
     * @version 1.0*/

   public function userProfile(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'user_id'  => 'required',
          ]);

        if($userId != $request->user_id){
        return response()->json(['payload' => new \stdClass(), "message" => 'User id not exists.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }

        else{
             
             //DB::enableQueryLog();
             $profile =  DB::table('users')
             ->select('users.id','users.profile_image','users.first_name','users.last_name','users.email','users.phone','user_details.dob','user_details.company','user_details.work_email','user_details.work_phone','user_details.gender','user_details.location','user_details.marital_status','user_details.designation','user_details.website')
             ->join('user_details', 'user_details.user_id', '=', 'users.id')
             ->where('users.id',$userId)
             ->first();
              
             if(isset($profile)){  
              $profile->profile_image =$profile->profile_image;
              $profile->last_name = empty($profile->last_name) ? "" :$profile->last_name;
              $profile->dob = empty($profile->dob) ? "" :$profile->dob;
              $profile->company = empty($profile->company) ? "" :$profile->company;
              $profile->work_email = empty($profile->work_email) ? "" :$profile->work_email;
              $profile->work_phone = empty($profile->work_phone) ? "" :$profile->work_phone;
              $profile->gender = empty($profile->gender) ? "" :$profile->gender;
              $profile->location = empty($profile->location) ? "" :$profile->location;
              $profile->marital_status = empty($profile->marital_status) ? "" :$profile->marital_status;
              $profile->designation = empty($profile->designation) ? "" :$profile->designation;
              $profile->website = empty($profile->website) ? "" :$profile->website;

            
             return response()->json(['payload' => $profile, "message" => 'User Profile Details.', 'dev_message' => 'User Profile Details.', "type" => 'SUCCESS', "code" => 1]);

             }
             else{
                return response()->json(['payload' => [], "message" => 'Data not exists.', 'dev_message' =>'', "type" => 'ERROR', "code" => 0]);
             }
            }

             
        }

   

     /**
     * @package API
     * @class ApiController
     * @function updateuserprofile
     * @author Ranjan Rahi
     * @version 1.0*/

      public function updateuserprofile(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'first_name'=> 'required',
                    'email' => 'required|email|max:255',
                    'phone'=> 'required',
                    'work_email' => 'email|max:255',
        ]);


        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please enter first name,email and phone.', 'dev_message' => json_encode($validator->errors()),"type" => 'ERROR', "code" => 0]);
        }
        else{
            $countuser =  users_Model::where(['id' =>$userId])->count();
            $countuserdetails =  User_Details_Model::where(['user_id' =>$userId])->count();
            if($countuser >0 && $countuserdetails >0){
                //updating user
                users_Model::where(array('id' => $userId))
                ->update(
                    array(
                        'first_name'=> $request->input('first_name'),
                        'last_name'=> $request->input('last_name'),
                        'email' => $request->input('email'),
                        'phone' => $request->input('phone'),
                        'updated_at' =>date('Y-m-d H:i:s')

                      )
                );
                 //updating user details
                User_Details_Model::where(array('user_id' => $userId))
                ->update(
                    array(
                       
                        'dob'=> $request->input('dob'),
                        'company'=> $request->input('company'),
                        'work_email' => $request->input('work_email'),
                        'work_phone' => $request->input('work_phone'),
                        'gender'=> $request->input('gender'),
                        'location'=> $request->input('location'),
                        'marital_status' => $request->input('marital_status'),
                        'designation' => $request->input('designation'),
                        'website' => $request->input('website'),
                        'updated_at' =>date('Y-m-d H:i:s')
                   
                      )
                );
               return response()->json(['payload' => new \stdClass(), "message" => 'Profile updated successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
                }

              
            }
        }


        /**
     * @package API
     * @class ApiController
     * @function updateuserprofile
     * @author Ranjan Rahi
     * @version 1.0*/

      public function updateuserprofilepic(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'profile_image'=> 'required',
    
          ]);


        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please choose profile image.', 'dev_message' => json_encode($validator->errors()),"type" => 'ERROR', "code" => 0]);
        }
        else{
            $countuser =  users_Model::where(['id' =>$userId])->count();
            if($countuser >0){
                //updating user
                users_Model::where(array('id' => $userId))
                ->update(
                    array(
                        'profile_image'=> $request->input('profile_image'),
                        'updated_at' =>date('Y-m-d H:i:s')

                      )
                );
                
               return response()->json(['payload' => new \stdClass(), "message" => 'Profile Picture updated successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
                }
            
            }
        }


    /**
     * @package API
     * @class ApiController
     * @function usersocialProfile
     * @author Ranjan Rahi
     * @version 1.0*/
      
   public function updateusersocialProfile(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'user_id'  => 'required',
          ]);

        if($userId != $request->user_id){
        return response()->json(['payload' => new \stdClass(), "message" => 'User id not exists.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }

        else{
          
            $socialprofile = Social_Media_Model::where(array('user_id' => $userId))->count();
            if($socialprofile > 0){
              Social_Media_Model::where(array('user_id' => $userId))
                ->update(
                    array(
                    'facebook_url'=> $request->input('facebook_url'),
                    'twitter_url'=> $request->input('twitter_url'),
                    'linkedin_url' => $request->input('linkedin_url'),
                    'instagram_url' => $request->input('instagram_url'),
                    'youtube_url' => $request->input('youtube_url'),
                    'updated_at' =>date('Y-m-d H:i:s')
                     )
                );
               return response()->json(['payload' => new \stdClass(), "message" => 'Social Profile updated successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
                }

              else{
                 Social_Media_Model::insert(
                    array(
                    'user_id'=> $userId,   
                    'facebook_url'=> $request->input('facebook_url'),
                    'twitter_url'=> $request->input('twitter_url'),
                    'linkedin_url' => $request->input('linkedin_url'),
                    'instagram_url' => $request->input('instagram_url'),
                    'youtube_url' => $request->input('youtube_url'),
                      )
                );
                 return response()->json(['payload' => new \stdClass(), "message" => 'Social Profile created successfully.', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);
                }

              }
           
            }
   
     /**
     * @package API
     * @class ApiController
     * @function usersocialProfile
     * @author Ranjan Rahi
     * @version 1.0*/

   public function usersocialProfile(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'user_id'  => 'required',
          ]);

        if($userId != $request->user_id){
        return response()->json(['payload' => new \stdClass(), "message" => 'User id not exists.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }

        else{
           
            $socialprofile = Social_Media_Model::select('id','facebook_url','twitter_url','linkedin_url','linkedin_url','instagram_url','youtube_url')
             ->where(array('user_id' => $userId))->first();


            if(isset($socialprofile)){  
            $socialprofile->id = empty($socialprofile->id) ? "" :$socialprofile->id;
            $socialprofile->facebook_url = empty($socialprofile->facebook_url) ? "" :$socialprofile->facebook_url;
            $socialprofile->twitter_url = empty($socialprofile->twitter_url) ? "" :$socialprofile->twitter_url;
            $socialprofile->linkedin_url = empty($socialprofile->linkedin_url) ? "" :$socialprofile->linkedin_url;
            $socialprofile->instagram_url = empty($socialprofile->instagram_url) ? "" :$socialprofile->instagram_url;
            $socialprofile->youtube_url = empty($socialprofile->youtube_url) ? "" :$socialprofile->youtube_url;

            /*foreach ($socialprofile as $key => $value) {
                     $arrayName[] = array(
                    'id'=> $value->id,
                    'facebook_url' => empty($value->facebook_url) ? "" :$value->facebook_url,
                    'twitter_url' =>empty($value->twitter_url) ? "" :$value->twitter_url,
                    'linkedin_url' =>empty($value->linkedin_url) ? "" :$value->linkedin_url,
                    'instagram_url' =>empty($value->instagram_url) ? "" :$value->instagram_url,
                    'youtube_url' =>empty($value->youtube_url) ? "" :$value->youtube_url
                    );
                 }*/
                 return response()->json(['payload' => $socialprofile, "message" => 'User Profile Details.', 'dev_message' => 'User social Profile Details.', "type" => 'SUCCESS', "code" => 1]);
            }
            else{
                return response()->json(['payload' => [], "message" => 'Data not exists.', 'dev_message' =>'', "type" => 'ERROR', "code" => 0]);
            }

             
        }

   }


 
     /**
     * @package API
     * @class ApiController
     * @function usersettings
     * @author Ranjan Rahi
     * @version 1.0*/

       public function updateusersettings(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(), [
                    'user_id'  => 'required',
                    'passport' => 'required',
          ]);

        if($userId != $request->user_id){
        return response()->json(['payload' => new \stdClass(), "message" => 'User id not exists.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please select passport option.', 'dev_message' => json_encode($validator->errors()),"type" => 'ERROR', "code" => 0]);
        }

        else{

            $usersettings = User_Settings_Model::where(array('user_id' => $userId))->count();
            if($usersettings > 0){
              User_Settings_Model::where(array('user_id' => $userId))
                ->update(
                    array(
                    'passport'=> $request->input('passport'),
                    'country'=> $request->input('country'),
                    'province' => $request->input('province'),
                    'public' => $request->input('public'),
                    'ghost' => $request->input('ghost'),
                    'business' => $request->input('business'),
                    'radius' => $request->input('radius'),
                    'age' => $request->input('age'),
                    'updated_at' =>date('Y-m-d H:i:s')
                     )
                );
               return response()->json(['payload' => new \stdClass(), "message" => 'updated successfully.', 'dev_message' => 'updated successfully', "type" => 'SUCCESS', "code" => 1]);
                }

              else{
                 User_Settings_Model::insert(
                    array(
                    'user_id'=> $userId,   
                    'passport'=> $request->input('passport'),
                    'country'=> $request->input('country'),
                    'province' => $request->input('province'),
                    'public' => $request->input('public'),
                    'ghost' => $request->input('ghost'),
                    'business' => $request->input('business'),
                    'radius' => $request->input('radius'),
                    'age' => $request->input('age'),
                  )
                );
                 return response()->json(['payload' => new \stdClass(), "message" => 'saved successfully.', 'dev_message' => 'saved successfully', "type" => 'SUCCESS', "code" => 1]);
                }
           
        }

   }


   /**
     * @package API
     * @class ApiController
     * @function usersocialProfile
     * @author Ranjan Rahi
     * @version 1.0*/

   public function usersettings(Request $request) {
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;

        $validator = Validator::make($request->all(),[
            'user_id'  => 'required',
          ]);

        if($userId != $request->user_id){
        return response()->json(['payload' => new \stdClass(), "message" => 'User id not exists.', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }

        else{
           
        $usersettings = User_Settings_Model::select('id','passport','country','province','public','ghost','business','radius','age')
             ->where(array('user_id' => $userId))
             ->first();

            if(isset($usersettings)){  
            $usersettings->id = empty($usersettings->id) ? "" :$usersettings->id;
            $usersettings->passport = empty($usersettings->passport) ? "" :$usersettings->passport;
            $usersettings->country = empty($usersettings->country) ? "" :$usersettings->country;
            $usersettings->province = empty($usersettings->province) ? "" :$usersettings->province;
            $usersettings->public = empty($usersettings->public) ? "" :$usersettings->public;
            $usersettings->ghost = empty($usersettings->ghost) ? "" :$usersettings->ghost;
            $usersettings->business = empty($usersettings->business) ? "" :$usersettings->business;
            $usersettings->radius = empty($usersettings->radius) ? "" :$usersettings->radius;
            $usersettings->age = empty($usersettings->age) ? "" :$usersettings->age;

            return response()->json(['payload' => $usersettings, "message" => 'User setting Details.', 'dev_message' => 'User setting Details.', "type" => 'SUCCESS', "code" => 1]);
             }

             else{
                return response()->json(['payload' => [], "message" => 'Data not exists.', 'dev_message' =>'', "type" => 'ERROR', "code" => 0]);     
             }

             
        }

   }


     
 /**
     * @package API
     * @class ApiController
     * @function About
     * @author Ranjan Rahi
     * @version 1.0*/

public function About(){
     $about = Cms_Model::where('type','about')->first();
     $about['content']= stripslashes($about['content']);
        if (!empty($about)) {

            return response()->json(['payload' => $about, "message" => 'About us.', 'dev_message' => 'About us', "type" => 'SUCCESS', "code" => 1]);
        } else {

            return response()->json(['payload' => new \stdClass(), "message" => 'Not found.', 'dev_message' => 'Not found', "type" => 'ERROR', "code" => 0]);
        }

   }


   /**
     * @package API
     * @class ApiController
     * @function About
     * @author Ranjan Rahi
     * @version 1.0*/

public function privacyPolicy(){
     $privacyPolicy = Cms_Model::where(array('type' => 'privacy_policy'))->first();

        if (!empty($privacyPolicy)) {

            return response()->json(['payload' => $privacyPolicy, "message" => 'Privacy Policy.', 'dev_message' => 'About us', "type" => 'SUCCESS', "code" => 1]);
        } else {

        return response()->json(['payload' => new \stdClass(), "message" => 'Not found.', 'dev_message' => 'Not found', "type" => 'ERROR', "code" => 0]);
        }

}

/**
     * @package API
     * @class ApiController
     * @function send Request
     * @author Ranjan Rahi
     * @version 1.0*/
     
  public function friendRequest(Request $request){
    $userDetails = auth('api')->user();
    $userId = $userDetails->id;

    $validator = Validator::make($request->all(), [
                'user_id_from'  => 'required',
                'user_id_to' => 'required'
      ]);

    if ($validator->fails()) {
    return response()->json(['payload' => new \stdClass(), "message" => 'Please enter user id from , user id to', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
    }

    else{

        $user_id_from = $request->user_id_from;
        $user_id_to = $request->user_id_to;
        
        $countfriend = DB::select( DB::raw("SELECT * FROM friends WHERE (user_id_from='$user_id_from' OR user_id_to='$user_id_from') AND (user_id_from='$user_id_to' OR user_id_to='$user_id_to')"));

        if(count($countfriend) > 0){
            return response()->json(['payload' => [], "message" => 'Already Requested' , 'dev_message' => 'Already Requested', "type" => 'ERROR', "code" => 0]);

        }

        else{
        

        $friendDataId = Friends_Model::insertGetId(
            array(
                'user_id_from' => $user_id_from,
                'user_id_to' => $user_id_to,
                'status' => 'send'
              )
        );
        
        $userIfo = Users_Model::find($user_id_to)->toArray();
        $userfrom = Users_Model::find($userId)->toArray();

        $usermsg =$userfrom['first_name'].' '.$userfrom['last_name'].' Wants To Connect With You';
        
        $title = 'Friend Request id #'.$friendDataId;
        $message = 'Your Friend Request is successfully placed';
        $message_type = 'Friend Request';

        if($userIfo['device_type'] =='I'){
        $iosPush = notificationI($userIfo['device_token'], $message, $title, $usermsg,$message_type,$friendDataId,'user_notification');

        $notificationArr = array(
            'device_token' => $userIfo['device_token'],
            'device_type' => $userIfo['device_type'],
            'user_id' => $userId,
            'title' => $title,
            'message' => $message,
            'message_type' => $message_type
        );
        DB::table('notifications_log')->insert($notificationArr);
        }

        if($userIfo['device_type'] =='A'){
            
            $androidPush = notificationA($userIfo['device_token'], $message, $title, $usermsg,$message_type, $friendDataId,'user_notification');   
            $notificationArr = array(
                    'device_token' => $userIfo['device_token'],
                    'device_type' => $userIfo['device_type'],
                    'user_id' => $userId,
                    'title' => $title,
                    'message' => $message,
                    'message_type' => $message_type
                );
        DB::table('notifications_log')->insert($notificationArr);
        }

        return response()->json(['payload' => new \stdClass(), "message" => 'Request send Successfully', 'dev_message' => 'Request send Successfully', "type" => 'SUCCESS', "code" => 1]);
     }
    }

  }






   /**
     * @package API
     * @class ApiController
     * @function Friend lists
     * @author Ranjan Rahi
     * @version 1.0*/
    
    public function friendlist(Request $request){ 
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
        
        $validator = Validator::make($request->all(), [
            'user_id'  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please user_id user id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
        
        else{
            $user_id = $request->user_id;

            $userinfo = Users_Model::where('id',$user_id)->first();
            $current_longitude = $userinfo->lng;
            $current_latitude = $userinfo->lat;


            $first_query = DB::table('friends as F')
            ->leftJoin('users as U', 'F.user_id_from', '=', 'U.id')
            ->leftJoin('user_details as ud', 'F.user_id_from', '=', 'ud.user_id')
            ->leftJoin('social_media as sm', 'F.user_id_from', '=', 'sm.user_id')
            ->select('F.id','U.id as uid','F.user_id_from as fid','U.profile_image','U.first_name','U.last_name','U.lat','U.lng','ud.dob','ud.location','ud.marital_status','ud.designation','ud.website','sm.facebook_url','sm.twitter_url','sm.linkedin_url','sm.instagram_url','sm.youtube_url')    
            ->where('F.user_id_to','=',$user_id)
            ->where('F.status', '=', 'friend');
              

            $connected = DB::table('friends as F')
            ->leftJoin('users as U', 'F.user_id_to', '=', 'U.id')
            ->leftJoin('user_details as ud', 'F.user_id_to', '=', 'ud.user_id')
            ->leftJoin('social_media as sm', 'F.user_id_to', '=', 'sm.user_id')
            ->select('F.id','U.id as uid','F.user_id_to as fid','U.profile_image','U.first_name','U.last_name','U.lat','U.lng','ud.dob','ud.location','ud.marital_status','ud.designation','ud.website','sm.facebook_url','sm.twitter_url','sm.linkedin_url','sm.instagram_url','sm.youtube_url')  
                        ->where('F.user_id_from','=',$user_id)
                        ->where('F.status', '=', 'friend')
                        ->union($first_query)
                        ->get();

            $total_friends = sizeof($connected);            
           
            $friends =array();
            foreach($connected as $val){
                        $distance =$this->haversineGreatCircleDistance($current_latitude, $current_longitude, $val->lat, $val->lng);
                        $distance =number_format($distance,2);
                     
                        $friends[]=array(
                                 'id'=>$val->id,
                                 'user_id' => $val->uid,
                                 'fid' => $val->fid,
                                 'first_name' => $val->first_name,
                                 'last_name' => $val->last_name,
                                 'profile_image' => $val->profile_image,
                                 'dob'=>$val->dob,
                                 'location'=>$val->location,
                                 'marital_status'=>$val->marital_status,
                                 'designation'=>$val->designation,
                                 'website'=>$val->website,
                                'facebook_url'=>$val->facebook_url,
                                'twitter_url'=>$val->twitter_url,
                                'linkedin_url'=>$val->linkedin_url,
                                'instagram_url'=>$val->instagram_url,
                                'youtube_url'=>$val->youtube_url,
                                 'distance' =>$distance
                        );
             }           
            

             //DB::enableQueryLog();
            $requested = Friends_Model::select('friends.id','users.id as user_id','friends.user_id_from as fid','users.first_name','users.last_name','users.profile_image')
                        ->join('users','users.id','=','friends.user_id_from')
                        ->where('friends.user_id_to',$user_id)
                        ->where('friends.status','send')
                        ->get();
            //print_r(DB::getQueryLog()); die;
            
            
            $pending =  Friends_Model::select('friends.id','users.id as user_id','friends.user_id_to as fid','users.first_name','users.last_name','users.profile_image')
                        ->join('users','users.id','=','friends.user_id_to')
                        ->where('friends.user_id_from',$user_id)
                        ->where('friends.status','send')
                        ->get();
            
            
            if(isset($requested) || isset($pending) || isset($friends)){
              
            return response()->json(['payload'=>['connections'=>$total_friends,'connected' => $friends,'requested' => $requested,'pending'=>$pending], "message" => 'Friends List', 'dev_message' => 'Friends List', "type" => 'SUCCESS', "code" => 1]);
            }

            else{
            return response()->json(['payload' => [], "message" => 'No Friends Found.', 'dev_message' =>'', "type" => 'ERROR', "code" => 0]);   

            }
                         
        }

    }
    /**
     * @package API
     * @class ApiController
     * @function update status
     * @author Ranjan Rahi
     * @version 1.0*/

     public function updatefriendstatus(Request $request ){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
        
        $validator = Validator::make($request->all(), [
            'id'  => 'required',
            'status' => 'required'

        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please id and status', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
        else{
            $id= $request->id;
            $status = $request->status;
        
        $user_to = Friends_Model::where('id',$id)->first();
        $user_id_from = $user_to->user_id_from;

        // getting user name 
        $userfrom = Users_Model::find($user_id_from)->toArray();

       
         Friends_Model::where(array('id' => $id))->update(
            array(
                'status'=>$status,
                'updated_at'=>date('Y-m-d H:i:s')
                  
            )
            );        
        $userIfo = Users_Model::find($userId)->toArray();

        
        if($status =='send')
            {
        
        $usermsg =$userIfo['first_name'].' '.$userIfo['last_name'].' Wants To Connect With You';
              	
        $title = 'Friend Request id #'.$id;
        $message = 'Your Friend Request is successfully placed';
        $message_type = 'Friend Request';

        if($userfrom['device_type'] =='I'){
        $iosPush = notificationI($userfrom['device_token'], $message, $title,$usermsg,$message_type,$id,'user_notification');

        $notificationArr = array(
            'device_token' => $userfrom['device_token'],
            'device_type' => $userfrom['device_type'],
            'user_id' => $userfrom['id'],
            'title' => $title,
            'message' => $message,
            'message_type' => $message_type
        );
        DB::table('notifications_log')->insert($notificationArr);
        }

        if($userfrom['device_type'] =='A'){
            
            $androidPush = notificationA($userfrom['device_token'], $message, $title,$usermsg, $message_type, $id,'user_notification');   
            $notificationArr = array(
                    'device_token' => $userfrom['device_token'],
                    'device_type' => $userfrom['device_type'],
                    'user_id' => $userfrom['id'],
                    'title' => $title,
                    'message' => $message,
                    'message_type' => $message_type
                );
        DB::table('notifications_log')->insert($notificationArr);
        }

        }
    else if($status =='friend')
        {

    $usermsg =$userIfo['first_name'].' '.$userIfo['last_name'].' Accepted Your Request';
        	
    $title = 'Friend Request id #'.$id;
    $message = 'Your Friend Request is Accepted Successfully';
    $message_type = 'Friend Request Accepted';

    if($userfrom['device_type'] =='I'){
    $iosPush = notificationI($userfrom['device_token'], $message, $title,$usermsg, $message_type, $id,'user_notification');

    $notificationArr = array(
        'device_token' => $userfrom['device_token'],
        'device_type' => $userfrom['device_type'],
        'user_id' => $userfrom['id'],
        'title' => $title,
        'message' => $message,
        'message_type' => $message_type
    );
    DB::table('notifications_log')->insert($notificationArr);
    }

    if($userfrom['device_type'] =='A'){
        
        $androidPush = notificationA($userfrom['device_token'], $message, $title, $usermsg,$message_type, $id,'user_notification');   
        $notificationArr = array(
                'device_token' => $userfrom['device_token'],
                'device_type' => $userfrom['device_type'],
                'user_id' => $userfrom['id'],
                'title' => $title,
                'message' => $message,
                'message_type' => $message_type
            );
    DB::table('notifications_log')->insert($notificationArr);
    }

    }
    else{
    	$usermsg =$userIfo['first_name'].' '.$userIfo['last_name'].' Cancelled Your Request';
    
        $title = 'Friend Request id #'.$id;
        $message = 'Your Friend Request is cancelled';
        $message_type = 'Friend Request Cancelled';
    
        if($userfrom['device_type'] =='I'){
        $iosPush = notificationI($userfrom['device_token'], $message, $title, $usermsg,$message_type, $id,'user_notification');
    
        $notificationArr = array(
            'device_token' => $userfrom['device_token'],
            'device_type' => $userfrom['device_type'],
            'user_id' =>$userfrom['id'],
            'title' => $title,
            'message' => $message,
            'message_type' => $message_type
        );
        DB::table('notifications_log')->insert($notificationArr);
        }
    
        if($userfrom['device_type'] =='A'){
            
            $androidPush = notificationA($userfrom['device_token'], $message, $title,$usermsg, $message_type,$id,'user_notification');   
            $notificationArr = array(
                    'device_token' => $userfrom['device_token'],
                    'device_type' => $userfrom['device_type'],
                    'user_id' => $userfrom['id'],
                    'title' => $title,
                    'message' => $message,
                    'message_type' => $message_type
                );
        DB::table('notifications_log')->insert($notificationArr);
        }

    }

    return response()->json(['payload'=>[], "message" => 'Updated Succesfully', 'dev_message' => 'Friends List', "type" => 'SUCCESS', "code" => 1]);
        }
    }


    /**
     * @package API
     * @class ApiController
     * @function placeheader
     * @author Ranjan Rahi
     * @version 1.0*/

    private function placeheader($place_id,$newTime){
        $place_details =Places_Model::select('place_id','name','type')
            ->where('place_id',$place_id) 
            ->first();
             
            
        $review_details =DB::table('review')

            ->where('place_id',$place_id) 
            ->where('status','ACTIVE')
            ->avg('rating');
            $rating =isset($review_details)?round($review_details,1):0;
      
            $total = DB::table('users')
            ->where('user_type', 'MEMBER')
            ->where('place_id',$place_id) 
            ->where('updated_at','>=',$newTime)
            ->count();

        return array('place_details'=>$place_details,'rating'=>$rating,'total'=>$total);

    }

  /**
     * @package API
     * @class ApiController
     * @function place details
     * @author Ranjan Rahi
     * @version 1.0
     */

     public function placedetails(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
         
        $validator = Validator::make($request->all(), [
            'place_id'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please send place id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
        else{

            $place_id = $request->place_id;
            $newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." -6 minutes"));
            $placeheader = $this->placeheader($place_id,$newTime);
            
            $userinfo = Users_Model::where('id',$userId)->first();
            $current_longitude = $userinfo->lng;
            $current_latitude = $userinfo->lat;
    
             //$placeheader
              
             $first_query = DB::table('friends as F')
             ->leftJoin('users as U', 'F.user_id_from', '=', 'U.id')
             ->leftJoin('user_details as ud', 'F.user_id_from', '=', 'ud.user_id')
             ->leftJoin('social_media as sm', 'F.user_id_from', '=', 'sm.user_id')
             ->select('U.id as uid','F.user_id_from as fid','U.profile_image','U.first_name','U.last_name','U.lat','U.lng','ud.dob','ud.location','ud.marital_status','ud.designation','ud.website','sm.facebook_url','sm.twitter_url','sm.linkedin_url','sm.instagram_url','sm.youtube_url')  
             ->where('F.user_id_to','=',$userId)
             ->where('U.place_id','=',$place_id)
             ->where('U.updated_at','>=',$newTime)
             ->where('F.status', '=', 'friend');
               
    
             $sofo_connection =  DB::table('friends as F')
                         ->leftJoin('users as U', 'F.user_id_to', '=', 'U.id')
                         ->leftJoin('user_details as ud', 'F.user_id_to', '=', 'ud.user_id')
                         ->leftJoin('social_media as sm', 'F.user_id_to', '=', 'sm.user_id')
                         ->select('U.id as uid','F.user_id_to as fid','U.profile_image','U.first_name','U.last_name','U.lat','U.lng','ud.dob','ud.location','ud.marital_status','ud.designation','ud.website','sm.facebook_url','sm.twitter_url','sm.linkedin_url','sm.instagram_url','sm.youtube_url')  
                         ->where('F.user_id_from','=',$userId)
                         ->where('U.place_id','=',$place_id)
                         ->where('U.updated_at','>=',$newTime)
                         ->where('F.status', '=', 'friend')
                         ->union($first_query)
                         ->get();
             $total_friends = sizeof($sofo_connection);

             $friends =array();
             foreach($sofo_connection as $val){
                            $distance =$this->haversineGreatCircleDistance($current_latitude, $current_longitude, $val->lat, $val->lng);
                            $distance =number_format($distance,2);
                         
                            $friends[]=array(
                                     'user_id' =>$val->uid,
                                     'fid' => $val->fid,
                                     'first_name' => $val->first_name,
                                     'last_name' => $val->last_name,
                                     'profile_image' => $val->profile_image,
                                     'dob'=>$val->dob,
                                     'location'=>$val->location,
                                     'marital_status'=>$val->marital_status,
                                     'designation'=>$val->designation,
                                     'website'=>$val->website,
                                     'facebook_url'=>$val->facebook_url,
                                     'twitter_url'=>$val->twitter_url,
                                     'linkedin_url'=>$val->linkedin_url,
                                     'instagram_url'=>$val->instagram_url,
                                     'youtube_url'=>$val->youtube_url,
                                     'distance' =>$distance
                            );
                 }                   
                   

            


            $friendarray = array_column($sofo_connection->toArray(),'fid');
           

            $new_connection =  DB::table('users')
                              ->select('id as fid','profile_image')
                              ->whereNotIn('id',$friendarray)
                              ->where('place_id','=',$place_id)
                              ->where('updated_at','>=',$newTime)
                              ->where('id','!=',$userId)
                              ->get();


            return response()->json(['payload'=>['places'=>$placeheader['place_details'],'rating'=> $placeheader['rating'],'totalpeople'=>$placeheader['total'],'new_connection'=>$new_connection,'sofo_connection' => $friends],'connections'=>$total_friends, "message" => 'Friends List', 'dev_message' => 'Friends List', "type" => 'SUCCESS', "code" => 1]);
            
        }
    }




        /**
     * @package API
     * @class ApiController
     * @function placedata
     * @author Ranjan Rahi
     * @version 1.0*/


        public function placedata(Request $request){
            $userDetails = auth('api')->user();
            $userId = $userDetails->id;
             
            $validator = Validator::make($request->all(), [
                'place_id'  => 'required'
            ]);
    
            if ($validator->fails()) {
                return response()->json(['payload' => new \stdClass(), "message" => 'Please send place id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
            }
            else{
    
                $place_id = $request->place_id;
                $newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." -6 minutes"));
                $placeheader = $this->placeheader($place_id,$newTime);
                
                $checkreview =DB::table('review')
                    ->where('place_id',$place_id)
                    ->where('user_id',$userId)
                    ->count();
                
                $reviewgiven = 0;
                if($checkreview > 0){
                $reviewgiven = 1;
                }
       
                 //$placeheader
                
    
                return response()->json(['payload'=>['places'=>$placeheader['place_details'],'rating'=> $placeheader['rating'],'totalpeople'=>$placeheader['total'],'reviewstatus'=>$reviewgiven], "message" => 'Place Data', 'dev_message' => 'Place Data', "type" => 'SUCCESS', "code" => 1]);
                
            }
        }

  
 /**
     * @package API
     * @class ApiController
     * @function save review
     * @author Ranjan Rahi
     * @version 1.0*/

    public function savereview(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
         
        $validator = Validator::make($request->all(), [
            'place_id'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please send place id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
         else{
            $place_id = $request->place_id;
            $rating = $request->rating;
            $description = $request->description;

            DB::table('review')
                ->insert(
                    array(
                        'user_id'=>$userId,
                        'place_id'=>$place_id,
                        'rating'=>$rating,
                        'description' =>$description
                    )
                    );
            return response()->json(['payload'=>[], "message" => 'Review Added Succesfully', 'dev_message' => 'Friends List', "type" => 'SUCCESS', "code" => 1]);
         }
        
    }


     /**
     * @package API
     * @class ApiController
     * @function show review
     * @author Ranjan Rahi
     * @version 1.0*/

    public function showreview(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
         
        $validator = Validator::make($request->all(), [
            'place_id'  => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please send place id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
         else{
            $place_id = $request->place_id;
            $newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." -6 minutes"));
            $placeheader = $this->placeheader($place_id,$newTime);
              
            $checkreview =DB::table('review')
            ->where('place_id',$place_id)
            ->where('user_id',$userId)
            ->count();
        
            $totalotherreview =DB::table('review')
            ->where('place_id',$place_id)
            ->count();

             $reviewgiven = 0;
             if($checkreview > 0){
              $reviewgiven = 1;
              $totalotherreview = $totalotherreview-1;
             }


            $reviewscount=   DB::select( DB::raw("SELECT a.rating, COUNT(b.rating) totalCount
             FROM
                 (
                   SELECT 1 rating UNION SELECT 2 rating UNION
                   SELECT 3 rating UNION SELECT 4 rating UNION
                   SELECT 5 rating
                 ) a
                 LEFT JOIN (
                     select * from review where place_id='$place_id' and status='ACTIVE') b
                   ON a.rating = b.rating
                    
             GROUP BY a.rating ORDER by a.rating desc"));

            
            $userreviews = DB::table('users')
            ->leftJoin('review', 'review.user_id', '=', 'users.id')
            ->select('users.first_name','users.last_name','users.profile_image','review.rating','review.description','review.created_at') 
            ->where('review.place_id',$place_id) 
            ->where('review.status','ACTIVE')
            ->get();
            
             
            return response()->json(['payload'=>['places'=>$placeheader['place_details'],'rating'=> $placeheader['rating'],'totalpeople'=>$placeheader['total'],'reviewstatus'=>$reviewgiven,'otherreviewscount'=>$totalotherreview,'reviewscount'=>$reviewscount,'userreviews'=>$userreviews], "message" => 'Place Data', 'dev_message' => 'Place Data', "type" => 'SUCCESS', "code" => 1]);
         }
        
    }


  /**
     * @package API
     * @class ApiController
     * @function show review
     * @author Ranjan Rahi
     * @version 1.0*/

    public function chat(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
         
        $validator = Validator::make($request->all(), [
            'sender_userid'  => 'required',
            'reciever_userid'  => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please sender  userid ,reciever userid id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
        else{

            $sender_userid = $request->sender_userid;
            $reciever_userid = $request->reciever_userid;
          
            
            
            $countfriend = DB::select( DB::raw("SELECT session_id,token_id,timestamp FROM chat WHERE (sender_userid='$sender_userid' OR reciever_userid='$sender_userid') AND (sender_userid='$reciever_userid' OR reciever_userid='$reciever_userid')"));
          

            if(count($countfriend)>0){
                $countfriend = $countfriend[0];


                return response()->json(['payload'=> $countfriend, "message" => '', 'dev_message' => '', "type" => 'SUCCESS', "code" => 1]);

            }

            else{

            $API_KEY = '46419972';
            $API_SECRET ='da75b1da4332ccdd69debcbea0b0b4e33462f08b';
                
            $apiObj = new OpenTok($API_KEY, $API_SECRET);    

            $session = $apiObj->createSession(array('mediaMode' => MediaMode::ROUTED));
            $session_id = $session->getSessionId();
            $token = $apiObj->generateToken($session_id);
            
           $chatid= DB::table('chat')->insertGetId(
                array(
                    'sender_userid' =>$sender_userid,
                    'reciever_userid' =>$reciever_userid,
                    'session_id'=>$session_id,
                    'token_id'=>$token
                    )
                 );
           
         $chat = DB::table('chat')->select('session_id','token_id')->where('id',$chatid)->first();       


        return response()->json(['payload'=>$chat, "message" => 'Request sent', 'dev_message' => 'Request sent', "type" => 'SUCCESS', "code" => 1]);
                }
    
        }

    }

    /**
     * @package API
     * @class ApiController
     * @function chat user list
     * @author Ranjan Rahi
     * @version 1.0*/

public function chatuserlist(Request $request){
    $userDetails = auth('api')->user();
    $userId = $userDetails->id;
    
    $validator = Validator::make($request->all(), [
        'user_id'  => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['payload' => new \stdClass(), "message" => 'Please user_id user id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
    }
    
    else{
        $user_id = $request->user_id;
        
        $userinfo = Users_Model::where('id',$user_id)->first();
        $current_longitude = $userinfo->lng;
        $current_latitude = $userinfo->lat;


        
        $first_query = DB::table('chat as c')
            ->leftJoin('users as U', 'c.sender_userid', '=', 'U.id')
            ->select('c.id','c.sender_userid as chatid','U.first_name as first_name','U.last_name as last_name','U.profile_image','U.lng','U.lat')  
            ->where('c.reciever_userid','=',$user_id);
            
              

        $connected = DB::table('chat as c')
                        ->leftJoin('users as U', 'c.reciever_userid', '=', 'U.id')
                        ->select('c.id','c.reciever_userid as chatid','U.first_name as first_name','U.last_name as last_name','U.profile_image','U.lng','U.lat')
                        ->where('c.sender_userid','=',$user_id)
                        ->union($first_query)
                        ->get();
       
        if(isset($connected)){
         
         
         foreach($connected as $val){
            $distance =$this->haversineGreatCircleDistance($current_latitude, $current_longitude, $val->lat, $val->lng);
            $distance =number_format($distance,2);
     
            $chat[]=array(
                 'id' => $val->id,
                 'chatid' => $val->chatid,
                 'first_name' => $val->first_name,
                 'last_name' => $val->last_name,
                 'profile_image' => $val->profile_image,
                 'distance' =>$distance
            );
         }

          
        return response()->json(['payload'=>['chatlist' => $chat], "message" => 'Chat List', 'dev_message' => 'chat List', "type" => 'SUCCESS', "code" => 1]);
        }

        else{
        return response()->json(['payload' => [], "message" => 'No chat Found.', 'dev_message' =>'', "type" => 'ERROR', "code" => 0]);   

        }
                     
    }

}
      /**
     * @package API
     * @class ApiController
     * @function save chat
     * @author Ranjan Rahi
     * @version 1.0*/

    public function savechat(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
         
        $validator = Validator::make($request->all(), [
            'sender_userid'  => 'required',
            'reciever_userid'  => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please sender  userid ,reciever userid id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
        else{

            $sender_userid = $request->sender_userid;
            $reciever_userid = $request->reciever_userid;
            $message = $request->message;


            $chatId = DB::table('savechats')->insertGetId(
                array(
                    'sender_userid' =>$sender_userid,
                    'reciever_userid' =>$reciever_userid,
                    'message'=>$message
                    )
                 );
            
                 $userIfo = Users_Model::find($reciever_userid)->toArray();
                 $userfrom = Users_Model::find($userId)->toArray();
         
                 $usermsg = $userfrom['first_name'].' '.$userfrom['last_name'].' sends you a chat message';
                 
                 $title = 'chat id #'.$chatId;
                 $message = 'Your chat is successfully placed';
                 $message_type = 'chat message';
         
                 if($userIfo['device_type'] =='I'){
                 $iosPush = cnotificationI($userIfo['device_token'], $message, $title, $sender_userid,$userfrom['first_name'],$userfrom['last_name'],$usermsg,$message_type,$chatId,'user_notification');
         
                 $notificationArr = array(
                     'device_token' => $userIfo['device_token'],
                     'device_type' => $userIfo['device_type'],
                     'user_id' => $userId,
                     'title' => $title,
                     'message' => $message,
                     'message_type' => $message_type
                 );
                 DB::table('notifications_log')->insert($notificationArr);
                 }
         
                 if($userIfo['device_type'] =='A'){
                     
                     $androidPush = cnotificationA($userIfo['device_token'], $message, $title, $sender_userid,$userfrom['first_name'],$userfrom['last_name'],$usermsg,$message_type,$chatId,'user_notification');   
                     $notificationArr = array(
                             'device_token' => $userIfo['device_token'],
                             'device_type' => $userIfo['device_type'],
                             'user_id' => $userId,
                             'title' => $title,
                             'message' => $message,
                             'message_type' => $message_type
                         );
                 DB::table('notifications_log')->insert($notificationArr);
                 }       
            
    
        return response()->json(['payload'=>[], "message" => 'Request sent', 'dev_message' => 'Request sent', "type" => 'SUCCESS', "code" => 1]);
    
        }

    }

    

    /**
     * @package API
     * @class ApiController
     * @function chat history
     * @author Ranjan Rahi
     * @version 1.0*/
      
     public function chathistory(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
         
        $validator = Validator::make($request->all(), [
            'sender_userid'  => 'required',
            'reciever_userid'  => 'required',
            
        ]);

        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please sender  userid ,reciever userid id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }
        else{

            $sender_userid = $request->sender_userid;
            $reciever_userid = $request->reciever_userid;

            $chathistory = DB::select( DB::raw("SELECT sender_userid,reciever_userid,message,created_at FROM savechats WHERE (sender_userid='$sender_userid' OR reciever_userid='$sender_userid') AND (sender_userid='$reciever_userid' OR reciever_userid='$reciever_userid')"));
             
            if(count($chathistory)>0){
                return response()->json(['payload'=>$chathistory, "message" => 'chat messages', 'dev_message' => 'chat messages', "type" => 'SUCCESS', "code" => 1]);

            }
            else{
                return response()->json(['payload'=>[], "message" => 'no messages', 'dev_message' => 'no messages', "type" => 'ERROR', "code" => 0]);

            }


        }

     }

     /**
     * @package API
     * @class ApiController
     * @function notification list
     * @author Ranjan Rahi
     * @version 1.0*/

     public function notificationlist(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
        
        $validator = Validator::make($request->all(), [
            'user_id'  => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please  user id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        }  
        else{
            $user_id = $request->user_id;
            $notification = Notifications_Log_Model::where('user_id', $user_id)->get()->toArray();
            if(count($notification)>0){
                return response()->json(['payload'=>$notification, "message" => 'user notifications', 'dev_message' => 'user notifiaction', "type" => 'SUCCESS', "code" => 1]);
            }
            else{
                return response()->json(['payload'=>[], "message" => 'no notifications', 'dev_message' => 'no notifications', "type" => 'ERROR', "code" => 0]);
            }



        }

     }


 /**
     * @package API
     * @class ApiController
     * @function visited places
     * @author Ranjan Rahi
     * @version 1.0*/

      public function visitedplaces(Request $request){
        $userDetails = auth('api')->user();
        $userId = $userDetails->id;
        
        $validator = Validator::make($request->all(), [
            'user_id'  => 'required',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['payload' => new \stdClass(), "message" => 'Please  user id', 'dev_message' => json_encode($validator->errors()), "type" => 'ERROR', "code" => 0]);
        } 
        
        else{
            $user_id = $request->user_id;

            $visited_places = DB::select( DB::raw("select pp.id,pp.place_id,p.name,pp.created_at as vistedtime from people_at_places as pp inner join places as p on p.place_id = pp.place_id where pp.user_id ='$user_id' and p.status = 'ACTIVE' group by pp.place_id order by pp.created_at desc"));

        if(count($visited_places)>0){
          

         return response()->json(['payload'=> $visited_places, "message" => 'visted  places', 'dev_message' => 'visited places', "type" => 'SUCCESS', "code" => 1]);
           }
           else{
            return response()->json(['payload'=>[], "message" => 'no place found', 'dev_message' => 'no place found', "type" => 'ERROR', "code" => 0]);
           }

        }

     }
    


/**
     * @package API
     * @class ApiController
     * @function FeaturedPlaces
     * @version 1.0*/


     public function FeaturedPlaces() {
      
        $featured_places = Places_Model::where(array('featured' => '0','status'=>'ACTIVE'))
                          ->get(); 
        if(count($featured_places)>0){
            $placeid_array=array();
            $places_array =array();
            foreach($featured_places as $val){
                $places_array[]=array(
                    'lat'=>$val->lat,
                    'lng'=>$val->lng,
                    'icon'=>$val->icon,
                    'name'=>$val->name,
                    'place_id'=>$val->place_id,
                    'rating'=>$val->rating,
                    'vicinity'=>$val->address,
                    'types'=>explode(',',$val->type),
                    'photos'=>$val->image,
                    'photo_reference'=>$val->photo_reference,
                    'totalusers'=>0,
                    'featured' =>$val->featured,
                    'distance' =>$val->distance
                  );

                $placeid_array[]=$val->place_id;

            }

           $newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." -6 minutes"));
           $countuserbyplace = Users_Model::selectRaw('count(1) as cnt,place_id')
                            ->where('updated_at','>=',$newTime)
                            ->where('status','ACTIVE')
                            ->whereIn('place_id',$placeid_array)
                            ->groupBy('place_id')
                            ->get();
            
                            
            $result = $countuserbyplace->pluck('cnt','place_id');                
             
            $i=0;    
            foreach($places_array as $placescount)
            {
                
              if(isset($result[$placescount['place_id']])){
               
                $places_array[$i]['totalusers']=$result[$placescount['place_id']];
        
              }
              $i++;
            }

            return response()->json(['payload'=> $places_array, "message" => 'featured  places', 'dev_message' => 'featured places', "type" => 'SUCCESS', "code" => 1]);

        }  
        else{
            return response()->json(['payload'=>[], "message" => 'no featured places found', 'dev_message' => 'no featured places found', "type" => 'ERROR', "code" => 0]);
        }           
                  
         
    }

    
/********************************************************************************************************************/  
//test push notification
    /*public function test_notification(Request $request){
        $post = $request->input();
        $errorMessage = array();

        if (empty($post['device_id']))
            array_push($errorMessage, "Please enter device id");

        if (!empty($errorMessage)) 
        {
            $response_array = $this->_json_error_response($errorMessage);
        } 
        else 
        {
            $response = notificationA($post['device_id'], 'This is test message','');
            $return["allresponses"] = $response;
            $return = json_encode( $return);
            
            print("\n\nJSON received:\n");
            print_r($response);
            print("\n");
        }
        // return $this->header_response($response_array);
    } */

}

