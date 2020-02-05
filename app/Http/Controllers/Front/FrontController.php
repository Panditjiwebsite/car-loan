<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Cookie;
use Helpers;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use \App\Mail\SendMail;
// use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        
        $carslist =  DB::table('cars')
                     ->whereNull('deleted_at')
                     ->get();
        //dd($carslist);
        return view('front.index',compact('carslist'));
    }




    // This is for demo | email check send or not
   public function mailsendtest(){
    $email = "panditjiwebsite@gmail.com";
    $password = "abc123";

    $details = [
      'fname' => "sachin",
      'lname' => "sharma",
      'email' => $email,
      'password' => $password
    ];

    echo "your demo email send : panditjiwebsite@gmail.com";
 \Mail::to($email)->send(new SendMail($details));

  }




    public function quoteRequest(Request $request)
    {
        $amount = $request->amount;
        return view('front.get-quote-form',compact('amount'));
    }

     public function saveDetails(Request $request)
    {

      $validatedData = $request->validate([
        'first_name' => 'required',
        'last_name'=>'required',
        'email'=>'required|email',
        'phone'=>'required|numeric',
        'day'=>'required',
        'month'=>'required',
        'year'=>'required',
        'addresses'=>'required',
        'flat_no'=>'required',
        'building_no'=>'required',
        'locality'=>'required',
        'addr_address_one'=>'required',
        'borrow_money'=>'required|numeric',
        'vehicle_type'=>'required',
        'marital_status'=>'required',
        'dl_type'=>'required',
        'addressyear'=>'required',
        'addressmonth'=>'required',
        'rental_status'=>'required',
        'employee_status'=>'required',
        'employee_status'=>'required',
        'addr_town_or_city'=>'required',
        'addr_country'=>'required',
        'building_name'=>'required',
        'street'=>'required',
        'postal_code'=>'required',
        'financial_info'=>'required',
    ]);

      // Random password generator - str
      function randomPassword($n) { 
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
          $randomString = ''; 
          for ($i = 0; $i < $n; $i++) { 
              $index = rand(0, strlen($characters) - 1); 
              $randomString .= $characters[$index]; 
          }
          return $randomString; 
      }
      $random_password =  randomPassword(6);
      $random_password_hashed = getPasswordHashed($random_password);
      // Random password generator - end

            $title = $request->title;
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $email = $request->email;
            $phone = $request->phone;
            $day = $request->day;
            $month = $request->month;
            $year = $request->year;
            $notifybyemail = $request->notifybyemail;
            $notifybysms = $request->notifybysms;

            $user_table_save = ['title' => $title , 'first_name' => $first_name,'last_name'=>$last_name,'email'=>$email,'phone'=>$phone, 'password'=>$random_password_hashed];

            $useradd = DB::table('users')->insertGetId($user_table_save);

                      $dob= $year.'-'.$month.'-'.$day;
                      $requestData['user_id'] = $useradd;
                      $requestData['dob'] = $dob;
                      $addresses = $request->addresses;
                      $requestData['flat_no'] =$request->flat_no;
                      $requestData['building_no'] =$request->building_no;
                      $requestData['locality'] =$request->locality;

                      $requestData['address_one'] =$request->addr_address_one;
                      $requestData['address_two'] =$request->addr_address_two;              // not required
                      $requestData['address_three'] =$request->addr_address_three;          // not required
                      $requestData['borrow_money'] =$request->borrow_money;
                      $requestData['vehicle_type'] =$request->vehicle_type;
                      $requestData['marital_status'] =$request->marital_status;
                      $requestData['dl_type'] =$request->dl_type;
                      $requestData['address_year'] =$request->addressyear;
                      $requestData['address_month'] =$request->addressmonth;
                      $requestData['rental_status'] =$request->rental_status;
                      $requestData['employee_status'] =$request->employee_status;
                      $requestData['notifybyemail'] =$request->notifybyemail;               // not required
                      $requestData['notifybysms'] =$request->notifybysms;                   // not required
                      $requestData['financial_info'] =$request->financial_info;

                      $requestData['city'] =$request->addr_town_or_city;
                      $requestData['country'] =$request->addr_country;
                      $requestData['building_name'] =$request->building_name;
                      $requestData['street'] =$request->street;
                      $requestData['postal_code'] = $request->postal_code;
                      $requestData['latitude'] = $request->getaddress_latitude;
                      $requestData['longitude'] = $request->getaddress_longitude;


// Send Email - Start
                      $details = [
                        'fname' => $first_name,
                        'lname' => $last_name,
                        'email' => $email,
                        'password' => $random_password
                      ];
            
                    \Mail::to($email)->send(new SendMail($details));
// Send Email - End

                      DB::table('user_details')->insert($requestData);
                      return redirect('/')->with('success_msg', 'Request successfully.');        
  
    }
    
    public function email_template_view(){
      return view('mails.email_template');
    }

    public function findaddress(Request $request){
      $postalcode =$request->postalcode;
      $address = DB::table('user_details')->selectRaw("CONCAT(building_name,',',street,',',city) as address")->where('postal_code',$postalcode)
        ->get();
       return json_encode($address);

    }


    public function checkemail(Request $request){
       $email = $request->email;

        $data = DB::table('users')->where('email',$email)->first();
        if($data)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }




  public function about_us(){
     return view('front.about-us');
   }

   public function our_process(){
     return view('front.our-process');
   }

   public function finance_calculator(){
     return view('front.finance-calculator');
   }

   public function best_first_car_deals(){
     return view('front.who-we-are');
   }

   public function faq(){
     return view('front.faq');
   }

   public function contact_us(){
     return view('front.contact-us');
   }
   
   public function our_complaints(){
     return view('front.our-complaints-procedure');
   }

   public function help_advice(){
     return view('front.help-advice');
   }

   public function privacy_policy(){
    return view('front.privacy-policy');
  }

  public function terms_and_conditions(){
    return view('front.terms-and-conditions');
  }
  
  
}