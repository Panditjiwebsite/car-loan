<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use DB;
use App\Models\Cars_Model;
use App\Models\Dealer_Model;
use App\Member_Model;

class CarsController extends Controller
{

    var $objCarsModel;
    public function __construct()
    {
        $this->objCarsModel = new Cars_Model();
        $this->objMemberModel = new Member_Model();
    }

    /*
     * @Author:          
     * @Last modified:   
     * @Class:           
     * @Function:        <add_cars>
     * @Description:     <>
    */

    public function add_cars(Request $request, $carid = NULL)
    {
        if (empty($carid)) {

         $dealers = Dealer_Model::pluck('name','id');
         return view('admin.cars.add',compact('dealers'));
        }
         // UPDATE CASE
        $carData = Cars_Model::find($carid);
        $dealers = Dealer_Model::pluck('name','id');
        return view('admin.cars.edit', compact('carData','dealers'));
    }


     /*
     * @Class:           <CarsController>
     * @Function:        <saveCars>
     * @Author:         
     * @Created On:      
     * @Last Modified By:
     * @Last Modified:   
     * @Description:     <>
     */

    public function saveCars(Request $request) {
        // pr($request->all());die;

        $requestData = unsetData($request->all(), array('_token'));

        if (empty($request->id)) {

          $car_id = Cars_Model::insertGetId($requestData);

          return redirect(config('constants.ADMIN_URL') . 'listcars/')->with('success_msg', 'Car added successfully.');

        }
        else
        {
            // EDIT

            $carid = $request->id;
            unset($requestData['id']);
            $requestData['updated_at'] =date("Y-m-d H:i:s");
            Cars_Model::where('id', $carid)->update($requestData);

            return redirect(config('constants.ADMIN_URL') . 'addcars/' . $carid)->with('success_msg', 'Car updated successfully.');
        }


    }


    /*
     * @Class:           <CarsController>
     * @Function:        <list_cars>
     * @Author:         
     * @Created On:      
     * @Last Modified By:
     * @Last Modified:   
     * @Description:     <>
     */
    public function list_cars(){
        return view('admin.cars.list');
    }

    public function ajaxListcars(Request $request) {
         $listData = $this->objCarsModel->getCarListDatatable($request->all());
         return response()->json($listData);
    }


        /*
     * @Class:           <CarsController>
     * @Function:        <deletecarimage>
     * @Author:         
     * @Created On:     
     * @Last Modified By:
     * @Last Modified: 
     * @Description:     <>
     */
    public function deletecarimage(Request $request) {
        $carid = $request->id;
        Cars_Model::where('id', $carid)->update(['car_pic'=>'']);
    }


    public function delete_car(Request $request) {
        $deleted_at =date("Y-m-d H:i:s");
        $carid = $request->id;
        Cars_Model::where('id', $carid)->update(['deleted_at'=>'$deleted_at']);
    }

        /*
     * @Class:           <CarsController>
     * @Function:        <carImage>
     * @Author:         
     * @Created On:     
     * @Last Modified By:
     * @Last Modified:  
     * @Description:     <>
     */

    public function carImage(Request $request) {

        if(isset($_POST["car_pic"]))
           {
               $data = $_POST["car_pic"];
               $image_array_1 = explode(";", $data);
               $image_array_2 = explode(",", $image_array_1[1]);
               $data = base64_decode($image_array_2[1]);
               $name ='car-pic-'.time().'.jpg';
               $imageName = config('filelocation.car-pic').$name;
               file_put_contents($imageName, $data);
               $fileUrl = url('/' . $imageName);
               return  '<img src="'.$fileUrl.'" class="img-thumbnail" data-id ="'.$name.'" id="image_name"/>';


          }

   }


   /*
* @Class:           <CarsController>
* @Function:        <deletecarimage>
* @Author:          
* @Created On:      
* @Last Modified By:
* @Last Modified:  
* @Description:     <>
*/
public function deletebrandimage(Request $request) {
   $carid = $request->id;
   Cars_Model::where('id', $carid)->update(['brand_pic'=>'']);
}




   /*
* @Class:           <CarsController>
* @Function:        <carImage>
* @Author:         
* @Created On:     
* @Last Modified By:
* @Last Modified: 
* @Description:     <>
*/

public function brandImage(Request $request) {

   if(isset($_POST["brand_pic"]))
      {
          $data = $_POST["brand_pic"];
          $image_array_1 = explode(";", $data);
          $image_array_2 = explode(",", $image_array_1[1]);
          $data = base64_decode($image_array_2[1]);
          $name ='brand-pic-'.time().'.jpg';
          $imageName = config('filelocation.brand-pic').$name;
          file_put_contents($imageName, $data);
          $fileUrl = url('/' . $imageName);
          return  '<img src="'.$fileUrl.'" class="img-thumbnail" data-id ="'.$name.'" id="bimage_name"/>';


     }

}


   /*
     * @Class:           <CarsController>
     * @Function:        <deletecar>
     * @Author:         
     * @Created On:      
     * @Last Modified By:
     * @Last Modified:  
     * @Description:     <>
     */

    public function changecarStatus(Request $request) {
        $carid = $request->id;

        $cardData = Cars_Model::find($carid);
        $cardData['status'] = ($cardData['status'] == 1) ? '0' : '1';
        $cardData->save();
    }








    public function save_car_member_section(Request $request){
        
        $user_credentials = session()->all();
        $user_id = $user_credentials['member_data']['id'];

        $carsavedata = $request->all();

        $car_save = new Member_model();
        $car_save->user_id = $user_id;
        $car_save->car_id = $carsavedata['carid'];
        $car_save->save();

        return "Car Saved successfully.";

    }

}
?>
