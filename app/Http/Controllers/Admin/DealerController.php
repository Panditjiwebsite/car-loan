<?php

/**
* Car Class
*
* @package Admin
* @author Ranjan Rahi
* @version 1.0
* @description CarController
*/


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use DB;
use App\Models\Dealer_Model;


class DealerController extends Controller
{

    var $objDealerModel;
    public function __construct()
    {
        $this->objDealerModel = new Dealer_Model();
    }

    /*
     * @Author:          ATUL SINGH KHATRI
     * @Last modified:   <26-08-2019>
     * @Class:           <DealerController>
     * @Function:        <add_dealer>
     * @Description:     <>
    */

    public function add_dealer(Request $request, $id = NULL)
    {
        if (empty($id)) {
         return view('admin.dealers.add');
        }
         // UPDATE CASE 
        $dealerData = Dealer_Model::find($id);
        return view('admin.dealers.edit', compact('dealerData'));
    }



     /*
     * @Class:           <DealerController>
     * @Function:        <ajaxCheckName>
     * @Author:          Rishikesh Singh
     * @Created On:      <17-08-2018>
     * @Last Modified By:Rishikesh Singh
     * @Last Modified:   <04-09-2018>
     * @Description:     <>
     */

    public function ajaxCheckName(Request $request) {
        $name = $request->dealer;

        $data = Dealer_Model::where('name',$name)->first();
        if($data)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }



     /*
     * @Class:           <DealerController>
     * @Function:        <saveDealers>
     * @Author:         Rishikesh Singh
     * @Created On:      <17-08-2018>
     * @Last Modified By:Rishikesh Singh
     * @Last Modified:   <04-09-2018>
     * @Description:     <>
     */

    public function saveDealer(Request $request) {
        // /pr($request->all());die;

        $requestData = unsetData($request->all(), array('_token'));
       
        if (empty($request->id)) {
           
          $dealer_id = Dealer_Model::insertGetId($requestData);
      
          return redirect(config('constants.ADMIN_URL') . 'listdealers/')->with('success_msg', 'Dealer added successfully.');
            
        } 
        else 
        {
            // EDIT

            $id = $request->id;
            unset($requestData['id']);
            $requestData['updated_at'] =date("Y-m-d H:i:s");
            Dealer_Model::where('id', $id)->update($requestData);
    
            return redirect(config('constants.ADMIN_URL') . 'adddealer/' . $id)->with('success_msg', 'Dealer updated successfully.');
        }

      
    }


    /*
     * @Class:           <DealerController>
     * @Function:        <list_dealers>
     * @Author:         Rishikesh Singh
     * @Created On:      <17-08-2018>
     * @Last Modified By:Rishikesh Singh
     * @Last Modified:   <04-09-2018>
     * @Description:     <>
     */
    public function list_dealers(){
        return view('admin.dealers.list');
    }
 
    public function ajaxListdealers(Request $request) {
         $listData = $this->objDealerModel->getDealerListDatatable($request->all());
         return response()->json($listData);
    }


        /*
     * @Class:           <DealerController>
     * @Function:        <deletedealerimage>
     * @Author:          Rishikesh Singh
     * @Created On:      <25-10-2018>
     * @Last Modified By:Rishikesh Singh
     * @Last Modified:  <25-10-2018>
     * @Description:     <>
     */
    public function deletedealerimage(Request $request) {
        $id = $request->id;
        Dealer_Model::where('id', $id)->update(['dealer_pic'=>'']);
    }
    

    public function delete_dealer(Request $request) {
        $id = $request->id;
        $requestData['deleted_at'] =date("Y-m-d H:i:s");
        Dealer_Model::where('id', $id)->update($requestData);      
      }
   
        /*
     * @Class:           <DealerController>
     * @Function:        <dealerImage>
     * @Author:          Rishikesh Singh
     * @Created On:      <25-10-2018>
     * @Last Modified By:Rishikesh Singh
     * @Last Modified:  <25-10-2018>
     * @Description:     <>
     */

    public function dealerImage(Request $request) {
           
        if(isset($_POST["dealer_pic"]))
           {
               $data = $_POST["dealer_pic"];
               $image_array_1 = explode(";", $data);
               $image_array_2 = explode(",", $image_array_1[1]);
               $data = base64_decode($image_array_2[1]);
               $name ='dealer-pic-'.time().'.jpg';     
               $imageName = config('filelocation.dealer-pic').$name;    
               file_put_contents($imageName, $data);
               $fileUrl = url('/' . $imageName);
               return  '<img src="'.$fileUrl.'" class="img-thumbnail" data-id ="'.$name.'" id="image_name"/>';
               
          }

   }
    /*
     * @Class:           <DealerController>
     * @Function:        <changecarStatus>
     * @Author:          Rishikesh Singh
     * @Created On:      <25-10-2018>
     * @Last Modified By:Rishikesh Singh
     * @Last Modified:  <25-10-2018>
     * @Description:     <>
     */

    public function changedealerStatus(Request $request) {
        $id = $request->id;
        $dealerData = Dealer_Model::find($id);
        $dealerData['status'] = ($dealerData['status'] == 1) ? '0' : '1';
        $dealerData->save();
    }
   
    

   
}

?>