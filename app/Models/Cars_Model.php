<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use DB;
use Session;

class Cars_Model extends Model {
	use SoftDeletes;

    protected $table;
    protected $tbldealers;
    private  $tblhotel;
    protected $fillable = [];
    protected $primaryKey = 'id';


    public function __construct() {
        $this->table = config('tables.tblcars');
        
     }


    // SITE AJAX LIST

       private function getCarListDatatableQuery($data) {

        // IF Filter Form to Get Data than working
        if(isset($data['formData'])){
            $formDataLength = count($data['formData']);

            if($formDataLength != 0){

                // * Dynamic Value from filter form * //
                $f_postcode         =       !empty($data['formData']['0']['value']) ? $data['formData']['0']['value'] : '';
                $f_distance         =       !empty($data['formData']['1']['value']) ? $data['formData']['1']['value'] : '';
                $f_first_price      =       !empty($data['formData']['2']['value']) ? $data['formData']['2']['value'] : '';
                $f_second_price     =       !empty($data['formData']['3']['value']) ? $data['formData']['3']['value'] : '';
                $f_first_age        =       !empty($data['formData']['4']['value']) ? $data['formData']['4']['value'] : '';
                $f_second_age       =       !empty($data['formData']['5']['value']) ? $data['formData']['5']['value'] : '';
                $f_first_mileage    =       !empty($data['formData']['6']['value']) ? $data['formData']['6']['value'] : '';
                $f_second_mileage   =       !empty($data['formData']['7']['value']) ? $data['formData']['7']['value'] : '';

                // * Static Value for Testing * //
                // $f_postcode = "se136uh";      // HOLD
                // $f_distance = "national";     // HOLD
                // $f_first_price = "20";
                // $f_second_price = "5000000";
                // $f_first_age = "0";
                // $f_second_age = "4";
                // $f_first_mileage = "3000";
                // $f_second_mileage = "9044";

                $query = DB::table($this->table . ' AS C');


                if(!empty($f_first_price)){
                    $query->where("price",">=", $f_first_price);
                }
                if(!empty($f_second_price)){
                    $query->where("price","<=", $f_second_price);
                }
                if(!empty($f_first_age)){
                    $year = date('Y');
                    $y1 = $year-$f_first_age;
                    $query->where("year",">=", $y1);
                }
                if(!empty($f_second_age)){
                    $year = date('Y');
                    $y2 = $year-$f_second_age;
                    $query->where("year","<=", $y2);
                }
                if(!empty($f_first_mileage)){
                    $query->where("mileage",">=", $f_first_mileage);
                }
                if(!empty($f_second_mileage)){
                    $query->where("mileage","<=", $f_second_mileage);
                }

        // Ranjan Sir Code - start
                // if($f_first_price){
                //     $query->where("price",">=", $f_first_price);
                // }
                // if($f_second_price){
                //     $query->where("price","<=", $f_second_price);
                // }
                // if($f_first_age){
                //     $year = date('Y');
                //     $y1 = $year-$f_first_age;
                //     $query->where("year",">=", $y1);
                // }
                // if($f_second_age){
                //     $year = date('Y');
                //     $y2 = $year-$f_second_age;
                //     $query->where("year","<=", $y2);
                // }
        // Ranjan Sir Code - end
                
                $query->whereNull('C.deleted_at');
                // die;
            }

        }
        else{
             // IF not Get Filter Form data
             $query = DB::table($this->table . ' AS C');
             $query->whereNull('C.deleted_at');
        }
            


       
    

   

     
        // ORDER BY
        if (isset($data['sort']['field'])) {
            $query->orderBy($data['sort']['field'], $data['sort']['sort']);
        } else {
            $query->orderBy('C.id', 'DESC');
        }
        return $query;
    }

    






    public function getCarListDatatable($data) {


        $page = !empty($data['page']) ? $data['page'] : 1;
        $perPage = !empty($data['perPage']) ? $data['perPage'] : 10;
        $start = (($page - 1) * $perPage);

        $query = $this->getCarListDatatableQuery($data);

        $query->offset($start);
        $query->limit($perPage);
        $items = $query->get();

        $totalRecords = $this->getCarListDatatableFilteredCount($data);
        $finalArray['meta'] = array(
            'page' => $page,
            'pages' => ceil($totalRecords / $perPage),
            'perpage' => (int) $perPage,
            'total' => (int) $totalRecords,
                //'sort' => 'desc',
                //'field' => 'health_tip_id'
        );
        $finalArray['data'] = $items;
        $finalArray['filterForm'] = !empty($data['formData']) ? $data['formData'] : "No Data";

        // pr(DB::getQueryLog());exit;
        // pr($items);exit;

        return $finalArray;
    }







    function getCarListDatatableFilteredCount($data) {
        return $this->getCarListDatatableQuery($data)->count();
    }

	}